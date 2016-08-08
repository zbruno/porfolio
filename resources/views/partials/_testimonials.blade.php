<section class="testimonial" id="testimonials">
  <div class="container">
    <div class="section-header">
      <h2 class="dark-text">Testimonials</h2>
      <h6 class="dark-text">I have worked with several awesome clients. Check out what they are saying about me.</h6>
    </div>
    
    <div class="row wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
      <div class="col-md-12">
        <div id="client-feedbacks" class="owl-carousel owl-theme">

          @include('components._testimonial', ['name' => 'Lauren Mahoney', 'title' => 'Assistant, Sandwich Video', 'href' => 'http://laurenfm.com/', 'color' => 'red', 'img' => 'images/clients-pic/lauren.jpg', 'message' => 'Zach is a professional, and was great to work with.  We had a meeting together to talk about the specifics of the site, and he was really enthusiastic about my project. He gave me ideas for what would work well, but let me control the specifics. He\'s easy to talk to and I love my website!'])

          @include('components._testimonial', ['name' => 'Will Lemay', 'title' => 'Owner, The VapeLife Store', 'href' => 'http://thevapelifestore.com', 'color' => 'green', 'img' => 'images/clients-pic/will.jpg', 'message' => 'Zach worked for me for several months, and I gotta say he was amazing.  My eCommerce business has been booming ever since he took on the redesign and rebranding.  He gave my website, and perhaps more importantly, my company a fresh new start. I can\'t say enough good things about this guy.'])

          @include('components._testimonial', ['name' => 'Mike Eyia', 'title' => 'LA Saxophonist', 'href' => 'http://www.mikeplays.com', 'color' => 'blue', 'img' => 'images/clients-pic/mike.jpg', 'message' => 'I heard about Zach through a friend of a friend, and I am happy that I did.  He was a breeze to work with, and I didn\'t have to worry about anything.  I told him I wanted a unique and artistic website, and I am very happy with the result.  I know who I will be contacting next time I need web help.'])

          @include('components._testimonial', ['name' => 'Daniel Cook', 'title' => 'Owner, Happily Hungry', 'href' => 'http://happilyhungry.com/', 'color' => 'red', 'img' => 'images/clients-pic/danielle.jpg', 'message' => 'Overall, I was very impressed with Zach.  He has an amazing work ethic, and is really creative. At first I thought that my project would take months, but Zach worked hard and got it done in weeks while maintaining the perfection that I expect.  I would certainly recommend working with Zach.'])
          
        </div>
      </div>
    </div>
    
  </div>
</section>