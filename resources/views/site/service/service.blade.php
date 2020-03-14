<!-- provide area start here -->
<div class="abdelghafour-services section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="service-page-title">
                    <h2>What we provide?</h2>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($services as $service)
                <div class="col-sm-6 col-md-4 text-center">
                    <div class="single-service">
                        <div class="inner-file">
                            <div class="service-incon">
                                <i class="{{$service->icon}}"></i>
                            </div>
                            <div class="service-title">
                                <h3>{{$service->title}}</h3>
                            </div>
                            <div class="service-content">
                                <p>
                                    {{$service->descr}}
                                </p>
                            </div>
                        </div>
                        <div class="service-overlay">
                            <div class="overlay-content">
                                <ul>
                                    {!! $service->detail !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- provide area start here -->
