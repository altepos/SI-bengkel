<?php

class Belanja_detail_model extends DataMapper {
	var $table = 'belanja_detail';
	var $has_one = array('belanja', 'barang');
	var $has_many = array('transaksi_detail');
	
}