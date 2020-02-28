<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aboutus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme%7CSource+Sans+Pro">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Bitter|Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="/images/Style.css">
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="welcome">
        <img src="images/logo.jpg" width="300" height="100" alt="QtGadgetsLogo">
    </a>
    <a class="navbar-brand" href="#"><h4><b></b></h4></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="welcome">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Aboutus">Aboutus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Trade & Sales">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Contact">Contact</a>
            </li>

            <section>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}"> My Cart <span class="class count"><br>
                                @if(Cart::instance('default')->count() >0)
                                <span>
                                        {{ Cart::instance('default')->count() }}
                                    </span></span>
                        @endif

                </li>

            </section>

        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><h2>Search</h2></button>
        </form>


    </div>
</nav>

<div class="breadcrumbs">
    <div class="container">
        <a href="#">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>About Us</span>
    </div>
</div>



<section>
    <img src="\images\home1.jfif" alt="background" style="width:100%;height:20%">
</section>


    <section>
       <center> <h1>SERVICING ELECTRONIC DEVICES FOR OVER 10 YEARS!</h1><br>
        <p>Our dedication to provide our customer the best experience, unbeaten price for services with our extensive product knowledge, sets us apart from the competitors in the market.<br>
            Whatever your requirements, buying direct from Queenstown Gadgets enables you to obtain a better deal for less money.<br>
            The new website is packed with great information and ideas on leading edge technologies right for you.<br>
            You will find a fantastic range of great value offers on every service required for your
            next PC or mobile phone. Your will also find our servicing department to help you trouble shoot your PCs.<br>
            Our goal is to be your quickest and friendliest store! We want to make your experience with Queesntown Gadgets as easy as possible.<br>
    </section>
</center>
<br>
<br>
<br>
<img src="\images\unnamed (1).jpg" alt="info-bar" style="width:100%">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="/action_page.php">
                <br><br><br>
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <br><br>
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                <br><br>
                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="New Zealand">New Zealand</option>
                </select>
                <br><br>
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:65px" style="width:380px" ></textarea>
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </div></div>
</div>
</body>




        <footer class="my-5 pt-5 text-muted text-center text-small">
            <div class="socialbuttons">
                <ul>
                    <li><a href="https://www.facebook.com/queenstown.gadgets/" class="fa fa-lg fa-facebook"></a></li>
                    <li><a href="https://twitter.com/QueenstownGadg1/" class="fa fa-lg fa-twitter"></a></li>
                    <li><a href="https://www.instagram.com/jetskitoursqueenstown/" class="fa fa-lg fa-instagram"></a></li>
                    <li><a href="https://www.youtube.com/results?search_query=jetski+tours+queenstown" class="fa fa-lg fa-youtube"></a></li>
                </ul>
            </div>
            &copy; 2020 Queenstown Gadgets
        </footer>

</html>

