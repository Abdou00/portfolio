<?php
/**
 * Created by PhpStorm.
 * User: samba
 * Date: 25/05/19
 * Time: 13:18
 */
?>
<?php require APP_ROOT . '/views/inc/adminHeader.php' ?>
<?php flash('post_message'); ?>
<div id="content-wrapper">
    <div class="container-fluid">
        <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Skills Table
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Level</th>
                            <th>Logo</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tbody>
                        <?php foreach($data['skills'] as $skill) : ?>
                            <tr>
                                <td><?php echo $skill->title; ?></td>
                                <td><?php echo $skill->level; ?></td>
                                <td><?php echo $skill->image; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Experiences Table
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Du</th>
                            <th>Au</th>
                            <th>Company</th>
                            <th>Location</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tbody>
                        <?php foreach($data['experiences'] as $project) : ?>
                            <tr>
                                <td><?php echo $project->title; ?></td>
                                <td><?php echo $project->body; ?></td>
                                <td><?php echo $project->begin_at; ?></td>
                                <td><?php echo $project->end_at; ?></td>
                                <td><?php echo $project->company; ?></td>
                                <td><?php echo $project->location; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>
                Projects Table
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Screenshot</th>
                            <th>Language</th>
                            <th>Date</th>
                            <th>Type</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tbody>
                        <?php foreach($data['projects'] as $project) : ?>
                            <tr>
                                <td><?php echo $project->title; ?></td>
                                <td><?php echo $project->description; ?></td>
                                <td><?php echo $project->screenshot; ?></td>
                                <td><?php echo $project->language; ?></td>
                                <td><?php echo $project->date; ?></td>
                                <td><?php echo $project->type; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <?php require APP_ROOT . '/views/inc/adminFooter.php' ?>
