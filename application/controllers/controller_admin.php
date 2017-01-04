<?php

class Controller_Admin extends Controller
{
	
	function action_index()
	{
		
		
	//	echo 'Это контроллер админки!';
		/*
		Для простоты, в нашем случае, проверяется равенство сессионной переменной admin прописанному
		в коде значению — паролю. Такое решение не правильно с точки зрения безопасности.
		Пароль должен храниться в базе данных в захешированном виде, но пока оставим как есть.
		*/
		if ( $_SESSION['admin'] == "12345" )
		{
			$link = new Connected();
			$this->view->generate('admin_view.php', 'template_view.php');
			mysqli_query( 'SELECT * FROM users', $link->get_link() );
		}
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}

	}
	
	// Действие для разлогинивания администратора
	function action_logout()
	{
		session_start();
		session_destroy();
		header('Location:/');
	}

}
