@include('include.head')
    <title>Dentist Appointment Warren MI | Warren Laser Dentistry</title>
    <meta name="description" content="At Warren Laser Dentistry, we have great hours & we are proud to offer our patients convenient appointments that fit even the busiest schedules.">
    <link rel="canonical" href="https://www.URL.COM/patient-information/scheduling">
    <meta property="og:title" content="Dentist Appointment Warren MI | Warren Laser Dentistry">
    <meta property="og:description" content="At Warren Laser Dentistry, we have great hours & we are proud to offer our patients convenient appointments that fit even the busiest schedules.">

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
              <div class="col-lg-5 mt-5 mt-lg-0">
                <h1 class="fs-32 pe-5 me-5 mb-4 fw-600 blue-color">
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
              <div class="col-lg-6 sm-12 bg-white rounded-4 py-2 px-4 mb-5">
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
