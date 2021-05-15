@extends("theme")
@section("content")
<div class="inner-banner">
</div>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us</li>
        </ul>
    </div>
</section>
<!-- /contact-form -->
<section class="w3l-contact-6 py-5" id="contact">
    <div class="contact-info  py-lg-4 py-md-3">
        <div class="container">
            <div class="title-content mb-5">
                <h5 class="title-small text-center mb-2">Contact us</h5>
                <h3 class="title-big text-center mb-5">Get in touch with us</h3>
            </div>
            <div class="grid contact-grids pt-3">
                <div class="contact-left">
                    <div class="grid">
                        <span class="fa fa-map-marker"></span>
                        <div class="location-info">
                            <span>Address</span>
                            <p> Cafe Stud,</p>
                            <p>South Kalamassery, Kalamassery,</p>
                            <p>Kochi, Kerala 683104</p>
                        </div>
                    </div>
                    <div class="grid">
                        <span class="fa fa-envelope-o"></span>
                        <div class="email-info">
                            <span>Have any Questions?</span>
                            <a href="mailto:mail@examplemail.com"> help@cafestud.com</a>
                        </div>
                    </div>
                    <div class="grid">
                        <span class="fa fa-phone"></span>
                        <div class="email-info">
                            <span>Phone Number</span>
                            <a href="tel:(123) 456-78-90"> (123) 456-78-90</a><br>
                            <a href="tel:(123) 456-78-90"> (+12) 255 456-78-90</a>
                        </div>
                    </div>
                </div>
                <div class="contacts12-main">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                        <div class="input-grids">
                            <div>
                                <label class="form-field" for="w3lName">Name</label>
                                <input type="text" name="w3lName" id="w3lName" placeholder="e.g. Jhon Smith" class="contact-input" />
                            </div>
                            <div>
                                <label class="form-field" for="w3lSender">Email Address</label class="form-field">
                                <input type="email" name="w3lSender" id="w3lSender" placeholder="e.g. example@mail.com"
                                    class="contact-input" />
                            </div>
                        </div>

                        <div>
                            <label class="form-field" for="w3lSubect">Subject</label class="form-field">
                            <input type="text" name="w3lSubect" id="w3lSubect" placeholder="e.g. Subject"
                                class="contact-input" />
                        </div>
                        <div>
                            <label class="form-field" for="w3lMessage">Message</label class="form-field">
                            <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here"
                                required=""></textarea>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-style btn-primary submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
<!-- //contact-form -->
<!-- /contact-map -->
<section class="w3l-contact-6">
    <div id="contacts4-block" class="contact-map">
        <div class="">
            <div class="contact">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31428.346895828825!2d76.31623511645759!3d10.054488290076087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080c269c104ecd%3A0x845435f558157962!2sKalamassery%2C%20Kochi%2C%20Kerala!5e0!3m2!1sen!2sin!4v1620559383146!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                <div class="cont-details">
                    <h5>Opening hours</h5>

                    <div class="opening-info-day">
                        <span class="opening-left">Monday:</span><span class="opening-right">9 AM - 4 PM</span>
                    </div>
                    <div class="opening-info-day">
                        <span class="opening-left">Tuesday:</span><span class="opening-right">9 AM - 4 PM</span>
                    </div>
                    <div class="opening-info-day">
                        <span class="opening-left">Wednesday:</span><span class="opening-right">9 AM - 4 PM</span>
                    </div>
                    <div class="opening-info-day">
                        <span class="opening-left">Thursday:</span><span class="opening-right">9 AM - 4 PM</span>
                    </div>
                    <div class="opening-info-day">
                        <span class="opening-left">Friday:</span><span class="opening-right">9 AM - 4 PM</span>
                    </div>
                    <div class="opening-info-day">
                        <span class="opening-left">Saturday:</span><span class="opening-right">9 AM - 4 PM</span>
                    </div>
                    <div class="opening-info-day">
                        <span class="opening-left">Sunday:</span><span class="opening-right">Closed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- //contact-map -->
@endsection