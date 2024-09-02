@include('header')

  <main class="main">

  <div class="page-title aos-init aos-animate" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Resume</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="current">Resume</li>
          </ol>
        </div>
      </nav>
    </div>

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Summary</h3>

            <div class="resume-item pb-0">
              <h4>{{ $resumeData['summary']['name']}}</h4>
              <p><em>{{ $resumeData['summary']['description']}}</em></p>
              <ul>
                <li>{{ $resumeData['summary']['location'] }}</li>
                <li>{{ $resumeData['summary']['phone'] }}</li>
                <li>{{ $resumeData['summary']['email'] }}</li>
              </ul>
            </div><!-- Edn Resume Item -->

  

            <h3 class="resume-title">Education</h3>
            @foreach ($resumeData['education'] as $education)
            <div class="resume-item">
              <h4>{{ $education['degree'] }}</h4>
              <h5>{{ $education['year'] }}</h5>
              <p><em>{{ $education['institution'] }}</em></p>
              <p>{{ $education['description'] }}</p>
            </div>
            @endforeach

            

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>

            @foreach ($resumeData['experience'] as $experience)
            


            <div class="resume-item">
              <h4>{{ $experience['title'] }}</h4>
              <h5>{{ $experience['year'] }}</h5>
              <p><em>{{ $experience['company'] }} </em></p>
              <ul>
                  @foreach ($experience['responsibilities'] as $responsibility)
                        <li>{{ $responsibility }}</li>
                  @endforeach
              </ul>
            </div>
            @endforeach
          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

  </main>

  @include('footer')