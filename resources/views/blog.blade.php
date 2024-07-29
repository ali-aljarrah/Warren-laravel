@include('include.head')
    <title>Blog | Warren MI | Warren Laser Dentistry</title>
    <meta name="description" content="Blog | Warren MI | Warren Laser Dentistry | A New Spirit Of Trusted & Affordable Dental Care">
    <link rel="canonical" href="https://www.warrenlaserdentistry.com/blog">
    <meta property="og:title" content="Blog | Warren MI | Warren Laser Dentistry">
    <meta property="og:description" content="Blog | Warren MI | Warren Laser Dentistry | A New Spirit Of Trusted & Affordable Dental Care">

  </head>
  <body>
    @include('include.loader')
    @include('include.menu')


     <section class="py-5">
        <div class="container-fluid block-padding">
            <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <div class="mx-auto">
                    <h1 class="dark-color-1 py-4 fs-40 fw-bold mb-4 ">
                        A New Spirit Of Trusted & Affordable Dental Care
                    </h1>
                </div>
                <div class="input-group rounded-3 bg-gray py-2 px-3 w-100 position-relative">
                    <svg width="30" height="30" class="pt-1" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.5002 21L17.1572 16.657M17.1572 16.657C17.9001 15.9141 18.4894 15.0322 18.8914 14.0615C19.2935 13.0909 19.5004 12.0506 19.5004 11C19.5004 9.9494 19.2935 8.90908 18.8914 7.93845C18.4894 6.96782 17.9001 6.08589 17.1572 5.343C16.4143 4.60011 15.5324 4.01082 14.5618 3.60877C13.5911 3.20673 12.5508 2.99979 11.5002 2.99979C10.4496 2.99979 9.40929 3.20673 8.43866 3.60877C7.46803 4.01082 6.58609 4.60011 5.84321 5.343C4.34288 6.84333 3.5 8.87821 3.5 11C3.5 13.1218 4.34288 15.1567 5.84321 16.657C7.34354 18.1573 9.37842 19.0002 11.5002 19.0002C13.622 19.0002 15.6569 18.1573 17.1572 16.657Z" stroke="#121212" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <input type="search" class="form-control mx-3 searchBar" id="search" placeholder="Search articles" aria-label="Search" aria-describedby="search-addon" />
                    <div id="results"></div>
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
                                {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $article->created_at)->format('M d, Y'); }}
                            </div>
                            <div class="dark-color-1 mb-2 fs-24 fw-bold">
                            {{ $article->title}}
                            </div>
                            <a class="fs-14 soft-green mb-2" href="/author/warren-laser-dentistry/">{{ $article->author}}</a>
                            <div class="flex-grow-1 d-flex flex-column">
                                <p class="fs-16 dark-color-1 mb-2">
                                    {!! Str::limit($article->article_content, 150, '...') !!}
                                </p>
                                <div class="mt-auto">
                                    <a class="fs-14 main-color-1 mb-2 text-decoration-underline" href="{{route('article', ['id' => $article->id, 'title' => str_replace(' ', '-', strtolower($article->title))])}}">Read more</a>
                                </div>
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

    @include('components.bottom-pages-links')

    @include('include.footer')

    <script src="/assets/js/jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var query = $(this).val();

                if(query.trim() === "" || query.length < 3) {
                    $('#results').empty();
                } else {
                    // Make AJAX request
                    $.ajax({
                        url: "{{ route('search') }}",
                        method: 'GET',
                        data: { query: query },
                        success: function(data) {
                            var resultsHtml = '';

                            if (data.length > 0) {
                                resultsHtml += '<ul>';
                                $.each(data, function(index, article) {
                                    resultsHtml += '<li><a class="dark-color" href="/blog/'+article.id+'/'+generateSlug(article.title)+'"><strong>' + article.title + '</strong>' + article.article_content.substring(0, 100) + '...</a></li>';
                                });
                                resultsHtml += '</ul>';
                            } else {
                                resultsHtml = '<div class="p-3 text-center"><p>No results found.</p></div>';
                            }

                            $('#results').html(resultsHtml);
                        }
                    });
                }
            });

            function generateSlug(title) {
                // Convert title to lowercase
                let slug = title.toLowerCase();
                // Replace spaces with hyphens
                slug = slug.replace(/\s+/g, '-');
                // Remove non-alphanumeric characters except for hyphens
                slug = slug.replace(/[^a-z0-9\-]/g, '');
                return slug;
            }
        });
    </script>
    </body>
</html>
