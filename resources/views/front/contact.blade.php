@extends('front.layout.master')
@section('title', 'Contact')
@section('body')
<!-- Map Begin -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.0146951117185!2d105.77135407600652!3d21.072075286288136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134552defbed8e9%3A0x1584f79c805eb017!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBN4buPIC0gxJDhu4thIGNo4bqldA!5e0!3m2!1svi!2s!4v1693815077428!5m2!1svi!2s" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- Map End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="contact__text">
                    <div class="section-title">
                        <span>Information</span>
                        <h2>Contact Us</h2>
                        <p>As you might expect of a company that began as a high-end interiors contractor, we pay
                            strict attention.</p>
                    </div>
                    <ul>
                        <li>
                            <h4>Đại học Mỏ Địa Chất</h4>
                            <p>Số 18 Phố Viên<br />+84 123-456-789</p>
                        </li>
                        <li>
                            <h4>Minh Quân</h4>
                            <p>Thái Bình<br />+84 868-033-462</p>
                        </li>
                    </ul>
                </div>
            </div>
{{--            <div class="col-lg-6 col-md-6">--}}
{{--                <div class="contact__form">--}}
{{--                    <form action="#">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <input type="text" placeholder="Name">--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <input type="text" placeholder="Email">--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-12">--}}
{{--                                <textarea placeholder="Message"></textarea>--}}
{{--                                <button type="submit" class="site-btn">Send Message</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection
