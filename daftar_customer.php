<?php
include("config.php");
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8" name="viewport" content="width=device-width", initial-scale=1.0>
     <title>Daftar Member</title>
     <link rel="stylesheet" href="assets/css/bootstrap.css">
     <script src="assets/js/jquery.min.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/bootstrap.js"></script>
     <script type="text/javascript">
     Add = () =>{
       document.getElementById('action').value = "insert";
       document.getElementById('nama').value = "";
       document.getElementById('alamat').value = "";
       document.getElementById('kontak').value = "";
       document.getElementById('username').value = "";
       document.getElementById('password').value = "";
     }
     </script>
   </head>
   <body>
     <div class="container" align="center" style="margin-top: 50">
       <div class="card col-sm-6">
         <div class="card-body text-left">
           <h4>Daftar Menjadi Member</h4>
           <br>
           <form action="proses_daftar_customer.php" method="post">
             <input type="hidden" name="action" id="action">
             Nama
             <input type="text" name="nama" class="form-control" required>
             Alamat
             <input type="text" name="alamat" class="form-control" required>
             Kontak
             <input type="text" name="kontak" class="form-control" required>
             Username
             <input type="text" name="username" class="form-control" required>
             Password
             <input type="text" name="password" class="form-control" required>
             <br>
             <button type="submit" name="save_customer" onclick="Add()" class="btn btn-block btn-dark">
               Daftar
             </button>
             <br>
           </form>
         </div>
       </div>
     </div>
   </body>
 </html>
