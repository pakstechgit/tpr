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
        <h5>All Attributes</h5>
        <div class="row">

            <div class="col-md-7">
                <div class="card">
                    <div class="card-header row">
                        <div class="col-md-6">
                            <h5>
                                Attributes
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
                                        <th>Values</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <?php foreach ($results as $result) { ?>
                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                <?php } ?>
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
                        <form action="<?php base_url() ?>product_brands/create_brand" method="POST">
                            <div class="form-group mb-3">
                                <label for="" class="col-from-label">
                                    Name
                                </label>
                                <input type="text" name="name" id="name" class="form-control">
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