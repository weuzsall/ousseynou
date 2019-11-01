
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Accueil</title>
    <link rel='stylesheet' type='text/css'  href='home.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <link rel="styleesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body>
   <div class="login-box">
       <form class="login-form" action="<?php $page ?>" method="POST">
           <h1> Bienvenue</h1>
           <input class="textb" type="text" name="" placeholder="Entrez votre email">
           <input class="textb" type="password" name="" placeholder="Entrez votre mot de passe">
           <div class="box">
           <select class="dtn">
           <option value="" selected>Se connecter en tant que</option>
           <option value="role">Administrateur</option>
           <option value="role">Secretaire</option>
           <option value="role">Medecin</option>
           </select> 
           </div>    
           <input class="login-btn" type="submit" name="" value="Se connecter">
       </form>
   </div> 
</body>
</html>
