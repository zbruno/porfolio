<section class="about-us" id="aboutus">
  <div class="container">
    <div class="section-header">
      <h2 class="dark-text">About ME</h2>
      <h6 class="dark-text">I'm a frontend web developer living in Los Angeles, CA.</h6>
    </div>

    <div class="row">
      <div class="col-lg-8 col-md-8 column">
        <p class="wow fadeInUp animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
          As you’ve most likely gathered by now, my name is Zachary Bruno and I am a fronted developer living in Los Angeles.  I have been focused on the frontend development skills since 2011, but I also have training and experience in both UI/UX design and backend development.  All of my skills combined together make me a very proficient and effective freelancer. <br><br>

          I’ve been working with tons of the most popular frontend languages, frameworks, and libraries.  I got my start through hand-coding HTML, CSS, and Javascript.  I then expanded into the awesome Javascript application frameworks: AngularJS, Backbone.js, and Ember.js.  These frameworks unlock a much deeper potential in developing, and I could geek out with these all day.  I also use tons of great frontend tools and libraries like Bootstrap, Foundation, Sass, and CoffeeScript to name a few.  If it exists, chances are I have experience with it. <br><br>

          If you’re curious, I learned computer science almost entirely from UCLA, which I found to have excellent programs for both the development and the design skills.  After I took a variety of courses from UCLA, I began teaching myself whatever I found interesting.  I love learning new technology, and I stay up to date with all the latest trends and standards.  I’m a sponge that welcomes the daily challenge of learning new things and perfecting new techniques. <br><br>

          I love what I do.  Developing really gels with me, and I’m lucky to have found a career path that I am so passionate about. There is constantly room to learn and grow as a developer, which is great because the alternative would get boring quickly.  I will continue to seek work in environments that are constantly looking to improve, learn, and develop amazing applications.
        </p>
      </div>
      
      <!-- COLUMN 1 - SKILSS-->
      <div class="col-lg-4 col-md-4 column">
        <ul class="skills wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">

          @include('components._skill', ['value' => '97', 'num' => '1', 'title' => 'HTML/CSS', 'text' => 'This is my bread and butter. I take these languages to their absolute limits.'])

          @include('components._skill', ['value' => '91', 'num' => '2', 'title' => 'Javascript', 'text' => 'I\'ve been working with Javascript for years.  Frameworks and libraries included.'])

          @include('components._skill', ['value' => '87', 'num' => '3', 'title' => 'CMS', 'text' => 'Clients often need a CMS, so it is no wonder I have the experience.'])

          @include('components._skill', ['value' => '85', 'num' => '4', 'title' => 'AngularJS', 'text' => 'Made several Angular apps for various reasons and personal projects.'])
          
        </ul> 
      </div>
    </div>
  </div>
</section>