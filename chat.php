<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Bootstrap Blog</title>
</head>
<body>

  

   <nav class="navbar">
   <?php include 'include/nav.php'; ?>
    </nav>

    <div class="container my-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-ld-8">
                <article>
                    <h2 class="text-success">Sample Blog Post Title</h2>
                    <p class="text-muted">Posted on January 1, 2023</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                    <p>Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <hr>
                </article>

                <!-- Comment Section -->
                <section>
                    <h3>Comments</h3>
                    <div class="media">
                        <img src="https://via.placeholder.com/50" class="mr-3" alt="User Avatar">
                        <div class="media-body">
                            <h5 class="mt-0">Commenter Name</h5>
                            <p>Comment content goes here...</p>
                        </div>
                    </div>
                    <div class="media mt-4">
                        <img src="https://via.placeholder.com/50" class="mr-3" alt="User Avatar">
                        <div class="media-body">
                            <h5 class="mt-0">Another Commenter</h5>
                            <p>Another comment content...</p>
                        </div>
                    </div>
                </section>

                <!-- Add a Comment Form -->
                <section class="mt-4">
                    <h3 class="text-success">Add a Comment</h3>
                    <form>
                        <div class="mb-3">
                            <label for="commenterName" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="commenterName" required>
                        </div>
                        <div class="mb-3">
                            <label for="commentContent" class="form-label">Comment</label>
                            <textarea class="form-control" id="commentContent" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success float-end">Submit Comment</button>
                    </form>
                </section>
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
