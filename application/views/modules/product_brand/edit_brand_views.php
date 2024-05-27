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
        <h4 class="fs-5">Category Information</h4>
        <div class="col-lg-8 mx-auto p-4">
            <div class="card">
                <div class="card-body">

                    <?php foreach ($results as $result) { ?>
                        <form action="" class="form-horizontal">
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-from-label">
                                    Name
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?= $result->name ?>" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="" class="col-md-3 col-from-label">
                                    Banner <small>(200 x 200)</small>
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                        <div class="form-control file-amount">Choose File</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-from-label">
                                    Icon <small>(32 x 32)</small>
                                </label>
                                <div class="col-md-9">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                        <div class="form-control file-amount">Choose File</div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-3 col-from-label">
                                    Meta Title
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?= $result->meta_title ?>" placeholder="Meta Title" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-from-label">
                                    Meta Description
                                </label>
                                <div class="col-md-9">
                                    <textarea name="" class="form-control" value="<?= $result->meta_description ?>" id="" cols="15" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-3 col-from-label">
                                    Slug
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" value="<?= $result->slug ?>" required>
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