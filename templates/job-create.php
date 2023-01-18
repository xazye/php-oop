<?php include 'inc/header.php'; ?>
<div class="container text-center">
    <h2 class="page-header"> Create Job Listing</h2>
    <form method="POST" action="create.php">
        <div class="mb-3">
            <label class="form-label">Company</label>
            <input type="text" class="from-control" name="company">
        </div>
        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category">
                <option value="0">Choose your category</option>

                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Job Title</label>
            <input type="text" class="from-control" name="job_title">
        </div>
        <div class="mb-3">
            <label class="form-label">description</label>
            <textarea name="description"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Location</label>
            <input type="text" class="from-control" name="location">
        </div>
        <div class="mb-3">
            <label class="form-label">Salary</label>
            <input type="text" class="from-control" name="salary">
        </div>
        <div class="mb-3">
            <label class="form-label">Contact User</label>
            <input type="text" class="from-control" name="contact_user">
        </div>
        <div class="mb-3">
            <label class="form-label">Contact Email</label>
            <input type="text" class="from-control" name="contact_email">
        </div>
        <input type="submit" name="submit">
    </form>
</div>
<?php include 'inc/footer.php'; ?>