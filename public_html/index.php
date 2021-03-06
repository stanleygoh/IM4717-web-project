<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.php">
    <!-- endbuild -->

    <title>Huat Zai Ya Theatres</title>
</head>
<?php
  @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
  //check if connection to db is possible
    if (mysqli_connect_errno()) {
       echo "Error: Could not connect to database.  Please try again later.";
       exit;
    }
    $movieName = array();
    $moviegenre = array();
    $movie = "SELECT movieName FROM Movie;";
    $movie = $db->query($movie);
    if ($movie ->num_rows >0){
      while ($row = $movie->fetch_assoc()){
      $movieName[] = $row["movieName"];
      }
    }
    $movie = "SELECT genre FROM Genre;";
    $movie = $db->query($movie);
    if ($movie ->num_rows >0){
      while ($row = $movie->fetch_assoc()){
      $moviegenre[] = $row["genre"];
      }
    }
    $name = array();
    $rating =  array();
    $stars =  array();
    $details =  array();
    $duration = array();
    $movie2 = 'select movieName, movieRating, movieStars, movieDuration from Movie;';
    $movie2 = $db->query($movie2);   
    if ($movie2 ->num_rows >0){
    while ($row = $movie2->fetch_assoc()){
    $name[] = $row["movieName"];
    $rating[] = $row["movieRating"];
    $stars[] = $row["movieStars"];
    $duration[] = $row["movieDuration"];
    }}

    ?>

<body style="margin: 0px;">

    <div class="cart-button" onclick="window.location.href='ViewCart.php'">
        <div class="cart-icon"><img src="assets/cart.png"
                style="align-items: center; vertical-align: middle; justify-content: center;" width="90%"></div>
        <button class="cart-text">View Cart</button>
    </div>

    <!-- MAIN BODY CONTAINER -->
    <div id="container">

        <!-- ! custom make own navbar -->
        <div id="header">
            <div id="navbar">
                <ul class="top-navbar">
                    <div class="navbar-links">
                        <li style="margin-right: 0;"><button class="cta-button"
                                onclick="location.href='now-showing.php'">NOW SHOWING</button>
                        </li>
                        <li><a href="coming-soon.php">COMING SOON</a></li>
                        <li><a href="promotions.php">PROMOTIONS</a></li>
                        <li><a href="index.php">HOME</a></li>
                    </div>
                    <img class="logo-img" src="./assets/logo.png" width="10%"
                        onclick="window.location.href='index.php'">
                </ul>
            </div>
            <!-- Red Search bar Section -->
            <div id="search-bar-section">
                <div id="search-bar">
                    <form method="post" style="width: 100%; height: 100%; display: flex; justify-content: center;
    align-items: center; vertical-align: middle;">
                        <div class="search-bar-selection-container-1">
                            <select name="movies" class="search-bar-selection-1" id="movies">
                                <option value="" disabled selected>&nbsp;&nbsp;&nbsp;Select a Movie</option>
                                <option value="1"><?php echo $movieName[0]?></option>
                                <option value="2"><?php echo $movieName[1]?></option>
                                <option value="3"><?php echo $movieName[2]?></option>
                                <option value="4"><?php echo $movieName[3]?></option>
                                <option value="5"><?php echo $movieName[4]?></option>
                                <option value="6"><?php echo $movieName[5]?></option>
                            </select>
                            <select name="genre" id="genre" class="search-bar-selection-1">
                                <option value="" disabled selected>&nbsp;&nbsp;&nbsp;Or select a Genre</option>
                                <option value="1"><?php echo $moviegenre[0]?></option>
                                <option value="2"><?php echo $moviegenre[1]?></option>
                                <option value="3"><?php echo $moviegenre[2]?></option>
                                <option value="4"><?php echo $moviegenre[3]?></option>
                                <option value="5"><?php echo $moviegenre[4]?></option>
                                <option value="6"><?php echo $moviegenre[5]?></option>
                                <option value="7"><?php echo $moviegenre[6]?></option>
                            </select>
                        </div>
                        <div class="search-bar-selection-container-2">
                            <div style="display: inline-flex; flex-direction: column;">
                                <label for=" date" class="search-bar-selection-label">Select
                                    a Date:</label>
                                <input type="date" name="Date" id="Date" class="search-bar-selection-2">
                            </div>

                            <select name="time" id="time" class="search-bar-selection-2">
                                <option value="" disabled selected>&nbsp;&nbsp;&nbsp;Select a Time</option>
                                <option value="1">11.30</option>
                                <option value="2">14.30</option>
                                <option value="3">17.30</option>
                                <option value="4">20.30</option>
                            </select>
                            <input type="reset" value="Search" class="search-bar-button" id="search"
                                onclick="myFunction()">
                            <img src="assets/search.png" width="4%"
                                style="position: relative; transform: translate(-30px, -3px);">
                        </div>
                        <script type="text/javascript">
                            function myFunction() {
                                var m_index = document.getElementById("movies");
                                var g_index = document.getElementById("genre");
                                var t_index = document.getElementById("time");
                                var d_index = document.getElementById("Date").value;
                                //possible to amend for alert "No match found."
                                if (!(isNaN(parseInt(m_index.value))) && (!(isNaN(Date.parse(d_index)))) && !(isNaN(
                                        parseInt(t_index.value)))) {
                                    var m_index = parseInt(m_index.value);
                                    t_index = t_index.options[t_index.selectedIndex].text;
                                    location.href = "seat_selection.php?movie=" + m_index + "&date=" + d_index +
                                        "&time=" + t_index;

                                } else if (!(isNaN(parseInt(g_index.value))) && (!(isNaN(Date.parse(d_index))))) {
                                    var g_index = parseInt(g_index.value);
                                    location.href = "showtime_genre.php?genre=" + g_index + "&date=" + d_index;
                                } else if (!(isNaN(parseInt(m_index.value))) && (!(isNaN(Date.parse(d_index))))) {
                                    var m_index = parseInt(m_index.value);
                                    location.href = "showtime.php?movie=" + m_index + "&date=" + d_index;
                                } else if (!(isNaN(parseInt(m_index.value))) && ((isNaN(Date.parse(d_index)))) && (
                                        isNaN(parseInt(t_index.value)))) {
                                    var m_index = parseInt(m_index.value);
                                    location.href = "movieDetails.php?movie=" + m_index;
                                } else if (!(isNaN(parseInt(g_index.value))) && ((isNaN(Date.parse(d_index)))) && (
                                        isNaN(parseInt(t_index.value)))) {
                                    var g_index = parseInt(g_index.value);
                                    location.href = "genre.php?genre=" + g_index;
                                } else {
                                    alert("Invalid option please try again!");
                                    location.reload();
                                }
                            }
                        </script>
                        <script type="text/javascript" src="validation.js"></script>
                    </form>
                </div>
            </div>
        </div>

        <div style="margin-bottom: 200px;">
            <!-- SEPARATOR TO ALIGN HEADER -->
        </div>

        <!-- Carousel Section -->
        <div id="carousel-section" style="padding:  0;">
            <!-- carousel component -->
            <div class="carousel-component">
                <!-- Full-width images with number and caption text -->
                <div class="carousel-content fade">
                    <!-- <div class="numbertext">1 / 3</div> -->
                    <img src="./Image/bruce-img.jpg" style="width:100%">
                    <div class="text">Welcome to Huat Zai Ya Theatres, your one-stop portal for retro films!</div>
                </div>

                <div class="carousel-content fade">
                    <!-- <div class="numbertext">2 / 3</div> -->
                    <img src="./Image/jackie-img2.jpg" style="width:100%">
                    <div class="text">Drunken Master (1978). A fondly remembered classic, coming soon! </div>
                </div>

                <div class="carousel-content fade">
                    <!-- <div class="numbertext">3 / 3</div> -->
                    <img src="./Image/jackie-img.jpg" style="width:100%">
                    <div class="text">Rush Hour (1998). This globally acclaimed film will be aired throughout December!
                    </div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <!-- The dots/circles -->
                <div class="dot-container">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
            <script type="text/javascript" src="./js/carousel.js"></script>
        </div>
        <!-- NOW SHOWING SECTION -->
        <div id="content-section">
            <h1>
                NOW SHOWING
            </h1>

            <div class="movie-gallery">
                <!-- <div class="movie-card hover-shadow">
                    <div class="movie-card-poster">
                        <img src="./assets/award2.png" alt="Avatar">
                    </div>
                    <div class="movie-card-details">
                        <p>Title: </p>
                        <p>Genre: </p>
                        <p>Duration: </p>
                        <p>Showtime: </p>
                    </div>
                </div> -->

                <!-- 1st Row for 4 movies -->
                <div class="movie-gallery-row">
                    <div class="movie-card hover-shadow">
                        <img src="./Image/movie-1.jpg" alt="Avatar" class="movie-card-poster" style="width:100%"
                            onclick="document.location.href='movieDetails.php?movie=1'">
                        <div class="movie-card-details" style="text-align: left; margin-left:20px;">
                            <p>Title: <?php echo $name[0]; ?></p>
                            <p>Stars: <?php echo $stars[0]; ?></p>
                            <p>Rating: <?php echo $rating[0]; ?></p>
                            <p>Duration: <?php echo $duration[0]; ?></p>
                        </div>
                    </div>

                    <div class="movie-card hover-shadow">
                        <img src="./Image/movie-2.jpg" alt="Avatar" class="movie-card-poster" style="width:100%"
                            onclick="document.location.href='movieDetails.php?movie=2'">
                        <div class="movie-card-details" style="text-align: left; margin-left:20px;">
                            <p>Title: <?php echo $name[1]; ?></p>
                            <p>Stars: <?php echo $stars[1]; ?></p>
                            <p>Rating: <?php echo $rating[1]; ?></p>
                            <p>Duration: <?php echo $duration[1]; ?></p>
                        </div>
                    </div>

                    <div class="movie-card hover-shadow">
                        <img src="./Image/movie-3.jpg" alt="Avatar" class="movie-card-poster" style="width:100%"
                            onclick="document.location.href='movieDetails.php?movie=3'">
                        <div class="movie-card-details" style="text-align: left; margin-left:20px;">
                            <p>Title: <?php echo $name[2]; ?></p>
                            <p>Stars: <?php echo $stars[2]; ?></p>
                            <p>Rating: <?php echo $rating[2]; ?></p>
                            <p>Duration: <?php echo $duration[2]; ?></p>
                        </div>
                    </div>

                    <div class="movie-card hover-shadow">
                        <img src="./Image/movie-4.jpg" alt="Avatar" class="movie-card-poster" style="width:100%"
                            onclick="document.location.href='movieDetails.php?movie=4'">
                        <div class="movie-card-details" style="text-align: left; margin-left:20px;">
                            <p>Title: <?php echo $name[3]; ?></p>
                            <p>Stars: <?php echo $stars[3]; ?></p>
                            <p>Rating: <?php echo $rating[3]; ?></p>
                            <p>Duration: <?php echo $duration[3]; ?></p>
                        </div>
                    </div>
                </div>

                <!-- 2nd Row for max 4 movies -->
                <div class="movie-gallery-row">
                    <div class="movie-card hover-shadow">
                        <img src="./Image/movie-5.jpg" alt="Avatar" class="movie-card-poster" style="width:100%"
                            onclick="document.location.href='movieDetails.php?movie=5'">
                        <div class="movie-card-details" style="text-align: left; margin-left:20px;">
                            <p>Title: <?php echo $name[4]; ?></p>
                            <p>Stars: <?php echo $stars[4]; ?></p>
                            <p>Rating: <?php echo $rating[4]; ?></p>
                            <p>Duration: <?php echo $duration[4]; ?></p>
                        </div>
                    </div>

                    <div class="movie-card hover-shadow">
                        <img src="./Image/movie-6.jpg" alt="Avatar" class="movie-card-poster" style="width:100%"
                            onclick="document.location.href='movieDetails.php?movie=6'">
                        <div class="movie-card-details" style="text-align: left; margin-left:20px;">
                            <p>Title: <?php echo $name[5]; ?></p>
                            <p>Stars: <?php echo $stars[5]; ?></p>
                            <p>Rating: <?php echo $rating[5]; ?></p>
                            <p>Duration: <?php echo $duration[5]; ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <footer id="footer">
            <div style="display: flex;">
                <img src=" assets/logo.png" height="120px">

                <div style="width: 100%; display: flex;justify-content: space-evenly;">
                    <div style="flex-direction: column;">
                        <h4>
                            About us
                        </h4>
                        <p style="width: 200px;">Started in 2021, we came into the industry to deliver your most beloved
                            retro films.
                        </p>
                    </div>

                    <div style="flex-direction: column;">
                        <h4>
                            Location
                        </h4>
                        <p>
                            50 Nanyang Ave,<br>Singapore 639798
                        </p>
                    </div>
                    <img src=" assets/location.jpg" height="120px" style="transform: translate(-40px,15px);">

                    <div style="flex-direction: column;">
                        <h4>
                            Follow us
                        </h4>
                        <ul>
                            <li>
                                <a href="www.facebook.com">Facebook</a>
                            </li>
                            <li>
                                <a href="www.twitter.com">Twitter</a>
                            </li>
                            <li>
                                <a href="www.instagram.com">Instagram</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <p>?? 2021 Huat Zai Ya Pte. Ltd. All Rights
                Reserved 2021
            </p>
        </footer>
    </div>
</body>

</html>