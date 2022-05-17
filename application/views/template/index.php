<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <title>Rechauffement climatique</title>

    <!-- Bootstrap core CSS -->
    <link  href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css"  rel="stylesheet"/>


    <!-- Additional CSS Files -->

    <link  href="<?php echo base_url(); ?>assets/css/fontawesome.css"  rel="stylesheet"/>
    <link  href="<?php echo base_url(); ?>assets/css/templatemo-stand-blog.css"  rel="stylesheet"/>
    <link  href="<?php echo base_url(); ?>assets/css/owl.css"  rel="stylesheet"/>

<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Rechauffement climatique</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>loginAdmin/login">Login
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" style="">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
          <?php 
                    foreach ($test->result() as $row)
                    {
                        echo 
                        '
                            <div class="item">
                            <img src="uploads/images/'.$row->image.'" alt="" style="height: 375px;">
                            <div class="item-content">
                              <div class="main-content">
                                <div class="meta-category">
                                  <span>'.$row->titre.'</span>
                                </div>
                                <a href="post-details.html"><h4>'.$row->description.'</h4></a>
                                <ul class="post-info">
                                  <li><a href="#">Admin</a></li>
                                  <li><a href="#">May 12, 2020</a></li>
                                  <li><a href="#">12 Comments</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        ';
                    }
                 ?>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <section class="call-to-action" style="display: none;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Stand Blog HTML5 Template</span>
                  <h4>Creative HTML Template For Bloggers!</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                <?php 
                    foreach ($test->result() as $row)
                    {
                        echo 
                        '
                          <div class="col-lg-12" style="">
                            <div class="blog-post">
                              <div class="blog-thumb">
                                <img style="height:400px;" src="uploads/images/'.$row->image.'" alt="">
                              </div >
                              <div class="down-content">
                                <span>'.$row->titre.'</span>
                                <ul class="post-info">
                                  <li><a href="#">Admin</a></li>
                                  <li><a href="#">May 31, 2020</a></li>
                                  <li><a href="#">12 Comments</a></li>
                                </ul>
                                <p>'.$row->contenue.'</p>
                              </div>
                            </div>
                          </div>
                        ';
                    }
                 ?>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="Recherche..." autocomplete="on">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12" style="display: none;">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="post-details.html">
                          <h5>Vestibulum id turpis porttitor sapien facilisis scelerisque</h5>
                          <span>May 31, 2020</span>
                        </a></li>
                        <li><a href="post-details.html">
                          <h5>Suspendisse et metus nec libero ultrices varius eget in risus</h5>
                          <span>May 28, 2020</span>
                        </a></li>
                        <li><a href="post-details.html">
                          <h5>Swag hella echo park leggings, shaman cornhole ethical coloring</h5>
                          <span>May 14, 2020</span>
                        </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Prochaine Article</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="<?= base_url() ?>article">- Changement climatique</a></li>
                        <li><a href="<?= base_url() ?>article">- L'érosion du sol </a></li>
                        <li><a href="<?= base_url() ?>article">- Destruction du couche d'ozone</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Mots Clé</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="<?= base_url() ?>article">Climat</a></li>
                        <li><a href="<?= base_url() ?>article">Changement</a></li>
                        <li><a href="<?= base_url() ?>article">Réchauffement</a></li>
                        <li><a href="<?= base_url() ?>article">Envirenement</a></li>
                        <li><a href="<?= base_url() ?>article">Madagascar</a></li>
                        <li><a href="<?= base_url() ?>article">WWF</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="https://www.facebook.com/heritiana.andrianjafison/">Facebook</a></li>
              <li><a href="https://www.linkedin.com/in/heritiana-andrianjafison-0b9bab1a6/">Linkedin</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2022 Heritiana Andrianjafison
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/slick.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/isotope.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>