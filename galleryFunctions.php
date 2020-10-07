<?php 

	include('admin/dbconnect.php');
	

	function gallery(){
		global $conn;
		
		$query = mysqli_query($conn, "select * from gallery limit 10");
		 if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_array($query)){
			echo'	
				<div class="swiper-slide cover" style="background-image: url(\''.$row[5].'\');">
		  <a href="'.$row[5].'" data-fancybox="gallery" class="zoom"><span class="fa fa-search" style="color:#94c045;"></span></a>
		  <div class="img-info">
			<span class="btn-toggle-expand"><span class="fa fa-arrow-up"  style="color:#94c045;"></span></span>
			<div class="img-info-content">
			  <h2>'.$row[1].'</h2>
			  <div class="scrollbar-inner style-scrollbar-sm js-scrollbar-container">
				<p class="mb-0">'.$row[2].'</p>
			  </div>
			</div>
		  </div>
		</div>';
			}
		 }
	}

?>