<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->text('description')->nullable();
            $table->integer('user_id');
            $table->timestamps();
            $table->string('latt')->nullable();
            $table->string('long')->nullable();
            $table->boolean('resolved')->default(false);
            $table->boolean('help')->default(false);
            $table->string('street')->default('Partizanski put');
            $table->string('number')->default('9a');
            $table->string('city')->default('Rijeka');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
