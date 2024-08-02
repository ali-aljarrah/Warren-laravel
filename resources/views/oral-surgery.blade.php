@include('include.head')
    <title>Oral Surgeon Warren MI | Oral Surgery Treatments & Procedures</title>
    <meta name="description" content="As your oral surgeon in Warren, MI, we offer an array of services including bone grafting, dental implants, tooth extractions, & more! ☎️ 586-756-6351">
    <link rel="canonical" href="{{env('APP_URL')}}dental-services/oral-surgery">
    <meta property="og:title" content="Oral Surgeon Warren MI | Oral Surgery Treatments & Procedures">
    <meta property="og:description" content="As your oral surgeon in Warren, MI, we offer an array of services including bone grafting, dental implants, tooth extractions, & more! ☎️ 586-756-6351">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="page-bg-image shadow-bg-layer " style="background-image: url(/assets/imgs/oral-surgery/banner.webp)">
        <div class="container-fluid block-padding">
           <div class="row">
              <div class="col-lg-8 mx-auto text-center">
                  <h1 class="white-color-1 py-4 fs-40 fw-bold d-flex justify-content-center align-items-center">
                    Oral Surgery − Warren, MI
                  </h1>
                  <p class="white-color fs-16">
                    An oral surgeon specializes in working with the bone & soft tissue of your mouth. Their treatments range from wisdom teeth removal to facial reconstructive surgery. Oral surgery is more in-depth than your typical dental procedure, & normally requires local or general anesthesia, sedation & time for recovery. Below are a few of the services that oral surgeons provide.
                </p>
              </div>
          </div>
        </div>
    </section>

    @include('components.oral-surgery-links',
    [
        'title' => 'More Oral Surgery',
        'bg' => ''
    ]
    )
<section class="py-4">
        <div class="container-fluid block-padding">
            <div class="row">
                <div class="col-lg-12">
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
