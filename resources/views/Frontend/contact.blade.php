@extends("../layouts/frontendmaster")

@section("content")

    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>Contact <span> Us</span></h2>
                            <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                        </div>
                    </div>
                    <div class="pg-contact">
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1">
                            <h2>Educate <span>Master</span></h2>
                            <p>We Provide Outsourced Software Development Services To Over 50 Clients From 21 Countries.</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con1"> <img src="img/contact/1.html" alt="">
                            <h4>Address</h4>
                            <p>28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.
                                <br>Landmark : Next To Airport</p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con3"> <img src="img/contact/2.html" alt="">
                            <h4>CONTACT INFO:</h4>
                            <p> <a href="tel://0099999999" class="contact-icon">Phone: 01 234874 965478</a>
                                <br> <a href="tel://0099999999" class="contact-icon">Mobile: 01 654874 965478</a>
                                <br> <a href="mailto:mytestmail@gmail.com" class="contact-icon">Email: info@company.com</a> </p>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 new-con new-con4"> <img src="img/contact/3.html" alt="">
                            <h4>Website</h4>
                            <p> <a href="#">Website: www.mycompany.com</a>
                                <br> <a href="#">Facebook: www.facebook/my</a>
                                <br> <a href="#">Blog: www.blog.mycompany.com</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
        <section class="mb-5">
            <h2 class="text-center">Your Message Here</h2>
            <div class="container" style="width: 90%; margin:0 auto;">
            <div id="hom-vijay" class="col s12">
                            <form class="col s6">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input type="text" class="validate">
                                        <label>User name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input type="email" class="validate">
                                        <label>Email id</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input type="tel" class="validate">
                                        <label>Mobile</label>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input type="text" class="validate">
                                        <label>User Message</label>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s5">
                                        <input type="submit" value="Register" class="waves-effect waves-light light-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
            </div>
        </section>

    <section id="map" class="mt-5">
        <div class="row contact-map">
            <!-- IFRAME: GET YOUR LOCATION FROM GOOGLE MAP -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290413.804893654!2d-93.99620524741552!3d39.66116578737809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1469954001005"
                allowfullscreen=""></iframe>
       
        </div>
    </section>

@endsection
