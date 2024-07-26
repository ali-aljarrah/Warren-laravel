@include('include.head')
    <title>Endodontist Warren MI | Endodontics Treatments & Procedures</title>
    <meta name="description" content="Put simply, endodontic care is the term for the treatments & procedures a dentist will use to save a tooth if it becomes infected or injured. ☎️ 586-756-6351">
    <link rel="canonical" href="https://www.warrenlaserdentistry.com/dental-services/endodontics">
    <meta property="og:title" content="Endodontist Warren MI | Endodontics Treatments & Procedures">
    <meta property="og:description" content="Put simply, endodontic care is the term for the treatments & procedures a dentist will use to save a tooth if it becomes infected or injured. ☎️ 586-756-6351">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="page-bg-image shadow-bg-layer " style="background-image: url(/assets/imgs/endodontics/banner.webp)">
        <div class="container-fluid block-padding">
           <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                  <h1 class="white-color-1 py-4 fs-40 fw-bold d-flex justify-content-center align-items-center">
                    Endodontics - Warren, MI
                  </h1>
                  <p class="white-color fs-16">
                    Put simply, endodontic care is the term for the treatments & procedures a dentist will use to save a tooth if it becomes infected or injured. Endodontics involves treating the tissues inside your teeth that surround the root. Most commonly, this includes root canal therapy. But don’t worry, getting a root canal isn’t as painful as popular culture might lead you to believe. In fact, root canals are meant to get rid of pain, not cause it!
                  </p>
              </div>
          </div>
        </div>
    </section>

    @include('components.endodontics-links',
        [
            'title' => 'Endodontic Services & Treatments',
            'bg' => ''
        ]
    )

    <section class="py-5">
        <div class="container-fluid block-padding">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <div class="p-4 bg-gray-2 rounded-5">
                        <p class="fs-16 dark-color">
                            Caught early, tooth decay is easily treatable by a general dentist when they can perform a filling procedure. If the decay goes untreated, it may spread past the outer layers of the tooth & into the soft tissue that protects the nerves. Once this happens, endodontic treatment is required to have the best chance of saving the tooth. If the decay goes too far, an abscess can form at the end of the tooth root, exposing the infection & allowing it to spread to other parts of the body. In extreme cases, the only option is extraction & replacement with a prosthetic.
                        </p>
                        <p class="fs-16 dark-color">
                            Of course, it’s always best to save the natural tooth. Prosthetics have vastly improved over the years, but they will never look, feel, or function like your natural teeth. Plus, they are often more expensive than endodontic procedures & often require multiple dental visits to complete.
                        </p>
                        <p class="fs-16 dark-color">
                            Decay that has spread to a tooth’s roots may result in some noticeable symptoms. Patients who need a root canal might experience pain, prolonged sensitivity to hot or cold, swelling or discoloration of the infected tooth. Other patients have no symptoms. Most dentists discover the need for endodontic treatment based on digital imaging & exams during a patient’s hygiene appointment.
                        </p>
                        <p class="fs-16 dark-color">
                            While general dentists are trained in basic endodontics & can perform routine root canals, they commonly refer patients to specialists called endodontists for treatment of more complex cases.
                        </p>
                        <p class="fs-16 dark-color">
                            Endodontists complete at least two additional years of training & use advanced technology & procedures to comfortably preserve your natural teeth & keep you smiling. They use this expertise & these advanced tools to perform both routine & difficult cases with greater confidence & a higher rate of success.
                        </p>
                        <p class="fs-16 dark-color">
                            A successful root canal treatment involves thoroughly cleaning the infected tissue out of all of the tooth’s root canals so the decay can no longer spread. Because not all teeth are the exact same shape, when the root canal is more complex or slender, it can be more difficult to perform root canal therapy without an endodontist’s specialized training & technology.
                        </p>
                        <p class="fs-16 dark-color">
                            Root canals have a negative reputation as being painful, but endodontists work hard to reverse that. They are trained in anesthetics to make sure the patient is as comfortable as possible during their procedure. Because of this & their specialized training, they are also skilled at diagnosing pain in the mouth & face that might be difficult for other medical or dental professionals to place.
                        </p>
                        <p class="fs-16 dark-color">
                            We are proud to offer endodontic care in our office. Please give us a call to talk more about what we offer & how we can help with any endodontic needs you may have.
                        </p>
                        <p class="fs-16 dark-color mb-0">
                            *Not a certified specialist.
                        </p>
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
