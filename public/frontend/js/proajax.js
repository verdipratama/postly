var $proElement = $('.pro-ajax');

// If it's a form
$proElement.submit(function (e) {
    e.preventDefault();
    $(this).proAjax();
});

// If it's a link...
$proElement.click(function (e) {
    if (!$(this).is('form')) {
        e.preventDefault();
        $(this).proAjax();
    }
});

var ProAjaxConfig = {};
(function ($) {

    $.fn.proAjax = function (options) {

        // If you want one default Alert element for all alerts, you can put the Element here.
        // All alert messages will be displayed in this element, unless overwritten by a 'data-pro-alert' attribute.
        // How is it useful? If you have one single alert element at the top of your page for all alerts.
        // When is this not useful? If you launch a form in a bootstrap modal, for instance, and need to display
        // the alert at the top of the modal, not the top of the page.
        // Uncomment this to set the settings
        ProAjaxConfig.defaultAlertElement = $('#YOUR-ALERT-ELEMENT-ID-HERE');

        // Get the element
        var $this = $(this);

        // The proURL is the URL that can be provided if the user does not want the ProURL to be the same as
        // the default URL - like action in <form>, or href in <a>
        // In case of this, a data attribute with 'data-pro-url' can be provided with the URL.
        var proURL = $this.attr('data-pro-url');

        // The default URL - action in <form>, or href in <a>
        var defaultURL;

        // Is this element a form?
        if ($this.is('form')) {
            defaultURL = $this.attr('action');
            // Is this element an anchor tag?
        } else if ($this.is('a')) {
            defaultURL = $this.attr('href');
            // Is this element a button? If it is, it must have a proURL attribute
            // e.g. -> data-pro-url="/url-to-ajax"
        } else if ($this.is('button')) {
            defaultURL = false;
        }

        // If the pro URL is not set, then the default url is whatever URL the ajax request was supposed to request
        if (!proURL) {
            proURL = defaultURL;
        }


        var inlineValidationHiddenAttribute = $this.attr('data-pro-inline-validation');
        if (!(typeof inlineValidationHiddenAttribute !== typeof undefined && inlineValidationHiddenAttribute !== false)) {
            inlineValidationHiddenAttribute = -1;
        }

        // This is the easiest way to have default options.
        var proSettings = $.extend({
            // These are the defaults.
            proAjaxURL: proURL,
            beforeAjax: $this.attr('data-pro-before'),
            afterAjax: $this.attr('data-pro-after'),
            alertElement: $this.attr('data-pro-alert'),
            showLoadingIcon: true,
            loadingIcon: 'fa fa-refresh fa-spin',
            proAjaxType: 'post',
            proData: $this.serialize(),
            debug: false,

            hideInlineValidation: $this.attr('data-pro-hide-inline-validation'), // Hide the inline validation,
            ignoreInlineValidation: inlineValidationHiddenAttribute, // ID of elements to not show validation message for
            hideAlert: $this.attr('data-pro-hide-alert')

        }, options);


        if (!proSettings.proAjaxURL && proSettings.debug) {
            console.log('ERROR: URL for ajax not provided! Please ensure that a proper url exists for ProAJAX.');
        }
        proAjaxRequest($this, proSettings);

    };

}(jQuery));

function proAjaxRequest($this, proSettings) {

    var proSubmitButton = $this;

    // If the current element is a form, obvious $this is not a button, so let's find a button
    if ($this.is('form')) {
        proSubmitButton = $this.find('button[type=submit]');
    }

    $.ajax({
        type: $this.attr('method'),
        dataType: 'JSON',
        url: proSettings.proAjaxURL,
        data: proSettings.proData,
        beforeSend: function () {
            if (proSettings.debug) {
                console.log('Sending Ajax Request...');
            }

            if (!proSettings.hideInlineValidation) {
                $('.validation-error-message ').remove();
            }
            $('.form-control').closest('.form-group').removeClass('has-error');


            // Run the method before the ajax request, if any
            if (proSettings.beforeAjax) {
                window[proSettings.beforeAjax]($this);
            }
            if (proSettings.showLoadingIcon) {
                showLoadingIcon();
            }
        },
        success: function (data) {

            // Hide the loading icon and enable submit button
            if (proSettings.showLoadingIcon) {
                hideLoadingIcon();
            }

            if (data.redirect) {
                window.location.href = data.redirect;
            }

            // Display the success message
            successMessage(data);

            // Call the method after a SUCCESSFUL ajax request
            if (proSettings.afterAjax) {
                try {
                    window[proSettings.afterAjax](data, $this);
                } catch (ex) {
                    if (proSettings.debug) {
                        console.log('ERROR:' + proSettings.afterAjax + '() function does not exist. It\'s called after the ajax request for ProAJAX')
                    }
                }
            }


            if (proSettings.debug) {
                console.log('Success ajax request');
            }
        },
        // If there is an error such as validation
        error: function (data) {

            if (proSettings.debug) {
                console.log('Error ajax request');
            }

            if (data.redirect) {
                window.location.href = data.redirect;
            }

            if (proSettings.showLoadingIcon) {
                hideLoadingIcon();
            }

            if (data.status === 200 && data.responseText) {
                successMessage(data);
            } else if (data.responseText) {
                errorMessage(data);
            }
        }
    });


    /**
     * Show the loading icon near the button before doing the ajax request
     */
    function showLoadingIcon() {
        proSubmitButton.attr('disabled', true);
        if ($this.find('i .pro-loading-icon')) {
            proSubmitButton.find('i').hide();
            proSubmitButton.prepend($("<i class='pro-loading-icon " + proSettings.loadingIcon + "'></i>"));
        }
    }

    /**
     * Remove the loading icon from button
     */
    function hideLoadingIcon() {
        proSubmitButton.attr('disabled', false);
        // Hide the loading icon
        proSubmitButton.find('.pro-loading-icon').remove();
        // Show any hidden icons
        proSubmitButton.find('i').show();
    }


    /**
     * Parse and show error message to user that the server sends
     * Also show error message if there are any exceptions thrown to user
     * @param data
     */
    function errorMessage(data) {

        var alertElement = $('#' + proSettings.alertElement);

        var alertHtml = '<div class="alert alert-danger">';

        if (alertElement.length === 0) {
            alertElement = ProAjaxConfig.defaultAlertElement;
        }

        if (data.status === 422) {

            var errors = $.parseJSON(data.responseText);

            // It's laravel 5.5 or above
            if (errors['errors']) {
                errors = errors['errors'];
            }

            alertHtml += '<ul>';

            $.each(errors, function (key, value) {

                var $input = $('.form-control[name=' + key + ']');
                var $inputParent = $input.parent();

                $input.closest('.form-group').addClass('has-error');

                alertHtml += '<li>' + value + '</li>';

                // Add the validation error message as a span
                if (!proSettings.hideInlineValidation) {
                    if ($inputParent.hasClass('input-group')) {
                        $inputParent.after('<span class="help-block validation-error-message">' + value + '</span>');
                    } else {
                        $input.after('<span class="help-block validation-error-message">' + value + '</span>');
                    }
                }

            });

            alertHtml += "</ul>";

        } else if (data.status === 500) {
            alertHtml += 'An unexpected error occurred.';
        } else if (data.status === 403) {
            alertHtml += 'You do not have permission to do that.';
        }
        alertHtml += "</div>";

        if (!proSettings.hideAlert) {
            alertElement.html(alertHtml);
        }
    }

    /**
     * Parse and show success message to user that the server sends
     * @param data
     */
    function successMessage(data) {

        var alertElement = $('#' + proSettings.alertElement);

        if (alertElement.length === 0) {
            alertElement = ProAjaxConfig.defaultAlertElement;
        }
        // Clear the alert element with previous alert messages...
        alertElement.html('');
        // If the server requests no alert to be shown, don't show any alert.
        if (data.redirect) {
            window.location.href = data.redirect;
        }
        if (data.message) {
            var alertHtml = '<div class="alert alert-' + data.type + '">';
            alertHtml += data.message + '</div>';

            if (!proSettings.hideAlert) {
                alertElement.html(alertHtml);
            }
        }
    }
}