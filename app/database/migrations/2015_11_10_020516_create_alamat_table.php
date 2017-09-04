<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlamatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alamat', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('id_univ')->unsigned();
			$table->string('alamat');
			$table->string('email');
			$table->string('web');
			$table->string('telp');
			$table->timestamps();

			$table->foreign('id_univ')->references('id')->on('universitas')->onDelete('cascade');
		});

		DB::table('alamat')->insert(array(
			array('id_univ'=>1, 'alamat'=>'Jl. Colombo No.1 Kab. Sleman Yogyakarta 55281 Indonesia','email'=>'humas@uny.ac.id','web'=>'www.uny.ac.id','telp'=>'0274-586168'),
			array('id_univ'=>2, 'alamat'=>'Jalan Kapas No 9 Semaki Kab. Kota Yogyakarta 55166 Indonesia','email'=>'info@uad.ac.id','web'=>'www.uad.ac.id','telp'=>'0274-563515'),
			array('id_univ'=>3, 'alamat'=>'Bulaksumur, Yogyakarta 55281Bulaksumur, Yogyakarta 55281','email'=>'setr@ugm.ac.id','web'=>'www.ugm.ac.id','telp'=>'0274-588688'),
			array('id_univ'=>4, 'alamat'=>'Jl. SWK 104 (Lingkar Utara),Condongcatur,Kec. Sleman, Daerah Istimewa Yogyakarta 55283','email'=>'mail.upnyk.ac.id','web'=>'upnyk.ac.id','telp'=>'0274-486733'),
			array('id_univ'=>5, 'alamat'=>'Jl. Kaliurang KM. 14.5,Umbulmartani,Kec. Sleman,Sleman, Daerah Istimewa Yogyakarta 55584','email'=>'rektorat@uii.ac.id','web'=>'uii.ac.id','telp'=>'0274-898444'),
			array('id_univ'=>6, 'alamat'=>'Jalan Kusumanegara No 157, Kota Yogyakarta - Prop. D.I. Yogyakarta - Indonesia 55165','email'=>'info@ustjogja.ac.id','web'=>'ustjogja.ac.id','telp'=>'0274-56265'),
			array('id_univ'=>7, 'alamat'=>'Jl. Tentara Rakyat Mataram No.57,Jetis,Kota Yogyakarta, Daerah Istimewa Yogyakarta 55231','email'=>'info@janabadra.ac.id','web'=>'www.janabadra.ac.id','telp'=>'0274-561039'),
			array('id_univ'=>8, 'alamat'=>'JL Proklamasi, No.1, Babarsari, Catur Tunggal,Daerah Istimewa Yogyakarta 55283','email'=>'up45@indosat.net.id','web'=>'up45.ac.id','telp'=>'0274-485517, 485535'),
			array('id_univ'=>9, 'alamat'=>'Jalan Babarsari No.44,Daerah Istimewa Yogyakarta 55281','email'=>'uajy@mail.uajy.ac.id','web'=>'www.uajy.ac.id','telp'=>'0274-487711'),
			array('id_univ'=>10, 'alamat'=>'Jl. Perintis Kemerdekaan,Gambiran, Umbulharjo,Daerah Istimewa Yogyakarta 55161','email'=>'info@ucy.ac.id','web'=>'ucy.ac.id','telp'=>'0274-372274'),
			array('id_univ'=>11, 'alamat'=>'Jalan Lingkar Selatan, Kasihan, Bantul,Tamantirto,Kasihan,Bantul, Daerah Istimewa Yogyakarta 55183','email'=>'umy@umy.ac.id','web'=>'umy.ac.id','telp'=>'0274-387656'),
			array('id_univ'=>12, 'alamat'=>'Ndalem Mangkubumen KT III/237 Yogyakarta Kota Yogyakarta - Prop. D.I. Yogyakarta - Indonesia 55132','email'=>'unwima82@gmail.com','web'=>'www.widyamataram.ac.id','telp'=>'0274-374352'),
			array('id_univ'=>13, 'alamat'=>'Jalan Solo KM.11,1,Daerah Istimewa Yogyakarta 55571','email'=>'humas@ukrimuniversity.ac.id','web'=>'www.ukrimuniversity.ac.id','telp'=>'0274-496256, 496257'),
			array('id_univ'=>14, 'alamat'=>'Jalan Dr Wahidin 5-19 Kota Yogyakarta - Prop. D.I. Yogyakarta - Indonesia 55224','email'=>'humas@ukdw.ac.id','web'=>'www.ukdw.ac.id','telp'=>'0274-563929'),
			array('id_univ'=>15, 'alamat'=>'Jalan Mrican Tromolpos 29 Kab. Sleman - Prop. D.I. Yogyakarta - Indonesia 55002','email'=>'rektorat@usd.ac.id','web'=>'usd.ac.id','telp'=>'0274-513301'),
			array('id_univ'=>16, 'alamat'=>'Jl. PGRI 1 Sonosewu No. 117,Ngestiharjo,Kasihan,Bantul Regency, Special Region of Yogyakarta 55182','email'=>'info@upy.ac.id','web'=>'www.upy.ac.id','telp'=>'0274-376808'),
			array('id_univ'=>17, 'alamat'=>'Jalan KH Agus Salim No 170 Wonosari, Gunungkidul, D.I. Yogyakarta 55813','email'=>'univ_gunungkidul@yahoo.co.id','web'=>'dalam proses','telp'=>'0274-391342'),
			array('id_univ'=>18, 'alamat'=>'Jalan Ring Road Utara Jombor Sleman Prop. D.I. Yogyakarta - Indonesia 55285','email'=>'info@uty.ac.id','web'=>'uty.ac.id','telp'=>'0274-623310'),
			array('id_univ'=>19, 'alamat'=>'Jalan Wates KM 10 Yogyakarta 55753 ','email'=>'admin@mercubuana-yogya.ac.id','web'=>'www.mercubuana-yogya.ac.id','telp'=>'0274-6498212'),
			array('id_univ'=>20, 'alamat'=>'Jl Laksda Adisutjipto KM 6,5 Sleman Prop. D.I. Yogyakarta - Indonesia 5555','email'=>'unriyo@respati.ac.id','web'=>'www.respati.ac.id','telp'=>'0274-488781'),
			array('id_univ'=>20, 'alamat'=>'Jalan Marsda Adisucipto No 1 Kab. Sleman - Prop. D.I. Yogyakarta - Indonesia 55281','email'=>'humas@uin-suka.ac.id','web'=>'uin-suka.ac.id','telp'=>'0274-589621, 512474'),
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alamat');
	}
}
