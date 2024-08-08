@include('include.head')
    <title>Patient Education Warren MI | Warren Laser Dentistry</title>
    <meta name="description" content="Here are some frequently asked questions about dental care. Please take a look & feel free to contact us if you want more information on any topic.">
    <link rel="canonical" href="{{env('APP_URL')}}patient-information/patient-education">
    <meta property="og:title" content="Patient Education Warren MI | Warren Laser Dentistry">
    <meta property="og:description" content="Here are some frequently asked questions about dental care. Please take a look & feel free to contact us if you want more information on any topic.">

    </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="pb-5 pt-5 pt-lg-0">
        <div class="container-fluid ">
          <div class="bg-child-blue p-2 p-lg-3 mx-0 mx-lg-5 rounded-4">
            <div class="row p-3 p-lg-5 d-flex justify-content-center">
              <div class="col-lg-5 mt-5 mt-lg-0">
                  <h1 class="fs-40 pe-5 me-5 mb-4 fw-600 blue-color txt-media">
                     Patient Education
                  </h1>
                  <p class="pe-5 fs-14">
                      At Warren Laser Dentistry, we want you to be an active participant in your own health. We take the time to listen to your concerns & explain different options, so you can make informed decisions about your
                       <a href="https://en.wikipedia.org/wiki/Dentistry" target="_blank" rel="noopener noreferrer">
                        dental care
                       </a>
                      & stay involved.
                  </p>
                </div>
                <div class="col-lg-6 offest-1">
                     <img width="480" height="480" class="img-fluid" src="{{asset('/assets/imgs/patient-information/Rectangle-tooth.webp')}}" alt="Warren - Patient Education- Warren, MI">
                </div>
            </div>
            <div class="row m-top-minus d-flex justify-content-center">
              <div class="col-lg-6 bg-white rounded-4 py-2 px-4 mb-5">
                <div class="m-top-img text-center">
                    <img width="80" height="80" class="img-fluid" loading="lazy" src="{{asset('/assets/imgs/patient-information/Group.webp')}}" alt="Warren - Patient Education - Warren, MI">
                </div>
                  <div class="p-1 text-center">
                    <h2 class="fs-24 mb-4 fw-600 blue-color">
                         Stay Healthy With Preventive Dentistry
                   </h2>
                    <p class="fs-14">
                         We encourage an open dialogue between our dental professionals & our patients. Like any health professionals, we are prone to doctor-speak, but we always strive to speak plainly & avoid jargon! If we ever say a word you don’t understand, please ask us to explain. We believe that the more our patients understand their care, the healthier their smiles will be.
                    </p>
                    <p class="pe-5 fs-14">
                         Here are some frequently asked questions about dental care. Please take a look & feel free to contact us if you want more information on any topic.
                    </p>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </section>

      <section class="py-5">
        <div class="container-fluid block-padding py-5">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <h2 class="fs-24 dark-color-1 fw-600 mb-5">Frequently Asked Questions</h2>
              <div class="accordion accordion-flush" id="faqAccordion">

                <div class="accordion-item">
                  <div class="accordion-header">
                    <button class="accordion-button acbt acc-head collapsed px-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Why do I need to see the dentist twice a year?
                    </button>

                  </div>
                  <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body  px-5">
                    Our mouths are constantly changing depending on what we eat & drink, our habits & our age. Seeing a dentist regularly is the best way to catch a potential problem before it becomes a big deal. Not to alarm you, but lots of dental conditions don’t necessarily have obvious symptoms that you can rely on to spot something early. Dentists have the expertise & advanced tools to properly examine your oral health in a way that patients simply can’t do for themselves.
                    Not everyone needs to see the dentist every six months; some patients need to see us more often. Depending on your oral health situation, the dentist will recommend the frequency at which you need to visit us. Some patients see us every three or four months, especially if they have gum disease. If the dentist asks you to come in more frequently than you did in the past, please know that this advice is given with the idea of keeping you healthier in the long run.
                    Your regular visits are your best chance for keeping your teeth strong, clean & white & your breath fresh. Hygienists can remove stains that regular brushing & flossing & in-home whitening treatments can’t! Plus, we’re always happy to give you refresher training on the best techniques for your at-home oral hygiene routine.                  </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <div class="accordion-header">
                    <button class="accordion-button acbt collapsed px-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Remind me, how often do I need to brush & floss?
                    </button>
                  </div>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body px-5">
                    You should be brushing your teeth twice a day & flossing at least once a day. Most people brush in the morning when they wake up & brush & floss at night before bed. If you want to brush after lunch too, we highly approve. When you brush your teeth it should be for a full two minutes. Make sure you get the back & front sides of your upper & lower teeth & their biting surfaces. Floss with about an arm’s length worth of floss, using a clean 2 inches for each tooth to prevent cross-contamination from one tooth to another. If you’d like the dentist or hygienist to demonstrate proper brushing & flossing technique, please just ask during your visit!                  </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header">
                    <button class="accordion-button acbt collapsed px-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    I’ve heard I don’t really need to floss. Is that true?
                    </button>
                  </div>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body px-5">
                    Don’t believe everything your hear in the news. It’s true that more studies are needed to solidify the connection between flossing & various effects on your oral health. But that doesn’t mean flossing is ineffective, it just means we need to know more. To us, the idea of not ever cleaning plaque & food out from between your teeth is scary, not to mention gross! Why would you want all that nasty stuff hiding away somewhere in your mouth, feeding bacteria & causing bad breath? You still need to floss everyday!                  </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header">
                    <button class="accordion-button acbt collapsed px-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    I brush my teeth & floss thoroughly every day. Do I still need to see a hygienist for a cleaning?
                    </button>
                  </div>
                  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body px-5">
                    Yes! There is some stubborn tooth gunk that even the best brushing & flossing can’t get off. This is especially true of tartar, which is the hard substance that plaque can turn into if not cleaned off in time. Getting a professional scaling & polishing (the technical term for a teeth cleaning) by a hygienist can actually improve the appearance of your smile by removing stains. Polished teeth are also smoother & harder for bacteria to stick to, which will make your at-home brushing & polishing efforts more effective.                  </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header">
                    <button class="accordion-button acbt collapsed px-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    What causes cavities?                  </button>
                  </div>
                  <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body px-5">
                    As children, we’re taught that eating too much candy causes cavities, so it must be sugar that causes tooth decay, right? Actually, that’s an overly simple way of explaining the process. Sugar is more like the fuel for decay & it doesn’t just come from sweet foods. When you eat, chemicals called enzymes in your saliva break down carbohydrates into sugars. These sugars—plus the sugar compounds that occur naturally in fruit & foods sweetened with refined sugar or corn syrup—are then eaten by the bacteria in your mouth. Unless you brush or floss them away, these bacteria hang out in your mouth, consuming the sugar & excreting a waste product in the form of acid. This acid is what eats holes in your tooth enamel & the softer dentin layer underneath, causing cavities & tooth decay.                  </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header">
                    <button class="accordion-button acbt collapsed px-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    At what age should children first visit a dentist?                 </button>
                  </div>
                  <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body px-5">
                    Children should see the dentist when their first tooth comes in or by age 1, whichever comes first. That doesn’t mean you shouldn’t be caring for your baby’s oral health before then. After feeding, you can clean your baby’s gums by rubbing them gently with a damp washcloth. For more advice about caring for your baby’s mouth, please feel free to ask your pediatrician or us.                  </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <div class="accordion-header">
                    <button class="accordion-button acbt collapsed px-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    I’m very nervous about visiting the dentist. What should I do?                 </button>
                  </div>
                  <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body px-5">
                    Tell us! The last thing we want is for you to be uncomfortable in silence. Being nervous at the dentist is not uncommon so don’t be embarrassed about it. Knowing that you are a nervous patient helps us prepare properly for your appointment. There are steps we can take to make you more comfortable during your visit. We can take things slower & explain more about what we’re doing at each step. We can work with you to develop a communication system so you can tell us clearly when something is bothering you or you need to take a break. Sedation is also an option in some cases & we’d be happy to discuss it.
                    One of the biggest ways we can help you overcome your nervousness is by working through it together. We want our office to be a warm, welcoming & pleasant place for you. The easier & less intimidating we can make your visit, the better we’ll be able to care for your oral health, now & in the future. If there is anything we can to do improve your experience, just ask. We promise you, you won’t be the first person who has brought up these concerns.                  </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-5 offset-lg-1">
                @include('components.patient-education-links',
                    [
                        'title' => 'More Patient Education',
                        'bg' => ''
                    ]
                )
          </div>
        </div>
      </section>

      @include('components.search-section')

    @include('components.bottom-pages-links')

    @include('include.footer')
    </body>
</html>
