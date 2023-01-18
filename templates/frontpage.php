<?php include 'inc/header.php'; ?>

<div class="container ">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold text-success">Find your dream job</h1>
            <form method="GET" action="index.php" class="text-center">
                <select name="category" class="form-control">
                    <option value="0">Choose your category</option>

                    <?php foreach ($categories as $category) : ?>
                        <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
                    <?php endforeach; ?>
                </select>
                <button class="btn btn-lg btn-success my-2 p-4 px-5">Find</button>
            </form>

        </div>
    </div>
    <h2><?php echo $title ?></h2>
    <div class="mx-2 row align-items-lg-stretch">

        <?php foreach ($jobs as $job) : ?>
            <div class="p-5 mt-2 text-bg-dark rounded-3 row">

                <div class="col-md-11">
                    <h4>
                        <?php echo $job->job_title ?>
                    </h4>
                    <p><?php echo $job->description ?></p>
                </div>
                <div class="col-md-1">
                    <a class="btn btn-outline-light " href="job.php?id=<?php echo $job->id ?>">View</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</div>
<?php include 'inc/footer.php'; ?>