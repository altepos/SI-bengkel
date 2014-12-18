<?php

class Role_model extends DataMapper {
	var $table = 'role';
	var $has_one = array();
	var $has_many = array('user');
	
}