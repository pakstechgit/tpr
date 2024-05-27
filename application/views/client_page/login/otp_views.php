<style>
    .otp-code input {
        width: 60px;
        height: 60px;

        border: 1px solid black;
        border-radius: 8px;
        line-height: 50px;
        text-align: center;
        font-size: 24px;

        color: black;
        margin: 0 2px;
    }

    .reg-btn:hover {
        color: #fff;
        background-color: #335DFF;
        border: none;
    }

    .fw-bold {
        letter-spacing: 3px;
        line-height: .8;
    }
  
</style>

<div class="container m-5  justify-content-center align-items-center">
    <div class="row d-flex justify-content-center align-items-center w-100">
        <div class="d-flex justify-content-center align-items-center mt-2">
            <div class="d-flex justify-content-center align-items-center m-5">

                <div class="card" style="width: 564px; border-radius: 24px;  box-shadow: 0px 8px 19px 0px rgba(0, 0, 0, 0.1), 0px 10px 16px -3px rgba(0, 0, 0, 0.1);">
                    <div class="wrapper p-3 ">
                        <div class="header text-center">
                            <h3 class="my-5" style="font-size: 2rem;">Enter OTP code</h3>

                            <p class="px-5">
                                Please enter the 6 digit OTP-code that was sent to your <strong>email</strong>.
                            </p>

                        </div>

                        <div class="position-relative">
                            <form method="get" class="otp-code d-flex justify-content-center gap-4 my-5" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                                <input type="text" id="digit-1" name="digit-1" data-next="digit-2" />
                                <input type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" />
                                <input type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" />

                                <input type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" />
                                <input type="text" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4" />
                                <input type="text" id="digit-6" name="digit-6" data-previous="digit-5" />
                            </form>
                            <div class="d-grid my-5 px-3">
                                <button class="btn btn-light border py-3 reg-btn" style="border-radius: 12px;"><strong class="fw-bold">Verify</strong></button>
                            </div>
                        </div>

                        <div class="my-5 text-center">
                            <h6 class="my-5">Didn't recieve a verification code?</h6>
                            <div class="my-2">
                                <a href="#" style="text-decoration: none; color: black;">
                                    <h6>Resend OTP code in <span id="timer"></span></h6>
                                </a>
                            </div>
                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.otp-code').find('input').each(function() {
            $(this).attr('maxlength', 1);
            $(this).on('keyup', function(e) {
                var parent = $($(this).parent());

                if (e.keyCode === 8 || e.keyCode === 37) {
                    var prev = parent.find('input#' + $(this).data('previous'));

                    if (prev.length) {
                        $(prev).select();
                    }
                } else if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 65 && e.keyCode <= 90) || (e.keyCode >= 96 && e.keyCode <= 105) || e.keyCode === 39) {
                    var next = parent.find('input#' + $(this).data('next'));

                    if (next.length) {
                        $(next).select();
                    } else {
                        if (parent.data('autosubmit')) {
                            parent.submit();
                        }
                    }
                }
            });
        });
    });
</script>

<script>
    var timeLeft = 30;
    var elem = document.getElementById('timer');

    var timerId = setInterval(countdown, 1000);

    function countdown() {
        if (timeLeft == -1) {
            clearTimeout(timerId);
            doSomething();
        } else {
            elem.innerHTML = timeLeft;
            timeLeft--;
        }
    }
</script>