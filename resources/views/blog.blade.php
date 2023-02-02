@extends('layout')

@section('content')

<body>

    <div class="sequence">

      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>

    </div>




        <div class="slides">
          <div class="slide" id="1">
            <div class="slide" id="3">
                <div class="content third-content">
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="first-section">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="left-content">
                                                    <h2>{{$blog->title}}</h2>
                                                    <p>{{$blog->description}}</p>
                                                    <div class="main-btn"><a href={{url('blog/'.$blog->id. "/edit")}}>Edit</a></div>
                                                </div>
                                                <div class="second-section">
                                                <div class= "left-content">
                                                    <form action="/blog/{{$blog->id}}/delete" method="post" >
                                                        @csrf
                                                        @method("DELETE")
                                                        <button type="submit" class= "btn">Delete</button>
                                                    </form>
                                                  </div>
                                                </div>


                                            </div>

                                            <div class="col-md-6">
                                                <div class="right-image">
                                                    <img src="{{$blog->image ? asset('storage/'.$blog->image) : asset(url("img/first_service.jpg"))}}" alt="first service">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>



@endsection
