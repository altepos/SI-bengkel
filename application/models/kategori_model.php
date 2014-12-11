<?php

class Kategori_model extends DataMapper {
	var $table = 'kategori';
	var $has_one = array();
	var $has_many = array('barang');
	
}