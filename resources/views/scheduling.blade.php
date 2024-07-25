@include('include.head')
    <title>Dentist Appointment Warren MI | Warren Laser Dentistry</title>
    <meta name="description" content="At Warren Laser Dentistry, we have great hours & we are proud to offer our patients convenient appointments that fit even the busiest schedules.">
    <link rel="canonical" href="https://www.warrenlaserdentistry.com/patient-information/scheduling">
    <meta property="og:title" content="Dentist Appointment Warren MI | Warren Laser Dentistry">
    <meta property="og:description" content="At Warren Laser Dentistry, we have great hours & we are proud to offer our patients convenient appointments that fit even the busiest schedules.">

    </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="pb-5 pt-5 pt-lg-0">
        <div class="container-fluid ">
          <div class="bg-child-blue p-2 p-lg-3 mx-0 mx-lg-5 rounded-4">
            <div class="row p-3 p-lg-5 d-flex justify-content-center">
              <div class="col-lg-5 offest-2">
                <img width="480" height="480" class="img-fluid" loading="lazy" src="/assets/imgs/patient-information/Rectangle19.webp" alt="Warren - schedule your appointment">
              </div>
              <div class="col-lg-5 mt-5 mt-lg-0">
                <h1 class="fs-32 pe-5 me-5 mb-4 fw-600 blue-color txt-media">
                  We offer a variety of convenient ways to schedule your appointment
                </h1>
                <div class="d-flex">
                    <button class="btn-blue rounded-2 px-3 fs-14 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        In Person
                    </button>
                    <button class="btn btn-outline-dark " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        By Phone
                    </button>
                </div>
              </div>
            </div>
            <div class="row m-top-minus d-flex justify-content-center">
              <div class="col-lg-6 bg-white rounded-4 py-2 px-4 mb-5">
                <div class="m-top-img text-center">
                    <img width="80" height="80" class="img-fluid" loading="lazy" src="/assets/imgs/patient-information/Group.webp" alt="Warren - atient Information - Warren, MI">
                </div>
                  <div class="p-1 text-center">
                      <p>
                          We don’t want there to be any obstacles between you & your family & great dental care. We have great hours & we are proud to offer our patients convenient appointments that fit even the busiest schedules. We understand that many of our patients work or go to school full time. Our friendly staff always strives to provide appointment times that don’t require time off or missing class. To help you stay on top of your preventive care, we will pre-appoint you for your next appointment at each teeth cleaning visit. Reminders are sent ahead of your appointment so you don’t miss it!
                      </p>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </section>

    @include('components.book-appointment-section')


    @include('components.search-section')

    @include('components.bottom-pages-links')

    @include('include.footer')
    </body>
</html>
