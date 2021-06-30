@extends('layout')

@section('title', 'CHECKOUT')

@section('content_1')
    <div class="post-single-wrapper axil-section-gap bg-color-white justify-content-md-center text-center">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <h3 class="title mb--25">Thank you for your recent order, {{$order->first_name}}.</h3>
                    <table class="table table-hover">
                        <tr>
                            <th colspan="2" scope="col">Order number {{$order->id}}</th>
                        </tr>
                        <tr>
                            <th colspan="1" scope="col">Name</th>
                            <td scope="row">{{$order->first_name}} {{$order->last_name}}</td>
                        </tr>
                        <tr>
                            <th colspan="1" scope="col">Phone</th>
                            <td scope="row">{{$order->phone}}</td>
                        </tr>
                        <tr>
                            <th colspan="1" scope="col">Email</th>
                            <td scope="row">{{$order->email}}</td>
                        </tr>
                        <tr>
                            <th colspan="1" scope="col">Address</th>
                            <td scope="row">{{$order->address}}</td>
                        </tr>
                        <tr>
                            <th colspan="1" scope="col">Comment</th>
                            <td scope="row">{{$order->comment}}</td>
                        </tr>
                    </table>
                    <h4 class="col-lg-12 mt--20  mb--20">Here's Your order summary:</h4>
                    @foreach(json_decode($order->cart, true) as $post)
                        <div class="item_cart col-lg-12">
                            <div class="image_cart">
                                <img src="{{$post['attributes']['img']}}" alt=""/>
                            </div>

                            <div class="description_cart">
                                <span>Post # {{$post['id']}}</span>
                                <span>{{$post['name']}}</span>
                                <span></span>
                            </div>
                            <div class="total-price">${{$post['price']}}</div>
                            <div class="quantity_cart">
                                <input type="text" name="items [{{$post['id']}}]" value="{{$post['quantity']}}"
                                       readonly>
                            </div>
                            <div class="total-price">${{$post['price'] * $post['quantity']}}</div>
                        </div>
                    @endforeach
                    <div class="item_cart flex justify-content-end col-lg-12">
                        <div id="total" class="total-price font-weight-bold">Total: {{$total}}</div>
                    </div>
                    <div class="col-lg-12 text-center mt--20">
                        <div class="form-submit cerchio">
                            <button class="axil-button button-rounded mb--30">
                                <a style="color: white" href="#">Payment</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

