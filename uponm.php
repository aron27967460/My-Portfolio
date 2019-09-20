<?php
  date_default_timezone_set('America/Vancouver');
  // include 'dbh.inc.php';
  // include 'comments.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/favicon.png" sizes="16x16">
  <link rel="icon" type="image/png" href="images/favicon.png" sizes="192x192">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/flex.css">
  <script src="nav-dropdown.js"></script>
  <script src="side-nav.js"></script>
  <title>
    Aron Chen - Product Designer
  </title>
</head>

<body>
  <!-- Hamburger Navigation -->
  <nav id="myNav" class="overlay">
    <div class="container">
      <a id="closeNav" onclick="closeNav()">&times;</a>
      <div class="overlay-content col-1of1">
      <a href="https://aronchen.com/" class="overlay-nav-button col-1of1">Work</a>
      <a href="about-me.html" class="overlay-nav-button col-1of1">About</a>
      <a href="files/Resume.pdf" target="_blank" class="overlay-nav-button col-1of1">Resume</a>
      <a href="mailto:aron.pt.chen@gmail.com" class="overlay-nav-button col-1of1">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Main Navigation -->
  <a id="toggle" onclick="openNav()">	&#9776;</a>
  <nav class="container nav-bar right">
      <a href="https://aronchen.com/" id="logo"><img src="images/word-logo.png" alt="logo"></a>
      <a href="https://aronchen.com/" class="nav-button">Work</a>
      <a href="about-me.html" class="nav-button">About</a>
      <a href="files/Resume.pdf" target="_blank" class="nav-button last-nav-button">Resume</a>
  </nav>

  <!-- side navigation -->
  <div class="sidebar-container">
    <button onclick="topFunction()" id="topBtn" title="Go to top">Back to top &uarr;</button>
    <div id="project-nav">
    <a href="#background" id="sidebar-1" class="sidebar">Background</a>
    <a href="#solution" id="sidebar-2" class="sidebar">Solution</a>
    <!-- <a href="#execution" id="sidebar-3" class="sidebar">Execution</a> -->
    <a href="#final-thought" id="sidebar-4" class="sidebar">Final Thought</a>
  </div>
  </div>

  <!-- PROJECT TITLE -->
  <section class="container project-title-body top-margin-5">
    <h1 id="project-title">Afterlife</h1>
  </section>

  <!-- PROJECT OVERVIEW -->
  <section class="container project-body" id="background">
    <h1 class="col-1of1"><strong>BACKGROUND</strong></h1>
    <p>As a product designer, I have devoted myself to bringing joy and happiness to people’s lives. I believe in achieving my goal, we must first reduce the unnecessary suffering that each individual experiences. When I was 12, I got into an accident and was sent to the emergency room. To me, that was my first near-death experience. However, instead of being terrified of the pain, what left me a life long memory was my father’s worrying and crying face. Watching his shivering hands tried to hold my broken arm while waiting for the doctor was one of my biggest struggles. It was then, I asked myself, what if I died today, what will happen to the people I love? </p>

    <p>Since the incident, I have been living healthily and in no shape or form was I close to death. Nevertheless, I continued to wonder the same question. Death is simply part of our lives and accident happens. While I try to my life to the fullest, I worry what would happen to my loved ones if an adverse event was to happen to me. Particularly my father, who tend to be more emotionally vulnerable than my other family members.</p>

    <p>According to the article on CNN(2014), people who experience sudden losses face an extraordinary challenge to grief and mourn. The lack of time and warning to accept the incident have caused an inability to move forward with their lives. While other end-of-life experiences get to bring closure to the deceased by saying words such as ‘I love you,’ survivors with sudden losses do not.</p>

    <p>With Prolonged Grief Disorder being added into the ICD-11 — the International Classification of Diseases, I wanted to help support people who encounter sudden losses of their loved ones. Grief is a natural process that occurs to everyone, but disorders such as the PGD shouldn’t be part of the necessary suffering. If design can help to improve the end-of-life experience of the dying, I wonder if it could also be used to support the survivors to grieve and mourn?</p>
  </section>

  <!-- DESIGN PROCESS -->
  <section class="container project-body top-margin-3" id="solution">
    <h1 class="col-1of1"><strong>SOLUTION</strong></h1>
  </section>

  <!-- EXECUTION -->
  <!-- <section class="container project-body top-margin-3" id="execution">
      <h1 class="col-1of1"><strong>EXECUTION</strong></h1>
  </section> -->

  <!-- FINAL THOUGHT -->
  <section class="container project-body top-margin-3" id="final-thought">
    <h1 class="col-1of1"><strong>FINAL THOUGHT</strong></h1>
  </section>

  <section class="container project-body top-margin-3">
    <?php
    echo
    "<form>
      <input type='hidden' name='uid' value='Anonymous'>
      <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
      <div class='container'>
      <textarea name='message'></textarea>
      </div><br>
      <div class='col-1of1 container' style='justify-content: flex-end;'>
      <button class='d-button' type='submit' name='commentSubmit'>Submit Comment</button>
      </div>
    </form>";
     ?>

     <div class="col-1of1 container right-to-center top-margin-1">
       <a href="#" class="d-button"><strong>NEXT PROJECT |</strong> Project Title &rarr;</a>
     </div>
  </section>

  <footer class="container">
    <div id="let-chat" class="container"><div class="col-1of1">Let's chat.</div></div>
    <div class="col-1of1 container">
    <div class="footer-button"><a href="mailto:aronc@sfu.ca">Contact</a></div>
    <div class="footer-button"><a href="https://www.linkedin.com/in/aron-chen/">Linkedin</a></div>
    <div class="footer-button"><a href="https://github.com/aron27967460/My-Portfolio.git">Git Repo</a></div>
    <div class="footer-button"><a href="citation.html">Citation</a></div>
    <div class="footer-button"><div>&copy; 2019 Aron Chen</div></div>
  </footer>
  </body>
</html>
