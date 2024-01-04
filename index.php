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
      <div class="container">
		<div class="row d-flex align-items-center justify-content-center "> 
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 my-2">
					<a href="svu.php">
					<div class="card text-center shadow p-3 border-0">
					  <div class="card-body">
						<img src="images/001-shop.png" alt="">
						<h4 class="card-title text-success">Seva Vanitha</h4>
					  </div>
					</div>
				</a>
				</div>
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 my-2">
					<a href="abans.php">
					<div class="card text-center shadow p-3 border-0">
					  <div class="card-body">
						<img src="images/001-shop.png" alt="">
						<h4 class="card-title text-success">Abans</h4>
					  </div>
					</div>
				</a>
				</div>
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 my-2">
					<a href="welfare.php">
					<div class="card text-center shadow p-3 border-0">
					  <div class="card-body">
						<img src="images/004-gift-box.png" alt="">
						<h4 class="card-title text-success">Welfare</h4>
					  </div>
					</div>
				</a>
				</div>
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 my-2">
					<a href="ng.php">
					<div class="card text-center shadow p-3 border-0">
					  <div class="card-body">
						<img src="images/003-clipboard.png" alt="">
						<h4 class="card-title text-success">Navy General</h4>
					  </div>
					</div>
				</a>
				</div>

				<div class="col-12 col-sm-12 col-md-3 col-lg-3 my-2">
					<a href="signal.php">
					<div class="card text-center shadow p-3 border-0">
					  <div class="card-body">
						<img src="images/005-clipboard.png" alt="">
						<h4 class="card-title text-success">Signal Draft</h4>
					  </div>
					</div>
					</a>
				</div>
				
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 my-2">
					<a href="http://navylist.navy.lk/">
					<div class="card text-center shadow p-3 border-0">
					  <div class="card-body">
						<img src="images/list1.png" alt="">
						<h4 class="card-title text-success">Navy List</h4>
					  </div>
					</div>
					</a>
				</div>
				<div class="col-12 col-sm-12 col-md-3 col-lg-3 my-2">
					<a href="https://td.navy.lk/">
					<div class="card text-center shadow p-3 border-0">
					  <div class="card-body">
						<img src="images/contact.png" alt="">
						<h4 class="card-title text-success">Phone Directory</h4>
					  </div>
					</div>
				</a>
				</div>
				
			
			
			
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
