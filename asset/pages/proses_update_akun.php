								<?php
									include "koneksi.php";
									@$id=$_POST['id'];
									@$username=$_SESSION['username'];
									$query="";
									$query2="SELECT * FROM user WHERE id='$id'";
									$cekdata = mysqli_query($koneksi,$query2);
									$cdata = mysqli_fetch_array($cekdata);
									if(empty($cdata)){
										$query="UPDATE user SET username='$username' WHERE id='$id'";
									}
									else{
									$query="UPDATE user SET username='$username' WHERE id='$id'";
									}
									
									$hasil=mysqli_query($koneksi,$query);
									if($hasil){
										header ('location: profil.php');
									}else{
										echo "Gagal Update Data";
									}
								?>