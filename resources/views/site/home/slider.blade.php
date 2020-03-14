<!-- slider area start here -->
<div class="slider-area">
    <div class="owl-carousel slide-slider">

        @foreach($sliders as $slider)
            <div class="single-slider" style="background-image: url(images/slider/cover.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="slider-content">
                                <div class="slider-heading">
                                    <h1 data-animation-in="flipInX ">{{$slider->title}}</h1>
                                    <p data-animation-in="bounceInLeft">
                                        {{$slider->descr}}
                                    </p>
                                    <div class="slider-btn" data-animation-in="bounceInUp">
                                        <ul>
                                            <li><a  class="btn" href="{{route('about')}}">About me</a></li>
                                            <li><a  class="btn" href="{{route('contact')}}">Contact me</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                       {{-- <div class="col-md-5">
                            <div class="slider-right" data-animation-in="bounceInRight">
                                <img src="{{Voyager::image($slider->image)}}" alt="{{$slider->seo}}">
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
<!-- slider area end here -->
