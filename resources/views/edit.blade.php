@extends('layout')

@section('content')




                  {{-- Create a new Blog --}}
                  <div class="slides">
                  <div class="slide" >
                    <div class="content fifth-content">
                        <div class="container-fluid">
                            <div>
                                <h2>
                                    Edit Blog
                                </h2>
                            </div>

                            <div class="col-md-12">
                                <form enctype="multipart/form-data" action="/blog/{{$blog->id}}"  method="POST">
                                    @csrf
                                    @method("PUT")
                                    <div class="row">
                                        <div class="col-md-9">
                                          <fieldset>
                                            <input name="title" type="text" class="form-control" id="name" placeholder="Title"  value="{{$blog->title}}">
                                          </fieldset>
                                          <div class="col-md-4">
                                            <img src="{{$blog->image ? asset('storage/'.$blog->image) : asset(url("img/first_service.jpg"))}}" class="img-fluid rounded-circle" width="50" height="200" alt="small image">
                                          </div>

                                          <fieldset>
                                            <input type="file" name="image" id="fileInput"  >
                                          </fieldset>
                                        </div>
                                        <div class="col-md-11">
                                          <fieldset>
                                            {{-- <textarea name="description"  placeholder="Your Blog Description..." value="{{$blog->description}}"></textarea> --}}
                                            <textarea name="description" class="form-control" id="description" placeholder="Description" rows="5">{{$blog->description}}</textarea>

                                          </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                          <fieldset>
                                            <button type="submit" id="form-submit" class="btn">Update Blog</button>
                                          </fieldset>




                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                  </div>

                @endsection
