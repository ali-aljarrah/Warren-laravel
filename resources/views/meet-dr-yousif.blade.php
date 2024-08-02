@include('include.head')
    <title>Meet Amanda Yousif, DDS, FAGD | Warren Laser Dentistry</title>
    <meta name="description" content="Dr. Yousif enjoys getting to know patients & showing them the difference that advanced & compassionate dentistry can make in their lives. ☎️ 586-756-6351">
    <link rel="canonical" href="{{env('APP_URL')}}meet-us/meet-dr-yousif">
    <meta property="og:title" content="Meet Amanda Yousif, DDS, FAGD | Warren Laser Dentistry">
    <meta property="og:description" content="Dr. Yousif enjoys getting to know patients & showing them the difference that advanced & compassionate dentistry can make in their lives. ☎️ 586-756-6351">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')

  <section class="page-bg-image shadow-bg-layer " style="background-image: url(/assets/imgs/meet-dr/banner.webp)">
        <div class="container-fluid block-padding">
           <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                  <h1 class="white-color-1 py-4 fs-40 fw-bold d-flex justify-content-center align-items-center">
                    Meet Our Doctor – Warren, MI
                  </h1>
              </div>
          </div>
        </div>
  </section>

  <section class="py-5">
    <div class="container-fluid block-padding">
       <div class="row d-flex align-items-center">
          <div class="col-lg-6 pt-5 ps-5">
              <h2 class="dark-color-1 mt-5 mb-4 line-55 fs-48 fw-bold d-flex justify-content-center align-items-center">
                Amanda Yousif, DDS, FAGD
              </h2>
              <p class="dark-color fs-18 fw-500 pt-4 d-flex justify-content-center align-items-center">
                Dr. Yousif enjoys getting to know patients & showing them the difference that advanced & compassionate dentistry can make in their lives.
              </p>
          </div>
          <div class="col-lg-6 mx-auto">
               <img width="897" height="534" class="img-fluid" loading="lazy" src="/assets/imgs/meet-dr/meetDR.webp" alt="Warren Laser Dentistry Staff">
          </div>
        </div>
      </div>
</section>

<section class="py-5">
    <div class="container-fluid block-padding">
        <div class="row">
            <div class="col-lg-12 bg-gray-2 py-4 px-4 rounded-4">
                  <p class="black-color fs-16">
                      Dr. Yousif earned her dental degree from University of Detroit Mercy after earning her undergraduate degree from Albion College. In order to provide the best care possible to her patients, Dr. Yousif obtained Fellowship in the Academy of General Dentistry. This is a prestigious distinction achieved by only 6% of general dentists & involves an extensive commitment to continuing education (over 500 hours!) in all aspects of dentistry. Dr. Yousif is dedicated to providing the most up-to-date technology & treatment options paired with superior customer service.
                  </p>
                  <p class="black-color fs-16">
                    She has been in dentistry for 15 years & loves meeting new people on a regular basis & building quality relationships with her patients. Dr. Yousif finds the joy of changing a person’s life by creating a beautiful smile incredibly rewarding. When not caring for smiles, Dr. Yousif enjoys spending time with her three little ones (two daughters & a son), reading & watching movies.
                    Dr. Yousif looks forward to getting to know every patient & showing them the difference that advanced & compassionate dentistry can make in their lives.
                  </p>
            </div>
        </div>
    </div>
</section>

@include('components.bottom-pages-links')

    @include('include.footer')
    </body>
</html>
