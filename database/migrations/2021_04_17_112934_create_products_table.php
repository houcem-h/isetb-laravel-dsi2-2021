<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 70);
            $table->string('description');
            $table->double('unit_price', 10, 3);
            $table->double('msrp', 12, 3);
            $table->enum('size', ['XS', 'S', 'M', 'L', 'XL', '2XL', '3XL']);
            $table->string('color');
            $table->string('picture');
            // $table->unsignedInteger('category_id'); // ou bien
            $table->integer('category_id')->unsigned();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
