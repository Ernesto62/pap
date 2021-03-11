<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=="POST") {
	if (isset($_POST['nome'])&& isset($_POST['palavra_passe']) && isset($_POST['email'])) {
		$nome=$_POST['nome'];
		$email=$_POST['email'];
		$palavra_passe=$_POST['palavra_passe'];

		$con=new mysqli ("localhost","root","","eletrodomesticos");
		if ($con->connect_errno!=0) {
			echo "Erro<br>".$con->connect_error;
			exit;
		}
		else{
			$sql="select * from utilizadores where nome=? and palavra_passe=? and email=?";
			$stm=$con->prepare($sql);
			if ($stm!=false) {
				$stm->bind_param("sss",$nome,$email,$palavra_passe);
				$stm->execute();
				$res=$stm->get_result();
				if ($res->num_rows==1) {
			
					$_SESSION['login']="correto";
				}
				else{
					
					$_SESSION['login']="incorreto";
				}
				header("refresh:5;url=index.html");
			}
			else{
				echo $con->connect_error;
				exit;
			}
		}
	}
}

?>