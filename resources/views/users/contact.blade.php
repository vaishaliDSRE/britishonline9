@extends('users.layouts.master')
@section('content')
  	<section class="service-wrapper py-3"id="service">
        <div class="container-fluid pb-3">
            <div class="row justify-content-center">
                <div class="section-heading1 ">
                    <h2>Contact<em>Us</em></h2>
                    <img src="{{asset('images/line-dec.png')}}" alt="waves">
                </div>
            </div>
        </div>
        <section class="section" id="contact-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div id="map">
                          <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="contact-form">
                            <form id="contact" action="" method="post">
                              <div class="row">
                                <div class="col-md-6 col-sm-12">
                                  <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                  <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                  <fieldset>
                                    <input name="subject" type="text" id="subject" placeholder="Subject">
                                  </fieldset>
                                </div>
                                <div class="col-lg-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-lg-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Send Message</button>
                                  </fieldset>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
