<?php 
require_once('admin/dbconnect.php');


/*****************************recent news*****************************/
function single_tab_news(){
	global $conn;
	
	
	$query = mysqli_query($conn, "select id, news_headline, news_poster_name, time_posted, date_posted, news_photo from news order by id asc limit 1");
		if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$id = $row['id'];
				$news_headline = $row['news_headline'];
				$news_poster_name = $row['news_poster_name'];
				$time_posted = $row['time_posted'];
				$date_posted = $row['date_posted'];
				$image = 'admin/'.$row['news_photo'];

				
				
				echo "<div class=\"tab-pane fade show active\">
                            <!-- Single Feature Post -->
                            <div class=\"single-feature-post video-post bg-img\" style=\"background-image: url($image);\">
                                

                                <!-- Post Content -->
                                <div class=\"post-content\">
                                    <a href=\"single_post.php?id=$id\" class=\"post-cata\">READ</a>
                                    <a href=\"single_post.php?id=$id\" class=\"post-title\">$news_headline</a>
                                    <div class=\"post-meta d-flex\">
                                        <a href=\"single_post.php?id=$id\"><i class=\"fa fa-user-alt\" aria-hidden=\"true\"></i>By $news_poster_name</a>
                                        <a href=\"single_post.php?id=$id\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>By $time_posted \" \" $date_posted</a>
                                        
                                    </div>
                                </div>

                                
                            </div>
                        </div>";
				
				
}
		}
}


/*****************************recent news*****************************/
function multi_tab_news(){
	global $conn;
	
	
	$query = mysqli_query($conn, "select id, news_headline, news_poster_name, time_posted, date_posted, news_photo from news order by id asc limit 2,6");
		if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$id = $row['id'];
				$news_headline = $row['news_headline'];
				$news_poster_name = $row['news_poster_name'];
				$time_posted = $row['time_posted'];
				$date_posted = $row['date_posted'];
				$image = 'admin/'.$row['news_photo'];

				
				
				echo "<li class=\"nav-item\" >
                            <a class=\"nav-link pill\"  href=\"single_post.php?id=$id\" role=\"tab\">
                                <!-- Single Blog Post -->
                                <div class=\"single-blog-post style-2 d-flex align-items-center\">
                                    <div class=\"post-thumbnail\">
                                        <img src=\"$image\" alt=\"\">
                                    </div>
                                    <div class=\"post-content\">
                                        <h6 class=\"post-title\">$news_headline</h6>
                                        <div class=\"post-meta d-flex \">
										<span class=\"text-white\"><i class=\"fa fa-user-alt\" aria-hidden=\"true\"></i>By $news_poster_name  </span>  
                                        <span class=\"text-white\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>,    $date_posted</span>
                                        
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>";
				
				
}
		}
}


/*****************************recent news*****************************/


/*****************************recent news*****************************/
function latest_news(){
	global $conn;
	
	
	$query = mysqli_query($conn, "select id, news_headline, news_poster_name, time_posted, date_posted, news_photo from news order by id desc limit 3");
		if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$id = $row['id'];
				$news_headline = $row['news_headline'];
				$news_poster_name = $row['news_poster_name'];
				$time_posted = $row['time_posted'];
				$date_posted = $row['date_posted'];
				$image = 'admin/'.$row['news_photo'];
				
				echo "<div class=\"col-12 col-md-4\">
					<div class=\"single-post-area mb-80\" data-aos=\"fade-up\">
						<!-- Post Thumbnail -->
						<div class=\"post-thumbnail\">
							<img src=\"$image\" alt=\"\">


						</div>

						<!-- Post Content -->
						<div class=\"post-content\">
							<a href=\"single_post.php?id=$id\" class=\"post-cata cata-sm \">Read</a>
							<a href=\"single_post.php?id=$id\" class=\"post-title\">$news_headline</a>
							<div class=\"post-meta d-flex align-items-center mb-2\">
								<a href=\"single_post.php?id=$id\" class=\"post-author\"> by $news_poster_name</a>
								<i class=\"fa fa-circle\" aria-hidden=\"true\"></i>
								<a href=\"single_post.php?id=$id\" class=\"post-date\">$date_posted</a>
							</div>

						</div>
					</div>
				</div>";
}
		}
}


/*****************************most read news*****************************/
function most_read_news(){
	global $conn;
	
	
	$query = mysqli_query($conn, "select id, news_headline, news_poster_name, time_posted, date_posted, news_photo from news order by id asc limit 8,4");
		if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$id = $row['id'];
				$news_headline = $row['news_headline'];
				$news_poster_name = $row['news_poster_name'];
				$time_posted = $row['time_posted'];
				$date_posted = $row['date_posted'];
				$image = 'admin/'.$row['news_photo'];
				
				echo " 
                        <div class=\"single-post-area mb-30\"  data-aos=\"fade-up\">
                            <div class=\"row align-items-center\">
                                <div class=\"col-12 col-lg-6\">
                                    <!-- Post Thumbnail -->
                                    <div class=\"post-thumbnail\">
                                        <img src=\"$image\" alt=\"\">

                                        
                                    </div>
                                </div>
                                <div class=\"col-12 col-lg-6\">
                                    <!-- Post Content -->
                                    <div class=\"post-content mt-0\">
                                        <a href=\"single_post.php?id=$id\" class=\"post-cata cata-sm\">Read</a>
                                        <a href=\"single_post.php?id=$id\" class=\"post-title mb-2\">$news_headline</a>
                                        <div class=\"post-meta d-flex align-items-center mb-2\">
                                            <a href=\"single_post.php?id=$id\" class=\"post-author\">By $news_poster_name</a>
                                            
                                            <a href=\"single_post.php?id=$id\" class=\"post-date\">$date_posted</a>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div>
							</div>
                        ";
				 
}
		}
}

/*****************************popular news*****************************/
function popular_news(){
	global $conn;
	$query = mysqli_query($conn, "select id, news_headline, news_poster_name, time_posted, date_posted, news_photo from news order by id asc limit 15,2");
	if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
				$id = $row['id'];
				$news_headline = $row['news_headline'];
				$news_poster_name = $row['news_poster_name'];
				$time_posted = $row['time_posted'];
				$date_posted = $row['date_posted'];
				$image = 'admin/'.$row['news_photo'];
				
				echo " 	<div class=\"col-12 col-md-6\" data-aos=\"fade-up\">
                                <div class=\"single-post-area mb-80\">
                                    <!-- Post Thumbnail -->
                                    <div class=\"post-thumbnail\">
                                        <img src=\"$image\" alt=\"\">

                                        
                                    </div>

                                    <!-- Post Content -->
                                    <div class=\"post-content\">
                                        <a href=\"single_post.php?id=$id\" class=\"post-cata cata-sm cata-danger\">READ</a>
                                        <a href=\"single_post.php?id=$id\" class=\"post-title\">$news_headline</a>
                                        <div class=\"post-meta d-flex\">
                                            <a href=\"single_post.php?id=$id\"><i class=\"fa fa-user-alt\" aria-hidden=\"true\"></i>By $news_poster_name</a>
                                            
                                            <a href=\"single_post.php?id=$id\" class=\"post-date\">$date_posted</a>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
						";
			}
	}
}


/*****************************projects_done*****************************/
function projects_done(){
	global $conn;
	$query = mysqli_query($conn, "select pro_description from project order by pro_description desc limit 4");
	if(mysqli_num_rows($query) > 0){
			while($row = mysqli_fetch_assoc($query)){
			
				$description = $row['pro_description'];
				
				
				echo " 	
				<div data-aos=\"fade-up\">                       
					<a href=\"#\" class=\"project-title\">>>>$description</a>
                 </div>
						";
			}
	}
}

	?>