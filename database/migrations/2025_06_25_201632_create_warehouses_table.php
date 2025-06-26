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
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ciudad');
            $table->string('direccion');

            $table->unsignedBigInteger('company_id');
            
            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade')
                ->onUpdate('cascade');
                /*v1:
                        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('bodega');
            $table->string('ciudad');
            $table->string('direccion');

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')
            ->references('id')
            ->on('companies')
            ->onDelete('cascade')
            ->onUpdate('cascade');
 */
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouses');
    }
};
