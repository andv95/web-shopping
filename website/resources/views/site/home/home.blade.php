@extends ('templates.master')

@section ('title', 'Trang tin')

@section ('content')

<div class="home-page">
    <div class="home__page-wrap">
        <div class="main_home-page">
            <div class="main_home_page-wrap">
                <div class="main_home_page-inner d-flex flex-row-reverse">
                    <div class="main_home_page-left w-100">
                        <div class="main_home_page_left-wrap">
                            <img src="{{asset('image/doremon.png')}}" alt="" class="w-90">
                        </div>
                    </div>
                    <div class="main_home_page-right w-100 text-right align-self-center">
                        <div class="main_home_page_right-wrap mx-auto">
                            <div class="text-left main_home_page_right-title-extra up-text">
                                Your Learning Process
                            </div>
                            <div class="text-left main_home_page_right-title-main text-bold">
                                Bởi vì trái đất hình tròn
                            </div>
                            <div class="text-left main_home_page_right-content">
                                Nó kéo bạn về website của chúng tôi và tiêu tiền một cách hợp lý
                            </div>
                            <div class="text-left main_home_page_right-link d-flex">
                                <div class="main_home_page_right_link-left m-2 p-2 ">
                                    <a class="up-text" href="#">Get Started</a>
                                </div>
                                <div class="main_home_page_right_link-right p-2 m-2">
                                    <a class="up-text" href="#">Watch Video</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="question-body question-body-home text-center pb-4">
            <form class="form-home mx-auto p-4 my-3 text-center" action="POST">
                <div class="question-title up-text">
                    <h3>Need Help?</h3>
                </div>
                <input name="" type="text" class="w-100 form-home-item" placeholder="Name">
                <input name="" type="number" class="w-100 form-home-item" placeholder="SĐT">
                <input name="" type="email" class="w-100 form-home-item" placeholder="E-mail">
                <textarea name="" class="w-100 form-home-textarea" id="" cols="" rows="10" placeholder="Your message to us"></textarea>
                <input class="form-home-file text-center" type="file" title="Choose a file please">
                <input class="w-100 py-2 form-home-submit" type="submit" value="SUBMIT">
            </form>
        </div>
    </div>
</div>


@stop