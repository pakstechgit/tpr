<!DOCTYPE html>
<?php
$active_page = isset($PAGE) ? $PAGE : '';
$product_dropdown['DISPOSABLES']=$DISPOSABLES;
$product_dropdown['DURABLES']=$DURABLES;
$userId= $this->session->userdata('SESS_USER_ID');
// echo $active_page;
?>
<html>

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="app-url" content="<?=base_url()?>">
	<meta name="file-base-url" content="<?=base_url()?>">
	<meta name="csrf-token" content="<?= $this->security->get_csrf_hash() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap"= />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> <!-- Font Awesome Icons -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?=base_url('assets/css/normalize.css')?>"/>
    <style>
        :root {
            --blue: #0235b5;
            --grey: #F5F5F5;
            --grey-d-1: #EEE;
            --grey-d-2: #DDD;
            --grey-d-3: #888;
            --white: #FFF;
            --dark: #222;
            --primary:#0235b5;
            --hov-primary::#0235b5;
        }
        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.disabled,
        .btn-primary:disabled,
        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show > .btn-primary.dropdown-toggle,
        .btn-outline-primary:not(:disabled):not(.disabled).active,
        .btn-outline-primary:not(:disabled):not(.disabled):active,
        .show > .btn-outline-primary.dropdown-toggle {
            background-color: var(--hov-primary);
            border-color: var(--hov-primary);
            color: var(--primary);
        }
        .btn-primary,
        .btn-soft-primary:hover,
        .btn-outline-primary:hover {
            background-color: var(--primary);
            border-color: var(--primary) !important;
            color: var(--white);
        }
        
        .btn-outline-primary{
            color:var(--primary);
            border-color: var(--primary) !important;
        }
        .bg-primary ,.btn-check:checked+.btn-outline-primary,
        .hov-bg-primary:hover {
            background-color: var(--primary) !important;
            border-color: var(--primary) !important;
        }
        .btn-outline-primary:focus{
            background-color:var(--primary) !important;
            color:white;
        }
        /*.bg-primary,*/
        /*.bg_primary,*/
        /*.btn_primary {*/
        /*    color:white;*/
        /*    background-color: #0235b5;*/
        /*}*/

        .w-min {

            width: min-content;

        }

        .w-max {

            width: max-content;

        }

        .rounded-10 {

            border-radius: 10px;

        }

        .border_primary {

            border-color: #0235b5;

        }

        .text_primary {

            color: #0235b5;

        }

        * {
            /*outline:1px solid red;*/
            font-family: Poppins !important;

        }

            /* Hide the number input arrows in modern browsers */
            input[type="number"]::-webkit-inner-spin-button,
            input[type="number"]::-webkit-outer-spin-button {
              -webkit-appearance: none;
              margin: 0;
            }
        
            /* Hide the number input arrows in Firefox */
            input[type="number"] {
              -moz-appearance: textfield;
            }
        footer input::placeholder {

            color: black !important;

            font-weight: 500;

        }

        input::placeholder {

            color: black !important;

        }

        .flag-container .active {

            border-radius: 4px;

            background: #FFF;

             box-shadow: 0px 0px 16px 0px rgba(0, 0, 0, 0.16); 

            padding: 5px;

        }

        .flag-container .flag {

            margin: 5px;

            cursor: pointer;

        }

       
        header .nav-list a {

            font-size: 16px;

            line-height: 24px;

            color: black !important;

        }

        header .nav-list .nav-link.active {
            color: #0235B5 !important;
            font-weight: 500;
        }
        .header-logo_text{
            font-size:16px;
            width:251px;
        }


        /* Search bar */
        .searchbar {
            position: relative;
        }

        .searchbar button {
            position: absolute;
            right: 0rem;
            bottom: 0rem;
            font-size: 1.3rem;
            background-color: transparent;
            border: none;
            height: 100%;
            width: 62px;
            z-index: 111;
        }

        .button-search button i {
            padding-top: 5px;
        }
        .cursor-pointer{
            cursor:pointer;
        }
        #header-input {
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }



        .side-tab .nav-link {

            color: #C0C0C0 !important;

            font-weight: 400 !important;

        }
        
        .side-tab .nav-link:hover {

            color: var(--blue) !important;

            font-weight: 500 !important;

        }

        .side-tab .nav-link.active {

            padding: 0px !important;

            background-color: transparent !important;

            color: #0235B5 !important;

            font-weight: 700 !important;

        }
        .text-primary{
            color:var(--primary);
        }
        .side-tab .active::after {

            content: url("<?= base_url('assets/icons/arrow_right.png') ?>");

            margin-left: 20px;

        }



        .tab-content a {

            font-size: 15px;

            text-decoration: none;

        }

        .text-100 {

            font-weight: 100;

        }

        .text-200 {

            font-weight: 200;

        }

        .text-300 {

            font-weight: 300;

        }

        .text-400 {

            font-weight: 400;

        }

        .text-500 {

            font-weight: 500;

        }

        .text-600 {

            font-weight: 600;

        }

        .text-700 {

            font-weight: 700;

        }

        .text-800 {

            font-weight: 800;

        }

        .text-900 {

            font-weight: 900;

        }

        .dropdown-container .header-category a {
            color: black;
            text-decoration: none;

        }

        .header-nav_tabs a:hover {

            color: var(--blue) !important;
            
            cursor:pointer;
            text-decoration:underline;
        }
        .header-nav_tabs a.active{
            font-weight:500;
            color: var(--blue) !important;
            text-decoration:underline;
        }
        

        footer {

            position: relative;

            width: 100%;

            bottom: 0px;

        }

        footer .contact_info {

            font-size: 12px;

        }

        .dropdown-container {

            z-index: 100;
            transition-duration: 500ms;
            transition-timing-function: ease-in-out;


        }

        .tpr_quote:hover {
            color: #fff !important;
        }

        .footer_logo {
            height: 3rem;
            width: 3rem;
        }
        .btn{
            transition-delay: -1s !important;
        }
        /*.btn:hover {*/
        /*    transition: none;*/
        /*}*/

        .dropdown-container a:hover {
            color: var(--blue) !important;
        }
        .header-logo{
            width:58px;
            height:52px;
        }
         /* BREAKPOINTS */
    .header-nav_tabs{
        width:70%;
    }
    .header-nav_tabs li{
        /*border:1px solid red;*/
    }
    .product_slide_card:hover{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.5);
    }
    @media only screen and (max-width: 480px) {
        .header-logo_text{
             font-size:10px;
             width:100%;
        }
        .header-blue{
            height:50px;
        }
        .header-logo{
            width:36px;
            height:32px;
        }
    }
    @media only screen and (min-width: 481px) {
         font-size:40px;
    }
    @media only screen and (min-width: 1024px) {
         font-size:50px;
    }
    </style>



    <title>TPR</title>

</head>

<body class="container-fluid p-0 m-0">
    <?php $this->load->view('templates/header_temp',array('active_page'=>$active_page,'product_dropdown'=>$product_dropdown))?>
    <main class="p-0">

        <?= $contents ?>

    </main>

    <?php $this->load->view('templates/footer_temp')?>

    <!-- <script>
        $(document).ready(function() {
            $(document).mouseup(function(e) {
                var element = e.target;
                var link_type = $(element).attr('link');

                if ($(e.target).closest(".dropdown-container") === null) {
                    $(".dropdown-container").hide("slow");
                }
                if (link_type === 'dropdown') {
                    return;
                }
                var container = $(".dropdown-container");

                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    $('.dropdown-container').hide('slow')
                }
            });
            $(".nav-item").on("click", function() {

                let dropdown = $(this).attr("dropdown-id");

                $('.dropdown-container').each(function(i, val) {

                    // do something with val

                    if ($(val).attr('id') != dropdown) {


                    }

                });

                $("#" + dropdown).toggle('slow');

            })

            //  Todo: Make the dropdown closable when click outside

            //  $(document).click(function(event) {

            //       var target = $(event.target);

            //       let dropdown= $(this).attr("dropdown-id");

            //       var element = $(".dropdown-container"); // the element you want to toggle



            //       if (!target.is(element) && !target.closest(element).length && target.is(':visible')) {

            //             // if the clicked element is not the element or its children

            //             element.toggle('slow'); // toggle the element

            //           }



            //     });

        })
    </script> -->


    <script>
        $(document).ready(function() {
            let active_tab=null;
            $(document).on('click','.head-nav_link',function(e){
                let dropdown_id=$(this).data('dropdown_id');
                
                if(active_tab!=null){
                    let active_tab_id=active_tab.attr('id');
                    
                    if(active_tab_id!=dropdown_id){
                        $('.header-nav_tabs a').removeClass('active')
                        active_tab.toggleClass('d-none');
                    }
                    
                }
                
                $('#'+dropdown_id).toggleClass('d-none');
                active_tab= $('#'+dropdown_id);
                $(this).find('a.nav-link').addClass('active')
                
            })
            $(document).click(function(event) {
                  if (!$(event.target).closest('.dropdown-container').length && !$(event.target).closest('.head-nav_link').length  ) {
                    $('.dropdown-container').addClass('d-none');
                    $('.header-nav_tabs a').removeClass('active')
                    active_tab=null;
                  }
                  
            });
            
            return;
            var activeDropdown = null;
            // $(document).on('click','button.nav-item',function(e){
            //     e.stopPropagation();
            // })
            $(document).on('click',".nav-item",function(e) {
                
                var dropdown_id = $(this).attr("dropdown-id");
                if (activeDropdown !== null) {
                    console.log('ssss');
                    $(".dropdown-container" + activeDropdown).css("display", "none");
                }

                activeDropdown = dropdown_id;

                $(".dropdown-container#" + dropdown_id).css("display", "block");
               
            });

            // $(".dropdown-container").click(function(e) {
            //      e.stopPropagation();
            //     $(this).css("display", "none");

            // });

            $("body").on('click',function(e) {
                e.stopPropagation();
                $(".dropdown-container").css("display", "none");

            });
            $('#header-select_categories').on('change', function() {
                  // Get the text of the selected option
                  var selectedOptionText = $(this).find('option:selected').text();
                  
                  // Calculate the width based on the length of the text
                  var textWidth = selectedOptionText.length * 8; // Adjust multiplier as needed
                  textWidth=textWidth<=100?100 : textWidth;
                  // Set the width of the select element
                  $(this).css('max-width', textWidth + 'px');
                });

        });
    </script>
</body>

</html>