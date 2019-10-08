<?php
  date_default_timezone_set('America/Vancouver');
  include 'dbh.inc.php';

  if (isset($_POST['commentSubmit']) && !empty($_POST['message'])) {
      $uid = $_POST['uid'];
      $date = $_POST['date'];
      $message = $_POST['message'];

      $sql = "INSERT INTO comments (uid, date, message)
      VALUES ('$uid','$date','$message')";
      $result = $conn->query($sql);

      header("Location: https://aronchen.com/fb-post-memorialization.php#final-thought");
      exit;
    }else{

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Aron Chen - Facebook Post-Memorialization">
  <meta property="og:description" content="Facebook Post-Memorialization is an integrated experience that empowers the users who want to continue to support their loved one in case of a fatal incident. Upon their accounts being memorialized, users can deliver farewell letters to individuals, create a secret support group for their friends and families, and pass down their values and love through a pinned post on their Facebook profile. It is a personal project that was inspired and driven by my childhood memory.">
  <meta property="og:image" content="images/thumbnails/AFTERLIFE.png">
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
    <a href="#project-overview" id="sidebar-1" class="sidebar">Project Overview</a>
    <a href="#background" id="sidebar-2" class="sidebar">Background</a>
    <a href="#proposal" id="sidebar-3" class="sidebar">Proposal</a>
    <a href="#final-thought" id="sidebar-4" class="sidebar">Final Thought</a>
  </div>
  </div>

  <!-- PROJECT TITLE -->
  <section class="container project-title-body afterlife-title-img top-margin-5">
    <h1 id="project-title">Facebook Post-Memorialization</h1>
  </section>

  <!-- PROJECT OVERVIEW -->
  <section class="container project-body" id="project-overview">
    <h1 class="col-1of1"><strong>PROJECT OVERVIEW</strong></h1>
    <div class="col-1of1 container">
      <div class="col-2of3">
        <p>Facebook Post-Memorialization is an integrated experience that empowers the users who want to continue to support their loved one in case of their death. Upon their accounts being memorialized, users can deliver farewell letters to individuals, create a secret support group for their friends and families, and pass down their values and love through a pinned announcement on their Facebook profile. It is a personal project that was inspired and driven by my childhood memory.</p>
        <h2 class="ablue">CHALLENGE</h2>
        <p>How might we continue to support our loved ones even after our death?</p>
      </div>
      <div class="col-1of3 padding-left-flex">
        <h2 class="ablue">TEAM</h2>
        <p>Just Me!</p>
        <h2 class="ablue">TOOLS</h2>
        <p>Sketch, Principle</p>
        <h2 class="ablue">TYPE</h2>
        <p>Case Study</p>
        <h2 class="ablue">PROJECT LENGTH</h2>
        <p>3 Weeks (Summer 2019)</p>
      </div>
    </div>
  </section>

  <!-- BACKGROUND -->
  <section class="container project-body top-margin-3" id="background">
    <h1 class="col-1of1"><strong>BACKGROUND</strong></h1>
    <p>As a product designer, I have devoted myself to bringing joy and happiness to people's lives. I believe in achieving my goal; we must first reduce the unnecessary suffering that each individual experiences. The story began when I was 12; I got into an accident which sent me to the emergency room. To me, that was my first near-death experience. However, instead of being terrified of the pain, what left me a life long memory was my father's worrying face. As he held on to my fractured arm while waiting for the doctor, I asked myself, what if I died today, what would happen to the people I love?</p>

    <div class="col-1of1  top-margin-4">
      <img src="images/AFTERLIFE/hospital.jpg" alt="hospital stock photo" style="width:100%;height:100%">
    </div>

    <p class="top-margin-2">Since the incident, I have been living healthily and in no shape or form am I close to death. Yet, I can't help but continue to wonder what could've happened to my parents and my brother if I were to die on that day. Death is a natural part of our lives. While I try to live my life to the fullest, I worry what would happen to my loved ones if an adverse event was ever to happen to me. Particularly my father, who tend to be more emotionally vulnerable than my other family members.</p>

    <p>According to the article on CNN(2014), people who experience sudden losses face an extraordinary challenge to grief and mourn. The lack of time and warning to accept the incident have caused an inability to move forward with their lives. While other end-of-life experiences get to bring closure to the deceased by saying words such as ‘I love you,’ survivors with sudden losses do not.</p>

    <div class="col-1of1  top-margin-4">
      <img src="images/AFTERLIFE/cnn-news-post.jpg" alt="cnn news post" style="width:100%;height:100%">
    </div>
    <div class="col-1of1 bottomnote">
      CNN news article about going on after sudden loss of a loved one.
    </div>

    <p class="top-margin-2">With Prolonged Grief Disorder being added into the <a class="intext-link" href="mailto:https://icd.who.int/browse11/l-m/en#/http://id.who.int/icd/entity/1183832314">ICD-11</a> — the International Classification of Diseases, I wanted to help support people who encounter sudden losses of their loved ones. Grief is a natural process that occurs to everyone, but disorders such as the PGD should not be part of the necessary suffering. <strong style="color:black;">If design can help to improve the end-of-life experience of the dying, could it also help to support the survivors to grieve and mourn?</strong></p>
  </section>

  <!-- PROPOSAL -->
  <section class="container project-body top-margin-3" id="proposal">
    <h1 class="col-1of1"><strong>PROPOSAL</strong></h1>
    <div class="col-1of1">
        <h2 class="ablue">RESEARCH</h2>
        <p>From my secondary research, I learned that one of the significant factors that determine the survivor’s experiences is the ability to bring closure to the relationship with the deceased. People who lost their loved ones due to extended illness or advanced age are less likely to experience Prolonged Grief Disorder. They were given the time to grief along with the dyings. Together, they gradually embraced reality and were able to share their love and say goodbye to each other. On the other hand, people who encountered sudden losses of their loved ones did not have the same chance to reconcile with the deceased.</p>

        <p>When I posted a question in a Facebook group named Grief Support Group asking, “What is the one thing you wish she/he/they had left for you?” Many had responded that they simply wished for more “words” from the deceased. Letters, voice messages, songs, instruction on what to do after their departure, or even a simple goodbye can have such an emotional impact on the survivors. To the bereaved, they wanted to be able to remember their loved ones and words often are the most effective medium to do so.</p>

        <div class="col-1of1 top-margin-4">
          <img src="images/AFTERLIFE/post-response.png" alt="Responses to Facebook post" style="width:100%;height:100%">
        </div>
        <div class="col-1of1 bottomnote">
          Some responses to my Facebook post.
        </div>

        <p class="top-margin-2">Memorialization is a powerful feature that turns Facebook into a place for people to honour the memory of their loved ones. Users can assign legacy contact to allow their families to manage tribute posts, request to remove the account, and respond to new friend requests. Ultimately, these memorialized profiles have become a place for people to support one and the other.</p>

        <div class="col-1of1 container top-margin-4">
          <div class="col-2of3 project-gif">
            <img src="images/AFTERLIFE/legacy-contact.jpg" alt="legacy contact screenshot">
          </div>
          <div class="col-1of3">
            <p class="sidenote-noborder">Legacy contact can perform actions such as manage tribute posts, request account removal, and swithc profile photo.</p>
          </div>
        </div>

        <p class="top-margin-2">Recognizing the usefulness of the feature; however, the memorialized setting experience lacks empathy for the users to take initiatives in supporting their loved ones upon their death. By leveraging the existing tools on Facebook, such as Groups, Messenger and Pinned Post, I want to empower the people who hold similar concern like mine. So, even in the case of an unfortunate accident, we could still continue to support our loved ones to move forward in their lives.
        </p>

        <div class="col-1of1 top-margin-4 container center over-img">
          <img src="images/AFTERLIFE/wireframing.png" alt="Wireframing photo">
        </div>
        <div class="col-1of1 bottomnote">
          Wireframes I made upon studying Facebook informational architecture.
        </div>
      </div>

      <div class="col-1of1 container top-margin-3">
        <h2 class="ablue">FACEBOOK POST-MEMORIALIZATION</h2>
        <p>Adapting to the existing pattern on Facebook, I have created Facebook Post-Memorialization within the Memorialization control setting. By capturing moments when users wanted to assign their legacy contact, we would introduce features that could further allow them to continue to support their loved ones upon their accounts' memorialization.</p>
        <div class="col-1of1 container top-margin-4">
          <div class="col-2of3 container center">
              <video width="250px" height="auto" controls>
                <source src="videos/PM/entry.mp4" alt="Entry point for Facebook Post-Memorialization" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
          </div>
          <div class="col-1of3">
            <p class="sidenote-noborder">Entry point to discover Facebook Post-Memorialization.</p>
          </div>
        </div>
      </div>

      <div class="col-1of1 container top-margin-3">
        <h2 class="ablue">FAREWELL LETTERS</h2>
        <p>The core purpose of Post-Memorialization is to deliver words and messages to the users’ beloved families and friends. Farewell Letter was created precisely for that by making use of the Messenger app. It allows users to form their personal message using all the existing functions such as voice and video recording. The saved message then will be sent upon user’s account memorialization. Instead of displaying the letter in the conventional messenger UI, Farewell Letter simulate the physical act of opening a letter to convey a sense of formalness. The recipients can also save and store the message on their own devices so that they could still access it even when they are offline.</p>
        <div class="col-1of1 container">
          <div class="col-1of2 container center top-margin-2">
            <video width="250px" height="auto" controls>
              <source src="videos/PM/farewell-letter.mp4" alt="Farewell Letters prototype for Facebook Post-Memorialization" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="bottomnote-center">Form a Farewell Letter for your loved ones.</p>
          </div>
          <div class="col-1of2 container center top-margin-2">
            <video width="250px" height="auto" controls>
              <source src="videos/PM/farewell-letter-preview.mp4" alt="Farewell Letters Preview prototype for Facebook Post-Memorialization" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="bottomnote-center">Preview of receiving a Farewell Letter.</p>
          </div>
        </div>
      </div>

      <div class="col-1of1 container top-margin-3">
        <h2 class="ablue">SUPPORT GROUPS</h2>
        <p>Part of my biggest worries to the "What if I'm gone" scenario was the potential lack of social and emotional supports for my family. This is especially crucial since some people could isolate themselves during the process of grieving. Support Groups were designed so that users could gather the people they care so dearly about and create a private environment to allow them to support one and each other. Users would assign their legacy contacts to become the group admin and can post an announcement to share her/his/their value and love to the group. To differentiate Support Group from other regular groups, figures of plant and heart are placed overlaying the cover image. Due to the nature of the support groups, the privacy setting is restricted to "Secret" to prevent others from discovering them.</p>
        <div class="col-1of1 container">
          <div class="col-1of2 container center top-margin-2">
            <video width="250px" height="auto" controls>
              <source src="videos/PM/support-group.mp4" alt="Support Groups prototype for Facebook Post-Memorialization" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="bottomnote-center">Create a Support Group for your loved ones.</p>
          </div>
          <div class="col-1of2 container center top-margin-2">
            <div class="col-1of1 container center">
            <video width="250px" height="auto" controls>
              <source src="videos/PM/support-group-preview.mp4" alt="Support Groups Preview prototype for Facebook Post-Memorialization" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            </div>
            <p class="bottomnote-center">Preview of a Support Group.</p>
          </div>
        </div>
      </div>

      <div class="col-1of1 container top-margin-3">
        <h2 class="ablue">PINNED ANNOUNCEMENT</h2>
        <p>Unlike the announcement users could make in Support Groups, Pinned Announcement is made to be shared in public. These announcement posts will appear on the user's memorialized profile with a section named "Words from [User's name]." They act as the digital version of an ethical will — a way to communicate your values, experiences, and life lessons to your friends and families. Also, they provide a chance for the user to say goodbye to the ones he/she/they love once and for all. Instead of having the families to go through a possible challenging experience of announcing their deaths, pinned announcement allowed the users to deliver that message for them.</p>
        <div class="col-1of1 container top-margin-2">
          <div class="col-1of2 container center top-margin-2">
            <video width="250px" height="auto" controls>
              <source src="videos/PM/pinned-announcement.mp4" alt="Pinned Announcement prototype for Facebook Post-Memorialization" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="bottomnote-center">Save a Pinned Announcement to share your values and love.</p>
          </div>
          <div class="col-1of2 container center top-margin-2">
            <video width="250px" height="auto" controls>
              <source src="videos/PM/pinned-announcement-preview.mp4" alt="Pinned Announcement preview prototype for Facebook Post-Memorialization" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p class="bottomnote-center">Preview of a Pinned Announcement on a memorialized account.</p>
          </div>
        </div>
      </div>
  </section>

  <!-- FINAL THOUGHT -->
  <section class="container project-body top-margin-3" id="final-thought">
    <h1 class="col-1of1"><strong>FINAL THOUGHT</strong></h1>

    <div class="col-1of1 container top-margin-4" style="margin-bottom:2em;">
      <div class="col-2of3 quotes">
        “The truth is, rarely, can a response make something better. What makes something better is connection.”
      </div>
      <div class="col-1of5 author">
        Brene Brown, PhD LMSW
      </div>
    </div>
    <div class="col-1of1 container">
      <p>Grieving is a natural process of life. Yet, due to the unexpected sudden incidents, the bereaved are forced to experience unnecessary sufferings. Understanding each individual mourn differently from one to another, I wanted people to be the ones to create what could help to support their loved ones. From talking to the people around me, I learned that most of them tend to avoid the topic of death. While it is certainly a challenging experience, I genuinely hope that people would take initiatives to plan for both their end-of-life and afterlife experiences. Whether it's getting insurance, designing your own funeral, or making a voice recording of you saying, "I love you." Every small step can make a significant impact in supporting your loved ones. That's the motive behind Facebook Post-Memorialization— to provide a place so people could take little steps and bridge the connections between the people and their loved ones.</p>

      <p>My next iteration will incorporate the Facebook Fundraising feature since many had wished for their deceased loved ones to leave them money or insurance. This particularly impactful when the person who passes away is the family's major financial income. I also want to hear other people's ideas and would love to build them out! So, as an ending thought, I like to take this opportunity and ask you this other question I posted in the Grief Support Group. <strong style="color:black;">If you were to pass away at this moment, what is the one thing you would like to do for your loved ones?</strong></p>

      <p>Thank you!</p>
    </div>

    <div class="col-1of1 container top-margin-2">
      <?php
        echo
        "<form method='POST''>
          <input type='hidden' name='uid' value='Anonymous'>
          <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
          <div class='container'>
            <textarea name='message' placeholder='Leave a comment.'></textarea>
            </div><br>
            <div class='col-1of1 container' style='justify-content: flex-end;'>
            <button class='d-button' type='submit' name='commentSubmit'>Submit Comment</button>
          </div>
        </form>";
        ?>
        <div class="col-1of1 container right-to-center top-margin-2">
          <a href="visier.html" class="d-button"><strong>NEXT PROJECT |</strong> Visier &rarr;</a>
        </div>
        <?php
        echo "<div class='top-margin-3 col-1of1 container'>";
        function getComments($conn){
          $sql = "SELECT * FROM comments";
          $result = $conn->query($sql);
          while($row = $result->fetch_assoc()){
            echo "<div class='comment-box'><p>";
            echo "<span class='uid'>".$row['uid']."</span><br>";
            echo nl2br($row['message']);
            echo "</p></div>";
          }
        }
        getComments($conn);
        echo "</div>";
       ?>
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
