<?php

class User_model extends DataMapper {
	var $table = 'user';
	var $has_one = array('role');
	var $has_many = array('phone', 'transaksi', 'belanja');
	
}