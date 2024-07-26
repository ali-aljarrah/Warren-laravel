@include('include.head')
    <title>Digital X-Rays (Dental) Warren MI | Warren Laser Dentistry</title>
    <meta name="description" content="Digital x-rays require up to 90% less radiation than conventional film-type x-rays, which were already fairly low risk to begin with.">
    <link rel="canonical" href="https://www.warrenlaserdentistry.com/patient-information/patient-education/digital-panoramic-x-rays">
    <meta property="og:title" content="Digital X-Rays (Dental) Warren MI | Warren Laser Dentistry">
    <meta property="og:description" content="Digital x-rays require up to 90% less radiation than conventional film-type x-rays, which were already fairly low risk to begin with.">

    </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="page-bg-image shadow-bg-layer " style="background-image: url(/assets/imgs/digital-panoramic-x-rays/banner.webp)">
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
                    Digital Panoramic X-Rays - Warren, MI
                  </h1>
                  <p class="white-color fs-16">
                    Digital radiographs, commonly known as x-rays, are a vital diagnostic & assessment tool for dentists. We offer modern digital x-rays at our practice, both for your convenience & for the efficiency of treatment.
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
                        X-rays, also known as radiographs, have long been part of preventive care in dentistry. X-rays are a form of electromagnetic radiation that is invisible to human eyes. When scientists first discovered evidence of these electromagnetic rays, they weren’t sure what they were, so they called them x-rays, & the name stuck.
                    </p>
                    <p class="black-color fs-16">
                        In the past, dental x-rays were captured using a film process similar to an analog photograph. With the advent of digital imaging, computerized radiography has become the dental industry standard. Digital x-rays require up to 90% less radiation than conventional film-type x-rays, which were already fairly low risk to begin with. Instead of using the traditional silver-oxide x-ray film, which must be developed & then fixed in caustic & environmentally damaging solutions, the new system takes pictures via a small electronic sensor.
                    </p>

                    <div class="bg-child-blue rounded-4 p-4 mt-4 mb-4">
                        <h2 class="soft-dark fs-24 mb-4 fw-bold">
                            What Are X-Rays?
                        </h2>
                        <p class="soft-dark fs-16 mb-0">
                            X-rays can pass through the soft tissues of the face & mouth (lips, cheeks, etc.) but are absorbed by the hard material of teeth & bone. This allows the dentist to see potential oral health issues that may not be easily visible from the outside. X-rays are used primarily to find cavities, but dentists also use them to look at tooth roots, to evaluate the health of the bone surrounding the tooth, to assess possible periodontal (gum) disease problems, to analyze tooth & jaw positioning & to keep track of development in younger patients.
                        </p>
                    </div>

                    <div class="mb-5">
                        <p class="black-color fs-16">
                            While there are several types of dental x-rays (including periapical & full-mouth), the most common kind of dental x-rays are called bite-wing x-rays, based on the wing shape of the films that were once used. These x-rays are done while you’re in the dental chair & capture an image of several teeth at a time, roots included. A dental team member will place a sensor in a certain part of your mouth & ask you to bite down while they aim a tube-shaped device at your face. This is the x-ray emitter, which sends the x-rays through your tissues & onto the sensor in your mouth. No light or heat will come from the emitter. There is usually no discomfort associated with getting dental x-rays.
                        </p>
                        <p class="black-color fs-16">
                            One other big advantage of modern digital x-rays over the old film type is the lack of a lag time between taking the x-rays & being able to examine them. The x-ray picture of the tooth can be instantaneously transmitted onto a monitor in the treatment room so we can see your teeth & surrounding structures while you’re still in the chair. The immediacy of digital x-rays allows the dentist to assess the health of your teeth & identify potential problems right away. The dentist can easily point out potential trouble spots to you, allowing you to see & understand your oral health condition as the dentist explains it. The digital files are also easy to share with any other dental professionals who might be involved in your care in the future.
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
