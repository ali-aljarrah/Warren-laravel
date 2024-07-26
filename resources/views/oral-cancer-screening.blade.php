@include('include.head')
    <title>Oral Cancer Screening Warren MI | Warren Laser Dentistry</title>
    <meta name="description" content="Even if you don’t smoke, keep in mind that 25% of oral cancer diagnoses are for non-smokers. Early detection is key in the battle against cancer.">
    <link rel="canonical" href="https://www.warrenlaserdentistry.com/oral-cancer-screening">
    <meta property="og:title" content="Oral Cancer Screening Warren MI | Warren Laser Dentistry">
    <meta property="og:description" content="Even if you don’t smoke, keep in mind that 25% of oral cancer diagnoses are for non-smokers. Early detection is key in the battle against cancer.">

    </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="page-bg-image shadow-bg-layer " style="background-image: url(/assets/imgs/oral-cancer-screening/banner.webp);">
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
                    Oral Cancer Screening - Warren, MI
                  </h1>
                  <p class="white-color fs-16">
                    Oral cancer screening involves a thorough examination of the mouth, gums, tongue, throat, and surrounding tissues to detect any abnormalities or signs of cancerous growths or precancerous lesions. It typically includes visual inspection, palpation, and may involve additional diagnostic tests like tissue biopsies or imaging scans. Early detection through regular screenings can greatly increase the chances of successful treatment and recovery from oral cancer.
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
                        Early detection is key in the battle against cancer & this is no different with oral cancer. Even if you don’t smoke, keep in mind that 25% of oral cancer diagnoses are for non-smokers. It’s important that every patient receive a simple & pain-free oral cancer screening from Dr. Yousif.
                    </p>

                    <div class="bg-child-blue rounded-4 p-4 mt-4 mb-4">
                        <h2 class="soft-dark fs-24 mb-4 fw-bold">
                            Risk factors for oral cancer include:
                        </h2>
                        <ul class="soft-dark fs-16 mb-0">
                            <li>Tobacco use (smoking, chewing & dip)</li>
                            <li>Excessive alcohol consumption</li>
                            <li>Poor diet</li>
                            <li>HPV (human papilloma virus)</li>
                            <li>Age (higher risk over 40 years old)</li>
                        </ul>
                    </div>

                    <div class="mb-5">
                        <p class="black-color fs-16">
                            Oral cancer doesn’t always cause symptoms in the early stages, which is why it’s important to have a screening that can detect potential problems before they’re visible to the naked eye or cause sensations.
                        </p>
                        <p class="black-color fs-16">
                            Remember that when caught early, oral cancer has an 80 to 90% survival rate. So be sure to ask the dentist or the hygienist for your annual screening!
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
