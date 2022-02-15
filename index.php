<?php
include "all.php";
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="theme-color" content="#fafafa">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-select.css"/>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>

<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">Job Finder</span>
</nav>

<form method="post" action="">
    <input name="filter" value="1" hidden>
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-lg-9 col-xl-8">
            <div class="card border-0">
                <div class="card-body">
                    <h4>Search and Filter</h4>
                    <div class="card">
                        <div class="card-header">
                            <h6><span class="fa fa-calendar mr-3"></span>FILTER LIST</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <label>Name</label>
                                    <input name="name" class="form-control"
                                           value="<?php echo isset($_POST['name']) ? $_POST['name'] : "" ?>">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <label>Location</label>
                                    <input name="location" class="form-control"
                                           value="<?php echo isset($_POST['location']) ? $_POST['location'] : "" ?>">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <label>Age min</label>
                                    <input type="number" name="min-age" class="form-control" placeholder="Min age"
                                           value="<?php echo !empty($_POST['min-age']) ? $_POST['min-age'] : "" ?>">
                                </div>
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <label>Age max</label>
                                    <input name="max-age" type="number" class="form-control" placeholder="Max age"
                                           value="<?php echo !empty($_POST['max-age']) ? $_POST['max-age'] : "" ?>">
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <label>Select Category</label>
                                    <input class="categories" name="categories" hidden
                                           value="<?php echo isset($_POST['categories']) ? $_POST['categories'] : "" ?>">
                                    <select class="form-control selectpicker" multiple data-live-search="true"
                                            value="<?php echo isset($_POST['categories']) ? $_POST['categories'] : "" ?>">
                                        <?php
                                        foreach ($categories as $category) {
                                            ?>
                                            <option><?php echo $category["category"]; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <label>Tags</label>
                                    <input name="tags" placeholder="Enter comma separated tags" class="form-control"
                                           value="<?php echo isset($_POST['tags']) ? $_POST['tags'] : "" ?>">
                                </div>
                            </div>
                            <button class="btn btn-success ml-auto float-lg-right mt-2"><span
                                    class="fa fa-filter"></span> &nbsp;&nbsp;Apply
                                Filter
                            </button>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($jobs)) {
                    if (empty($jobs)) {
                        echo '<p>No result found</p>';
                    } else {
                        ?>
                        <h4>Results</h4>
                        <table class="table table-sm">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Location</th>
                                <th scope="col">Category</th>
                                <th scope="col">Age</th>
                                <th scope="col">Tags</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($jobs as $job) { ?>
                                <tr>
                                    <th scope="row"><?php echo $job["id"]; ?></th>
                                    <td><?php echo $job["name"]; ?></td>
                                    <td><?php echo $job["location"]; ?></td>
                                    <td><?php echo $job["category"]; ?></td>
                                    <td><?php echo $job["age"]; ?></td>
                                    <td><?php echo $job["tags"]; ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    <?php }
                } ?>
            </div>
        </div>
    </div>
</form>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/bootstrap.js"></script>
<script src="js/vendor/bootstrap-select.js"></script>
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
</body>
</html>
