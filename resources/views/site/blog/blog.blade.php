
<!-- work progress area start hear       -->
<div class="work-progress-area section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="service-page-title">
                    <h2>BLOG</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-6 text-center">
                    <div class="single-work-progress">
                        <div class="progress-info">
                            <div class="abdelghafour-blog">
                                <img src="{{Voyager::image($post->image)}}" alt="{{$post->title}}">
                            </div>
                            <div class="progress-title">
                                <h1 style="font-size: 24px !important; margin-top: 20px">
                                    <a href="{{route('blogSingle',$post->slug)}}">{{$post->title}}</a>
                                </h1>
                            </div>
                            <div class="progress-content">
                                <p>
                                    {{$post->excerpt}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- work progress area end hear       -->
