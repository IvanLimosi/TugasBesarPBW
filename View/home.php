<?php
?>
<html>
	<!-- <head>
		<title> RABEN Delivery Serivce </title>
		<link rel="stylesheet" type="text/css" href="View/css/styleHome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head> -->
	<body>
		<!-- <nav id="navbar">
			<img src="View/img/logo.png" height="70 px" alt="RabenLogo">
			<a href="#">Kirim Barang</a>
			<a href="#">Lacak Barang</a>
      <a href="daftar" class="right">
				Daftar
			</a>
			<a href="Login" class="right">
				Sign In
			</a>
		</nav> -->

    <div id="body">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
              
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="View/img/img1.png">
            </div>
              
            <div class="item">
              <img src="View/img/img2.png">
            </div>
        </div>
              
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div id="lacak">
      <h1>Lacak Barang</h1>
        <form>
          <input type="text" id="lacakid" name="idpengiriman" placeholder="ID Pengiriman"><br><br><br>
          <input type="submit" value="Lacak">
        </form>>
    </div>

    <!-- <footer class="text-center"><br>
      <p>Copyright Raben Delivery Serivce 2021</p>
    </footer> -->
	</body>
</html>