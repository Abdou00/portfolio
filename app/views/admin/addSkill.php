<?php require APP_ROOT . '/views/inc/adminHeader.php' ?>
<a href="<?php echo URL_ROOT; ?>/admin/" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<div class="card card-body bg-light mt-5">
   <h3>Add Skill</h3>
   <p>Create a new skill</p>
   <form action="<?php echo URL_ROOT; ?>/admin/addSkill" method="post">
        <div class="form-group">
             <label for="title">Title: <sup>*</sup></label>
             <input type="text" name="title" class="form-control form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['title']; ?>">
             <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
        </div>

       <div class="form-group">
           <label for="level">Level: <sup>*</sup></label>
           <input type="text" name="level" id="level" class="form-control form-control <?php echo (!empty($data['level_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['level']; ?>">
           <span class="invalid-feedback"><?php echo $data['level_err']; ?></span>
       </div>

       <div class="form-group">
           <label for="image">Image: <sup>*</sup></label>
           <input type="text" name="image" id="image" class="form-control form-control <?php echo (!empty($data['image_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['image']; ?>">
           <span class="invalid-feedback"><?php echo $data['image_err']; ?></span>
       </div>

       <input type="submit" class="btn btn-success" value="Submit"/>
   </form>
</div>
<?php require APP_ROOT . '/views/inc/adminFooter.php' ?>
