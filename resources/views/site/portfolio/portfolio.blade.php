<!-- portfolio page area start here -->
<div class="portfolio-page-area section ">
    <div class="container">
        <div class="row">
            <div class="portfolio-list">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        @foreach($projects as $project)
                            <div class="col-sm-12 col-md-4">
                                <div class="single-portfolio">
                                    <div class="poftfolio-info">
                                        <div class="poftfolio-img">
                                            <img src="{{Voyager::image($project->image)}}" alt="{{$project->seo}}">
                                        </div>
                                    </div>
                                    <div class="portfolio-content">
                                        <div class="portfolio-inner-content">
                                            <div class="portfolio-detels">
                                                <h4>{{$project->title}}</h4>
                                                <span>{{$project->type}}</span>
                                                <div class="portfolio-btn">
                                                    <a href="{{$project->link}}" target="_blank">Full View</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
            <div class="col-sm-12 text-center">
                <div class="load-more">
                    <a href="#" class="load-more-btn">Load More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- portfolio page area start here -->
