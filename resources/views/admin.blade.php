@extends('layout')

@section('title', 'ADMIN')

@section('content_1')

    <!-- Start Form Adding Post  -->
    @if(session('message'))
        <div class="alert alert-success">
            <strong>Success!</strong> {{session('message')}}!
        </div>
    @endif
    <div class="post-single-wrapper axil-section-gap bg-color-white justify-content-md-center">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                @if(\Illuminate\Support\Facades\Auth::check())
                    <h1 class="title">Admin Panel</h1>
                    <div class="col-lg-12">
                        <div class="form-submit cerchio">
                            <button  class="axil-button button-rounded mb--30"
                                    value="Add New Post"><a style="color: white" href="{{route('get_add_post')}}">Add New Post</a>
                            </button>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Post Title</th>
                            <th scope="col"> </th>
                            <th scope="col"> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td><a href="{{route('single_post', $post->id)}}">{{$post->title}}</a></td>
                            <td>
                                <form action="/admin/edit_post/{{$post->id}}" method="get">
                                    <input type="hidden" name="id" value="{{$post->id}}">
                                    <button class="axil-button button-rounded hover-flip-item-wrapper" type="submit">Edit</button>
                                </form>
                            </td>
                            <td>
                                <form action="" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{$post->id}}">
                                    <button class="axil-button button-rounded hover-flip-item-wrapper" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- Start Pagination List  -->
                    <ul class="pagination justify-content-center mt--40 tagcloud">
                        @if($posts->currentPage() != 1)
                            <li class="page-item w-15 ml--15"><a class="page-link" href="?page=1">First</a></li>
                            <li class="page-item w-15 mr--15 ml--15"><a class="page-link"
                                                                        href="{{$posts->previousPageUrl()}}">&larr;</a>
                            </li>
                        @endif
                        @if($posts->count() > 1)
                            @for($count = 1; $count <= $posts->lastPage(); $count++)
                                @if($count < $posts->currentPage() + 3 and $count > $posts->currentPage() - 3)
                                    <li class="page-item mr--5 @if($posts->currentPage() == $count) active @endif">
                                        <a class="page-link" href="?page={{$count}}">{{$count}}</a>
                                    </li>
                                @endif
                            @endfor
                            @if($posts->currentPage() != $posts->lastPage())
                                <li class="page-item w-15  ml--15">
                                    <a class="page-link" href="{{$posts->nextPageUrl()}}">&rarr;</a>
                                </li>
                                <li class="page-item w-15 ml--15">
                                    <a class="page-link" href="?page={{$posts->lastPage()}}">Last</a>
                                </li>
                            @endif
                        @endif
                    </ul>
                    <!-- End Pagination List  -->
                @endif
            </div>
@endsection
