<?php

class Transaksi_detail_model extends DataMapper {
	var $table = 'transaksi_detail';
	var $has_one = array('transaksi');
	var $has_many = array('belanja_detail');
	
}