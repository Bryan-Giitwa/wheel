<!-- filepath: c:\xampp\htdocs\PROJECTS\vehicle_service\inc\topBarNav.php -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="topNavBar">
  <div class="container px-4 px-lg-5">
    <a class="navbar-brand" href="./">
      <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
      <?php echo $_settings->info('short_name') ?>
    </a>
    <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link text-white" aria-current="page" href="./">Home</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="./?p=about">About Us</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="./?p=contact">Contact Us</a></li>
      </ul>
      <div class="d-flex align-items-center">
      </div>
    </div>
  </div>
</nav>
<style>
  .navbar {
    background-color: #013041 !important;
  }

  .navbar-nav .nav-item {
    margin-right: 2rem;
    /* Add gap between list links */
  }

  .navbar-nav .nav-link {
    font-size: 1.2rem;
  }

  .navbar-nav .nav-link:hover {
    text-decoration: underline;
  }

  .navbar-shrink {
    background-color: #0f0e0f !important;
  }

  @media (min-width: 481px) and (max-width: 767px) {
    .container.px-4.px-lg-5 {
      display: flex;
      justify-content: space-between;
      padding-right: 5px !important;
    }

    .navbar-brand {
      margin-left: 0;
      padding-left: 0;
      margin-right: 1rem;
      /* Adjusted margin-right */
    }

    .navbar-toggler {
      margin: 0;
      padding-right: 0;
      margin-top: -5px;
      /* Adjust this value to move the button up */
      width: 50px;
      /* Added width */
      height: 50px;
      /* Added height */
    }

    .navbar-toggler-icon {
      width: 30px;
      /* Adjusted width */
      height: 30px;
      /* Adjusted height */
    }

    .navbar-toggler {
      margin: 0;
      padding-right: 0;
      margin-top: -15px;
      /* Adjust this value to move the button up */
    }
  }
</style>
<script>
  $(function() {
    $('#login-btn').click(function() {
      uni_modal("", "login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function() {
      $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function() {
      if ($('body').offset().top == 0)
        $('#mainNav').removeClass('navbar-shrink')
    })
  })

  $(document).scroll(function() {
    if ($(window).scrollTop() > 0) {
      $('#topNavBar').addClass('navbar-shrink');
    } else {
      $('#topNavBar').removeClass('navbar-shrink');
    }
  });

  $('#search-form').submit(function(e) {
    e.preventDefault()
    var sTxt = $('[name="search"]').val()
    if (sTxt != '')
      location.href = './?p=products&search=' + sTxt;
  })
</script>