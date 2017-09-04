<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prodi', function(Blueprint $table)
		{
			$table->increments('id',true);
			$table->integer('id_univ')->unsigned();
			$table->string('nama_prodi');
			$table->string('jenjang');
			$table->timestamps();

			$table->foreign('id_univ')->references('id')->on('universitas')->onDelete('cascade');
		});

		DB::table('prodi')->insert(array(
			// UNY
			array('id_univ'=>1, 'nama_prodi'=>'Administrasi Pendidikan','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Akuntansi','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Bimbingan Dan Konseling','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Biologi','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Fisika','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Ilmu Administrasi Negara','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Ilmu Keolahragaan','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Ilmu Komunikasi','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Ilmu Sejarah','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Kebijakan Pendidikan','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Kimia','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Manajemen','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Matematika','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Administrasi Perkantoran','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Akuntansi','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Bahasa Dan Sastra Indonesia','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Bahasa Inggris','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Bahasa Jawa','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Bahasa Jerman','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Bahasa Perancis','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Biologi','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Ekonomi','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Fisika','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Geografi','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Guru Pendidikan Anak Usia Dini','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Guru Sekolah Dasar','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Ilmu Pengetahuan Alam','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Ilmu Pengetahuan Sosial','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Jasmani, Kesehatan Dan Rekreas','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Kepelatihan Olahraga','jenjang'=>'S1'),
			array('id_univ'=>1, 'nama_prodi'=>'Pendidikan Kimia','jenjang'=>'S1'),

			// UAD
			array('id_univ'=>2, 'nama_prodi'=>'Akuntansi','jenjang'=>'S1'),
			array('id_univ'=>2, 'nama_prodi'=>'Bahasa dan Sastra Arab','jenjang'=>'S1'),
			array('id_univ'=>2, 'nama_prodi'=>'Bimbingan Dan Konseling','jenjang'=>'S1'),
			array('id_univ'=>2, 'nama_prodi'=>'Biologi','jenjang'=>'S1'),
			array('id_univ'=>2, 'nama_prodi'=>'Ekonomi Pembangunani','jenjang'=>'S1'),
			array('id_univ'=>2, 'nama_prodi'=>'Farmasi','jenjang'=>'S1'),
			array('id_univ'=>2, 'nama_prodi'=>'Fisika','jenjang'=>'S1'),
			array('id_univ'=>2, 'nama_prodi'=>'Ilmu Hukum','jenjang'=>'S1'),
			array('id_univ'=>2, 'nama_prodi'=>'Ilmu Komunikasi','jenjang'=>'S1'),
			array('id_univ'=>2, 'nama_prodi'=>'Kesehatan Masyarakat','jenjang'=>'S1'),
			array('id_univ'=>2, 'nama_prodi'=>'Manajemen','jenjang'=>'S1'),
			array('id_univ'=>2, 'nama_prodi'=>'Matematika','jenjang'=>'S1'),
			array('id_univ'=>2, 'nama_prodi'=>'Pendidikan Agama Islam','jenjang'=>'S1'),
			array('id_univ'=>2, 'nama_prodi'=>'Pendidikan Bahasa Dan Sastra Indonesia','jenjang'=>'S1'),

			// UGM
			array('id_univ'=>3, 'nama_prodi'=>'Akuntansi','jenjang'=>'S1'),
			array('id_univ'=>3, 'nama_prodi'=>'Antropologi Budaya','jenjang'=>'S1'),
			array('id_univ'=>3, 'nama_prodi'=>'Arkeologi','jenjang'=>'S1'),
			array('id_univ'=>3, 'nama_prodi'=>'Arsitektur','jenjang'=>'S1'),
			array('id_univ'=>3, 'nama_prodi'=>'Biologi','jenjang'=>'S1'),
			array('id_univ'=>3, 'nama_prodi'=>'Budidaya Perikanan','jenjang'=>'S1'),
			array('id_univ'=>3, 'nama_prodi'=>'Elektronika Dan Instrumentasi','jenjang'=>'S1'),
			array('id_univ'=>3, 'nama_prodi'=>'Farmasi','jenjang'=>'S1'),
			array('id_univ'=>3, 'nama_prodi'=>'Fisika','jenjang'=>'S1'),
			array('id_univ'=>3, 'nama_prodi'=>'Geofisika','jenjang'=>'S1'),
			array('id_univ'=>3, 'nama_prodi'=>'Geografi','jenjang'=>'S1'),
			array('id_univ'=>3, 'nama_prodi'=>'Geografi Dan Ilmu Lingkungan','jenjang'=>'S1'),
			array('id_univ'=>3, 'nama_prodi'=>'Gizi Kesehatan','jenjang'=>'S1'),

			// UPN
			array('id_univ'=>4, 'nama_prodi'=>'Agribisnis','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Agroteknologi','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Akuntansi','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Ekonomi Pembangunan','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Ilmu Administrasi Bisnisi','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Ilmu Hubungan Internasional','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Ilmu Komunikasi','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Manajemen','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Teknik Geofisika','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Teknik Geologi','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Teknik Industri','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Teknik Informatika','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Teknik Kimia','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Teknik Lingkungan','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Teknik Perminyakan','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Teknik Pertambangan','jenjang'=>'S1'),
			array('id_univ'=>4, 'nama_prodi'=>'Teknik Kimia','jenjang'=>'D3'),

			// UII
			array('id_univ'=>5, 'nama_prodi'=>'Akuntansi','jenjang'=>'S1'),
			array('id_univ'=>5, 'nama_prodi'=>'Arsitektur','jenjang'=>'S1'),
			array('id_univ'=>5, 'nama_prodi'=>'Ekonomi Islam','jenjang'=>'S1'),
			array('id_univ'=>5, 'nama_prodi'=>'Ekonomi Pembangunan','jenjang'=>'S1'),
			array('id_univ'=>5, 'nama_prodi'=>'Farmasi','jenjang'=>'S1'),
			array('id_univ'=>5, 'nama_prodi'=>'Hubungan Internasional','jenjang'=>'S1'),
			array('id_univ'=>5, 'nama_prodi'=>'Hukum Keluarga (Ahwal Syakhshiyah)','jenjang'=>'S1'),
			array('id_univ'=>5, 'nama_prodi'=>'Ilmu Hukum','jenjang'=>'S1'),
			array('id_univ'=>5, 'nama_prodi'=>'Akuntansi','jenjang'=>'D3'),
			array('id_univ'=>5, 'nama_prodi'=>'Analis Kimia','jenjang'=>'D3'),
			array('id_univ'=>5, 'nama_prodi'=>'Keuangan Dan Perbankan','jenjang'=>'D3'),
			array('id_univ'=>5, 'nama_prodi'=>'Manajemen Perusahaan','jenjang'=>'D3'),
			array('id_univ'=>5, 'nama_prodi'=>'Teknik Kimia','jenjang'=>'D3'),
			array('id_univ'=>5, 'nama_prodi'=>'Teknik Kimia','jenjang'=>'D3'),

			//UST
			array('id_univ'=>6, 'nama_prodi'=>'Agribisnis','jenjang'=>'S1'), 
			array('id_univ'=>6, 'nama_prodi'=>'Agroteknologis','jenjang'=>'S1'), 
			array('id_univ'=>6, 'nama_prodi'=>'Akuntansi','jenjang'=>'S1'), 
			array('id_univ'=>6, 'nama_prodi'=>'Manajemen','jenjang'=>'S1'), 
			array('id_univ'=>6, 'nama_prodi'=>'Pendidikan Bahasa Dan Sastra Indonesia','jenjang'=>'S1'), 
			array('id_univ'=>6, 'nama_prodi'=>'Pendidikan Bahasa Inggris','jenjang'=>'S1'), 
			array('id_univ'=>6, 'nama_prodi'=>'Pendidikan Fisika','jenjang'=>'S1'), 
			array('id_univ'=>6, 'nama_prodi'=>'Pendidikan Guru Sekolah Dasar','jenjang'=>'S1'), 
			array('id_univ'=>6, 'nama_prodi'=>'Pendidikan IPA','jenjang'=>'S1'),
			array('id_univ'=>6, 'nama_prodi'=>'Pendidikan Kesejahteraan Keluarga','jenjang'=>'S1'),
			array('id_univ'=>6, 'nama_prodi'=>'Pendidikan Matematika','jenjang'=>'S1'),
			array('id_univ'=>6, 'nama_prodi'=>'Pendidikan Seni Rupa','jenjang'=>'S1'),
			array('id_univ'=>6, 'nama_prodi'=>'Akuntansi','jenjang'=>'D3'),

			//UJB
			array('id_univ'=>7, 'nama_prodi'=>'Agribisnis','jenjang'=>'S1'),
			array('id_univ'=>7, 'nama_prodi'=>'Akuntansi','jenjang'=>'S1'),
			array('id_univ'=>7, 'nama_prodi'=>'Ekonomi Pembangunan','jenjang'=>'S1'),
			array('id_univ'=>7, 'nama_prodi'=>'Ilmu Hukum','jenjang'=>'S1'),
			array('id_univ'=>7, 'nama_prodi'=>'Teknik Informatika','jenjang'=>'S1'),
			array('id_univ'=>7, 'nama_prodi'=>'Teknik Mesin','jenjang'=>'S1'),
			array('id_univ'=>7, 'nama_prodi'=>'Teknik Sipil','jenjang'=>'S1'),
			array('id_univ'=>7, 'nama_prodi'=>'Manajemen','jenjang'=>'S1'),

			//UP45
			array('id_univ'=>8, 'nama_prodi'=>'Ilmu Administrasi Negara','jenjang'=>'S1'),
			array('id_univ'=>8, 'nama_prodi'=>'Ilmu Hukum','jenjang'=>'S1'),
			array('id_univ'=>8, 'nama_prodi'=>'Manajemen','jenjang'=>'S1'),
			array('id_univ'=>8, 'nama_prodi'=>'Psikologi','jenjang'=>'S1'),
			array('id_univ'=>8, 'nama_prodi'=>'Teknik Mesin','jenjang'=>'S1'),
			array('id_univ'=>8, 'nama_prodi'=>'Teknik Perminyakan','jenjang'=>'S1'),

			// UAJY
			array('id_univ'=>9, 'nama_prodi'=>'Akuntansi','jenjang'=>'S1'),
			array('id_univ'=>9, 'nama_prodi'=>'Arsitektur','jenjang'=>'S1'),
			array('id_univ'=>9, 'nama_prodi'=>'Biologi','jenjang'=>'S1'),
			array('id_univ'=>9, 'nama_prodi'=>'Ekonomi Pembangunan','jenjang'=>'S1'),
			array('id_univ'=>9, 'nama_prodi'=>'Ilmu Hukum','jenjang'=>'S1'),
			array('id_univ'=>9, 'nama_prodi'=>'Ilmu Komunikasi','jenjang'=>'S1'),
			array('id_univ'=>9, 'nama_prodi'=>'Manajemen','jenjang'=>'S1'),
			array('id_univ'=>9, 'nama_prodi'=>'Sosiologi','jenjang'=>'S1'),
			array('id_univ'=>9, 'nama_prodi'=>'Teknik Industri','jenjang'=>'S1'),
			array('id_univ'=>9, 'nama_prodi'=>'Teknik Informatika','jenjang'=>'S1'),
			array('id_univ'=>9, 'nama_prodi'=>'Teknik Sipil','jenjang'=>'S1'),

			// UCY
			array('id_univ'=>10, 'nama_prodi'=>'Akuntansi','jenjang'=>'S1'),
			array('id_univ'=>10, 'nama_prodi'=>'Hukum Keluarga (Ahwal Syakhshiyah)l','jenjang'=>'S1'),
			array('id_univ'=>10, 'nama_prodi'=>'Ilmu Hukum','jenjang'=>'S1'),
			array('id_univ'=>10, 'nama_prodi'=>'Manajemen','jenjang'=>'S1'),
			array('id_univ'=>10, 'nama_prodi'=>'Pendidikan Agama Islam','jenjang'=>'S1'),
			array('id_univ'=>10, 'nama_prodi'=>'Pendidikan Pancasila Dan Kewarganegaraan','jenjang'=>'S1'),
			array('id_univ'=>10, 'nama_prodi'=>'Teknik Sipil','jenjang'=>'S1'),

			//UMY 
			array('id_univ'=>11, 'nama_prodi'=>'Agribisnis','jenjang'=>'S1'),
			array('id_univ'=>11, 'nama_prodi'=>'Agroteknologi','jenjang'=>'S1'),
			array('id_univ'=>11, 'nama_prodi'=>'Akuntansil','jenjang'=>'S1'),
			array('id_univ'=>11, 'nama_prodi'=>'Ekonomi Pembangunan','jenjang'=>'S1'),
			array('id_univ'=>11, 'nama_prodi'=>'Farmasi','jenjang'=>'S1'),
			array('id_univ'=>11, 'nama_prodi'=>'Hukum Ekonomi Syari`ah (Mu`amalah)','jenjang'=>'S1'),
			array('id_univ'=>11, 'nama_prodi'=>'Ilmu Hubungan Internasional','jenjang'=>'S1'),
			array('id_univ'=>11, 'nama_prodi'=>'Ilmu Hukum','jenjang'=>'S1'),
			array('id_univ'=>11, 'nama_prodi'=>'Ilmu Keperawatan','jenjang'=>'S1'),
			array('id_univ'=>11, 'nama_prodi'=>'Ilmu Komunikasi','jenjang'=>'S1'),
			array('id_univ'=>11, 'nama_prodi'=>'Ilmu Pemerintahan','jenjang'=>'S1'),
			array('id_univ'=>11, 'nama_prodi'=>'Kedokteran Gigi','jenjang'=>'S1'),
			array('id_univ'=>11, 'nama_prodi'=>'Komunikasi dan Penyiaran Islam','jenjang'=>'S1'),
			array('id_univ'=>11, 'nama_prodi'=>'Manajemen','jenjang'=>'S1'),
			array('id_univ'=>11, 'nama_prodi'=>'Pendidikan Agama Islam','jenjang'=>'S1'),

			// UWM
			array('id_univ'=>12, 'nama_prodi'=>'Akuntansi','jenjang'=>'S1'),
			array('id_univ'=>12, 'nama_prodi'=>'Arsitektur','jenjang'=>'S1'),
			array('id_univ'=>12, 'nama_prodi'=>'Ilmu Administrasi Negara','jenjang'=>'S1'),
			array('id_univ'=>12, 'nama_prodi'=>'Ilmu Hukum','jenjang'=>'S1'),
			array('id_univ'=>12, 'nama_prodi'=>'Manajemen','jenjang'=>'S1'),
			array('id_univ'=>12, 'nama_prodi'=>'Sosiologi','jenjang'=>'S1'),
			array('id_univ'=>12, 'nama_prodi'=>'Teknik Industri','jenjang'=>'S1'),
			array('id_univ'=>12, 'nama_prodi'=>'Teknologi Pangan','jenjang'=>'S1'),

			// UKRIM
			array('id_univ'=>13, 'nama_prodi'=>'Teknologi Pangan','jenjang'=>'S1'),
			));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prodi');
	}

}
