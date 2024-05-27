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
        <h5>All Brands</h5>
        <div class="row">

            <div class="col-md-7">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-6">
                            <h5>
                                Brands
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
                                    <th>Logo</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($results as $result) { ?>
                                <tr>
                                    <td><?= $result->id ?></td>
                                    <td><?= $result->name ?></td>
                                    <td><?= $result->logo ?></td>
                                    <td>
                                        <a href="<?php base_url() ?>product_brands/edit_brand/<?= $result->id ?>" class="btn btn-primary">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Add New Brand</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php base_url() ?>product_brands/create_brand" method="POST">
                            <div class="form-group mb-3">
                                <label for="" class="col-from-label">
                                    Name
                                </label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="col-from-label">
                                    Logo <small>(120x80)</small>
                                </label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="col-from-label">
                                    Meta Title
                                </label>
                                <input type="text" name="meta_title" id="meta_title" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="col-from-label">
                                    Meta Description
                                </label>
                                <textarea name="meta_description" id="meta_description" class="form-control" cols="20" rows="10"></textarea>
                            </div>
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