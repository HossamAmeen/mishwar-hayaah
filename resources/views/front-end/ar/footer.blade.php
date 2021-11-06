
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
            <li class="lh-lg"><a class="text-200 text-decoration-none" href="{{url('news')}}"
                style="color: rgb(71, 71, 71) !important;"> الاخبار والانشطة</a></li>
            <li class="lh-lg"><a class="text-200 text-decoration-none" href="{{url('/')}}#photos"
                style="color: rgb(71, 71, 71) !important;">الصور والفاعليات</a></li>
            <li class="lh-lg"><a class="text-200 text-decoration-none" href="{{url('contact-us')}}"
                style="color: rgb(71, 71, 71) !important;">تواصل معنا</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-5 col-xl-6 col-md-12 col-sm-12 col-xs-12  ">
          <h5 class="lh-lg fw-bold text-black">من نحن</h5>
          <ul class="list-unstyled mb-md-4 mb-lg-0">
            <li class="lh-md pl-5 pr-5 mb-5">
              <p class="text-100 text-decoration-none" style="color: rgb(71, 71, 71) !important;">{{$briefs->description}}</p>
            </li>
          </ul>
        </div>

        <div class="col-6 col-md-6 col-xl-6 col-md-12 col-sm-12 col-xs-12   mb-3">
          <h5 class="lh-lg fw-bold text-black">فروعنا</h5>
          <ul class="list-unstyled mb-md-4 mb-lg-0">
            <li class="lh-md pl-5 pr-5">
              <p class="text-100 text-decoration-none" style="color: rgb(71, 71, 71) !important;">{{$briefs->address}}</p>
            </li>
           

          </ul>
        </div>
        <div class="col-6 col-md-6 col-xl-6 col-md-12 col-sm-12 col-xs-12  ">
          <h5 class="lh-lg fw-bold text-black">تواصل معنا</h5>
          <ul class="list-unstyled mb-md-4 mb-lg-0">
            <!-- put phone in href also -->
            <li class="lh-md pl-5 pr-5">
              <p class="text-100 text-decoration-none" style="color: rgb(71, 71, 71) !important;"><a
                  style="color: rgb(71, 71, 71) !important;" href="tel://{{$briefs->phone}}">{{$briefs->phone}}</a></p>
            </li>

            <!-- put email in href also -->
            <li class="lh-md pl-5 pr-5">
              <p class="text-100 text-decoration-none" style="color: rgb(71, 71, 71) !important;"><a
                  style="color: rgb(71, 71, 71) !important;" href="email://{{$briefs->email}}">{{$briefs->email}}</a></p>
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