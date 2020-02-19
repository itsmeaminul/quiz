<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Quiz Contest 2020</title>
    <!-- plugins:css -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.html" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <!-- body start -->
  <body class="">
    <!-- Header starts from here -->
    <div class="row">
      <div class="col-sm d-flex justify-content-right ml-5 mt-2">
        <a href="{{URL::to('/home')}}"><img src="/images/welcome.png" class="ml-5 pl-5"></a>
      </div>
      <div class="col-sm d-flex justify-content-end mr-5 pr-5">
        <div class="d-flex align-items-center">
          <ul class="">
            <li class="btn btn-info btn-md mt-5">{{ \Carbon\Carbon::now()->format( 'l' )}}</li>
            <li class="btn btn-info btn-md enter-btn mt-5">Date: {{ \Carbon\Carbon::now()->format('d/m/Y')}}
              
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Header ends here -->
    <!-- nav bar starts here  -->
    <div class="container sticky-top mb-2 ml-5 mt-2 pl-5">
      <nav class="navbar navbar-expand-lg font-weight-light bg-white ml-3 text-info font-italic">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link navbar-brand" href="{{URL::to('/')}}">
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-brand" href="{{URL::to('/winner')}}">
              <span class="menu-title">Winner</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-brand" href="{{URL::to('/contact')}}">
              <span class="menu-title">Contact</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link navbar-brand" href="{{URL::to('/about')}}">
              <span class="menu-title">About</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- navbar ends here  -->
    <!-- conteiner starts here -->
    @yield('content')
    <!-- conteiner endss here -->
    
    <!-- topfooter starts from here -->
    <div class="footer_area fix bg-light mr-5 ml-5 pt-3">
      <div class="container stracture ">
        <div class="row">
          <div class="col-md-4">
            <div class="single_footer floatleft text-justify font-italic">
              <h2>About us</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <img src="img/footer_button.png" alt="" />
            </div>
          </div>
          <div class="col-md-4 pl-5">
            <div class="single_footer float-left font-italic">
              <h2>Menu Bar</h2>
              
              <div class="footer_post_list font-italic">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link navbar-brand" href="{{URL::to('/')}}">
                      <span class="menu-title">Home</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link navbar-brand" href="{{URL::to('/winner')}}">
                      <span class="menu-title">Winner</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link navbar-brand" href="{{URL::to('/contact')}}">
                      <span class="menu-title">Contact</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link navbar-brand" href="{{URL::to('/about')}}">
                      <span class="menu-title">About</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="single_footer floatleft stracture ">
              <h2 class="font-italic">Follow Us</h2>
              <p class=""><em>You can find or follow us on:</em></p>
              
              <div class="social_bookmark floatright h2">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter-square"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-pinterest-p"></i></a>
                <a href=""><i class="fab fa-vimeo-square"></i></a>
                <a href=""><i class="fab fa-linkedin"></i></a>
                <a href=""><i class="fab fa-skype"></i></a>
                <a href=""><i class="fab fa-android"></i></a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- topfooter ends here -->
    <!-- footer starts from here -->
    <div class="newfooter mb-1 bg-info mt-3 mr-5 ml-5 pt-3 pb-2">
      <footer>
        <span class="">
          <p class="text-center font-weight-bold text-white">Copyright © Online Quiz Contest 2020.</p>
        </span>
      </footer>
    </div>
    <!-- footer ends here -->
  </body>
</html>