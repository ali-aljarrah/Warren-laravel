@include('include.head')
    <title>{{$article->title}} | Warren MI</title>
    <meta name="description" content="{!! Str::limit(strip_tags($article->article_content), 159, '') !!}">
    <link rel="canonical" href="{{env('APP_URL')}}blog/{{$article->id}}/{{str_replace(' ', '-', strtolower($article->title))}}">
    <meta property="og:title" content="{{$article->title}} | Warren MI">
    <meta property="og:description" content="{!! Str::limit(strip_tags($article->article_content), 159, '') !!}">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')



    <section class="pages-banner lazybg">
        <div class="container-fluid block-padding">
            <div class="row mt-5">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="mx-auto">
                        <a href="{{route('blog')}}" class="text-decoration-none bg-green-card rounded-3 p-2 d-flex justify-content-center align-items-center w-fit mx-auto">
                            <span class="me-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.99994 10L3.29294 10.707L2.58594 10L3.29294 9.293L3.99994 10ZM20.9999 18C20.9999 18.2652 20.8946 18.5196 20.707 18.7071C20.5195 18.8946 20.2652 19 19.9999 19C19.7347 19 19.4804 18.8946 19.2928 18.7071C19.1053 18.5196 18.9999 18.2652 18.9999 18H20.9999ZM8.29294 15.707L3.29294 10.707L4.70694 9.293L9.70694 14.293L8.29294 15.707ZM3.29294 9.293L8.29294 4.293L9.70694 5.707L4.70694 10.707L3.29294 9.293ZM3.99994 9H13.9999V11H3.99994V9ZM20.9999 16V18H18.9999V16H20.9999ZM13.9999 9C15.8565 9 17.6369 9.7375 18.9497 11.0503C20.2624 12.363 20.9999 14.1435 20.9999 16H18.9999C18.9999 14.6739 18.4732 13.4021 17.5355 12.4645C16.5978 11.5268 15.326 11 13.9999 11V9Z" fill="black"/>
                                </svg>
                            </span>
                            <span class="fs-16 fw-bold me-3 black-color">
                                back to Blog
                            </span>
                        </a>
                    </div>
                    <h1 class="dark-color py-4 fs-40 fw-bold d-flex justify-content-center align-items-center">
                        {{$article->title}}
                    </h1>
                    <p class="dark-color fs-16">
                        {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $article->created_at)->format('M d, Y'); }} | In <a class="dark-color" href="{{route('blog')}}">Warren Laser Dentistry Blog</a> | By <a class="dark-color" href="{{route('home')}}">Amanda Mansour</a>
                    </p>
                    <div class="mt-4 d-flex flex-wrap justify-content-center align-items-center">
                        <div class="me-3">
                            <a class="social-media-btn" href="#" data-platform="facebook" target="_blank" rel="noopener noreferrer" aria-label="{{$article->title}} Facebook">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5 13.5H17L18 9.5H14.5V7.5C14.5 6.47 14.5 5.5 16.5 5.5H18V2.14C17.674 2.097 16.443 2 15.143 2C12.428 2 10.5 3.657 10.5 6.7V9.5H7.5V13.5H10.5V22H14.5V13.5Z" fill="#05395B"/>
                                </svg>
                            </a>
                        </div>
                        <div class="me-3">
                            <a class="social-media-btn" href="#" data-platform="twitter" target="_blank" rel="noopener noreferrer" aria-label="{{$article->title}} Twitter">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_42_15555)">
                                        <mask id="mask0_42_15555" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="21" height="20">
                                            <path d="M0.5 0H20.5V20H0.5V0Z" fill="white"/>
                                        </mask>
                                        <g mask="url(#mask0_42_15555)">
                                            <path id="fill-twitter" d="M16.25 0.937141H19.3171L12.6171 8.61428L20.5 19.0629H14.3286L9.49143 12.7271L3.96286 19.0629H0.892857L8.05857 10.8486L0.5 0.93857H6.82857L11.1943 6.72857L16.25 0.937141ZM15.1714 17.2229H16.8714L5.9 2.68143H4.07714L15.1714 17.2229Z" fill="#05395B"/>
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_42_15555">
                                            <rect width="20" height="20" fill="white" transform="translate(0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                        <div class="me-3">
                            <a class="social-media-btn" href="#" data-platform="pinterest" target="_blank" rel="noopener noreferrer" aria-label="{{$article->title}} Pinterest">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.54 21.54C10.5 21.83 11.47 22 12.5 22C15.1522 22 17.6957 20.9464 19.5711 19.0711C21.4464 17.1957 22.5 14.6522 22.5 12C22.5 10.6868 22.2413 9.38642 21.7388 8.17317C21.2362 6.95991 20.4997 5.85752 19.5711 4.92893C18.6425 4.00035 17.5401 3.26375 16.3268 2.7612C15.1136 2.25866 13.8132 2 12.5 2C11.1868 2 9.88642 2.25866 8.67317 2.7612C7.45991 3.26375 6.35752 4.00035 5.42893 4.92893C3.55357 6.8043 2.5 9.34784 2.5 12C2.5 16.25 5.17 19.9 8.94 21.34C8.85 20.56 8.76 19.27 8.94 18.38L10.09 13.44C10.09 13.44 9.8 12.86 9.8 11.94C9.8 10.56 10.66 9.53 11.64 9.53C12.5 9.53 12.9 10.16 12.9 10.97C12.9 11.83 12.33 13.06 12.04 14.24C11.87 15.22 12.56 16.08 13.56 16.08C15.34 16.08 16.72 14.18 16.72 11.5C16.72 9.1 15 7.46 12.53 7.46C9.71 7.46 8.05 9.56 8.05 11.77C8.05 12.63 8.33 13.5 8.79 14.07C8.88 14.13 8.88 14.21 8.85 14.36L8.56 15.45C8.56 15.62 8.45 15.68 8.28 15.56C7 15 6.26 13.18 6.26 11.71C6.26 8.55 8.5 5.68 12.82 5.68C16.26 5.68 18.94 8.15 18.94 11.43C18.94 14.87 16.81 17.63 13.76 17.63C12.79 17.63 11.84 17.11 11.5 16.5L10.83 18.87C10.6 19.73 9.97 20.88 9.54 21.57V21.54Z" fill="#05395B"/>
                                </svg>
                            </a>
                        </div>
                        <div class="me-3">
                            <a class="social-media-btn" href="#" data-platform="linkedin" target="_blank" rel="noopener noreferrer" aria-label="{{$article->title}} Linkedin">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.44141 5C7.44114 5.53043 7.23017 6.03904 6.85491 6.41392C6.47965 6.78881 5.97084 6.99927 5.44041 6.999C4.90997 6.99874 4.40137 6.78777 4.02649 6.41251C3.6516 6.03725 3.44114 5.52843 3.44141 4.998C3.44167 4.46757 3.65264 3.95897 4.0279 3.58408C4.40316 3.20919 4.91197 2.99874 5.44241 2.999C5.97284 2.99927 6.48144 3.21023 6.85633 3.58549C7.23121 3.96075 7.44167 4.46957 7.44141 5ZM7.50141 8.48H3.50141V21H7.50141V8.48ZM13.8214 8.48H9.84141V21H13.7814V14.43C13.7814 10.77 18.5514 10.43 18.5514 14.43V21H22.5014V13.07C22.5014 6.9 15.4414 7.13 13.7814 10.16L13.8214 8.48Z" fill="#05395B"/>
                                </svg>
                            </a>
                        </div>
                        <div class="me-3">
                            <a class="social-media-btn" href="#" data-platform="whatsapp" target="_blank" rel="noopener noreferrer" aria-label="{{$article->title}} WhatsApp">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" fill="#05395B"/>
                                </svg>
                            </a>
                        </div>
                        <div class="me-3">
                            <a class="social-media-btn" href="#" data-platform="xing" target="_blank" rel="noopener noreferrer" aria-label="{{$article->title}} xing">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.9637 3.23C21.1177 3.23 21.2717 3.308 21.3477 3.385C21.3855 3.45595 21.4053 3.53511 21.4053 3.6155C21.4053 3.6959 21.3855 3.77506 21.3477 3.846L15.2717 14.616L19.1177 21.692C19.1557 21.7631 19.1756 21.8424 19.1756 21.923C19.1756 22.0036 19.1557 22.0829 19.1177 22.154C19.0123 22.2504 18.8755 22.3051 18.7327 22.308H15.9627C15.5787 22.308 15.3487 22 15.1947 21.769L11.2717 14.615C11.5017 14.308 17.4257 3.77 17.4257 3.77C17.5787 3.462 17.8097 3.232 18.1947 3.232L20.9637 3.23ZM9.42471 7C9.80971 7 10.0407 7.308 10.1947 7.538L12.1177 10.846C11.9637 11 9.11771 16.076 9.11771 16.076C8.96371 16.308 8.73271 16.616 8.34771 16.616H5.65671C5.51428 16.6129 5.37783 16.5582 5.27271 16.462C5.23472 16.3909 5.21484 16.3116 5.21484 16.231C5.21484 16.1504 5.23472 16.0711 5.27271 16L8.11871 10.846L6.27271 7.616C6.23472 7.54493 6.21484 7.46559 6.21484 7.385C6.21484 7.30442 6.23472 7.22507 6.27271 7.154C6.37757 7.05807 6.51363 7.00336 6.65571 7H9.42471Z" fill="#05395B"/>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a class="social-media-btn" href="#" data-platform="telegram" target="_blank" rel="noopener noreferrer" aria-label="{{$article->title}} telegram">
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_42_15567)">
                                        <path d="M19.9574 0.218724C20.352 0.492161 20.559 0.964817 20.4848 1.43747L17.9848 17.6875C17.9262 18.0664 17.6957 18.3984 17.3598 18.5859C17.0238 18.7734 16.6215 18.7968 16.266 18.6484L11.5942 16.707L8.91838 19.6015C8.57072 19.9804 8.02384 20.1054 7.54338 19.9179C7.06291 19.7304 6.75041 19.2656 6.75041 18.75V15.4843C6.75041 15.3281 6.809 15.1797 6.91447 15.0664L13.4613 7.92185C13.6879 7.67575 13.6801 7.29685 13.4457 7.06247C13.2113 6.8281 12.8324 6.81247 12.5863 7.03513L4.64103 14.0937L1.19181 12.3672C0.777751 12.1601 0.512126 11.7461 0.500407 11.2851C0.488688 10.8242 0.730876 10.3945 1.12931 10.164L18.6293 0.164036C19.0473 -0.0742449 19.5629 -0.0508074 19.9574 0.218724Z" fill="#05395B"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_42_15567">
                                            <rect width="20" height="20" fill="white" transform="translate(0.5)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-5">
        <div class="container-fluid block-padding">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="text-center">
                        <img class="img-fluid blog-image" loading="lazy" width="100%" height="432" src="/storage/{{ $article->image }}" alt="Warren - Blog - {{ $article->title }}">
                    </div>
                    <div class="fs-16 black-color mt-4">
                        {!! $article->article_content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.bottom-pages-links')

    @include('include.footer')

    <script src="{{asset('/assets/js/article.js')}}" defer></script>
    </body>
</html>
