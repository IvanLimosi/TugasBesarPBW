<nav id="navbar">
	<a href="home"><img src="View/img/logo.png" height="70 px" alt="RabenLogo" style="margin-left:-40px ;margin-top:-15px"></a>
	<a href="kirim">Kirim Barang</a>
	<a href="#">Lacak Barang</a>
    <!-- <a href="daftar" class="right">
		Daftar
	</a>
	<a href="Login" class="right">
		Login
	</a> -->
	<?php
		
		if(isset($_SESSION['isLogin'])){
			$isLogin = $_SESSION['isLogin'];
			$role = $_SESSION['role'];
			if($isLogin && $role=='member'){
				echo "<a href=\"Logout\" class=\"right\">
						 Logout
					 </a>";
			}else if($isLogin && $role=='driver'){
				echo "<a href=\"daftar\" class=\"right\">
					Pilih Job
				</a>
				<a href=\"Login\" class=\"right\">
					Logout
				</a>";
			}
		}else{
			echo "<a href=\"daftar\" class=\"right\">
					Daftar
				</a>
				<a href=\"Login\" class=\"right\">
					Login
				</a>";
		}
	?>
</nav>