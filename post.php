<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Your Website</title>

</head>
<body>
    <header>
        <!-- Your website header content -->
    </header>
    <nav class="navbar">
	<?php include 'include/nav.php'; ?>
    </nav>
	
	
	

    <main>
      <div class="container-fluid">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="row py-3">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 my-2 ">
						<div class="card text-center shadow new-post border-0">
						  <div class="card-body">
							<h4 class="card-title text-success">New Post</h4>
							<div class="new-post-image">
							<img src="" class="img-fluid" alt="">
							</div>
							<textarea class="form-control my-2" id="postContent" rows="3" required></textarea>
							 <a href="chat.html" class="btn btn-success float-end">Publish</a>
						  </div>
						</div>
						</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 my-2">
					<div class="card text-center shadow  border-0">
					  <div class="card-body">
						<h4 class="card-title text-success">Post title</h4>
						<img src="images/post.jpg" class="img-fluid" alt="">
					
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<div class="social-btn">
						<a href="chat.html" class="btn btn-success float-end"><i class="fa fa-thumbs-up"></i></a>
						<a href="chat.html" class="btn btn-success float-end"><i class="fa fa-thumbs-down"></i></a>
						<a href="chat.html" class="btn btn-success float-end"><i class="fa fa-comment"></i></a>
						<a href="chat.html" class="btn btn-success float-end"><i class="fa fa-share"></i></a>
						<a href="chat.html" class="btn btn-success float-end">Involved Now</a>
						</div>
					  </div>
					</div>
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-12 my-2">
						<div class="card text-center shadow  border-0">
						  <div class="card-body">
							<h4 class="card-title text-success">Post title</h4>
							<img src="images/post.jpg" class="img-fluid" alt="">
						
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<div class="social-btn">
							<a href="chat.html" class="btn btn-success float-end"><i class="fa fa-thumbs-up"></i></a>
							<a href="chat.html" class="btn btn-success float-end"><i class="fa fa-thumbs-down"></i></a>
							<a href="chat.html" class="btn btn-success float-end"><i class="fa fa-comment"></i></a>
							<a href="chat.html" class="btn btn-success float-end"><i class="fa fa-share"></i></a>
							<a href="chat.html" class="btn btn-success float-end">Involved Now</a>
							</div>
						  </div>
						</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 my-2">
							<div class="card text-center shadow  border-0">
							  <div class="card-body">
								<h4 class="card-title text-success">Post title</h4>
								<img src="images/post.jpg" class="img-fluid" alt="">
							
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<div class="social-btn">
								<a href="chat.html" class="btn btn-success float-end"><i class="fa fa-thumbs-up"></i></a>
								<a href="chat.html" class="btn btn-success float-end"><i class="fa fa-thumbs-down"></i></a>
								<a href="chat.html" class="btn btn-success float-end"><i class="fa fa-comment"></i></a>
								<a href="chat.html" class="btn btn-success float-end"><i class="fa fa-share"></i></a>
								<a href="chat.html" class="btn btn-success float-end">Involved Now</a>
								</div>
							  </div>
							</div>
							</div>
					
				 
				 </div>

			</div>
			<div class="col-md-3"></div>
		</div>
	     
	  </div>
	  
	  <?php include 'include/extra.php'; ?>
	  
	  </main>
	  <footer>
	  <?php include 'include/footer.php'; ?>
	  </footer>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Add this script at the end of the <body> tag -->
	<script src="js/main.js"></script>
    



</body>
</html>
