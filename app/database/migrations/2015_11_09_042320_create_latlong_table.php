<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLatlongTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('latlong', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_univ')->unsigned();
			$table->decimal('lo',20,10);
			$table->decimal('la',20,10);
			$table->string('share');
			$table->timestamps();

			$table->foreign('id_univ')->references('id')->on('universitas')->onDelete('cascade');
		});

		DB::table('latlong')->insert(array(
			array('id_univ'=>1,'lo'=>-7.775828,"la"=> 110.383972,'share'=>'https://goo.gl/maps/WcQEsyziDp32'),
			array('id_univ'=>2,'lo'=>-7.798944,"la"=> 110.383273,'share'=>'https://goo.gl/maps/7LFgpLhYF112'),
			array('id_univ'=>3,'lo'=>-7.771371,"la"=> 110.377491,'share'=>'https://goo.gl/maps/DFT485Dkjf62'),
			array('id_univ'=>4,'lo'=>-7.762623,"la"=> 110.408359,'share'=>'https://goo.gl/maps/yQ2x7zLL1Ey'),
			array('id_univ'=>5,'lo'=>-7.687855,"la"=> 110.412576,'share'=>'https://goo.gl/maps/imi2zp2VoFL2'),
			array('id_univ'=>6,'lo'=>-7.801773,"la"=> 110.392338,'share'=>'https://goo.gl/maps/bwqk6e2Rywo'),
			array('id_univ'=>7,'lo'=>-7.783666,"la"=> 110.357571,'share'=>'https://goo.gl/maps/n4db2Y6AtaT2'),
			array('id_univ'=>8,'lo'=>-7.775107,"la"=> 110.417039,'share'=>'https://goo.gl/maps/aCaKsNMEM3r'),
			array('id_univ'=>9,'lo'=>-7.779292,"la"=> 110.415381,'share'=>'https://goo.gl/maps/kg6F1h88onp'),
			array('id_univ'=>10,'lo'=>-7.819526,"la"=> 110.392899,'share'=>'https://goo.gl/maps/7GCmjsrniQU2'),
			array('id_univ'=>11,'lo'=>-7.810167,"la"=> 110.321485,'share'=>'https://goo.gl/maps/Q1mF8RZNsKJ2'),
			array('id_univ'=>12,'lo'=>-7.807438,"la"=> 110.357184,'share'=>'https://goo.gl/maps/aAWQfS1B2u62'),
			array('id_univ'=>14,'lo'=>-7.786065,"la"=> 110.378619,'share'=>'https://goo.gl/maps/mjEYHzPtvPK2'),
			array('id_univ'=>13,'lo'=>-7.775507,"la"=> 110.449757,'share'=>'https://goo.gl/maps/Q7Z8w5Qxj2x'),
			array('id_univ'=>15,'lo'=>-7.775567,"la"=> 110.389431,'share'=>'https://goo.gl/maps/pGK9QbE47dB2'),
			array('id_univ'=>16,'lo'=>-7.806312,"la"=> 110.340988,'share'=>'https://goo.gl/maps/24a6Z6PaB492'),
			array('id_univ'=>17,'lo'=>-7.953688,"la"=> 110.589999,'share'=>'https://goo.gl/maps/Se7t2WLivtQ2'),
			array('id_univ'=>18,'lo'=>-7.747156,"la"=> 110.356084,'share'=>'https://goo.gl/maps/7PApJg5QJm62'),
			array('id_univ'=>19,'lo'=>-7.808358,"la"=> 110.271125,'share'=>'https://goo.gl/maps/R2JtrC78A1n'),
			array('id_univ'=>20,'lo'=>-7.781804,"la"=> 110.407130,'share'=>'https://goo.gl/maps/x8ic5Av1fvs'),
			array('id_univ'=>21,'lo'=>-7.784541,"la"=> 110.393999,'share'=>'https://goo.gl/maps/VK5w9VRmNcw'),
			));

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('latlong');
	}

}
