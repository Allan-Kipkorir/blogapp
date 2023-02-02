@extends('layout')

@section('content')

<body>

    <div class="sequence">

      <div class="seq-preloader">
        <svg width="39" height="16" viewBox="0 0 39 16" xmlns="http://www.w3.org/2000/svg" class="seq-preload-indicator"><g fill="#F96D38"><path class="seq-preload-circle seq-preload-circle-1" d="M3.999 12.012c2.209 0 3.999-1.791 3.999-3.999s-1.79-3.999-3.999-3.999-3.999 1.791-3.999 3.999 1.79 3.999 3.999 3.999z"/><path class="seq-preload-circle seq-preload-circle-2" d="M15.996 13.468c3.018 0 5.465-2.447 5.465-5.466 0-3.018-2.447-5.465-5.465-5.465-3.019 0-5.466 2.447-5.466 5.465 0 3.019 2.447 5.466 5.466 5.466z"/><path class="seq-preload-circle seq-preload-circle-3" d="M31.322 15.334c4.049 0 7.332-3.282 7.332-7.332 0-4.049-3.282-7.332-7.332-7.332s-7.332 3.283-7.332 7.332c0 4.05 3.283 7.332 7.332 7.332z"/></g></svg>
      </div>

    </div>


        <nav>
          <div class="mini-logo">
              <img src="img/mini_logo.png" alt="">
          </div>
          <ul>
            <li><a href="#1"><i class="fa fa-home"></i> <em>Home</em></a></li>
            <li><a href="#2"><i class="fa fa-user"></i> <em>About</em></a></li>
            <li><a href="#3"><i class="fa fa-envelope"></i> <em>Blogs</em></a></li>
            <li><a href="#5"><i class="fa fa-pencil"></i> <em>Create New Blog</em></a></li>
          </ul>
        </nav>

        <div class="slides">
          <div class="slide" id="1">
            <div class="content first-content">
              <div class="container-fluid">
                  <div class="col-md-3">
                      <div class="author-image"><img src="img/author_image.jpeg" alt="Author Image"></div>
                  </div>
                  <div class="col-md-9">
                      <h2>Blogs</h2>
                      <p>This is a blog app created by Allan Kipkorir Mutai</p>
                  </div>
              </div>
            </div>
          </div>
          <div class="slide" id="2">
            <div class="content second-content">
                <div class="container-fluid">
                    <div class="col-md-6">
                        <div class="left-content">
                            <h2>About Us</h2>
                            <p>This is a simple blog application with CRUD functionality.</p>
                            <p>You can create, read, update and delete posts. The code is easily adaptable to your needs. Laravel 9 is used as framework for this project.</p>
                          <div class="main-btn"><a href="#3">Read More</a></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-image">
                          <img src="img/about_image.jpg" alt="">
                      </div>
                    </div>
                </div>
            </div>
          </div>








          <div class="slide" id="3">
            <div class="content third-content">

                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="row">
                            @foreach ($blogs as $index => $blog )
                             @if($index % 2==0)
                            <div class="first-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="left-content">
                                                <h2>{{$blog->title}}</h2>
                                                <p>{{$blog->description}}</p>
                                                <div class="main-btn"><a href={{url('blog/'. $blog->id)}}>Continue Reading</a></div>
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
                            @else
                            <div class="second-section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="left-image">
                                                <img src="{{$blog->image ? asset('storage/'.$blog->image) : asset(url("img/first_service.jpg"))}}" alt="first service">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="right-content">
                                                <h2>{{$blog->title}}</h2>
                                                <p>{{$blog->description}}</p>
                                                <div class="main-btn"><a href={{url('blog/'. $blog->id)}}>Continue Reading</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
          </div>







                  {{-- Create a new Blog --}}
                  <div class="slide" id="5">
                    <div class="content fifth-content">
                        <div class="container-fluid">

                            <div class="col-md-12">
                                <form id="contact" action="/store" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                          <fieldset>
                                            <input name="title" type="text" class="form-control" id="name" placeholder="Title" required="">
                                          </fieldset>
                                          <fieldset>
                                            <input type="file" name="image" id="fileInput" >
                                          </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                          <fieldset>
                                            <textarea name="description" rows="6" class="form-control" id="message" placeholder="Your Blog Description..." required=""></textarea>
                                          </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                          <fieldset>
                                            <button type="submit" id="form-submit" class="btn">Upload</button>
                                          </fieldset>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>


@endsection
