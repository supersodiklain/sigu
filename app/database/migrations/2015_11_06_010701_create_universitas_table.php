<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniversitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('universitas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_lengkap');
			$table->string('nama_singkat');
			$table->integer('id_tipe')->unsigned();
			$table->timestamps();

			$table->foreign('id_tipe')->references('id')->on('status')->onDelete('cascade');
		});

		DB::table('universitas')->insert(array(
			array('id'=>1,'nama_lengkap'=>'Universitas Negeri Yogyakarta','nama_singkat'=>'UNY','id_tipe'=>1),
			array('id'=>2,'nama_lengkap'=>'Universitas Ahmad Dahlan','nama_singkat'=>'UAD','id_tipe'=>2),
			array('id'=>3,'nama_lengkap'=>'Universitas Gajah Mada','nama_singkat'=>'UGM','id_tipe'=>1),
			array('id'=>4,'nama_lengkap'=>'Universitas Pembangunan Nasional Veteran Yogyakarta','nama_singkat'=>'UPN','id_tipe'=>2),
			array('id'=>5,'nama_lengkap'=>'Universitas Islam Indonesia','nama_singkat'=>'UII','id_tipe'=>2),
			array('id'=>6,'nama_lengkap'=>'Universitas Sarjanawiyata Tamansiswa','nama_singkat'=>'UST','id_tipe'=>2),
			array('id'=>7,'nama_lengkap'=>'Universitas Janabadra','nama_singkat'=>'UJB','id_tipe'=>2),
			array('id'=>8,'nama_lengkap'=>'Universitas Proklamasi 45','nama_singkat'=>'UP45','id_tipe'=>2),
			array('id'=>9,'nama_lengkap'=>'Universitas Atma Jaya Yogyakarta','nama_singkat'=>'UAJY','id_tipe'=>2),
			array('id'=>10,'nama_lengkap'=>'Universitas Cokroaminoto','nama_singkat'=>'UCY','id_tipe'=>2),
			array('id'=>11,'nama_lengkap'=>'Universitas Muhammadiyah Yogyakarta','nama_singkat'=>'UMY','id_tipe'=>2),
			array('id'=>12,'nama_lengkap'=>'Universitas Widya Mataram','nama_singkat'=>'UWMY','id_tipe'=>2),
			array('id'=>13,'nama_lengkap'=>'Universitas Kristen Immanuel','nama_singkat'=>'UKRIM','id_tipe'=>2),
			array('id'=>14,'nama_lengkap'=>'Universitas Kristen Duta Wacana','nama_singkat'=>'UKDW','id_tipe'=>2),
			array('id'=>15,'nama_lengkap'=>'Universitas Sanata Dharma','nama_singkat'=>'USD','id_tipe'=>2),
			array('id'=>16,'nama_lengkap'=>'Universitas PGRI Yogyakarta','nama_singkat'=>'UPY','id_tipe'=>2),
			array('id'=>17,'nama_lengkap'=>'Universitas Gunung Kidul','nama_singkat'=>'UGK','id_tipe'=>2),
			array('id'=>18,'nama_lengkap'=>'Universitas Teknologi Yogyakarta','nama_singkat'=>'UTY','id_tipe'=>2),
			array('id'=>19,'nama_lengkap'=>'Universitas Mercu Buana Yogyakarta','nama_singkat'=>'UMBY','id_tipe'=>2),
			array('id'=>20,'nama_lengkap'=>'Universitas Respati Yogyakarta','nama_singkat'=>'UNRIYO','id_tipe'=>2),
			array('id'=>21,'nama_lengkap'=>'Universitas Islam Negeri Sunan Kalijaga','nama_singkat'=>'UIN','id_tipe'=>1),
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('universitas');
	}

}
