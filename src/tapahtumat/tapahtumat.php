<?php
require('../wp-blog-header.php');
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>spbl.org</title>
        <meta name="description" content="spbl.org">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="/styles/bootstrap.min.css">
        <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css" >
        <link href="http://fonts.googleapis.com/css?family=Averia+Sans+Libre" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="/styles/main.css">
        <link rel="shortcut icon" href="/images/favicon.ico" />
        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <a href="/"><img id="logo" alt="spbl.org logo" src="/images/logo-web.jpg"/></a>
            </div>
            <div id="navbar" class="">
              <ul class="nav navbar-nav">
                <li><a href="/">Etusivu</a></li>
                <li><a href="/lajiesittely">Lajista</a></li>
                <li><a href="/tiedotteet">Tiedotteet</a></li>
                <li><a href="/julkaisut">Julkaisut</a></li>
                <li class="active"><a href="/tapahtumat">Tapahtumat</a></li>
                <li><a href="/joukkueet">Joukkueet</a></li>
                <li><a href="/yhteys">Yhteys</a></li>
                <li><a href="/lisenssi">Lisenssi</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="container with-nav">
          <h1>Tapahtumat</h1>
            <table class="table table-striped">
             <thead>
               <tr>
                 <th>Tapahtuma</th>
                 <th>Päivämäärä</th>
               </tr>
             </thead>
             <tbody>
               <?php
               $args = array(
                 'post_type' => 'tapahtumat',
                 'meta_key' => 'event_date',
                 'meta_compare' => '>=',
                 'meta_value'=> time(),
                 'orderby' => 'meta_value_num');
               $all_posts = get_posts( $args );
               foreach( $all_posts as $post ){
                 echo '<tr>';
                 echo '<td><a href="/tapahtumat/?tapahtuma=' . get_the_ID($post) . '">' . get_the_title($post) . '</a></td>';
                 echo '<td>' . get_post_meta($post->ID, 'event_date', true) . '</td>';
                 echo '</tr>';
               } ?>
             </tbody>
           </table>
        </div>
        <h2 role="presentation" class="eof text-center">&#8749;</h2>
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <a href="/"><img id="logo" alt="spbl.org logo" src="/images/logo-web.jpg"/></a>
                <hr/>
                <ul class="simple-list">
                  <li class="active"><a href="/">Etusivu</a></li>
                  <li><a href="sample.html">Lajista</a></li>
                  <li><a href="#spbl">Suomen Paintball-liitto</a></li>
                  <li><a href="#news">Tiedotteet</a></li>
                  <li><a href="#events">Tapahtumat</a></li>
                  <li><a href="#contact">Yhteys</a></li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 right">
                spbl.org &copy; 2015
              </div>
            </div>
          </div>
        </footer>
        <!-- <script src="scripts/main.js"></script> -->
    </body>
</html>