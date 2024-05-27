<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <?php $this->load->view('templates/head_template'); ?>
    <?php $this->load->view('templates/css_link'); ?>

    <div class="container">
        <h4 class="fs-5">Color Information</h4>
        <div class="col-lg-8 mx-auto p-4">
            <div class="card">
                <div class="card-body">

                    <?php foreach ($results as $result) { ?>
                        <form action="<?php echo base_url('product_colors/update_color'); ?>" class="form-horizontal" method="POST">
                        <input type="hidden" name="id" value="<?= $result->id ?>">
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-from-label">
                                    Name
                                </label>
                                <div class="col-md-9">
                                    <input type="text" name="name" class="form-control" value="<?= $result->name ?>" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-from-label">
                                    Code
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="code" value="<?= $result->code ?>" required>
                                </div>
                            </div>



                            <div class="form-group text-right mt-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>