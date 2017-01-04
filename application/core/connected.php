<?php

class Connected {
	
	public $link;
	
	function __construct()
	{
		$this->link = new Base();
	}
	function get_link()
	{
		return $this->link;
	}
	
	// действие (action), вызываемое по умолчанию
	function action_index()
	{
		// todo
	}
}
