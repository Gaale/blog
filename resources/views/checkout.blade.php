@extends('layout')

@section('title', 'CHECKOUT')

@section('content_1')
    <div class="post-single-wrapper axil-section-gap bg-color-white justify-content-md-center text-center">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h4 class="title mb--10">Ordering</h4>
                    <p class="b3 mb--30">Fill the form to place your order</p>
                    <form class="row" method="post" action="{{route('checkout')}}">
                        @csrf
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="first-name">Your First Name</label>
                                <input name="first_name" type="text" id="first-name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="last-name">Your Last Name</label>
                                <input name="last_name" type="text" id="last-name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="phone"> Your Phone</label>
                                <input type="text" name="phone" id="phone">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="email">Your Adress</label>
                                <input name="address" id="address" type="text">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="comment">Your Comment</label>
                                <textarea name="comment" id="comment"></textarea>
                            </div>
                        </div>
                        <h4 class="col-lg-12 mt--20">Your order:</h4>
                        @foreach(\Cart::getContent() as $post)
                            <div class="item_cart col-lg-12">
                                <div class="image_cart">
                                    <img src="{{$post->attributes->img}}" alt=""/>
                                </div>

                                <div class="description_cart">
                                    <span>Post # {{$post->id}}</span>
                                    <span>{{$post->name}}</span>
                                    <span></span>
                                </div>
                                <div class="total-price">${{$post->price}}</div>
                                <div class="quantity_cart">
                                    <input type="text" name="items [{{$post->id}}]" value="{{$post->quantity}}"
                                           readonly>
                                </div>
                                <div class="total-price">${{\Cart::get($post->id)->getPriceSum()}}</div>
                            </div>
                        @endforeach
                        <div class="item_cart flex justify-content-end col-lg-12">
                            <div class="total-price font-weight-bold">Total: ${{\Cart::getTotal()}}</div>
                        </div>
                        <input type="submit" value="Place Order" style="margin: auto" class="mt--20">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
