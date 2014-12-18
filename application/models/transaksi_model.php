<?php

class Transaksi_model extends DataMapper {
	var $table = 'transaksi';
	var $has_one = array('user', 'status');
	var $has_many = array('transaksi_detail');
	
}