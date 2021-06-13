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
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->date('production_date');
            $table->date('expired')->nullable();
            $table->enum('type', ['Makanan','Minuman','Camilan','Kudapan','Rokok']);
            $table->text('description');
            $table->integer('stock')->min(20);
            $table->string('produser');
            $table->text('address');
            $table->string('postcode');
            $table->boolean('status')->default(true);
            $table->timestamps();
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
