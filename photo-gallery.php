<?php
  include 'conn.php';
  session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <?php include"link.php"; ?>
  <style>
      @import url(http://fonts.googleapis.com/css?family=Anaheim);
    *{
        margin: 0;
        padding: 0;
        outline: none;
        border: none;
        box-sizing: border-box;
    }

    *:before,
    *:after{
        box-sizing: border-box;
           }

    html,
    body{
        min-height: 100%;
        }
        body{
        background-image: radial-gradient(mintcream 0%, lightgray 100%);
            }

    h1{
        display: table;
        margin: 5% auto 0;
        text-transform: uppercase;
        font-family: 'Anaheim', sans-serif;
        font-size: 4em;
        font-weight: 400;
        text-shadow: 0 1px white, 0 2px black;
      }

    .container1
    {
        margin: 4% auto;
        width: 210px;
        height: 140px;
        position: relative;
        perspective: 1000px;

    }
              #carousel1{
                width: 100%;
                height: 100%;
                position: absolute;
                transform-style: preserve-3d;
                animation: rotation 20s infinite linear;
              }
              #carousel1:hover{
                animation-play-state: paused;
              }
              #carousel1 figure{
                display: block;
                position: absolute;
                width: 90%;
                height: 90%;
                left: 10px;
                top: 10px;
                background: black;
                overflow: hidden;
                border: solid 5px black;
              }
              #carousel1 figure:nth-child(1){transform: rotateY(0deg) translateZ(288px);}
              #carousel1 figure:nth-child(2) { transform: rotateY(40deg) translateZ(288px);}
              #carousel1 figure:nth-child(3) { transform: rotateY(80deg) translateZ(288px);}
              #carousel1 figure:nth-child(4) { transform: rotateY(120deg) translateZ(288px);}
              #carousel1 figure:nth-child(5) { transform: rotateY(160deg) translateZ(288px);}
              #carousel1 figure:nth-child(6) { transform: rotateY(200deg) translateZ(288px);}
              #carousel1 figure:nth-child(7) { transform: rotateY(240deg) translateZ(288px);}
              #carousel1 figure:nth-child(8) { transform: rotateY(280deg) translateZ(288px);}
              #carousel1 figure:nth-child(9) { transform: rotateY(320deg) translateZ(288px);}

              img .photo{
                -webkit-filter: grayscale(1);
                cursor: pointer;
                transition: all .5s ease;
              }
              img :hover{
                -webkit-filter: grayscale(0);
                transform: scale(1.2,1.2);
              }

              @keyframes rotation{
                from{
                  transform: rotateY(0deg);
                }
                to{
                  transform: rotateY(360deg);
                }
              }


              .thumbnail {
        position:relative;
        overflow:hidden;
    }
     
    .caption {
        position:absolute;
        top:0;
        right:0;
        background:rgba(66, 139, 202, 0.75);
        width:100%;
        height:100%;
        padding:2%;
        display: none;
        text-align:center;
        color:#fff !important;
        z-index:2;
    }
     
  </style>
</head>
<body>
  <div id="wrapper">
    <?php include 'header.php'; ?>
    <?php include 'menu.php'; ?>
    <center>
      <h3 style="font-size: 35px;"> Image Gallery</h3>
    </center>
    <div class="container1">
      <div id="carousel1">
          <?php 
          $query="SELECT * FROM gallery ORDER BY `gallery_id` DESC";
          $result=mysqli_query($conn, $query);
           while ($row=mysqli_fetch_array($result)) {
          ?>
          <figure><img src="images/Home/Photo_Gallery/<?php echo $row[1]; ?>" alt="" class="photo"></figure>
          <?php } ?>
      </div>
    </div>
    <div class="row">
      <center><h3>Cards Section</h3></center>
        <?php 
          $query="SELECT * FROM gallery ORDER BY `gallery_id` DESC";
          $result=mysqli_query($conn, $query);
          while ($row=mysqli_fetch_array($result)) { ?>
        <div class="col-md-3">            
          <div class="thumbnail">
            <div class="caption">
                <h4>Thumbnail Headline</h4>
                <p>short thumbnail description</p>
                <p><a href="" class="label label-danger" rel="tooltip" title="Zoom">Zoom</a>
                <a href="" class="label label-default" rel="tooltip" title="Download now">Download</a></p>
            </div>
            <img src="images/Home/Photo_Gallery/<?php echo $row[1]; ?>" alt="" style="height: 250px;">
          </div>
        </div>
        <?php } ?>
        </div>
      <?php include"footer.php"; ?>
      <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
</body>
</html>


