<style>
  #contact-google-map {
    width: 100%;
    height: 300px;
  }

  @media (max-width: 767.98px) {
    #contact-google-map {
      height: 300px;
    }
  }

  #contactForm .error {
    color: red;
    font-size: 12px;
  }

  #contactForm {
    font-size: 16px;
  }

  #message {
    resize: vertical;
  }

  #form-message-warning,
  #form-message-success {
    display: none;
  }

  #form-message-warning {
    color: red;
  }

  #form-message-success {
    color: #28a745;
    font-size: 18px;
    font-weight: 500;
  }

  .submitting {
    float: left;
    width: 100%;
    padding: 10px 0;
    display: none;
    font-size: 16px;
    font-weight: 500;
    color: #2553b8;
  }
</style>
<?php 
  $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [] ;
  $mail_errors = isset($_SESSION['mail-errors']) ? $_SESSION['mail-errors'] : [];
  $fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [] ;

  $where_at = isset($_GET['url']) ? $_GET['url'] : $url[0] ; 
  echo "where_at: ". $where_at;
  echo "url[0]: " . $url[0];
  ?>
  
<div id="my-modal" class="contact-modal">
  <div class="contact-modal-content">
    <div class="contact-modal-header">
      <span class="contact-modal-close">&times;</span>
      <h2 class="header-title">Contact :::</h2>
    </div>

    <div class="contact-modal-body">

    <div class="form-group">
    
      <!-- You can use one of these 3 divs to show errors -->
      <?php if(!empty($errors)) : ?>
        <div class="panel contact-full-name">
          <ul>
          <li><?php implode('<li></li>', $errors); ?></li>
          <li> mail-errors-session: <?php echo isset($_SESSION['mail-errors']) ? print_r($mail_errors) : '' ?></li>
          </ul>
        </div>
      <?php endif; ?>
      <div id="form-message-warning"></div>
      <div id="form-message-success">
        Your message was sent, thank you!
      </div>

      <form action="<?php URLROOT; ?>send_email/contact_info" 
      id="contact-form" name="contact-form" class="contact-form" method="POST">
      <!-- <form action="" method="POST" id="contact-form" name="contact-form" enctype="text/plain"> -->

        <div class="contact-box">
          <input type="hidden" class="contact-hidden-input" value="<?= $where_at?>" name="hidden-value"/>
        </div>
        <!-- Contact Full Name -->
        <div class="contact-box">
          <span class="fa fa-user"></span>
          <label class="label" for="contact-full-name">Full Name <span class="asterisk-required">*</span></label>
          <i class="fa-regular fa-circle-check"></i>
          <i class="fa-regular fa-circle-xmark"></i>
          <small></small>
          <input type="text" class="contact-input contact-full-name"" name=" contact-full-name" id="contact-full-name" value="<?php echo isset($fields['contact-full-name']) ? test_input($fields['contact-full-name']) : ""; ?>" />
        </div>
        <!-- Contact Email -->
        <div class="contact-box">
          <span class="fa fa-envelope"></span>
          <label class="label" for="contact-email">Email <span class="asterisk-required">*</span></label>
          <i class="fa-regular fa-circle-check"></i>
          <i class="fa-regular fa-circle-xmark"></i>
          <small></small>
          <input type="text" class="contact-input contact-email" name="contact-email" id="contact-email">
        </div>
        <!-- Contact Subject -->
        <div class="contact-box">
          <span class="fa fa-pencil"></span>
          <label class="label" for="-contact-subject">Subject <span class="asterisk-required">*</span></label>
          <i class="fa-regular fa-circle-check"></i>
          <i class="fa-regular fa-circle-xmark"></i>
          <small></small>
          <input type="text" class="contact-input contact-subject" name="contact-subject" id="contact-subject" >
        </div>
        <!-- Contact Message -->
        <div class="contact-box">
          <span class="fa fa-comment"></span>
          <label class="label" for="-contact-message">Message <span class="asterisk-required">*</span></label>
          <i class="fa-regular fa-circle-check"></i>
          <i class="fa-regular fa-circle-xmark"></i>
          <small></small>
          <textarea class="contact-input contact-text-area" name="contact-message" cols="40" rows="4" id="contact-message"><?php echo isset($fields['contact-message']) ? test_input($fields['contact-message']) : ""; ?></textarea>
        </div>
        
        <button class="btn contact-submit-btn" type="submit" name="submit">Send</button>
      </form>
    
    </div> <!-- Eng of form-group -->
    <div class="contact-map">
      <div id="contact-google-map"></div>
      </div>
    </div>

    <div class="contact-modal-footer">
      <span class="fa fa-map-marker"></span>
      <span class="fa fa-phone"></span>
      <span class="fa fa-paper-plane"></span>
      <span class="fa fa-globe"></span>
    </div>

  </div>
</div>
<script>
  function initMap() {
  // The location of Uluru
  const slc = { lat: 40.758701, lng: 	-111.876183 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("contact-google-map"), {
    zoom: 14,
    center: slc,
  });
  }
window.initMap = initMap;
</script>
<script src="<?php URLROOT; ?>public/js/contact-validation.js"></script>
<!-- <script src="<?php URLROOT; ?>public/js/google-map.js"></script> -->
<!-- 
     The `defer` attribute causes the callback to execute after the full HTML
     document has been parsed. For non-blocking uses, avoiding race conditions,
     and consistent behavior across browsers, consider loading using Promises
     with https://www.npmjs.com/package/@googlemaps/js-api-loader.
    -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA58cpebsF-hTOYGQnYfyoJrZ_RSEL32o0&callback=initMap&v=weekly"
      defer
    ></script>
    <?php
     unset($_SESSION['errors']);
     unset($_SESSION['mail-errors']);
     unset($_SESSION['fields']);
    ?>