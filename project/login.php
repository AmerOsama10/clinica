<?php
session_start(); 
include("database.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username=trim($_POST['username']);
    $password=trim($_POST['password']);
		if (empty($_POST['username']) || empty($_POST['password']))
 		{
		$msg = "<h1>Username or Password is invalid <br>The username or the password isn't entered</h1> ";
		echo $msg;
	
 		}
		else
 		{
		try{
			$query = "select * from `login` where `username`=:username and `password`=:password";
		$result = $Connection->prepare($query);
        $result->bindParam('username', $username, PDO::PARAM_STR);
        $result->bindValue('password', $password, PDO::PARAM_STR);
        $result->execute();
        $count = $result->rowCount();
        $row   = $result->fetch(PDO::FETCH_ASSOC);
         if($count == 1 && !empty($row)) {
         $_SESSION['user_id']   = $row['id'];
         $_SESSION['login_user']=$row['username']; 
	     header("location: welcome.php");

                                     } 
         else
         {
         $msg = "<h1>Username or Password isn't correct</h1> ";
         echo $msg;
         }
           } //end try
         catch (PDOException $e) {
         echo "Error : ".$e->getMessage();
          } //end catch
        }
        }//end inner if condition  
else 
{
$msg = "<h1>Username or Password is invalid</h1>";
echo $msg;
}


