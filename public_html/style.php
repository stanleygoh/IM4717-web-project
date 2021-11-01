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
    /* border: solid #C4B480; */
    cursor: pointer;
    transform: translatey(-7px);
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

    cursor: pointer;
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

    cursor: pointer;
    background-color: #C4B480;
    border: none;
    border-radius: 4px;
    font-family: 'Franklin Gothic Medium',
        'Arial Narrow',
        Arial,
        sans-serif;
}

.search-bar-button {
    cursor: pointer;
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


img.hover-shadow {
    transition: 0.3s;
}

.hover-shadow:hover {
    box-shadow: 0 4px 8px 0 rgba(223, 223, 223, 0.2), 0 8px 22px 0 rgba(226, 226, 226, 0.19);
}

/** end of carousel */

#content-section {
    min-height: 230px;
    margin: 0 10%;
    padding: 30px 0 50px 0px;
    color: #C4B480;
    font-family: 'Franklin Gothic Medium',
        'Arial Narrow',
        Arial,
        sans-serif;
}

#footer {
    background-color: #101f2f;
    color: #C4B480;
    font-family: 'Franklin Gothic Medium',
        'Arial Narrow',
        Arial,
        sans-serif;
    border-top: solid 1px #C4B480;
    min-height: 50px;
    padding: 20px 10%;
}

#footer ul {
    padding-left: 0px;
    list-style-type: none;
}

#footer li {
    margin-bottom: 5px;
}

#footer a:link {
    color: #9b8d61;
}

#footer a:hover {
    color: #992c2d;
}

/* COMPONENTS and STYLING */
.cta-button {
    cursor: pointer;
    height: 40px;
    margin-right: 5px;
    background: linear-gradient(#C4B480, #dac992, #ebf8e1);
    border: none;
    border-radius: 5px;
    font-family: 'Franklin Gothic Medium',
        'Arial Narrow',
        Arial,
        sans-serif;
    font-weight: bold;
    animation: breathing 5s linear infinite;
}

@keyframes breathing {
    0% {
        box-shadow: 0 0 0 0px rgba(230, 205, 110, 0.25),
            0 0 0 0px rgba(230, 205, 110, 0.2);
    }

    50% {
        box-shadow: 0 0 4px 4px rgba(240, 224, 78, 0.4),
            0 0 0 7px rgba(231, 212, 43, 0.2);
    }

    100% {
        box-shadow: 0 0 0 0px rgba(230, 205, 110, 0.25),
            0 0 0 0px rgba(230, 205, 110, 0.2);
    }
}


.cart-button {
    cursor: pointer;
    position: fixed;
    bottom: 10%;
    right: 5%;
    z-index: 10;
    display: flex;
}

.cart-text {
    cursor: pointer;

    height: 30px;
    padding: 5px 12px 5px 18px;
    border: none;
    border-radius: 5px;
    font-family: 'Franklin Gothic Medium',
        'Arial Narrow',
        Arial,
        sans-serif;
    font-weight: bold;
    background: linear-gradient(#C4B480, #dac992, #ebf8e1);
}

.cart-icon {
    cursor: pointer;
    height: 30px;
    width: 30px;
    padding: 5px 5px 5px 5px;
    background: linear-gradient(#C4B480, #dac992, #ebf8e1);
    animation: breathing 5s linear infinite;
    border-radius: 20px;
    transform: translate(15px, -5px);
}

.promotions-cart-button {
    cursor: pointer;
    position: fixed;
    bottom: 10%;
    right: 5%;
    z-index: 10;
    display: flex;
}

.promotions-cart-text {
    cursor: pointer;
    height: 30px;
    padding: 5px 12px 5px 18px;
    border: none;
    border-radius: 5px;
    font-family: 'Franklin Gothic Medium',
        'Arial Narrow',
        Arial,
        sans-serif;
    font-weight: bold;
    background: linear-gradient(#C4B480, #dac992, #ebf8e1);
    transform: translate(0px, 0px);
}

.promotions-cart-icon {
    cursor: pointer;
    height: 40px;
    width: 40px;
    padding: 5px 7px 5px 5px;
    background: linear-gradient(#C4B480, #dac992, #ebf8e1);
    animation: breathing 5s linear infinite;
    border-radius: 20px;
    z-index: 51;
    transform: translate(15px, -5px);
}

.movie-gallery {
    padding-top: 5px;
}

.movie-gallery-row {
    width: 100%;
    display: flex;
    margin: 20px auto;
}


.movie-card {
    position: relative;
    background-color: transparent;
    width: 240px;
    height: 320px;
    /* border: solid rgba(196, 180, 128, 0.5) 0.1px; */
    cursor: pointer;
    margin: 10px 30px 20px 30px;
}



.movie-card-poster {
    opacity: 1;
    display: block;
    width: 100%;
    height: 320px;

    transition: .5s ease;
    backface-visibility: hidden;
}

.movie-card-details {
    width: 90%;
    float: left;
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 40%;
    left: 45%;
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