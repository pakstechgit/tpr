<style>
    .card-img-top{
        cursor:pointer;
    }
    
    .thumbnail::after {
      content: "\25BA"; /* Unicode character for play symbol */
      cursor:pointer;
      position: absolute; /* Position the pseudo-element over the image */
      top: 50%; /* Center vertically */
      left: 50%; /* Center horizontally */
      transform: translate(-50%, -50%); /* Offset by half of its own size */
      width: 50px; /* Set width */
      height: 50px; /* Set height */
      line-height: 50px; /* Align text vertically */
      text-align: center; /* Align text horizontally */
      font-size: 30px; /* Set font size */
      color: white; /* Set text color */
      background: rgba(0, 0, 0, 0.5); /* Set background color with transparency */
      border-radius: 50%; /* Make it circular */
    }
</style>
<div class="container-fluid p-5">
    <div class="row">
        <div class="col-md-4 w-max ">
            <div class="card" style="width: 18rem;">
                <div class="position-relative">
                    <div class="thumbnail">
                        <img src="<?=base_url('assets/images/card_header-1.jpg')?>" class=" d-block card-img-top" alt="...">
                    </div>
                </div>
              <div class="card-body">
                <h5 class="card-title">How to use Product A</h5>
                <a href="#" class=" d-block m-auto btn btn-primary">Play</a>
              </div>
            </div>
        </div>
        <div class="col-md-4 w-max ">
            <div class="card" style="width: 18rem;">
                <div class="position-relative">
                    <div class="thumbnail">
                        <img src="<?=base_url('assets/images/card_header-2.jpg')?>" class=" d-block card-img-top" alt="...">
                    </div>
                </div>
              <div class="card-body">
                <h5 class="card-title">How to use Product A</h5>
                <a href="#" class=" d-block m-auto btn btn-primary">Play</a>
              </div>
            </div>
        </div>
    </div>
</div>