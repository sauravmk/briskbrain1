<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog | BriskBrain Technologies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/iconmoon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <div id="loader">
        <div id="element">
            <div class="circ-one"></div>
            <div class="circ-two"></div>
        </div>
    </div>
    <header>
        @php
            $setting = App\Models\Settings::find(1);
        @endphp
        <div class="header-top">
            <div class="container clearfix">
                <div class="lang-wrapper">
                    <ul class="phoneiconsec">
                        @if ($setting->mobile)
                            <li><a href="{{ $setting->mobile }}"><i
                                        class="fa fa-mobile-phone phoneicon"></i>{{ $setting->mobile }}</a></li>
                        @endif
                        @if ($setting->email)
                            <li><a href="{{ $setting->email }}"><i
                                        class="fa fa-envelope mailicon"></i>{{ $setting->email }}</a></li>
                        @endif
                    </ul>
                </div>
                <div class="right-block clearfix">
                    <ul class="follow-us">
                        <li><a href="https://www.facebook.com/BriskBrainTechnologies/" target="_blank"><i
                                    class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="skype://manish-bhuva?chat" target="_blank"><i class="fa fa-skype"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/briskbrain/" target="_blank"><i
                                    class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/BriskBrain2" target="_blank"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="navbar main-header navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    @if ($setting)
                        <img src="{{ asset('uploads/logo/' . $setting->logo) }}" class="img-logo" alt="">
                    @endif
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false"
                    aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="{{ url('service') }}" class="nav-link dropdown-toggle">Services</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown2">
                                <div class="inner">
                                    <a class="dropdown-item" href="{{ url('Yii') }}"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i>Yii Framework Development</a>
                                    <a class="dropdown-item" href="{{ url('Codeigniter') }}"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i>CodeIgniter Development</a>
                                    <a class="dropdown-item" href="{{ url('Laravel') }}"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i>Laravel Development</a>
                                    <a class="dropdown-item" href="{{ url('Magento') }}"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i>Magento eCommerce Development</a>
                                    <a class="dropdown-item" href="{{ url('WordPress') }}"><i
                                            class="fa fa-angle-right" aria-hidden="true"></i>WordPress Development</a>
                                    <a class="dropdown-item" href="{{ url('PHP') }}"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i>Custom PHP Development</a>
                                    <a class="dropdown-item" href="{{ url('Ruby') }}"><i class="fa fa-angle-right"
                                            aria-hidden="true"></i>Ruby on Rails Development</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('portfolio') }}">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">Contacts</a>
                        </li>
                    </ul>
                    <ul class="navbar-right d-flex">
                        <li><a href="#myModal" data-toggle="modal">Request A Quote</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header request-header">
                            <button type="button" class="close btnclose" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title request-title">Request a Quote</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input name="name" class="form-control" placeholder="" type="text">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input name="email" placeholder="" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>Website</label>
                                <input name="website" placeholder="" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>How can we help you?</label>
                                <textarea name="description" placeholder="" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer request-footer">
                            <button type="submit" class="btn btn-save">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </header>
