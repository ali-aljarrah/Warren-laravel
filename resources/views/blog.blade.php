@include('include.head')
    <title>Blog | Warren MI | Warren Laser Dentistry</title>
    <meta name="description" content="Blog | Warren MI | Warren Laser Dentistry | A New Spirit Of Trusted & Affordable Dental Care">
    <link rel="canonical" href="https://www.warrenlaserdentistry.com/blog/">
    <meta property="og:title" content="Blog | Warren MI | Warren Laser Dentistry">
    <meta property="og:description" content="Blog | Warren MI | Warren Laser Dentistry | A New Spirit Of Trusted & Affordable Dental Care">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')


     <section class="py-5">
            <div class="block-padding">
              <div class="container-fluid">
                 <div class="row">
                 <div class="col-lg-6 mx-auto text-center">
                    <div class="mx-auto">
                 <h1 class="dark-color-1 py-4 fs-40 fw-bold mb-4 ">
                    A New Spirit Of Trusted & Affordable Dental Care
                 </h1>
                 <div class="input-group rounded-3 bg-gray py-2 px-3 w-100">
                         <svg width="30" height="30" class="pt-1" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M21.5002 21L17.1572 16.657M17.1572 16.657C17.9001 15.9141 18.4894 15.0322 18.8914 14.0615C19.2935 13.0909 19.5004 12.0506 19.5004 11C19.5004 9.9494 19.2935 8.90908 18.8914 7.93845C18.4894 6.96782 17.9001 6.08589 17.1572 5.343C16.4143 4.60011 15.5324 4.01082 14.5618 3.60877C13.5911 3.20673 12.5508 2.99979 11.5002 2.99979C10.4496 2.99979 9.40929 3.20673 8.43866 3.60877C7.46803 4.01082 6.58609 4.60011 5.84321 5.343C4.34288 6.84333 3.5 8.87821 3.5 11C3.5 13.1218 4.34288 15.1567 5.84321 16.657C7.34354 18.1573 9.37842 19.0002 11.5002 19.0002C13.622 19.0002 15.6569 18.1573 17.1572 16.657Z" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    <input type="search" class="form-control mx-3 searchBar" placeholder="Search articles" aria-label="Search" aria-describedby="search-addon" />
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-gray-2 py-5">
      <div class="container-fluid block-padding">

        <div class="row pt-3">


            @if(count($articles) > 0)
                @foreach ($articles as $article)
                    <div class="col-lg-3 mb-4 flex-frow-1 mx-auto">
                        <div class="rounded-4 p-3 hov-shadow h-100 d-flex flex-column">
                            <div class="mb-2">
                                <img class="img-fluid rounded-4" loading="lazy" width="460" height="200" src="/storage/{{ $article->image }}" alt="Warren - Blog - {{ $article->title }}">
                            </div>
                            <div class="fs-14 mb-2 pt-1 gray-color">
                                {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $article->created_at)->format('M d,yy'); }}
                            </div>
                            <div class="dark-color-1 mb-2 fs-24 fw-bold">
                            {{ $article->title}}
                            </div>
                            <a class="fs-14 soft-green mb-2" href="/author/warren-laser-dentistry/">{{ $article->author}}</a>
                            <div class="flex-grow-1">
                                <p class="fs-16 dark-color-1 mb-2">
                                    {!! Str::limit($article->article_content, 150, '...') !!}
                                </p>
                                <a class="fs-14 main-color-1 mb-2 text-decoration-underline" href="/blog/{{$article->id}}/{{str_replace(' ', '-', strtolower($article->title))}}">Read more</a>
                            </div>
                        </div>

                    </div>
                @endforeach
            @else
                <div class="col-lg-12">
                    <div class="text-center fs-20 fw-bold dark-color">
                        Sorry, No articles was found.
                    </div>
                </div>
            @endif


        </div>

        @if($articles instanceof \Illuminate\Pagination\LengthAwarePaginator)
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        @endif
      </div>
    </section>

    <section>
      <div class="footer-top">
          <div class="footer-card light">
              <div class="text-center">
                  <a href="/dental-implants" class="fs-24 fw-600 blue-color">
                      <span class="me-2">Dental Implants</span>
                      <span>
                          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#05395B"/>
                          </svg>
                      </span>
                  </a>
                  <p class="fs-16 blue-color mb-0 mt-4">
                  Eat, Chew & Smile Naturally Again! Dental implants look & feel like your own teeth. With a secure fit, you can finally eat what you want again!
                  </p>
              </div>
          </div>
          <div class="footer-card dark">
              <div class="text-center">
                  <a href="/invisalign" class="fs-24 fw-600 white-color">
                      <span class="me-2">Invisalign® Clear Braces</span>
                      <span>
                          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#ffffff"/>
                          </svg>
                      </span>
                  </a>
                  <p class="fs-16 white-color mb-0 mt-4">
                  Invisalign® is the revolutionary way to help you get even, straight teeth without noticeable, painful metal braces.
                  </p>
              </div>
          </div>
          <div class="footer-card light">
              <div class="text-center">
                  <a href="/veneers" class="fs-24 fw-600 blue-color">
                      <span class="me-2">Reshape & Whiten Your Smile With Veneers</span>
                      <span>
                          <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C11.7348 9 11.4804 8.89464 11.2929 8.70711C11.1053 8.51957 11 8.26522 11 8C11 7.73478 11.1053 7.48043 11.2929 7.29289C11.4804 7.10536 11.7348 7 12 7H24C24.2652 7 24.5196 7.10536 24.7071 7.29289C24.8946 7.48043 25 7.73478 25 8V20C25 20.2652 24.8946 20.5196 24.7071 20.7071C24.5196 20.8946 24.2652 21 24 21C23.7348 21 23.4804 20.8946 23.2929 20.7071C23.1053 20.5196 23 20.2652 23 20V10.4133L8.70666 24.7067C8.51709 24.8833 8.26636 24.9795 8.00729 24.9749C7.74822 24.9703 7.50104 24.8654 7.31783 24.6822C7.13461 24.4989 7.02966 24.2518 7.02509 23.9927C7.02052 23.7336 7.11668 23.4829 7.29332 23.2933L21.5867 9H12Z" fill="#05395B"/>
                          </svg>
                      </span>
                  </a>
                  <p class="fs-16 blue-color mb-0 mt-4">
                  Fix discolored, chipped or crooked teeth quickly & easily with natural-looking veneers.
                  </p>
              </div>
          </div>
      </div>
    </section>

    @include('include.footer')
    </body>
</html>
