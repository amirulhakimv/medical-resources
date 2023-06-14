
@extends("layout")
@section("content")
        @foreach($posts as $post)
            <div class="album py-5 bg-light">
            <div class="container">

                <div class="col-lg-6 col-md-8 mx-auto">

        <div class="col">
            <div class="card shadow-sm">
            <a href="/detail/{{$post->id}}">
                <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="{{asset($post->image)}}" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            </a>
              <div class="card-body">
                <p class="card-text">{{$post->content}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted">June 2023</small>
                </div>
              </div>
            </div>
          </div>

        </div>
    </div>
    </div>

        @endforeach

@endsection
