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
    <style>
        .products-section {
            display: grid;
            grid-template-columns: 1fr 3fr;
            margin: 80px auto 80px;}

        .sidebar li.active {
            font-weight: 500;
        }

        .products {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 60px $gutter;}

        .product-price {
            color: $text-color-light;
        }


        .products-header {
            display: flex;
            justify-content: space-between;
        }
        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }

        .pagination>li {
            display: inline;
        }

        .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
            background-color: #f4f4f4;
            border-color: #DDDDDD;
            color: inherit;
            cursor: default;
            z-index: 2;
        }

        .pagination>li:first-child>a, .pagination>li:first-child>span {
            margin-left: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        .pagination > li > a, .pagination > li > span {
            background-color: #FFFFFF;
            border: 1px solid #DDDDDD;
            color: inherit;
            float: left;
            line-height: 1.42857;
            margin-left: -1px;
            padding: 16px 22px;
            position: relative;
            text-decoration: none;
        }

        .pagination>li>a:focus, .pagination>li>a:hover, .pagination>li>span:focus, .pagination>li>span:hover {
            z-index: 2;
            color: #23527c;
            background-color: #eee;
            border-color: #ddd;
        }

    </style>
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


<div class="breadcrumbs">
    <div class="container">
        <a href="#">Home</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>Shop</span>
    </div>
</div>


    <div class="products-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
                @foreach($categories as $category)
                 <li> <a href="{{route('shop.index',['category'=>$category->slug])}}">{{$category->name}}</a> </li>

                    @endforeach
            </ul>

        </div> <!-- end sidebar -->

        <div class="products-header">
            <h1 class="stylish-heading">{{ $categoryName }}</h1>
            <div>
                <strong>Price: </strong>
                <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'low_high']) }}">Low to High</a> |
                <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'high_low']) }}">High to Low</a>

            </div>
        </div>
        <div class="products text-center">
                @forelse($products as $product)
                    <div class="product">
                        <a href="{{route('shop.show',$product->slug)}}"><img src="{{ asset('/images/'.$product->slug.'.jpg') }}" alt="product"> </a>
                        <a href="{{route('shop.show',$product->slug)}}"><div class="product-name"> {{ $product->name }}</div></a>
                        <div class="product-price"> {{ $product->price}}</div>
                    </div>
                @empty
                <div>No items found</div>

            @endforelse
        </div>
        <div class="spacer"></div>
          {{ $products->appends(request()->input())->links() }}
      </div>
    </div>
</body>
