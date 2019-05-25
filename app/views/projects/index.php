<?php require APP_ROOT . '/views/inc/header.php' ?>

<!-- Portfolio -->
<div id="about_hub">
    <div class="container">
        <div class="row">
            <h3>Portfolio</h3>
        </div>
    </div>
</div>

<!-- Intro -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p class="centered">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
    </div>
</div>
<br/

<!-- Image Block -->
<div class="container-fluid">
    <div class="row">
        <?php foreach($data['projects'] as $project) : ?>

            <div class="col-lg-4 col-sm-4">
                <div class="grids mask">
                    <figure>
                        <img class="img-responsive" src="<?php echo $project->screenshot; ?>" alt="">
                        <figcaption>
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-theme">Aperçu</button>
                        </figcaption>
                    </figure>
                </div>

                <!-- Modal -->
                <div class="modal fade myModal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title centered" id="myModalLabel"><?php echo $project->title; ?></h4>
                            </div>
                            <div class="modal-body">
                                <h4 class="centered"><?php echo $project->type; ?></h4>
                                <img src="<?php echo $project->screenshot; ?>" alt="">
                                <h5 class="centered"><?php echo $project->description; ?></h5>
                                <a href="<?php echo URL_ROOT; ?>/experiences/show/<?php echo $project->id; ?>" class="btn btn-dark">More</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                    </div>
                </div><!-- End modal window -->
            </div><!-- End block -->
        <?php endforeach; ?>
    </div><!-- End row -->
</div><!-- End container -->

<?php require APP_ROOT . '/views/inc/footer.php' ?>
