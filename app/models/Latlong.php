<?php

class Latlong extends Eloquent {

	protected $table = 'latlong';

	protected $guarded = array('id');

	public function univ()
	{
		return $this->belongsTo('Univ', 'id');
	}

	
}