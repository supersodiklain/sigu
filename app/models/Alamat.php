<?php

class Alamat extends Eloquent {

	protected $table = 'alamat';

	protected $guarded = array('id');

	public function univ()
	{
		return $this->belongsTo('Univ', 'id');
	}	
}