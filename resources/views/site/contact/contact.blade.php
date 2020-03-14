<!-- contact page area start here -->
<div class="contact-page-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="office-address-area">
                    <div class="logo-area">
                        <a href="{{route('home')}}"><img src="/images/logo.png" alt="Elmarzougui Abdelghafour"></a>
                    </div>
                    <div class="office-title">
                        <h2>Office Address</h2>
                    </div>
                    <div class="address-info">
                        <ul>
                            <li> <i class="flaticon-signs"></i> <span>7777 modern Avenue, Suite 05,</span> <span> New York, CA 9077, USA</span> </li>
                            <li> <i class="flaticon-technology-2"></i> <span> Phone: +212677512753</span> </li>
                            <li> <i class="flaticon-interface"></i> <span>abdelghafour</span> <span>www.yourwebsite.com</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form-area">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact-form-title">
                                <h2>Get in Touch</h2>
                                @if (\Session::has('successmsg'))
                                    <div class="alert alert-success">
                                        <p>{{ \Session::get('successmsg') }}</p>
                                    </div><br />
                                @endif
                                @if (\Session::has('failure'))
                                    <div class="alert alert-danger">
                                        <p>{{ \Session::get('failure') }}</p>
                                    </div><br />
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <form action="{{route('contact')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name2" value="{{old('name')}}" placeholder="Your name *" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email2" value="{{old('email')}}"  placeholder="Your Email *" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="tele" id="mobilenumber" value="{{old('tele')}}"  placeholder="Mobile Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="Subject2" value="{{old('subject')}}"  placeholder="Subject *" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="messages2" rows="3" placeholder="Your Message *" required>
                                      {{old('message')}}
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="submit-btn text-right">
                                    <button>send</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact page area end here -->
