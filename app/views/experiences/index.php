<?php require APP_ROOT . '/views/inc/header.php' ?>
<!-- Experiences -->
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h3>My Experiences</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
        <div class="col-lg-6">
            <?php foreach($data['experiences'] as $exp) : ?>
                <div class="card card-body mb-3">
                    <div class="card-block">
                        <h4 class="card-title"><?php echo $exp->title; ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $exp->company; ?> | <?php echo helper_format_date($exp->begin_at, 'F Y'); ?> -- <?php echo helper_format_date($exp->end_at, 'F Y'); ?></h6>
                        <p class="card-text breakline"><?php echo $exp->body; ?></p>
                        <a href="<?php echo URL_ROOT; ?>/experiences/show/<?php echo $exp->id; ?>" class="btn btn-dark">More</a>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php require APP_ROOT . '/views/inc/footer.php' ?>
