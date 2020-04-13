@extends('layouts.app')
@section('title', 'FrostFree | Contact Us')
@section('addCss')
<link rel='stylesheet' href='{{ URL::asset('css/layout.css') }}' type='text/css' media='all'/>

@endsection
@section('content')
  <div id="wrapper" class="wide-wrap">
    <div class="heading-container heading-resize heading-no-button">
      <div class="heading-background heading-parallax bg-1">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="heading-wrap">
                <div class="page-title">
                  <h1>Contact Us</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="content-container">
      <div class="container-full">
        <div class="row">
          <div class="col-md-12 main-wrap">
            <div class="main-content">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="row contact-form-wrapper">
                      <div class="col-sm-12">
                        <div class="title">
                          <h2>GET IN TOUCH</h2>
                        </div>
                        <form>
                          <div class="row">
                            <div class="col-sm-6">
                              <div>Your Name (required)<br />
                                  <p class="form-control-wrap your-name">
                                    <input type="text" name="your-name" value="" size="40" class="form-control text validates-as-required" />
                                  </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                              <div>Your Email (required)<br />
                                  <p class="form-control-wrap your-email">
                                    <input type="email" name="your-email" value="" size="40" class="form-control text email validates-as-required validates-as-email" />
                                  </p>
                                </div>
                            </div>
                            <div class="col-sm-12">
                              <div>Your Message<br />
                                  <p class="form-control-wrap your-message">	<textarea name="your-message" cols="40" rows	="10" class="form-control textarea"></textarea>
                                  </p>
                                </div>
                            </div>
                          </div>
                          <input type="submit" value="Send" class="form-control submit" />
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="row contact-info" style="margin-top: 10%;">
                      <div class="col-sm-12">
                        <div class="title">
                          <h4>NEED SUPPORT</h4>
                        </div>
                        <div class="separator content_element separator_align_center sep_width_100 sep_pos_align_center separator_no_text">
                          <span class="sep_holder sep_holder_l">
                            <span class="sep_line"></span>
                          </span>
                          <span class="sep_holder sep_holder_r">
                            <span class="sep_line"></span>
                          </span>
                        </div>
                        <div class="content_element">
                          <div class="support-icon">
                            <i class="fa fa-map-marker"></i>
                            King St, Huddersfield HD1 2QB, United Kingdom
                          </div>
                          <div class="support-icon">
                            <i class="fa fa-phone"></i>
                            1234 567
                          </div>
                          <div class="support-icon">
                            <i class="fa fa-envelope-o"></i>
                            <a href="mailto:frostfree.demo@gmail.com">
                              frostfree.demo@gmail.com
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection


