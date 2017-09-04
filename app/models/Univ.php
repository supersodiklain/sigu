<?php

class Univ extends Eloquent {

	protected $table = 'universitas';

	protected $guarded = array('id');

	public function status()
	{
		return $this->belongsTo('Status', 'id');
	}
	public function latlong()
	{
		return $this->hasOne('Latlong', 'id_univ');
	}
	public function alamat()
	{
		return $this->hasOne('Alamat', 'id_univ');
	}
	public function prodi()
	{
		return $this->hasOne('Prodi', 'id_univ');
	}

	
}