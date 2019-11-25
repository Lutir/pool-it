<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PoolIt - Lets save some Fuel & Money!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700|Anton" rel="stylesheet">
    

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
      .option{
        background: #FFD707;
        color: white;
        padding: 10px 35px;
      }
    </style>
  </head>
  
  <body data-spy="scroll" data-target=".site-navbar-target"  data-offset="300">
    
    <div class="container" >
        <div class="row text-center">
            <div class="col-md-6 offset-md-3">
                <img src="{{ asset('images/logo.png') }}" class="img-fluid rounded-top" width="100px" alt="">
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-4 offset-md-4 text-center">
              <h2 class=" text-black m4">Registration</h2>
              <hr>
          </div>
          <div class="col-md-6 offset-md-3">
            <h5>How it works?</h5>
            <ul>
              <li>Step by step application goes here,</li>
              <li>Step by step application goes here,</li>
              <li>Step by step application goes here,</li>
              <li>Step by step application goes here,</li>
              <li>Step by step application goes here,</li>
            </ul>
          </div> 
        </div>
        {{ Form::open(array('url' => 'authenticate')) }}
        {{ Form::token() }}
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <small id="helpId" class="text-muted">Name</small>
                        <input type="text" name="name" id="" class="form-control" placeholder="Enter Full Name" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <small id="helpId" class="text-muted">SAP Number</small>
                        <input type="text" name="sap" id="" class="form-control" placeholder="Enter SAP Number" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <small id="helpId" class="text-muted">Email Id:</small>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email Id" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <small id="helpId" class="text-muted">Mobile Number:</small>
                        <input type="tel" name="mobile" class="form-control" placeholder="Enter Mobile Number" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                      <small id="helpId" class="text-muted">Year</small>
                      <input type="text" name="year" id="" class="form-control" placeholder="Enter college year" aria-describedby="helpId">
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                      <small id="helpId" class="text-muted">Class and Division</small>
                      <input type="text" name="class" id="" class="form-control" placeholder="Enter class and division" aria-describedby="helpId">
                  </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <small id="helpId" class="text-muted">Referred by</small>
                    <input type="text" name="referId" id="" class="form-control" placeholder="Enter volunteer id" aria-describedby="helpId">
                </div>
            </div>
                <!-- <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Building Name/ House Number:</label>
                      <textarea class="form-control" name="address" id="" rows="3"></textarea>
                    </div>
                </div> -->
                <div class="col-md-12">
                    <div class="form-group">
                        <small id="helpId" class="text-muted">Building Name/ House Number:</small>
                        <input type="text" name="buildingName" id="" class="form-control" placeholder="Enter Building Name/ House Number" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                      <small id="helpId" class="text-muted">Address Line 1:</small>
                      <input type="text" name="addressLane1" id="" class="form-control" placeholder="Enter Address Line 1" aria-describedby="helpId">
                  </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                    <small id="helpId" class="text-muted">Address Line 2:</small>
                    <input type="text" name="addressLane2" id="" class="form-control" placeholder="Enter Address Line 2" aria-describedby="helpId">
                </div>
            </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <small id="helpId" class="text-muted">Locality</small>
                      <input type="text" name="locality" id="" class="form-control" placeholder="Enter Locality" aria-describedby="helpId">
                  </div>
              </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <small id="helpId" class="text-muted">Pin Code</small>
                        <input type="text" name="pincode" id="" class="form-control" placeholder="Enter pincode" aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
          </div>  
        </div>
        {{ Form::close() }}
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-8">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>We are a bunch of students from Mithibai college who are here to provide a cost & fuel effective solution to our daily transportation needs!</p>
              </div>
              <div class="col-md-4 ml-auto">
                <h2 class="footer-heading mb-4">Features</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <!-- <li><a href="#">Testimonials</a></li> -->
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4 ml-auto">

            <div class="mb-5">
               
              <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>
              <form action="#" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe</button>
                  </div>
                </div>
              </div>


              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </form>
          </div>
        </div>
      </div>
    </footer>

  </div>

  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>

  <script src="{{ asset('js/main.js') }}"></script>
    
  </body>
</html>
