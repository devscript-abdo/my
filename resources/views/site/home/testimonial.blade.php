<!-- testimonial area start here -->
<div class="testimonial-area section">
    <div class="container">
        <div class="row">
            <div class="section-title text-center">
                <h3>happy Client say </h3>
                <h2>Testimonial</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="testimonial-info-list">
                    <div class="single-testimonial-info">
                        <!-- Media middle -->
                        <div class="media">
                            <div class="media-left media-middle">
                                <i class="flaticon-graphic"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Professional Services</h4>
                                <p>Data Breach is one of the most common forms of cybercrime. Even after so many precautions and preventive measures Data Breach.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-info">
                        <!-- Media middle -->
                        <div class="media">
                            <div class="media-left media-middle">
                                <i class="flaticon-computer"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Quility product </h4>
                                <p>Data Breach is one of the most common forms of cybercrime. Even after so many precautions and preventive measures Data Breach.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-info">
                        <!-- Media middle -->
                        <div class="media">
                            <div class="media-left media-middle">
                                <i class="flaticon-technology-1"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">24/7 Hours Support</h4>
                                <p>Data Breach is one of the most common forms of cybercrime. Even after so many precautions and preventive measures Data Breach.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="owl-carousel slide-testimonial">


                    @foreach($testimonials as $testi)
                        <div class="single-testimonial">
                            <div class="testimonial-content">
                                <p>

                                    {{$testi->content}}
                                </p>
                            </div>
                            <div class="member-name">
                                <h3><a href="{{$testi->url}}" target="_blank">{{$testi->name}}</a> <span>{{$testi->profil}}</span></h3>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial area end here -->
