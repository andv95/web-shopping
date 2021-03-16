@extends('templates.master')

@section('style-css')
    <link rel="stylesheet" href="{{asset('css/FAQ/faq.css')}}">
@stop

@section('content')
    <div class="accordion-container">
        <h2>LET’S FAQ</h2>
        <p class="text-center">Everything you want to know before we get dirty.</p>

        <div class="row">
            <div class="col-xl-4 col-md-12">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="text-center list-group-item  list-group-item-action active" id="list-home-list" data-bs-toggle="list"
                       href="#list-home" role="tab" aria-controls="home">Home</a>
                    <a class="text-center list-group-item  list-group-item-action" id="list-profile-list" data-bs-toggle="list"
                       href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                    <a class="text-center list-group-item  list-group-item-action" id="list-messages-list" data-bs-toggle="list"
                       href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                    <a class="text-center list-group-item  list-group-item-action" id="list-settings-list" data-bs-toggle="list"
                       href="#list-settings" role="tab" aria-controls="settings">Settings</a>
                </div>
            </div>
            <div class="col-xl-8 col-md-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                         aria-labelledby="list-home-list">
                        <div class="set">
                            <a href="#">
                                Vestibulum
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                                Phasellus
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p> Aliquam cursus vitae nulla non rhoncus. Nunc condimentum erat nec dictum tempus.
                                    Suspendisse aliquam erat hendrerit vehicula vestibulum.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                                Praesent
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p>Pellentesque aliquam ligula libero, vitae imperdiet diam porta vitae. sed do eiusmod
                                    tempor incididunt ut labore et dolore magna.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                                Curabitur
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae
                                    luctus odio pretium scelerisque. </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="set">
                            <a href="#">
                                Vestibulum
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                                Phasellus
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p> Aliquam cursus vitae nulla non rhoncus. Nunc condimentum erat nec dictum tempus.
                                    Suspendisse aliquam erat hendrerit vehicula vestibulum.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                                Praesent
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p>Pellentesque aliquam ligula libero, vitae imperdiet diam porta vitae. sed do eiusmod
                                    tempor incididunt ut labore et dolore magna.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                                Curabitur
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae
                                    luctus odio pretium scelerisque. </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="set">
                            <a href="#">
                                Vestibulum
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                                Phasellus
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p> Aliquam cursus vitae nulla non rhoncus. Nunc condimentum erat nec dictum tempus.
                                    Suspendisse aliquam erat hendrerit vehicula vestibulum.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                                Praesent
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p>Pellentesque aliquam ligula libero, vitae imperdiet diam porta vitae. sed do eiusmod
                                    tempor incididunt ut labore et dolore magna.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                                Curabitur
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae
                                    luctus odio pretium scelerisque. </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <div class="set">
                            <a href="#">
                                Vestibulum
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                                Phasellus
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p> Aliquam cursus vitae nulla non rhoncus. Nunc condimentum erat nec dictum tempus.
                                    Suspendisse aliquam erat hendrerit vehicula vestibulum.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                                Praesent
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p>Pellentesque aliquam ligula libero, vitae imperdiet diam porta vitae. sed do eiusmod
                                    tempor incididunt ut labore et dolore magna.</p>
                            </div>
                        </div>
                        <div class="set">
                            <a href="#">
                                Curabitur
                                <i class="fa fa-plus"></i>
                            </a>
                            <div class="content">
                                <p> Donec tincidunt consectetur orci at dignissim. Proin auctor aliquam justo, vitae
                                    luctus odio pretium scelerisque. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

@section('js-style')
    <script src="{{asset('js/FAQ/faq.js')}}" type="text/javascript"></script>

@stop
