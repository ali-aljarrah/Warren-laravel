@include('include.head')
    <title>Cosmetic Dentist Warren MI | Cosmetic Dentistry Treatments & Procedures</title>
    <meta name="description" content="As your cosmetic dentist in Warren, WI, we offer an array of services including bonding, smile makeovers, teeth whitening, veneers, & more! ☎️ 586-756-6351">
    <link rel="canonical" href="{{env('APP_URL')}}dental-services/cosmetic-dentistry">
    <meta property="og:title" content="Cosmetic Dentist Warren MI | Cosmetic Dentistry Treatments & Procedures">
    <meta property="og:description" content="As your cosmetic dentist in Warren, WI, we offer an array of services including bonding, smile makeovers, teeth whitening, veneers, & more! ☎️ 586-756-6351">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="page-bg-image lazybg shadow-bg-layer " style="background-image: url(/assets/imgs/cosmetic-dentistry/banner.webp)">
        <div class="container-fluid block-padding">
           <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                  <h1 class="white-color-1 py-4 fs-40 fw-bold d-flex justify-content-center align-items-center">
                    Cosmetic Dentist - Warren MI
                  </h1>
                  <p class="white-color fs-16">
                    Having a great smile can make a huge difference in the way you look & feel. We offer a complete range of cosmetic dentistry treatments to create the confident smile you’ve always wanted.
                  </p>
                  <p class="white-color fs-16">
                    We begin with a detailed smile assessment, discussing with you which aspects you like & dislike about your smile. Once our assessment is complete, we will discuss with you treatment options to help your smile look more natural, healthy & youthful.
                  </p>
              </div>
          </div>
        </div>
    </section>

    @include('components.cosmetic-dentistry-links',
                [
                    'title' => 'Cosmetic Services & Treatments',
                    'bg' => ''
                ]
            )

    <section class="py-5">
        <div class="container-fluid block-padding">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bg-gray-2 rounded-4 mt-4 mb-4 py-4 px-4">
                        <h2 class="black-color py-4 fs-24 fw-bold">
                            We Can Restore Your Smile
                        </h2>
                        <p class="black-color fs-16">
                            We know that even when you do everything right, something can go wrong. If you are suffering from a 
                            <a href="https://en.wikipedia.org/wiki/Tooth_pathology" target="_blank" rel="noopener noreferrer">
                                dental problem
                            </a>
                            , we are here to help. Modern technology combined with the in-depth experience of our clinical team can assure you of a successful & long-lasting result. Whether the cause is an accident or disease, we can restore your smile.
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
