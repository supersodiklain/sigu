<?php

class Prodi extends Eloquent {

	protected $table = 'prodi';

	protected $guarded = array('id');

	public function univ()
	{
		return $this->belongsTo('Univ', 'id');
	}

	
}