<!-- portfolio area start here -->
<div class="portfolio-area section">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h3>Project we have done</h3>
                <h2>latest Portfolio</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="single-portfolio">
                    <a href="#"><img src="{{Voyager::image($pro->image)}}" alt="{{$pro->seo}}"></a>
                    <div class="portfolio-info">
                        <h4><a href="{{$pro->link}}" target="_blank">{{$pro->title}}</a></h4>
                        <p>{{$pro->type}}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    @foreach($projects as $project)
                        <div class="col-sm-6">
                            <div class="single-portfolio">
                                <a href="#"><img src="{{Voyager::image($project->image)}}" alt="{{$project->seo}}"></a>
                                <div class="portfolio-info">
                                    <h4><a href="{{$project->link}}" target="_blank">{{$project->title}}</a></h4>
                                    <p>{{$project->type}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="col-sm-12">
                <div class="load-more-btn text-center">
                    <a href="{{route('portfolio')}}" class="load-btn" >See More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- portfolio area end here -->
