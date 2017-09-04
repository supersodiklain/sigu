<?php

class Status extends Eloquent {

	protected $table = 'status';

	protected $guarded = array('id');

	public function univ()
	{
		return $this->hasOne('univ', 'id_tipe');
	}

	
}