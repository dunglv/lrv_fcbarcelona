@extends('layouts.master')
@section('style', HTML::style('/stylesheet/shop.css'))
@section('head.title', 'Shopping in barcelona')
@section('content')
<section id="fc_shop">
    <div class="title-section">
        <a href="{{ route('shop.index') }}">SHOP</a>
    </div>
    <div class="inner">
        <div class="list-products">
            <div class="fc-item ">
                <div class="inner-item">
                    <div class="thumnail-product">
                        {!! HTML::image('images/products/clothe.jpg', 'Lorem ipsum dolor sit.') !!}
                        <div class="review _ver"><a href="#"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                    <div class="infor-product">
                        <div class="fc-title-product">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </div>
                        <div class="fc-price">
                            <span>$100.00</span>
                            <strike>$100.00</strike>
                        </div>
                        <div class="fc-btn-order-save">
                           <a class="add-cart" href="#"> <i class="fa fa-shopping-cart"></i></a>
                           <a class="save-review" href="#"> <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fc-item ">
                <div class="inner-item">
                    <div class="thumnail-product">
                        {!! HTML::image('images/products/clothe.jpg', 'Lorem ipsum dolor sit.') !!}
                        <div class="review _ver"><a href="#"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                    <div class="infor-product">
                        <div class="fc-title-product">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </div>
                        <div class="fc-price">
                            <span>$100.00</span>
                            <strike>$100.00</strike>
                        </div>
                        <div class="fc-btn-order-save">
                           <a class="add-cart" href="#"> <i class="fa fa-shopping-cart"></i></a>
                           <a class="save-review" href="#"> <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fc-item ">
                <div class="inner-item">
                    <div class="thumnail-product">
                        {!! HTML::image('images/products/clothe.jpg', 'Lorem ipsum dolor sit.') !!}
                        <div class="review _ver"><a href="#"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                    <div class="infor-product">
                        <div class="fc-title-product">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </div>
                        <div class="fc-price">
                            <span>$100.00</span>
                        </div>
                        <div class="fc-btn-order-save">
                           <a class="add-cart" href="#"> <i class="fa fa-shopping-cart"></i></a>
                           <a class="save-review" href="#"> <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fc-item ">
                <div class="inner-item">
                    <div class="thumnail-product">
                        {!! HTML::image('images/products/clothe.jpg', 'Lorem ipsum dolor sit.') !!}
                        <div class="review _ver"><a href="#"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                    <div class="infor-product">
                        <div class="fc-title-product">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </div>
                        <div class="fc-price">
                            <span>$100.00</span>
                        </div>
                        <div class="fc-btn-order-save">
                           <a class="add-cart" href="#"> <i class="fa fa-shopping-cart"></i></a>
                           <a class="save-review" href="#"> <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fc-item ">
                <div class="inner-item">
                    <div class="thumnail-product">
                        {!! HTML::image('images/products/clothe.jpg', 'Lorem ipsum dolor sit.') !!}
                        <div class="review _ver"><a href="#"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                    <div class="infor-product">
                        <div class="fc-title-product">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </div>
                        <div class="fc-price">
                            <span>$100.00</span>
                        </div>
                        <div class="fc-btn-order-save">
                           <a class="add-cart" href="#"> <i class="fa fa-shopping-cart"></i></a>
                           <a class="save-review" href="#"> <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fc-item ">
                <div class="inner-item">
                    <div class="thumnail-product">
                        {!! HTML::image('images/products/clothe.jpg', 'Lorem ipsum dolor sit.') !!}
                        <div class="review _ver"><a href="#"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                    <div class="infor-product">
                        <div class="fc-title-product">
                            <a href="#">Lorem ipsum dolor sit amet.</a>
                        </div>
                        <div class="fc-price">
                            <span>$100.00</span>
                        </div>
                        <div class="fc-btn-order-save">
                           <a class="add-cart" href="#"> <i class="fa fa-shopping-cart"></i></a>
                           <a class="save-review" href="#"> <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop