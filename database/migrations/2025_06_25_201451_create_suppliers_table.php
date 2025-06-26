<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('Razon_social');
            $table->integer('NIT');

            $table->unsignedBigInteger('people_id');
            $table->unsignedBigInteger('company_id');

            $table->foreign('people_id')
                ->references('id')
                ->on('peoples')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->foreign('company_id')
                ->references('id')
                ->on('companies')   
                ->onDelete('cascade')
                ->onUpdate('cascade');

                /*version 1: 
                Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('empresa');
             $table->string('nit');
             
             $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')
            ->references('id')
            ->on('companies')
            ->onDelete('cascade')
            ->onUpdate('cascade');

             $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');*/
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
