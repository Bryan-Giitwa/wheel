<style>
    blockquote {
        border-left: 4px solid #ffc107;
        padding-left: 1rem;
    }

    .carousel-item {
        transition: transform 2s ease, opacity 2s ease;
        /* Adjust the duration as needed */
    }

    .shadow-sm {
        box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
    }

    @media (max-width: 768px) {
        .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }

        .header h1 {
            font-size: 1.5rem;
        }

        .feature-card {
            padding: 1rem;
        }

        .feature-icon {
            font-size: 1.2rem;
        }

        .feature-card h3 {
            font-size: 1rem;
        }

        .feature-card p {
            font-size: 0.8rem;
        }
    }
</style>
<!-- Header-->
<header class="bg-dark py-5" id="main-header">
    <div class="container h-100 d-flex align-items-end justify-content-center w-100">
        <div class="text-center text-white w-100">
            <h1 class="display-4 fw-bolder"><?php echo $_settings->info('name') ?></h1>
            <p class="lead fw-normal text-white-51 mb-0">- Let us take care of your vehicle -</p>
            <div class="col-auto mt-2">
                <button class="btn btn-warning btn-lg rounded-0" id="send_request" type="button">Send Us a Service Request</button>
            </div>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-3 mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h3 class="text-center">We Do Service For:</h3>
                <hr class="bg-primary opacity-100">
                <ul class="list-group">
                    <?php
                    $category = $conn->query("SELECT * FROM `categories` where status = 1 order by `category` asc");
                    while ($row = $category->fetch_assoc()):
                    ?>
                        <li class="list-group-item"><b><?php echo $row['category'] ?></b></li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="col-md-8">
                <h3 class="text-center">Our Services</h3>
                <hr class="bg-primary opacity-100">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="search" id="search" class="form-control" placeholder="Search Service Here" aria-label="Search Service Here" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text bg-primary" id="basic-addon2"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-3 row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-xl-2" id="service_list">
                    <?php
                    $services = $conn->query("SELECT * FROM `service_list` where status = 1 order by `service`");
                    while ($row = $services->fetch_assoc()):
                        $row['description'] = strip_tags(html_entity_decode(stripslashes($row['description'])));
                    ?>
                        <a class="col item text-decoration-none text-dark view_service" href="javascript:void(0)" data-id="<?php echo $row['id'] ?>">
                            <div class="callout callout-primary border-primary rounded-0">
                                <dl>
                                    <dt><?php echo $row['service'] ?></dt>
                                    <dd class="truncate-3 text-muted lh-1"><small><?php echo $row['description'] ?></small></dd>
                                </dl>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
                <div id="noResult" style="display:none" class="text-center"><b>No Result</b></div>
            </div>
        </div>
    </div>
</section>
<!-- Our Clients Section -->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-3">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Our Clients</h2>
            <p class="lead text-muted">We love our customers, and they love Windscreenmania. Which makes us very happy indeed.</p>
        </div>
        <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="col-md-6 text-center mx-auto">
                        <ul class="list-unstyled">
                            <li class="mb-4">
                                <blockquote class="bg-white p-4 rounded shadow-sm">
                                    <p class="mb-2">“Windscreen Mania provides excellent service with a professional touch. The garage is reliable, the team is skilled, and the overall experience is smooth and customer-friendly.”</p>
                                    <footer class="blockquote-footer mt-2">
                                        Asafi Brahim <cite title="Company">(Kenyan)</cite>
                                    </footer>
                                </blockquote>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Add more carousel items here -->
                <div class="carousel-item">
                    <div class="col-md-6 text-center mx-auto">
                        <ul class="list-unstyled">
                            <li class="mb-4">
                                <blockquote class="bg-white p-4 rounded shadow-sm">
                                    <p class="mb-2">"I’ve always trusted Windscreen Mania with my car, and they never disappoint. Their attention to detail, friendly staff, and quality workmanship keep me coming back every time."</p>
                                    <footer class="blockquote-footer mt-2">
                                        James Kariuki <cite title="Company">(JK Auto Supplies)</cite>
                                    </footer>
                                </blockquote>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-6 text-center mx-auto">
                        <ul class="list-unstyled">
                            <li class="mb-4">
                                <blockquote class="bg-white p-4 rounded shadow-sm">
                                    <p class="mb-2">"Windscreen Mania always delivers reliable and professional service. Their team is knowledgeable, and they make sure my vehicle is in perfect condition every time."</p>
                                    <footer class="blockquote-footer mt-2">
                                        Sarah Mwangi <cite title="Company">(Swift Motors Ltd)</cite>
                                    </footer>
                                </blockquote>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-6 text-center mx-auto">
                        <ul class="list-unstyled">
                            <li class="mb-4">
                                <blockquote class="bg-white p-4 rounded shadow-sm">
                                    <p class="mb-2">"I highly recommend Windscreen Mania! Great customer service, quick turnaround, and excellent results. They truly care about their customers' satisfaction."</p>
                                    <footer class="blockquote-footer mt-2">
                                        Peter Otieno <cite title="Company">(Elite Auto Solutions)</cite>
                                    </footer>
                                </blockquote>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#testimonialCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#testimonialCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<script>
    $(function() {
        $('#search').on('input', function() {
            var _search = $(this).val().toLowerCase().trim()
            $('#service_list .item').each(function() {
                var _text = $(this).text().toLowerCase().trim()
                _text = _text.replace(/\s+/g, ' ')
                console.log(_text)
                if ((_text).includes(_search) == true) {
                    $(this).toggle(true)
                } else {
                    $(this).toggle(false)
                }
            })
            if ($('#service_list .item:visible').length > 0) {
                $('#noResult').hide('slow')
            } else {
                $('#noResult').show('slow')
            }
        })
        $('#service_list .item').hover(function() {
            $(this).find('.callout').addClass('shadow')
        })
        $('#service_list .view_service').click(function() {
            uni_modal("Service Details", "view_service.php?id=" + $(this).attr('data-id'), 'mid-large')
        })
        $('#send_request').click(function() {
            uni_modal("Fill the Service Request Form", "send_request.php", 'large')
        })

    })
    $(document).scroll(function() {
        $('#topNavBar').removeClass('bg-transparent navbar-dark bg-primary')
        if ($(window).scrollTop() === 0) {
            $('#topNavBar').addClass('navbar-dark bg-transparent')
        } else {
            $('#topNavBar').addClass('navbar-dark bg-primary')
        }
    });
    $(function() {
        $(document).trigger('scroll')
    })
    //  CAROSUEL
    $(document).ready(function() {
        $('#testimonialCarousel').carousel({
            interval: 5000, // Adjust the interval as needed (5000ms = 5 seconds)
            ride: 'carousel'
        });
    });
</script>