<?php
		function secure_data($data){
			$data = trim($data);
	        $data = stripslashes($data);
	        $data = htmlspecialchars($data);
	
	        return $data;
		}

       function hash_password($password){
			return password_hash($password, PASSWORD_DEFAULT);
		}

        function connectionDB(){
            $host = 'localhost';
            $dbName = 'mister';
            $user = 'root';
            $pass = '';
            $hostDB = 'mysql:host='.$host.';dbname='.$dbName.';';
    
            try{
                $connection = new PDO($hostDB,$user,$pass);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
                return $connection;
            } catch(PDOException $e){
                die('ERROR: '.$e->getMessage());
            }
        }

?>