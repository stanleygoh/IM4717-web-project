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

<body style="margin:0px;">

    <body style="margin: 0px;">
        <!-- MAIN BODY CONTAINER -->
        <div id="container">

            <!-- ! custom make own navbar -->
            <div id="header" style="position: unset;">
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
                                    style="position: relative; transform: translate(-30px, -7px);">
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

            <!-- <div style="margin-bottom: 200px;">
            </div> -->


            <!-- COMING SOON SECTION -->
            <div id="content-section">
                <style>
                    body {
                        font-family: Verdana, sans-serif;
                        margin: 0;
                    }

                    * {
                        box-sizing: border-box;
                    }

                    .row>.column {
                        padding: 0 8px;
                    }

                    .row:after {
                        content: "";
                        display: table;
                        clear: both;
                    }

                    .column {
                        float: left;
                        width: 25%;
                    }

                    /* The Modal (background) */
                    .modal {
                        display: none;
                        position: fixed;
                        z-index: 1;
                        padding-top: 50px;
                        padding-bottom: 250px;
                        left: 15%;
                        top: 5%;
                        width: 70%;
                        height: 85%;
                        overflow: auto;
                        border-radius: 15px;
                        background-color: rgba(31, 31, 31, 0.98);
                    }

                    /* Modal Content */
                    .modal-content {
                        position: relative;
                        background-color: #fefefe;
                        margin: 0 auto;
                        padding: 0;
                        width: 90%;
                        max-width: 500px;
                    }

                    /* The Close Button */
                    .close {
                        color: white;
                        position: absolute;
                        top: 10px;
                        right: 25px;
                        font-size: 35px;
                        font-weight: bold;
                    }

                    .close:hover,
                    .close:focus {
                        color: #999;
                        text-decoration: none;
                        cursor: pointer;
                    }

                    .mySlides {
                        display: none;
                    }

                    .cursor {
                        cursor: pointer;
                    }

                    /* Next & previous buttons */
                    .prev,
                    .next {
                        cursor: pointer;
                        position: absolute;
                        top: 50%;
                        width: auto;
                        padding: 16px;
                        margin-top: -50px;
                        color: whitesmoke;
                        font-weight: bold;
                        font-size: 20px;
                        transition: 0.6s ease;
                        border-radius: 0 3px 3px 0;
                        user-select: none;
                    }

                    /* Position the "next button" to the right */
                    .next {
                        right: -15%;
                        border-radius: 3px 0 0 3px;
                    }

                    /* Position the "next button" to the right */
                    .prev {
                        left: -15%;
                        border-radius: 3px 0 0 3px;
                    }

                    /* On hover, add a black background color with a little bit see-through */
                    .prev:hover,
                    .next:hover {
                        background-color: rgba(179, 140, 67, 0.8);
                    }

                    /* Number text (1/3 etc) */
                    .numbertext {
                        color: #f2f2f2;
                        font-size: 12px;
                        padding: 8px 12px;
                        position: absolute;
                        top: 0;
                    }

                    img {
                        margin-bottom: -4px;
                    }

                    .caption-container {
                        text-align: center;
                        background-color: black;
                        padding: 2px 16px;
                        color: white;
                    }

                    /* .demo {
                        opacity: 0.6;
                    } */

                    .active,
                    .demo:hover {
                        opacity: 1;
                    }
                </style>
                <h1>
                    PROMOTIONS
                </h1>
                <br>
                <div class="row">
                    <div class="column">
                        <img src="Image/promo-1.jpg" style="height: 400px;" onclick="openModal();currentSlide(1)"
                            class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="Image/promo-2.jpg" style="height: 400px;" onclick="openModal();currentSlide(2)"
                            class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="Image/promo-3.jpg" style="height: 400px;" onclick="openModal();currentSlide(3)"
                            class="hover-shadow cursor">
                    </div>
                    <div class="column">
                        <img src="Image/promo-4.jpg" style="height: 400px;" onclick="openModal();currentSlide(4)"
                            class="hover-shadow cursor">
                    </div>
                </div>

                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 4</div>
                            <img src="Image/promo-1.jpg" style="width: 100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 4</div>
                            <img src="Image/promo-2.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 4</div>
                            <img src="Image/promo-3.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 4</div>
                            <img src="Image/promo-4.jpg" style="width:100%">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>


                        <div class="column">
                            <img class="demo cursor" src="Image/promo-1.jpg" style="width:100%"
                                onclick="currentSlide(1)" alt="">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="Image/promo-2.jpg" style="width:100%"
                                onclick="currentSlide(2)" alt="">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="Image/promo-3.jpg" style=" width:100%"
                                onclick="currentSlide(3)" alt="">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="Image/promo-4.jpg" style="width:100%"
                                onclick="currentSlide(4)" alt="">
                        </div>
                    </div>
                </div>

                <script>
                    function openModal() {
                        document.getElementById("myModal").style.display = "block";
                    }

                    function closeModal() {
                        document.getElementById("myModal").style.display = "none";
                    }

                    var slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("demo");
                        var captionText = document.getElementById("caption");
                        if (n > slides.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = slides.length
                        }
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        captionText.innerHTML = dots[slideIndex - 1].alt;
                    }
                </script>
            </div>


            <footer id="footer">
                <div style="display: flex;">
                    <img src=" assets/logo.png" height="120px">

                    <div style="width: 100%; display: flex;justify-content: space-evenly;">
                        <div style="flex-direction: column;">
                            <h4>
                                About us
                            </h4>
                            <p style="width: 200px;">Started in 2021, we came into the industry to deliver your most
                                beloved
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
                <p>© 2021 Huat Zai Ya Pte. Ltd. All Rights
                    Reserved 2021
                </p>
            </footer>
        </div>

</html>