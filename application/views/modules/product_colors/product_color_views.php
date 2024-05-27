<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php $this->load->view('templates/css_link'); ?>
<?php $this->load->view('templates/head_template'); ?>

<style>
    #color_activation {
        height: 25px;
        width: 50px;
    }
</style>

<body>
    <div class="container p-4">
        <h5>All Colors</h5>
        <div class="row">

            <div class="col-md-7">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-6">
                            <h5>
                                Colors
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
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($results as $result) { ?>
                                        <tr>
                                            <td><?= $result->id ?></td>
                                            <td><?= $result->name ?></td>
                                            <td>
                                                <a href="<?php base_url() ?>product_colors/edit_color/<?= $result->id ?>" class="btn btn-primary">Edit</a>
                                                <a href="<?= base_url('product_colors/delete_color/' . $result->id); ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Add New Attribute</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('product_colors/add_color'); ?>" method="POST">
                            <div class="form-group mb-3">
                                <label for="" class="col-from-label">
                                    Name
                                </label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="col-from-label">
                                    Color Code
                                </label>
                                <input type="text" name="code" id="code" class="form-control">
                            </div>

                            <div class="form-group mb-3 text-right">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="mx-auto">Color Activation</h5>
                    </div>
                    <div class="card-body text-center">

                        <div class="form-check form-switch p-5 align-items-center">
                            <input class="form-check-input" type="checkbox" role="switch" id="color_activation">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>