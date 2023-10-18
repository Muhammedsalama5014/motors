@extends('pagesLayout.layout')
@section('content')

<!-- Breadcromb Area Start -->
<section class="elgazal-breadcromb-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcromb Area End -->


<!-- Contact Area Start -->
<section class="elgazal-contact-area section_70">

  @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="contact-left">
                    <h3>Get in touch</h3>
                <form class="card" action='{{ route("contact.store") }}' method="post" autocomplete="off">
                                         @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-contact-field">
                                    <input type="text" placeholder="Your Name" name="name" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-contact-field">
                                    <input type="email" placeholder="Email Address"  name="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-contact-field">
                                    <input type="text" placeholder="Subject"  name="sybject">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-contact-field">
                                    <input type="tel" placeholder="Phone Number"  name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-contact-field">
                                    <textarea placeholder="Write here your message"  name="msg"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="single-contact-field">
                                    <button type="submit" class="elgazal-theme-btn"><i class="fa fa-paper-plane"></i> Send
                                        Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-right">
                    <h3>Contact information</h3>
                    <div class="contact-details">
                        <p><i class="fa fa-map-marker"></i> 125 Big fella St. Road, New York, Hi 5654775 </p>
                        <div class="single-contact-btn">
                            <h4>Email Us</h4>
                            <a href="#">info@example.com</a>
                        </div>
                        <div class="single-contact-btn">
                            <h4>Call Us</h4>
                            <a href="#">+(09)-2134-76894-9</a>
                        </div>
                        <div class="social-links-contact">
                            <h4>Follow Us:</h4>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Area End -->

<!-- Contact Area Start -->
<section class="elgazal-contact-area section_70">
    <div class="container">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d927764.3554046695!2d46.26204874590837!3d24.72415034370633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh%20Saudi%20Arabia!5e0!3m2!1sen!2seg!4v1677490706912!5m2!1sen!2seg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- Contact Area End -->

<!-- Footer Area Start -->
@endsection
