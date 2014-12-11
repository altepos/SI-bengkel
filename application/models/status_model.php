<?php

class Status_model extends DataMapper {
	var $table = 'status';
	var $has_one = array('transaksi');
	var $has_many = array();
	
}