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




    <section class="pt-7 pb-6" style="background-color: #698c67; max-height:300px;margin-bottom: 100px;">

      <div class="container" style="padding: 100px 0px 0px;">
        <div class="row">

          <!-- article header and date -->
          <div class="col-sm-12 col-xl-6 mb-3 mt-4">
            <h2 style="color:white;justify-content: right;"> {{$new->title}} </h2>
            <p class="text-muted">{{$new->date}}</p>
          </div>

          <!-- article image -->
          <div class="col-sm-12 col-xl-6 mb-3 mt-4">
            <div style="display:flex;justify-content: left; margin-bottom: 80px;margin-top: -50px;">
              <img src="{{asset($new->image)}}" width="400px">
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="container mt-1 pt-6">

      <div class="row">

        <div class="col-sm-12 col-xl-9 mb-3 mt-4">
          <div class="text-rigth">
           {!! $new->description!!}
          </div>
        </div>

        <!-- another articles -->

        <div class="col-sm-12 col-xl-3">
          <h4>مزيد من الاخبار</h4>
          <br>

          @foreach($news as $new)
          <div class="card card-span shadow py-2 border-top border-4 border-primary mb-4">
            <div class="card-body">
              <div class="text-center"><img src="{{asset($new->image)}}" width="200" alt="..." />
                <h5 class="my-3">{{$new->title}}</h5>
                <p class="text-muted">
                  {{ strip_tags($new->description) }}
                </p>
              </div>
              <div class="text-start ml-1">
                <a class="btn btn-light" style="font-size: 12px;font-weight: 100;" href="{{url('news/'.$new->id)}}" role="button">قراءة</a>
              </div>
            </div>
          </div>
          @endforeach
         
        </div>


      </div>
    </div>


 <!-- footer -->
 <section class="py-0 py-xxl-6" id="footer">
  <!-- backgground -->
  <div class="bg-holder"
    style="min-height: 102%!important;background-image:url({{asset('assets/img/gallery/footer.png')}});background-position:initial;background-size:cover;">
  </div>

  <div class="container">
    <div class="row min-vh-75 text-center min-vh-xl-50 pt-10">
      <div class="col-6 col-md-6 col-xl-6 col-md-12 col-sm-12 col-xs-12  ">
        <h5 class="lh-lg fw-bold text-black">اهم الروابط</h5>
        <ul class="list-unstyled mb-md-4 mb-lg-0">
          <li class="lh-lg"><a class="text-200 text-decoration-none" href="news.html"
              style="color: rgb(71, 71, 71) !important;"> الاخبار والانشطة</a></li>
          <li class="lh-lg"><a class="text-200 text-decoration-none" href="index.html#photos"
              style="color: rgb(71, 71, 71) !important;">الصور والفاعليات</a></li>
          <li class="lh-lg"><a class="text-200 text-decoration-none" href="contact-us.html"
              style="color: rgb(71, 71, 71) !important;">تواصل معنا</a></li>
        </ul>
      </div>
      <div class="col-6 col-md-5 col-xl-6 col-md-12 col-sm-12 col-xs-12  ">
        <h5 class="lh-lg fw-bold text-black">من نحن</h5>
        <ul class="list-unstyled mb-md-4 mb-lg-0">
          <li class="lh-md pl-5 pr-5 mb-5">
            <p class="text-100 text-decoration-none" style="color: rgb(71, 71, 71) !important;">خسائر اللازمة
              ومطالبة حدة بل. الآخر الحلفاء أن غزو, إجلاء وتنامت عدد مع. لقهر معركة لبلجيكا، بـ انه, ربع الأثنان
              المقيتة في, اقتصّت المحور حدة و. هذه ما طرفاً عالمية استسلام, الصين وتنامت حين ٣٠, ونتج والحزب المذابح
              كل جوي. أسر كارثة المشتّتون بل, وبعض وبداية الصفحة غزو قد, أي بحث تعداد الجنوب</p>
          </li>
        </ul>
      </div>

      <div class="col-6 col-md-6 col-xl-6 col-md-12 col-sm-12 col-xs-12   mb-3">
        <h5 class="lh-lg fw-bold text-black">فروعنا</h5>
        <ul class="list-unstyled mb-md-4 mb-lg-0">
          <li class="lh-md pl-5 pr-5">
            <p class="text-100 text-decoration-none" style="color: rgb(71, 71, 71) !important;">اسيوط - شارع
              الجمهورية</p>
          </li>
          <li class="lh-md pl-5 pr-5">
            <p class="text-100 text-decoration-none" style="color: rgb(71, 71, 71) !important;">المنيا - شارع
              الجمهورية</p>
          </li>
          <li class="lh-md pl-5 pr-5">
            <p class="text-100 text-decoration-none" style="color: rgb(71, 71, 71) !important;">القاهرة - شارع
              الجمهورية</p>
          </li>

        </ul>
      </div>
      <div class="col-6 col-md-6 col-xl-6 col-md-12 col-sm-12 col-xs-12  ">
        <h5 class="lh-lg fw-bold text-black">تواصل معنا</h5>
        <ul class="list-unstyled mb-md-4 mb-lg-0">
          <!-- put phone in href also -->
          <li class="lh-md pl-5 pr-5">
            <p class="text-100 text-decoration-none" style="color: rgb(71, 71, 71) !important;"><a
                style="color: rgb(71, 71, 71) !important;" href="tel://010">010</a></p>
          </li>

          <!-- put email in href also -->
          <li class="lh-md pl-5 pr-5">
            <p class="text-100 text-decoration-none" style="color: rgb(71, 71, 71) !important;"><a
                style="color: rgb(71, 71, 71) !important;" href="email://asd@ads.com">asd@asd.com</a></p>
          </li>
        </ul>
      </div>
    </div>
    <hr style="background-color: rgb(0, 0, 0);" />
    <div class="row flex-center pb-3">
      <div class="col-md-12">
        <p class="text-200 text-center" style="color:black !important"> <a class="text-200 fw-bold"
            style="color:black !important" href="https://fb.com/AxesDigitalAgency" target="_blank">AXES Digital
            Agency<img class="mr-3" src="{{asset('assets/img/gallery/axesLogo.png')}}" width="40px"> </a>
        </p>
      </div>
    </div>
  </div>
</section>
</main>



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