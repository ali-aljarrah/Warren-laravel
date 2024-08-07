@include('include.head')
    <title>Periodontist Warren MI | Periodontics Treatments & Procedures</title>
    <meta name="description" content="Periodontal disease can can cause loss of teeth & eventually, if left untreated, other more serious health problems. ☎️ 586-756-6351">
    <link rel="canonical" href="{{env('APP_URL')}}dental-services/periodontics">
    <meta property="og:title" content="Periodontist Warren MI | Periodontics Treatments & Procedures">
    <meta property="og:description" content="Periodontal disease can can cause loss of teeth & eventually, if left untreated, other more serious health problems. ☎️ 586-756-6351">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')


    <section class="page-bg-image lazybg shadow-bg-layer " style="background-image: url(/assets/imgs/periodontics/banner.webp)">
        <div class="block-padding">
              <div class="container-fluid">
                 <div class="row">
                 <div class="col-lg-8 mx-auto text-center">
                    <h1 class="white-color-1 py-4 fs-40 fw-bold d-flex justify-content-center align-items-center">
                        Periodontics – Warren, MI
                    </h1>
                    <p class="white-color fs-16">
                        Periodontics is a specialty in dentistry that focuses primarily on periodontal (gum) disease. Periodontal disease can lead to more than just an unsightly smile—it can cause loss of teeth & eventually, if left untreated, other more serious health problems.
                    </p>
                 </div>
                </div>
              </div>
            </div>
    </section>

    @include('components.periodontics-links', [
        'title' => 'Periodontics Services & Treatments',
        'bg' => ''
    ])


   <section class="py-5">
        <div class="container-fluid block-padding">
            <div class="row">
                <div class="col-lg-12 bg-gray-2 py-4 px-4 rounded-4">
                      <p class="black-color fs-16">
                        Called gingivitis in its early stages, periodontal disease is caused by excessive toxic bacteria (found in plaque) that attack your mouth’s soft tissues. Early warning signs of this disease include red, swollen or bleeding gums. If caught early, we can help you reverse the damage. If detected late, we can use one of the many effective restorative dentistry procedures to restore your mouth to its healthy & beautiful state.
                      </p>
                      <p class="black-color fs-16">
                          General dentists are trained to detect periodontal disease & treat it in early stages. However, they often refer complicated or later-stage cases to a specialist. Periodontists undergo an additional three years of training in periodontics, specializing in gum disease, oral inflammation & dental implants. Because of their expertise in the soft tissues of the mouth, they are also often experts in soft-tissue cosmetic procedures, such as crown lengthening or gum lifts.
                      </p>
                      <p class="black-color fs-16">
                           Patients often don’t experience pain with gum disease, but they might notice bad breath, a change in how their teeth fit together when they bite or bleeding while brushing or flossing. However, those symptoms can be easy to miss or dismiss, so it’s important to keep your regular dental appointments. General dentists look for warning signs of periodontal disease when they perform regular hygiene exams, but it can be beneficial to have a periodontist take a look as well.
                      </p>
                      <p class="black-color fs-16">
                         During an exam, periodontists check the color of your gums, whether they are receding from your teeth, if there are gaps between them & your teeth & how easily they bleed. But they also look at your bite (or how your top & bottom teeth line up when you close them) & whether any of your teeth feel loose. Additionally, periodontists are well-trained in identifying whether a patient is at higher risk of developing gum disease.
                      </p>
                      <p class="black-color fs-16">
                          Gum disease has been shown to have a relationship with other medical conditions, so a patient’s risk isn’t confined to their dental situation. Those with heart disease, diabetes & pregnancy are at higher risk for developing periodontal disease. Patients being treated for any of those conditions should inform their dentist or periodontist. Additionally, age, diet, genetics, medications, stress, grinding & smoking habits affect your risk.
                      </p>
                      <p class="black-color fs-16">
                            The good news is that if you are at higher risk for periodontal disease, you can take measures to prevent it. Keeping up with regular at-home hygiene, making sure to floss at least once every day, is the best thing you can do for prevention. Also, don’t miss your six-month cleaning visits. If your dentist or periodontist believes you are still at higher risk, they might recommend more frequent cleanings or regular deep cleanings.
                      </p>
                      <p class="black-color fs-16">
                        Deep cleanings, also known as scaling & root planing, are the gold standard of periodontal care. Scaling is the process of cleaning tartar & plaque from teeth under the gums & root planing describes smoothing those same surfaces so bacteria doesn’t as easily stick to them.
                      </p>
                      <p class="black-color fs-16">
                          Let us help you keep your teeth & gums strong & disease-free with regular examinations & cleanings
                      </p>
                      <p class="black-color fs-16">
                          *Not a certified specialist.
                      </p>
                </div>
            </div>
        </div>
 </section>

 @include('components.search-section')

 @include('components.bottom-pages-links')

 @include('include.footer')
    </body>
</html>
