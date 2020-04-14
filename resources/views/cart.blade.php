@extends('layouts.app')

@section('title', 'Shopping Cart')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="#">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shopping Cart</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="cart-section container">
        <div>
            @if (session()->has('success_message'))
                <div class="alert alert-success" style="color: red;">
                    {{ session()->get('success_message')}}
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ( Cart::count() > 0)

            <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>

            <div class="cart-table">
                @foreach (Cart::content() as $item)
                    
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                    <a href="{{ route('product.show', $item->model->slug) }}">
                        <img src="/img/macbook-pro.png" alt="item" class="cart-table-img">
                    </a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="{{ route('product.show', $item->model->slug) }}">{{ $item->model->name }}</a></div>
                            <div class="cart-table-description">{{ $item->model->details }}</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="cart-options">Remove</button>
                            </form>

                            <form action="{{ route('cart.switchSavelater', $item->rowId) }}" method="POST">
                                @csrf
                
                                <button type="submit" class="cart-options">Save for Later</button>
                            </form>
                        </div>
                        <div>
                            <select class="quantity" data-id="{{ $item->rowId }}">
                                @for ($i = 1; $i < 5+1; $i++)
                                    <option {{ $item->qty == $i ? 'selected' : '' }}>{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        <div>{{ presentPrice($item->subtotal)}}</div><!-- TOD::passThevalue from model & run validation & presentPrice -->
                    </div>
                </div> <!-- end cart-table-row -->
                @endforeach
            </div> <!-- end cart-table -->

            <a href="#" class="have-code">Have a Code?</a>

            <div class="have-code-container">
                <form action="#">
                    <input type="text">
                    <button type="submit" class="button button-plain">Apply</button>
                </form>
            </div> <!-- end have-code-container -->

            <div class="cart-totals">
                <div class="cart-totals-left">
                    Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).
                </div>

                <div class="cart-totals-right">
                    <div>
                        Subtotal <br>
                        Tax (19%) <br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        {{ presentPrice(Cart::subtotal()) }} <br>
                        {{ presentPrice(Cart::tax()) }} <br>
                        <span class="cart-totals-total">{{ presentPrice(Cart::total()) }}</span>
                    </div>
                </div>
            </div> <!-- end cart-totals -->

            <div class="cart-buttons">
                <a href="{{ route('shop.index') }}" class="button">Continue Shopping</a>
                <a href="{{ route('checkout.index') }}" class="button-primary">Proceed to Checkout</a>
            </div>
            
            @else 
                <h3>No item in cart</h3>
                <a href="{{ route('shop.index') }}" class="button">Continue Shopping</a>
            @endif

            @if ( Cart::instance('saveForlater')->count() > 0)

            <h2>{{ Cart::instance('saveForlater')->count() }} item(s) Saved For Later</h2>
            
            <div class="saved-for-later cart-table">
                @foreach(Cart::instance('saveForlater')->content() as $item)
                    
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="{{ route('product.show', $item->model->slug) }}"><img src="/img/macbook-pro.png" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">{{ $item->model->name }}</a></div>
                            <div class="cart-table-description">{{ $item->model->details }}</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <form action="{{ route('saveForlater.destroy', $item->rowId) }}" method="POST">
                                @csrf
                                @method('DELETE')
                
                                <button type="submit" class="cart-options">Remove</button>
                            </form>

                            <form action="{{ route('saveForlater.switchToCart', $item->rowId) }}" method="POST">
                                @csrf
                
                                <button type="submit" class="cart-options">Move to cart</button>
                            </form>

                        </div>
                        {{-- <div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div> --}}
                        <div>$2499.99</div>
                    </div>
                </div> <!-- end cart-table-row -->
                @endforeach

            </div> <!-- end saved-for-later -->

            @else 
                <h3>You have no items saved for Later</h3>
            @endif

        </div>

    </div> <!-- end cart-section -->

    @include('partials.might-like')


@endsection

@section('extra-js')
    <script>
        (function() {
            const classname = document.querySelectorAll('.quantity');//returns nodelist

            //convert it to array, iterate over items and add eventlister to each item
            Array.from(classname).forEach(function(el) {
                el.addEventListener('change', function() {
                    const productId = el.getAttribute('data-id');
                    //do this on item change
                    axios.patch(`/cart/${productId}`, {
                        quantity: this.value             //data -> this.value = the value of quntity selector
                    })
                    .then(function(response) {
                        //console.log(response);
                        window.location.href = '{{ route('cart.index')}}'
                    })
                    .catch(function (error) {
                        console.log(error);
                        window.location.href = '{{ route('cart.index')}}'
                    });
                });
            });

        })();
    </script>
@endsection