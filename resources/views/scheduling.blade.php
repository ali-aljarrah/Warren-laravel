@include('include.head')
    <title>TITLE</title>
    <meta name="Warren Laser Dentistry - Scheduling" content="We don’t want there to be any obstacles between you & great dental care. we are proud to offer our patients convenient appointments that fit even the busiest schedules.">
    <link rel="canonical" href="https://www.URL.COM/scheduling">
    <meta property="og:title" content="Warren Laser Dentistry - Scheduling">
    <meta property="og:description" content="We don’t want there to be any obstacles between you & great dental care. we are proud to offer our patients convenient appointments that fit even the busiest schedules.">

    </head>
  <body>
    @include('include.loader')
    @include('include.menu')


    <section class="pb-5">
        <div class="container-fluid ">
          <div  class="bg-child-blue p-3 mx-5 rounded-4">
            <div class="row p-5 d-flex justify-content-center">
              <div class="col-lg-5 offest-2">
                <img width="480" height="480" class="img-fluid" loading="lazy" src="/assets/imgs/patient-information/Rectangle19.webp" alt="Warren - atient Information - Warren, MI">
              </div>
              <div class="col-lg-5">
                <h1 class="fs-32 pe-5 me-5 mb-4 fw-600 blue-color">
                  We offer a variety of convenient ways to schedule your appointment
                </h1>
                <div class="d-flex">
                    <button class="btn btn-blue me-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
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

    <section class="py-5 tooth-bg">
      <div class="container-fluid block-padding py-5">
          <div class="row">
            <div class="col-lg-3 mb-4 mb-lg-0">
              <div class="d-flex align-items-center h-100">
                <div>
                  <div class="fs-16 dark-color-1 fw-bold mb-3">All Insurance Welcome &amp; Maximized!</div>
                  <h5 class="fs-40 fw-bold dark-color-1 mb-4">
                  Book an appointment
                  </h5>
                  <div class="bg-gray-2 shadow rounded-4 p-4 w-fit">
                    <div class="fs-16 dark-color-1 mb-1">Warren Laser Dentistry</div>
                    <div class="fs-16 dark-color-1 mb-1">4224 E 10 Mile Rd, Warren, MI 48091</div>
                    <div>
                      <a href="tel:+(586) 756-6351" class="text-decoration-underline dark-color-1">(586) 756-6351</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="offset-lg-5 col-lg-4">
              <div class="rounded-4 bg-gray-2 p-4">
                <div class="fs-18 dark-color-1 fw-600 mb-4">Who is this appointment for?</div>
                <form action="#" class="row">
                  <div class="col-lg-12 mb-3">
                    <div class="fs-16 dark-color-1">Patient name (required)</div>
                  </div>
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="firstName" class="form-control custom-input" placeholder="First name" fdprocessedid="wz9v4j">
                    </div>
                  </div>
                  <div class="col-lg-12 mb-3">
                    <div class="form-group">
                      <input type="text" name="lastName" class="form-control custom-input" placeholder="Last name" fdprocessedid="0t2ub">
                    </div>
                  </div>
                  <div class="col-lg-12 mb-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label fs-16 dark-color-1" for="flexCheckDefault">
                        I'm booking for someone else
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-12 mt-4 mb-3">
                    <div class="fs-16 dark-color-1">Have you visited us before?</div>
                  </div>
                  <div class="col-lg-6 mb-3">
                    <input type="radio" class="btn-check" name="patient-status" id="new-patient" autocomplete="off" checked="">
                    <label class="btn btn-outline-success blue w-100" for="new-patient">New Patient</label>
                  </div>
                  <div class="col-lg-6 mb-3">
                    <input type="radio" class="btn-check" name="patient-status" id="returning-patient" autocomplete="off">
                    <label class="btn btn-outline-secondary w-100" for="returning-patient">Returning Patient</label>
                  </div>
                  <div class="col-lg-12 mt-4 text-end">
                  <a href="#" class="btn-main-blue w-fit ms-auto">Next</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
    </section>


    <section class="py-5">
        <div class="container-fluid block-padding">
            <div class="row">
                <div class="col-lg-5 order-2 order-lg-1">
                    <h2 class="fs-64 dark-color fw-bold line-120 mb-3">
                        What are you looking for?
                    </h2>
                    <div class="search-input-wrapper">
                        <input type="text" placeholder="Search our site">
                        <a href="#">Search</a>
                    </div>
                    <div class="dark-color fs-20 mt-5">
                        Popular Searches
                    </div>
                    <div class="d-flex flex-wrap mt-3">
                        <a class="dark-color-1 d-block fs-16 rounded-2 bg-cyan px-3 py-2 mb-2 me-2" href="#">
                            <span class="me-2">toothpain </span>
                            <span>
                                <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0568 0.833336C12.0568 0.667576 12.1226 0.508604 12.2398 0.391394C12.357 0.274184 12.516 0.208336 12.6818 0.208336H17.3334C17.4992 0.208336 17.6582 0.274184 17.7754 0.391394C17.8926 0.508604 17.9584 0.667576 17.9584 0.833336V5.455C17.9584 5.62076 17.8926 5.77973 17.7754 5.89694C17.6582 6.01415 17.4992 6.08 17.3334 6.08C17.1677 6.08 17.0087 6.01415 16.8915 5.89694C16.7743 5.77973 16.7084 5.62076 16.7084 5.455V2.33584L11.5951 7.41667C11.2043 7.805 10.8676 8.14 10.5618 8.3725C10.2334 8.62084 9.87011 8.80917 9.42094 8.80917C8.97261 8.80917 8.60844 8.62084 8.28011 8.37167C7.97428 8.14 7.63844 7.805 7.24678 7.41667L7.01844 7.18917C6.59011 6.76334 6.31261 6.48917 6.08094 6.31334C5.86428 6.14834 5.76261 6.13 5.69511 6.13C5.62844 6.13 5.52678 6.14917 5.31011 6.31334C5.07928 6.48917 4.80178 6.76334 4.37344 7.19L1.10761 10.4417C0.988924 10.5519 0.832102 10.6117 0.670184 10.6085C0.508267 10.6054 0.353897 10.5395 0.239598 10.4247C0.1253 10.31 0.0599978 10.1554 0.0574505 9.99346C0.0549031 9.83153 0.115309 9.67494 0.225942 9.55667L3.52011 6.275C3.91178 5.88667 4.24761 5.55084 4.55344 5.31834C4.88178 5.06834 5.24594 4.88084 5.69511 4.88C6.14428 4.88 6.50844 5.06834 6.83678 5.3175C7.14261 5.55 7.47928 5.885 7.87011 6.27417L8.09928 6.50084C8.52761 6.92667 8.80511 7.20084 9.03594 7.37584C9.25261 7.54084 9.35428 7.55917 9.42094 7.55917C9.48761 7.55917 9.58928 7.54084 9.80594 7.37584C10.0376 7.20084 10.3143 6.92667 10.7434 6.50084L15.8184 1.4575H12.6818C12.516 1.4575 12.357 1.39165 12.2398 1.27444C12.1226 1.15723 12.0568 0.999096 12.0568 0.833336Z" fill="#121212"/>
                                </svg>
                            </span>
                        </a>
                        <a class="dark-color-1 d-block fs-16 rounded-2 bg-cyan px-3 py-2 mb-2 me-2" href="#">
                            <span class="me-2">offer</span>
                            <span>
                                <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0568 0.833336C12.0568 0.667576 12.1226 0.508604 12.2398 0.391394C12.357 0.274184 12.516 0.208336 12.6818 0.208336H17.3334C17.4992 0.208336 17.6582 0.274184 17.7754 0.391394C17.8926 0.508604 17.9584 0.667576 17.9584 0.833336V5.455C17.9584 5.62076 17.8926 5.77973 17.7754 5.89694C17.6582 6.01415 17.4992 6.08 17.3334 6.08C17.1677 6.08 17.0087 6.01415 16.8915 5.89694C16.7743 5.77973 16.7084 5.62076 16.7084 5.455V2.33584L11.5951 7.41667C11.2043 7.805 10.8676 8.14 10.5618 8.3725C10.2334 8.62084 9.87011 8.80917 9.42094 8.80917C8.97261 8.80917 8.60844 8.62084 8.28011 8.37167C7.97428 8.14 7.63844 7.805 7.24678 7.41667L7.01844 7.18917C6.59011 6.76334 6.31261 6.48917 6.08094 6.31334C5.86428 6.14834 5.76261 6.13 5.69511 6.13C5.62844 6.13 5.52678 6.14917 5.31011 6.31334C5.07928 6.48917 4.80178 6.76334 4.37344 7.19L1.10761 10.4417C0.988924 10.5519 0.832102 10.6117 0.670184 10.6085C0.508267 10.6054 0.353897 10.5395 0.239598 10.4247C0.1253 10.31 0.0599978 10.1554 0.0574505 9.99346C0.0549031 9.83153 0.115309 9.67494 0.225942 9.55667L3.52011 6.275C3.91178 5.88667 4.24761 5.55084 4.55344 5.31834C4.88178 5.06834 5.24594 4.88084 5.69511 4.88C6.14428 4.88 6.50844 5.06834 6.83678 5.3175C7.14261 5.55 7.47928 5.885 7.87011 6.27417L8.09928 6.50084C8.52761 6.92667 8.80511 7.20084 9.03594 7.37584C9.25261 7.54084 9.35428 7.55917 9.42094 7.55917C9.48761 7.55917 9.58928 7.54084 9.80594 7.37584C10.0376 7.20084 10.3143 6.92667 10.7434 6.50084L15.8184 1.4575H12.6818C12.516 1.4575 12.357 1.39165 12.2398 1.27444C12.1226 1.15723 12.0568 0.999096 12.0568 0.833336Z" fill="#121212"/>
                                </svg>
                            </span>
                        </a>
                        <a class="dark-color-1 d-block fs-16 rounded-2 bg-cyan px-3 py-2 mb-2 me-2" href="#">
                            <span class="me-2">newpatient</span>
                            <span>
                                <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0568 0.833336C12.0568 0.667576 12.1226 0.508604 12.2398 0.391394C12.357 0.274184 12.516 0.208336 12.6818 0.208336H17.3334C17.4992 0.208336 17.6582 0.274184 17.7754 0.391394C17.8926 0.508604 17.9584 0.667576 17.9584 0.833336V5.455C17.9584 5.62076 17.8926 5.77973 17.7754 5.89694C17.6582 6.01415 17.4992 6.08 17.3334 6.08C17.1677 6.08 17.0087 6.01415 16.8915 5.89694C16.7743 5.77973 16.7084 5.62076 16.7084 5.455V2.33584L11.5951 7.41667C11.2043 7.805 10.8676 8.14 10.5618 8.3725C10.2334 8.62084 9.87011 8.80917 9.42094 8.80917C8.97261 8.80917 8.60844 8.62084 8.28011 8.37167C7.97428 8.14 7.63844 7.805 7.24678 7.41667L7.01844 7.18917C6.59011 6.76334 6.31261 6.48917 6.08094 6.31334C5.86428 6.14834 5.76261 6.13 5.69511 6.13C5.62844 6.13 5.52678 6.14917 5.31011 6.31334C5.07928 6.48917 4.80178 6.76334 4.37344 7.19L1.10761 10.4417C0.988924 10.5519 0.832102 10.6117 0.670184 10.6085C0.508267 10.6054 0.353897 10.5395 0.239598 10.4247C0.1253 10.31 0.0599978 10.1554 0.0574505 9.99346C0.0549031 9.83153 0.115309 9.67494 0.225942 9.55667L3.52011 6.275C3.91178 5.88667 4.24761 5.55084 4.55344 5.31834C4.88178 5.06834 5.24594 4.88084 5.69511 4.88C6.14428 4.88 6.50844 5.06834 6.83678 5.3175C7.14261 5.55 7.47928 5.885 7.87011 6.27417L8.09928 6.50084C8.52761 6.92667 8.80511 7.20084 9.03594 7.37584C9.25261 7.54084 9.35428 7.55917 9.42094 7.55917C9.48761 7.55917 9.58928 7.54084 9.80594 7.37584C10.0376 7.20084 10.3143 6.92667 10.7434 6.50084L15.8184 1.4575H12.6818C12.516 1.4575 12.357 1.39165 12.2398 1.27444C12.1226 1.15723 12.0568 0.999096 12.0568 0.833336Z" fill="#121212"/>
                                </svg>
                            </span>
                        </a>
                        <a class="dark-color-1 d-block fs-16 rounded-2 bg-cyan px-3 py-2 mb-2 me-2" href="#">
                            <span class="me-2">appointments</span>
                            <span>
                                <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0568 0.833336C12.0568 0.667576 12.1226 0.508604 12.2398 0.391394C12.357 0.274184 12.516 0.208336 12.6818 0.208336H17.3334C17.4992 0.208336 17.6582 0.274184 17.7754 0.391394C17.8926 0.508604 17.9584 0.667576 17.9584 0.833336V5.455C17.9584 5.62076 17.8926 5.77973 17.7754 5.89694C17.6582 6.01415 17.4992 6.08 17.3334 6.08C17.1677 6.08 17.0087 6.01415 16.8915 5.89694C16.7743 5.77973 16.7084 5.62076 16.7084 5.455V2.33584L11.5951 7.41667C11.2043 7.805 10.8676 8.14 10.5618 8.3725C10.2334 8.62084 9.87011 8.80917 9.42094 8.80917C8.97261 8.80917 8.60844 8.62084 8.28011 8.37167C7.97428 8.14 7.63844 7.805 7.24678 7.41667L7.01844 7.18917C6.59011 6.76334 6.31261 6.48917 6.08094 6.31334C5.86428 6.14834 5.76261 6.13 5.69511 6.13C5.62844 6.13 5.52678 6.14917 5.31011 6.31334C5.07928 6.48917 4.80178 6.76334 4.37344 7.19L1.10761 10.4417C0.988924 10.5519 0.832102 10.6117 0.670184 10.6085C0.508267 10.6054 0.353897 10.5395 0.239598 10.4247C0.1253 10.31 0.0599978 10.1554 0.0574505 9.99346C0.0549031 9.83153 0.115309 9.67494 0.225942 9.55667L3.52011 6.275C3.91178 5.88667 4.24761 5.55084 4.55344 5.31834C4.88178 5.06834 5.24594 4.88084 5.69511 4.88C6.14428 4.88 6.50844 5.06834 6.83678 5.3175C7.14261 5.55 7.47928 5.885 7.87011 6.27417L8.09928 6.50084C8.52761 6.92667 8.80511 7.20084 9.03594 7.37584C9.25261 7.54084 9.35428 7.55917 9.42094 7.55917C9.48761 7.55917 9.58928 7.54084 9.80594 7.37584C10.0376 7.20084 10.3143 6.92667 10.7434 6.50084L15.8184 1.4575H12.6818C12.516 1.4575 12.357 1.39165 12.2398 1.27444C12.1226 1.15723 12.0568 0.999096 12.0568 0.833336Z" fill="#121212"/>
                                </svg>
                            </span>
                        </a>
                        <a class="dark-color-1 d-block fs-16 rounded-2 bg-cyan px-3 py-2 mb-2 me-2" href="#">
                            <span class="me-2">dental</span>
                            <span>
                                <svg width="18" height="11" viewBox="0 0 18 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0568 0.833336C12.0568 0.667576 12.1226 0.508604 12.2398 0.391394C12.357 0.274184 12.516 0.208336 12.6818 0.208336H17.3334C17.4992 0.208336 17.6582 0.274184 17.7754 0.391394C17.8926 0.508604 17.9584 0.667576 17.9584 0.833336V5.455C17.9584 5.62076 17.8926 5.77973 17.7754 5.89694C17.6582 6.01415 17.4992 6.08 17.3334 6.08C17.1677 6.08 17.0087 6.01415 16.8915 5.89694C16.7743 5.77973 16.7084 5.62076 16.7084 5.455V2.33584L11.5951 7.41667C11.2043 7.805 10.8676 8.14 10.5618 8.3725C10.2334 8.62084 9.87011 8.80917 9.42094 8.80917C8.97261 8.80917 8.60844 8.62084 8.28011 8.37167C7.97428 8.14 7.63844 7.805 7.24678 7.41667L7.01844 7.18917C6.59011 6.76334 6.31261 6.48917 6.08094 6.31334C5.86428 6.14834 5.76261 6.13 5.69511 6.13C5.62844 6.13 5.52678 6.14917 5.31011 6.31334C5.07928 6.48917 4.80178 6.76334 4.37344 7.19L1.10761 10.4417C0.988924 10.5519 0.832102 10.6117 0.670184 10.6085C0.508267 10.6054 0.353897 10.5395 0.239598 10.4247C0.1253 10.31 0.0599978 10.1554 0.0574505 9.99346C0.0549031 9.83153 0.115309 9.67494 0.225942 9.55667L3.52011 6.275C3.91178 5.88667 4.24761 5.55084 4.55344 5.31834C4.88178 5.06834 5.24594 4.88084 5.69511 4.88C6.14428 4.88 6.50844 5.06834 6.83678 5.3175C7.14261 5.55 7.47928 5.885 7.87011 6.27417L8.09928 6.50084C8.52761 6.92667 8.80511 7.20084 9.03594 7.37584C9.25261 7.54084 9.35428 7.55917 9.42094 7.55917C9.48761 7.55917 9.58928 7.54084 9.80594 7.37584C10.0376 7.20084 10.3143 6.92667 10.7434 6.50084L15.8184 1.4575H12.6818C12.516 1.4575 12.357 1.39165 12.2398 1.27444C12.1226 1.15723 12.0568 0.999096 12.0568 0.833336Z" fill="#121212"/>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 mb-4 mb-lg-0 flex-grow-1 order-1 order-lg-2">
                    <div class="d-flex h-100 justify-content-center align-items-center">
                        <img width="897" height="534" class="img-fluid" loading="lazy" src="/assets/imgs/patient-information/img-2.webp" alt="Warren - What are you looking for?">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5 bg-gra-3-4  d-flex justify-content-center align-items-center min-h-240">
        <div class="container-fluid block-padding">
          <div class="row">
              <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="d-flex">
                  <div class="px-20">
                 <p class="white-color fw-bold fs-40"> We offer a variety of convenient ways to schedule your appointment</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row">

                  <div class="col-lg-4">
                      <div class="row pt-50">
                      <div class="col-lg-2">
                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.25006 6C5.25006 4.74022 5.7505 3.53204 6.6413 2.64124C7.5321 1.75044 8.74028 1.25 10.0001 1.25C11.2598 1.25 12.468 1.75044 13.3588 2.64124C14.2496 3.53204 14.7501 4.74022 14.7501 6C14.7501 7.25978 14.2496 8.46796 13.3588 9.35876C12.468 10.2496 11.2598 10.75 10.0001 10.75C8.74028 10.75 7.5321 10.2496 6.6413 9.35876C5.7505 8.46796 5.25006 7.25978 5.25006 6ZM10.0001 2.75C9.1381 2.75 8.31145 3.09241 7.70196 3.7019C7.09247 4.3114 6.75006 5.13805 6.75006 6C6.75006 6.86195 7.09247 7.6886 7.70196 8.2981C8.31145 8.90759 9.1381 9.25 10.0001 9.25C10.862 9.25 11.6887 8.90759 12.2982 8.2981C12.9076 7.6886 13.2501 6.86195 13.2501 6C13.2501 5.13805 12.9076 4.3114 12.2982 3.7019C11.6887 3.09241 10.862 2.75 10.0001 2.75ZM3.97606 13.664C5.55606 12.776 7.68606 12.25 10.0001 12.25C12.3141 12.25 14.4451 12.776 16.0251 13.664C17.5811 14.54 18.7501 15.866 18.7501 17.5V17.602C18.7511 18.764 18.7531 20.222 17.4741 21.264C16.8441 21.776 15.9641 22.141 14.7741 22.381C13.5811 22.623 12.0261 22.75 10.0001 22.75C7.97406 22.75 6.42006 22.623 5.22606 22.381C4.03606 22.141 3.15606 21.776 2.52606 21.264C1.24806 20.222 1.24906 18.764 1.25006 17.602V17.5C1.25006 15.866 2.42006 14.54 3.97606 13.664ZM4.71106 14.972C3.37106 15.725 2.75106 16.649 2.75106 17.5C2.75106 18.808 2.79106 19.544 3.47406 20.1C3.84406 20.402 4.46406 20.697 5.52406 20.911C6.58106 21.125 8.02606 21.25 10.0001 21.25C11.9741 21.25 13.4201 21.125 14.4761 20.911C15.5361 20.697 16.1561 20.402 16.5261 20.101C17.2101 19.544 17.2501 18.808 17.2501 17.5C17.2501 16.649 16.6291 15.725 15.2901 14.972C13.9731 14.232 12.1051 13.75 10.0001 13.75C7.89506 13.75 6.02706 14.232 4.71106 14.972ZM16.6901 7.447C17.4111 7.128 18.2481 7.188 19.0001 7.679C19.7521 7.189 20.5901 7.128 21.3101 7.447C21.7422 7.64319 22.1081 7.9604 22.3637 8.36026C22.6193 8.76011 22.7535 9.22546 22.7501 9.7C22.7501 10.648 22.3361 11.362 21.8401 11.903C21.4521 12.325 20.9731 12.682 20.5951 12.963L20.3671 13.135L20.3651 13.136C20.2151 13.25 20.0241 13.396 19.8211 13.511C19.573 13.6604 19.2905 13.7427 19.0011 13.75C18.6661 13.75 18.3831 13.627 18.1791 13.511C17.9898 13.3984 17.8084 13.2731 17.6361 13.136L17.6341 13.135C17.5641 13.081 17.4871 13.025 17.4061 12.964C17.0271 12.682 16.5481 12.325 16.1611 11.904C15.6641 11.362 15.2511 10.648 15.2511 9.7C15.2511 8.7 15.8341 7.825 16.6901 7.447ZM16.7511 9.7C16.7511 9.288 16.9911 8.955 17.2981 8.819C17.5651 8.701 17.9881 8.689 18.4691 9.172C18.5388 9.24215 18.6216 9.29781 18.7129 9.3358C18.8043 9.37379 18.9022 9.39334 19.0011 9.39334C19.0999 9.39334 19.1979 9.37379 19.2892 9.3358C19.3805 9.29781 19.4634 9.24215 19.5331 9.172C20.0131 8.689 20.4381 8.701 20.7031 8.819C20.8694 8.89735 21.0096 9.02207 21.1069 9.17817C21.2041 9.33428 21.2541 9.51513 21.2511 9.699C21.2511 10.164 21.0621 10.532 20.7351 10.889C20.4531 11.197 20.1171 11.448 19.7451 11.726L19.4581 11.942C19.3388 12.0379 19.2136 12.1261 19.0831 12.206C19.0568 12.2214 19.0294 12.2348 19.0011 12.246C18.9727 12.2348 18.9453 12.2214 18.9191 12.206C18.8191 12.15 18.7071 12.066 18.5451 11.942L18.2571 11.726C17.8851 11.448 17.5491 11.196 17.2671 10.889C16.9401 10.532 16.7511 10.165 16.7511 9.7Z" fill="white"/>
                          </svg>
                      </div>

                      <div class="col-lg-10">
                      <P class="white-color fw-600 mb-1">In Person</P>
                      <P class="white-color">4224 E 10 Mile Rd,</br> Warren, MI 48091</P>
                      </div>
                      </div>
                  </div>

                  <div class="col-lg-8">
                      <div class="row pt-50">

                      <div class="col-lg-1">
                           <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M2.718 1.092C3.944 -0.199001 5.972 0.0419995 6.986 1.476L8.246 3.26C9.057 4.407 8.989 6 8.021 7.02L7.776 7.277C7.77531 7.27899 7.77464 7.28099 7.774 7.283C7.761 7.319 7.729 7.435 7.761 7.655C7.828 8.11 8.179 9.036 9.607 10.539C11.039 12.047 11.907 12.402 12.31 12.468C12.4071 12.4898 12.508 12.4874 12.604 12.461L13.012 12.031C13.886 11.111 15.248 10.93 16.347 11.562L18.257 12.662C19.89 13.602 20.27 15.901 18.965 17.275L17.545 18.77C17.102 19.237 16.497 19.636 15.75 19.71C13.926 19.89 9.701 19.655 5.272 14.991C1.138 10.64 0.353001 6.855 0.254001 5.006C0.205001 4.092 0.612001 3.309 1.148 2.744L2.718 1.092ZM5.761 2.342C5.249 1.618 4.328 1.574 3.805 2.125L2.235 3.777C1.905 4.127 1.73 4.527 1.752 4.926C1.832 6.436 2.483 9.878 6.359 13.958C10.423 18.238 14.168 18.358 15.603 18.217C15.886 18.189 16.178 18.031 16.457 17.737L17.877 16.242C18.491 15.596 18.33 14.434 17.509 13.962L15.599 12.862C15.086 12.567 14.485 12.658 14.1 13.064L13.644 13.544L13.117 13.043C13.644 13.543 13.644 13.544 13.643 13.545L13.642 13.546L13.639 13.55L13.632 13.556L13.618 13.57C13.576 13.6112 13.5305 13.6487 13.482 13.682C13.402 13.738 13.296 13.801 13.161 13.854C12.885 13.963 12.521 14.021 12.07 13.948C11.192 13.806 10.042 13.175 8.52 11.572C6.992 9.964 6.407 8.765 6.277 7.872C6.21 7.418 6.263 7.055 6.361 6.78C6.4154 6.62675 6.49296 6.48274 6.591 6.353L6.621 6.316L6.635 6.301L6.641 6.294L6.644 6.291L6.646 6.29C6.646 6.29 6.646 6.288 7.179 6.793L6.647 6.288L6.934 5.986C7.379 5.517 7.444 4.723 7.022 4.126L5.761 2.342Z" fill="white"/>
                          </svg>
                      </div>

                      <div class="col-lg-11">
                         <P class="white-color fw-600 mb-1">By Phone</P>
                         <P class="white-color">586-756-6351</P>
                         <P class="fw-600 mt-2 ms-5">Book your appointment</P>
                      </div>

                      </div>
                  </div>
                  </div>
              </div>
          </div>
        </div>
      </section>



      <section class="py-5">
        <div class="container-fluid block-padding py-5">
            <div class="row">
              <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="d-flex align-items-center h-100">
                  <div>
                    <div class="fs-16 dark-color-1 fw-bold mb-3">All Insurance Welcome & Maximized!</div>
                    <h5 class="fs-40 fw-bold dark-color-1 mb-4">
                    Book an appointment
                    </h5>
                    <div class="bg-gray-2 rounded-4 p-4 w-fit">
                      <div class="fs-16 dark-color-1 mb-1">Warren Laser Dentistry</div>
                      <div class="fs-16 dark-color-1 mb-1">4224 E 10 Mile Rd, Warren, MI 48091</div>
                      <div>
                        <a href="tel:+(586) 756-6351" class="text-decoration-underline dark-color-1">(586) 756-6351</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="rounded-4 bg-gray-2 ps-5 py-4 pe-4">
                  <div class="fs-18 dark-color-1 fw-600 mb-4">Who is this appointment for?</div>
                  <form action="#" class="row">
                    <div class="col-lg-12 mb-3">
                      <div class="fs-16 dark-color-1">Patient name (required)</div>
                    </div>
                    <div class="col-lg-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="firstName" class="form-control custom-input" placeholder="First name"/>
                      </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="lastName" class="form-control custom-input" placeholder="Last name"/>
                      </div>
                    </div>
                    <div class="col-lg-12 mb-2">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label fs-16 dark-color-1" for="flexCheckDefault">
                          I'm booking for someone else
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-12 mt-4 mb-3">
                      <div class="fs-16 dark-color-1">Have you visited us before?</div>
                    </div>
                    <div class="col-lg-6 mb-3">
                      <input type="radio" class="btn-check" name="patient-status" id="new-patient" autocomplete="off" checked>
                      <label class="btn btn-outline-success blue w-100" for="new-patient">New Patient</label>
                    </div>
                    <div class="col-lg-6 mb-3">
                      <input type="radio" class="btn-check" name="patient-status" id="returning-patient" autocomplete="off">
                      <label class="btn btn-outline-secondary w-100" for="returning-patient">Returning Patient</label>
                    </div>
                    <div class="col-lg-12 mt-4 text-end">
                    <a href="#" class="btn-main-blue w-fit ms-auto">Next</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </section>


  <section>
        <div class="footer-top">
            <div class="footer-card light">
                <div class="text-center">
                    <a href="/dental-implants" class="fs-24 fw-600 blue-color">
                        <span class="me-2">Dental Implants</span>
                        <span>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#05395B"/>
                            </svg>
                        </span>
                    </a>
                    <p class="fs-16 blue-color mb-0 mt-4">
                    Eat, Chew & Smile Naturally Again! Dental implants look & feel like your own teeth. With a secure fit, you can finally eat what you want again!
                    </p>
                </div>
            </div>
            <div class="footer-card dark">
                <div class="text-center">
                    <a href="/invisalign" class="fs-24 fw-600 white-color">
                        <span class="me-2">Invisalign® Clear Braces</span>
                        <span>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#ffffff"/>
                            </svg>
                        </span>
                    </a>
                    <p class="fs-16 white-color mb-0 mt-4">
                    Invisalign® is the revolutionary way to help you get even, straight teeth without noticeable, painful metal braces.
                    </p>
                </div>
            </div>
            <div class="footer-card light">
                <div class="text-center">
                    <a href="/veneers" class="fs-24 fw-600 blue-color">
                        <span class="me-2">Reshape & Whiten Your Smile With Veneers</span>
                        <span>
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#05395B"/>
                            </svg>
                        </span>
                    </a>
                    <p class="fs-16 blue-color mb-0 mt-4">
                    Fix discolored, chipped or crooked teeth quickly & easily with natural-looking veneers.
                    </p>
                </div>
            </div>
        </div>
  </section>

    @include('include.footer')
    </body>
</html>
