<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getUniv($data){

		$info = Univ::wherenama_singkat($data)
		->join('latlong','latlong.id_univ','=','universitas.id')
		->join('alamat','alamat.id_univ','=','universitas.id')
		->first();

		
		$prodi = Prodi::whereid_univ($info->id)->get();
		// return Response::json($info);
		// return Response::json($prodi);
		return View::make('/profil-universitas')->withInfo($info)->withProdi($prodi);
	}


	public function getDaftar(){
		$data = Status::select('universitas.id', 'universitas.nama_lengkap','universitas.nama_singkat','status.status')
		->join('universitas', 'universitas.id_tipe','=','status.id')
		->get();

		return View::make('daftarUniv')->withData($data);
		// return Response::json($data);

	}

	// public function getDireksi($data){
	// 	return View::make('direksi')->withData($data);
	// }

	public function postDireksi(){
		$melat = Input::get('poslat');
		$melng = Input::get('poslng');
		$goallat = Input::get('centerlat');
		$goallng = Input::get('centerlng');
		// return Response::json($melat);
		return View::make('direksi')->withMelat($melat)->withMelng($melng)->withGoallat($goallat)->withGoallng($goallng);
		// return Redirect::to('/direksi')->withData($data);

	}

	public function getCari(){
		// $data = DB::table('prodi')
		// ->join('universitas','universitas.id','=','prodi.id_univ')
		// ->get();
		$data = Univ::wherenama_singkat('')
			->join('prodi','prodi.id_univ','=','universitas.id')
			->get();
		return View::make('cari')->withData($data);
	}

	public function postCari(){
		$input = Input::all();

		// $data = Univ::wherenama_singkat($input['nama_prodi'])
		// 	->join('prodi','prodi.id_univ','=','universitas.id')
		// 	->get();

		$data = Prodi::wherenama_prodi($input['nama_prodi'])
		->join('universitas','universitas.id','=','prodi.id_univ')
		->get();
		// return Response::json($data);
		return View::make('cari')->withData($data);
	}

	public function getMap(){
		$data = DB::table('latlong')->get();
	// $data = Latlong::whereId_univ(1)->first();
		return Response::json($data);
	}

	public function postDetailuniv(){
		if (Input::has('la')) {
			$detail = Latlong::wherelo(Input::get('la'))
			->join('universitas','universitas.id','=','latlong.id_univ')
			->first();
		} else {
			$id_user = Input::get('id');
		}

		return Response::json($detail);
	}

}
