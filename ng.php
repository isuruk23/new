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
		<div class="row"> 
				<!-- content goes here -->
             
                  
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 my-2">
                                    <iframe src="https://ng.navy.lk" frameborder="0" width="100%" height="1000px"></iframe>
                            </div>
                           
                  
				<!-- content goes here -->
		</div>
	     
	  </div>
	  
	  <?php include 'include/extra.php'; ?>
	  
	  </main>
	  <footer>
	  <?php include 'include/footer.php'; ?>
	  </footer>
	


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Add this script at the end of the <body> tag -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var menuButton = document.getElementById('toggle-menu');
            var nav = document.querySelector('nav');
    
            menuButton.addEventListener('click', function () {
                nav.style.display = (nav.style.display === 'block') ? 'none' : 'block';
            });
        });
    
    
        
        
        $(window).ready(function() {	
    
        
      $(".menu-list").hide();
      $(".profile-list").hide();
      $(".post-list").hide();
        $(".mobile-list .nav-bar").click(function () {
            $(".menu-list").animate( { "opacity": "show"} , 500 );
        });
    
        $(".mobile-list >.nav-profile").click(function () {
            $(".profile-list").animate( { "opacity": "show"} , 500 );
        });
        $(".mobile-list >.nav-home").click(function () {
            window.location.href = 'index.html';
        });
        $(".mobile-list >.nav-post").click(function () {
			
			window.location.href = 'post.html';
           // $(".post-list").animate( { "opacity": "show"} , 500 );
        });
        
        
        $(".mobilemenu-close").click(function(){
           $(".menu-list").animate( { "opacity": "hide"} , 500 );
        });
        
        $(".profile-close").click(function(){
           $(".profile-list").animate( { "opacity": "hide"} , 500 );
        });
    
        $(".post-close").click(function(){
           $(".post-list").animate( { "opacity": "hide"} , 500 );
        });
        
    
      
    /* End Jquery */
    });
        
    
    </script>
    



</body>
</html>
