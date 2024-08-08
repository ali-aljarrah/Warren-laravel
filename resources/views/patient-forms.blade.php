@include('include.head')
    <title>Patient Forms | Warren MI | Warren Laser Dentistry</title>
    <meta name="description" content="Appointments Available After Work or School & On Saturdays! Book Online or Call Today!  586-756-6351  Book Your Appointment">
    <link rel="canonical" href="{{env('APP_URL')}}patient-information/patient-forms">
    <meta property="og:title" content="Patient Forms | Warren MI | Warren Laser Dentistry">
    <meta property="og:description" content="Appointments Available After Work or School & On Saturdays! Book Online or Call Today!  586-756-6351  Book Your Appointment">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')


    <section class="page-bg-image lazybg d-flex justify-content-start align-items-center " style="background-image: url(/assets/imgs/patient-forms/banner.webp)">
      <div class="block-padding py-5">
            <div class="container-fluid py-5">
               <div class="row">
                  <div class="col-lg-12">
                      <h1 class="dark-color-1 py-2 fs-40 fw-bold d-flex justify-content-start align-items-center">
                          Patient Forms
                      </h1>
                      <p class="dark-color fs-16 fw-600">
                          Appointments Available After Work or School & On Saturdays!
                      </p>
                  </div>
              </div>
            </div>
        </div>
    </section>

    <section class="py-5">
      <div class="block-padding">
            <div class="container-fluid">
               <div class="row d-flex justify-content-center align-items-center">
                  <div class="col-lg-8 rounded-4 bg-gray-2 m-top-minus py-3 px-5">
                      <div class="d-lg-flex justify-content-between align-items-center">
                          <h2 class="dark-color fs-24 py-2 fw-600 mb-2 mb-lg-0">
                              Patient Forms
                          </h2>
                          <a class="btn-main-blue w-fit rounded-3" href="https://www.ident.ws/template_include/new_patient_sign_in.do?site=21243&practiceId=58910" target="blank">
                            New Patient Forms Sign In
                          </a>
                      </div>
                    </div>
              </div>
            </div>
        </div>
    </section>


    @include('components.search-section')
    @include('components.bottom-pages-links')
    @include('include.footer')
    </body>
</html>
