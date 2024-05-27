<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
            float: right;
        }

        /* Hide default HTML checkbox */
        .switch input {
            display: none;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input.default:checked+.slider {
            background-color: #444;
        }

        input.primary:checked+.slider {
            background-color: #2196F3;
        }

        input.success:checked+.slider {
            background-color: #8bc34a;
        }

        input.info:checked+.slider {
            background-color: #3de0f5;
        }

        input.warning:checked+.slider {
            background-color: #FFC107;
        }

        input.danger:checked+.slider {
            background-color: #f44336;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>

</head>

<body>
    <?php $this->load->view('templates/css_link'); ?>



    <div class="container-fluid p-4">
        <div class="row p-1">

            <div class="col-md-6">
                <h3>All Categories</h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="<?= base_url() ?>product_details/add_new_category" class="btn btn-primary">
                    Add New Category
                </a>
            </div>


        </div>

        <div class="card">
            <div class="card-header row">
                <div class="col-md-6">
                    <h4>Categories</h4>
                </div>
                <div class="col-md-6 text-right">
                    <input type="search" class="form-control" placeholder="Type Name & Enter" />
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Parent</th>
                        <th>Order Level</th>
                        <th>Level</th>
                        <th>Banner</th>
                        <th>Icon</th>
                        <th>Cover Image</th>
                        <th>Featured</th>
                        <th>Commission</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($results as $result) { ?>
                        <tr>
                            <td><?= $result->id ?></td>
                            <td><?= $result->name ?></td>
                            <td><?= $result->parent_id ?></td>
                            <td><?= $result->order_level ?></td>
                            <td><?= $result->level ?></td>
                            <td>
                                <?php if (!empty($result->banner)) { ?>
                                    <?= $result->banner ?>
                                <?php } else { ?>
                                    <?php echo "-" ?>
                                <?php } ?>
                            </td>

                            <td><?= $result->icon ?> </td>
                            <td>
                                <?php if (!empty($result->banner)) { ?>
                                    <?= $result->cover_image ?>
                                <?php } else { ?>
                                    <?php echo "-" ?>
                                <?php } ?>
                            </td>
                            <td>
                                <ul class="text-left list-group list-group-flush">
                                    <li class="list-group-item">
                                        <label class="switch">
                                            <input type="checkbox" class="success" <?= ($result->featured == 1) ? 'checked' : ''; ?> onchange="updateFeature(<?= $result->id ?>)" name="feature">
                                            <span class="slider round"></span>
                                        </label>
                                    </li>
                                </ul>
                            </td>
                            <td><?= $result->commision_rate ?> %</td>
                            <td>
                                <a href="<?= base_url() ?>product_details/edit_category" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Toast -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-left",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>

    <script>
        function updateFeature(categoryId) {
            // Get the checkbox status
            var featured = document.getElementById('feature-' + categoryId).checked ? 1 : 0;

            // Perform the AJAX request to update the feature
            $.ajax({
                url: 'product_details/update_feature', // Change this to your update_feature endpoint
                method: 'POST',
                data: {
                    id: categoryId,
                    feature: featured
                },
                success: function(response) {

                    // Show a success message if the feature was updated
                    toastr.success("Featured updated successfully!");
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Show an error message if the update failed
                    toastr.error("Failed to update feature!");
                }
            });
        }
    </script>
    

</body>

</html>