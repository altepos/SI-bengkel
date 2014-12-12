<?php

class Merek_model extends DataMapper {
	var $table = 'merek';
	var $has_one = array();
	var $has_many = array('barang_model');
}