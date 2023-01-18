<?php include 'inc/header.php'; ?>
<div class="container">
        <section class="py-5  container">
                <div class="row  row-cols-md-2">
                        <h3 class="text-center"><?php echo $job->job_title; ?>
                        </h3>
                        <h3 class="text-center"><?php echo $job->location; ?></h3>
                        <small class="text-center text-muted"> Posted by: <?php echo $job->company ?></small>
                </div>
                <hr>
                <div class="row py-lg-5 text-center">
                        <div class="col-lg-10 col-md-10 mx-auto">
                                <p class="lead"><?php echo $job->description ?></p>
                                <ul class="list-group  ">
                                        <li class="list-group-item row row-cols-md-2"><span>Company:</span> <?php echo $job->company ?></li>
                                        <li class="list-group-item row row-cols-md-2"><span>Salary:</span> <?php echo $job->salary ?></li>
                                        <li class="list-group-item row row-cols-md-2"><span>Contatct Email:</span> <?php echo $job->contact_email ?></li>
                                </ul>
                                <a class="btn btn-success p-3 m-4" href="index.php">Go back</a>
                        </div>
                </div>
                <div class="container text-center ">
                        <a href="edit.php?id=<?php echo $job->id ?>" class=" p-3 mx-2 btn btn-secondary">Edit</a>
                        <form style="display: inline;" class="form mx-2 p-0" method="post" action="job.php">
                                <input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
                                <button type="submit" class="btn p-3 btn-danger">Delete</button>
                        </form>
                </div>
        </section>
</div>

<?php include 'inc/footer.php'; ?>