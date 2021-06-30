@extends('layout')

@section('title', 'CART')

@section('content_1')

    <div class="shopping-cart">
    @if(!Cart::isEmpty())
        <!-- Title -->
            <div class="title_cart">
                Cart
            </div>
        <form method="post" action="{{route('update_cart')}}">
            @csrf
        @foreach(Cart::getContent() as $post)
            <!-- Post for sale -->
                <div class="item_cart">
                    <div class="buttons_cart">
                        <a href="{{route('delete_item', $post->id)}}"><span class="delete-btn_cart"></span></a>
                    </div>

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
                        <button class="plus-btn" type="button" name="button_plus">
                            <img src="https://designmodo.com/demo/shopping-cart/plus.svg" alt=""/>
                        </button>
                        <input type="text" name="items [{{$post->id}}]" value="{{$post->quantity}}">
                        <button class="minus-btn" type="button" name="button_plus">
                            <img src="https://designmodo.com/demo/shopping-cart/minus.svg" alt=""/>
                        </button>
                    </div>
                    <div class="total-price">${{Cart::get($post->id)->getPriceSum()}}</div>
                </div>
            @endforeach
            <div class="item_cart flex justify-content-end">
                <div class="total-price font-weight-bold">Total: ${{Cart::getTotal()}}</div>
            </div>
            <div class="col-lg-12 text-right">
                <button class="axil-button button-rounded w-25" type="submit">Update Order</button>
            </div>
        </form>
    </div>
    <div class="col-lg-12 text-center">
        <div class="form-submit cerchio">
            <button class="axil-button button-rounded mb--30"
                    value="Make Order"><a style="color: white" href="{{route('make_order')}}">Create Order</a>
            </button>
        </div>
    </div>
    @else
        <div class="title_cart">
            Cart is empty
        </div>
    @endif
@endsection
