<div class="widget-content blog-widget mb-3">
                            <form action="" method="GET" class="search-form">
                                <input type="text" name="search" class="form-control" placeholder="Type here">
                                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
<!-- follow -->
<div class="addthis_inline_follow_toolbox"></div>

                    <!-- categories -->

                     <h4 class="row pt-3">Categories</h3>
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                        @foreach($categories as $category)
                            <li class="list-group-item">
                            <a href="{{route('category', $category->name)}}">
                                {{$category->name}}
                            </a>
                            </li>
                        @endforeach
                        </ul>
                    </div><!--categories.-->

                    <!-- recent posts -->

                    <h4  class="row pt-3">Recent Posts</h3>

                    @foreach($recents as $recent)
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset($recent->image)}}" alt="{{$recent->title}}" class="img-fluid rounded-start" style="width:100%; height:80px;"  alt="...">
                            &ensp;
                        </div>
                        <div class="col-md-8">
                            <p class="h6"><a href="{{ route('post', $recent->slug)}}">
                                {{$recent->title}}
                            </a></p>
                            <p class=""><small class="text-muted">{{$recent->published_at}}</small></p>
                        </div>
                    </div>
                    @endforeach

<!-- tags -->
                    
                    
    <div class="widget-content blog-widget">
        <h4>Post Tags</h4>
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
            @foreach($tags as $tag)
                <li class="list-group-item">
                <a href="{{route('tag', $tag->name)}}">
                     {{$tag->name}}
                </a>
                </li>
            @endforeach
            </ul>
        </div>
    </div><!--tag clouds-->