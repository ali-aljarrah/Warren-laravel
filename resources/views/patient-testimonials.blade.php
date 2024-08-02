@include('include.head')
    <title>Dentist Reviews | Best Dentist in Warren MI | Warren Laser Dentistry</title>
    <meta name="description" content="See why our patients rank us as the best dentist in Warren, MI. We are proud to serve our community & keep our patients smiling!">
    <link rel="canonical" href="{{env('APP_URL')}}meet-us/patient-testimonials/">
    <meta property="og:title" content="Dentist Reviews | Best Dentist in Warren MI | Warren Laser Dentistry">
    <meta property="og:description" content="See why our patients rank us as the best dentist in Warren, MI. We are proud to serve our community & keep our patients smiling!">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')


    <section class="py-5">
      <div class="container-fluid block-padding">
        <div class="row" style="background-image: url('/assets/imgs/meet-us/Union2.png');
            border-radius: 40px; background-size: cover; padding-top:20px; height:600px;">

            <div class="col-lg-7 mb-4 mb-lg-0 card-white-top">
                 <h1 class="dark-color-1 py-4 fs-40 fw-bold">
                     Patient Testimonials
                 </h1>
                 <p class="black-color fs-16">
                      Our patient testimonials offer authentic accounts of the exceptional care and transformative experiences our dental clinic provides. They serve as a testament to our commitment to excellence and the satisfaction of those we serve.
                 </p>
            </div>

        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container-fluid block-padding">
        <div class="row">
            <div class="col-l-12">
                <h2 class="dark-color-1 py-4 fs-24 fw-bold">
                    Warren Laser Dentistry Staff
                </h2>
                <p class="black-color fs-16">
                   Our exceptional, friendly staff is our greatest asset. All of our dental assistants & hygienists are licensed professionals who pride themselves on their current dental techniques & outstanding patient communication. With unmatched quality & integrity, they are dedicated to achieving the best possible results for you & your family.
                </p>
                <p class="black-color fs-16">
                    Since your comfort & health are our top priorities, Warren Laser Dentistry’s staff is glad to assist you in any way. If you have any questions at all, from treatment options & sterilization to insurance concerns & paperwork, we’re here for you! We can assure you that you’ll enjoy your dental visit!
                </p>
            </div>
        </div>
      </div>
    </section>

    <section class="bg-gray-2 py-5">
      <div class="container-fluid block-padding">
        <div class="row pt-3">
            @if (count($reviews) > 0)
                @foreach ($reviews as $review)
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="rounded-5 p-4 bg-white">
                      <div class="d-flex align-items-center mb-3">
                          <div class="me-3">
                            <img class="img-fluid" loading="lazy" width="40" height="40" src="/assets/imgs/home/avatar-1.webp" alt="Warren - Sheranda Chambers">
                          </div>
                          <div>
                            <div class="fs-16 dark-color-1 fw-600 mb-0">Sheranda Chambers</div>
                            <div class="fs-12 gray-color">April 8, 2024</div>
                          </div>
                      </div>
                      <div class="mb-3">
                        <svg width="105" height="17" viewBox="0 0 105 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_23_163)">
                          <path d="M17.68 6.53438C17.68 6.69021 17.5879 6.86021 17.4037 7.04437L13.5469 10.8056L14.4606 16.1181C14.4677 16.1677 14.4713 16.2385 14.4713 16.3306C14.4713 16.4794 14.4341 16.6051 14.3597 16.7078C14.2853 16.8105 14.1773 16.8619 14.0356 16.8619C13.901 16.8619 13.7594 16.8194 13.6106 16.7344L8.84 14.2269L4.06938 16.7344C3.91354 16.8194 3.77188 16.8619 3.64438 16.8619C3.49563 16.8619 3.38406 16.8105 3.30969 16.7078C3.23531 16.6051 3.19813 16.4794 3.19813 16.3306C3.19813 16.2881 3.20521 16.2173 3.21938 16.1181L4.13312 10.8056L0.265625 7.04437C0.0885417 6.85313 0 6.68313 0 6.53438C0 6.27229 0.198333 6.10938 0.595 6.04563L5.92875 5.27L8.31938 0.435625C8.45396 0.145208 8.6275 0 8.84 0C9.0525 0 9.22604 0.145208 9.36063 0.435625L11.7513 5.27L17.085 6.04563C17.4817 6.10938 17.68 6.27229 17.68 6.53438Z" fill="#FFCC00"/>
                          </g>
                          <g clip-path="url(#clip1_23_163)">
                          <path d="M39.36 6.53438C39.36 6.69021 39.2679 6.86021 39.0837 7.04437L35.2269 10.8056L36.1406 16.1181C36.1477 16.1677 36.1512 16.2385 36.1512 16.3306C36.1512 16.4794 36.1141 16.6051 36.0397 16.7078C35.9653 16.8105 35.8573 16.8619 35.7156 16.8619C35.581 16.8619 35.4394 16.8194 35.2906 16.7344L30.52 14.2269L25.7494 16.7344C25.5935 16.8194 25.4519 16.8619 25.3244 16.8619C25.1756 16.8619 25.0641 16.8105 24.9897 16.7078C24.9153 16.6051 24.8781 16.4794 24.8781 16.3306C24.8781 16.2881 24.8852 16.2173 24.8994 16.1181L25.8131 10.8056L21.9456 7.04437C21.7685 6.85313 21.68 6.68313 21.68 6.53438C21.68 6.27229 21.8783 6.10938 22.275 6.04563L27.6087 5.27L29.9994 0.435625C30.134 0.145208 30.3075 0 30.52 0C30.7325 0 30.906 0.145208 31.0406 0.435625L33.4312 5.27L38.765 6.04563C39.1617 6.10938 39.36 6.27229 39.36 6.53438Z" fill="#FFCC00"/>
                          </g>
                          <g clip-path="url(#clip2_23_163)">
                          <path d="M61.04 6.53438C61.04 6.69021 60.9479 6.86021 60.7637 7.04437L56.9069 10.8056L57.8206 16.1181C57.8277 16.1677 57.8312 16.2385 57.8312 16.3306C57.8312 16.4794 57.794 16.6051 57.7197 16.7078C57.6453 16.8105 57.5373 16.8619 57.3956 16.8619C57.261 16.8619 57.1194 16.8194 56.9706 16.7344L52.2 14.2269L47.4294 16.7344C47.2735 16.8194 47.1319 16.8619 47.0044 16.8619C46.8556 16.8619 46.744 16.8105 46.6697 16.7078C46.5953 16.6051 46.5581 16.4794 46.5581 16.3306C46.5581 16.2881 46.5652 16.2173 46.5794 16.1181L47.4931 10.8056L43.6256 7.04437C43.4485 6.85313 43.36 6.68313 43.36 6.53438C43.36 6.27229 43.5583 6.10938 43.955 6.04563L49.2887 5.27L51.6794 0.435625C51.8139 0.145208 51.9875 0 52.2 0C52.4125 0 52.586 0.145208 52.7206 0.435625L55.1112 5.27L60.445 6.04563C60.8417 6.10938 61.04 6.27229 61.04 6.53438Z" fill="#FFCC00"/>
                          </g>
                          <g clip-path="url(#clip3_23_163)">
                          <path d="M82.72 6.53438C82.72 6.69021 82.6279 6.86021 82.4438 7.04437L78.5869 10.8056L79.5006 16.1181C79.5077 16.1677 79.5113 16.2385 79.5113 16.3306C79.5113 16.4794 79.4741 16.6051 79.3997 16.7078C79.3253 16.8105 79.2173 16.8619 79.0756 16.8619C78.9411 16.8619 78.7994 16.8194 78.6506 16.7344L73.88 14.2269L69.1094 16.7344C68.9536 16.8194 68.8119 16.8619 68.6844 16.8619C68.5356 16.8619 68.4241 16.8105 68.3497 16.7078C68.2753 16.6051 68.2381 16.4794 68.2381 16.3306C68.2381 16.2881 68.2452 16.2173 68.2594 16.1181L69.1731 10.8056L65.3056 7.04437C65.1286 6.85313 65.04 6.68313 65.04 6.53438C65.04 6.27229 65.2383 6.10938 65.635 6.04563L70.9688 5.27L73.3594 0.435625C73.494 0.145208 73.6675 0 73.88 0C74.0925 0 74.2661 0.145208 74.4006 0.435625L76.7913 5.27L82.125 6.04563C82.5217 6.10938 82.72 6.27229 82.72 6.53438Z" fill="#FFCC00"/>
                          </g>
                          <g clip-path="url(#clip4_23_163)">
                          <path d="M104.4 6.53438C104.4 6.69021 104.308 6.86021 104.124 7.04437L100.267 10.8056L101.181 16.1181C101.188 16.1677 101.191 16.2385 101.191 16.3306C101.191 16.4794 101.154 16.6051 101.08 16.7078C101.005 16.8105 100.897 16.8619 100.756 16.8619C100.621 16.8619 100.479 16.8194 100.331 16.7344L95.56 14.2269L90.7894 16.7344C90.6335 16.8194 90.4919 16.8619 90.3644 16.8619C90.2156 16.8619 90.1041 16.8105 90.0297 16.7078C89.9553 16.6051 89.9181 16.4794 89.9181 16.3306C89.9181 16.2881 89.9252 16.2173 89.9394 16.1181L90.8531 10.8056L86.9856 7.04437C86.8085 6.85313 86.72 6.68313 86.72 6.53438C86.72 6.27229 86.9183 6.10938 87.315 6.04563L92.6488 5.27L95.0394 0.435625C95.174 0.145208 95.3475 0 95.56 0C95.7725 0 95.946 0.145208 96.0806 0.435625L98.4713 5.27L103.805 6.04563C104.202 6.10938 104.4 6.27229 104.4 6.53438Z" fill="#FFCC00"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_23_163">
                          <rect width="17.68" height="17" fill="white"/>
                          </clipPath>
                          <clipPath id="clip1_23_163">
                          <rect width="17.68" height="17" fill="white" transform="translate(21.68)"/>
                          </clipPath>
                          <clipPath id="clip2_23_163">
                          <rect width="17.68" height="17" fill="white" transform="translate(43.36)"/>
                          </clipPath>
                          <clipPath id="clip3_23_163">
                          <rect width="17.68" height="17" fill="white" transform="translate(65.04)"/>
                          </clipPath>
                          <clipPath id="clip4_23_163">
                          <rect width="17.68" height="17" fill="white" transform="translate(86.72)"/>
                          </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <p class="fs-16 dark-color-1 mb-0">
                      Warren Laser Dentistry has given me good and timely service at the time of each of my three visits.
                      </p>
                    </div>
                  </div>
                @endforeach
                @else
                <div class="col-lg-12">
                    <div class="text-center fs-20 fw-bold dark-color">
                        Sorry, Something went wrong getting the reviews, Please try again later.
                    </div>
                </div>
            @endif
        </div>
      </div>
    </section>

    @include('components.bottom-pages-links')

    @include('include.footer')
    </body>
</html>
