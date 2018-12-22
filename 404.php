<?php get_header(); ?>

  <?php get_template_part('navigation-default'); ?>
    <section id="404-error" style="padding-top: 150px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card text-center">
                        <div class="card-header">
                            404 Not Found!
                        </div>
                        <div class="card-body" style="padding: 100px 0">
                            <h5 class="card-title">Resource Not Found!</h5>
                            <p class="card-text">Sorry, the page your are requested in not found. Please try again.</p>
                            <a href="/search" class="btn btn-primary">Search Nourishments</a>
                        </div>
                        <div class="card-footer text-muted">
                            Go back to the <a href="<?php bloginfo('url') ?>"><b>Home Page</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
