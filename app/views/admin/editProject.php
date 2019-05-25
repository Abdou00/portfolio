<?php echo "<pre>"; print_r($_POST); echo "</pre>"; ?>
<?php require APP_ROOT . '/views/inc/header.php' ?>
<a href="<?php echo URL_ROOT; ?>/projects" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<div class="card card-body bg-light mt-5">
    <h3>Edit <?php echo $data['title']; ?></h3>

    <form action="<?php echo URL_ROOT; ?>/projects/add" method="post">
        <div class="form-group">
            <label for="title">Title: <sup>*</sup></label>
            <input type="text" name="title" id="title" class="form-control form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['title']; ?>">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
        </div>

        <div class="form-group">
            <label for="description">Description: <sup>*</sup></label>
            <input type="date" name="description" id="description" class="form-control form-control <?php echo (!empty($data['description_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['description']; ?>">
            <span class="invalid-feedback"><?php echo $data['description_err']; ?></span>
        </div>

        <div class="form-group">
            <label for="language">Language: <sup>*</sup></label>
            <input type="date" name="language" id="language" class="form-control form-control <?php echo (!empty($data['language_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['language']; ?>">
            <span class="invalid-feedback"><?php echo $data['language_err']; ?></span>
        </div>

        <div class="form-group">
            <label for="screenshot">Screenshot: <sup>*</sup></label>
            <input type="text" name="screenshot" id="screenshot" class="form-control form-control <?php echo (!empty($data['screenshot_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['screenshot']; ?>">
            <span class="invalid-feedback"><?php echo $data['screenshot_err']; ?></span>
        </div>

        <div class="form-group">
            <label for="date">Date: <sup>*</sup></label>
            <input type="text" name="date" id="date" class="form-control form-control <?php echo (!empty($data['date_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['date']; ?>">
            <span class="invalid-feedback"><?php echo $data['date_err']; ?></span>
        </div>


        <div class="form-group">
            <label for="type">Type: <sup>*</sup></label>
            <textarea name="type" id="type" class="form-control form-control <?php echo (!empty($data['type_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['type']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['type_err']; ?></span>
        </div>
        <input type="submit" class="btn btn-success" value="Submit"/>
    </form>
</div>
<?php require APP_ROOT . '/views/inc/footer.php' ?>
