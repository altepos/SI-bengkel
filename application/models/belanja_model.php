<?php

class Belanja_model extends DataMapper {
	var $table = 'belanja';
	var $has_one = array('user', 'supplier');
	var $has_many = array('belanja_detail');
	
}