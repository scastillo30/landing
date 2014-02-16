<?php 
	
	  if (isset($_POST['submit'])) {
		/*Configuración de acceso a Base de Datos*/

			/*Crear Conexión a la Base de Datos*/
			$conection = mysql_connect('localhost', 'nrbkstud_kblog', 'Repmok');
				if(!$conection) {
					die("Error Conexión BD: ".mysql_error());
				} 
			
			/* Acceso a la Base de Datos */
			$dblink = mysql_select_db('nrbkstud_komper_blog', $conection);
				if(!$dblink) {
					die("Error de Access BD". mysql_error());
				}

		/*Fin de Configuración de Base de Datos*/

		/*Verificación de Datos de Correo*/
		$EmailCheck = (string)$_POST["Email"];
		$Email = (string)$_POST["Email"];
		$Name = (string)$_POST["Name"];
		$LastName = (string)$_POST["LastName"];


		// Query to select the email
		$query = 'SELECT email FROM Users WHERE email = "'.$EmailCheck.'"';
		$result = mysql_query($query);
		$array = mysql_fetch_assoc($result);

		if(gettype($array['email']) == 'string')
		{ $Message = "exist"; }
	    else
		{ 
			//If Email Dont exist Save it on the DB
			$objDateTime = new DateTime('NOW');

			$result = mysql_query("INSERT INTO Users (`email`, `name`, `lastName`, `date`) 
					  VALUES 
 						('".$Email."', '".$Name."','".$LastName."', '". $objDateTime->format('Y-m-d H:i:s')."')") or die("Down");

			$Message = "saved"; 
		}


		/********************************/
	}
	else
	{
		$Message = "fill";
	}
		ob_start(); 
        header("Location: http://komper.me?action=".$Message);
        ob_flush();
        exit();
?>

