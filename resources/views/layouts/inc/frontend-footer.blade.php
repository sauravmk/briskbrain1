<footer class="footer">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="recent-post">
                        @php
                            $setting = App\Models\Settings::find(1);
                        @endphp
                            <a class="navbar-brand" href="{{url('/home')}}"><img src="{{asset('uploads/logo/'.$setting->logo)}}" class="img-logo" alt=""></a>
                            <div class="connect-outer">
                                <h4>Contact Info</h4>
                                <ul class="contact-sec">
                                    <li><a href=""><i class="fa fa-mobile-phone" aria-hidden="true"></i>{{$setting->mobile}}</a></li>
                                    <li><a href=""><i class="fa fa-envelope mailicon" aria-hidden="true"></i>{{$setting->email}}</a></li>
                                    <li class="address-li">
                                        <a href="https://www.google.com/maps/place/BriskBrain+Technologies/@23.113883,72.541279,15z/data=!4m5!3m4!1s0x0:0xde25685d973da59f!8m2!3d23.1138826!4d72.5412793?hl=en"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                                        <p>{{$setting->address}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-2">
                        <div class="quick-links">
                            <h4>Quick Links</h4>
                            <ul class="footertext">
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{url('home')}}">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{url('about')}}">About Us</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{url('service')}}">Services</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{url('portfolio')}}">Portfolio</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{url('blog')}}">Read Our Blog</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{url('contact')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="subscribe">
                            <h4>Our Expertise</h4>
                            <ul class="footertext">
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{url('Yii')}}">Yii Framework Development</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{url('Laravel')}}">Laravel Development</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{url('Codeigniter')}}">CodeIgniter Development</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{url('PHP')}}">Custom PHP Development</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{url('Magento')}}">Magento E-Commerce Development</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{url('WordPress')}}">WordPress Development</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="{{url('Ruby')}}">Ruby on Rails Development</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="subscribe">
                            {{-- <h4>Recent Posts</h4>@foreach ($latestpost as $latestitem)
                            <ul class="footertext">
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i><a href="javascript:void(0)">{{$latestitem->name}}</a></li>
                            </ul>@endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container">Copyright © Briskbrain Technologies - All rights reserved</div>
        </div>
    </footer>
    <a href="#" class="scroll-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bxslider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/common.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.easypiechart.min.js')}}"></script>

</body>
</html>
