<?php

class Base {
	
	private $MYSQL_SERVER;
	private $MYSQL_USER;
	private $MYSQL_PASSWORD;
	private $MYSQL_DB;
	public $link;
	
	function __construct()
	{
		$this->MYSQL_SERVER = 'localhost';
		$this->MYSQL_USER = 'root';
		$this->MYSQL_PASSWORD = '';
		$this->MYSQL_DB = 'tinyMVC';
		
		$this->link = $this->db_connect();
	}

	function db_connect()
	{
		$link = mysqli_connect( $this->MYSQL_SERVER, $this->MYSQL_USER, $this->MYSQL_PASSWORD, $this->MYSQL_DB )
			or die( "Ошибка: ".mysqli_error( $link ) );
		
		if ( !mysqli_set_charset( $link, "utf8" ) )
		{
			printf( "Ошибка: ".mysqli_error( $link ) );
		}
		
		return $link;
	}
}
