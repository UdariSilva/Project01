<?php
include 'connection.php';
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgba(194, 194, 194, 0.8);
        }

        /*title bar styles*/
        .title-bar {
            background-color: #1a1a1a;
            padding: 10px;

            text-align: left;
            color: #eee;
            margin-bottom: 0px;
            font-family: 'Raleway', sans-serif;
        }

        .title-bar img {
            max-height: 100px;
            margin-right: 10px;
        }

        .title-bar h1 {
            color: #eee;
            margin: 0;
            font-size: 1.5em;
        }

        .navbar {
            font-family: 'Raleway', sans-serif;
            background-color: rgba(120, 161, 4, 0.8);
            padding: 30px;
        }

        .navbar .nav-link {
            color: white;
            transition: color 0.3s ease;
        }

        .navbar .nav-link:hover {
            color: #ffd700;
        }

        .nav-left,
        .nav-right {
            display: flex;
            align-items: center;
        }

        .nav-left {
            margin-right: auto;

        }


        .grid-item {
            border: 1px solid #bb151500;
            margin-bottom: 20px;
            padding: 10px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .grid-item img {
            max-width: 100%;
            height: auto;
            border: 1px gray;
            width: 250px;
            height: 250px;
        }

        .image-details {
            margin-top: 10px;
            color: rgb(78, 38, 5);

            cursor: pointer;
        }

        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }


        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: rgb(5, 8, 3, 0.7);
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
            border-radius: 5px;
            position: relative;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
            color: #ffffff;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .form-control {

            background-color: rgba(255, 255, 255, 0.8);


        }

        .h2 {
            text-align: center;
            color: #ffffff;
        }

        .btn-primary {
            background-color: #3442fc;
            width: 330px;
            height: 50px;
            border-radius: 10px;
            color: #ffffff
        }

        .link {
            color: rgb(63, 41, 255);
            text-decoration: none;
        }



        /* Footer Styles */
        .footer {
            background-color: #333;
            color: white;
            padding: 20px 350px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="title-bar">
        <table>
            <tr>
                <td><img src="images/logo_01.png" alt="ArtCave Logo"></td>
                <td>
                    <h1 style="font-size: 50px;">ArtCave</h1>
                </td>
            </tr>
        </table>
    </div>

    <!--navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-left">
                    <li class="nav-item">
                        <a class="nav-link" href="Home_Page.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Gallery_Page.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="My_Profile_Page.php">My Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About_Us_Page.php">About Us</a>
                    </li>
                </ul>


                <ul class="navbar-nav nav-right">
                    <?php
                    if (isset($_SESSION['username'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link">Sign Out</a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="openLoginModal()">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Sign_Up_Page.php">Sign Up</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>



            </div>
        </div>
    </nav>

    <!--search bar-->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Search for more artworks/artists">
            </div>
        </div>



        <!--galler section-->
        <div class="row mt-4">
            <?php
            $details_rs = Database::search("SELECT * FROM `art`");
            $details_num = $details_rs->num_rows;

            if ($details_num > 0) {
                for ($x = 0; $x < $details_num; $x++) {
                    $data = $details_rs->fetch_assoc();
                    $image = !empty($data['image']) ? $data['image'] : 'images/placeholder.png';
                    $title = htmlspecialchars($data['title'], ENT_QUOTES, 'UTF-8'); 
                    $art_id = htmlspecialchars($data['art_id'], ENT_QUOTES, 'UTF-8'); 
            ?>
                    <div class="col-md-3 grid-item">
                        <img id="myImg" src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                        <span class="image-details">
                            <a class="link" href="Artwork_Details_Page.php?id=<?php echo $art_id; ?>">
                                <?php echo $title; ?>
                            </a>
                        </span>
                    </div>
            <?php
                }
            } else {
                echo "<p class='text-center'>No artworks found.</p>";
            }
            ?>
        </div>
    </div>


    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>



    <!--form section-->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeLoginModal()">&times;</span>
            <h2 class="h2">Login</h2>
            <input type="text" id="username" placeholder="Username" class="form-control" required><br><br>
            <input type="password" id="password" placeholder="Password" class="form-control" required><br><br>
            <input type="password" id="confirmPassword" placeholder="Confirm Password" class="form-control" required><br><br>
            <a href="home.html" target="_blank"><button class="btn-primary">Login</button></a>
        </div>
    </div>


    <!--footer section-->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 ArtCave. All rights reserved. | <a href="https://mail.google.com/mail/" target="_blank" style="text-decoration: none;">Contact: info@artworkgallery.com</a></p>
        </div>
    </footer>

    <!--java script-->
    <script>
        function openLoginModal() {
            document.getElementById("loginModal").style.display = "flex"; // Use flex for centering
        }

        function closeLoginModal() {
            document.getElementById("loginModal").style.display = "none";
        }



        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>

</body>

</html>