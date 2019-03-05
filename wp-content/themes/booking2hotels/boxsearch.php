<div class="boxsearch-position">
    <?php
                $booking_page=get_booking_page();
                $getbooking_page=$booking_page['booking'];
    ?>
                   <form name="frmCheckRate" id="frmCheckRate" method="post" action="<?php echo $getbooking_page;?>">
    
        <div class="container">
            <div class="boxsearch">
                <div class="row">
                    <div class="col-xs-12 col-md-3">
                        <div class="input-wraper">
                            <span>Check In Date</span>
                            <input name="dateci" id="dateci" size="20" autocomplete="off" value="" readonly="" rel="datepicker" type="text" placeholder="Check-in" class="form-control hasDatepicker">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="input-wraper">
                            <span>Check Out Date</span>
                            <input name="dateco" id="dateco" size="20" autocomplete="off" value="" readonly="" type="text" class="form-control hasDatepicker" placeholder="Check-out">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="input-wraper">
                            <span>Discount Code</span>
                            <input type="text" placeholder="Apply Here" id="discountcode" name="discountcode" class="form-control" size="20" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <a href="javascript:void(0)" id="btnBook" name="btnBook" class="btn">CHECK AVAILABILITY</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
