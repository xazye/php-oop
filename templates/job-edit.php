<?php include 'inc/header.php'; ?>
<div class="container text-center">
    <h2 class="page-header"> Edit Job Listing</h2>
    <form method="POST" action="edit.php?id=<?php echo $job->id ?>">
        <div class="mb-3">
            <label class="form-label">Company</label>
            <input type="text" class="from-control" name="company" value="<?php echo $job->company ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category">
                <option value="0">Choose your category</option>

                <?php foreach ($categories as $category) : ?>
                    <option <?php ($job->category_id == $category->id) ? print "selected" : "" ?> value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Job Title</label>
            <input type="text" class="from-control" name="job_title" value="<?php echo $job->job_title ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">description</label>
            <textarea name="description"><?php echo $job->description ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Location</label>
            <input type="text" class="from-control" name="location" value="<?php echo $job->location ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Salary</label>
            <input type="text" class="from-control" name="salary" value="<?php echo $job->salary ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Contatct User</label>
            <input type="text" class="from-control" name="contact_user" value="<?php echo $job->contact_user ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Contatct Email</label>
            <input type="text" class="from-control" name="contact_email" value="<?php echo $job->contact_email ?>">
        </div>
        <input type="submit" name="submit">
    </form>
</div>
<?php include 'inc/footer.php'; ?>