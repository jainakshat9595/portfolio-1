<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Akshat Jain</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    
    <!-- Necessery Styes -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../styles/animate.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="../styles/main.css">

    <!-- Necessery JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.firebase.com/js/client/2.2.1/firebase.js"></script>
    <script src="../scripts/jquery.knob.min.js"></script>
    <script src="../scripts/wow.min.js"></script>
    
  </head>
  <body>
    
    <!-- Loading Overlay Block -->
    <div id="loading-overlay" class="loading-overlay">
      <div class="container-fluid">
        <div id="progstat" class="row">
        </div>
        <div id="progressper" class="row">
        </div>
        <div id="progressbar" class="row">
        </div>
      </div>
    </div>

    <!-- Side Navigation Bar for deskktop -->
    <div class="side-menu">
      <div class="sec-outer">
        <a style="text-decoration:none;" href="#work"><i class="nav-ico1 nav-ico fa fa-flag-checkered fa-2x"><span class="menu-label ml1">Work</span></i></a>
        <a style="text-decoration:none;" href="#skill"><i class="nav-ico2 nav-ico fa fa-code fa-2x"><span class="menu-label ml2">Skills</span></i></a>
        <a style="text-decoration:none;" href="#about"><i class="nav-ico3 nav-ico fa fa-paw fa-2x"><span class="menu-label ml3">About</span></i></a>
        <a style="text-decoration:none;" href="#contact"><i class="nav-ico4 nav-ico fa fa-phone fa-2x"><span class="menu-label ml4">Contact</span></i></a>
        <a style="text-decoration:none;" href="err.php"><i class="nav-ico5 nav-ico fa fa-pencil fa-2x"><span class="menu-label ml5">Blog</span></i></a>
        <a style="text-decoration:none;" href="err.php"><i class="nav-ico6 nav-ico fa fa-comments-o fa-2x"><span class="menu-label ml6">Testimonial</span></i></a>
      </div>
      <div class="sec-inner">
        <span class="menu-ico">
          <center>
            <i class="a1 fa fa-bars fa-2x"></i>
            <i class="a2 fa fa-times fa-2x"></i>
          </center>
        </span>
      </div>
    </div>

    <!-- Various Include -->
    <section style="margin-bottom:35vw;" id="main">
      <?php require("main.php"); ?>
    </section>
    
    <section id="work">
      <?php require("work.php"); ?>
    </section>

    <section id="quoute">
      <?php require("quoute.php"); ?>
    </section>

    <section id="skill">
      <?php require("skills.php"); ?>
    </section>
    
    <section id="about">
      <?php require("about.php"); ?>
    </section>
    
    <section id="contact">
      <?php require("contact.php"); ?>
    </section>
    
    <section id="footerBar">
      <?php require("foot.php"); ?>
    </section>
    
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
     <script>
       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-XXXXX-X');
       ga('send', 'pageview');
    </script>

    <!-- Custom JavaScript -->
    <script src="../scripts/main.js"></script>
    <!-- Firebase Functions -->
    <script src="../scripts/fb.js"></script>
    <!-- Validating Javascript -->
    <script src="../scripts/val.js"></script>
    <!-- Custom JavaScript for Loading Bar -->
    <script src="../scripts/load.js"></script>
    
</body>
</html>
