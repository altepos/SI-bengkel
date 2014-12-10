<?php

class Belanja_detail extends DataMapper {
	var $table = 'belanja_detail';
	var $has_one = array('belanja', 'barang');
	var $has_many = array('transaksi_detail');
	
}