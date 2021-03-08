<?php
  
  if(session_status() == PHP_SESSION_NONE)
  {
    session_start();
  }

  // if(!isset($_SESSION['isset']))
  // {
  //   header('Location: ../html/index.html');
  // }
?>

  <?php

  $servername="localhost";
  $username = "root";
  $password ="";
  $dbname = "dbms";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if($conn->connect_error)
  {
    die("Connection Failed : ".$conn->connect_error);
  }

  $sql = "select * from signup";
  $result = mysqli_query($conn, $sql);
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">

  @media only screen and (max-width: 450px)
    {
      .carousel-inner img
      {
        max-height: 200px; 
      }
    }
  .content
  {
    text-align: center;
  }
  iframe
  {
    margin-left: 10%;
  }

</style>
<body style="background-color: white;">

  <!--for home css-->
  <link rel="stylesheet" type="text/css" href="../css/demo.css">


    <!--========================Header code starts here=========================-->

    <?php
      include ('../includes/header1.php');
    ?>

    <!--====================Header code ends here=========================-->

<div class="container-fluid"> 
  <div class="row" style="margin-top: -20px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../images/endgame.png" alt="Chicago" style="width:100%; height: 500px; transition-duration: 2s;">
        <div class="carousel-caption">
        
        <pr>marvel studio</pr>
      </div>
      </div>



      <div class="item">
        <img src="../images/tanet.jpg" alt="Chicago" style="width:100%; height: 500px; transition-duration: 2s;">
        <div class="carousel-caption">
        
        <pr> action Crime-thriller</pr>
      </div>
      </div>

      <div class="item">
        <img src="../images/ludo.jpg" alt="Chicago" style="width:100%; height: 500px; transition-duration: 2s;">
        <div class="carousel-caption">
        
        <pr>Drama</pr>
      </div>
      </div>

      <div class="item">
         <img src="../images/taish.jpg" alt="Los Angeles" style="width:100%; height: 500px; transition-delay: 1s;">
        <div class="carousel-caption">
        
        <pr>chrime drama</pr>
      </div>
      </div>
    
      <div class="item">
        <img src="../images/holly.jpg" alt="New york" style="width:100%; height: 500px; transition-duration: 2s;">
        <div class="carousel-caption">
       
        <pr>Drama</pr>
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><!--for row-->
</div><!--container fluid-->
<hr>


  <!--===================================WEB SERIES===========================================-->
  <div class="container-fluid">
      <h4><b>Indian Web Series</b></h4>
      <div class="row"> 
      <?php
      include('../functionality/connection.php');
      $query = mysqli_query($conn, "SELECT * FROM webupload ORDER BY id DESC");
      while($row = mysqli_fetch_array($query))
      {

       echo '<div class="col-xs-12 col-sm-12 col-md-2 ">
          <div class="card">
                          <img class="card-img-top" src="../html/uploads/'.$row["imageinput"].'" alt="card-image" width="200" height="250" >
                              <div class="card-body">
                                <h4 class="card-text"><b>'.$row['name'].'</b></h4>
                               <p><b> '.$row["genre"].' &nbsp;- '.$row["duration"].' <br>'.$row["rating"].' imdb &nbsp; '.$row["imdb"].'</b>
                                 
                               
                                <button class="btn btn-warning" data-dismiss="modal" data-toggle="modal" data-target="#movie'.$row['id'].'" style="float:right; margin-top:-20px;"> watch</button></p>

                                <div class="modal fade bg-transparent" id="movie'.$row['id'].'">
                               <div class="modal-dialog modal-xl" style="margin-left:15%; width:70%;">
                                
      
       
                                   <div class="modal-body" style="width:100%;">

                                    <div class=" my-auto">
                                       <button type="button" class="btn btn-default float-right mx-n2 pb-0 border-0 text-white" data-dismiss="modal" style="float:right;">X</button>
                                       </div>
                                    <div class="embed-responsive embed-responsive-16by9">
                                  <video  controls><source src="../html/uploads/'.$row['videoinput'].'" type="video/mp4"> </video>
                                  </div>
                                 </div>
        
       
                                
                              </div>
                            </div>


                              </div>
                        </div>
          </div>';
        }
 
   
        
          ?>

        <div class="col-xs-12 col-sm-12 col-md-2">
          
          <div class="card-body">
            <img src="../images/escape.jpg" style="width: 200px; height: 250px;">
            <h4 class="card-title"><b>Escape plan<b></h4>
            <p class="card-text">(2020) - 2 hour 17 min <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             thriller</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
          <img src="../images/chalaang.jpg" style="width: 200px; height: 250px;">
          <div class="card-body">
            <h4 class="card-title"><b>Chalaang<b></h4>
            <p class="card-text">(2020) - 2 hours <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             comedy</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
          <img src="../images/laxmi.jpg" style="width: 200px; height: 250px;">
          <div class="card-body">
            <h4 class="card-title"><b>laxmi<b></h4>
            <p class="card-text">(2020) - 2 hours <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             comedy-drama</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
          <img src="../images/hubie.jpg" style="width: 200px; height: 250px;">
          <div class="card-body">
            <h4 class="card-title"><b>Hubie Halloween<b></h4>
            <p class="card-text">(2020) - 2 hours 13 mins <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             drama-comedy</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
          <img src="../images/malang.jpg" style="width: 200px; height: 250px;">
          <div class="card-body">
            <h4 class="card-title"><b>Malang<b></h4>
            <p class="card-text">(2020) - 2 hours  <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             drama action thriller</p>
          </div>
        </div>
      </div><!--for row-->
    </div><!--container fluid--><br>

      <div class="container-fluid">
        <h4><b>Most Popular</b></h4>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2">
          <img src="../images/mirza.png" style="width: 200px; height: 250px;">
          <div class="card-body">
            <h4 class="card-title"><b>Mirzapur 2<b></h4>
            <p class="card-text">(2020) - 45 min each episode  <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             action-crime-thriler</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
          <img src="../images/exat.jpg" style="width: 200px; height: 250px;">
          <div class="card-body">
            <h4 class="card-title"><b>Extraction<b></h4>
            <p class="card-text">(2020) -1 hour 45 min <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             crime action thriller</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
          <img src="../images/warcraft.jpg" style="width: 200px; height: 250px;">
          <div class="card-body">
            <h4 class="card-title"><b>Warcraft<b></h4>
            <p class="card-text">(2016) - 2 hours 7 min <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             crime-thriller-adventure</p> 
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
          <img src="../images/spacial.jpg" style="width: 200px; height: 250px;">
          <div class="card-body">
            <h4 class="card-title"><b>Spacial ops<b></h4>
            <p class="card-text">(2020) - 2 hour 27 min <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             techno-inspiration</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
          <img src="../images/theboys.jpg" style="width: 200px; height: 250px;">
          <div class="card-body">
            <h4 class="card-title"><b>The Boys<b></h4>
            <p class="card-text">(2020) - 1 hour 45 min <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             fantasy</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
          <img src="../images/barb.jpg" style="width: 200px; height: 250px;">
          <div class="card-body">
            <h4 class="card-title"><b>Barbarians<b></h4>
            <p class="card-text">(2020) - 2 hours 45 min <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             ADVENTURE-action</p>
          </div>
        </div>
      </div><!--for row-->
    </div><!--container fluid--><hr><br>

<!--========================footer code starts here=========================-->

    <?php
      include ('../includes/footer.php');
    ?>

    <!--====================footer code ends here=========================-->


</body>
</html>
