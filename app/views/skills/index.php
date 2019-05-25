<?php require APP_ROOT . '/views/inc/header.php' ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h3>My Skills</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </div>
        <div class="col-lg-6">
            <?php foreach($data['skills'] as $skill) : ?>
                <div class="card card-body mb-3">
                    <div class="card-block">
                        <h4 class="card-title"><?php echo $skill->title; ?></h4>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $skill->level; ?></h6>
                        <figure>
                            <img class="img-fluid" src="<?php echo $skill->image; ?>" alt="">
                        </figure>
                        <a href="<?php echo URL_ROOT; ?>/experiences/show/<?php echo $skill->id; ?>" class="btn btn-dark">More</a>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php require APP_ROOT . '/views/inc/footer.php' ?>
