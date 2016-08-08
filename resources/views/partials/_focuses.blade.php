<section class="focus" id="focus">
  <div class="container">

    <div class="section-header">
      <h2 class="dark-text">My Focus</h2>
      <h6>I design &amp; develop qaulity products to help various clients.</h6>
    </div>

    <div class="row">

      @include('components._focus', ['color' => 'red', 'icon' => 'pd-icon-responsive', 'title' => 'Frontend Development', 'text' => 'I employ modern best practices when hand coding HTML, CSS, and Javascript to ensure clean, commented, and modular code.  Responsive design, cross-browser compatibility, and page optimization are all imperative.' ])

      @include('components._focus', ['color' => 'green', 'icon' => 'pd-icon-graph', 'title' => 'App Frameworks', 'text' => 'I’ve made web applications using many different frameworks.  I have spent the most time with the fronted frameworks: AngularJS, Backbone.js, and Ember.js.  I’ve also created Ruby on Rails and CakePHP web apps.' ])

      @include('components._focus', ['color' => 'blue', 'icon' => 'pd-icon-folder', 'title' => 'CMS Development', 'text' => 'I’ve worked extensively with three different content management systems: Wordpress, Shopify, and Convio.  I’ve made everything from eCommerce sites to fully featured and robust blog sites.' ])

      @include('components._focus', ['color' => 'yellow', 'icon' => 'pd-icon-config', 'title' => 'Frontend Tools', 'text' => 'Using fronted tools really speeds up the development process.  I’ve developed projects using LESS or SASS, Foundation or Bootstrap, CoffeeScript, and several other plugins or libraries.' ])

    </div>

    <div class="other-focuses">
      <h5><span class="section-footer-title">I ALSO FOCUS ON</span></h5>
    </div>

    <div class="other-focus-list wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
      <ul>
        <li><i class="icon-fontawesome-webfont-8"></i>UI/UX DESIGN</li>
        <li><i class="icon-fontawesome-webfont-267"></i>SEARCH ENGINE OPTIMIZATION</li>
        <li><i class="icon-fontawesome-webfont-74"></i>BACKEND DEVELOPMENT</li>
        <li><i class="icon-fontawesome-webfont-185"></i>GRAPHIC DESIGN</li>
        <li><i class="icon-fontawesome-webfont-266"></i>WEB MARKETING & BRANDING</li>
        <li><i class="icon-fontawesome-webfont-157"></i>EMAIL SETUP</li>
      </ul>
    </div>

  </div>
</section>