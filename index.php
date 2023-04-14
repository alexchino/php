<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <title>page kids </title>
    <style>
        .box    {
            display:inline-block;
            text-align: center;
            margin-left: 120px;
            <margin-bottom:90px;

        }
     </style>  
</head>
<body>
<!--image and text-->
<nav class = "navbar navbar-light bglight">
<a class = "navbar-brand" href="#">
  <img src=".img/753945_games_game_gaming_play_video_icon.png" width="30" height="30" class="d-inline-block aling-top" alt="">
  pagekids
</a>
</nav>

<div class= "jumbotrom"> 
  <form action = "index.php " method="post">
    <div class ="box" >
        <div class= "card" style="width: 16rem; height:14rem;">
  <img class="card-img-top" scr="./img/gato.jpg" alt= "card image cap" style="width: 15rem;height:13rem;">
        <div class ="card-body">
            <h5 class ="card-title"> Gato</h5>
            <input type="submit" class="btn btn-primary" name="gato" value ="reproducir">
 </div>
     </div>
         </div>

<div class ="box" >
        <div class= "card" style="width: 16rem; height:14rem;">
  <img class="card-img-top" scr="./img/perro.jpg" alt= "card image cap" style="width: 15rem;height:13rem;">
        <div class ="card-body">
            <h5 class ="card-title"> Perro</h5>
            <input type="submit" class="btn btn-primary" name="perro" value ="reproducir">
 </div>
     </div>
         </div>

         <div class ="box" >
        <div class= "card" style="width: 16rem; height:14rem;">
  <img class="card-img-top" scr="./img/vaca.jpg" alt= "card image cap" style="width: 15rem;height:13rem;">
        <div class ="card-body">
            <h5 class ="card-title"> Vaca</h5>
            <input type="submit" class="btn btn-primary" name="vaca" value ="reproducir">
 </div>
     </div>
         </div>
      </div>
    </form>
</body>
</html>
<?php
include_once("animales.php");
?>