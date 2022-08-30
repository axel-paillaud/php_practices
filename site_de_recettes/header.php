<?php
    include_once('config/mysql.php');
    include_once('variables.php');
    include_once('functions.php');  
?>

<div class="header">
  <nav>
    <div class="nav-bar">
      <a href="home.php">Site de Recettes</a>
      <div>
        <ul class="nav-unordered-list">
          <li class="nav-list">
            <a class="nav-link" href="home.php"><button class="button-nav">Home</button></a>
          </li>
          <li class="nav-list">
            <a class="nav-link" href="contact.php"><button class="button-nav">Contact</button></a>
          </li>
          <li class="nav-list">
            <a class="nav-link" href="recipe_form.php"><button class="button-nav">Envoyer une recette</button></a>
          </li>
          <li class="nav-list">
            <a class="nav-link" href="logout.php"><button class="button-nav">Déconnexion</button></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>