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
				<div class="row p-2">
                    <div class="row p-2">
                        <div class="col-md-12">	
                            <section class="mt-4">
                                
                                <h3 class="text-success">Past Psot</h3>
                                <div class="post row border-success border-bottom mb-5">
                                    <div class="mb-3">
                                        <h5>post title</h5>
                                        <p>Some quick example text to build on the card title and make up the bulk of the card's content</p>
                                        <button type="submit" class="btn btn-primary float-end mx-2">Edit</button>
                                    <button type="submit" class="btn btn-danger float-end mx-2">Delete</button>
                                    </div>
                                  
                                    
                                </div>
                                <div class="post row border-success border-bottom mb-5">
                                    <div class="mb-3">
                                        <h5>post title</h5>
                                        <p>Some quick example text to build on the card title and make up the bulk of the card's content</p>
                                        <button type="submit" class="btn btn-primary float-end mx-2">Edit</button>
                                        <button type="submit" class="btn btn-danger float-end mx-2">Delete</button>
                                    </div>
                                  
                                    
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-12">	
                            <section class="mt-4">
                                <h3 class="text-success">Add a Post</h3>
                                <form>
                                    <div class="mb-3">
                                        <label for="commentContent" class="form-label">Post</label>
                                        <textarea class="form-control" id="commentContent" rows="3" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success float-end">Post</button>
                                </form>
                            </section>
            /div>

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
