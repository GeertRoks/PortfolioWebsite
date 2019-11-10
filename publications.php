<?php

?>

<!--
Ref: Responsive Mobile Site https://www.hongkiat.com/blog/responsive-for-mobile-screens/
Ref: Php Blog: https://daveismyname.blog/creating-a-blog-from-scratch-with-php
-->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Geert Roks</title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  </head>
  <body>
    <nav>
      <div class="navlink" id="home" onclick="navigate(this);">Home <!-- Logo instead of 'Home' --></div>
      <div class="navlink" id="about" onclick="navigate(this);">About</div>
      <div class="navlink" id="projects" onclick="navigate(this);">Projects</div>
      <div class="navlink" id="publications" onclick="navigate(this);">Publications</div>
      <div class="navlink" id="contact" onclick="navigate(this);">Contact</div>
    </nav>

    <div class="main-photo">
      <img src="images/GuitarBackground.jpg" alt="Geert Roks - main photo">
    </div>
    <div class="container" id="mainphoto-overlay">
      <div class="container" id="title">
        <h1>Geert Roks</h1>
        <p>Music Technologist <br> Soft- and hardware developer</p>
      </div>
      <div class="container" id="arrowdownContainer">
        <img src="images/arrowdownWhite.png" alt="Arrow down" id="arrowdown">
      </div>
    </div>

    <section id="content">
      <div class="container" id="content_inner">

        <article class="post">
          <div class="container" id="post-image">
            <img src="images/imageplaceholder.jpg" alt="placeholder">
          </div>
          <div class="container" id="post-content">
            <h2 id="postname">Postname</h2>
            <p id="postdescription">Short description of the post.</p>
          </div>
        </article>
        <article class="post">
          <div class="container" id="post-image">
            <img src="images/imageplaceholder.jpg" alt="placeholder">
          </div>
          <div class="container" id="post-content">
            <h2 id="postname">Postname</h2>
            <p id="postdescription">Short description of the post. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </article>
        <article class="post">
          <div class="container" id="post-image">
            <img src="images/imageplaceholder.jpg" alt="placeholder">
          </div>
          <div class="container" id="post-content">
            <h2 id="postname">Postname</h2>
            <p id="postdescription">Short description of the post. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </article>
      </div>
    </section>

    <footer>
      <div class="container" id="Copyright">
        Copyright © 2019 Geert Roks
        <a href="https://github.com/GeertRoks" target="_blank" id="Github" title="Geert on Github">
          <img src="images/GitHub.png" alt="GitHub">
        </a>
        <a href="https://www.linkedin.com/in/geert-roks-42325a15a/" target="_blank" id="LinkedIn" title="Geert on LinkedIn">
          <img src="images/LinkedIn.png" alt="LinkedIn">
        </a>
        <a href="https://www.researchgate.net/profile/Geert_Roks" target="_blank" id="ResearchGate" title="Geert on ResearchGate">
          <img src="images/ResearchGate.png" alt="ResearchGate">
        </a>
      </div>
    </footer>

    <script type="text/javascript" src="scripts/script.js"></script>
  </body>
</html>
