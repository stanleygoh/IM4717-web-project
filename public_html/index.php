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
    <!-- MAIN BODY CONTAINER -->
    <div id="container">

        <!-- ! custom make own navbar -->
        <div id="header">
            <div id="navbar">
                <ul class="top-navbar">
                    <div class="navbar-links">
                        <li><button class="cta-button" onclick="location.href='now-showing.php'">NOW SHOWING</button>
                        </li>
                        <li><a href="coming-soon.php">COMING SOON</a></li>
                        <li><a href="promotions.html">PROMOTIONS</a></li>
                        <li><a href="index.php">HOME</a></li>
                    </div>
                    <img class="logo-img" src="./assets/new_logo_resized.png"
                        onclick="window.location.href='index.php'">
                </ul>


            </div>
            <!-- Red Search bar Section -->
            <div id="search-bar-section">
                <div id="search-bar">
                    <form method="post">
                        <select name="movies" id="movies"
                            style="height: 30px; width: 400px; margin: 0px 30px 10px 0px;">
                            <option value="" disabled selected>Select a Movie</option>
                            <option value="1"><?php echo $movieName[0]?></option>
                            <option value="2"><?php echo $movieName[1]?></option>
                            <option value="3"><?php echo $movieName[2]?></option>
                            <option value="4"><?php echo $movieName[3]?></option>
                            <option value="5"><?php echo $movieName[4]?></option>
                            <option value="6"><?php echo $movieName[5]?></option>
                        </select>
                        <select name="genre" id="genre" style="height: 30px; width: 250px; margin:30px 30px 10px 20px;">
                            <option value="" disabled selected>Select a Genre</option>
                            <option value="1"><?php echo $moviegenre[0]?></option>
                            <option value="2"><?php echo $moviegenre[1]?></option>
                            <option value="3"><?php echo $moviegenre[2]?></option>
                            <option value="4"><?php echo $moviegenre[3]?></option>
                            <option value="5"><?php echo $moviegenre[4]?></option>
                            <option value="6"><?php echo $moviegenre[5]?></option>
                            <option value="7"><?php echo $moviegenre[6]?></option>
                        </select>
                        <td>
                            <label for="Date" style="color: #101f2f; font-size:25px;"><strong>Date:</strong></label>
                            <input type="date" name="Date" id="Date"
                                style="height: 30px; width: 200px; margin:30px 30px 10px 10px;">
                            <select name="time" id="time"
                                style="height: 30px; width: 200px; margin:30px 30px 10px 20px;">
                                <option value="" disabled selected>Select a Time</option>
                                <option value="1">11.30</option>
                                <option value="2">14.30</option>
                                <option value="3">17.30</option>
                                <option value="4">20.30</option>
                            </select>
                            <input type="reset" value="Search"
                                style="height: 30px; width: 100px; margin:30px 30px 10px 20px;" id="search"
                                onclick="myFunction()"><br>
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
        <!-- Carousel Section -->
        <div id="carousel-section" style="padding:  0;">
            <!-- carousel component -->
            <div class="carousel-component">
                <!-- Full-width images with number and caption text -->
                <div class="carousel-content fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="./Image/bruce-img.jpg" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>

                <div class="carousel-content fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="./Image/homepg_graduation.jpg" style="width:100%">
                    <div class="text">Caption Two</div>
                </div>

                <div class="carousel-content fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="./Image/homepg_wedding.jpeg" style="width:100%">
                    <div class="text">Caption Three</div>
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
        <div id="now-showing-section">
            <h1>
                NOW SHOWING
            </h1>

            <br>

            <div class="movie-gallery">
                <!-- <div class="movie-card">
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

                <hr>


                <div class="movie-card">
                    <img src="./assets/award1.png" alt="Avatar" class="movie-card-poster" style="width:100%"
                        onclick="document.location.href='movieDetails.php?movie=1'">
                    <div class="movie-card-details" style="text-align: left; margin-left:20px;">
                        <p>Title: <?php echo $name[0]; ?></p>
                        <p>Stars: <?php echo $stars[0]; ?></p>
                        <p>Rating: <?php echo $rating[0]; ?></p>
                        <p>Duration: <?php echo $duration[0]; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer">
            <paragraph class="para">© 2021 SG MoneyLender Pte. Ltd. All Rights
                Reserved.
            </paragraph>
        </footer>
    </div>

    <!-- USING CDN INSTEAD OF NODE_MODULES -->
    <script src="js/scripts.js"></script>

    <!-- endbuild -->
</body>

</html>