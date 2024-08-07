@include('include.head')
    <title>Patient Information Warren MI | Warren Laser Dentistry</title>
    <meta name="description" content="Whether you’re a new patient or a returning patient, here is where you’ll find the information you need to get the most out of your visit.">
    <link rel="canonical" href="{{env('APP_URL')}}patient-information">
    <meta property="og:title" content="Patient Information Warren MI | Warren Laser Dentistry">
    <meta property="og:description" content="Whether you’re a new patient or a returning patient, here is where you’ll find the information you need to get the most out of your visit. ">

    </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="pages-banner lazybg">
        <div class="container-fluid block-padding">
          <div class="row mt-5">
            <div class="col-lg-5 mb-4 mb-lg-0 flex-grow-1">
              <div class="h-100 d-flex flex-column justify-content-center">
                <h1 class="dark-color-1 fs-40 fw-bold mb-4">
                       Patient Information - Warren, MI
                </h1>
                <p class="black-color fs-16">
                    Whether you're a new patient or a returning patient,
                    here is where you'll find the information you need to get the most out of your visit.
                    To us, being a dentist in Warren means being a pillar of health in the community.
                    To achieve that, we want to be as clear as possible about what you can expect &
                    what we provide. Every patient is different, so this is by no means an exhaustive
                    list of what you might want to know when visiting our office, but it's a start.
                     Please feel free to call us if you have questions about these topics or anything else.
                </p>
                <p class="fs-16 black-color">
                    Please view the pages below to see what sets us apart from any other dentist in Warren.
                    We look forward to your visit & showing you the difference that caring &
                    compassionate dental care can make in your life.
                </p>
              </div>
            </div>
            <div class="offset-lg-1 col-lg-6 flex-grow-1">
                <div class="d-flex h-100 justify-content-start justify-content-lg-center align-items-center">
                    <img width="572" height="345" class="img-fluid shadow rounded-5" src="{{asset('/assets/imgs/patient-information/img-1.webp')}}" alt="Warren - atient Information - Warren, MI">
                </div>
            </div>
          </div>
        </div>
    </section>

    @include('components.row-quick-links')

    @include('components.search-section')

    @include('components.bottom-pages-links')
    @include('include.footer')
    </body>
</html>
