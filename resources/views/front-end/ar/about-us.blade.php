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


      
      <section class="pt-7"  style="background-color: #698c67">       
        <div style="padding: 100px 0px; padding-bottom: 200px">
          <h2 style="color:white;display: flex;justify-content: center;">مشوار حياة ... من نحن؟</h2>
        </div>
        
        <div style="display: flex;justify-content: center;margin-top: -150px; margin-bottom: 80px;">
          <img src="{{asset('assets/img/gallery/about-us-img.jpg')}}" width="500px">
        </div>

      <div class="container pb-2 mt-5">
        <div class="row align-items-start text-center">
          <div class="col-md-4">
            <div style="background-color:rgb(255, 255, 255);padding: 20px;border-radius: 5px;min-height: 230px;max-height: 230px;">
              <h4 class="mb-4">من نحن</h4>
              <p class="hidden-paragraph" title="جمعية مشوار حياة المشهرة برقم 1844 لسنة 2021.
              مؤسسة ذات وظائف متعددة، ولديها العديد من الأهداف الاجتماعية والثقافية المتنوعة والتي تساعد في تنمية المجتمع.">
                جمعية مشوار حياة المشهرة برقم 1844 لسنة 2021.
مؤسسة ذات وظائف متعددة، ولديها العديد من الأهداف الاجتماعية والثقافية المتنوعة والتي تساعد في تنمية المجتمع.
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div style="background-color:rgb(255, 255, 255);padding: 20px;border-radius: 5px;min-height: 230px;max-height: 230px;">
              <h4 class="mb-4">هدفنا ومهمتنا </h4>
              <p class="hidden-paragraph" title="ايصال المساعدات لمن يستحق ومساعدتهم في تحقيق مستوى معيشي أفضل يساعد في رفع الحالة الاجتماعية داخل المحافظة.">
                ايصال المساعدات لمن يستحق ومساعدتهم في تحقيق مستوى معيشي أفضل يساعد في رفع الحالة الاجتماعية داخل المحافظة.
              </p>
            </div>
          </div>

          <div class="col-md-4">
            <div style="background-color:rgb(255, 255, 255);padding: 20px;border-radius: 5px;min-height: 230px;max-height: 230px;">
              <h4 class="mb-4">انضم لنا</h4>
              <p class="hidden-paragraph" title="انضم الي جمعية مشوار حياة 
              وساهم معنا في مجال الخدمات الاجتماعية والثقافية وساعدنا في تحقيق مستوى معيشي أفضل لمن يستحق.">
                انضم الي جمعية مشوار حياة 
وساهم معنا في مجال الخدمات الاجتماعية والثقافية وساعدنا في تحقيق مستوى معيشي أفضل لمن يستحق.
              </p>
            </div>
          </div>
        </div>
      </section>


      <section class="container">
        <div class="card card-span bg-primary h-100 shadow" style="background-color: #ffaa74 !important;">
          <div class="card-body p-4">
            <div class="row">
              <div class="col-lg-6 col-xxl-5 text-center mx-auto mb-2">
                <h2 class="mb-3">انضم الي جمعية مشوار حياة</h2>
                <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                  أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                  أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس
                  أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت
                </p>
              </div>
            </div>
            <div class="text-center">
              <a class="btn btn-light" href="{{url('contact-us')}}" role="button">انضم الينا</a>
            </div>                      
          </div>
        </div>
      </section>


 <!-- footer -->
 @include('front-end.ar.footer')
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