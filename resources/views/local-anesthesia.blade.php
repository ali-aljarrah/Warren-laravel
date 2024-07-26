@include('include.head')
    <title>Local Anesthesia Warren MI | Warren Laser Dentistry</title>
    <meta name="description" content="Due to the sensitivity of your teeth & gums, some dental treatment may require local anesthetic medication to cause numbness.">
    <link rel="canonical" href="https://www.warrenlaserdentistry.com/local-anesthesia">
    <meta property="og:title" content="Local Anesthesia Warren MI | Warren Laser Dentistry">
    <meta property="og:description" content="Due to the sensitivity of your teeth & gums, some dental treatment may require local anesthetic medication to cause numbness.">

    </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="page-bg-image shadow-bg-layer " style="background-image: url(/assets/imgs/local-anesthesia/banner.webp);">
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
                    Local Anesthesia - Warren, MI
                  </h1>
                  <p class="white-color fs-16">
                    Sometimes dentists need to do more in-depth work than your regular cleanings & exams. Due to the sensitivity of your teeth & gums, some treatment may require local anesthetic medication to cause numbness. Local anesthesia is used to make a very small, specific area of your body temporarily unable to feel pain. Examples of procedures requiring local anesthesia include fillings, crown placement & root canals.
                </p>
              </div>
          </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container-fluid block-padding">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <p class="fs-16 black-color">
                        A local anesthetic works by blocking nerve cells in a specific area from sending pain signals to your brain. You can expect this numbness to last for two to four hours, which means you will probably still feel residual numbness after your appointment.
                    </p>
                    <p class="fs-16 black-color">
                        You may have heard of dentists using Novocain to numb patients’ mouths, but Novocain is not actually used anymore! Modern dentists use much safer & more effective drugs such as lidocaine. These are usually combined with other substances such as vasoconstrictors to increase the effectiveness & duration of the anesthesia.
                    </p>
                    <p class="fs-16 black-color">
                        There are actually two kinds of local anesthetics that dentists use to numb your mouth. The first is called a topical anesthetic, which is swabbed over a small area on the surface of your mouth or gums. In most cases, this is used to numb the area where the dentist plans to inject the other kind of local anesthetic. The injectable anesthetic is what we rely on to keep you comfortable & pain-free.
                    </p>
                    <p class="fs-16 black-color">
                        Despite the numbness from the topical anesthetic, some patients feel a stinging sensation from the injection & think it isn’t working. In reality, this feeling is caused by the anesthetic drug entering the body & beginning to work. The stinging subsides within several seconds.
                    </p>
                    <p class="fs-16 black-color">
                        Local anesthesia does have side effects, but they are usually not serious. One well-known side effect is a temporary rapid heartbeat, which can happen if the local anesthetic is injected into a blood vessel. One of the chemicals used in the local anesthetic injection, epinephrine, can travel directly from the blood vessel to the heart. You may also know epinephrine by its other name: adrenaline. It is a naturally occurring substance in your body that can rapidly increase your heart rate. The fast heartbeat it causes can be alarming, but it is not dangerous & should return to normal in a matter of seconds.
                    </p>
                    <p class="fs-16 black-color">
                        The numbness from local anesthesia will take a couple hours to wear off, which may inhibit proper speaking & eating. After your appointment, you’ll need to be careful about biting & chewing—you could bite your tongue or cheek & not feel it! You may also experience temporary swelling or drooping of parts of your mouth or face. Some patients find themselves unable to blink, though this is not something to worry about. The dentist can tape your eye shut so it won’t dry out. You’ll be able to blink normally again as soon as the anesthetic wears off.
                    </p>
                    <p class="fs-16 black-color">
                        Before you undergo a procedure requiring local anesthesia, we will ask for information regarding any allergies & the medications you take. There is a possibility you might need a different formula if you have certain medical conditions. Call us if you have concerns or wish to know more about how we use local anesthesia.
                    </p>
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
