@extends('layouts.front')

@section('title')

Tag {{$tag->name}}

@endsection

@section('content')

<section class="bg text-light p-5 p-lg-0 pt-lg-5 text-center">
    <div class="container">
        <div class="row pt-5">
            <h2 class="text-center pb-2 text-white">
                <strong>{{$tag->name}}</strong>
            </h2>
            <p class="lead text-white">
            News
            </p>
        </div>
    </div>
</section>

<section class="blog p-5">
        <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col-lg-8 p-5">
          <div class="row">
              
        @forelse($posts as $post)
          <div class="col-sm-6">
            <div class="card h-100">
              <img src="{{asset($post->image)}}" class="card-img-top" alt="...">
              <div class="card-body text-center">
                    <img src="{{ Gravatar::src(asset($post->email)) }}" class="rounded-circle rounded-img position-absolute start-20 translate-middle border border-secondary" alt="..." width="75px" height="75px">
                <h5 class="card-title pt-5">
                    <a href="{{ route('post', $post->slug)}}"
                        style="color:#38CDD2">
                    {{$post->title}}
                    </a>
                </h5>
                <span class="category">{{$post->category->name}}</span>
                <p class="card-text">{{$post->description}}</p>
                <a href="{{ route('post', $post->slug)}}" class="read-more">Read More</a>
              </div>
              <div class="card-footer text-center">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
                @empty
                <p class="text-center">
                    No search result found for <strong> {{request()->query('search')}} </strong>
                </p>
                @endforelse
            </div>
          </div>

  <!-- sidebar -->

            <div class="col-lg-4">
                   <div class="row">
                       
            <ul class="pagination-wrap text-center mt-30">
            {{ $posts->appends(['search' => request()->query('search')])->links()}}
        </ul>
                
                        @include('partials.sidebar')
                        
                   </div>
                  
            </div>


    
</div>
</div>

</section><!--/. blog-section -->

@endsection