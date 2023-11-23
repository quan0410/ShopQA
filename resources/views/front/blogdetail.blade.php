@extends('front.layout.master')
@section('title', 'Blogs')
@section('body')
    <!-- Blog Details Hero Begin -->
    <section class="blog-hero spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="blog__hero__text">
                        <h2>{{$blog->title}}</h2>
                        <ul>
                            <li>  {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('d-m-Y')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="blog__details__pic">
                        <img src="{{asset(Storage::url($blog->image))}}" height="500" alt="">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__share">
                            <span>share</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="blog__details__text">
                            <p>{{$blog->content}}</p>
                        </div>
                        <div class="blog__details__option">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__author">
                                        <div class="blog__details__author__pic">
                                            <img src="{{asset('front/img/QA.png')}}" height="50" width="50" alt="">
                                        </div>
                                        <div class="blog__details__author__text">
                                            <h5>{{\App\Models\User::findOrFail($blog->user_id)->name}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="blog__details__tags">
                                        <a href="#">#{{$blog->category}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="blog__details__btns">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--                                    <a href="" class="blog__details__btns__item">--}}
{{--                                        <p><span class="arrow_left"></span> Previous Pod</p>--}}
{{--                                        <h5>It S Classified How To Utilize Free Classified Ad Sites</h5>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 col-md-6 col-sm-6">--}}
{{--                                    <a href="" class="blog__details__btns__item blog__details__btns__item--next">--}}
{{--                                        <p>Next Pod <span class="arrow_right"></span></p>--}}
{{--                                        <h5>Tips For Choosing The Perfect Gloss For Your Lips</h5>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
