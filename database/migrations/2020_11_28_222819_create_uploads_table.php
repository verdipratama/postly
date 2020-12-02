<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id('id_upload'); // auto primary id

            // cara pertama
            // belongtoUser dan user ada banyak post
            // $table->integer('user_id')->unsigned()->index();

            //cara kedua
            // refrence otomatis user_id di database level
            // cascade = jika menghapus user, post juga akan terhapus
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('caption');
            $table->timestamps(); // otomatis membuat create_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uploads');
    }
}