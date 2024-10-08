@include('include.head')
    <title>Soft Tissue Laser Dentistry Warren MI | Warren Laser Dentistry</title>
    <meta name="description" content="Lasers are one of the most powerful leading edge technologies that can be used in a variety of dental diagnostic & treatment procedures.">
    <link rel="canonical" href="{{env('APP_URL')}}patient-information/patient-education/soft-tissue-laser-dentistry">
    <meta property="og:title" content="Soft Tissue Laser Dentistry Warren MI | Warren Laser Dentistry">
    <meta property="og:description" content="Lasers are one of the most powerful leading edge technologies that can be used in a variety of dental diagnostic & treatment procedures.">

    </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="page-bg-image lazybg shadow-bg-layer " style="background-image: url(/assets/imgs/soft-tissue-laser-dentistry/banner.webp);">
        <div class="container-fluid block-padding">
           <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                  <div class="mx-auto">
                      <a href="{{route('patient-education')}}" class="text-decoration-none bg-green-card rounded-3 p-2 d-flex justify-content-center align-items-center w-fit mx-auto">
                          <span class="me-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M3.99994 10L3.29294 10.707L2.58594 10L3.29294 9.293L3.99994 10ZM20.9999 18C20.9999 18.2652 20.8946 18.5196 20.707 18.7071C20.5195 18.8946 20.2652 19 19.9999 19C19.7347 19 19.4804 18.8946 19.2928 18.7071C19.1053 18.5196 18.9999 18.2652 18.9999 18H20.9999ZM8.29294 15.707L3.29294 10.707L4.70694 9.293L9.70694 14.293L8.29294 15.707ZM3.29294 9.293L8.29294 4.293L9.70694 5.707L4.70694 10.707L3.29294 9.293ZM3.99994 9H13.9999V11H3.99994V9ZM20.9999 16V18H18.9999V16H20.9999ZM13.9999 9C15.8565 9 17.6369 9.7375 18.9497 11.0503C20.2624 12.363 20.9999 14.1435 20.9999 16H18.9999C18.9999 14.6739 18.4732 13.4021 17.5355 12.4645C16.5978 11.5268 15.326 11 13.9999 11V9Z" fill="black"/>
                              </svg>
                          </span>
                          <span class="fs-16 fw-bold me-3 black-color">
                            back to Patient Education
                          </span>
                      </a>
                  </div>
                  <h1 class="white-color-1 py-4 fs-40 fw-bold d-flex justify-content-center align-items-center">
                    Soft Tissue Laser Dentistry - Warren, MI
                  </h1>
                  <p class="white-color fs-16">
                    Though the mention of lasers may bring to mind science fiction space battles, these days lasers are part of our everyday lives, from barcode scanners to concert light shows, & from manufacturing automation to dental care.
                  </p>
              </div>
          </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container-fluid block-padding">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10 align-self-center">
                    <p class="black-color fs-16">
                        Lasers are one of the most powerful leading edge technologies that can be used in a variety of dental diagnostic & treatment procedures to improve patient comfort & results.
                    </p>

                    <div class="bg-child-blue rounded-4 p-4 mt-4 mb-4">
                        <h2 class="soft-dark fs-24 mb-4 fw-bold">
                            What Are Lasers?
                        </h2>
                        <p class="fs-16 soft-dark">
                            Lasers have been around since the 1960s & have been used in dentistry since the early 1990s. Laser tools for dentists are constantly improving & being refined with patient comfort & efficient treatment in mind. Dental professionals & researchers frequently find new & useful ways to apply the power of lasers to oral health. We stay informed about the latest advances so we can determine which technologies to incorporate into our practice. We are specially trained in the laser dentistry procedures we offer currently & will use lasers when it is appropriate for your dental care.
                        </p>
                        <div class="table-reaponsive mt-4">
                            <div class="p-0 p-lg-4 d-flex justify-content-center">
                                @include('components.video-youtube')
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <p class="black-color fs-16">
                            Changing the wavelength of the laser light changes the power of the laser. In dentistry, the lowest wavelengths are used to help see imperfections in teeth (such as cavities), scan the shape of teeth to create digital impressions, or to set composite materials for repairs such as fillings. Slightly higher wavelengths are used on soft tissues, such as your gums. The strongest wavelengths are used in the place of drills on hard tissues, such as the enamel or dentin layers of teeth. There are very fews parts of dentistry that lasers have not touched. For example, lasers may be used in root canals,
                            <a href="https://en.wikipedia.org/wiki/Periodontal_disease" target="_blank" rel="noopener noreferrer">
                                gum disease treatment, 
                            </a>
                            cavity detection, tooth whitening & to set & harden restorative materials, such as 
                            <a href="{{route('crowns')}}">
                            crowns.
                            </a>
                        </p>
                        <p class="black-color fs-16">
                            The most important advantage that lasers have is that they can make many procedures more comfortable than they would be using traditional dental techniques. This is especially important for nervous patients who are uncomfortable with the typical sounds & sensations of some dental treatments. In many cases, lasers eliminate the need for scalpels, drills, anesthesia & reduce post-procedure discomfort & healing times.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

  @include('components.patient-education-links',
  [
      'title' => 'More Patient Education',
      'bg' => 'bg-child-blue'
  ]
)

  @include('components.bottom-pages-links')

    @include('include.footer')
    </body>
</html>
