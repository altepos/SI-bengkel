<?php

class Phone extends DataMapper {
	var $table = 'phone';
	var $has_one = array('user');
	var $has_many = array();
	
}