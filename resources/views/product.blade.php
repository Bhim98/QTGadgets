<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <style>
    </style>
    <body>
    <section>
        <table>
            <tr>
                <td width="1%">
                    <a href="welcome"><img src="\images\logo.jpg" alt="QtGadgetsLogo" width="300px"></a>
                </td>
                <td width="95%">

                    <ul>
                        <li><a class="active" href="welcome" title="Home">Home</a></li>
                        <li><a href="Aboutus" title="About Us">About Us</a></li>
                        <li><a href="Services" title="Services">Services</a></li>
                        <li><a href="Shop" title="Trade & Sales">Shop</a></li>
                        <li><a href="Contact" title="Contact">Contact</a></li>
                        <li>
                            <a href="{{ route('cart.index') }}">My Cart <span class="class count">
                                @if(Cart::instance('default')->count() >0)
                                        <span>
                                        {{ Cart::instance('default')->count() }}
                                    </span></span>
                                @endif
                            </a>
                        </li>
                    </ul>
                </td>
            </tr>
        </table>
    </section>

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <a href="{{route('shop.index')}}">Shop</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span class="product-section-subtitle23"> {{ $product->name}}</span>
        </div>
    </div>

    <div class="product-section container">
        <div class="product-section-image">
            <img src="{{ asset('/images/'.$product->slug.'.jpg') }}" alt="product">
        </div>
        <div class="product-section-information">
            <h1 class="product-section title">  {{ $product->name }}</h1>
            <div class="product-section-subtitle"> {{ $product->details}}</div>
            <div class="product-section-price"> {{ $product->price }}</div>
        </div>
    </div>
<p>
    {{ $product->description }}
</p>
<p>
   &nbsp; &nbsp;
</p>
<form action="{{ route('cart.store') }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="id" value ="{{ $product-> id }}">
    <input type="hidden" name="name" value ="{{ $product-> name}}">
    <input type="hidden" name="price" value ="{{ $product-> price}}">
    <button type="submit" class="button button-plain">Add to Cart</button>

</form>

<div class="might-like-section">
    <div class="container">
        <h2>You might also like.....</h2>
        <div class="might-like-grid">
            @foreach($mightAlsoLike as $product)
                <a href="{{route('shop.show',$product->slug)}}" class="might-like-product">
                    <img src="{{ asset('/images/'.$product->slug.'.jpg') }}" alt="product">
                    <div class="might-like-product-name">{{ $product->name}}</div>
                    <div class="might-like-product-price">{{ $product->price}}</div>
                </a>
                @endforeach
        </div>
    </div>


</div>
</body>
