<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('author');
            $table->string('publisher');
            $table->string('cover');
            $table->float('price');
            $table->integer('views')->default(0)->unsigned();
            $table->integer('stock')->default(0)->unsigned();
            $table->enum('status', ['PUBLISH', 'DRAFT']);
            $table->integer('created_by');
            $table->integer('updated_by');
            $table->integer('deleted_by');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
