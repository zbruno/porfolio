<section class="works" id="works">
  <div class="container">
    <div class="section-header">
      <h2 class="dark-text">Portfolio</h2>
      <h6>I have designed and developed several awesome products. Just take a look.</h6>
    </div>

    <div class="row projects">
      <div id="loader">
          <div class="loader-icon"></div>
      </div>

      <div class="col-md-12" id="portfolio-list">
        <ul class="cbp-rfgrid clearfix">
          <h4 class="portfolio-title wow fadeIn animated" data-wow-offset="30" data-wow-delay="0.15s">
            Freelance Websites
          </h4>

          @include('components._project', ['fade' => 'fadeInLeft', 'delay' => '0.15', 'name' => 'vls', 'src' => 'images/portfolio/vls.jpg', 'alt' => 'Zachary Bruno The VapeLife Store', 'title' => 'The VapeLife Store', 'subtitle' => 'Shopify Development & Design' ])

          @include('components._project', ['fade' => 'fadeInLeft', 'delay' => '0.3', 'name' => 'lar', 'src' => 'images/portfolio/lar.jpg', 'alt' => 'Zachary Bruno Los Angeles Renegade', 'title' => 'Los Angeles Renegade Ultimate', 'subtitle' => 'Wordpress Development & Design' ])

          @include('components._project', ['fade' => 'fadeInLeft', 'delay' => '0.45', 'name' => 'lauren', 'src' => 'images/portfolio/laurenresume2.jpg', 'alt' => 'Zachary Bruno Lauren Mahoney Resume', 'title' => 'Lauren Mahoney', 'subtitle' => 'Frontend Development & Design' ])

          @include('components._project', ['fade' => 'fadeInLeft', 'delay' => '0.6', 'name' => 'detox', 'src' => 'images/portfolio/detoxsite2.jpg', 'alt' => 'Zachary Bruno Occidental College Detox Ultimate', 'title' => 'Detox Ultimate', 'subtitle' => 'Frontend Development & Design' ])

          {{-- @include('components._project', ['fade' => 'fadeInLeft', 'delay' => '0.75', 'name' => 'mikeplays', 'src' => 'images/portfolio/mikeplays2.jpg', 'alt' => 'Zachary Bruno Mike Eyia Los Angeles Saxophone', 'title' => 'Mike Eyia', 'subtitle' => 'Frontend Development & Design' ]) --}}

          {{-- @include('components._project', ['fade' => 'fadeInLeft', 'delay' => '0.90', 'name' => 'school', 'src' => 'images/portfolio/school2.jpg', 'alt' => 'Zachary Bruno Academic Projects', 'title' => 'Academic Projects', 'subtitle' => 'Frontend Development & Design' ]) --}}

        </ul>

        <ul class="cbp-rfgrid clearfix">
          <h4 class="portfolio-title wow fadeIn animated" data-wow-offset="30" data-wow-delay="0.15s">
            Frontend Skill Demonstrations
          </h4>

          @include('components._project', ['fade' => 'fadeInRight', 'delay' => '0.6', 'name' => 'ember', 'src' => 'images/portfolio/ember.jpg', 'alt' => 'Zachary Bruno Ember.js Example App', 'title' => 'Eagles Ember.js Blog', 'subtitle' => 'Ember.js Development' ])

          @include('components._project', ['fade' => 'fadeInRight', 'delay' => '0.45', 'name' => 'bunny', 'src' => 'images/portfolio/bunny.jpg', 'alt' => 'Zachary Bruno HTML5 Game Example', 'title' => 'Bunny Protector', 'subtitle' => 'HTML5 Game Development' ])

          @include('components._project', ['fade' => 'fadeInRight', 'delay' => '0.3', 'name' => 'express', 'src' => 'images/portfolio/express.jpg', 'alt' => 'Zachary Bruno Express.js Example App', 'title' => 'Eagles Express.js Website', 'subtitle' => 'Express.js Development' ])

          @include('components._project', ['fade' => 'fadeInRight', 'delay' => '0.15', 'name' => 'solar', 'src' => 'images/portfolio/solar.jpg', 'alt' => 'Zachary Bruno CSS3 Example', 'title' => 'Solar System', 'subtitle' => 'CSS3 Development' ])

        </ul>
      </div>
    </div>
    
    <!-- PROJECT DETAILS WILL BE LOADED HERE -->
    <div id="loaded-content">
      @include('components._project_load', ['name' => 'bunny', 'url' => 'http://zachcbruno.com/hosted-projects/bunny-protector/index.html', 'image' => 'images/projects/bunny.jpg', 'title' => 'HTML5 Game - Bunny Protector', 'text' => 'This HTML5 game was a fun personal project that I chose to undertake.  I had fun making this one, and learned a ton of the Phaser framework.  While this game is very simple, I see the potential and I can definitely imagine creating a serious robust game.  I hope to have time to play around with Phaser some more in the future.', 'linkText' => 'Play the game!', 'date' => 'August 12, 2013', 'fields' => 'Game Development, Game Design', 'client' => 'Personal Project' ])
      @include('components._project_load', ['name' => 'detox', 'url' => 'http://www.detox-ultimate.co', 'image' => 'images/projects/detoxsite.jpg', 'title' => 'Detox Ultimate Team Site', 'text' => 'Being a former player for the team, I was excited to make this site.  The new captains for the team explained to me that they wanted the team to have a strong online presence.  I had always thought it would be a great idea, so I jumped right on top of the project.  I designed the entire thing from scratch using the Bootstrap framework.  The team will now have a place to show it\'s stuff!', 'linkText' => 'www.detox-ultimate.com', 'date' => 'June 4, 2014', 'fields' => 'Web Development & Design', 'client' => 'Detox Ultimate' ])
      @include('components._project_load', ['name' => 'ember', 'url' => 'http://zachcbruno.com/hosted-projects/ember-eagles-blog/index.html', 'image' => 'images/projects/ember.jpg', 'title' => 'Eagles Ember.js Blog', 'text' => 'This Ember.js app was a fun personal project that I chose to undertake.  I learned a ton about the Ember framework.  It has a great routing system, and seems to be a very lightweight framework.  The framework has a lot of potential and I can definitely imagine creating a serious robust application.  I hope to have time to play around with Ember some more.', 'linkText' => 'Check out the blog!', 'date' => 'January 26 2014', 'fields' => 'Web Development & Design', 'client' => 'Personal Project' ])
      @include('components._project_load', ['name' => 'express', 'url' => 'http://eagles-express-app.herokuapp.com/', 'image' => 'images/projects/express.jpg', 'title' => 'Eagles Express.js Webpage', 'text' => 'This Express.js app was an interesting project that I chose to undertake.  I learned a ton about the Express framework.  The framework has a lot of potential and I can definitely imagine creating a serious robust application.  I hope to have time to play around with Express some more.', 'linkText' => 'eagles-express-app.herokuapp.com', 'date' => 'March 26 2014', 'fields' => 'Web Development & Design', 'client' => 'Personal Project' ])
      @include('components._project_load', ['name' => 'lar', 'url' => 'http://losangelesrenegade.com', 'image' => 'images/projects/lar.jpg', 'title' => 'Los Angeles Renegade', 'text' => 'I actually play for this club ultimate team.  After the veterans on the team showed me the current website that they had, I offered my services.  Coincidentally, they were looking for someone to design them a new website, so I got right to work.  I worked hard to create a new brand for the team, and to present this through the website.  In the end, the team was very happy with their new website, and is excited to use the site to show themselves off to the world.', 'linkText' => 'http://losangelesrenegade.com', 'date' => 'August 15, 2014', 'fields' => 'Web Design, UI Design, Branding', 'client' => 'Los Angeles Renegade Ultimate' ])
      @include('components._project_load', ['name' => 'lauren', 'url' => 'http://www.laurenfm.com', 'image' => 'images/projects/laurenresume.jpg', 'title' => 'Lauren\'s Resume Site', 'text' => 'Lauren approached me after she graduated college asking for an online resume.  I was excited about the project, as I had only done online portfolios before.  She wanted the site to be simple, so I figured I would make the site all on one page.  The site presents Lauren\'s work experience in a direct, but stylish way.', 'linkText' => 'www.laurenfm.com', 'date' => 'December 5, 2013', 'fields' => 'Web Design, UI Design', 'client' => 'Lauren Mahoney' ])
      @include('components._project_load', ['name' => 'mikeplays', 'url' => 'http://www.mikeplays.com', 'image' => 'images/projects/mikeplays.jpg', 'title' => 'Mike Eyia\'s Professional Site', 'text' => 'Mike Eyia contacted me asking for a website to showcase his career as a Saxophonist.  He wanted a creative and unique way to present himself on the internet.  Both he and I were happy with the results, as we felt that his style and personality really became apparent through the site\'s aesthetic.', 'linkText' => 'www.mikeplays.com', 'date' => 'November 21, 2013', 'fields' => 'Web Design, UI Design', 'client' => 'Mike Eyia' ])
      @include('components._project_load', ['name' => 'school', 'url' => 'http://www.zachcbruno.com/academic/index.html', 'image' => 'images/projects/school.jpg', 'title' => 'Academic Works', 'text' => 'I put this site together to display the various projects that I completed during my web design training at UCLA, UCI, CalTech, and Occidental College. These projects will continue to evolve as I continue my web and programming training.', 'linkText' => 'Click Here', 'date' => '2011 - 2014', 'fields' => 'Web Design', 'client' => 'Various Courses' ])
      @include('components._project_load', ['name' => 'solar', 'url' => 'http://zachcbruno.com/hosted-projects/solar-system/index.html', 'image' => 'images/projects/solar.jpg', 'title' => 'CSS3 Solar System', 'text' => 'This CSS3 project was a fun one to make.  I learned all about the new CSS3 features, including: transitions, rotations, and more.  It is really interesting to see how far CSS has come, and to see it replacing a lot of the functionality that used to be exclusive to javascript.  CSS3 has clearly added a ton of awesome features in the language, and I play to use them on a daily basis in my work.', 'linkText' => 'Check out the solar system!', 'date' => 'February 14, 2014', 'fields' => 'Web Development & Design', 'client' => 'Personal Project' ])
      @include('components._project_load', ['name' => 'vls', 'url' => 'http://thevapelifestore.com', 'image' => 'images/projects/vls.jpg', 'title' => 'The VapeLife Store', 'text' => 'The VapeLife Store approached me seeking a more modern look to their online store.  After reviewing their site at the time, I found plenty of room for improvement.  I updated this shopify website to give the site a more clean, professional, and trustworthy feel.  Since the update, the store owner has been very happy with it and has reported extra store earnings, which I consider a great success.', 'linkText' => 'thevapelifestore.com', 'date' => 'July 25, 2014', 'fields' => 'Web Design, UI Design, Branding', 'client' => 'The VapeLife Store' ])
    </div>

    <a id="back-button" class="red-btn"><i class="icon-fontawesome-webfont-27"></i> Go Back</a>
    
  </div>
</section>