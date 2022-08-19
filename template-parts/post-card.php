<div class="col-lg-6">
    <!-- Blog post-->
    <div class="card mb-4">
        <a href="<?php the_permalink(); ?>"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
        <div class="card-body">
            <div class="small text-muted"><?php echo get_the_date(); ?></div>
            <h2 class="card-title h4"><?php the_title(); ?></h2>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read more →</a>
        </div>
    </div>
</div>