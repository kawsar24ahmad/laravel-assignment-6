

  @include('header')

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="../assets/img/herobg.jpg" alt="" data-aos="fade-in">
      <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h2> {{$data['summary']['name']}} </h2>
        <p>I'm 
           <span class="typed" data-typed-items="@foreach($data['summary']['title'] as $type) {{$type}}@if(!$loop->last), @endif @endforeach ">Photographer</span><span class="typed-cursor typed-cursor--blink"></span></p>
        <div class="social-links">
          <a href="#"><i class="bi bi-twitter-x"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </section><!-- /Hero Section -->

    


  </main>

  @include('footer')

  