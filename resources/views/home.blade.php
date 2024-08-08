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

    <section class="pt-2 pb-5">
      <div class="container-fluid block-padding">
        <div class="row">
          <div class="col-lg-12 mb-4 mb-lg-0">
            <div class="mt-2">
              <h1 class="dark-color-1 fs-48 fw-bold mb-4 text-center">
                  Experience the difference of truly personal care!
              </h1>
              <div class="home-page-banner lazybg">
                <div class="home-banner-content">
                    <h2 class="fs-40 white-color-1 fw-bold mb-2">We love your <br/>insurance.</h2>
                    <p class="fs-20 white-color-1">
                        Most insured patients pay nothing <br/>out of pocket for services below:
                    </p>
                    <div>
                        <a class="btn-main-blue w-fit me-auto rounded" href="#" data-bs-toggle="modal" data-bs-target="#appointmentModal" aria-label="Warren appointment">Book your Appointment </a>
                    </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-lg-3 mb-4 mb-lg-0 flex-grow-1">
                    <a class="hover-card-home" href="{{route('contact')}}" aria-label="Warren - Contact us">
                        <div class="mb-2">
                            <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2462_6976)">
                                    <path d="M12.59 6.2402L5.60996 1.2302C5.01996 0.860201 4.24996 0.950201 3.74996 1.4402L1.43996 3.7502C0.949957 4.2402 0.859957 5.0102 1.22996 5.6102L6.31996 12.4602" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10"/>
                                    <path d="M4.71007 48.7103L3.30007 47.3003C2.91007 46.9103 2.91007 46.2803 3.30007 45.8903L32.1801 17.0103L36.1801 16.0103L45.8901 6.30031C46.2801 5.91031 46.9101 5.91031 47.3001 6.30031L48.7101 7.71031C49.1001 8.10031 49.1001 8.73031 48.7101 9.12031L37.8301 20.0003L33.8301 21.0003L6.12007 48.7103C5.73007 49.1003 5.10007 49.1003 4.71007 48.7103Z" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M30.04 19.1298L14.85 6.46975C14.04 5.78975 12.86 5.84975 12.11 6.58975L6.59 12.1098C5.85 12.8498 5.79 14.0398 6.47 14.8498L19.12 30.0398" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10"/>
                                    <path d="M21.7 33.1304L34.32 48.2704C35.08 49.1804 36.47 49.2404 37.31 48.4004L48.41 37.3004C49.25 36.4604 49.1899 35.0704 48.2799 34.3104L33.1399 21.6904" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10"/>
                                    <path d="M35 7L40 12" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path d="M32 10L37 15" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path d="M38 4L43 9" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                                    <path d="M41 1L46 6" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_2462_6976">
                                        <rect width="50" height="50" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="fs-24 dark-color fw-600 mb-2">Free</div>
                        <div class="fs-20 dark-color mb-2">Brighter, Whiter Cleaning for Adults</div>
                        <div class="button">
                            <span class="me-2">Contact us</span>
                            <span>
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="31" height="31" rx="15.5" stroke="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 9.5C12.2347 9.5 11.9804 9.39464 11.7929 9.20711C11.6053 9.01957 11.5 8.76522 11.5 8.5C11.5 8.23478 11.6053 7.98043 11.7929 7.79289C11.9804 7.60536 12.2347 7.5 12.5 7.5H24.5C24.7652 7.5 25.0195 7.60536 25.2071 7.79289C25.3946 7.98043 25.5 8.23478 25.5 8.5V20.5C25.5 20.7652 25.3946 21.0196 25.2071 21.2071C25.0195 21.3946 24.7652 21.5 24.5 21.5C24.2347 21.5 23.9804 21.3946 23.7929 21.2071C23.6053 21.0196 23.5 20.7652 23.5 20.5V10.9133L9.20662 25.2067C9.01706 25.3833 8.76633 25.4795 8.50726 25.4749C8.24819 25.4703 8.00101 25.3654 7.8178 25.1822C7.63458 24.9989 7.52963 24.7518 7.52506 24.4927C7.52049 24.2336 7.61665 23.9829 7.79329 23.7933L22.0866 9.5H12.5Z" fill="#121212"/>
                                </svg>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0 flex-grow-1">
                    <a class="hover-card-home" href="{{route('contact')}}" aria-label="Warren - Contact us">
                        <div class="mb-2">
                            <svg width="45" height="52" viewBox="0 0 45 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2462_7004)">
                                    <path d="M25.5 2.5C23.45 2.5 20.93 3.75 17.5 3.75C14.07 3.75 11.55 2.5 9.5 2.5C7.45 2.5 1.5 4.12 1.5 11.5C1.5 18.5 4.58 21.5 5 25.5C5.39 29.23 5.49 36.14 6.8 42.78C7.71 47.38 8.36 50.5 10.07 50.5C11.78 50.5 12.21 44.9 13 40.6C13.79 36.3 14.9 30.5 17.5 30.5C20.1 30.5 21.21 36.31 22 40.6C22.79 44.9 23.21 50.5 24.93 50.5C26.65 50.5 27.29 47.38 28.2 42.78C29.51 36.14 29.61 29.23 30 25.5C30.42 21.5 33.5 18.5 33.5 11.5C33.5 4.12 27.55 2.5 25.5 2.5Z" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M20.9999 29.4997C20.1399 29.4997 19.3099 29.1297 18.7299 28.4597L9.22991 17.4597C8.31991 16.4097 8.24991 14.8597 9.06991 13.7397C9.88991 12.6097 11.3799 12.1997 12.6599 12.7397L18.4799 15.1797C21.4799 11.4097 28.9099 3.56967 40.7699 0.589667C42.2999 0.209668 43.8599 1.06967 44.3499 2.55967C44.8399 4.04967 44.0899 5.67967 42.6399 6.26967C30.6699 11.1797 23.8399 27.4697 23.7799 27.6297C23.3799 28.5897 22.5099 29.2797 21.4899 29.4497C21.3299 29.4797 21.1699 29.4897 21.0099 29.4897L20.9999 29.4997Z" fill="white"/>
                                    <path d="M19.5 18.86L11.5 15.5L21 26.5C21 26.5 28.19 8.96 41.5 3.5C26.94 7.16 19.5 18.86 19.5 18.86Z" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_2462_7004">
                                        <rect width="44" height="51" fill="white" transform="translate(0.5 0.5)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="fs-24 dark-color fw-600 mb-2">Free</div>
                        <div class="fs-20 dark-color mb-2">Brighter, Whiter Cleaning for Adults</div>
                        <div class="button">
                            <span class="me-2">Contact us</span>
                            <span>
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="31" height="31" rx="15.5" stroke="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 9.5C12.2347 9.5 11.9804 9.39464 11.7929 9.20711C11.6053 9.01957 11.5 8.76522 11.5 8.5C11.5 8.23478 11.6053 7.98043 11.7929 7.79289C11.9804 7.60536 12.2347 7.5 12.5 7.5H24.5C24.7652 7.5 25.0195 7.60536 25.2071 7.79289C25.3946 7.98043 25.5 8.23478 25.5 8.5V20.5C25.5 20.7652 25.3946 21.0196 25.2071 21.2071C25.0195 21.3946 24.7652 21.5 24.5 21.5C24.2347 21.5 23.9804 21.3946 23.7929 21.2071C23.6053 21.0196 23.5 20.7652 23.5 20.5V10.9133L9.20662 25.2067C9.01706 25.3833 8.76633 25.4795 8.50726 25.4749C8.24819 25.4703 8.00101 25.3654 7.8178 25.1822C7.63458 24.9989 7.52963 24.7518 7.52506 24.4927C7.52049 24.2336 7.61665 23.9829 7.79329 23.7933L22.0866 9.5H12.5Z" fill="#121212"/>
                                </svg>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0 flex-grow-1">
                    <a class="hover-card-home" href="{{route('contact')}}" aria-label="Warren - Contact us">
                        <div class="mb-2">
                            <svg width="42" height="50" viewBox="0 0 42 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2462_6997)">
                                    <path d="M37 49C39.2091 49 41 47.2091 41 45C41 42.7909 39.2091 41 37 41C34.7909 41 33 42.7909 33 45C33 47.2091 34.7909 49 37 49Z" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10"/>
                                    <path d="M30 9C31 9 33 9 33 13C33 18 24 33 18 33C12 33 3 18 3 13C3 9 5 9 6 9" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10"/>
                                    <path d="M18 33V40.92C18 45.46 14.79 48 9 48C3.88 48 1 46.21 1 44C1 41.79 4.12 40 9 40C17.42 40 25.25 41.29 33 43.77" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10"/>
                                    <path d="M22 1C20.97 1 19.71 1.62 18 1.62C16.29 1.62 15.03 1 14 1C12.97 1 10 1.81 10 5.5C10 9 11.54 10.5 11.75 12.5C11.94 14.36 11.99 17.82 12.65 21.14C13.1 23.44 13.43 25 14.29 25C15.15 25 15.36 22.2 15.75 20.05C16.14 17.9 16.7 15 18 15C19.3 15 19.86 17.9 20.25 20.05C20.64 22.2 20.86 25 21.71 25C22.56 25 22.89 23.44 23.35 21.14C24.01 17.82 24.06 14.37 24.25 12.5C24.46 10.5 26 9 26 5.5C26 1.81 23.03 1 22 1Z" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6 11C7.10457 11 8 10.1046 8 9C8 7.89543 7.10457 7 6 7C4.89543 7 4 7.89543 4 9C4 10.1046 4.89543 11 6 11Z" fill="#4D4D4D"/>
                                    <path d="M30 11C31.1046 11 32 10.1046 32 9C32 7.89543 31.1046 7 30 7C28.8954 7 28 7.89543 28 9C28 10.1046 28.8954 11 30 11Z" fill="#4D4D4D"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_2462_6997">
                                        <rect width="42" height="50" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="fs-24 dark-color fw-600 mb-2">Free</div>
                        <div class="fs-20 dark-color mb-2">Second Opinion Evaluation</div>
                        <div class="button">
                            <span class="me-2">Contact us</span>
                            <span>
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="31" height="31" rx="15.5" stroke="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 9.5C12.2347 9.5 11.9804 9.39464 11.7929 9.20711C11.6053 9.01957 11.5 8.76522 11.5 8.5C11.5 8.23478 11.6053 7.98043 11.7929 7.79289C11.9804 7.60536 12.2347 7.5 12.5 7.5H24.5C24.7652 7.5 25.0195 7.60536 25.2071 7.79289C25.3946 7.98043 25.5 8.23478 25.5 8.5V20.5C25.5 20.7652 25.3946 21.0196 25.2071 21.2071C25.0195 21.3946 24.7652 21.5 24.5 21.5C24.2347 21.5 23.9804 21.3946 23.7929 21.2071C23.6053 21.0196 23.5 20.7652 23.5 20.5V10.9133L9.20662 25.2067C9.01706 25.3833 8.76633 25.4795 8.50726 25.4749C8.24819 25.4703 8.00101 25.3654 7.8178 25.1822C7.63458 24.9989 7.52963 24.7518 7.52506 24.4927C7.52049 24.2336 7.61665 23.9829 7.79329 23.7933L22.0866 9.5H12.5Z" fill="#121212"/>
                                </svg>
                            </span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0 flex-grow-1">
                    <a class="hover-card-home" href="{{route('contact')}}" aria-label="Warren - Contact us">
                        <div class="mb-2">
                            <svg width="40" height="50" viewBox="0 0 40 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2462_6991)">
                                    <path d="M8.5 29L5.5 35V49H13.5V35L10.5 29H8.5Z" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M28.5 29L25.5 35V49H33.5V35L30.5 29H28.5Z" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12.5 1.09961L3.02998 7.48961C1.14998 8.76961 0.969975 11.4696 2.65998 12.9896L9.15998 18.6996C9.37998 18.8896 9.49998 19.1596 9.49998 19.4496V28.9996" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M29.5 29V19" stroke="#4D4D4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M29.5 19C34.4706 19 38.5 14.9706 38.5 10C38.5 5.02944 34.4706 1 29.5 1C24.5294 1 20.5 5.02944 20.5 10C20.5 14.9706 24.5294 19 29.5 19Z" stroke="#4D4D4D" stroke-width="2" stroke-miterlimit="10"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_2462_6991">
                                        <rect width="39" height="50" fill="white" transform="translate(0.5)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="fs-24 dark-color fw-600 mb-2">Free</div>
                        <div class="fs-20 dark-color mb-2">Exam for Adults</div>
                        <div class="button">
                            <span class="me-2">Contact us</span>
                            <span>
                                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="1" y="1" width="31" height="31" rx="15.5" stroke="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 9.5C12.2347 9.5 11.9804 9.39464 11.7929 9.20711C11.6053 9.01957 11.5 8.76522 11.5 8.5C11.5 8.23478 11.6053 7.98043 11.7929 7.79289C11.9804 7.60536 12.2347 7.5 12.5 7.5H24.5C24.7652 7.5 25.0195 7.60536 25.2071 7.79289C25.3946 7.98043 25.5 8.23478 25.5 8.5V20.5C25.5 20.7652 25.3946 21.0196 25.2071 21.2071C25.0195 21.3946 24.7652 21.5 24.5 21.5C24.2347 21.5 23.9804 21.3946 23.7929 21.2071C23.6053 21.0196 23.5 20.7652 23.5 20.5V10.9133L9.20662 25.2067C9.01706 25.3833 8.76633 25.4795 8.50726 25.4749C8.24819 25.4703 8.00101 25.3654 7.8178 25.1822C7.63458 24.9989 7.52963 24.7518 7.52506 24.4927C7.52049 24.2336 7.61665 23.9829 7.79329 23.7933L22.0866 9.5H12.5Z" fill="#121212"/>
                                </svg>
                            </span>
                        </div>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-4 bg-gray-2">
      <div class="container-fluid pt-5 block-padding">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 flex-grow-1">
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
                                <div class="bg-white-1 hover-card-home p-4 rounded-4 h-100 shadow d-flex flex-column justify-content-center">
                                    <div class="mb-3 icon">
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
            <div class="col-lg-6 order-1 order-l-2 mb-4 mb-lg-0">
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
              <div class="mt-3">
                  <a class="btn-main-blue w-fit me-auto rounded" href="{{route('scheduling')}}">Appointment schedule</a>
              </div>
          </div>
          <div class="col-lg-3 col-sm-12 mb-lg-0 p-3">
              <p class="fs-12 dark-color-1 mb-0">
                  At Warren Laser Dentistry, we have extensive experience in all aspects of modern dentistry. We offer
                  <a href="{{route('dental-services')}}">
                     <span class="under-txt">Comprehensive Dental Care</span>
                  </a>
                   , including everything from the
                  <a href="{{route('patient-education')}}">
                     <span class="under-txt">Preventive Education</span>
                  </a>
                  <a href="{{route('teeth-cleanings')}}">
                     &<span class="under-txt">Routine Hygiene</span>
                  </a>
                  that help to reduce dental problems to expert
                  <a href="{{route('cosmetic-dentistry')}}">
                     <span class="under-txt">Cosmetic & Restorative</span>
                  </a>
                   solutions for the dental issues our patients face.
              </p>
          </div>
          <div class="col-lg-3 col-sm-12 mb-lg-0 p-3">
              <p class="fs-12 dark-color-1 mb-0">
                  This website is intended to provide you with basic information about our practice & the dental services we provide. If you would like to find out more about Warren Laser Dentistry or the care we provide, please <a href="#" data-bs-toggle="modal" data-bs-target="#appointmentModal"><span class="under-txt"> Book Your Appointment</span></a> online or call us at <a href="tel:+1-586-756-6351"><span class="under-txt"> 586-756-6351</span></a>.
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
      <div class="container-fluid block-padding">
        <div class="row">
          <div class="col-lg-7 mb-4 mb-l-0">
            <img class="img-fluid" loading="lazy" width="507" height="501" src="{{asset('/assets/imgs/home/img-6.webp')}}" alt="Warren Laser Dentistry - The best in benefits">
          </div>
          <div class="col-lg-5">
            <div>
              <h5 class="dark-color-2 fs-48 fw-bold mb-5">The best in benefits</h5>
              <div class="mb-5">
                <div class="d-flex align-items-center mb-2">
                  <div class="me-2">
                    <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M27.0032 20.3856C27.8867 19.9184 28.6261 19.219 29.1419 18.3629C29.6576 17.5068 29.9301 16.5262 29.9301 15.5267C29.9301 14.5272 29.6576 13.5467 29.1419 12.6905C28.6261 11.8344 27.8867 11.1351 27.0032 10.6678C27.2977 9.71271 27.3262 8.69538 27.0856 7.72528C26.845 6.75518 26.3445 5.86904 25.6378 5.1622C24.9312 4.45537 24.0452 3.95459 23.0751 3.71375C22.1051 3.47292 21.0877 3.50114 20.1326 3.79538C19.6655 2.91138 18.9661 2.17152 18.1098 1.65547C17.2534 1.13941 16.2726 0.866699 15.2727 0.866699C14.2729 0.866699 13.2921 1.13941 12.4357 1.65547C11.5794 2.17152 10.88 2.91138 10.4129 3.79538C9.45783 3.50089 8.44049 3.47239 7.47039 3.71297C6.5003 3.95355 5.61416 4.45409 4.90732 5.16073C4.20048 5.86738 3.69971 6.75339 3.45887 7.72342C3.21804 8.69346 3.24626 9.7108 3.5405 10.666C2.6565 11.1331 1.91664 11.8324 1.40058 12.6888C0.884526 13.5451 0.611816 14.526 0.611816 15.5258C0.611816 16.5256 0.884526 17.5065 1.40058 18.3628C1.91664 19.2192 2.6565 19.9185 3.5405 20.3856C3.246 21.3407 3.21751 22.3581 3.45809 23.3282C3.69866 24.2983 4.1992 25.1844 4.90585 25.8912C5.6125 26.5981 6.49851 27.0988 7.46854 27.3397C8.43857 27.5805 9.45592 27.5523 10.4111 27.2581C10.8782 28.1421 11.5776 28.8819 12.4339 29.398C13.2902 29.914 14.2711 30.1867 15.2709 30.1867C16.2707 30.1867 17.2516 29.914 18.1079 29.398C18.9643 28.8819 19.6636 28.1421 20.1307 27.2581C21.0858 27.5525 22.1032 27.581 23.0733 27.3405C24.0434 27.0999 24.9295 26.5993 25.6363 25.8927C26.3432 25.1861 26.844 24.3 27.0848 23.33C27.3256 22.36 27.2974 21.3408 27.0032 20.3856ZM22.3385 12.2142C22.4447 12.0681 22.5211 11.9026 22.5634 11.727C22.6056 11.5514 22.6129 11.3692 22.5847 11.1909C22.5566 11.0125 22.4936 10.8414 22.3993 10.6874C22.305 10.5333 22.1813 10.3994 22.0353 10.2931C21.8892 10.1869 21.7237 10.1105 21.5481 10.0682C21.3725 10.026 21.1903 10.0187 21.0119 10.0469C20.8336 10.0751 20.6625 10.1381 20.5084 10.2324C20.3544 10.3266 20.2205 10.4503 20.1142 10.5964L13.7328 19.3724L10.2884 15.928C10.1615 15.7968 10.0099 15.6922 9.84217 15.6202C9.67449 15.5483 9.49416 15.5105 9.31171 15.509C9.12925 15.5075 8.94833 15.5423 8.77949 15.6115C8.61064 15.6807 8.45727 15.7828 8.32831 15.9119C8.19935 16.0409 8.09739 16.1944 8.02838 16.3633C7.95937 16.5322 7.92468 16.7132 7.92636 16.8956C7.92803 17.0781 7.96602 17.2584 8.03811 17.426C8.11021 17.5936 8.21496 17.7452 8.34626 17.8719L12.9267 22.4523C13.0671 22.5928 13.2362 22.7011 13.4225 22.7699C13.6088 22.8387 13.8078 22.8663 14.0058 22.8509C14.2038 22.8354 14.3961 22.7771 14.5694 22.6802C14.7428 22.5832 14.893 22.4498 15.0098 22.2892L22.3385 12.2123V12.2142Z" fill="#05395B"/>
                    </svg>
                  </div>
                  <div class="fs-18 dark-color fw-600">Braces can give you a perfect smile!</div>

                </div>
                <div class="fs-16 dark-color">
                    We are proud to offer a range of orthodontics options for our patients. •
                  <a href="https://www.wikidoc.org/index.php/Invisalign" target="_blank" rel="noopener noreferrer">
                     Invisalign
                  </a>
                  <a href="https://en.wikipedia.org/wiki/Dental_braces" target="_blank" rel="noopener noreferrer">
                     • Traditional Braces
                  </a>
                </div>
                <div class="mt-3">
                    <a class="btn-main-blue w-fit me-auto rounded" href="{{route('orthodontics')}}">Orthodontist</a>
                </div>
              </div>
              <div class="mb-5">
                <div class="d-flex align-items-center mb-2">
                  <div class="me-2">
                    <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M27.0032 20.3856C27.8867 19.9184 28.6261 19.219 29.1419 18.3629C29.6576 17.5068 29.9301 16.5262 29.9301 15.5267C29.9301 14.5272 29.6576 13.5467 29.1419 12.6905C28.6261 11.8344 27.8867 11.1351 27.0032 10.6678C27.2977 9.71271 27.3262 8.69538 27.0856 7.72528C26.845 6.75518 26.3445 5.86904 25.6378 5.1622C24.9312 4.45537 24.0452 3.95459 23.0751 3.71375C22.1051 3.47292 21.0877 3.50114 20.1326 3.79538C19.6655 2.91138 18.9661 2.17152 18.1098 1.65547C17.2534 1.13941 16.2726 0.866699 15.2727 0.866699C14.2729 0.866699 13.2921 1.13941 12.4357 1.65547C11.5794 2.17152 10.88 2.91138 10.4129 3.79538C9.45783 3.50089 8.44049 3.47239 7.47039 3.71297C6.5003 3.95355 5.61416 4.45409 4.90732 5.16073C4.20048 5.86738 3.69971 6.75339 3.45887 7.72342C3.21804 8.69346 3.24626 9.7108 3.5405 10.666C2.6565 11.1331 1.91664 11.8324 1.40058 12.6888C0.884526 13.5451 0.611816 14.526 0.611816 15.5258C0.611816 16.5256 0.884526 17.5065 1.40058 18.3628C1.91664 19.2192 2.6565 19.9185 3.5405 20.3856C3.246 21.3407 3.21751 22.3581 3.45809 23.3282C3.69866 24.2983 4.1992 25.1844 4.90585 25.8912C5.6125 26.5981 6.49851 27.0988 7.46854 27.3397C8.43857 27.5805 9.45592 27.5523 10.4111 27.2581C10.8782 28.1421 11.5776 28.8819 12.4339 29.398C13.2902 29.914 14.2711 30.1867 15.2709 30.1867C16.2707 30.1867 17.2516 29.914 18.1079 29.398C18.9643 28.8819 19.6636 28.1421 20.1307 27.2581C21.0858 27.5525 22.1032 27.581 23.0733 27.3405C24.0434 27.0999 24.9295 26.5993 25.6363 25.8927C26.3432 25.1861 26.844 24.3 27.0848 23.33C27.3256 22.36 27.2974 21.3408 27.0032 20.3856ZM22.3385 12.2142C22.4447 12.0681 22.5211 11.9026 22.5634 11.727C22.6056 11.5514 22.6129 11.3692 22.5847 11.1909C22.5566 11.0125 22.4936 10.8414 22.3993 10.6874C22.305 10.5333 22.1813 10.3994 22.0353 10.2931C21.8892 10.1869 21.7237 10.1105 21.5481 10.0682C21.3725 10.026 21.1903 10.0187 21.0119 10.0469C20.8336 10.0751 20.6625 10.1381 20.5084 10.2324C20.3544 10.3266 20.2205 10.4503 20.1142 10.5964L13.7328 19.3724L10.2884 15.928C10.1615 15.7968 10.0099 15.6922 9.84217 15.6202C9.67449 15.5483 9.49416 15.5105 9.31171 15.509C9.12925 15.5075 8.94833 15.5423 8.77949 15.6115C8.61064 15.6807 8.45727 15.7828 8.32831 15.9119C8.19935 16.0409 8.09739 16.1944 8.02838 16.3633C7.95937 16.5322 7.92468 16.7132 7.92636 16.8956C7.92803 17.0781 7.96602 17.2584 8.03811 17.426C8.11021 17.5936 8.21496 17.7452 8.34626 17.8719L12.9267 22.4523C13.0671 22.5928 13.2362 22.7011 13.4225 22.7699C13.6088 22.8387 13.8078 22.8663 14.0058 22.8509C14.2038 22.8354 14.3961 22.7771 14.5694 22.6802C14.7428 22.5832 14.893 22.4498 15.0098 22.2892L22.3385 12.2123V12.2142Z" fill="#05395B"/>
                    </svg>
                  </div>
                  <div class="fs-18 dark-color fw-600">I'm wearing braces!</div>
                </div>
                <div class="fs-16 dark-color">
                If you’re looking for a straight smile without the metal-mouth, clear aligners may be the solution. Get the beautiful smile you’ve always wanted—­ without the metal-mouth!
                </div>
                <div class="mt-3">
                    <a class="btn-main-blue w-fit me-auto rounded" href="{{route('invisalign')}}">Invisalign®</a>
                </div>
              </div>
              <div class="mb-5">
                <div class="d-flex align-items-center mb-2">
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
                <div class="mt-3">
                    <a class="btn-main-blue w-fit me-auto rounded" href="{{route('soft-tissue-laser-dentistry')}}">Soft Tissue Laser Dentistry</a>
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
                          <a href="#" id="carousal-prev" aria-label="Clients Testimonials prev">
                              <svg width="16" height="28" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M14.0933 25.4448L1.81632 13.9541L14.0933 2.46338" stroke="#9E9E9E" stroke-width="3.34439" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                          </a>
                      </div>
                      <div>
                          <a href="#" id="carousal-next" aria-label="Clients Testimonials next">
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
                          <div class="item mx-auto">
                              <div class="carousal-card mx-auto">
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
                                      {!! Str::limit($review['text'], 130, '...') !!}
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
      <div class="container-fluid block-padding">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0 text-start">
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
      <div class="container-fluid block-padding">
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
          <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0 text-start text-lg-end">
            <img class="img-fluid" loading="lazy" width="508" height="320" src="{{asset('/assets/imgs/home/img-10.webp')}}" alt="Eat, Chew & Smile Naturally Again!">
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 my-5">
      <div class="container-fluid block-padding">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0 text-start">
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
      <div class="container-fluid block-padding">
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
          <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0 text-start text-lg-end">
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
