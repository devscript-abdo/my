<!-- single-blog-page area start here -->
<div class="single-blog-page section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="blog-info">
                    <div class="blog-img">
                        <img src="{{Voyager::image($post->image)}}" alt="{{$post->title}}">
                    </div>
                    <div class="blog-meta">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="blog-meta-left">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-people"></i> Admin  </a></li>
                                        <li><a href="#"><i class="flaticon-shape"></i> Web Development  </a></li>
                                        <li><a href="#"><i class="flaticon-black"></i> 20 Comment  </a></li>
                                        <li><a href="#"><i class="flaticon-medical"></i> 250 View   </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="social-share text-right">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-social"></i></a></li>
                                        <li><a href="#"><i class="flaticon-social-1"></i></a></li>
                                        <li><a href="#"><i class="flaticon-social-media"></i></a></li>
                                        <li><a href="#"><i class="flaticon-social-media-1"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h2>{{$post->title}}</h2>
                        <p>{!! $post->body !!}</p>
                        <div class="feature-infolist">
                            <ul>
                                <li><i class="flaticon-arrows-2"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- single-blog-page area end here -->
