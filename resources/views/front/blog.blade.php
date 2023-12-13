@extends('front.layout.master')
@section('title', 'Blogs')
@section('body')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-blog set-bg" data-setbg="front/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Our Blog</h2>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset(Storage::Url($blog->image))}}"></div>
                        <div class="blog__item__text">
                            <span><img src="front/img/icon/calendar.png" alt="">{{date_format($blog->created_at, 'd F Y')}}</span>
                            <h5>{{$blog->title}}</h5>
                            <a href="{{route('blog.detail.index', ['blog' => $blog->id])}}">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection
