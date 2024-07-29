@include('include.head')
    <title>Your Child's First Exam Warren MI | Child Dental Exam</title>
    <meta name="description" content="The American Dental Association recommends taking your child to their first dental exam within 6 months of when they get their first tooth. ☎️ 586-756-6351">
    <link rel="canonical" href="https://www.URL.COM/first-exam">
    <meta property="og:title" content="Your Child's First Exam Warren MI | Child Dental Exam">
    <meta property="og:description" content="The American Dental Association recommends taking your child to their first dental exam within 6 months of when they get their first tooth. ☎️ 586-756-6351">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')


    <section class="page-bg-image shadow-bg-layer " style="background-image: url(/assets/imgs/your-childs-first-exam/banner.webp)">
      <div class="block-padding">
            <div class="container-fluid">
               <div class="row">
               <div class="col-lg-8 mx-auto text-center">
                  <div class="mx-auto">
                      <a href="{{route('childrens-dentistry')}}" class="text-decoration-none bg-green-card rounded-3 p-2 d-flex justify-content-center align-items-center w-fit mx-auto">
                          <span class="me-2">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M3.99994 10L3.29294 10.707L2.58594 10L3.29294 9.293L3.99994 10ZM20.9999 18C20.9999 18.2652 20.8946 18.5196 20.707 18.7071C20.5195 18.8946 20.2652 19 19.9999 19C19.7347 19 19.4804 18.8946 19.2928 18.7071C19.1053 18.5196 18.9999 18.2652 18.9999 18H20.9999ZM8.29294 15.707L3.29294 10.707L4.70694 9.293L9.70694 14.293L8.29294 15.707ZM3.29294 9.293L8.29294 4.293L9.70694 5.707L4.70694 10.707L3.29294 9.293ZM3.99994 9H13.9999V11H3.99994V9ZM20.9999 16V18H18.9999V16H20.9999ZM13.9999 9C15.8565 9 17.6369 9.7375 18.9497 11.0503C20.2624 12.363 20.9999 14.1435 20.9999 16H18.9999C18.9999 14.6739 18.4732 13.4021 17.5355 12.4645C16.5978 11.5268 15.326 11 13.9999 11V9Z" fill="black"/>
                              </svg>
                          </span>
                          <span class="fs-16 fw-bold me-3 black-color">
                            back to Children’s Dentistry
                          </span>
                      </a>
                  </div>
                  <h1 class="white-color-1 py-4 fs-40 fw-bold d-flex justify-content-center align-items-center">
                    Your Child’s First Exam
                  </h1>
                  <p class="white-color fs-16">
                    We’re happy to work with your child at each of their developmental stages.
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
                          <p class="black-color fs-16">
                            Many parents wonder why it’s important to take care of their children’s baby teeth (or as we call them, primary teeth) when they will just be replaced with adult teeth in a few years or less. Besides the importance of children learning good dental habits to carry with them through their lives, teeth are essential for speaking & eating. Children with bad or missing teeth may have trouble speaking with confidence or eating the food they need to grow. Additionally, poor dental health is one of the main reasons children miss school—think about how hard it is to concentrate on work or to get quality sleep when you have a toothache!
                          </p>
                          <div class="bg-child-blue p-4 rounded-4 mt-4 mb-4">
                              <h2 class="soft-dark fs-24 mb-4 fw-bold">
                                When Should A Child First See A Dentist?
                              </h2>
                            <p class="soft-dark fs-16">
                                The American Dental Association recommends taking your child to his or her first dental exam within 6 months of when they get their first tooth. This might seem early, but it’s never too early to start forming a positive relationship with a dentist! Plus, children who have a good relationship with their dentist are more likely to be well-behaved at dental visits & form good dental habits that prevent costly dental work in the future.
                            </p>
                          </div>

                          <div class="mb-5">
                              <h3  class="black-color fs-24 mb-3 fw-bold">
                                Procedure Overview                   
                              </h3>
                              <p class="black-color fs-16">
                                At those early appointments, we can show you how to care for your child’s teeth. We can also talk about things that can support dental health, like fluoride & diet choices. As your child grows, their appointments will start to look similar to your own regular visits, with cleanings & cavity checks. Regular visits also allow us to track your child’s dental needs so we can develop a personalized dental plan as they grow.
                              </p>
                          </div>
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
