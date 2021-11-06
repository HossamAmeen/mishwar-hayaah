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



      
      <section class="pt-7 pb-6"  style="background-color: #698c67">       
        <div style="padding: 100px 0px 0px;">
          <h2 style="color:white;display: flex;justify-content: center;">الاخبار والانشطة</h2>
        </div>
      </section>


      <section class="container mt-1 pt-6">
        <div class="row h-80">

            
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
                  <a class="btn btn-light" style="font-size: 12px;font-weight: 100;" href="{{url('news/'.$new->id)}}" role="button">قراءة</a>
                </div> 
              </div>
            </div>
          </div>
          @endforeach
      
          {{ $news->links() }}
          
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