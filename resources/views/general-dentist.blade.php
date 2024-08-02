@include('include.head')
    <title>General Dentistry Warren MI | General Dental Treatments & Procedures</title>
    <meta name="description" content="As your general dentist in Warren, MI, we offer an array of services including routine exams, teeth cleanings, crowns, fillings, & more! ☎️ 586-756-6351">
    <link rel="canonical" href="{{env('APP_URL')}}dental-services/general-dentistry">
    <meta property="og:title" content="General Dentistry Warren MI | General Dental Treatments & Procedures">
    <meta property="og:description" content="As your general dentist in Warren, MI, we offer an array of services including routine exams, teeth cleanings, crowns, fillings, & more! ☎️ 586-756-6351">

    </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="page-bg-image shadow-bg-layer " style="background-image: url(/assets/imgs/general-dentistry/banner.webp)">
        <div class="container-fluid block-padding">
           <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                  <h1 class="white-color-1 py-4 fs-40 fw-bold d-flex justify-content-center align-items-center">
                    General Dentist - Warren MI
                  </h1>
                  <p class="white-color fs-16">
                    General dentistry is the term we use for the most common dental procedures that we do for patients. Most of these treatments have to do with removing tooth decay & repairing the damage it has done to your smile.
                  </p>
                  <p class="white-color fs-16">
                    General Dentistry includes procedures that most people have heard of, even if they haven’t had them done, such as crowns (caps), fillings, & root canal therapy. General dental care is also used to repair minor tooth damage due to accidents, such as chipping a tooth while eating. Addressing bad breath is also part of general dentistry!
                  </p>
              </div>
          </div>
        </div>
    </section>

    @include('components.general-dentistry-links',
        [
            'title' => 'General Services & Treatments',
            'bg' => ''
        ]
    )

    <section class="py-5">
        <div class="container-fluid block-padding">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bg-gray-2 rounded-4 mb-4 py-4 px-4">
                        <h2 class="black-color py-4 fs-24 fw-bold">
                            Comfortable, Personalized & Affordable
                        </h2>
                        <p class="black-color fs-16">
                            Because these treatments are so common, many dental insurance plans cover a large part of the cost. That’s why you will see them listed near the top of the list of benefits on your insurance plan. If you have insurance, having general dentistry procedures covered by your insurer can be reassuring & helps motivate you to get the care you need.
                            <span class="fw-bold">
                            Insurance companies also know that if you don’t solve a dental problem early on it will only get more expensive later.
                            </span>
                        </p>
                    </div>

                    <div class="bg-gray-2 rounded-4 mt-4 mb-4 py-4 px-4">
                        <h3 class="black-color py-4 fs-24 fw-bold">
                            Connection Between Your Oral Health & Overall Health
                        </h3>
                        <p class="black-color fs-16">
                            There is a big connection between your oral health & your overall health.
                            <span class="fw-bold">General dentistry can address some situations that may be linked to other health conditions.</span>
                            For example, dentists can assess problems with your jaw joint (TMD) or even spot signs of sleep apnea or potential causes for migraines. So don’t be surprised if we ask you about more than just your teeth & gums!
                        </p>
                    </div>

                    <div class="bg-gray-2 rounded-4 mt-4 mb-4 py-4 px-4">
                        <h4 class="black-color py-4 fs-24 fw-bold">
                            Preventing Dental Problems
                        </h4>
                        <p class="black-color fs-16">
                            <span class="fw-bold">
                                Preventive dentistry is the area of dentistry concerned with preventing dental problems before they become costly, painful or both.
                            </span>
                            A large part of preventive dentistry is patient education. This includes learning the proper at-home dental care, nutrition, etc. Another aspect of preventive dentistry is oral hygiene through regular dental cleanings, fluoride treatments, mouthguards & more.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="bg-gray-2 rounded-4 mb-4 py-4 px-4">
                        <h5 class="black-color py-4 fs-24 fw-bold">
                            General Dentistry Often Overlaps Other Categories of Dentistry
                        </h5>
                        <p class="black-color fs-16">
                            <span class="fw-bold">
                                While our general dental services don’t necessarily include cosmetic or restorative treatments, many times general dentistry treatments get bundled up with cosmetic or restorative care treatment plans.
                            </span>
                            For example, if you’re getting a full smile makeover, we may change the position of your teeth with aligners & make their shape more uniform using bonding. Nobody has the same dental situation or dental care goals. That’s why many general dentistry treatments seem to overlap with other categories of dentistry.
                        </p>
                        <p class="black-color fs-16">
                            <span class="fw-bold">
                                All dentists get training in general dentistry when they’re in dental school, even if they move on to specialize in a certain area of dentistry later on (such as cosmetic dentistry or orthodontics).
                            </span>
                                Depending on where you live or the certifications they have earned, some dental hygienists can perform certain parts of a general dental procedure (helping to size crowns, for example).
                        </p>
                    </div>

                    <div class="bg-gray-2 rounded-4 mt-4 mb-4 py-4 px-4">
                        <h6 class="black-color py-4 fs-24 fw-bold">
                            General Dentistry Includes Non-Invasive Actions
                        </h6>
                        <p class="black-color fs-16">
                            <span class="fw-bold">
                            General dentistry also includes the non-invasive actions our dental team will take in the effort the keep you healthy & comfortable.
                            </span>
                            Many diagnostic scans or examinations, such as those that look at your bite & how your teeth fit together (called occlusion by dentists) would be considered general dentistry. Local anesthesia & light sedation are also common & apply to so many different dental care situations that they fall under this category.
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
