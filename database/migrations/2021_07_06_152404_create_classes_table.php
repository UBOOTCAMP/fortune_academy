<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_category_id')->constrained()->cascadeOnDelete();
            $table->string('class_name');
            $table->string('class_code');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('is_featured')->default(0);
            $table->text('description')->nullable();
            $table->string('timing');
            $table->string('days');
            $table->integer('month')->nullable();
            $table->string('discount_price');
            $table->string('price')->nullable();
            $table->string('image')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('classes');
    }
}
