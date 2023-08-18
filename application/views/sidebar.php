<?php
$className = $this->router->fetch_class();
$methodName = $this->router->fetch_method();
?>
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="<?php echo vendorUrl; ?>dashboard">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="#" class="<?php if (in_array($className, array("profile"))) {
                                            echo "active";
                                        } ?>"><i class="fa fa-user"></i>Profile</a>
                    <ul class="sub">
                        <li><a href="<?php echo vendorUrl; ?>profile/basic"><i class="fa fa-home"></i> Basic</a></li>
                    </ul>
                </li> -->

                <li class="sub-menu">
                    <a href="<?php echo vendorUrl; ?>profile/basic">
                    <i class="fa fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="<?php echo vendorUrl; ?>business/listBusiness">
                    <i class="fa fa-building-o"></i>
                        <span>Business</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="<?php echo vendorUrl; ?>products/listProducts">
                        <i class="fa fa-users"></i>
                        <span>Product</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="<?php echo vendorUrl; ?>sellables/listOrders">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Orders</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="<?php echo vendorUrl; ?>business/deliveryPartnerRequestStatus">
                        <i class="fa fa-users"></i>
                        <span>Delivery Partner Request</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="<?php echo vendorUrl; ?>themes">
                        <i class="fa fa-cog"></i>
                        <span>Edit Theme</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="#" class="<?php if (in_array($className, array("discounts", "advertisements"))) {
                                            echo "active";
                                        } ?>"><i class="fa fa-dashboard"></i>Themes</a>
                    <ul class="sub">
                        <li><a href="<?php echo vendorUrl; ?>advertisements/listAds"><i class="fa fa-building-o"></i>Branding Themes</a></li>
                        <li><a href="<?php echo vendorUrl; ?>discounts/listSales"><i class="fa fa-money"></i>Ecommerce Themes</a>
                        </li>
                    </ul>
                </li> -->


                <!-- <li>
                    <a href="#" class="<?php if (in_array($className, array("sellables", "products"))) {
                                            echo "active";
                                        } ?>"><i class="fa fa-user"></i>Products</a>
                    <ul class="sub">
                    <li><a href="<?php echo vendorUrl; ?>products/listProducts"><i class="fa fa-home"></i> Deals
                                Products</a></li>
                        <li><a href="<?php echo vendorUrl; ?>sellables/listProducts"><i class="fa fa-home"></i> Sellable
                                Products</a></li>
                        <li><a href="<?php echo vendorUrl; ?>sellables/listOrders"><i
                                    class="fa fa-shopping-cart"></i>Orders</a></li>
                    </ul>
                </li>  -->

                <!-- <li>
                    <a href="#" class="<?php if (in_array($className, array("discounts", "advertisements"))) {
                                            echo "active";
                                        } ?>"><i class="fa fa-shopping-cart"></i>Services</a>
                    <ul class="sub">
                        <li><a href="<?php echo vendorUrl; ?>products/listProducts"><i class="fa fa-shopping-cart"></i>
                                Manage Services</a></li>
                        <li><a href="<?php echo vendorUrl; ?>discounts/listDeals"><i class="fa fa-tag"></i>Deals</a>
                        </li>
                        <li><a href="<?php echo vendorUrl; ?>advertisements/listAds"><i class="fa fa-building-o"></i>Ads</a></li>
                        <li><a href="<?php echo vendorUrl; ?>discounts/listSales"><i class="fa fa-money"></i>Sales</a>
                        </li>
                        <li><a href="<?php echo vendorUrl; ?>discounts/listVouchers"><i class="fa fa-gift"></i>Vouchers</a></li>
                    </ul>
                </li> -->





            </ul>
        </div>

    </div>
</aside>