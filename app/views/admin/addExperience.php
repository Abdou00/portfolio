<?php echo "<pre>"; print_r($_POST); echo "</pre>"; ?>
<?php require APP_ROOT . '/views/inc/header.php' ?>
<a href="<?php echo URL_ROOT; ?>/admin/" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
<div class="card card-body bg-light mt-5">
   <h3>Add Experience</h3>
   <p>Create a new experience</p>
   <form action="<?php echo URL_ROOT; ?>/admin/addExperience" method="post">
      <div class="form-group">
         <label for="title">Title: <sup>*</sup></label>
         <input type="text" name="title" id="title" class="form-control form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['title']; ?>">
         <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
      </div>

       <div class="form-group">
           <label for="begin_at">BeginAt: <sup>*</sup></label>
           <input type="date" name="begin_at" id="begin_at" class="form-control form-control <?php echo (!empty($data['begin_at_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['beginAt']; ?>">
           <span class="invalid-feedback"><?php echo $data['beginAt_err']; ?></span>
       </div>

       <div class="form-group">
           <label for="endAt">EndAt: <sup>*</sup></label>
           <input type="date" name="endAt" id="endAt" class="form-control form-control <?php echo (!empty($data['endAt_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['endAt']; ?>">
           <span class="invalid-feedback"><?php echo $data['endAt_err']; ?></span>
       </div>

       <div class="form-group">
           <label for="company">Company: <sup>*</sup></label>
           <input type="text" name="company" id="company" class="form-control form-control <?php echo (!empty($data['company_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['company']; ?>">
           <span class="invalid-feedback"><?php echo $data['company_err']; ?></span>
       </div>

       <div class="form-group">
           <label for="location">Location: <sup>*</sup></label>
           <input type="text" name="location" id="location" class="form-control form-control <?php echo (!empty($data['location_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['location']; ?>">
           <span class="invalid-feedback"><?php echo $data['location_err']; ?></span>
       </div>


      <div class="form-group">
         <label for="name">Body: <sup>*</sup></label>
<textarea name="body" id="body" class="form-control form-control <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
         <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
      </div>
<input type="submit" class="btn btn-success" value="Submit"/>
   </form>
</div>
<?php require APP_ROOT . '/views/inc/footer.php' ?>
