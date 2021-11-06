<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>مشوار حياة</title>

  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/gallery/icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/gallery/icon.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/img/gallery/icon.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/gallery/icon.png')}}">
  <link rel="manifest" href="{{asset('assets/img/favicons/manifest.json')}}">
  <meta name="msapplication-TileImage" content="{{asset('assets/img/favicons/mstile-150x150.png')}}">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="{{asset('assets/css/bootstrap-rtl.min.css')}}">
  <link href="{{asset('assets/css/theme.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />


</head>

  <body>

    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-1 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="bg-holder" style="background-color:#698c67;min-height:100%">
        </div>
        <div class="container"><a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/img/gallery/logo.png')}}" height="85" width="70" alt="..." /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link fw-medium active" href="{{url('/')}}">الرئيسية</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{url('about-us')}}">عن الجمعية</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{url('news')}}">الاخبار والانشطة</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{url('/')}}#photos">الصور والفاعليات</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="{{url('/')}}#support">شركاءنا</a></li>
            </ul>
            <form class="ps-lg-5">
              <a class="btn btn-light order-1 order-lg-0 contact-us-btn" href="{{url('contact-us')}}">تواصل معنا </a>
            </form>
          </div>
        </div>
      </nav>




      
      <section class="pt-8  " >
        <!-- header-->
        <header class="masthead" style="margin-top: 100px;">
          <div class="container pt-3 pb-3">
              <!-- <div class="col-md-12 mb-3"> -->
                <h4 class="form-p mb-4">نحن سعداء بالتواصل معنا وتقديم مقترحاتكم وتبرعاتكم.</h4>
                @if (session()->get('action') )
                <div class="alert alert-success">
                    <strong>{{session()->get('action')}}</strong>
                </div>
            @endif
              <!-- </div> -->
              <div class="row align-items-center pt-4">
                  <div class="col-md-6">
                      <div id="liveAlertPlaceholder"></div>
                      <form class="row g-3 needs-validation" action="{{url('contact-us')}}" method="POST" novalidate>
                        @csrf  
                        <div class="col-md-5">
                            <label for="nameValidation" class="form-label">الأسم</label>
                            <input type="text" class="form-control" id="nameValidation" name="name" required>
                            <div class="invalid-feedback">
                              الاسم مطلوب.
                            </div>
                          </div>
                          <div class="col-md-5">
                              <label for="phoneValidation" class="form-label">رقم المحمول</label>
                              <input type="text" class="form-control" type="number" id="phoneValidation" name="phone" required>
                              <div class="invalid-feedback">
                                رقم المحمول مطلوب.
                              </div>
                          </div>
                          <div class="col-md-10">
                            <label for="emailValidation" class="form-label">البريد الالكتروني</label>
                            <div class="input-group has-validation">
                              <input type="email" class="form-control" name="email" id="emailValidation" aria-describedby="inputGroupPrepend" required>
                              <div class="invalid-feedback">
                                البريد الاكتروني مطلوب.
                              </div>
                            </div>
                          </div>
                          <div class="col-md-10">
                              <label for="messageValidation" class="form-label">اكتب ما تريد ...</label>
                              <div class="input-group has-validation">
                                <textarea type="text" class="form-control" name="message" rows="4" id="messageValidation" aria-describedby="inputGroupPrepend" required></textarea>
                                <div class="invalid-feedback">
                                  محتوى الرسالة مطلوب.
                                </div>
                              </div>
                          </div>                        
                          <div class="col-md-10">
                            <button class="btn btn-primary mt-4" type="submit">ارسل</button>
                          </div>
                      </form>
                  </div>
                  <div class="col-md-6">
                      <img style="width: 100%;" src="{{url('assets/img/gallery/volunteer.png')}}">
                  </div>
              </div>
          </div>
      </header>
      </section>


  <!-- footer -->
  @include('front-end.ar.footer')
    </main>



    <script src="./vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap" rel="stylesheet">

    <script>
      (function () {
          'use strict'

          // alert
          var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
          function showAlert(message, type) {
              var wrapper = document.createElement('div')
              wrapper.innerHTML = '<div class="alert alert-' 
              + type + ' alert-dismissible" role="alert">' 
              + message +
               '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

              alertPlaceholder.append(wrapper)
          }


          // form validation
          var forms = document.querySelectorAll('.needs-validation')
          Array.prototype.slice.call(forms)
              .forEach(function (form) {
              form.addEventListener('submit', function (event) {
                  if (!form.checkValidity()) {
                      event.preventDefault()
                      event.stopPropagation()
                  }
                  else{
                      // show success alert
                      showAlert('تم ارسال رسالتك بنجاح, شكرا لك!', 'success');

                      // show error alert
                      // showAlert('حدث خطأ ما, حاول التواصل معنا لاحقا!', 'danger')
                  }
                  form.classList.add('was-validated')
              }, false)
              })
          })()

  </script>

  </body>

</html>