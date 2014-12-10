<?php

class Kategori extends DataMapper {
	var $table = 'kategori';
	var $has_one = array();
	var $has_many = array('barang');
	
}