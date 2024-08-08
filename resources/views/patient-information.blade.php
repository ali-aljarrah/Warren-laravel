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

    <section class="page-bg-image lazybg shadow-bg-layer " style="background-image: url(/assets/imgs/patient-information/banner.webp)">
        <div class="container-fluid block-padding">
           <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                  <h1 class="white-color-1 py-4 fs-40 fw-bold d-flex justify-content-center align-items-center">
                    Patient Information - Warren, MI
                  </h1>
                  <p class="white-color fs-16">
                    Whether you're a new patient or a returning patient,
                    here is where you'll find the information you need to get the most out of your visit.
                    To us, being a dentist in Warren means being a pillar of health in the community.
                    To achieve that, we want to be as clear as possible about what you can expect &
                    what we provide. Every patient is different, so this is by no means an exhaustive
                    list of what you might want to know when visiting our office, but it's a start.
                     Please feel free to call us if you have questions about these topics or anything else.
                  </p>
                  <p class="white-color fs-16">
                    Please view the pages below to see what sets us apart from any other dentist in Warren.
                    We look forward to your visit & showing you the difference that caring &
                    compassionate dental care can make in your life.
                  </p>
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
