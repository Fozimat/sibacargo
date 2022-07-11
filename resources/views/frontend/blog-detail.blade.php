@extends('frontend.template')
@section('title', Str::title($postingan->judul))
@section('content')
<div class="page-banner-wrap text-center bg-cover"
    style="background-image: url('{{ asset('assets/img/page-banner2.jpg') }}')">
    <div class="container">
        <div class="page-heading text-white">
            <h1>Blog</h1>
        </div>
    </div>
</div>
<div class="breadcrumb-wrapper">
    <div class="container">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">blog detail</li>
            </ol>
        </nav>
    </div>
</div>

<section class="blog-wrapper news-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="blog-post-details border-wrap">
                    <div class="single-blog-post post-details">
                        <div class="post-content">
                            <h2>{{ $postingan->judul }}</h2>
                            <img src="{{ asset('postingan/'.$postingan->gambar ) }}" alt="">
                            <div class="post-meta">
                                <span><i class="fal fa-calendar-alt d-inline"></i>{{
                                    $postingan->tanggal_posting->isoFormat('dddd, D
                                    MMMM Y,
                                    HH:mm') }}</span>
                            </div>

                            {!! $postingan->deskripsi !!}

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-lg-4">
                <div class="main-sidebar">
                    <div class="single-sidebar-widget">
                        <div class="wid-title">
                            <h3>Search</h3>
                        </div>
                        <div class="search_widget">
                            <form action="#">
                                <input type="text" placeholder="Search your keyword..." />
                                <button type="submit"><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="single-sidebar-widget">
                        <div class="wid-title">
                            <h3>Artikel Terbaru</h3>
                        </div>
                        <div class="popular-posts">
                            @foreach ($postingan_terbaru as $post)
                            <div class="single-post-item">
                                <div class="thumb bg-cover"
                                    style="background-image: url('{{ asset('postingan/'.$post->gambar) }}')">
                                </div>
                                <div class="post-content">
                                    <h5>
                                        <a href="{{ $post->slug }}">{{ $post->judul }}</a>
                                    </h5>
                                    <div class="post-date">
                                        <i class="far fa-calendar-alt"></i>{{ $post->tanggal_posting->isoFormat('dddd, D
                                        MMMM Y') }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="single-sidebar-widget">
                        <div class="wid-title">
                            <h3>Kategori</h3>
                        </div>
                        <div class="widget_categories">
                            <ul>
                                @foreach ($kategori as $kat)
                                <li>
                                    <a href="#">{{ $kat->nama_kategori }} <span>{{ $kat->postingan->count()
                                            }}</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="single-sidebar-widget">
                        <div class="wid-title">
                            <h3>Never Miss News</h3>
                        </div>
                        <div class="social-link">
                            <a target="_blank" href="https://www.facebook.com/sibacargoofficial"><i
                                    class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a target="_blank" href="https://twitter.com/sibacargoofficial"><i class="fab fa-twitter"
                                    aria-hidden="true"></i></a>
                            <a target="_blank" href="https://www.instagram.com/sibacargoofficial/"><i
                                    class="fab fa-instagram" aria-hidden="true"></i></a>
                            <a target="_blank"
                                href="https://www.youtube.com/channel/UC8P6Ri76hj4_WZp5iWW_OUA/featured"><i
                                    class="fab fa-youtube" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection