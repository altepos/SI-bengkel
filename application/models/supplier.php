<?php

class Supplier extends DataMapper {
	var $table = 'supplier';
	var $has_one = array('belanja');
	var $has_many = array();
	
}