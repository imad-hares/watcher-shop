@extends('layouts.app')

@section('title', 'Products')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shop</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="products-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
                @foreach ($categories as $category)
                    <li class="{{ setActiveCategory($category->slug) }}"><a href="{{ route('shop.index', ['category' => $category->slug]) }}"> {{ $category->name }} </a></li>
                @endforeach
            </ul>

        </div> <!-- end sidebar -->
        <div>
            <div class="products-header">
                <h1 class="stylish-heading">{{ $categoryName }}</h1>
                <div>
                    <strong>Price</strong>
                    <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high']) }}">Low to High</a> |
                    <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'high_low']) }}">High to Low</a> |
                    <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'newest']) }}">Latest</a>
                </div>
            </div>
            <br><br>
            <div class="products text-center">
                @forelse ($products as $product)
                    <div class="product">
                        <a href="{{ route('product.show', $product->slug) }}"><img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product"></a>
                        <a href="{{ route('product.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ presentPrice($product->price) }}</div>
                    </div>
                @empty
                    <div class="notFound">No items found</div>
                @endforelse
            </div> <!-- end products -->
            {{ $products->appends(request()->input())->links() }}
        </div>
    </div>


@endsection
