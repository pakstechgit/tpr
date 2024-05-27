<section class="p-16">
        <div class=" bg-[#BBC8EB33] text-center rounded-lg w-[567px] h-[326px] py-10 m-auto justify-evenly flex flex-col space-y-5">
            <div class="flex justify-center items-center space-x-16">
                <img src="<?= base_url('assets/icons/check_success.svg')?>" alt="">
                <p class="text-[#00A743] text-xl">Thank you for your purchase</p>
            </div>
            <p class="text-xl font-bold text-center"><span class="font-sans">₱</span> 315.00</p>
            <p class="text-xl text-center">Your order number is <?=$this->session->flashdata('order_code')?></p>
            <p>Track your order <a href="" class="text-primary">here</a>.</p>
        </div>
</section>