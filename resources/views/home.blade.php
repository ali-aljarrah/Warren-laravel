@include('include.head')
    <title>Dentist Warren MI | General & Cosmetic | Best Dentist in Warren MI</title>
    <meta name="description" content="As your Warren dentist, we offer comprehensive dental care, from routine hygiene to expert cosmetic & restorative dentistry. ☎️ 586-756-6351">
    <link rel="canonical" href="{{env('APP_URL')}}">
    <meta property="og:title" content="Dentist Warren MI | General & Cosmetic | Best Dentist in Warren MI">
    <meta property="og:description" content="As your Warren dentist, we offer comprehensive dental care, from routine hygiene to expert cosmetic & restorative dentistry. ☎️ 586-756-6351">

    <link rel="preload" as="style" onload='this.rel="stylesheet"' href="{{asset('/assets/css/owl.carousel.min.css')}}"/>
    <link rel="preload" href="{{asset('/assets/imgs/home/Rectangle.webp')}}" as="image">
    </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="py-3">
      <div class="container-fluid block-padding">
        <div class="row">
          <div class="col-lg-12 mb-4 mb-lg-0">
            <div class="mt-2">
              <h1 class="dark-color-1 fs-48 fw-bold mb-4 text-center">
                  Experience the difference of truly personal care!
              </h1>
              <div class="text-center">
                 <img class="img-fluid" width="1331" height="473" src="{{asset('/assets/imgs/home/Rectangle.webp')}}" alt="WARREN - Experience the difference of truly personal care!">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container py-0 py-lg-5">
        <div class="row">
          <div class="col-lg-3 d-none d-lg-block">
            <div class="card-cyan bg-cyan rounded-4 bg-img4 p-3 h-390 mx-0 mx-lg-4 lazybg">
              <div class="fs-36 fw-bold dark-color-1">
                  Free
              </div>
              <p class="fs-14 dark-color-1 fw-bold mb-0">
                  Cleaning & Exam for Children
              </p>
            </div>
          </div>
          <div class="col-lg-6 mx-auto">
              <h2 class="fs-36 fw-bold dark-color-1 mb-2 mt-3 text-center">
                  We love your insurance.
              </h2>
              <p class="mb-0 fs-16 dark-color-1 text-center">
                  Most insured patients pay nothing out of pocket for services below:
              </p>
              <div class="row mt-5">
                <div class="col-md-4 mb-4 mb-md-0 bg-cyan rounded-4 bg-col-home bg-img2 p-3 h-310 mt-2 lazybg">
                    <div class="fs-36 fw-bold dark-color-1">
                        Free
                    </div>
                    <p class="fs-14 dark-color-1 fw-bold mb-0">
                        Brighter, Whiter Cleaning for Adults
                    </p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0 d-flex align-items-end mt-2">
                  <div class="fs-12 dark-color-1 bg-white rounded-4 px-3 py-4 box-sh w-100">
                       Appointment available after work or school & on Saturdays.
                  </div>
                </div>
                <div class="col-md-4 bg-cyan rounded-4 bg-col-home bg-img3 p-3 h-310 mt-2 lazybg">
                    <div class="fs-36 fw-bold dark-color-1">
                       Free
                   </div>
                   <p class="fs-14 dark-color-1 fw-bold mb-0">
                       Second Opinion Evaluation
                   </p>
                </div>
              </div>
          </div>
          <div class="col-lg-3 d-none d-lg-block">
              <div class="card-cyan bg-cyan rounded-4 bg-col-home bg-img1 p-3 h-390 mx-0 mx-lg-4 mt-2 lazybg">
                  <div class="fs-36 fw-bold dark-color-1">
                      Free
                  </div>
                  <p class="fs-14 dark-color-1 fw-bold mb-0">
                      Cleaning & Exam for Children
                  </p>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-4 bg-gray-2">
      <div class="container-fluid pt-5 block-padding">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0 flex-grow-1">
                <div class="h-100 d-flex flex-column justify-content-center">
                    <div>
                        <h3 class="fs-36 dark-color-1 fw-bold mb-3">
                            New Patient Special
                        </h3>
                        <p class="fs-14 dark-color-1">
                           We're thrilled to welcome you with open arms and a special offer tailored just for you. Experience the highest standard of dental care while enjoying fantastic savings as a new patient.
                        </p>
                    </div>
                    <div class="row my-5">
                        <div class="col-lg-4 mb-4 mb-lg-0 flex-grow-1">
                            <div class="bg-dark-blue p-4 rounded-4 h-100 shadow d-flex flex-column justify-content-center">
                                <div class="fs-26 white-color-1 fw-600">
                                    $95
                                </div>
                                <p class="fs-16 white-color-1 mb-0">
                                    Cleaning, Exam & X-Rays
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0 flex-grow-1">
                            <div class="bg-cyan p-4 rounded-4 h-100 shadow d-flex flex-column justify-content-center">
                                <div class="fs-26 dark-color-1 fw-600">
                                    $150/Quad
                                </div>
                                <p class="fs-16 dark-color-1 mb-0">
                                    Deep Cleaning, Exam & X-Rays
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 mb-4 mb-lg-0 flex-grow-1">
                            <a href="{{route('offers')}}" class="text-decoration-none">
                                <div class="bg-white-1 p-4 rounded-4 h-100 shadow d-flex flex-column justify-content-center">
                                    <div class="mb-3 text-center">
                                        <svg width="73" height="73" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="36.297" cy="36.3322" r="34.4757" stroke="black" stroke-width="2.69251"/>
                                            <path d="M50.9853 21.8448C50.9853 20.8534 50.1816 20.0497 49.1903 20.0497L33.0352 20.0497C32.0439 20.0497 31.2402 20.8534 31.2402 21.8448C31.2402 22.8361 32.0439 23.6398 33.0352 23.6398L47.3953 23.6398L47.3953 37.9998C47.3953 38.9912 48.1989 39.7948 49.1903 39.7948C50.1816 39.7948 50.9853 38.9912 50.9853 37.9998L50.9853 21.8448ZM21.2282 52.3453L50.4595 23.114L47.921 20.5755L18.6897 49.8068L21.2282 52.3453Z" fill="black"/>
                                        </svg>
                                    </div>
                                    <p class="fs-16 dark-color-1 mb-0">
                                        Find out more
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <p class="fs-12 dark-color-1 mb-0">
                        *Subject to change | Limited time offer | Cannot combine with dental insurance
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center text-lg-end">
                    <img class="img-fluid" loading="lazy" width="450" height="570" src="{{asset('/assets/imgs/home/img-13.webp')}}" alt="Warren - New Patient Special">
                </div>
            </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container-fluid block-padding">
        <div class="row">
          <div class="col-lg-3 col-sm-12 mb-lg-0 p-3">
              <p class="fs-16 fw-bold dark-color-1">
                  Top Dentist in Warren MI
              </p>
              <h4 class="fs-24 fw-bold dark-color-1">
                   Welcome to Warren Laser Dentistry!
              </h4>
          </div>
          <div class="col-lg-3 col-sm-12 mb-lg-0 p-3">
              <p class="fs-12 dark-color-1 mb-0">
                  At Warren Laser Dentistry, we have extensive experience in all aspects of modern dentistry. We offer<span class="under-txt"> Comprehensive Dental Care</span>, including everything from the<span class="under-txt"> Preventive Education</span> &<span class="under-txt"> Routine Hygiene</span> that help to reduce dental problems to expert<span class="under-txt"> Cosmetic & Restorative</span> solutions for the dental issues our patients face.
              </p>
          </div>
          <div class="col-lg-3 col-sm-12 mb-lg-0 p-3">
              <p class="fs-12 dark-color-1 mb-0">
                  This website is intended to provide you with basic information about our practice & the dental services we provide. If you would like to find out more about Warren Laser Dentistry or the care we provide, please <span class="under-txt"> Book Your Appointment</span> online or call us at <span class="under-txt"> 586-756-6351</span>.
              </p>
          </div>
          <div class="col-lg-3 col-sm-12 mb-lg-0 p-3">
              <p class="fs-12 dark-color-1 mb-0">
                  From routine checkups to cosmetic & restorative care, Warren Laser Dentistry is your neighborhood headquarters for all things dental. We look forward to providing you & your family with the dental excellence you deserve.
              </p>
          </div>
        </div>
      </div>
    </section>

    <section class="pb-5">
      <div class="container-fluid block-padding my-5">
        <div class="row">
          <div class="col-12">
            <div class="d-flex justify-content-center align-items-center">
                @include('components.video-youtube')
            </div>
            <div class="mt-5 text-center fs-14 dark-color-1 fw-bold">
            Appointment available after work or school & on Saturdays.
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mb-4 mb-l-0">
            <img class="img-fluid" loading="lazy" width="507" height="501" src="{{asset('/assets/imgs/home/img-6.webp')}}" alt="Warren Laser Dentistry - The best in benefits">
          </div>
          <div class="col-lg-5">
            <div>
              <h5 class="dark-color-2 fs-50 fw-bold fs-50 mb-5">The best in benefits</h5>
              <div class="mb-5">
                <div class="d-flex align-items-center mb-1">
                  <div class="me-2">
                    <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M27.0032 20.3856C27.8867 19.9184 28.6261 19.219 29.1419 18.3629C29.6576 17.5068 29.9301 16.5262 29.9301 15.5267C29.9301 14.5272 29.6576 13.5467 29.1419 12.6905C28.6261 11.8344 27.8867 11.1351 27.0032 10.6678C27.2977 9.71271 27.3262 8.69538 27.0856 7.72528C26.845 6.75518 26.3445 5.86904 25.6378 5.1622C24.9312 4.45537 24.0452 3.95459 23.0751 3.71375C22.1051 3.47292 21.0877 3.50114 20.1326 3.79538C19.6655 2.91138 18.9661 2.17152 18.1098 1.65547C17.2534 1.13941 16.2726 0.866699 15.2727 0.866699C14.2729 0.866699 13.2921 1.13941 12.4357 1.65547C11.5794 2.17152 10.88 2.91138 10.4129 3.79538C9.45783 3.50089 8.44049 3.47239 7.47039 3.71297C6.5003 3.95355 5.61416 4.45409 4.90732 5.16073C4.20048 5.86738 3.69971 6.75339 3.45887 7.72342C3.21804 8.69346 3.24626 9.7108 3.5405 10.666C2.6565 11.1331 1.91664 11.8324 1.40058 12.6888C0.884526 13.5451 0.611816 14.526 0.611816 15.5258C0.611816 16.5256 0.884526 17.5065 1.40058 18.3628C1.91664 19.2192 2.6565 19.9185 3.5405 20.3856C3.246 21.3407 3.21751 22.3581 3.45809 23.3282C3.69866 24.2983 4.1992 25.1844 4.90585 25.8912C5.6125 26.5981 6.49851 27.0988 7.46854 27.3397C8.43857 27.5805 9.45592 27.5523 10.4111 27.2581C10.8782 28.1421 11.5776 28.8819 12.4339 29.398C13.2902 29.914 14.2711 30.1867 15.2709 30.1867C16.2707 30.1867 17.2516 29.914 18.1079 29.398C18.9643 28.8819 19.6636 28.1421 20.1307 27.2581C21.0858 27.5525 22.1032 27.581 23.0733 27.3405C24.0434 27.0999 24.9295 26.5993 25.6363 25.8927C26.3432 25.1861 26.844 24.3 27.0848 23.33C27.3256 22.36 27.2974 21.3408 27.0032 20.3856ZM22.3385 12.2142C22.4447 12.0681 22.5211 11.9026 22.5634 11.727C22.6056 11.5514 22.6129 11.3692 22.5847 11.1909C22.5566 11.0125 22.4936 10.8414 22.3993 10.6874C22.305 10.5333 22.1813 10.3994 22.0353 10.2931C21.8892 10.1869 21.7237 10.1105 21.5481 10.0682C21.3725 10.026 21.1903 10.0187 21.0119 10.0469C20.8336 10.0751 20.6625 10.1381 20.5084 10.2324C20.3544 10.3266 20.2205 10.4503 20.1142 10.5964L13.7328 19.3724L10.2884 15.928C10.1615 15.7968 10.0099 15.6922 9.84217 15.6202C9.67449 15.5483 9.49416 15.5105 9.31171 15.509C9.12925 15.5075 8.94833 15.5423 8.77949 15.6115C8.61064 15.6807 8.45727 15.7828 8.32831 15.9119C8.19935 16.0409 8.09739 16.1944 8.02838 16.3633C7.95937 16.5322 7.92468 16.7132 7.92636 16.8956C7.92803 17.0781 7.96602 17.2584 8.03811 17.426C8.11021 17.5936 8.21496 17.7452 8.34626 17.8719L12.9267 22.4523C13.0671 22.5928 13.2362 22.7011 13.4225 22.7699C13.6088 22.8387 13.8078 22.8663 14.0058 22.8509C14.2038 22.8354 14.3961 22.7771 14.5694 22.6802C14.7428 22.5832 14.893 22.4498 15.0098 22.2892L22.3385 12.2123V12.2142Z" fill="#05395B"/>
                    </svg>
                  </div>
                  <div class="fs-18 dark-color fw-600">Braces can give you a perfect smile!</div>
                </div>
                <div class="fs-16 dark-color">
                We are proud to offer a range of orthodontics options for our patients. • Invisalign • Traditional Braces
                </div>
              </div>
              <div class="mb-5">
                <div class="d-flex align-items-center mb-1">
                  <div class="me-2">
                    <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M27.0032 20.3856C27.8867 19.9184 28.6261 19.219 29.1419 18.3629C29.6576 17.5068 29.9301 16.5262 29.9301 15.5267C29.9301 14.5272 29.6576 13.5467 29.1419 12.6905C28.6261 11.8344 27.8867 11.1351 27.0032 10.6678C27.2977 9.71271 27.3262 8.69538 27.0856 7.72528C26.845 6.75518 26.3445 5.86904 25.6378 5.1622C24.9312 4.45537 24.0452 3.95459 23.0751 3.71375C22.1051 3.47292 21.0877 3.50114 20.1326 3.79538C19.6655 2.91138 18.9661 2.17152 18.1098 1.65547C17.2534 1.13941 16.2726 0.866699 15.2727 0.866699C14.2729 0.866699 13.2921 1.13941 12.4357 1.65547C11.5794 2.17152 10.88 2.91138 10.4129 3.79538C9.45783 3.50089 8.44049 3.47239 7.47039 3.71297C6.5003 3.95355 5.61416 4.45409 4.90732 5.16073C4.20048 5.86738 3.69971 6.75339 3.45887 7.72342C3.21804 8.69346 3.24626 9.7108 3.5405 10.666C2.6565 11.1331 1.91664 11.8324 1.40058 12.6888C0.884526 13.5451 0.611816 14.526 0.611816 15.5258C0.611816 16.5256 0.884526 17.5065 1.40058 18.3628C1.91664 19.2192 2.6565 19.9185 3.5405 20.3856C3.246 21.3407 3.21751 22.3581 3.45809 23.3282C3.69866 24.2983 4.1992 25.1844 4.90585 25.8912C5.6125 26.5981 6.49851 27.0988 7.46854 27.3397C8.43857 27.5805 9.45592 27.5523 10.4111 27.2581C10.8782 28.1421 11.5776 28.8819 12.4339 29.398C13.2902 29.914 14.2711 30.1867 15.2709 30.1867C16.2707 30.1867 17.2516 29.914 18.1079 29.398C18.9643 28.8819 19.6636 28.1421 20.1307 27.2581C21.0858 27.5525 22.1032 27.581 23.0733 27.3405C24.0434 27.0999 24.9295 26.5993 25.6363 25.8927C26.3432 25.1861 26.844 24.3 27.0848 23.33C27.3256 22.36 27.2974 21.3408 27.0032 20.3856ZM22.3385 12.2142C22.4447 12.0681 22.5211 11.9026 22.5634 11.727C22.6056 11.5514 22.6129 11.3692 22.5847 11.1909C22.5566 11.0125 22.4936 10.8414 22.3993 10.6874C22.305 10.5333 22.1813 10.3994 22.0353 10.2931C21.8892 10.1869 21.7237 10.1105 21.5481 10.0682C21.3725 10.026 21.1903 10.0187 21.0119 10.0469C20.8336 10.0751 20.6625 10.1381 20.5084 10.2324C20.3544 10.3266 20.2205 10.4503 20.1142 10.5964L13.7328 19.3724L10.2884 15.928C10.1615 15.7968 10.0099 15.6922 9.84217 15.6202C9.67449 15.5483 9.49416 15.5105 9.31171 15.509C9.12925 15.5075 8.94833 15.5423 8.77949 15.6115C8.61064 15.6807 8.45727 15.7828 8.32831 15.9119C8.19935 16.0409 8.09739 16.1944 8.02838 16.3633C7.95937 16.5322 7.92468 16.7132 7.92636 16.8956C7.92803 17.0781 7.96602 17.2584 8.03811 17.426C8.11021 17.5936 8.21496 17.7452 8.34626 17.8719L12.9267 22.4523C13.0671 22.5928 13.2362 22.7011 13.4225 22.7699C13.6088 22.8387 13.8078 22.8663 14.0058 22.8509C14.2038 22.8354 14.3961 22.7771 14.5694 22.6802C14.7428 22.5832 14.893 22.4498 15.0098 22.2892L22.3385 12.2123V12.2142Z" fill="#05395B"/>
                    </svg>
                  </div>
                  <div class="fs-18 dark-color fw-600">“I'm wearing braces!”</div>
                </div>
                <div class="fs-16 dark-color">
                If you’re looking for a straight smile without the metal-mouth, clear aligners may be the solution. Get the beautiful smile you’ve always wanted—­ without the metal-mouth!
                </div>
              </div>
              <div class="mb-5">
                <div class="d-flex align-items-center mb-1">
                  <div class="me-2">
                    <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M27.0032 20.3856C27.8867 19.9184 28.6261 19.219 29.1419 18.3629C29.6576 17.5068 29.9301 16.5262 29.9301 15.5267C29.9301 14.5272 29.6576 13.5467 29.1419 12.6905C28.6261 11.8344 27.8867 11.1351 27.0032 10.6678C27.2977 9.71271 27.3262 8.69538 27.0856 7.72528C26.845 6.75518 26.3445 5.86904 25.6378 5.1622C24.9312 4.45537 24.0452 3.95459 23.0751 3.71375C22.1051 3.47292 21.0877 3.50114 20.1326 3.79538C19.6655 2.91138 18.9661 2.17152 18.1098 1.65547C17.2534 1.13941 16.2726 0.866699 15.2727 0.866699C14.2729 0.866699 13.2921 1.13941 12.4357 1.65547C11.5794 2.17152 10.88 2.91138 10.4129 3.79538C9.45783 3.50089 8.44049 3.47239 7.47039 3.71297C6.5003 3.95355 5.61416 4.45409 4.90732 5.16073C4.20048 5.86738 3.69971 6.75339 3.45887 7.72342C3.21804 8.69346 3.24626 9.7108 3.5405 10.666C2.6565 11.1331 1.91664 11.8324 1.40058 12.6888C0.884526 13.5451 0.611816 14.526 0.611816 15.5258C0.611816 16.5256 0.884526 17.5065 1.40058 18.3628C1.91664 19.2192 2.6565 19.9185 3.5405 20.3856C3.246 21.3407 3.21751 22.3581 3.45809 23.3282C3.69866 24.2983 4.1992 25.1844 4.90585 25.8912C5.6125 26.5981 6.49851 27.0988 7.46854 27.3397C8.43857 27.5805 9.45592 27.5523 10.4111 27.2581C10.8782 28.1421 11.5776 28.8819 12.4339 29.398C13.2902 29.914 14.2711 30.1867 15.2709 30.1867C16.2707 30.1867 17.2516 29.914 18.1079 29.398C18.9643 28.8819 19.6636 28.1421 20.1307 27.2581C21.0858 27.5525 22.1032 27.581 23.0733 27.3405C24.0434 27.0999 24.9295 26.5993 25.6363 25.8927C26.3432 25.1861 26.844 24.3 27.0848 23.33C27.3256 22.36 27.2974 21.3408 27.0032 20.3856ZM22.3385 12.2142C22.4447 12.0681 22.5211 11.9026 22.5634 11.727C22.6056 11.5514 22.6129 11.3692 22.5847 11.1909C22.5566 11.0125 22.4936 10.8414 22.3993 10.6874C22.305 10.5333 22.1813 10.3994 22.0353 10.2931C21.8892 10.1869 21.7237 10.1105 21.5481 10.0682C21.3725 10.026 21.1903 10.0187 21.0119 10.0469C20.8336 10.0751 20.6625 10.1381 20.5084 10.2324C20.3544 10.3266 20.2205 10.4503 20.1142 10.5964L13.7328 19.3724L10.2884 15.928C10.1615 15.7968 10.0099 15.6922 9.84217 15.6202C9.67449 15.5483 9.49416 15.5105 9.31171 15.509C9.12925 15.5075 8.94833 15.5423 8.77949 15.6115C8.61064 15.6807 8.45727 15.7828 8.32831 15.9119C8.19935 16.0409 8.09739 16.1944 8.02838 16.3633C7.95937 16.5322 7.92468 16.7132 7.92636 16.8956C7.92803 17.0781 7.96602 17.2584 8.03811 17.426C8.11021 17.5936 8.21496 17.7452 8.34626 17.8719L12.9267 22.4523C13.0671 22.5928 13.2362 22.7011 13.4225 22.7699C13.6088 22.8387 13.8078 22.8663 14.0058 22.8509C14.2038 22.8354 14.3961 22.7771 14.5694 22.6802C14.7428 22.5832 14.893 22.4498 15.0098 22.2892L22.3385 12.2123V12.2142Z" fill="#05395B"/>
                    </svg>
                  </div>
                  <div class="fs-18 dark-color fw-600">More comfortable dentistry has arrived!</div>
                </div>
                <div class="fs-16 dark-color">
                We use the latest in laser technology: No Drills or Needles. Virtually Painless. Anesthesia Rarely Needed.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark-blue">
        <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row h-100">
          <div class="bg-rounded-cyan after position-relative w-100 px-4 py-5 text-center h-100">
            <h6 class="fs-24 fw-bold blue-color line-120">Experience the Difference of Truly <br/>Personal Dental Care!</h6>
          </div>
          <div class="bg-dark-blue w-100 px-4 py-5 text-center h-100">
            <h6 class="fs-24 fw-bold white-color line-120">A Renewed Focus on Care & Convenience <br/>for Your Whole Family!</h6>
          </div>
        </div>
    </section>

    <section class="bg-cyan position-relative text-center">
      <div class="float-label shadow">
        <div class="fw-600 fs-65 dark-color line-95">+ 20K</div>
        <div class="fw-600 fs-24 dark-color">Happy Clients</div>
      </div>
      <img loading="lazy" width="1531" height="791" class="img-fluid" src="{{asset('/assets/imgs/home/img-7.webp')}}" alt="Warren - Always satisfied and happy">
    </section>

    @if (count($reviews) > 0)
        <section class="py-5 bg-dark-blue-img d-flex align-items-center overflow-hidden">
        <div class="coursal-wrapper">
            <div class="content">
                <div class="fs-24 black-color fw-600">Clients Testimonials</div>
                <div class="d-flex align-items-center mt-0 mt-lg-4">
                    <div class="me-4">
                        <a href="#" id="carousal-prev">
                            <svg width="16" height="28" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.0933 25.4448L1.81632 13.9541L14.0933 2.46338" stroke="#9E9E9E" stroke-width="3.34439" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <a href="#" id="carousal-next">
                            <svg width="16" height="28" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.73755 25.4448L14.0145 13.9541L1.73755 2.46338" stroke="#05395B" stroke-width="3.34439" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="ms-0 ms-lg-5 w-100">
                <div class="owl-carousel owl-theme">
                    @foreach ($reviews as $review)
                        <div class="item me-4">
                            <div class="carousal-card">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="me-3">
                                        <img class="img-fluid" loading="lazy" width="53" height="53" style="max-width: 53px; max-height: 53px;" src="{{$review['profile_photo_url']}}" alt="Warren - {{$review['author_name']}}">
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
                                    {!! Str::limit($review['text'], 150, '...') !!}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </section>
    @endif

    <section class="py-5 my-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0 text-center">
            <img class="img-fluid" loading="lazy" width="508" height="320" src="{{asset('/assets/imgs/home/img-9.webp')}}" alt="We pride ourselves on not being just like every other dentist in Warren.">
          </div>
          <div class="col-lg-6 flex-grow-1">
            <div class="d-flex flex-column justify-content-center h-100">
              <div class="fs-12 fw-bold blue-color mb-2 text-uppercase">Trusted Part of the Community</div>
              <h6 class="fw-bold line-120 dark-color fs-28 mb-3">We pride ourselves on not being just like every other dentist in Warren.</h6>
              <p class="fs-16 dark-color">
              Our dedication to the community goes beyond just caring for teeth. We view ourselves as part of a vital network of caretakers who look after the health & well-being of our friends & neighbors in Warren & the surrounding communities. Warren Laser Dentistry is locally owned & part of a tradition of exceptional general dentistry.
              </p>
              <div>
                <a href="{{route('patient-education')}}" class="btn-main-blue w-fit me-auto">Patient Education</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 my-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 flex-grow-1">
            <div class="d-flex flex-column justify-content-center h-100">
              <div class="fs-12 fw-bold blue-color mb-2 text-uppercase">Dental Implants</div>
              <h6 class="fw-bold line-120 dark-color fs-28 mb-3">Eat, Chew & Smile Naturally Again!</h6>
              <p class="fs-16 dark-color">
              Dental implants look & feel like your own teeth. With a secure fit, you can finally eat what you want again! The biggest advantage implants have over dentures is that they’re permanent. Unlike removable dentures or partial dentures, implants do not involve messy adhesives or false teeth getting in the way of speech or eating. Also, because they’re permanent, implants will always be a perfect fit, unlike dentures which may need to be refitted or replaced over time.
              </p>
              <div>
                <a href= "{{route('dental-implants')}}" class="btn-main-blue w-fit me-auto">Dental Implants</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0 text-center">
            <img class="img-fluid" loading="lazy" width="508" height="320" src="{{asset('/assets/imgs/home/img-10.webp')}}" alt="Eat, Chew & Smile Naturally Again!">
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 my-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0 text-center">
            <img class="img-fluid" loading="lazy" width="508" height="320" src="{{asset('/assets/imgs/home/img-11.webp')}}" alt="A New Level of Respect for You & Your Family">
          </div>
          <div class="col-lg-6 flex-grow-1">
            <div class="d-flex flex-column justify-content-center h-100">
              <div class="fs-12 fw-bold blue-color mb-2 text-uppercase">We Love Kids & Families!</div>
              <h6 class="fw-bold line-120 dark-color fs-28 mb-3">A New Level of Respect for You & Your Family</h6>
              <p class="fs-16 dark-color">
              Warren Laser Dentistry is a team of caring, experienced dental professionals who use only the most advanced technologies, materials & procedures & whose primary focus is on comfortable, health-centered dentistry. At our community focused practice, your comfort & satisfaction come first. We look forward to meeting you soon & developing a relationship with you to build the bridge toward long-term trust & successful dental care. Warren Laser Dentistry invites you to see why our patients can’t stop smiling!
              </p>
              <div>
                <a href="{{route('patient-information')}}" class="btn-main-blue w-fit me-auto">Patient Information</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 my-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 flex-grow-1">
            <div class="d-flex flex-column justify-content-center h-100">
              <div class="fs-12 fw-bold blue-color mb-2 text-uppercase">TEETH CLEANINGs</div>
              <h6 class="fw-bold line-120 dark-color fs-28 mb-3">Healthy Gums Lead to a Healthy Body</h6>
              <p class="fs-16 dark-color">
              Research has linked gum disease to health problems like diabetes, heart disease & low birth weight. Call today for your dental cleaning!
              </p>
              <p class="fs-16 dark-color">
              We practice dentistry for your entire family. From preventive education & regular hygiene to identifying & caring for dental issues that may arise, your continued oral health is our top priority. We believe in preventing dental problems before they become costly, painful, or both. When problems do arise, our skilled team is there to provide you with solutions.
              </p>
              <div>
                <a href="{{route('dental-implants')}}" class="btn-main-blue w-fit me-auto">Dental Implants</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0 text-center">
            <img class="img-fluid" loading="lazy" width="508" height="320" src="{{asset('/assets/imgs/home/img-12.webp')}}" alt="Healthy Gums Lead to a Healthy Body">
          </div>
        </div>
      </div>
    </section>

    @include('components.book-appointment-section')

    <section class="bg-gray-2 py-5">
      <div class="container-fluid block-padding py-5">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="fs-18 dark-color-1 fw-600 mb-4">Dental Services &amp; Procedures</div>
            <div class="d-flex flex-wrap">
              <a href="{{route('emergency-dentistry')}}" class="text-decoration-none blue-color">
                <div class="d-flex justify-content-start align-items-center p-3 rounded-5 border border-1 me-3 mb-3">
                  <span class="fs-16 fw-bold me-5">
                  Emergency Dentistry
                  </span>
                  <span class="ps-3">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#121212"></path>
                    </svg>
                  </span>
                </div>
              </a>
              <a href="{{route('general-dentist')}}" class="text-decoration-none blue-color">
                <div class="d-flex justify-content-start align-items-center p-3 rounded-5 border border-1 me-3 mb-3">
                  <span class="fs-16 fw-bold me-5">
                  General Dentistry
                  </span>
                  <span class="ps-3">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#121212"></path>
                    </svg>
                  </span>
                </div>
              </a>
              <a href="{{route('cosmetic-dentistry')}}" class="text-decoration-none blue-color">
                <div class="d-flex justify-content-start align-items-center p-3 rounded-5 border border-1 me-3 mb-3">
                  <span class="fs-16 fw-bold me-5">
                  Cosmetic Dentistry
                  </span>
                  <span class="ps-3">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#121212"></path>
                    </svg>
                  </span>
                </div>
              </a>
              <a href="{{route('childrens-dentistry')}}" class="text-decoration-none blue-color">
                <div class="d-flex justify-content-start align-items-center p-3 rounded-5 border border-1 me-3 mb-3">
                  <span class="fs-16 fw-bold me-5">
                  Children’s Dentistry
                  </span>
                  <span class="ps-3">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#121212"></path>
                    </svg>
                  </span>
                </div>
              </a>
              <a href="{{route('orthodontics')}}" class="text-decoration-none blue-color">
                <div class="d-flex justify-content-start align-items-center p-3 rounded-5 border border-1 me-3 mb-3">
                  <span class="fs-16 fw-bold me-5">
                  Orthodontics
                  </span>
                  <span class="ps-3">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#121212"></path>
                    </svg>
                  </span>
                </div>
              </a>
              <a href="{{route('oral-surgery')}}" class="text-decoration-none blue-color">
                <div class="d-flex justify-content-start align-items-center p-3 rounded-5 border border-1 me-3 mb-3">
                  <span class="fs-16 fw-bold me-5">
                  Oral Surgery
                  </span>
                  <span class="ps-3">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#121212"></path>
                    </svg>
                  </span>
                </div>
              </a>
              <a href="{{route('endodontics')}}" class="text-decoration-none blue-color">
                <div class="d-flex justify-content-start align-items-center p-3 rounded-5 border border-1 me-3 mb-3">
                  <span class="fs-16 fw-bold me-5">
                  Endodontics
                  </span>
                  <span class="ps-3">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#121212"></path>
                    </svg>
                  </span>
                </div>
              </a>
              <a href="{{route('periodontics')}}" class="text-decoration-none blue-color">
                <div class="d-flex justify-content-start align-items-center p-3 rounded-5 border border-1 me-3 mb-3">
                  <span class="fs-16 fw-bold me-5">
                  Periodontics
                  </span>
                  <span class="ps-3">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#121212"></path>
                    </svg>
                  </span>
                </div>
              </a>
              <a href="{{route('smile-gallery')}}" class="text-decoration-none blue-color">
                <div class="d-flex justify-content-start align-items-center p-3 rounded-5 border border-1 me-3 mb-3">
                  <span class="fs-16 fw-bold me-5">
                  Smile Gallery
                  </span>
                  <span class="ps-3">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#121212"></path>
                    </svg>
                  </span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
            <div class="mb-4">
              <img class="img-fluid" loading="lazy" width="239" height="76" src="{{asset('/assets/imgs/logo.webp')}}" alt="Warren Laser Dentistry - Logo">
            </div>
            <p class="fs-16 dark-color-1">
            From routine checkups to cosmetic &amp; restorative care, Warren Laser Dentistry is your neighborhood headquarters for all things dental. We look forward to providing you &amp; your family with the dental excellence you deserve.
            </p>
            <p class="fs-16 dark-color-1">
            Warren Laser Dentistry is the place to go for all of your dental needs &amp; in one convenient location. Please take your time to view &amp; read more about all the dental services that our patients can receive.
            </p>
            <p class="fs-16 dark-color-1">
            We have great hours &amp; we are proud to offer our&nbsp;patients convenient appointments&nbsp;that fit even the busiest schedules. We understand that many of our patients work or go to school full time.
            </p>
          </div>
        </div>
      </div>
    </section>

    @include('components.bottom-pages-links')

    @include('include.footer')

    <script src="{{asset('/assets/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('/assets/js/owl.carousel.min.js')}}" defer></script>
    <script src="{{asset('/assets/js/home.js')}}" defer></script>
    </body>
</html>
