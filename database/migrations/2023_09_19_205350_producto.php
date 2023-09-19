<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('producto', function (Blueprint $table) {
			$table->increments('codigo');
			$table->string('descripcion',150);
			$table->integer('precio_compra')->default(0);
			$table->integer('precio_venta')->default(0);
			$table->string('almacen',100);
			$table->rememberToken();
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
		Schema::dropIfExists('producto');
	}
}
