<?php Header ("Content-type: text/css; charset=utf-8");
?>
/* LAYOUTS */

#container {
    min-width: 1280px;
    /* maybe not? */
    width: 100%;
    margin: 0 auto;
    background-color: #101F2F;
}

#navbar {
    width: 80%;
    height: 100px;
    margin: 0 auto;
    padding: 0;
}

.top-navbar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #101F2F;
    font-family: 'Franklin Gothic Medium',
        'Arial Narrow',
        Arial,
        sans-serif;
}

.navbar-links {
    margin: 25px 0 0 0;
}

.navbar-links li {
    float: right;
    margin-right: 50px;
}

.navbar-links a {
    display: block;
    padding: 8px;
    color: #C4B480;
    text-decoration: none;
}

.logo-img {
    position: relative;
    display: inline-flex;
    border: solid white;
    height: 100%;
}

#search-bar-section {
    height: 100px;
    background-color: #992c2d;
    font-family: 'Franklin Gothic Medium',
        'Arial Narrow',
        Arial,
        sans-serif;
}

#search-bar {
    width: 70%;
    height: 100%;
    margin: 0 auto;

}

.search-bar-selection-container-1 {
    display: flex;
    flex-direction: column;
    width: 50%;
}

.search-bar-selection-1 {
    height: 30px;
    width: 400px;
    margin-top: 5px;
    margin-bottom: 5px;

    background-color: #C4B480;
    border: none;
    border-radius: 4px;
    font-family: 'Franklin Gothic Medium',
        'Arial Narrow',
        Arial,
        sans-serif;
}

.search-bar-selection-container-2 {
    display: flex;
    width: 100%;
    margin-left: 20%;
    align-items: flex-end;
}

.search-bar-selection-label {
    vertical-align: top;
    height: fit-content;
}

.search-bar-selection-2 {
    margin-right: 15px;
    height: 30px;
    width: 200px;

    background-color: #C4B480;
    border: none;
    border-radius: 4px;
    font-family: 'Franklin Gothic Medium',
        'Arial Narrow',
        Arial,
        sans-serif;
}

.search-bar-button {
    height: 40px;
    width: 100px;
    transform: translatey(5px);
    padding-right: 27px;

    background-color: #C4B480;
    border: none;
    border-radius: 4px;
    font-size: 17px;
    font-family: 'Franklin Gothic Medium',
        'Arial Narrow',
        Arial,
        sans-serif;
}


#header {
    background-color: #101f2f;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 5;
    padding: 0;
    margin: 0;
}


/** CAROUSEL  */
#carousel-section {
    margin-top: 200px;
    background-color: #101f2f;
    min-height: 200px;
    padding: 20px;
    color: white;
}

.carousel-component {
    position: relative;
    margin: auto;

}

/* Hide the images by default */
.carousel-content {
    display: none;
}

.carousel-content img {
    /* max-height: 550px; */
    height: 550px;
}

/* Next & previous buttons */
.prev,
.next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
}

/* Position the "next button" to the right */
.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
    background-color: rgba(155, 155, 155, 0.8);
}

/* Caption text */
.text {
    color: #f2f2f2;
    background-color: rgba(44, 44, 44, 0.8);
    font-size: 15px;
    position: absolute;
    bottom: 10%;
    width: 100%;
    text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
    color: #191919;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    font-weight: bold;
}

.dot-container {
    position: absolute;
    bottom: 5%;
    left: 46.5%;
}

/* The dots/bullets/indicators */
.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 10px;
    background-color: #C4B480;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.active,
.dot:hover {
    background-color: rgb(44, 44, 44);
    border: solid 2px;
    border-color: #C4B480;
}

/* Fading animation */
.fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
}

@-webkit-keyframes fade {
    from {
        opacity: .4
    }

    to {
        opacity: 1
    }
}

@keyframes fade {
    from {
        opacity: .4
    }

    to {
        opacity: 1
    }
}

/** end of carousel */

#now-showing-section {
    margin: 0 10%;
    padding: 20px 0;
    border: solid white;
    color: #C4B480;
    min-height: 50px;
    font-family: 'Franklin Gothic Medium',
        'Arial Narrow',
        Arial,
        sans-serif;
}

#footer {
    background-color: #3b3747;
    color: #f0f5f5;
    border: none;
    min-height: 50px;
    padding: 20px 10%;
}




/* COMPONENTS and STYLING */
.cta-button {
    height: 40px;
    margin-right: 0;
    background: linear-gradient(#C4B480, #dac992, #ebf8e1);
    border: none;
    border-radius: 5px;
    font-family: 'Franklin Gothic Medium',
        'Arial Narrow',
        Arial,
        sans-serif;
    font-weight: bold;

}

/* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
/* .movie-card {
    position: relative;
    background-color: transparent;
    width: 200px;
    height: 240px;
    border: 1px solid #f1f1f1;
}

.movie-card-details {
    display: none;
    background-color: rgba(44, 44, 44, 0.8);
    width: 200px;
    height: 240px;

}

.movie-card-poster {
    background-color: transparent;
    display: block;
    width: 200px;
    height: 240px;
}

.movie-card-poster img {
    width: 200px;
    height: 240px;
}

.movie-card-details,
.movie-card-poster {
    position: absolute;
}

.movie-card-poster:hover+.movie-card-details {
    display: block;
} */


.movie-card {
    position: relative;
    background-color: transparent;
    width: 200px;
    height: 240px;
    border: solid white 1px;
}



.movie-card-poster {
    opacity: 1;
    display: block;
    /* width: 100%; */
    width: 200px;
    height: 240px;
    transition: .5s ease;
    backface-visibility: hidden;
}

.movie-card-details {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 30%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: end;
}

.movie-card:hover .movie-card-poster {
    opacity: 0.1;
}

.movie-card:hover .movie-card-details {
    opacity: 1;
}