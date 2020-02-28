<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
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
                <a class="nav-link" href="Shop">Shop</a>
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
            </>
            </li>

        </section>

        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><h2>Search</h2></button>
        </form>


    </div>
</nav>

<div class="embed-responsive embed-responsive-16by9">
    <video class="video-fluid" autoplay loop muted>
        <source src="/images/DC Computer Repair Commercial.mp4" type="video/mp4" />
    </video> <br><br><br>
</div>

<div class="featured-section">

    <div class="container">
        <h1 class="text-center">Top Selling items for this week</h1>

        <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic lorem.</p>

        <div class="text-center button-container">
            <h1><a href="#" class="button">Featured</a>
            <a href="#" class="button">On Sale</a></h1>
        </div>
        <div class="container">
            <h1><b>Newly Launched</b></h1>


        {{-- <div class="tabs">
            <div class="tab">
                Featured
            </div>
            <div class="tab">
                On Sale
            </div>
        </div> --}}
    <div class="grid-container">
      @foreach($products as $product)
        <div class="product">
            <a href="{{route('shop.show',$product->slug)}}"><img src="{{ asset('/images/'.$product->slug.'.jpg') }}" alt="product"></a>
            <a href="{{route('shop.show',$product->slug)}}"><div class="product name">{{ $product->name }}</div></a>
            <div class="product price">{{ $product->price}}</div>
        </div>
        @endforeach
    </div>
    </div> <!-- end products -->

    <div class="text-center button-container">
        <a href="#" class="button">View more products</a>
    </div>

</div> <!-- end container -->

</div> <!-- end featured-section -->






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
<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
                <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                    consectetur
                    adipisicing elit.</p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                <p>
                    <a href="#!">MDBootstrap</a>
                </p>
                <p>
                    <a href="#!">MDWordPress</a>
                </p>
                <p>
                    <a href="#!">BrandFlow</a>
                </p>
                <p>
                    <a href="#!">Bootstrap Angular</a>
                </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                <p>
                    <a href="#!">Your Account</a>
                </p>
                <p>
                    <a href="#!">Become an Affiliate</a>
                </p>
                <p>
                    <a href="#!">Shipping Rates</a>
                </p>
                <p>
                    <a href="#!">Help</a>
                </p>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p>
                    <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                <p>
                    <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                <p>
                    <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Footer links -->

        <hr>

        <!-- Grid row -->
        <div class="row d-flex align-items-center">

            <!-- Grid column -->
            <div class="col-md-7 col-lg-8">

                <!--Copyright-->
                <p class="text-center text-md-left">© 2020 Copyright:
                    <a href="https://mdbootstrap.com/education/bootstrap/">
                        <strong> MDBootstrap.com</strong>
                    </a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0">

                <!-- Social buttons -->
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

</footer>
<!-- Footer -->
</html>
