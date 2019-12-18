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
		   					
							
		   					if(isset($_POST['login'])){
								
		   						$nom=$_POST['nom'];
		   						$pass=$_POST['pass'];
									$query1="SELECT * from users where nom='$nom' && password='$pass'";
										
										$res=mysqli_query($con,$query1);
										$row=mysqli_num_rows($res);
										if($row==1){
										
												
												header ('LOCATION:/GREEN-FARM/admin/index.php');
												//include('/admin/index.php');
											}
											else{
												//include("s'inscrire.php");
												header ("LOCATION:/GREEN-FARM/s'inscrire.php");
											}
							}
		   					
		   					 ?>