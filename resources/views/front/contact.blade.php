@extends('layouts.front')
@section('title', 'Contact')
@section('content')
    <div class="page-title page-title-style-02 bkg-img09">
        <div class="pt-mask-light"></div>

        <!-- .container start -->
        <div class="container">
            <!-- .row start -->
            <div class="row">
                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <!-- .pt-heading start -->
                    <div class="pt-heading">
                        <h1>{{ __('message.call_us') }}</h1>
                    </div><!-- .pt-heading end -->
                </div><!-- .col-md-6 end -->

                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <!-- breadcrumbs start -->
                    <div class="breadcrumb-container clearfix">
                        <ul class="breadcrumb">
                            <li>{{ __('message.You_are_here') }}: </li>

                            <li>
                                <a href="/">{{ __('message.btn_accueil') }}</a>
                            </li>

                            <li>
                                <span class="active">Contact</span>
                            </li>
                        </ul><!-- .breadcrumb end -->
                    </div><!-- .breadcrumb-container end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-title-style-01 end -->

    <!-- .page-conent start -->
    <div class="page-content">

        <!-- .container start -->
        <div class="container">

            <!-- .row start -->
            <div class="row">
                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <!-- .custom-heading03 start -->
                    <div class="custom-heading-03">
                        <h3>{{ __('message.call_us') }}</h3>
                    </div><!-- .custom-heading-03 end -->

                    <form class="wpcf7 wpcf7-contact-us clearfix" method="POST" action="/contacte">
                        <input type="text" required name="name" class="wpcf7-text" id="contact-name" placeholder="{{ __('message.from_name') }}">
                        <input type="email" required name="email" class="wpcf7-email" id="contact-email" placeholder="{{ __('message.from_email') }}">
                        <input type="text" required name="phone_number" class="wpcf7-text" id="contact-phone" placeholder="{{ __('message.from_phone') }}">
                        <input type="text" required name="subject" class="wpcf7-text" id="contact-subject" placeholder="{{ __('message.from_subjet') }}">
                        <textarea rows="8" name="message" class="wpcf7-textarea" id="contact-message" placeholder="{{ __('message.from_message') }}"></textarea>
                        <div class="g-recaptcha" data-sitekey="6Ld4VykTAAAAAM_qltIuTg7I0hpcdHjX7j68qpRz"></div>
                        <input type="submit" value="submit" class="wpcf7-submit">
                    </form><!-- .wpcf7.clearfix end -->
                </div><!-- .col-md-6 end -->

                <!-- .col-md-6 start -->
                <div class="col-md-6">
                    <div id="map" class="map-height-small"></div>

                    <!-- .custom-heading03 start -->
                    <div class="custom-heading-03">
                        <h3>{{ __('message.Company_info') }}</h3>
                    </div><!-- .custom-heading-03 end -->

                    <ul class="fa-ul default">
                        <li>
                            <i class="lynny-phone-1"></i>
                            <p>
                                @php
                                    $numeros = explode(',', $info->contacts);
                                @endphp
                                @forelse ($numeros as $item)
                                    <a href="tel:{{ $item }}">{{ $item }} <br>
                                    @empty
                                @endforelse
                            </p>
                        </li>

                        <li>
                            <i class="lynny-mail-duplicate"></i>
                            <p>
                                <a href="mailto:{{$info->email_contact}}">{{$info->email_contact}}</a>
                            </p>
                        </li>

                        <li>
                            <i class="lynny-home"></i>
                            <p>
                                {{ $info->adresse}} <br />
                                {{ $info->adresse2}}
                            </p>
                        </li>
                    </ul><!-- .fa-ul.default end -->
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- .page-content end -->

@endsection
