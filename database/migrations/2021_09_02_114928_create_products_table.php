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
            $table->longtext('description');
            $table->string('picture1')->default('');
            $table->string('picture2')->default('');
            $table->string('picture3')->default('');
            $table->string('picture4')->default('');
            $table->string('picture5')->default('');
            $table->string('picture6')->default('');
            $table->string('picture7')->default('');
            $table->string('picture8')->default('');
            $table->string('picture9')->default('');
            $table->string('picture10')->default('');
            $table->string('url_name')->default('');
            $table->string('p_type',50)->default('ntms');
            $table->string('additional_information')->default('');
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
