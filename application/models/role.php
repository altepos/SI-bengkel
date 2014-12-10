<?php

class Role extends DataMapper {
	var $table = 'role';
	var $has_one = array();
	var $has_many = array('user');
	
}