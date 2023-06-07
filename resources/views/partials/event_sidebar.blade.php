<div class="widget-content blog-widget mb-3">
                            <form action="" method="GET" class="search-form">
                                <input type="text" name="search" class="form-control" placeholder="Type here">
                                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
<!-- follow -->
<div class="addthis_inline_follow_toolbox"></div>


                    <!-- recent posts -->

                    <h4  class="row pt-3">Other Events</h3>

                    @foreach($Revents as $revent)
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset($revent->image)}}" alt="{{$revent->title}}" class="img-fluid rounded-start" style="width:100%; height:80px;"  alt="{{$revent->title}}">
                            &ensp;
                        </div>
                        <div class="col-md-8">
                            <p class="h6"><a href="{{ route('events', $revent->slug)}}">
                                {{$revent->title}}
                            </a></p>
                            <p class=""><small class="text-muted">{{ \Carbon\Carbon::parse( $revent->start )->toDayDateTimeString() }}</small></p>
                        </div>
                    </div>
                    @endforeach

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
                            <p class=""><small class="text-muted">{{ \Carbon\Carbon::parse( $recent->published_at )->toDayDateTimeString() }}</small></p>
                        </div>
                    </div>
                    @endforeach
