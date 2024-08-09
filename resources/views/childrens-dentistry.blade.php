@include('include.head')
    <title>Children's Dentistry Warren MI | Pediatric Dentistry Treatments & Procedures</title>
    <meta name="description" content="Our dentists have extensive experience working with children & teens, so we can make the dental experience more enjoyable for everyone. ☎️ 586-756-6351">
    <link rel="canonical" href="{{env('APP_URL')}}dental-services/childrens-dentistry">
    <meta property="og:title" content="Children's Dentistry Warren MI | Pediatric Dentistry Treatments & Procedures">
    <meta property="og:description" content="Our dentists have extensive experience working with children & teens, so we can make the dental experience more enjoyable for everyone. ☎️ 586-756-6351">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')

    <section class="page-bg-image lazybg shadow-bg-layer " style="background-image: url(/assets/imgs/childrens-dentistry/banner.webp)">
        <div class="block-padding">
              <div class="container-fluid">
                 <div class="row">
                 <div class="col-lg-8 mx-auto text-center">
                    <h1 class="white-color-1 py-4 fs-40 fw-bold d-flex justify-content-center align-items-center">
                        Children’s Dentistry – Warren MI
                    </h1>
                    <p class="white-color fs-16">
                        Teaching your kids the right way to take care of their smile is very important. Many dentists recommend starting early to give your children plenty of time to develop good oral hygiene habits to keep their teeth clean & cavity-free at a time in life when they should be able to focus on growing & learning.
                    </p>
                 </div>
                </div>
              </div>
            </div>
    </section>


    @include('components.childrens-dentistry-links', [
        'title' => 'Children\'s Dentistry Services & Treatments',
        'bg' => ''
    ])

<section class="py-5">
        <div class="container-fluid block-padding">
            <div class="row">
                <div class="col-lg-12">
                   <div class="bg-gray-2 p-4 rounded-4 mt-4 mb-4">
                      <h2 class="black-color fs-24 mb-4 fw-bold">
                         What is Children’s Dentistry?
                      </h2>
                      <p class="black-color fs-16">
                         Children’s dentistry focuses on giving children the tools they need to have healthy teeth so they can live without fear of aches & issues. Integral to this mission is prevention. <a href="https://en.wikipedia.org/wiki/Fluoride_therapy#:~:text=Fluoride%20therapy%20typically%20uses%20the,through%20direct%20contact%20with%20teeth." target="_blank" rel="noopener noreferrer">Fluoride treatments</a> are excellent for supplementing oral hygiene habits & preventing tooth decay. While fluoride is commonly present in drinking water, regular fluoride treatments can help children stay ahead of the curve in protecting their teeth. Similarly, sealants may be recommended to cover & protect the teeth most vulnerable to bacteria. However, neither fluoride nor sealants are a replacement for daily brushing & flossing!
                      </p>

                      <div class="table-reaponsive mt-4 pb-4">
                        <div class="p-0 o=p-lg-4 d-flex justify-content-center">
                            @include('components.video-youtube')
                        </div>
                      </div>

                      <p class="black-color fs-16">
                        Teaching your kids the right way to take care of their smile is very important. Dr. Yousif would be glad to give both you & your child the oral hygiene education you need to keep you clean & cavity-free. We understand that children have different needs & sensitivities than adults & we address them all. Adults want the best technology, the most informed doctors & the highest-quality care.
                      </p>
                      <p class="black-color fs-16">
                         While all these are important in caring for kids, they also require special attention in order to feel comfortable & respected. We offer the best of both worlds. Our dentists have extensive experience working with children & teens, so we can make the dental experience more enjoyable for everyone. By making kids comfortable with dentistry at a younger age, they’ll have the correct knowledge to provide them with a lifetime of excellent dental health!
                      </p>
                      <p class="black-color fs-16">
                         <a href="{{route('contact')}}">Call Warren Laser Dentistry</a> for your child’s appointment today!
                      </p>
                    </div>
                </div>
            </div>
        </div>
 </section>

 @include('components.bottom-pages-links')

 @include('include.footer')
    </body>
</html>
