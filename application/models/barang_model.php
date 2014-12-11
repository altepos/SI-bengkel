<?php

class Barang_model extends DataMapper {
	var $table = 'barang';
	var $has_one = array('merek', 'kategori');
	var $has_many = array('belanja_detail');
}