<?php
								
								$serv="localhost";
								$user="root";
								$pass="ketcia";
								
								$con=mysqli_connect($serv,$user,$pass);
								if($con){
									mysqli_select_db($con,"GREEN_FARM");
									
								}
								else{
									echo "echec";
								}
								if(isset($_POST['ok'])){
									
									$nom=$_POST['nom'];
									
									$email=$_POST['mail'];
									
									$mes=$_POST['text'];
									
								$query1="insert  INTO contact VALUES(default,'$nom','$email','$mes')";
								
								$res=mysqli_query($con,$query1);
								if($res){
									header ('LOCATION:/GREEN-FARM/contact.php');
									//include('contact.php');
								}
								else{
									echo "echec";
								}
								}
								
								?>