<?php

class Transaksi extends DataMapper {
	var $table = 'transaksi';
	var $has_one = array('user', 'status');
	var $has_many = array('transaksi_detail');
	
}