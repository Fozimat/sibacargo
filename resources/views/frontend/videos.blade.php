@extends('frontend.template')

@section('content')
<div class="page-banner-wrap text-center bg-cover" style="background-image: url('assets/img/page-banner2.jpg')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Video Kami</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tentang</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Video
                </li>
            </ol>
        </nav>
    </div>
</div>

<section class="portfolio section-padding">
    <div class="container">
        <div class="col-12 col-lg-12 mb-40">
            <div class="block-contents text-center">
                <div class="section-title">
                    <h5>Siba</h5>
                    <h2>Video</h2>
                </div>
            </div>
        </div>
        <div class="row mtm-30">
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="post-featured-thumb bg-cover"
                    style="background-image: url('{{ asset('assets/img/thumbnail/1.jpg') }}');height:267px;">
                    <div class="video-play-btn video-post d-flex justify-content-center align-items-center h-100">
                        <a href="http://www.youtube.com/watch?v=XOo7LtUxJoY" class="play-video popup-video"
                            style="width: 62px;height: 62px; line-height: 62px;"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="post-featured-thumb bg-cover"
                    style="background-image: url('{{ asset('assets/img/thumbnail/2.jpg') }}');height:267px;">
                    <div class="video-play-btn video-post d-flex justify-content-center align-items-center h-100">
                        <a href="http://www.youtube.com/watch?v=r08vK_CuCHs" class="play-video popup-video"
                            style="width: 62px;height: 62px; line-height: 62px;"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="post-featured-thumb bg-cover"
                    style="background-image: url('{{ asset('assets/img/thumbnail/3.jpg') }}');height:267px;">
                    <div class="video-play-btn video-post d-flex justify-content-center align-items-center h-100">
                        <a href="https://www.youtube.com/watch?v=YHclkR3pCH4" class="play-video popup-video"
                            style="width: 62px;height: 62px; line-height: 62px;"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="post-featured-thumb bg-cover"
                    style="background-image: url('{{ asset('assets/img/thumbnail/4.jpg') }}');height:267px;">
                    <div class="video-play-btn video-post d-flex justify-content-center align-items-center h-100">
                        <a href="https://www.youtube.com/watch?v=KrRxnHC2HdY" class="play-video popup-video"
                            style="width: 62px;height: 62px; line-height: 62px;"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="post-featured-thumb bg-cover"
                    style="background-image: url('{{ asset('assets/img/thumbnail/5.jpg') }}');height:267px;">
                    <div class="video-play-btn video-post d-flex justify-content-center align-items-center h-100">
                        <a href="https://www.youtube.com/watch?v=dQbgJ8o4DUg" class="play-video popup-video"
                            style="width: 62px;height: 62px; line-height: 62px;"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 col-lg-4 mt-30">
                <div class="post-featured-thumb bg-cover"
                    style="background-image: url('{{ asset('assets/img/thumbnail/6.jpg') }}');height:267px;">
                    <div class="video-play-btn video-post d-flex justify-content-center align-items-center h-100">
                        <a href="https://www.youtube.com/watch?v=-TeUcW3t00s" class="play-video popup-video"
                            style="width: 62px;height: 62px; line-height: 62px;"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection