<div class="dropdown-container bg-white w-100 shadow d-none position-absolute " id="product_dropdown" style=";padding:60px">
        <div class="row">
            <div class="col-3" style="max-width:23%">
                <div class="nav w-25 side-tab flex-column nav-pills me-3 " style="min-width:300px;margin-top:12px" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="text-dark cursor-pointer text-start text-500 text-underline p-0 mb-3 ">Shop All Products</a>
                    <button class="nav-link active  text-start p-0 mb-3 " id="v-pills-disposable-tab" data-bs-toggle="pill" type="button" data-bs-target=".v-pills-disposable" role="tab" aria-controls="v-pills-disposable" aria-selected="true">Disposable Medical Supplies</button>
                    <button class="nav-link p-0  text-start  mb-3" id="v-pills-durable-tab" data-bs-toggle="pill" data-bs-target="#v-pills-durable" type="button" role="tab" aria-controls="v-pills-durable" aria-selected="false">Durable Medical Equipment</button>
                </div>
            </div>
            <div class="col">
                <div class="tab-content w-100">

                    <div class="tab-pane fade show active v-pills-disposable"  role="tabpanel" aria-labelledby="v-pills-disposable-tab">
                        <div class="container-fluid p-0">

                            <div class="header-category d-flex" style="flex-flow:column wrap;max-height:300px;align-content:normal;align-items:flex-start">

<?php if($DISPOSABLES) : ?>
    <?php foreach($DISPOSABLES->SUB_CATEGORIES as $category) : ?>
                                        <div style="width: calc(20% -20px);margin:10px">
                                            <a href="<?= base_url('products/disposable?page=product_page&name='.$category->name) ?>"><?=$category->name?></a>
                                        </div>
    <?php endforeach ?>
<?php endif?>

                            </div>
                            <hr>
                            <div class="w-max ms-auto">
                                <div class="">
                                    <p class=" m-0 text-600 ">Create your own kit:</p>
                                    <p class=''><a class="text_primary" href="<?=base_url('products/customize_kit')?>">Customized Medical Kits / Pack</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col p-0  pe-2">
                <div class="p-0 w-max ms-auto m-0">

                    <div class="ms-auto w-max p-0 position-relative me-0" style="">

                        <img class="img-fluid d-block w-max ms-auto" src="<?= base_url("assets/images/image_dropdown-1.jpg") ?>" style="object-fit:cover;max-width:455px;max-height:371px" alt="image sample" />

                        <button class="btn bg-white position-absolute text-dark " style="width:max-content;bottom:20px;left:20px;font-weight:500">Shop Our Bandages</button>

                    </div>

                </div>
            </div>
        </div>
        <div class="d-flex align-items-start d-none">

            <div class="nav w-25 side-tab flex-column nav-pills me-3 " style="min-width:300px;margin-top:12px" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="text-dark text-start text-500 text-underline p-0 mb-3 " id="v-pills-disposable-tab" data-bs-toggle="pill" type="button">Shop All Products</a>
                <button class="nav-link active  text-start p-0 mb-3 " id="v-pills-disposable-tab" data-bs-toggle="pill" type="button" data-bs-target="#v-pills-disposable" role="tab" aria-controls="v-pills-disposable" aria-selected="true">Disposable Medical Supplies</button>
                <button class="nav-link p-0 text-400 text-start  mb-3" id="v-pills-durable-tab" data-bs-toggle="pill" data-bs-target="#v-pills-durable" type="button" role="tab" aria-controls="v-pills-durable" aria-selected="false">Durable Medical Equipment</button>
            </div>

            <div class="tab-content d-none w-100" id="v-pills-tabContent">

                <div class="tab-pane fade show active" id="v-pills-disposable" role="tabpanel" aria-labelledby="v-pills-disposable-tab">

                    <div class="container-fluid">

                        <div class="row ">
                            <div class="col-7 p-0 m-0">

                                <div class="container-fluid p-0">

                                    <div class="header-category d-flex" style="flex-flow:column wrap;max-height:300px;align-content:normal;align-items:flex-start">

<?php if($DISPOSABLES) : ?>
    <?php foreach($DISPOSABLES->SUB_CATEGORIES as $category) : ?>
                                        <div style="width: calc(20% -20px);margin:10px">
                                            <a href="<?= base_url('products/disposable?page=product_page&name='.$category->name) ?>"><?=$category->name?></a>
                                        </div>
    <?php endforeach ?>
<?php endif?>

                                    </div>
                                    <hr>
                                    <div class="w-max ms-auto">
                                        <div class="">
                                            <p class=" m-0 text-600 ">Create your own kit:</p>
                                            <p class=''><a class="text_primary" href="<?=base_url('products/customize_kit')?>">Customized Medical Kits / Pack</a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col p-0 border border-danger">

                                <div class="p-0 w-max ms-auto m-0">

                                    <div class="ms-auto w-max p-0 position-relative me-0" style="">

                                        <img class="img-fluid d-block w-max ms-auto" src="<?= base_url("assets/images/image_dropdown-1.jpg") ?>" style="object-fit:cover;max-width:455px;max-height:371px" alt="image sample" />

                                        <button class="btn bg-white position-absolute text-dark " style="width:max-content;bottom:20px;left:20px;font-weight:500">Shop Our Bandages</button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>

                <div class="tab-pane fade" id="v-pills-durable" role="tabpanel" aria-labelledby="v-pills-durable-tab">

                    <div class="container-fluid">

                        <div class="row ">
                            <div class="col-7 ">

                                <div class="container-fluid ">

                                    <div class="header-category d-flex" style="flex-flow:column wrap;max-height:300px;align-content:normal">

<?php if($DURABLES) : ?>
    <?php foreach($DURABLES->SUB_CATEGORIES as $category) : ?>
                                        <div style="width: calc(20% -20px);margin:10px">
                                            <a href="<?= base_url('products/disposable?page=product_page&name='.$category->name) ?>"><?=$category->name?></a>
                                        </div>
    <?php endforeach ?>
<?php endif?>

                                    </div>
                                    <!--<hr>-->
                                    <!--<div class="row justify-content-end">-->
                                    <!--    <div class="col-md">-->
                                    <!--        <p class=" m-0 text-600 ">Create your own kit:</p>-->
                                    <!--        <p class='' style="margin-left:10px"><a class="text_primary" href="<?=base_url('products/customize_kit')?>">Customized Medical Kits / Pack</a></p>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                </div>

                            </div>

                            <div class="col p-0 border border-danger">

                                <div class="p-0 w-max ms-auto m-0">

                                    <div class="ms-auto w-max p-0 position-relative me-0" style="">

                                        <img class="img-fluid d-block w-max ms-auto" src="<?= base_url("assets/images/image_dropdown-2.jpg") ?>" style="object-fit:cover;max-width:455px;max-height:371px" alt="image sample" />

                                        <button class="btn bg-white position-absolute text-dark " style="width:max-content;bottom:20px;left:20px;font-weight:500">Shop Hospital / Emergency </button>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
