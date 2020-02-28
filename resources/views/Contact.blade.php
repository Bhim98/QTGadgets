<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
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

<section>
    <div class="contact-title">
        <h1>Contact Us</h1>
        <h3>We are always ready to serve you!</h3>
    </div>

    <div class="contact-form">
        <form id="contact-form" method="post" action="">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            <br>
            <input type="text" name="E-mail" class="form-control" placeholder="Your E-mail" required>
            <br>

            <textarea name="Message" class="form-control" placeholder="Message" rows="4" required></textarea>
            <br>

            <input type="submit" class="form-control submit" value="SEND MESSAGE">

        </form>
    </div>
</section>
<h1>__________________________________________________________________________________</h1>

</td>
</tr>
</table>
<center>
    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2819.88824864529!2d168.74201821554286!3d-45.02719397909821!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa9d51e49c78d684b%3A0xa79fc7af97f3eead!2sSouthern%20Institute%20of%20Technology%20-%20Queenstown%20Campus!5e0!3m2!1sen!2snz!4v1580251317637!5m2!1sen!2snz" width="1280" height="720" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>
    <h3>11 Hawthorne Drive, Frankton, Queenstown 9300</h3>
</center>
<br></br>
</table>
<br>



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

