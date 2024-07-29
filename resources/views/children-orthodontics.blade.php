@include('include.head')
    <title>Warren Laser Dentistry - Children & Orthodontics</title>
    <meta name="description" content="We understand that children have different needs than adults, Adults want the best technology, the most informed doctors and the highest-quality care.">
    <link rel="canonical" href="https://www.URL.COM/children-and-orthodontics">
    <meta property="og:title" content="Warren Laser Dentistry - Children & Orthodontics">
    <meta property="og:description" content="We understand that children have different needs than adults, Adults want the best technology, the most informed doctors and the highest-quality care.">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')


    <section class="py-5">
            <div class="block-padding">
              <div class="container-fluid">
                 <div class="row">
                 <div class="col-lg-8 mx-auto text-center">
                    <div class="mx-auto">
                    <a href="/children-&-orthodontics" class="text-decoration-none bg-soft-green rounded-3 w-18 py-2 px-2">
                          <span class="ps-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M3.99994 10L3.29294 10.707L2.58594 10L3.29294 9.293L3.99994 10ZM20.9999 18C20.9999 18.2652 20.8946 18.5196 20.707 18.7071C20.5195 18.8946 20.2652 19 19.9999 19C19.7347 19 19.4804 18.8946 19.2928 18.7071C19.1053 18.5196 18.9999 18.2652 18.9999 18H20.9999ZM8.29294 15.707L3.29294 10.707L4.70694 9.293L9.70694 14.293L8.29294 15.707ZM3.29294 9.293L8.29294 4.293L9.70694 5.707L4.70694 10.707L3.29294 9.293ZM3.99994 9H13.9999V11H3.99994V9ZM20.9999 16V18H18.9999V16H20.9999ZM13.9999 9C15.8565 9 17.6369 9.7375 18.9497 11.0503C20.2624 12.363 20.9999 14.1435 20.9999 16H18.9999C18.9999 14.6739 18.4732 13.4021 17.5355 12.4645C16.5978 11.5268 15.326 11 13.9999 11V9Z" fill="black"/>
                            </svg>
                         </span>
                         <span class="fs-16 fw-bold me-3 dark-color-1">
                             back to Children’s Dentistry
                         </span>
                     </a>
                    </div>
                     <h1 class="dark-color-1 py-4 fs-40 fw-bold d-flex justify-content-center align-items-center">
                         Children & Orthodontics
                     </h1>
                     <p class="black-color fs-16">
                         Malocclusions, or misalignments of the teeth, can be recognized as early as 2 to 3 years of age. Often, early steps can be taken to reduce the need for major orthodontic treatment at a later age. We can help identify these issues in your child.
                    </p>
                 </div>
                </div>
              </div>
            </div>
    </section>


    <section class="py-5">
            <div class="block-padding">
              <div class="container-fluid">
                 <div class="row justify-content-center align-items-center">
                 <div class="col-lg-10 align-self-center">

                    <div class="bg-child-blue rounded-4 mt-4 mb-4">
                      <div class="p-4">
                         <h5 class="soft-dark py-4 fs-24 fw-bold">
                              Making Kids Comfortable With Dentistry
                          </h5>
                         <p class="soft-dark fs-16">
                             We understand that children have different needs & sensitivities than adults & we address them all. Adults want the best technology, the most informed doctors & the highest-quality care. While all these are important when caring for kids, they also require special attention in order to feel comfortable & respected. We offer the best of both worlds.
                         </p>
                         <p class="soft-dark fs-16">
                             Our dentists have extensive experience working with children & teens, so we can make the dental experience more enjoyable for everyone. By making kids comfortable with dentistry at a younger age, they’ll have the correct knowledge to provide them with a lifetime of excellent dental health! Call us for your child’s appointment today!
                         </p>
                      </div>

                      <div class="p-4 d-flex justify-content-center align-items-center">
                          <iframe class="rounded-5" width="512" height="350" loading="lazy" src="https://www.youtube.com/embed/Ew1-S3qUSLY?si=f0F_QOnSXzbI-EG1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                      </div>
                </div>
                    <h5 class="black-color py-4 fs-24 fw-bold">
                         Stage I
                    </h5>
                    <p class="black-color fs-16">
                        Early Treatment: This period of treatment encompasses ages 2 to 6. At this young age, we are concerned with underdeveloped dental arches, the premature loss of primary teeth & harmful habits like thumb-sucking. Treatment initiated in this stage of development is often very successful & many times (though not always) eliminates the need for future orthodontic or orthopedic treatment.
                   </p>

                   <h5 class="black-color py-4 fs-24 fw-bold">
                         Stage II
                    </h5>
                    <p class="black-color fs-16">
                        Mixed Dentition: This period covers the ages of 6 to 12, when the permanent front teeth (incisors) & 6-year molars come in. Treatment deals with jaw misalignment & dental realignment problems. This is an excellent stage to start treatment, when indicated, as your child’s hard & soft tissues are usually very responsive to orthodontic or orthopedic forces.
                   </p>

                   <h5 class="black-color py-4 fs-24 fw-bold">
                         Stage III
                    </h5>
                    <p class="black-color fs-16">
                        Adolescent Dentition: This stage deals with the permanent teeth & the development of the final bite relationship.
                   </p>
                    <p class="black-color fs-16">
                        We’re happy to work with your child at each of the above developmental stages. Call today to schedule an orthodontic consultation for your child.
                   </p>
                    </div>
                 </div>
              </div>
            </div>
    </section>


    @include('components.childrens-dentistry-links', [
        'title' => '  More Children\'s Dentistry',
        'bg' => 'bg-child-blue'
    ])

    @include('components.bottom-pages-links')

    @include('include.footer')
    </body>
</html>
