<?php 


$isLogined = false;

if (isset($_SESSION['auth']) && $_SESSION['auth'] === true) {
   $isLogined = true;
}

?>

<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       body{
           padding-top: 3rem;
       }
       .container {
           width: 400px;
       }
   </style>
</head>
<body>
<div class="container">
       <h3>Control Panel</h3>
       <?php if($isLogined === false) : ?>
       <form action="?controller=login" method="post">
           <div class="row">
               <div class="field">
                   <label>Email: <input type="email" name="email"></label>
               </div>
           </div>
           <div class="row">
               <div class="field">
                   <label>Password: <input type="password" name="password"><br></label>
               </div>
           </div>
           <input type="submit" class="btn" value="Login">
       </form>
       <?php else :?>
       <div>
           <a class="btn" href="?controller=logout&action=logout">Logout</a>
           <a class="lsbtn btn" href="?controller=users">List of all Users</a>
           <a class="btn" href="?controller=roles&action=addForm">Add new role</a>
       </div>
       
       <?php endif;?>
</div>
</body>
</html>
