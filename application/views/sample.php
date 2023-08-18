<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <meta http-equiv=”X-UA-Compatible” content=”IE=EmulateIE9”>
    <meta http-equiv=”X-UA-Compatible” content=”IE=9”>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--Core CSS -->
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="" class="logo">
        <img src="" alt="" width="100">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="">
                <span class="username"></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href=""><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="">
                    <i class="fa fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="">
                    <i class="fa fa-building-o"></i>
                        <span>Business</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-users"></i>
                        <span>Product</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Orders</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-users"></i>
                        <span>Delivery Partner Request</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-cog"></i>
                        <span>Edit Theme</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>
</aside>
<style type="text/css">
    .form_delete{
        display: inline-block;
    }
    .dealValidExpiryDate{display: none;}
    .timingDiv{display: none;}
    .newAddedHour{margin-top: 15px;}
</style>


    ?>
    <section id="main-content" class="">
        <section class="wrapper">

            <div class="row">
              <div class="col-lg-12">
                  <ul class="breadcrumb">
                  
                   
                    <li>
                       
                            if($dealPlaceId==1){
                                echo "Deal of the Day";
                            }else if($dealPlaceId==2){
                                echo "Koovi Special";
                            }else if($dealPlaceId==3){
                                echo "Weekly";
                            }else if($dealPlaceId==4){
                                echo "Monthly";
                            }
                            ?>
                        </a>
                    </li>
                    <li>Add New Deal</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Deals - Add
                        <span class="pull-right">
      
                            </span>
                    </header>
                    <div class="panel-body">

                        <div class="col-lg-12">
       

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Business <span>*</span></label>
                                    <div class="col-sm-6">
                                        <select name="businessId" id="businessId" class="form-control">
                                            <option value="">-- Select Business --</option>
                                            <?php
                                            $getData=$_GET;
                                            $businessId=0;
                                            if(isset($getData["businessId"])){
                                                $businessId=$getData["businessId"];
                                            }
                                            if($businessList["totalRows"]>0){
                                                foreach ($businessList["dataList"] as $vKey => $vValue) {
                                                    ?>
                                                    <option value="<?php echo $vValue["primId"]; ?>" <?php if($businessId==$vValue["primId"]){ echo "selected"; } ?> data-maximum-vouchers="<?php echo $vValue["dealsPerDay"]; ?>"><?php echo $vValue["businessName"]; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                           
                                        <input type="hidden" name="dealId" value="0">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Product/Service <span>*</span></label>
                                    <div class="col-sm-6">
                                        <select name="productId" id="productId" class="form-control">
                                            <option value="" data-actual-price="0">-- Select Product/Service --</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Actual Price<span>*</span> <em>(Rs)</em></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="actualPrice" placeholder="Actual Price" readonly>
                                    </div>
                                </div>

                                <header class="panel-heading">
                                    LIFE TIME
                                </header>
                                <p>&nbsp;</p>

                                <div class="form-group dealValidDate">
                                    <label class="col-sm-3 control-label">Deals - Start Date & Time<span>*</span> </label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control startDatePicker" name="dealStartDate" placeholder="Start Date">
                                        <span style="color:darkgreen">(The deal will be shown to the customers starting from this date & time)<span style="color:red";>*</span></span>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group bootstrap-timepicker">
                                            <input type="text" class="form-control startTimePicker" name="dealStartTime" placeholder="Start Time" value="00:00">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                        </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group dealValidDate">
                                    <label class="col-sm-3 control-label">Deals - End Date & Time<span>*</span> </label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control endDatePicker" name="dealEndDate" placeholder="End Date">
                                        <span style="color:darkgreen">(The deal will be taken down from koovi at this time)<span style="color:red";>*</span></span>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group bootstrap-timepicker">
                                            <input type="text" class="form-control endTimePicker" name="dealEndTime" placeholder="End Time" value="23:59">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <header class="panel-heading">
                                    Discount
                                </header>
                                <p>&nbsp;</p>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Deal Type<span>*</span> </label>
                                    <div class="col-sm-6">
                                        <input type="radio" name="dealDiscountType" id="dealType1" value="perc" checked>
                                        <label for="dealType1">Discount Percentage</label>
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="dealDiscountType" id="dealType2" value="fixed">
                                        <label for="dealType2">Flat Rate</label>
                                    </div>
                                </div>

                                <div class="form-group dealTypePercentage">
                                    <label class="col-sm-3 control-label">Discount Percentage<span>*</span> (%)</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="discPercentage" placeholder="Discount Percentage" max="100" min="1">
                                    </div>
                                </div>

                                <div class="form-group dealTypeFlatRate">
                                    <label class="col-sm-3 control-label">Discount Flat Rate<span>*</span>  (Rs)</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="discFlatRate" placeholder="Discount Flat Rate" min="0" max="1000000" readonly>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Reserve Me Pay Percentage<span>*</span> (%)</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="reserveMePercentage" placeholder="Reserve Me Percentage" max="100" min="0">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Reserve Me Pay Flat Rate<span>*</span>  (Rs)</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="reserveMeFlatRate" placeholder="Reserve Me Flat Rate" min="0" max="1000000" readonly>
                                    </div>
                                </div>

                                <header class="panel-heading">
                                    General Information
                                </header>
                                <p>&nbsp;</p>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">UOM <span>*</span></label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="measurementValue" placeholder="Unit Value" min="1" max="100">
                                    </div>

                                    <div class="col-sm-2">
                                        <select class="form-control" name="measurementUnit">
                                            <option value="">-- Select Unit --</option>
                                            <?php
                                            if($unitsList["totalRows"]>0){
                                                foreach ($unitsList["dataList"] as $ukey => $uvalue) {
                                                    ?>
                                                    <option><?php echo $uvalue; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Stock Coupons Count<span>*</span> </label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" name="inStockQty" placeholder="Coupon Count" min="1" max="10000">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Maximum no. of coupons user can buy <span>*</span> </label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" name="maxAllowedVoucher" placeholder="Maximum no. of coupons user can buy" min="1" max="100">
                                    </div>
                                </div>

                                <header class="panel-heading">
                                    Deal Position
                                </header>
                                <p>&nbsp;</p>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Position </label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" name="dealOrder" placeholder="Position" min="0" max="200" value="0">
                                    </div>
                                </div>

                                <header class="panel-heading">
                                    Terms of Coupons
                                </header>
                                <p>&nbsp;</p>

                                <?php
                                $daysArray=array("sun","mon","tue","wed","thu","fri","sat");
                                foreach ($daysArray as $dkey => $dvalue) {
                                    ?>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            <?php
                                            if($dvalue=='sun'){
                                                ?>
                                                Coupons Accepted Days<span>*</span>
                                                <?php
                                            }
                                            ?></label>
                                            <div class="col-sm-1">
                                                <?php echo ucfirst($dvalue); ?>
                                            </div>

                                            <div class="col-sm-3">
                                                <input type="radio" name="acceptedDays[<?php echo $dvalue; ?>]" id="acceptedDays<?php echo $dvalue; ?>1" value="1" class="acceptedDays" onclick="toggleTime('<?php echo $dvalue; ?>',1)">
                                                <label for="acceptedDays<?php echo $dvalue; ?>1">Accepted</label>
                                                &nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="acceptedDays[<?php echo $dvalue; ?>]" id="acceptedDays<?php echo $dvalue; ?>2" value="0" class="acceptedDays" onclick="toggleTime('<?php echo $dvalue; ?>',0)" checked>
                                                <label for="acceptedDays2">Not Accepted</label>
                                            </div>

                                            <div class="col-sm-5 <?php echo $dvalue; ?>Timing timingAdded" data-items-count="1">
                                                <div class="row timingDiv">
                                                    <div class="col-sm-5">
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input type="text" class="form-control acceptTimePicker" name="acceptedFromTime[<?php echo $dvalue; ?>][]" placeholder="From" value="10:00">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-5">
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input type="text" class="form-control acceptTimePicker" name="acceptedToTime[<?php echo $dvalue; ?>][]" placeholder="To" value="22:00">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-2">
                                                        <button type="button" name="addNewHour" class="btn btn-warning btn-xs addNewHour addNewHour<?php echo $dvalue; ?>" id="addNewHour" data-items-count="1" data-maximum-allowed="3" data-add-day='<?php echo $dvalue; ?>'><i class="fa fa-plus"></i></button>
                                                    </div>
                                                </div>

                                                <div class="row timingAddition" data-items-count="">

                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                    <header class="panel-heading">
                                       live Offers 
                                </header>
                                <p>&nbsp;</p>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Offer Validity - Start Date & Time<span>*</span> </label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control couponValidityDate" name="voucherValidFromDate" placeholder="Start Date">
                                            <span style="color:darkgreen">(Customers can get the coupons after this date & time)<span style="color:red";>*</span></span>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control couponValidityTime" name="voucherValidFromTime" placeholder="Start Time" value="00:00">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Offer Validity - End Date & Time<span>*</span> </label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control couponValidityDate" name="voucherValidToDate" placeholder="End Date">
                                             <span style="color:darkgreen">(Customers cannot download coupons after this date&time)<span style="color:red";>*</span></span>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control couponValidityTime" name="voucherValidToTime" placeholder="End Time" value="23:59">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-sm-3 control-label">Coupon Validity for (After download, the validity of the coupon) <span>*</span> </label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" name="voucherValidFor" placeholder="Coupon Validity for (No. of Days)" min="1" max="31">
                                        <span style="color:green">(Coupon Valid only within offer days)<span style="color:red";>*</span></span>
                                    </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Refund Policy <span>*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control textEditor" rows="5" id="refundPolicy" name="refundPolicy"></textarea>
                                        </div>
                                    </div>
                                    <header class="panel-heading">
                                     Platform Fee Detail
                                 </header>
                                 <p>&nbsp;</p>
                                 <div class="form-group">
                                    <label class="col-sm-3 control-label">Platform Fee <span>*</span> </label>
                                    <div class="col-sm-6">
                                      
                                   
                                     
                                        <input type="hidden" name="feeDiscount" value="0">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3">&nbsp;</label>
                                    <div class="col-sm-6">
                                        <button type="submit" name="addDeal" class="btn btn-success">Add Deal</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>

<div id="timeAdditionHtml" style="display: none;">
    <div class="col-sm-12 newAddedHour">
        <div class="row">
            <div class="col-sm-5">
                <div class="input-group bootstrap-timepicker">
                    <input type="text" class="form-control acceptTimePicker" name="acceptedFromTime[replace][]" placeholder="From" value="10:00" id="acceptedFromTimeId01">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                    </span>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="input-group bootstrap-timepicker">
                    <input type="text" class="form-control acceptTimePicker" name="acceptedToTime[replace][]" placeholder="To" value="22:00" id="acceptedToTimeId01">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                    </span>
                </div>
            </div>

            <div class="col-sm-2">
                <button type="button" name="removeHour" class="btn btn-warning btn-xs removeHour" id="removeHour" data-add-day='replaceDay'><i class="fa fa-minus"></i></button>
            </div>
        </div>
    </div>
</div>

    <section id="main-content" class="">
        <section class="wrapper">

            <div class="row">
              <div class="col-lg-12">
                  <ul class="breadcrumb">
            
                    
                    <li>
                    
                            if($dealData["dealPlacementType"]==1){
                                echo "Deal of the Day";
                            }else if($dealData["dealPlacementType"]==2){
                                echo "Koovi Special";
                            }else if($dealData["dealPlacementType"]==3){
                                echo "Weekly";
                            }else if($dealData["dealPlacementType"]==4){
                                echo "Monthly";
                            }
                            ?>
                        </a>
                    </li>
                  
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Manage Deal
                        <span class="pull-right">
                   
                            </span>
                    </header>
                    <div class="panel-body">
                        <?php
                        $this->load->view("vendors/warning-msg");
                        ?>
                        <div class="col-lg-12">
                            <?php
                            $fieldStatus=($dealData["dealStatus"]==1) ? "readonly": "";
                            $radioFieldStatus=($dealData["dealStatus"]==1) ? "disabled": "";
                            ?>
                            <form class="form-horizontal bucket-form" action="<?php echo vendorUrl; ?>discounts/updateDeal" id="addDealForm" method="post" enctype="multipart/form-data" autocomplete="off">

                                <select name="productId" id="productId" class="form-control" style="display:none;">
                                    <option data-actual-price='<?php echo $dealData["actualPrice"]; ?>'><?php echo $dealData["productName"]; ?></option>
                                </select>
                                <input type="hidden" name="dealId" value="<?php echo  $dealData["primId"]; ?>">
                                <input type="hidden" name="businessId" value="<?php echo $dealData["businessId"]; ?>">
                                <input type="hidden" name="dealPlaceId" value="<?php echo $dealPlaceId; ?>">

                                <input type="hidden" name="currentApprovedStatus" value="<?php echo $dealData["dealStatus"]; ?>">                                

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Business </label>
                                    <div class="col-sm-6">
                                        <?php
                                        $businessData=$dealData["businessDetail"]["dataDetail"];
                                        echo "Ref ID : ".$businessData["businessRefId"]."<br>Name : ".$businessData["businessName"]."<br>Contact Email : ".$businessData["contactPersonEmail"]."<br>Mobile : ".$businessData["contactPersonMobile"];
                                        ?>  
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Product Name </label>
                                    <div class="col-sm-6">
                                        <?php echo $dealData["productName"]; ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Actual Price<span>*</span> <em>(Rs)</em></label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="actualPrice" placeholder="Actual Price" value="<?php echo $dealData["actualPrice"]; ?>" readonly>
                                    </div>  
                                </div>

                                <header class="panel-heading">
                                    LIFE TIME
                                </header>
                                <p>&nbsp;</p>

                                <div class="form-group dealValidDate">
                                    <label class="col-sm-3 control-label">Deals - Start Date & Time<span>*</span> </label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control startDatePicker" name="dealStartDate" placeholder="Start Date" value="<?php echo date("d-m-Y",strtotime($dealData["startDateTime"])); ?>" <?php echo $fieldStatus; ?> required>
                                        <span style="color:darkgreen">(The deal will be shown to the customers starting from this date & time)<span style="color:red";>*</span></span>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group bootstrap-timepicker">
                                            <input type="text" class="form-control startTimePicker" name="dealStartTime" placeholder="Start Time" value="<?php echo date("H:i",strtotime($dealData["startDateTime"])); ?>" <?php echo $fieldStatus; ?> required>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group dealValidDate">
                                    <label class="col-sm-3 control-label">Deals - End Date & Time<span>*</span> </label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control endDatePicker endDatePicker1" name="dealEndDate" placeholder="End Date" value="<?php echo date("d-m-Y",strtotime($dealData["endDateTime"])); ?>" <?php echo $fieldStatus; ?> required>
                                        <span style="color:darkgreen">(The deal will be taken down from koovi at this time)<span style="color:red";>*</span></span>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="input-group bootstrap-timepicker">
                                            <input type="text" class="form-control endTimePicker" name="dealEndTime" placeholder="End Time" value="<?php echo date("H:i",strtotime($dealData["endDateTime"])); ?>" <?php echo $fieldStatus; ?> required>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <header class="panel-heading">
                                    Discount
                                </header>
                                <p>&nbsp;</p>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Deal Type<span>*</span> </label>
                                    <div class="col-sm-6">
                                        <input type="radio" name="dealDiscountType" id="dealType1" value="perc" <?php if($dealData["dealType"]=='perc'){ echo "checked";} ?> <?php echo $radioFieldStatus; ?>>
                                        <label for="dealType1">Discount Percentage</label>
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="radio" name="dealDiscountType" id="dealType2" value="fixed" <?php if($dealData["dealType"]=='fixed'){ echo "checked";} ?> <?php echo $radioFieldStatus; ?>>
                                        <label for="dealType2">Flat Rate</label>
                                    </div>
                                </div>

                                <div class="form-group dealTypePercentage">
                                    <label class="col-sm-3 control-label">Discount Percentage<span>*</span> (%)</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="discPercentage" placeholder="Discount Percentage" max="100" min="1" value="<?php echo $dealData["discPercentage"]; ?>" <?php if($dealData["dealType"]=='fixed'){ echo "readonly"; } ?> <?php echo $fieldStatus; ?>>
                                    </div>
                                </div>

                                <div class="form-group dealTypeFlatRate">
                                    <label class="col-sm-3 control-label">Discount Flat Rate<span>*</span>  (Rs)</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="discFlatRate" placeholder="Discount Flat Rate" min="0" max="1000000" value="<?php echo $dealData["discFlatRate"]; ?>" <?php if($dealData["dealType"]=='perc'){ echo "readonly"; } ?> <?php echo $fieldStatus; ?>>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Reserve Me Pay Percentage<span>*</span> (%)</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="reserveMePercentage" placeholder="Reserve Me Percentage" max="100" min="0" value="<?php echo $dealData["reserveMePercentage"]; ?>" <?php if($dealData["dealType"]=='fixed'){ echo "readonly"; } ?> <?php echo $fieldStatus; ?>>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Reserve Me Pay Flat Rate<span>*</span>  (Rs)</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" name="reserveMeFlatRate" placeholder="Reserve Me Flat Rate" min="0" max="<?php echo $dealData["discFlatRate"]; ?>" value="<?php echo $dealData["reserveMeFlatRate"]; ?>" <?php if($dealData["dealType"]=='perc'){ echo "readonly"; } ?> <?php echo $fieldStatus; ?>>
                                    </div>
                                </div>

                                <header class="panel-heading">
                                    General Information
                                </header>
                                <p>&nbsp;</p>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">UOM <span>*</span></label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" name="measurementValue" placeholder="Unit Value" min="1" max="100" value="<?php echo $dealData["measurementValue"]; ?>" <?php echo $fieldStatus; ?>>
                                    </div>

                                    <div class="col-sm-2">
                                        <select class="form-control" name="measurementUnit" <?php echo $fieldStatus; ?>>
                                            <option value="">-- Select Unit --</option>
                                            <?php
                                            if($unitsList["totalRows"]>0){
                                                foreach ($unitsList["dataList"] as $ukey => $uvalue) {
                                                    ?>
                                                    <option <?php if($uvalue==$dealData["measurementUnit"]){ echo "selected"; } ?>><?php echo $uvalue; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Coupon Count<span>*</span> </label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" name="inStockQty" placeholder="Coupon Count" min="10" max="10000" value="<?php echo $dealData["inStockQty"]; ?>" <?php echo $fieldStatus; ?>>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Maximum no. of coupons user can buy <span>*</span> </label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" name="maxAllowedVoucher" placeholder="Maximum no. of vouchers user can buy" min="1" max="100" value="<?php echo $dealData["maxAllowedVoucher"]; ?>" <?php echo $fieldStatus; ?>>
                                    </div>
                                </div>

                                <header class="panel-heading">
                                    Deal Position
                                </header>
                                <p>&nbsp;</p>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Position </label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" name="dealOrder" placeholder="Position" min="0" max="200" value="<?php echo $dealData["dealOrder"]; ?>">
                                    </div>
                                </div>

                                <header class="panel-heading">
                                Terms of Coupons
                            </header>
                            <p>&nbsp;</p>

                            <?php
                            //$daysArray=array("sun","mon","tue","wed","thu","fri","sat");
                            if($acceptedDays["totalRows"]>0){
                                foreach ($acceptedDays["dataList"] as $dkey => $dvalue) {
                                    ?>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">
                                            <?php
                                            if($dvalue["day"]=='sun'){
                                                ?>
                                                Coupons Accepted Days<span>*</span>
                                                <?php
                                            }
                                            ?></label>
                                            <div class="col-sm-1">
                                                <?php echo ucfirst($dvalue["day"]); ?>
                                            </div>

                                            <div class="col-sm-3">
                                                <input type="radio" name="acceptedDays[<?php echo $dvalue["day"]; ?>]" id="acceptedDays<?php echo $dvalue["day"]; ?>1" value="1" class="acceptedDays" onclick="toggleTime('<?php echo $dvalue["day"]; ?>',1)" <?php if($dvalue["isAccepted"]==1){ echo "checked"; } ?>>
                                                <label for="acceptedDays<?php echo $dvalue["day"]; ?>1">Accepted</label>
                                                &nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="acceptedDays[<?php echo $dvalue["day"]; ?>]" id="acceptedDays<?php echo $dvalue["day"]; ?>2" value="0" class="acceptedDays" onclick="toggleTime('<?php echo $dvalue["day"]; ?>',0)" <?php if($dvalue["isAccepted"]==0){ echo "checked"; } ?>>
                                                <label for="acceptedDays2">Not Accepted</label>
                                                <input type="hidden" name="acceptedDaysPrimId[<?php echo $dvalue["day"]; ?>]" value="<?php echo $dvalue["primId"]; ?>">
                                            </div>

                                            <div class="col-sm-5 <?php echo $dvalue["day"]; ?>Timing timingAdded">
                                                <div class="row timingDiv" <?php if($dvalue["isAccepted"]==1){ echo 'style="display:block;"'; } ?>>
                                                    <?php
                                                    $firstOpeningTime="10:00";
                                                    $lastOpeningTime="22:00";
                                                    $currentItemCount=1;
                                                    if(isset($dvalue["hoursList"])){
                                                        $currentItemCount=count($dvalue["hoursList"]);
                                                        if(count($dvalue["hoursList"])>0){
                                                            $firstOpeningTime=$dvalue["hoursList"][0]["fromTime"];
                                                            $lastOpeningTime=$dvalue["hoursList"][0]["toTime"];
                                                        }
                                                    }
                                                    ?>
                                                    <div class="col-sm-5">
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input type="text" class="form-control acceptTimePicker" name="acceptedFromTime[<?php echo $dvalue["day"]; ?>][]" placeholder="From" value="<?php echo $firstOpeningTime; ?>">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-5">
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input type="text" class="form-control acceptTimePicker" name="acceptedToTime[<?php echo $dvalue["day"]; ?>][]" placeholder="To" value="<?php echo $lastOpeningTime; ?>">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-2">
                                                        <button type="button" name="addNewHour" class="btn btn-warning btn-xs addNewHour addNewHour<?php echo $dvalue["day"]; ?>" id="addNewHour" data-items-count="<?php echo $currentItemCount; ?>" data-maximum-allowed="3" data-add-day='<?php echo $dvalue["day"]; ?>'><i class="fa fa-plus"></i></button>
                                                    </div>

                                                </div>

                                                <div class="row timingAddition">
                                                    <?php
                                                    if($dvalue["isAccepted"]==1 && count($dvalue["hoursList"])>1){
                                                        array_shift($dvalue["hoursList"]);
                                                        foreach ($dvalue["hoursList"] as $hkey => $hvalue) {
                                                            ?>
                                                            <div class="col-sm-12 newAddedHour">
                                                                <div class="row">
                                                                    <div class="col-sm-5">
                                                                        <div class="input-group bootstrap-timepicker">
                                                                            <input type="text" class="form-control acceptTimePicker" name="acceptedFromTime[<?php echo $dvalue["day"]; ?>][]" placeholder="From" value="<?php echo $hvalue["fromTime"]; ?>" id="acceptedFromTimeId00<?php echo $hkey ?>">
                                                                            <span class="input-group-btn">
                                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-5">
                                                                        <div class="input-group bootstrap-timepicker">
                                                                            <input type="text" class="form-control acceptTimePicker" name="acceptedToTime[<?php echo $dvalue["day"]; ?>][]" placeholder="To" value="<?php echo $hvalue["toTime"]; ?>" id="acceptedToTimeId0<?php echo $hkey ?>">
                                                                            <span class="input-group-btn">
                                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                                            </span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-2">
                                                                        <button type="button" name="removeHour" class="btn btn-warning btn-xs removeHour" id="removeHour" data-add-day='<?php echo $dvalue["day"]; ?>'><i class="fa fa-minus"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <?php   
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }else{
                                    $daysArray=array("sun","mon","tue","wed","thu","fri","sat");
                                    foreach ($daysArray as $dkey => $dvalue) {
                                        ?>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">
                                                <?php
                                                if($dvalue=='sun'){
                                                    ?>
                                                    Accepted Days<span>*</span>
                                                    <?php
                                                }
                                                ?></label>
                                                <div class="col-sm-1">
                                                    <?php echo ucfirst($dvalue); ?>
                                                </div>

                                                <div class="col-sm-3">
                                                    <input type="radio" name="acceptedDays[<?php echo $dvalue; ?>]" id="acceptedDays<?php echo $dvalue; ?>1" value="1" class="acceptedDays" onclick="toggleTime('<?php echo $dvalue; ?>',1)">
                                                    <label for="acceptedDays<?php echo $dvalue; ?>1">Accepted</label>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <input type="radio" name="acceptedDays[<?php echo $dvalue; ?>]" id="acceptedDays<?php echo $dvalue; ?>2" value="0" class="acceptedDays" onclick="toggleTime('<?php echo $dvalue; ?>',0)" checked>
                                                    <label for="acceptedDays2">Not Accepted</label>
                                                    <input type="hidden" name="acceptedDaysPrimId[<?php echo $dvalue; ?>]" value="0">
                                                </div>

                                                <div class="col-sm-5 <?php echo $dvalue; ?>Timing timingAdded">
                                                    <div class="row timingDiv">
                                                        <?php
                                                        $firstOpeningTime="10:00";
                                                        $lastOpeningTime="22:00";
                                                        $currentItemCount=1;
                                                        ?>
                                                        <div class="col-sm-5">
                                                            <div class="input-group bootstrap-timepicker">
                                                                <input type="text" class="form-control acceptTimePicker" name="acceptedFromTime[<?php echo $dvalue; ?>][]" placeholder="From" value="<?php echo $firstOpeningTime; ?>">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-5">
                                                            <div class="input-group bootstrap-timepicker">
                                                                <input type="text" class="form-control acceptTimePicker" name="acceptedToTime[<?php echo $dvalue; ?>][]" placeholder="To" value="<?php echo $lastOpeningTime; ?>">
                                                                <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-2">
                                                            <button type="button" name="addNewHour" class="btn btn-warning btn-xs addNewHour addNewHour<?php echo $dvalue; ?>" id="addNewHour" data-items-count="<?php echo $currentItemCount; ?>" data-maximum-allowed="3" data-add-day='<?php echo $dvalue; ?>'><i class="fa fa-plus"></i></button>
                                                        </div>

                                                    </div>

                                                    <div class="row timingAddition">

                                                    </div>
                                                </div>
                                            </div>
                                            <?php   
                                        }
                                    }
                                    ?>
                                    <header class="panel-heading">
                                       live Offers 
                                </header>
                                <p>&nbsp;</p>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Offer Validity - Start Date & Time<span>*</span> </label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control couponValidityDate" name="voucherValidFromDate" placeholder="Start Date" value="<?php echo date("d-m-Y",strtotime($dealData["voucherValidFrom"])); ?>">
                                            <span style="color:darkgreen">(Customers can get the coupons after this date & time)<span style="color:red";>*</span></span>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control couponValidityTime" name="voucherValidFromTime" placeholder="Start Time" value="<?php echo date("H:i",strtotime($dealData["voucherValidFrom"])); ?>">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Offer Validity - End Date & Time<span>*</span> </label>
                                        <div class="col-sm-3">
                                            <input type="text" class="form-control couponValidityDate" name="voucherValidToDate" placeholder="End Date" value="<?php echo date("d-m-Y",strtotime($dealData["voucherValidTo"])); ?>">
                                            <span style="color:darkgreen">(Customers cannot download coupons after this date&time)<span style="color:red";>*</span></span>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="input-group bootstrap-timepicker">
                                                <input type="text" class="form-control couponValidityTime" name="voucherValidToTime" placeholder="End Time"  value="<?php echo date("H:i",strtotime($dealData["voucherValidTo"])); ?>">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-sm-3 control-label">Coupon Validity for (After download, the validity of the coupon) <span>*</span> </label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" name="voucherValidFor" placeholder="Coupon Validity for (No. of Days)" min="1" max="31" value="<?php echo $dealData["voucherValidFor"] ?>">
                                        <span style="color:green">(Coupon Valid only within offer days)<span style="color:red";>*</span></span>
                                    </div>
                                </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Refund Policy <span>*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control textEditor" rows="5" id="refundPolicy" name="refundPolicy"><?php echo $dealData["refundPolicy"]; ?></textarea>
                                        </div>
                                    </div>

                                <header class="panel-heading">
                                    Platform Fee Detail
                                </header>

                                <?php
                                $feeMinValue=(50/100)*$dealData["originalFee"];
                                $discountPerc=($dealData["discountedFee"]/$dealData["originalFee"])*100;
                                $discountedPercentage=100-$discountPerc;
                                ?>
                                <p>&nbsp;</p>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Platform Fee <span>*</span> </label>

                                    <div class="col-sm-6">
                                        <?php
                                        echo "Rs. ".$dealData["discountedFee"];
                                        ?>
                                    </div>
                                </div>

                                <input type="hidden" name="standardFee" value="<?php echo $dealData["discountedFee"]; ?>">
                                <input type="hidden" name="originalFee" value="<?php echo $dealData["originalFee"]; ?>">

                                <input type="hidden" name="feeDiscount" value="<?php echo $discountedPercentage; ?>">

                                <input type="hidden" name="dealStatus" value="<?php echo $dealData["dealStatus"]; ?>">

                                <div class="form-group">
                                    <label class="control-label col-sm-3">&nbsp;</label>
                                    <div class="col-sm-6">
                                        <?php
                                        if($dealData["dealStatus"]!=1){
                                            ?>
                                            <button type="submit" name="update" class="btn btn-success">Update</button>
                                            <?php
                                        }
                                        ?>
                                        <button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?');">Delete</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>

<div id="timeAdditionHtml" style="display: none;">
        <div class="col-sm-12 newAddedHour">
            <div class="row">
                <div class="col-sm-5">
                    <div class="input-group bootstrap-timepicker">
                        <input type="text" class="form-control acceptTimePicker" name="acceptedFromTime[replace][]" placeholder="From" value="10:00" id="acceptedFromTimeId01">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                        </span>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="input-group bootstrap-timepicker">
                        <input type="text" class="form-control acceptTimePicker" name="acceptedToTime[replace][]" placeholder="To" value="22:00" id="acceptedToTimeId01">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                        </span>
                    </div>
                </div>

                <div class="col-sm-2">
                    <button type="button" name="removeHour" class="btn btn-warning btn-xs removeHour" id="removeHour" data-add-day='replaceDay'><i class="fa fa-minus"></i></button>
                </div>
            </div>
        </div>
    </div>

    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->

            <div class="row">
              <div class="col-lg-12">
                  <ul class="breadcrumb">
                    <li><a href="<?php echo vendorUrl."dashboard"; ?>"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li>Sales</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Sales
                    </header>
                    <div class="panel-body">
                        <?php
                        $this->load->view("vendors/warning-msg");
                        ?>
                        <div class="adv-table">

                            <form action="<?php echo vendorUrl; ?>dashboard/formActionPaginationPage" method="post" name="dataTableSearchForm" id="dataTableSearchForm">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-3"><div class="dataTables_length" id="datatable-example_length">

                                        <label>
                                            <input type="hidden" name="currentUrl" value="<?php echo current_url(); ?>">
                                            <input type="hidden" name="baseUrl" value="<?php echo $baseUrl; ?>">
                                            <select name="perPage" aria-controls="datatable-example" class="form-control" id="dataTableChangePerPage">
                                                <option value="10" <?php if($perPage==10) { echo "selected"; } ?>>10</option>
                                                <option value="25" <?php if($perPage==25) { echo "selected"; } ?>>25</option>
                                                <option value="50" <?php if($perPage==50) { echo "selected"; } ?>>50</option>
                                                <option value="100" <?php if($perPage==100) { echo "selected"; } ?>>100</option>
                                            </select> <span class="hidden-xs">records per page</span></label>

                                        </div></div>
                                        <div class="col-sm-8 col-xs-9">
                                            <div id="datatable-example_filter" class="dataTables_filter">
                                                <div class="form-inline">
                                                    <label>
                                                        <select name="sortField" class="form-control">
                                                            <option value="tb1.dateTime" <?php if($sortField=="tb1.dateTime"){ echo "selected"; } ?>>Date & Time</option>
                                                        </select>
                                                        <select name="sortOrder" class="form-control">
                                                            <option value="asc" <?php if($sortOrder=="asc"){ echo "selected"; } ?>>Ascending</option>
                                                            <option value="desc" <?php if($sortOrder=="desc"){ echo "selected"; } ?>>Descending</option>
                                                        </select>
                                                        <input type="search" class="form-control" placeholder="Enter text for search" aria-controls="datatable-example" name="searchTerm" value="<?php if(isset($searchTerm)){ echo $searchTerm; } ?>">
                                                        <button type="submit" class="btn btn-primary" name="search" id="searchButton">Search</button>
                                                        <button type="submit" class="btn btn-primary" name="reset">Reset</button>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <table  class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Order ID</th>
                                            <th>Product Name</th>
                                            <th>Order Details</th>
                                            <th>Date & Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $queryLoopNo = ($pageNumber - 1) * $perPage + 1;
                                        foreach ($dataList["dataList"] as $dlKey => $dlValue) {
                                            ?>
                                            <tr>
                                                <td><?php echo $queryLoopNo; ?></td>
                                                <td><b><?php echo $dlValue["orderId"]; ?></b></td>
                                                <td><?php echo $dlValue["productName"]."<br>"."Price : Rs. ".$dlValue["actualPrice"]."<br>Discount Price : Rs. ".$dlValue["discFlatRate"]; ?></td>
                                                <td>Amount Paid : Rs. <?php echo $dlValue["orderAmount"]."<br>No. of vouchers : <span class='badge'>".$dlValue["noOfVouchers"]."</span> No(s)<br>Used vouchers : ".$dlValue["usedVoucherCount"]." No(s)"; ?></td>
                                                <td><?php echo date("d-M-Y h:i a",strtotime($dlValue["orderDateTime"])); ?></td>
                                                <td class="coupon-button-type"><a href="<?php echo vendorUrl."discounts/viewSale/".$dlValue["orderId"]; ?>" class="btn btn-success">View</a></td>
                                            </tr>
                                            <?php
                                            $queryLoopNo++;
                                        }
                                        ?>

                                    </tfoot>
                                </table>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="DataTable_info" role="status" aria-live="polite">
                                            <?php 
                                            if(isset($showingPageEntries)){
                                                echo "Showing ".$showingPageEntries['resultStart']." to ".$showingPageEntries['resultEnd']." of ".$showingPageEntries['total']." entries";
                                            } ?></div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTable_paginate">
                                                <?php echo $page_links; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->

        <script type="text/javascript">
            (function ($) {
                "use strict";
                $(document).ready(function () {
                    $('#dataTableChangePerPage').change(function() {
                        $('#searchButton').click();
                    });
                });
            })(jQuery);
        </script>
       
        <section id="main-content" class="">
            <section class="wrapper">

                <div class="row">
                  <div class="col-lg-12">
                      <ul class="breadcrumb">
                        <li><a href="<?php echo vendorUrl."dashboard"; ?>"><i class="fa fa-home"></i> Dashboard</a></li>
                        <li><a href="<?php echo vendorUrl."discounts/listSales"; ?>">Sales</a></li>
                        <li>View Sale</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            View Order
                        </header>
                        <div class="panel-body">

                            <div class="col-lg-12">
                                <form class="form-horizontal bucket-form" action="<?php echo vendorUrl; ?>discounts/insertDeal" id="addDealForm" method="post" enctype="multipart/form-data" autocomplete="off">

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Product/Service</label>
                                        <div class="col-sm-6">
                                            <b><?php echo $dealData["productName"]; ?></b>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Actual Price</label>
                                        <div class="col-sm-6">
                                            <b>Rs. <?php echo $dealData["actualPrice"]; ?></b>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Discounted Price</label>
                                        <div class="col-sm-6">
                                            <b>Rs. <?php echo $dealData["discFlatRate"]; ?></b>
                                        </div>
                                    </div>

                                    <div class="form-group dealValidDate">
                                        <label class="col-sm-3 control-label">No. of vouchers</label>
                                        <div class="col-sm-6">
                                            <b><?php echo $orderData["noOfVouchers"]; ?> No(s)</b>
                                        </div>
                                    </div>

                                    <h4>Vouchers</h4>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Voucher ID</th>
                                                <th>Used Status</th>
                                                <th>Used Date & Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if($voucherList["totalRows"]>0){
                                                $dataLoop=1;
                                                foreach ($voucherList["dataList"] as $vkey => $vvalue) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $dataLoop; ?></td>
                                                        <td><b><?php echo $vvalue["voucherId"]; ?></b></td>
                                                        <td><?php if($vvalue["usedStatus"]=="1"){
                                                            ?>
                                                            <span class="btn btn-success btn-xs">Used</span>
                                                            <?php
                                                        }else{
                                                            ?>
                                                            <span class="btn btn-danger btn-xs">Not Used</span>
                                                            <?php
                                                        } ?></td>
                                                        <td><?php if($vvalue["usedStatus"]=='1'){
                                                            echo date("d-M-Y h:i a",strtotime($vvalue["usedDateTime"]));   
                                                        } ?></td>
                                                    </tr>
                                                    <?php
                                                    $dataLoop++;
                                                }
                                            }else{
                                                ?>
                                                <tr>
                                                    <td colspan="6">No records found to display</td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </form>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
   
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->

            <div class="row">
              <div class="col-lg-12">
                  <ul class="breadcrumb">
                    <li><a href="<?php echo vendorUrl."dashboard"; ?>"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li>Vouchers</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Vouchers
                    </header>
                    <div class="panel-body">
                        <?php
                        $this->load->view("vendors/warning-msg");
                        ?>
                        <div class="adv-table">

                            <form action="<?php echo vendorUrl; ?>dashboard/formActionPaginationPage" method="post" name="dataTableSearchForm" id="dataTableSearchForm">
                                <div class="row">
                                    <div class="col-sm-4 col-xs-3"><div class="dataTables_length" id="datatable-example_length">

                                        <label>
                                            <input type="hidden" name="currentUrl" value="<?php echo current_url(); ?>">
                                            <input type="hidden" name="baseUrl" value="<?php echo $baseUrl; ?>">
                                            <select name="perPage" aria-controls="datatable-example" class="form-control" id="dataTableChangePerPage">
                                                <option value="10" <?php if($perPage==10) { echo "selected"; } ?>>10</option>
                                                <option value="25" <?php if($perPage==25) { echo "selected"; } ?>>25</option>
                                                <option value="50" <?php if($perPage==50) { echo "selected"; } ?>>50</option>
                                                <option value="100" <?php if($perPage==100) { echo "selected"; } ?>>100</option>
                                            </select> <span class="hidden-xs">records per page</span></label>

                                        </div></div>
                                        <div class="col-sm-8 col-xs-9">
                                            <div id="datatable-example_filter" class="dataTables_filter">
                                                <div class="form-inline">
                                                    <label>

                                                        <input type="search" class="form-control" placeholder="Enter text for search" aria-controls="datatable-example" name="searchTerm" value="<?php if(isset($searchTerm)){ echo $searchTerm; } ?>">
                                                        <button type="submit" class="btn btn-primary" name="search" id="searchButton">Search</button>
                                                        <button type="submit" class="btn btn-primary" name="reset">Reset</button>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <table  class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Voucher ID</th>
                                            <th>Order ID</th>
                                            <th>Used Status</th>
                                            <th>Deal Detail</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $queryLoopNo = ($pageNumber - 1) * $perPage + 1;
                                        foreach ($dataList["dataList"] as $dlKey => $dlValue) {
                                            ?>
                                            <tr>
                                                <td><?php echo $queryLoopNo; ?></td>
                                                <td><b><?php echo $dlValue["voucherId"]; ?></b></td>
                                                <td><?php echo $dlValue["orderId"]; ?></td>
                                                <td><?php
                                                if($dlValue["usedStatus"]=="1"){
                                                    ?>
                                                    <span class="btn btn-success btn-xs">Used</span>
                                                    (<?php echo date("d-M-Y h:i a",strtotime($dlValue["usedDateTime"])); ?>)
                                                    <?php
                                                }else{
                                                    ?>
                                                    <span class="btn btn-danger btn-xs">Not Used</span>
                                                    <?php
                                                }
                                                ?></td>
                                                <td><?php
                                                echo $dlValue["productName"]." (Discount : Rs. ".$dlValue["discFlatRate"].")";
                                                ?></td>
                                                <td>
                                                    <?php
                                                    if($dlValue["usedStatus"]=='0'){
                                                        ?>
                                                        <form action="<?php echo vendorUrl."discounts/redeemVoucher"; ?>" method="post">
                                                            <input type="hidden" name="voucherId" value="<?php echo $dlValue["voucherId"]; ?>">
                                                            <input type="hidden" name="orderPrimId" value="<?php echo $dlValue["orderPrimId"]; ?>">
                                                            <input type="hidden" name="voucherCode" value="<?php echo $dlValue["voucherId"]; ?>">
                                                            <input type="submit" name="usedVoucher" value="Use" class="btn btn-success" onclick="return confirm('Are you sure want to redeem this voucher?');">
                                                        </form>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                            $queryLoopNo++;
                                        }
                                        ?>

                                    </tfoot>
                                </table>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="DataTable_info" role="status" aria-live="polite">
                                            <?php 
                                            if(isset($showingPageEntries)){
                                                echo "Showing ".$showingPageEntries['resultStart']." to ".$showingPageEntries['resultEnd']." of ".$showingPageEntries['total']." entries";
                                            } ?></div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTable_paginate">
                                                <?php echo $page_links; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->

        <script type="text/javascript">
            (function ($) {
                "use strict";
                $(document).ready(function () {
                    $('#dataTableChangePerPage').change(function() {
                        $('#searchButton').click();
                    });
                });
            })(jQuery);
        </script>
      
        <section id="main-content">
            <section class="wrapper">
                <!-- page start-->

                <div class="row">
                  <div class="col-lg-12">
                      <ul class="breadcrumb">
                        <li><a href="<?php echo vendorUrl."dashboard"; ?>"><i class="fa fa-home"></i> Dashboard</a></li>
                        <li><a href="<?php echo vendorUrl."discounts/listDeals/1"; ?>">Deals</a></li>
                        <li>
                            <a href="<?php echo vendorUrl."discounts/listDeals/".$placementId; ?>">
                                <?php
                                if($placementId==1){
                                    echo "Deal of the Day";
                                }else if($placementId==2){
                                    echo "Koovi Special";
                                }else if($placementId==3){
                                    echo "Weekly";
                                }else if($placementId==4){
                                    echo "Monthly";
                                }
                                ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Deals
                            <span class="tools pull-right">
                                <a href="<?php echo vendorUrl; ?>discounts/addDeal/<?php echo $placementId; ?>" class="fa fa-plus-circle">&nbsp;Add New</a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <?php
                            $this->load->view("vendors/warning-msg");
                            ?>
                            <div class="adv-table">

                                <form action="<?php echo vendorUrl; ?>dashboard/formActionPaginationPage" method="post" name="dataTableSearchForm" id="dataTableSearchForm">
                                    <div class="row">
                                        <div class="col-sm-4 col-xs-3"><div class="dataTables_length" id="datatable-example_length">

                                            <label>
                                                <input type="hidden" name="currentUrl" value="<?php echo current_url(); ?>">
                                                <input type="hidden" name="baseUrl" value="<?php echo $baseUrl; ?>">
                                                <select name="perPage" aria-controls="datatable-example" class="form-control" id="dataTableChangePerPage">
                                                    <option value="10" <?php if($perPage==10) { echo "selected"; } ?>>10</option>
                                                    <option value="25" <?php if($perPage==25) { echo "selected"; } ?>>25</option>
                                                    <option value="50" <?php if($perPage==50) { echo "selected"; } ?>>50</option>
                                                    <option value="100" <?php if($perPage==100) { echo "selected"; } ?>>100</option>
                                                </select> <span class="hidden-xs">records per page</span></label>

                                            </div>
                                        </div>
                                        <div class="col-sm-8 col-xs-9">
                                            <div id="datatable-example_filter" class="dataTables_filter">
                                                <div class="form-inline">
                                                    <label>
                                                        <select name="sortField" class="form-control">
                                                            <option value="tb1.addedDateTime" <?php if($sortField=="tb1.addedDateTime"){ echo "selected"; } ?>>Added Date & Time</option>
                                                            <option value="tb1.startDateTime" <?php if($sortField=="tb1.startDateTime"){ echo "selected"; } ?>>Deal Date</option>
                                                            <option value="tb1.discPercentage" <?php if($sortField=="tb1.discPercentage"){ echo "selected"; } ?>>Discount %</option>
                                                            <option value="tb1.dealStatus" <?php if($sortField=="tb1.dealStatus"){ echo "selected"; } ?>>Deal Status</option>
                                                        </select>
                                                        <select name="sortOrder" class="form-control">
                                                            <option value="asc" <?php if($sortOrder=="asc"){ echo "selected"; } ?>>Ascending</option>
                                                            <option value="desc" <?php if($sortOrder=="desc"){ echo "selected"; } ?>>Descending</option>
                                                        </select>
                                                        <input type="search" class="form-control" placeholder="Enter text for search" aria-controls="datatable-example" name="searchTerm" value="<?php if(isset($searchTerm)){ echo $searchTerm; } ?>">
                                                        <button type="submit" class="btn btn-primary" name="search" id="searchButton">Search</button>
                                                        <button type="submit" class="btn btn-primary" name="reset">Reset</button>
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <table  class="display table table-bordered table-striped" id="dynamic-table">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Product Name</th>
                                            <th>Deal On/Expiry Date</th>
                                            <th>Business</th>
                                            <th>Discount</th>
                                            <th>Additional Info</th>
                                            <th>Payment Status</th>
                                            <th>Deal Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $queryLoopNo = ($pageNumber - 1) * $perPage + 1;
                                        foreach ($dataList["dataList"] as $dlKey => $dlValue) {
                                            ?>
                                            <tr class="gradeX">
                                                <td><?php echo $queryLoopNo; ?></td>
                                                <td><?php echo $dlValue['productName']; ?></td>
                                                <td class="center"><?php 
                                                echo "Starts at : ".date("d-M-Y H:i a",strtotime($dlValue["startDateTime"]))."<br>Ends at : ".date("d-M-Y H:i a",strtotime($dlValue["endDateTime"]));
                                                ?></td>
                                                <td>
                                                    <a href="<?php echo vendorUrl; ?>profile/manageBusiness/<?php echo $dlValue["businessId"]; ?>" target="_blank"><?php echo $dlValue["businessName"]; ?></a>
                                                    <br>Email : <?php echo $dlValue["contactPersonEmail"]; ?>
                                                    <br>Mobile : <?php echo $dlValue["contactPersonMobile"]; ?>
                                                </td>
                                                <td class="center"><?php if($dlValue["dealType"]=='perc'){
                                                    echo "<span class='badge'>".$dlValue["discPercentage"]." % </span>&nbsp;(".$dlValue["discFlatRate"]." Rs)";
                                                }else if($dlValue["dealType"]=='fixed'){
                                                    echo "<span class='badge'>".$dlValue["discFlatRate"]." Rs</span> (".$dlValue["discPercentage"]." %)";
                                                } ?></td>
                                                <td>
                                                    Coupon Count : <?php echo $dlValue["inStockQty"]."<br>"."Max Voucher : ".$dlValue["maxAllowedVoucher"]; ?>
                                                </td>
                                                <td><?php echo $dlValue["orderHtmlStatus"]["statusHtml"]; ?></td>
                                                <td><?php
                                                if(($dlValue["orderStatus"]=='1' || $dlValue["discountedFee"]==0) && $dlValue["dealStatus"]=='1'){
                                                    $currentDateTime=date("Y-m-d H:i");
                                                    if($dlValue["startDateTime"]<=$currentDateTime && $dlValue["endDateTime"]>=$currentDateTime){
                                                        echo "<span class='btn btn-success btn-xs'>Running</span>";
                                                    }
                                                    else if($dlValue["startDateTime"]>$currentDateTime){
                                                        echo "<span class='btn btn-warning btn-xs'>Upcoming</span>";
                                                    }else if($dlValue["endDateTime"]<$currentDateTime){
                                                        echo "<span class='btn btn-danger btn-xs'>Expired</span>";
                                                    }
                                                }else{
                                                    echo $dlValue["dealHtmlStatus"]["statusHtml"];
                                                }
                                                ?></td>
                                                <td>
                                                    <?php
                                                    $manageText=($dlValue["dealStatus"]==1) ? "View":"Manage";
                                                    ?>
                                                    <a href="<?php echo vendorUrl; ?>discounts/manageDeal/<?php echo $dlValue['primId']; ?>"><button type="button" class="btn btn-success btn-sm"><?php echo $manageText; ?></button></a>
                                                    <?php

                                                    if($dlValue["orderStatus"]!='1' && $dlValue["discountedFee"]!=0){
                                                        ?>
                                                        <a href="<?php echo vendorUrl."discounts/payNow/".$dlValue["primId"]; ?>" class="btn btn-warning btn-sm">Pay Now</a>
                                                        <?php
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                            $queryLoopNo++;
                                        }
                                        ?>

                                    </tfoot>
                                </table>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="dataTables_info" id="DataTable_info" role="status" aria-live="polite">
                                            <?php 
                                            if(isset($showingPageEntries)){
                                                echo "Showing ".$showingPageEntries['resultStart']." to ".$showingPageEntries['resultEnd']." of ".$showingPageEntries['total']." entries";
                                            } ?></div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="DataTable_paginate">
                                                <?php echo $page_links; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->
            </section>
        </section>
        <!--main content end-->

        <script type="text/javascript">
            (function ($) {
                "use strict";
                $(document).ready(function () {
                    $('#dataTableChangePerPage').change(function() {
                        $('#searchButton').click();
                    });
                });
            })(jQuery);
        </script>
       
    <?php
    if($method=="addDeal" || $method=="manageDeal"){
        ?>
        <script type="text/javascript" src="<?php echo base_url('assets/common/jquery.validate.min.js'); ?>">
        </script>
        <script type="text/javascript" src="<?php echo base_url('assets/common/additional-methods.min.js'); ?>">
        </script>
        <script type="text/javascript" src="<?php echo baseUrl; ?>assets/common/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo baseUrl; ?>assets/common/bootstrap-datepicker/css/datepicker.css">
        <script type="text/javascript" src="<?php echo baseUrl; ?>assets/common/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo baseUrl; ?>assets/common/bootstrap-timepicker/css/timepicker.css">

        <script type="text/javascript" src="<?php echo baseUrl; ?>assets/common/trumbowyg/trumbowyg.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo baseUrl; ?>assets/common/trumbowyg/ui/trumbowyg.min.css">

        <script type="text/javascript">
            $(document).ready(function(){
                var globalBaseUrl=$("#globalBaseUrl").val();
                var IMAGE_SIZE_LIMIT_10 = 10;
                var IMAGE_SIZE_LIMIT_2 = 2;
                var MB_TO_BYTE = 1048576;

                $('.startDatePicker, .endDatePicker, .couponValidityDate').datepicker({
                    format: 'dd-mm-yyyy', startDate: '+0d', endDate: '+365d',autoclose:true
                });

                    /*$('.startDatePicker').on('changeDate', function(event) {
                        $(".endDatePicker").val("");
                        $('.endDatePicker').datepicker({
                            format: 'dd-mm-yyyy', startDate: event.format(), endDate: '+365d',autoclose:true
                        });
                    });
                    $('.endDatePicker').datepicker({
                        format: 'dd-mm-yyyy', startDate: "+1d", endDate: '+365d',autoclose:true
                    });*/

                    $('.startTimePicker, .endTimePicker, .acceptTimePicker, .couponValidityTime').timepicker({
                        autoclose: true,
                        minuteStep: 15,
                        showSeconds: false,
                        showMeridian: false,
                        defaultTime:'value'
                    });

                    var addDealForm = $("#addDealForm").validate({
                        rules: {
                            businessId:{required:true},
                            productId:{required:true},
                            dealStartDate:{required:true},
                            dealStartTime:{required:true},
                            dealEndDate:{required:true},
                            dealEndTime:{required:true},
                            discPercentage:{required:true,number:true,min:1,max:100},
                            discFlatRate:{required:true,number:true},
                            reserveMePercentage:{required:true,number:true},
                            reserveMeFlatRate:{required:true,number:true},
                            measurementValue:{required:true,number:true},
                            measurementUnit:{required:true},
                            inStockQty:{required:true,number:true},
                            maxAllowedVoucher:{required:true,number:true},
                            voucherValidFromDate:{required:true},
                            voucherValidToDate:{required:true},
                            refundPolicy:{required:true},
                            voucherValidFor:{required:true,number:true},
                            standardFee:{required:true,number:true}
                        },
                        messages: {
                            businessId:{required:"Business required"},
                            productId:{required:"Product required"},
                            dealStartDate:{required:"Deal start date required"},
                            dealStartTime:{required:"Deal start time required"},
                            dealEndDate:{required:"Deal end date required"},
                            dealEndTime:{required:"Deal end time required"},
                            dealDate:{required:"Please select deal date"},
                            discPercentage:{required:"Discount percentage required"},
                            discFlatRate:{required:"Flat rate required"},
                            reserveMePercentage:{required:"Reserve me percentage required"},
                            reserveMeFlatRate:{required:"Reserve me flat rate required"},
                            measurementValue:{required:"Measurement value required"},
                            measurementUnit:{required:"Measurement unit required"},
                            maxAllowedVoucher:{required:"Enter maximum no. of vouchers user can buy"},
                            voucherValidFromDate:{required:"Coupon validity from date required"},
                            voucherValidToDate:{required:"Coupon validity to date required"},
                            refundPolicy:{required:"Refund policy required"},
                            voucherValidFor:{required:"Enter no. of days that voucher would be valid for"}
                        },
                        errorPlacement: function(error, element) {
                            error.appendTo(element.parent());
                        }
                    });

                    $('body').on('change','select[name="businessId"]',function(){
                      var postForm = {};
                      var currenctObject=$(this);
                      $.ajax({
                        url: globalBaseUrl + "utilitiesController/getUtilities/?utilityType=productsList&parentId=" + $(this).find('option:selected').val(),
                        type: "post",
                        data: postForm,
                        success: function (response) {
                            $("#productId").html(response);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                          console.log(textStatus, errorThrown);
                      }
                  });
                  });

                    $('body').on('change','select[name="productId"]',function(){
                      var productPrice=$(this).find("option:selected").attr("data-actual-price");
                      $("input[name='actualPrice']").val(productPrice);
                      //var maximumPrice=parseInt(productPrice-1);
                      $("input[name='discFlatRate']").attr("max",productPrice);
                      //$("input[name='cityId']").val($(this).find("option:selected").attr("data-city-id"));
                      //$("input[name='circleId']").val($(this).find("option:selected").attr("data-circle-id"));
                      calculateDealPricePerc();
                  });

                    $('body').on('keyup change','input[name="discPercentage"]',function(){
                      calculateDealPricePerc();
                  });

                    $('body').on('keyup change','input[name="discFlatRate"]',function(){
                      calculateDealPricePerc();
                  });

                    $('body').on('keyup change','input[name="reserveMeFlatRate"], input[name="reserveMePercentage"]',function(){
                      calculateReservePricePerc();
                  });

                    $('body').on('keyup change','input[name="standardFee"]',function(){
                        var currentFee=$(this).val();
                        var originalFee=$(this).attr("original-fee");
                        var discValue=(currentFee/originalFee)*100;
                        var flatDisc=parseInt(100 - discValue);
                        $("input[name='feeDiscount']").val(flatDisc);
                    });

                    $('body').on('keyup change','input[name="feeDiscount"]',function(){
                        var currentDisc=$(this).val(); 
                        var originalFee=$("input[name='standardFee']").attr("original-fee");
                        var discFee=(currentDisc/100)*originalFee;
                        var discFeeMinus=parseInt(originalFee - discFee);
                        $("input[name='standardFee']").val(discFeeMinus);
                    });

                    $('body').on('change','input[name="dealDiscountType"]',function(){
                      var dealDiscountType=$('input[name="dealDiscountType"]:checked').val();
                      if(dealDiscountType=='perc'){
                        $("input[name='discFlatRate']").attr("readonly",true);
                        $("input[name='discPercentage']").attr("readonly",false);

                        $("input[name='reserveMeFlatRate']").attr("readonly",true);
                        $("input[name='reserveMePercentage']").attr("readonly",false);
                    }else if(dealDiscountType=='fixed'){
                        $("input[name='discPercentage']").attr("readonly",true);
                        $("input[name='discFlatRate']").attr("readonly",false);

                        $("input[name='reserveMePercentage']").attr("readonly",true);
                        $("input[name='reserveMeFlatRate']").attr("readonly",false);
                    }
                });

                    $('body').on("click",".addNewHour",function(){
                        var currentItemCount=$(this).attr("data-items-count");
                        var maxAllowed=$(this).attr("data-maximum-allowed");
                        var newDay=$(this).attr("data-add-day");
                        var randNumber=Math.floor((Math.random() * 1000) + 1);
                        var timeDynamicHtml=$("#timeAdditionHtml").html();
                        currentItemCount = parseInt(currentItemCount) + 1;
                        if(currentItemCount<=maxAllowed){
                            $(this).prop('disabled', false);
                            timeDynamicHtml=timeDynamicHtml.split('Id01').join("Id"+parseInt(randNumber));
                            timeDynamicHtml=timeDynamicHtml.split('replaceDay').join(newDay);
                            timeDynamicHtml=timeDynamicHtml.split('replace').join(newDay);
                            $(this).parent().parent().parent().parent().find(".timingAddition").append(timeDynamicHtml);
                            $(this).attr("data-items-count",currentItemCount);
                        }else{
                            $(this).prop('disabled', true);
                        }

                        $('.acceptTimePicker').timepicker({
                            autoclose: true,
                            minuteStep: 15,
                            showSeconds: false,
                            showMeridian: false,
                            defaultTime:'value'
                        });
                    });

                    $('body').on("click",".removeHour",function(){
                        var currentItem=$(this);
                        var currentRemoveDay=currentItem.attr("data-add-day");
                        var currentItemCount=$(".addNewHour"+currentRemoveDay).attr("data-items-count");
                        var maxAllowed=$(".addNewHour"+currentRemoveDay).attr("data-maximum-allowed");
                        currentItemCount = parseInt(currentItemCount) - 1;
                        $(this).parent().parent().parent().remove();
                        if(currentItemCount<=maxAllowed){
                            $('.addNewHour'+currentRemoveDay).attr("data-items-count",currentItemCount);
                            $('.addNewHour'+currentRemoveDay).prop('disabled', false);
                        }else{
                            $('.addNewHour'+currentRemoveDay).prop('disabled', true);
                        }
                    });

                });

function toggleTime(day,value){
    if(value=='1'){
        $("."+day+"Timing").find(".timingDiv").fadeIn();
        $("."+day+"Timing").find(".timingAddition").fadeIn();
    }else{
        $("."+day+"Timing").find(".timingDiv").fadeOut();
        $("."+day+"Timing").find(".timingAddition").fadeOut();
    }
}

function calculateDealPricePerc(){
    var productPrice=$("select[name='productId']").find("option:selected").attr("data-actual-price");
    var productSelected=$("select[name='productId']").find("option:selected").val();
    var dealDiscountType=$('input[name="dealDiscountType"]:checked').val();
    if(productSelected!=''){
        if(dealDiscountType=='perc'){
            var discPercentage=$("input[name='discPercentage']").val();
            var discountedPrice=(discPercentage/100) * productPrice;
            var flatPrice=parseInt(productPrice - discountedPrice);
            $("input[name='discFlatRate']").val(flatPrice);
            $("input[name='reserveMeFlatRate']").val(flatPrice);
            
            $("input[name='reserveMeFlatRate']").attr("max",flatPrice);
            $("input[name='reserveMePercentage']").val(100);
        }else if(dealDiscountType=='fixed'){
            var discFlatRate=$("input[name='discFlatRate']").val();
            var discountedPercentage=(discFlatRate/productPrice) * 100;
            var discPercentage=parseInt(100-discountedPercentage);
            $("input[name='discPercentage']").val(discPercentage);
            $("input[name='reserveMePercentage']").val(100);
            $("input[name='reserveMeFlatRate']").val(discFlatRate);
            $("input[name='reserveMeFlatRate']").attr("max",discFlatRate);
        }
    }
}

function calculateReservePricePerc(){
    var productSelected=$("select[name='productId']").find("option:selected").val();
    var dealDiscountType=$('input[name="dealDiscountType"]:checked').val();
    var dealPrice=$("input[name='discFlatRate']").val();
    var discFlatRate=$("input[name='discFlatRate']").val();
    if(productSelected!='' && discFlatRate!=''){
        if(dealDiscountType=='perc'){
            var reserveMePercentage=$("input[name='reserveMePercentage']").val();
            var reserveMePrice=(reserveMePercentage/100) * dealPrice;

            $("input[name='reserveMeFlatRate']").val(reserveMePrice);
        }else if(dealDiscountType=='fixed'){
            var reserveMeFlatRate=$("input[name='reserveMeFlatRate']").val();
            var reserveMePercentage=(reserveMeFlatRate/dealPrice) * 100;

            $("input[name='reserveMePercentage']").val(reserveMePercentage);
        }
    }
}
</script>
<?php
}
?>