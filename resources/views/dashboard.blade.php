@extends('layouts.main')
@section('content')

    <div class="row row-new-post" style="margin-top: 120px">
        <div class="col-md-6 col-md-offset-3 card card-block" style="height: 280px">
            @include('includes.messagebox')
            <h6 class="card-header primary-color white-text">Post something:</h6>
            <form action="{{ route('post') }}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new_post" rows="5" placeholder="your post">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-default" style="background-color: #4DB6AC; color: white">create post</button>
                <input type="hidden" value="{{csrf_token()}}" name="_token">
            </form>
        </div>
    </div>
    <div class="row row post">
        <div class="col-sm-6 col-md-offset-3 card card-block ScrollStyle">
            <header><h4>Posts</h4></header>
            @foreach($posts as $post)
                <article class="post card card-block smooth-scroll">
                    <div class="list-group">
                        <div class="list-group-item">
                            <div class="row-picture">
                                <img class="circle" src="http://lorempixel.com/56/56/people/1" alt="icon">
                            </div>
                            <div class="row-content">
                                <h6 class="list-group-item-heading">{{$post->user->first_name}}</h6>
                               {{$post->created_at}}
                            </div>
                        </div>
                        <p>{{$post->body}}</p>
                        <div class="info list-group-item">
                            posted by {{$post->user->first_name}} on {{$post->created_at}}
                        </div>
                        <div class="interaction">
                            <a href="#" class="btn  btn-raised mdi mdi-heart btn btn-info btn-sm" role="button" data-toggle="tooltip" title="like">
                            </a>
                            <a href="#" class="btn  btn-raised fa fa-thumbs-down btn btn-primary btn-sm" role="button" data-toggle="tooltip" title="Unlike"><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span>
                            </a>
                            @if(Auth::user()== $post->user)
                                <a  href="#" class="btn btn-default btn-sm btn-raised " role="button" data-toggle="modal" title="Edit" data-target="#edit-modal"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </a>

                                <a href="{{route('post.delete' ,['post_id'=>$post->id])}}" class="btn btn-danger btn-sm btn-raised " role="button" data-toggle="tooltip" title="Delete"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                </a>
                            @endif
                        </div>
                        </div>


                </article>
            @endforeach
        </div>
    </div>
    <div class="modal fade card card" tabindex="-1" role="dialog" id="edit-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Post</h4>
                </div>
                <div class="modal-body">
                   <form>
                       <div class="form-group">
                           <label for="post-body">Edit the Post</label>
                           <textarea class="form-control" name="post-body" id="post-body" rows="5"></textarea>
                       </div>
                   </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn" style="background-color: #4DB6AC; color: white;">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    @endsection