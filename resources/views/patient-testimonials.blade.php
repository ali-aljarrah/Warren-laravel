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
        <div class="row" style="background-image: url('/assets/imgs/meet-us/Union3.webp');
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
                <div class="col-lg-12 mb-4">
                    <div class="rounded-5 p-4 bg-white">
                      <div class="d-flex align-items-center mb-3">
                          <div class="me-3">
                            <img class="img-fluid" loading="lazy" width="40" height="40" src="{{$review['profile_photo_url']}}" alt="Warren - {{$review['author_name']}}">
                          </div>
                          <div>
                            <div class="fs-16 dark-color-1 fw-600 mb-0">{{$review['author_name']}}</div>
                            <div class="fs-12 gray-color">{{$review['relative_time_description']}}</div>
                          </div>
                      </div>
                      <div class="mb-3">
                       {{\App\Helper\Helpers::getRatingStart($review['rating'])}}
                      </div>
                      <p class="fs-16 dark-color-1 mb-0">
                        {{$review['text']}}
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
