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
								if(isset($_POST['users'])){
									
									$nom=$_POST['nom'];
									
									$email=$_POST['email'];
									
									$password=$_POST['password'];
									
									$psrepeat=$_POST['psrepeat'];
									
									
									
									if($password!=$psrepeat){
										echo "le mot de passe n'est pas correct";
									}
									else{
										$query1="SELECT * from users where nom='$nom' && email='$email'";
										
										$res=mysqli_query($con,$query1);
										$row=mysqli_num_rows($res);
										
										if($row==0){
											$query2="insert  INTO users VALUES(default,'$nom','$email','$password')";
											$result=mysqli_query($con,$query2);
											if($result){
												//include('signin.php');
												header ('LOCATION:/GREEN-FARM/signin.php');
											}
											else{
												echo "echec";
											}
										}
										else{
											echo "users existe deja";
											
										}
									}
									
									
								
									
								
								}
								?>