<?php

class Barang_model extends DataMapper {
	
	var $table = 'barang';
	var $has_one = array();
	var $has_many = array();

	function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}