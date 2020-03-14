<!-- about abdelghafour srea start here -->
<div class="about-abdelghafour-area section">
    <div class="container ">
        <div class="row">
            <div class="col-sm-12">
                <div class="about-abdelghafour-title">
                    <h2>ABOUT THE abdelghafour</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-abdelghafour-content">
                    <p>
                        {!! $page->body !!}
                    </p>
                </div>
            </div>
            <div class="col-md-6 hidden-md hidden-lg">
                <div class="about-abdelghafour-imgg">
                <img src="{{Voyager::image($page->image)}}" alt="{{$page->title}}">
                </div>
            </div>
        </div>
    </div>
    <div class="about-abdelghafour-bg">
        <img src="{{Voyager::image($page->image)}}" alt="{{$page->title}}">
    </div>
</div>
<!-- about abdelghafour srea end here -->
