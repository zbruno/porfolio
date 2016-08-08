<section class="contact-us" id="contact">
  <div class="container">
    <div class="section-header">
      <h2 class="white-text">Get in touch</h2>
      <h6 class="white-text">Have any question? Drop me a message, and I will get back to you as soon as I can.</h6>
    </div>
    
    <div class="row">
      <form role="form" action="send_form_email.php" class="contact-form" method="post">
        <div class="wow fadeInLeft animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
          <div class="col-lg-4 col-sm-4">
            <input type="text" name="name" placeholder="Your Name" class="form-control input-box">
          </div>
          <div class="col-lg-4 col-sm-4">
            <input type="email" name="email" placeholder="Your Email" class="form-control input-box">
          </div>
          <div class="col-lg-4 col-sm-4">
            <input type="text" name="subject" placeholder="Subject" class="form-control input-box">
          </div>
        </div>
        
        <div class="col-md-12 wow fadeInRight animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s">
          <textarea name="message" class="form-control textarea-box" placeholder="Your Message"></textarea>
        </div>
        <button class="btn btn-primary custom-button red-btn wow fadeInLeft animated send-button" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s" type="submit">Send Message</button>
      </form>
    </div>
  </div>
</section>