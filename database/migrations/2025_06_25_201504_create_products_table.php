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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Producto');
            $table->integer('COD_BARRAS');
            $table->string('Descripcion');
            $table->string('Categoria');
            $table->integer('Precio_unitario');
            $table->string('Iva');
            $table->string('Stok_min');
           
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('company_id');

            $table->foreign('supplier_id')
                ->references('id')
                ->on('suppliers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade')
                ->onUpdate('cascade');

                /*v1:
                Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('producto');
             $table->string('cod_barras');
              $table->string('description');
               $table->string('categoria');
                $table->string('precio_unitario');
                 $table->string('iva');
                  $table->string('stock_unitario');

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')
            ->references('id')
            ->on('companies')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            
             $table->unsignedBigInteger('supplier_id');
            $table->foreign('supplier_id')
            ->references('id')
            ->on('suppliers')
            ->onDelete('cascade')
            ->onUpdate('cascade'); */

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
