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
    @include('front-end.ar.nav')
    <section id="home">
      <div class="bg-holder"
        style="background-image:url({{asset('assets/img/gallery/header.png')}});background-position:bottom;background-size:cover;">
      </div>

      <div class="container intro">
        <div class="row align-items-center min-vh-50 min-vh-sm-60">
          <div class="col-md-5 col-lg-6 order-0 order-md-1 intro-image"><img class="intro-image-image"
              style="width: 400px;margin: auto;display: block;" src="{{asset('assets/img/gallery/intro-img.png')}}"
              alt="..." /></div>
          <div class="col-md-7 col-lg-6 text-md-end text-center">
            <h1 class="text-light fs-md-5 fs-lg-6">مشوار حياة</h1>
            <p class="text-light">ترتكز جمعية مشوار حياة في أسيوط على محور أساسي وهو تركيز جهود الأفراد والجماعات لإحداث التنمية في المجتمع وحل مشكلاتهم والإسهام في مؤازرة جهود الدولة فى تلبية الاحتياجات الإنسانية والاجتماعية والاقتصادية داخل المحافظة.</p>
            <a class="btn btn-primary intro-btn" href="{{url('contact-us')}}" role="button">تواصل معنا</a>
          </div>
        </div>
      </div>
    </section>


    <section class="pt-8">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xxl-5 text-center mx-auto">
            <h2>مشوار حياة</h2>
            <p class="mb-4">مشوار حياة .. مشوار الخير والعطاء</p>
          </div>
        </div>
        <div class="row align-items-center mt-5">
          <div class="col-md-5 col-lg-6 order-md-1 order-0"><img class="w-100"
              src="{{asset('assets/img/gallery/leftImg.png')}}" alt="" /></div>
          <div class="col-md-7 col-lg-6 pe-lg-4 pe-xl-7">
            <div class="d-flex align-items-start"><img class="me-4" src="{{asset('assets/img/icons/check.png')}}" alt=""
                width="30" />
              <div class="flex-1 mr-3">
                <h5>نسعى لتنمية المجتمع</h5>
                <p class="text-muted mb-4">عن طريق تقديم الخدمات الثقافية والتعليمية والدينية والاقتصادية	 وتقديم المساعدات الإنسانية لذوي الحاجة داخل المحافظة للارتقاء بهم بإكسابهم المهارات التي يحتاجونها للارتقاء بالمجتمع.</p>
              </div>
            </div>
            <div class="d-flex align-items-start"><img class="me-4" src="{{asset('assets/img/icons/check.png')}}" alt=""
                width="30" />
              <div class="flex-1 mr-3">
                <h5>ننشر روح المساعدة</h5>
                <p class="text-muted mb-4">عن طريق المساهمة في المجالات المختلفة مثل : 
                  مكافحة الأمية، خلق فرص العمل من خلال تشجيع ومساندة المشروعات الصغيرة وأنشطة التشغيل الذاتي وأنشطة رعاية الأسرة والأمومة والطفولة وذوي الاحتياجات الخاصة.</p>
              </div>
            </div>
            <div class="d-flex align-items-start"><img class="me-4" src="{{asset('assets/img/icons/check.png')}}" alt=""
                width="30" />
              <div class="flex-1 mr-3">
                <h5>لبناء امه جديدة</h5>
                <p class="text-muted mb-4">عن طريق إبراز أهمية العمل الخيري والتطوعي في تنشئة جيل جديد قادر على النهوض بمجتمعه وإعلاء قيم الخير والتكافل والتماسك الاجتماعي.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>





    <section class="pt-6" id="articles">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xxl-5 text-center mx-auto mb-5">
            <h2> الاخبار والانشطة</h2>
          </div>
        </div>
        <div class="row h-100">


          @foreach($news as $new)
          <div class="col-sm-6 col-xl-3 mb-3 mt-4">
            <div class="card card-span shadow py-2 h-100 border-top border-4 border-primary">
              <div class="card-body">
                <div class="text-center"><img src="{{asset($new->image)}}" width="200" alt="..." />
                  <h5 class="my-3">{{$new->title}}</h5>
                  <p class="hidden-paragraph text-muted">
                    {{-- {{$new->description}} --}}
                    {{ strip_tags($new->description) }}
                  </p>
                </div>
                <div class="text-start ml-1">
                  <a class="btn btn-light" style="font-size: 12px;font-weight: 100;" href="{{url('news/'.$new->id)}}"
                    role="button">قراءة</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach


        </div>
      </div>
    </section>





    <section class="pt-8 bg-soft-primary "
      style="background-color:#f5f5f5!important;background-image: url({{asset('assets/img/gallery/bg-image.png')}});background-position: top;background-repeat: no-repeat;background-size: contain;">
      <div class="container">
        <div class="row h-100">
          <div class="col-md-12 mb-5 mb-md-0 h-100" style="margin-top: 200px;">
            <div class="card card-span bg-primary h-100 shadow" style="background-color: #ffaa74 !important;">
              <div class="card-body p-4">
                <div class="row">
                  <div class="col-lg-6 col-xxl-5 text-center mx-auto mb-2">
                    <h2 class="mb-3">انضم الي جمعية مشوار حياة</h2>
                    <p>وساهم معنا في مجال الخدمات الاجتماعية والثقافية وساعدنا في تحقيق مستوى معيشي أفضل لمن يستحق.</p>
                  </div>
                </div>
                <div class="text-center">
                  <a class="btn btn-light" href="{{url('contact-us')}}" role="button">انضم الينا</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <section class="py-2" id="photos">
      <!-- background div -->
      <div class="bg-holder"
        style="margin-top:-35px;background-color: #f5f6fd;background-image:url({{asset('assets/img/gallery/testimonial-bg.png')}});background-position: revert;background-size: cover;">
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xxl-5 text-center mx-auto mb-5">
            <h2>معرض الصور</h2>
          </div>
        </div>
        <div class="carousel slide" id="carouselExampleDark" data-bs-ride="carousel">
          <div class="carousel-inner">

            <!-- carousel item 1  -->
            <!-- first only must has `active` class -->
            @php
            $counter = 0 ;
            @endphp

        
              @foreach($galleries as $gallery)  
              <div class="carousel-item @if ($loop->first) active @endif" data-bs-interval="10000">
                <div class="row h-100">

                 
                  @foreach($gallery as $gallerys) 
                  <!-- card {{$gallerys->id}}   -->
                    <div class="col-lg-3 mb-3 mb-md-0">
                                    {{-- @php $count++ ; @endphp --}}
                      <div class="card card-span h-100 bg-transparent">
                        <div class="card-body my-2">
                          <div class="text-center"><img class="img-fluid " src="{{asset($gallerys->image)}}"
                              height="100" alt="..." />
                            <div class="flex-1 ps-2">
                              <p class="my-3">{{$gallerys->description }} </p>
                              <h6 class="text-muted">{{$gallerys->date}}</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
                  @endforeach
          
             
          </div>

          <!-- left arrow -->
          <a class="carousel-control-prev carousel-icon z-index-2" href="#carouselExampleDark" role="button"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" style="" aria-hidden="true">
            </span><span class="visually-hidden">Previous</span>
          </a>

          <!-- right arrow -->
          <a class="carousel-control-next carousel-icon z-index-2" href="#carouselExampleDark" role="button"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true">
            </span><span class="visually-hidden">Next</span>
          </a>

          <!-- points div -->
          <div class="row px-3 px-md-0 mt-4">
            <div class="col-12 position-relative">
              <ol class="carousel-indicators">

                <!-- point for every carousel item -->
                <!-- first only must has `active` class -->
                <li   class="active"  data-bs-target="#carouselExampleDark" data-bs-slide-to="0"></li>
                @for($i=1 ;$i<= count($galleries)-1 ;$i++) 
                  <li data-bs-target="#carouselExampleDark" data-bs-slide-to="{{$i}}"></li>
                @endfor
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="pb-lg-0 pt-md-8 py-0" id="support">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xl-5 text-center mx-auto mb-2">
            <h2>شركائنا</h2>
          </div>
        </div>
        <div class="row align-items-center justify-content-between py-5 border-klean our-partner">

          @foreach($partners as $partner)
          <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img class="partner-img"
              src="{{asset($partner->image)}}" height="50" alt="..." /></div>
          @endforeach
        </div>
      </div>
    </section>


      <!-- footer -->
      @include('front-end.ar.footer')
  </main>
  {{--          briefs --}}


  <script src="{{asset('vendors/@popperjs/popper.min.js')}}"></script>
  <script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('vendors/is/is.min.js')}}"></script>
  <script src="{{asset('https://polyfill.io/v3/polyfill.min.js')}}?features=window.scroll"></script>
  <script src="{{asset('vendors/fontawesome/all.min.js')}}"></script>
  <script src="{{asset('assets/js/theme.js')}}"></script>

  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&amp;display=swap"
    rel="stylesheet">
</body>

</html>