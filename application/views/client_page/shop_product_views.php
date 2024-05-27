<head>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"
        integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>

    .bg-primary, .btn-check:checked+.btn-outline-primary, .hov-bg-primary:hover{
        color:white !important;
    }
</style>

<div class="p-1 p-md-5 w-100">
    <section class="container-fluid mt-3">
        <p class="text-secondary">Home / Products / <?=$PRODUCT->name?></p>
    </section>
    <section class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6 p-0 d-none d-md-block ">
                <div class="container-fluid   p-0 m-0">
                    <div class=" container w-100 h-100 main_slider " >
                        <img  class="img-fluid mb-2 cursor-pointer" src="<?=base_url($PRODUCT->main_image)?>"  alt="image info" />
<?php foreach($PRODUCT_STOCKS_IMAGES as $images) : ?>
                        <img  class="img-fluid mb-2 cursor-pointer" src="<?=base_url($images->file_name)?>"   alt="image info" />
<?php endforeach ?>
                    </div>
                    <div  class=" variant_images w-100" >
                        <img  class="img-fluid m-3  cursor-pointer" src="<?=base_url($PRODUCT->main_image)?>" alt="image info" />
<?php foreach($PRODUCT_STOCKS_IMAGES as $images) : ?>
                        <img  class="img-fluid m-3 cursor-pointer" src="<?=base_url($images->file_name)?>" alt="image info" />
<?php endforeach ?>
                    </div>
                    
                </div>
            </div>
            <div class="col">
                <p class="text-500" style="font-size:2.25rem"><?=$PRODUCT->name?></p>
                <p class="text-500">Brand: <span class="text_primary">Dynarex</span></p>
                <p class="text-500">Market Segment: <span class="text_primary">Athletic</span></p>
                <p class="text-500">Materials: <span class="text_primary">Nitrile</span></p>
                <p style="line-height:24px">Dynarex Sterile Nitrile Exam Gloves are crafted from specially formulated nitrile 
                rubber for unbeatable puncture resistance and elasticity as compared to other glove materials. 
                The ambidextrous gloves are designed with textured palms for increased grip and minimum 4 mil. 
                thickness for increased tactile sensitivity. A polymer lining and beaded cuff prevent tears and ensure the gloves are easy to don. 
                The gloves fit securely around the wrist and have hand-conforming flexibility to prevent physical fatigue. 
                Frequently used in many settings including medical facilities, EMS and law enforcement markets, long-term care facilities, and more.
                Available in sizes S, M, and L. Gloves are sterilized and packaged 100/box and 1000/cs.- 
                Sterile gloves packaged in individual peel open packs- Textured palms and beaded cuffs- 4 mil. 
                minimum thickness- Ambidextrous and powder-free- Not made with natural rubber latex
                </p>
                <p class="text_primary text-500 h1">₱ <?=$PRODUCT->unit_price?></p>
<?php foreach($OPTIONS as $option) : ?>
                <?php $attr= $this->products_model->GET_ATTRIBUTE($option->attribute_id); ?>
<?php if( isset($option->values) && $option->values) :  ?>        
                <div class="row align-items-center mb-3">
                    <div class="col-2">
                         <div class="text-600 " ><?=$attr->name?></div>
                    </div>
                    <div class="col">

<?php foreach($option->values as $value) : ?>
                        <input type="radio" required name="variants[<?= strtolower(str_replace(' ', '-',$attr->name))?>]" class="btn-check variant" value="<?=$value?>"
                        id="<?= strtolower(str_replace(' ', '-',$attr->name)).'-'.$value?>" autocomplete="off" >
                        <label class="btn-attribute px-5 py-2  rounded-10 btn btn-outline-primary text-dark text-600" for="<?= strtolower(str_replace(' ', '-',$attr->name)).'-'.$value?>"><?=$value?></label>
<?php endforeach ?>

                    </div>
                </div>
<?php endif?>
<?php endforeach ?>
<?php $colors=json_decode($PRODUCT->colors); if($colors) : ?>
                    <div class="row align-items-center mb-3">
                        <div class=" col col-md-2">
                           <div class="text-600 " >Colors</div>
                        </div>
                        <div class="col-8">
                    <?php foreach($colors as $color) : ?>
                        <?php $color_row = $this->products_model->GET_DATA_ROW('tbl_colors','code',$color) ?>
                                <input type="radio" required name="color"  data-color="<?=$color?>" class="btn-check btn-color-check " value="<?=$color_row->name?>" id="<?='color-'.$color_row->name?>"
                                autocomplete="off">
                                <label class="btn-attribute px-5 py-2  rounded-10 btn btn-outline-primary text-dark text-600" for="<?='color-'.$color_row->name?>"><?=$color_row->name?></label>
                    <?php endforeach ?>
                        </div>
                    </div>
<?php endif ?>
                <div class="row align-items-center mb-3">
                    <div class="col-2">
                        <span class="text-600" style="font-size:1rem">Quantity : </span>
                    </div>
                    <div class="col">
                        <div class="input-group input-border-5 mb-3" style="max-width:129px">
                            <button class="btn btn-outline-secondary rounded-10" type="button" id="minusButton">-</button>
                            <input type="text" class="form-control text-center border-2 border-secondary" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <button class="btn btn-outline-secondary rounded-10" type="button" id="plusButton">+</button>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-3">
                    <div class="col-2">
                        <span class="text-600" style="font-size:1rem">Availability : </span>
                    </div>
                    <div class="col">
                        <span class=" text-500" style="color:#00A743">In-stock</span>
                    </div>
                </div>
                <div class="mt-md-5" >
                    <button class="btn border-2 border-secondary mx-1  text-dark text-600 px-5 py-3 rounded-10">Add to Cart</button>
                    <button class="btn border-2 border-secondary mx-1 text-dark text-600 px-5 py-3 rounded-10">Add to Wishlist</button>
                </div>
            </div>
        </div>
    </section>
    
</div>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
        let product_variant_text="";
        let color_text=""
        $(".variant").on('change',function(){
            variant_combinations();
            
        })
        $('.btn-color-check').on('change',function(){
            color_text=$(this).val();
            variant_combinations();
        })
        function variant_combinations(){
            let product_variant=[];
            let variants=$('.variant[type="radio"]:checked');
            variants.each(function() {
                product_variant.push($( this).val().replace(/\s/g, ""));
            });
           
            if(color_text!=""){
                product_variant.unshift(color_text);
            }
            product_variant_text=product_variant.join('-');
            get_variant(product_variant_text)
        }
        function get_variant(variant){
            let product_id="<?=$PRODUCT->id?>"
            $.post("<?=base_url('products/get_product_variant')?>",
            {_token:$('meta[name="csrf-token"]').attr("content"),variant:variant,product_id:product_id},
            function(res){
                if(res){
                    $('.carousel').slick('slickGoTo', slideIndex)
                    $('img#variant_image_main').attr('src',"<?=base_url()?>"+'/'+res.file_name)
                }
            },'json'
            );
        }
        $('.main_slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.variant_images'
        })
        $('.variant_images').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          asNavFor: '.main_slider',
          dots: false,
          centerMode: true,
          focusOnSelect: true,
        //   vertical: true,
        //   verticalSwiping: true,
        //   infinite:false
            });
        $('.variant_images').on('afterChange', function(event, slick, currentSlide, nextSlide){
            console.log(event)
        });
    })
</script>