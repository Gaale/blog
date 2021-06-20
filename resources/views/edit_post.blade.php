@extends('layout')

@section('title', 'EDIT_POST')

@section('content_1')

    <!-- Start Form Editing Post  -->
    <div class="post-single-wrapper axil-section-gap bg-color-white justify-content-md-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mr--80 ml--80">

                    @if (\Illuminate\Support\Facades\Auth::check())
                        <h1>Edit post # {{$post->id}}</h1>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="edit_post" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$post->id}}">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Choose Author</label>
                                <select class="form-control form-control-lg" name="author_id">
                                    @foreach($authors as $author)
                                        <option value="{{$author->id}}" @if($author->id == $post->author_id) selected @endif
                                                id="exampleFormControlSelect1">{{$author->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Choose Category (press Ctrl for choosing several
                                    categories)</label>
                                <select multiple class="form-control form-control-lg" id="exampleFormControlSelect2"  name="category_id[]">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                                @if ($post->category->contains($category)) selected @endif
                                                id="exampleFormControlSelect2">{{$category->title}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Add title</label>
                                <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1"  name="title" value="{{$post->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Add Text</label>
                                <textarea class="form-control form-control-lg" id="exampleFormControlTextarea2"
                                          rows="6"  name="body">{{$post->body}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Add image (required size 295px*250px)</label>
                                <input type="file" class="form-control form-control-lg" id="exampleFormControlInput1" name="img295_250">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Add image (required size 780px*520px)</label>
                                <input type="file" class="form-control form-control-lg" id="exampleFormControlInput1"  name="img780_520">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Add image (required size 100px*100px)</label>
                                <input type="file" class="form-control form-control-lg" id="exampleFormControlInput1"  name="img100_100">
                            </div>
                            <div class="col-lg-12">
                                <div class="form-submit cerchio">
                                    <input name="submit" type="submit" id="submit"
                                           class="axil-button button-rounded"
                                           value="Update Post">
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
                <!-- End Form Editing Post  -->
@endsection

