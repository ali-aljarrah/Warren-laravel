@include('include.head')
    <title>Smile Gallery Warren MI | Before & After Photos of Patients</title>
    <meta name="description" content="Take a look at our smile gallery to see how we have improved the smiles of some of our valued patients. ☎️ 586-756-6351">
    <link rel="canonical" href="https://www.warrenlaserdentistry.com/meet-us/smile-gallery">
    <meta property="og:title" content="Smile Gallery Warren MI | Before & After Photos of Patients">
    <meta property="og:description" content="Take a look at our smile gallery to see how we have improved the smiles of some of our valued patients. ☎️ 586-756-6351">
    <link rel="stylesheet" href="{{asset('/assets/css/lightbox.min.css')}}">
    <style>
        .lb-data .lb-close {
            background: url(/assets/imgs/close.png);
        }
        .lb-nav a.lb-prev {
            background: url(/assets/imgs/prev.png);
        }

        .lb-nav a.lb-next {
            background: url(/assets/imgs/next.png);
        }
    </style>
  </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="page-bg-image shadow-bg-layer" style="background-image: url(/assets/imgs/smile-gallery/banner.webp)">
      <div class="block-padding">
            <div class="container-fluid">
               <div class="row">
               <div class="col-lg-8 mx-auto text-center">
                  <div class="mx-auto">
                      <a href="{{route('dental-services')}}" class="text-decoration-none bg-green-card rounded-3 p-2 d-flex justify-content-center align-items-center w-fit mx-auto">
                          <span class="me-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M3.99994 10L3.29294 10.707L2.58594 10L3.29294 9.293L3.99994 10ZM20.9999 18C20.9999 18.2652 20.8946 18.5196 20.707 18.7071C20.5195 18.8946 20.2652 19 19.9999 19C19.7347 19 19.4804 18.8946 19.2928 18.7071C19.1053 18.5196 18.9999 18.2652 18.9999 18H20.9999ZM8.29294 15.707L3.29294 10.707L4.70694 9.293L9.70694 14.293L8.29294 15.707ZM3.29294 9.293L8.29294 4.293L9.70694 5.707L4.70694 10.707L3.29294 9.293ZM3.99994 9H13.9999V11H3.99994V9ZM20.9999 16V18H18.9999V16H20.9999ZM13.9999 9C15.8565 9 17.6369 9.7375 18.9497 11.0503C20.2624 12.363 20.9999 14.1435 20.9999 16H18.9999C18.9999 14.6739 18.4732 13.4021 17.5355 12.4645C16.5978 11.5268 15.326 11 13.9999 11V9Z" fill="black"/>
                              </svg>
                          </span>
                          <span class="fs-16 fw-bold me-3 black-color">
                            back to Dental Services
                          </span>
                      </a>
                  </div>
                  <h1 class="white-color-1 py-4 fs-40 fw-bold d-flex justify-content-center align-items-center">
                    Smile Gallery - Warren, MI
                  </h1>
                  <p class="white-color fs-16">
                    Our smile gallery features before-and-after photos illustrating the transformative impact of our dental treatments, reflecting our commitment to excellence and patient satisfaction.
                  </p>
               </div>
              </div>
            </div>
          </div>
  </section>

    <section class="py-5">
      <div class="container-fluid block-padding">
        <div class="row justify-content-center align-items-center py-3">
            <div class="col-lg-2">
              <a class="example-image-link" href="{{asset('/assets/imgs/smile-gallery/image13.webp')}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
            <img class="img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="{{asset('/assets/imgs/smile-gallery/image13.webp')}}" alt="WARREN - Experience the difference of truly personal care!">
            </a>
          </div>
          <div class="col-lg-2">
            <a class="example-image-link" href="{{asset('/assets/imgs/smile-gallery/image14.webp')}}" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
            <img class="img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="{{asset('/assets/imgs/smile-gallery/image14.webp')}}" alt="WARREN - Experience the difference of truly personal care!">
            </a>
          </div>
          <div class="col-lg-2">
            <a class="example-image-link" href="http://warren-laravel.test:81/assets/imgs/smile-gallery/image15.webp" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img class="img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="/assets/imgs/smile-gallery/image15.webp" alt="WARREN - Experience the difference of truly personal care!">
            </a>
          </div>
          <div class="col-lg-2">
            <a class="example-image-link" href="http://warren-laravel.test:81/assets/imgs/smile-gallery/image16.webp" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
               <img class="img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="/assets/imgs/smile-gallery/image16.webp" alt="WARREN - Experience the difference of truly personal care!">
            </a>
          </div>
          <div class="col-lg-2">
            <a class="example-image-link" href="http://warren-laravel.test:81/assets/imgs/smile-gallery/image17.webp" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img class="img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="/assets/imgs/smile-gallery/image17.webp" alt="WARREN - Experience the difference of truly personal care!">
            </a>
          </div>
        </div>

        <div class="row justify-content-center align-items-center py-3">
          <div class="col-lg-2">
            <a class="example-image-link" href="http://warren-laravel.test:81/assets/imgs/smile-gallery/image18.webp" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img class="img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="/assets/imgs/smile-gallery/image18.webp" alt="WARREN - Experience the difference of truly personal care!">
            </a>
          </div>
          <div class="col-lg-2">
            <a class="example-image-link" href="http://warren-laravel.test:81/assets/imgs/smile-gallery/image19.webp" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img class="img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="/assets/imgs/smile-gallery/image19.webp" alt="WARREN - Experience the difference of truly personal care!">
            </a>
          </div>
          <div class="col-lg-2">
            <a class="example-image-link" href="http://warren-laravel.test:81/assets/imgs/smile-gallery/image20.webp" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
               <img class="img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="/assets/imgs/smile-gallery/image20.webp" alt="WARREN - Experience the difference of truly personal care!">
            </a>
          </div>
          <div class="col-lg-2">
            <a class="example-image-link" href="http://warren-laravel.test:81/assets/imgs/smile-gallery/image21.webp" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
               <img class="img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="/assets/imgs/smile-gallery/image21.webp" alt="WARREN - Experience the difference of truly personal care!">
            </a>
          </div>
          <div class="col-lg-2">
            <a class="example-image-link" href="http://warren-laravel.test:81/assets/imgs/smile-gallery/image22.webp" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="/assets/imgs/smile-gallery/image22.webp" alt="WARREN - Experience the difference of truly personal care!">
            </a>
          </div>
        </div>

        <div class="row justify-content-center align-items-center py-4">
          <div class="col-lg-2">
              <a class="example-image-link" href="http://warren-laravel.test:81/assets/imgs/smile-gallery/image23.webp" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                  <img class="example-image img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="/assets/imgs/smile-gallery/image23.webp" alt="WARREN - Experience the difference of truly personal care!">
              </a>
          </div>
          <div class="col-lg-2">
            <a class="example-image-link" href="http://warren-laravel.test:81/assets/imgs/smile-gallery/image24.webp" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
               <img class="example-image img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="/assets/imgs/smile-gallery/image24.webp" alt="WARREN - Experience the difference of truly personal care!">
            </a>
          </div>
          <div class="col-lg-2">
            <a class="example-image-link" href="http://warren-laravel.test:81/assets/imgs/smile-gallery/image25.webp" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
               <img class="example-image img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="/assets/imgs/smile-gallery/image25.webp" alt="WARREN - Experience the difference of truly personal care!">
            </a>
          </div>
          <div class="col-lg-2">
            <a class="example-image-link" href="http://warren-laravel.test:81/assets/imgs/smile-gallery/image26.webp" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
               <img class="example-image img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="/assets/imgs/smile-gallery/image26.webp" alt="WARREN - Experience the difference of truly personal care!">
            </a>
          </div>
          <div class="col-lg-2">
            <a class="example-image-link" href="http://warren-laravel.test:81/assets/imgs/smile-gallery/image27.webp" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
              <img class="example-image img-fluid d-block mx-auto py-3" loading="lazy" width="600" height="600" src="/assets/imgs/smile-gallery/image27.webp" alt="WARREN - Experience the difference of truly personal care!">
            </a>
          </div>
        </div>

      </div>
    </section>



    @include('components.dental-services-links')

    @include('components.bottom-pages-links')

    @include('include.footer')

    <script src="{{asset('/assets/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('/assets/js/lightbox-plus-jquery.min.js')}}"></script>
    <script src="{{asset('/assets/js/lightbox.js')}}"></script>
    </body>
</html>
