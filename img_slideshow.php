<!DOCTYPE html>
<html lang="en">
<head>

<style type="text/css">

.carousel-inner > .item {
  height: 350px;

}

#myCarousel{
width: 50%;
}


</style>


  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="PIC1.jpg" alt="MACE">
        <div class="carousel-caption">
          <h3>MACE </h3>
          
        </div>
      </div>

      <div class="item">
        <img src="PIC2.jpg" alt="KOTHAMANGALAM">
        <div class="carousel-caption">
          <h3>KOTHAMANGALAM</h3>
          <
        </div>
      </div>
    
      <div class="item">
        <img src="PIC3.jpg" alt="ERNAKULAM">
        <div class="carousel-caption">
          <h3>ERNAKULAM</h3>
          
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
</div>


</body>
</html>
