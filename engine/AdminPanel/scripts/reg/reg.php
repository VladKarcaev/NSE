<?php
 /**
 * Обработчик формы регистрации
 * Регистрация пользователя письмом
 */
 
 //Ключ защиты
 if(!defined('BEZ_KEY'))
 {
     header("HTTP/1.1 404 Not Found");
     exit(file_get_contents('../../404.html'));
 }
 //Выводим сообщение об удачной регистрации
 define("HOST",$_SERVER['HTTP_HOST']);
 if(isset($_GET['status']) and $_GET['status'] == 'ok'){
	echo '<b>You have successfully signed up! Please activate your account!</b>';
    header("Location: http://".HOST."/engine/installer/install/installer-next.php");
 }
 //Выводим сообщение об удачной регистрации
 if(isset($_GET['active']) and $_GET['active'] == 'ok'){
	echo '<b>Your account has been successfully activated!</b>';
		header("Location: http://".HOST."/engine/AdminPanel/?mode=auth");
 }
 //Производим активацию аккаунта
 if(isset($_GET['key']))
 {
	//Проверяем ключ
	$sql = 'SELECT * 
			FROM `'. BEZ_DBPREFIX .'reg`
			WHERE `active_hex` = "'. escape_str($_GET['key']) .'"';
	$res = mysqlQuery($sql);
			
	if(mysql_num_rows($res) == 0)
		$err[] = 'The activation key is not true!';
	
	//Проверяем наличие ошибок и выводим пользователю
	if(count($err) > 0)
		echo showErrorMessage($err);
	else
	{
		//Получаем адрес пользователя
		$row = mysql_fetch_assoc($res);
		$email = $row['login'];
	
		//Активируем аккаунт пользователя
		$sql = 'UPDATE `'. BEZ_DBPREFIX .'reg`
				SET `status` = 1
				WHERE `login` = "'. $email .'"';
		$res = mysqlQuery($sql);
		
		//Отправляем письмо для активации
		$title = 'Your account has been activated successfully';
		$message = 'Congratulations, your account has been activated successfully, you can now manage the admin panel';
			
		sendMessageMail($email, BEZ_MAIL_AUTOR, $title, $message);
			
		/*Перенаправляем пользователя на 
		нужную нам страницу*/
		header('Location:'. BEZ_HOST .'engine/AdminPanel/?mode=auth');
		exit;
	}
 }
 /*Если нажата кнопка на регистрацию,
 начинаем проверку*/
 if(isset($_POST['submit']))
 {
	//Утюжим пришедшие данные
	if(empty($_POST['email']))
		$err[] = 'The Email can not be empty!';
	else
	{
		if(!preg_match("/^[a-z0-9_.-]+@([a-z0-9]+\.)+[a-z]{2,6}$/i", $_POST['email']))
           $err[] = 'Invalid E-mail'."\n";
	}
	
	if(empty($_POST['pass']))
		$err[] = 'Password field can not be empty';
	
	if(empty($_POST['pass2']))
		$err[] = 'Confirm password field can not be empty';
	
	//Проверяем наличие ошибок и выводим пользователю
	if(count($err) > 0)
		echo showErrorMessage($err);
	else
	{
		/*Продолжаем проверять введеные данные
		Проверяем на совподение пароли*/
		if($_POST['pass'] != $_POST['pass2'])
			$err[] = 'Passwords do not match';
			
		//Проверяем наличие ошибок и выводим пользователю
	    if(count($err) > 0)
			echo showErrorMessage($err);
		else
		{
			/*Проверяем существует ли у нас 
			такой пользователь в БД*/
			$sql = 'SELECT `login` 
					FROM `'. BEZ_DBPREFIX .'reg`
					WHERE `login` = "'. escape_str($_POST['email']) .'"';
			$res = mysqlQuery($sql);
			
			if(mysql_num_rows($res) > 0)
				$err[] = 'Unfortunately Login: <b>'. $_POST['email'] .'</b> busy!';
			
			//Проверяем наличие ошибок и выводим пользователю
			if(count($err) > 0)
				echo showErrorMessage($err);
			else
			{
				//Получаем ХЕШ соли
				$salt = salt();
				
				//Солим пароль
				$pass = md5(md5($_POST['pass']).$salt);
				
				/*Если все хорошо, пишем данные в базу*/
				$sql = 'INSERT INTO `'. BEZ_DBPREFIX .'reg`
						VALUES(
								"",
								"'. escape_str($_POST['email']) .'",
								"'. $pass .'",
								"'. $salt .'",
								"'. md5($salt) .'",
								0
								)';
				$res = mysqlQuery($sql);
				
				//Отправляем письмо для активации
				$url = BEZ_HOST .'engine/AdminPanel/?mode=reg&key='. md5($salt);
				$title = 'Register in AdminPanel';
				$message = 'To activate your account click here
				<a href="'. $url .'">'. $url .'</a>';
				
				sendMessageMail($_POST['email'], BEZ_MAIL_AUTOR, $title, $message);
				
				//Сбрасываем параметры
				header('Location:'. BEZ_HOST .'engine/AdminPanel/?mode=reg&status=ok');
				exit;
			}
		}
	}
 }
 
?>