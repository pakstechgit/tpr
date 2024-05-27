<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php $this->load->view('templates/head_template'); ?>

<body>
    <div class="container p-4">
        <h5>Attribute Detail</h5>
        <div class="row">

            <div class="col-md-7">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-6">
                            <h5>
                                Volume
                            </h5>
                        </div>
                        <div class="col-md-6">
                            <input type="search" class="form-control" placeholder="Type Name & Enter">
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $number = 1; // Initialize a counter variable for the outer loop
                                    foreach ($results as $result) {
                                        $valueNumber = 1; // Initialize a counter variable for the inner loop (values)
                                    ?>
                                        <tr>
                                            <td><?= $number ?></td>
                                            <td>
                                                <?= $result->value ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url() ?>product_attributes/edit_attribute/<?= $result->id ?>" class="btn btn-primary">Edit</a>
                                                <a href="" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                        $number++; // Increment the counter variable for each $result
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Add New Attribute Value</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php base_url() ?>product_brands/create_brand" method="POST">
                            <?php if (!empty($results['results'])) { // Check if the 'results' key is not empty or null 
                            ?>
                                <div class="form-group mb-3">
                                    <label for="" class="col-from-label">
                                        Attribute Name
                                    </label>
                                    <input type="text" name="name" id="name" class="form-control" value="<?= $results['results'][0]->name; ?>" readonly>
                                </div>
                            <?php } else { ?>
                                <p>No data found.</p>
                            <?php } ?>

                            <div class="form-group mb-3 text-right">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>