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
            <span>Shopping Cart</span>
        </div>
    </div>


    <div class="cart-section container">
      <div>
          @if(session()->has('success_message'))
              <div class="alert alert-success">
                  {{ session()->get('success_message') }}
              </div>
          @endif

          @if(count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach($errors->all() as $error)
                          <li> {{$error}}</li>
                          @endforeach
                  </ul>
              </div>
              @endif

              @if (Cart::count() > 0)

                  <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>

           <div class="cart-table">
               @foreach(Cart::content() as $item)
               <div class="cart-table-row">
                   <div class="cart-table-row-left">
                       <a href="{{ route('shop.show', $item->model->slug) }}"><img src="{{ asset('/images/'.$item->model->image.'.jpg') }}" alt="item" class ="cart-table-img"></a>
                       <div class="cart-item-details">
                           <div class="cart-table-item"><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a> </div>
                           <div class="cart-table description">{{ $item->model->details }}</div>
                       </div>
                   </div>
                   <div class="cart-table-right">
                       <div class="cart-table-actions">
                           <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                               {{ csrf_field() }}
                               {{ method_field('DELETE') }}

                               <button type="submit" class="cart-options">Remove</button>
                           </form>

                           <form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                               {{ csrf_field() }}

                               <button type="submit" class="cart-options">Save for Later</button>
                           </form>
                       </div>
                       <div>
                           <select class="quantity">
                               <option selected="">1</option>
                               <option selected="">2</option>
                               <option selected="">3</option>
                               <option selected="">4</option>
                               <option selected="">5</option>
                           </select>
                       </div>
                       <div>{{ $item->model->price }}</div>
                   </div>
               </div>
                   @endforeach
           </div>



                        <a href="#" class="have-code">Have a code?</a>

                          <div class="have-code-container">
                             <form action="#">
                                <input type="text">
                                   <button type="submit" class="button button-plain">Apply</button>
                             </form>
                          </div>

                           <div class="cart-totals">
                              <div class="cart-totals-left">
                                 <h2> Shipping is free because, we are always willing to assist our valued customers.</h2>
                               </div>
                               <div class="cart-totals-right">
                                  <div>
                                    <h2>Subtotal <br>
                                    Tax (15%)<br></h2>
                                     <span class="cart-totals-total">Total</span>
                                  </div>
                                    <div class="cart-totals-subtotal">
                                        {{Cart::subtotal()}} <br>
                                        {{Cart::tax()}} <br>
                                        <span class="cart-totals-subtotal">{{ Cart::total() }}</span>
                                    </div>
                                </div>
                            </div>

                                 <div class="cart-buttons">
                                   <a href="{{route('shop.index')}}" class="button">Continue Shopping</a>
                                   <a href="{{route('checkout.index')}}" class="button-primary">Proceed to checkout</a>
                                    </div>
                                 @else
                                   <h3>No items in the Cart!</h3>
                                     <div class="spacer"></div>
                                       <a href="{{ route('shop.index') }}" class="button">Continue Shopping</a>
                                    <div class="spacer"></div>
                                 @endif

                                  @if (Cart::instance('saveForLater')->count() > 0)

                                  <h2>{{ Cart::instance('saveForLater')->count() }} item(s) Saved For Later</h2>

                  <div class="saved-for-later cart-table">
                      @foreach (Cart::instance('saveForLater')->content() as $item)
                          <div class="cart-table-row">
                              <div class="cart-table-row-left">
                                  <a href="{{ route('shop.show', $item->model->slug) }}"><img src="{{ asset('images/'.$item->model->slug.'.jpg') }}" alt="item" class="cart-table-img"></a>
                                  <div class="cart-item-details">
                                      <div class="cart-table-item"><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></div>
                                      <div class="cart-table-description">{{ $item->model->details }}</div>
                                  </div>
                              </div>
                              <div class="cart-table-row-right">
                                  <div class="cart-table-actions">
                                      <form action="{{ route('saveForLater.destroy', $item->rowId) }}" method="POST">
                                          {{ csrf_field() }}
                                          {{ method_field('DELETE') }}

                                          <button type="submit" class="cart-options">Remove</button>
                                      </form>

                                      <form action="{{ route('saveForLater.switchToCart', $item->rowId) }}" method="POST">
                                          {{ csrf_field() }}

                                          <button type="submit" class="cart-options">Move to Cart</button>
                                      </form>
                                  </div>

                                  <div>{{ $item->model->price}}</div>
                              </div>
                          </div> <!-- end cart-table-row -->
                      @endforeach

                  </div> <!-- end saved-for-later -->

              @else

                  <h4>You have no items Saved for Later.</h4>

              @endif

      </div>

    </div> <!-- end cart-section -->



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


               </div>
    </div>
</body>



