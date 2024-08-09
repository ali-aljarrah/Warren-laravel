@include('include.head')
    <title>Meet Us Warren MI | Warren Laser Dentistry</title>
    <meta name="description" content="We are a team of caring, experienced dental professionals who use only the most advanced technologies, materials & procedures. ☎️ 586-756-6351">
    <link rel="canonical" href="{{env('APP_URL')}}meet-us">
    <meta property="og:title" content="Meet Us Warren MI | Warren Laser Dentistry">
    <meta property="og:description" content="We are a team of caring, experienced dental professionals who use only the most advanced technologies, materials & procedures. ☎️ 586-756-6351">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="py-2">
        <div class="container-fluid block-padding">
          <div class="row">
            <div class="col-lg-12">
              <div class="meet-us-banner lazybg">
                <div class="row">
                  <div class="col-lg-6">
                      <h1 class="dark-color-1 py-4 fs-40 fw-bold d-flex justify-content-start align-items-center">
                          Meet Us
                      </h1>
                      <p class="dark-color fs-16">
                          At Warren Laser Dentistry, we are a team of caring, experienced dental professionals who use only the most advanced technologies, materials & procedures. At our community-focused practice, your comfort & satisfaction come first. We offer early morning, late evening & Saturday appointments, so you don’t have to miss work or school for your care, something our team feels strongly about.
                      </p>
                      <p class="dark-color fs-16">
                          We pride ourselves on taking the time to listen & get to know each patient as an individual. The entire team at Warren Laser Dentistry looks forward to seeing you soon & developing a relationship with you to build the bridge toward long-term trust & successful dental care. See why our patients can’t stop smiling!
                      </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


  <section class="py-5">
    <div class="block-padding">
        <div class="container-fluid pt-5 pb-3 rounded-4">
            <div class="row">
                <div class="col-lg-6 flex-grow-1">
                    <div class="h-100 d-flex flex-column justify-content-center">
                        <h2 class="dark-color-1 fs-32 fw-bold mb-4">
                          Warren Laser Dentistry Staff
                        </h2>
                        <p class="black-color fs-14">
                          Our exceptional, friendly staff is our greatest asset. All of our dental assistants & hygienists are licensed professionals who pride themselves on their current dental techniques & outstanding patient communication. With unmatched quality & integrity, they are dedicated to achieving the best possible results for you & your family.
                        </p>
                        <p class="black-color fs-14">
                          Since your comfort & health are our top priorities, <a href="{{route('home')}}">Warren Laser Dentistry's</a> staff is glad to assist you in any way. If you have any questions at all, from treatment options & sterilization to insurance concerns & paperwork, we’re here for you! We can assure you that you’ll enjoy your dental visit!
                        </p>
                        <a class="btn-main-blue w-fit rounded-3 mb-5 mb-lg-0" href="https://www.ident.ws/template_include/new_patient_sign_in.do?site=21243&practiceId=58910" target="blank">
                          Book your Appointment
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 mb-lg-0">
                  <img class="img-fluid" loading="lazy" width="572" height="345" src="{{asset('/assets/imgs/meet-us/meet-us.webp')}}" alt="Warren - Stay Healthy With Preventive Dentistry">
              </div>
            </div>
        </div>
    </div>
</section>



    @include('components.bottom-pages-links')

    @include('include.footer')
    </body>
</html>
