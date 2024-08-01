@include('include.head')
    <title>You searched for {{$query}} | Warren Laser Dentistry</title>
    <meta name="description" content="As your Warren dentist, we offer comprehensive dental care, from routine hygiene to expert cosmetic & restorative dentistry. ☎️ 586-756-6351">
    <link rel="canonical" href="https://www.warrenlaserdentistry.com/search?query={{$query}}">
    <meta property="og:title" content="You searched for {{$query}} | Warren Laser Dentistry">
    <meta property="og:description" content="As your Warren dentist, we offer comprehensive dental care, from routine hygiene to expert cosmetic & restorative dentistry. ☎️ 586-756-6351">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')



    <section class="pages-banner">
        <div class="container-fluid block-padding">
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="dark-color py-4 fs-40 fw-bold d-flex justify-content-center align-items-center">
                        Search Result for {{$query}}
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-2 py-5">
        <div class="container-fluid block-padding">
          <div class="row pt-3">
              @if(count($pages) > 0)
                  @foreach ($pages as $page)
                      <div class="col-lg-12 mb-4 flex-frow-1 mx-auto">
                        <a class="text-decoration-none dark-color-1" href="{{$page->url}}">
                            <div class="rounded-4 p-3 hov-shadow h-100 d-flex flex-column">
                                <div class="dark-color-1 mb-2 fs-24 fw-bold">
                                {!! $page->title !!}
                                </div>
                                <div class="flex-grow-1 d-flex flex-column">
                                    <p class="fs-16 dark-color-1 mb-2">
                                        {!! Str::limit(str_replace("UNCODE.initBox();", "", $page->content), 500, '...') !!}
                                    </p>
                                </div>
                            </div>
                        </a>
                      </div>
                  @endforeach
              @else
                  <div class="col-lg-12">
                      <div class="text-center fs-20 fw-bold dark-color">
                          Sorry, No pages was found.
                      </div>
                  </div>
              @endif


          </div>

          @if($pages instanceof \Illuminate\Pagination\LengthAwarePaginator)
              <div class="row">
                  <div class="col-lg-12">
                      <div class="text-center">
                          {{ $pages->links() }}
                      </div>
                  </div>
              </div>
          @endif
        </div>
      </section>

    @include('components.bottom-pages-links')

    @include('include.footer')
    </body>
</html>
