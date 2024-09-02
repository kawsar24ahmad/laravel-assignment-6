@include('header')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>About</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="current">About</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="../assets/img/profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2> @foreach($aboutData['summary']['title'] as $title)
                  {{ $title }}
              @endforeach</h2>
            <p class="fst-italic py-3">
            {{$aboutData['summary']['description']}}
            </p>
            <div class="row">
  <div class="col-lg-6">
    <ul>
      <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $aboutData['personal_info']['birthday'] }}</span></li>
      <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $aboutData['personal_info']['website'] }}</span></li>
      <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $aboutData['personal_info']['phone'] }}</span></li>
      <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $aboutData['personal_info']['city'] }}</span></li>
    </ul>
  </div>
  <div class="col-lg-6">
    <ul>
      <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $aboutData['personal_info']['age'] }}</span></li>
      <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $aboutData['personal_info']['degree'] }}</span></li>
      <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $aboutData['personal_info']['email'] }}</span></li>
      <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ $aboutData['personal_info']['freelance'] }}</span></li>
    </ul>
  </div>
</div>

            <p class="py-3">
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-emoji-smile"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-journal-richtext"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-headset"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-people"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <div><span>My</span> <span class="description-title">Skills</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

          

            @foreach($aboutData['skills'] as $skill => $value)
              <div class="progress">
                <span class="skill"><span>{{ $skill }}</span> <i class="val">{{ $value }}</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="{{ rtrim($value, '%') }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            @endforeach


          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <div><span>Check my</span> <span class="description-title">Testimonials</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper" data-speed="600" data-delay="5000" data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

          @foreach($aboutData['testimonials'] as $testimonial)
  <div class="swiper-slide">
    <div class="testimonial-item">
      <p>
        <i class="bi bi-quote quote-icon-left"></i>
        <span>{{ $testimonial['quote'] }}</span>
        <i class="bi bi-quote quote-icon-right"></i>
      </p>
      <h3>{{ $testimonial['name'] }}</h3>
      <h4>{{ $testimonial['title'] }}</h4>
    </div>
  </div>
@endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

  </main>

  @include('footer')