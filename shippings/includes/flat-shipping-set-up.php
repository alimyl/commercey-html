<div class="flat-shipping-set-up col-12 col-lg-9" style="display: none">
    <!-- border box-->
    <div class="page-border-box2 mb-3">
        <div class="pbb2-inner d-flex">
            <!-- all data -->
            <div class="all-data media-body me-3 me-lg-4">
                <!-- frac | name -->
                <div class="frac mb-3 mb-lg-4 shipping-setup-add-name">
                    <div class="frac-inner">
                        <!-- top sec -->
                        <div class="top-sec mb-2">
                            <p class="head st-fs-17 st-fw-600 mb-1">Shipping name at checkout</p>
                            <p class="desc">Enter the name under which customers see this shipping method at checkout.</p>
                        </div>

                        <!-- form container -->
                        <div class="form-container col-12 col-lg-5">
                            <div class="st-form mb-0">
                                <input type="text" class="form-control" placeholder="Shipping Name">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- frac | flat shipping rates -->
                <div class="frac mb-3 mb-lg-4 shipping-setup-flat-shipping-rates">
                    <div class="frac-inner">
                        <!-- top sec -->
                        <div class="top-sec mb-2">
                            <p class="head st-fs-17 st-fw-600 mb-1">Shipping rates</p>
                            <p class="desc">Please enter the shipping cost as either a flat amount or flat percentage of the total price.</p>
                        </div>

                        <!-- form container -->
                        <div class="form-container mt-2 col-12 col-lg-8">
                            <div class="inner d-flex align-items-center">
                                <!-- form item -->
                                <div class="st-form mb-0 lt">
                                    <div class="media-body st-form-input-container">
                                        <select class="form-control" id="amount_type" name="amount_type">
                                            <option value="" disabled="">Select Type</option>
                                            <option value="flat">Flat</option>
                                            <option value="percentage">Percentage</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- form item | for flat rate -->
                                <div class="st-form-with-add-label rt mb-0 for-flat-rate">
                                    <div class="content-main d-flex ">
                                        <div class="add-label">$</div>
                                        <input type="number" class="media-body" placeholder="Amount" id="amount" name="amount" value="">
                                    </div>
                                </div>

                                <!-- form item | for percentages -->
                                <div class="st-form-with-add-label rt mb-0 label-right for-percentages" style="display: none;">
                                    <div class="content-main d-flex ">
                                        <div class="add-label">%</div>
                                        <input type="number" class="media-body" placeholder="Percent" id="amount" name="amount" value="">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- frac | add description -->
                <div class="frac mb-3 mb-lg-4 shipping-setup-add-description">
                    <div class="frac-inner">
                        <!-- top sec -->
                        <div class="top-sec">
                            <p class="head st-fs-15 st-fw-600 mb-2 d-inline-flex align-items-center cursor-pointer text-primary">
                                <span class="me-1">Add description for customers‍</span>
                                <i class="feather-chevron-right st-fw-600 position-relative"></i>
                            </p>
                            <p class="desc">What should customers know when choosing this shipping method for their order? Specify the time it usually takes for orders to arrive, the way in which the shipment will be handed over to the buyer, or anything else you feel is important for customers to know about this shipping option. This information will be displayed at checkout.</p>
                        </div>

                        <!-- form container -->
                        <div class="form-container mt-2 col-12 col-lg-6" style="display: none;">
                            <div class="st-form mb-0">
                                <input type="text" class="form-control" placeholder="Description For Customer">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- frac | limit availability -->
                <div class="frac mb-3 mb-lg-4 shipping-setup-limit-availability">
                    <div class="frac-inner">
                        <!-- top sec -->
                        <div class="top-sec">
                            <p class="head st-fs-15 st-fw-600 mb-2 d-inline-flex align-items-center cursor-pointer text-primary">
                                <span class="me-1">Limit availability by order subtotal‍</span>
                                <i class="feather-chevron-right st-fw-600 position-relative"></i>
                            </p>
                            <p class="desc">Set a minimum subtotal to allow this method only for orders above a specific amount.</p>
                        </div>

                        <!-- form container -->
                        <div class="form-container mt-2 col-12 col-lg-6" style="display: none;">
                            <div class="st-form-with-add-label mb-0">
                                <div class="content-main d-flex">
                                    <div class="add-label">$</div>
                                    <input type="number" class="media-body" placeholder="Minimum order subtotal" value="0.00">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- frac | estimated delivery date -->
                <div class="frac mb-3 mb-lg-4 shipping-setup-estimated-delivery-date">
                    <div class="frac-inner">
                        <!-- top sec -->
                        <div class="top-sec">
                            <p class="head st-fs-15 st-fw-600 mb-2 d-inline-flex align-items-center text-primary">
                                <span class="me-2">Show estimated delivery date at checkout</span>
                                <label class="st-switch-input-xs st-switch-success active-inactive-toggle d-inline-flex align-items-center mb-0">
                                    <input type="checkbox" class="d-none" id="shouldDeliveryDate">
                                    <span class="round-outer">
                                        <span class="round d-block"></span>
                                    </span>
                                    <span class="text ms-2 position-relative st-fs-13 st-fw-600 active" style="display: none;">Enabled</span>
                                    <span class="text ms-2 position-relative st-fs-13 st-fw-600 inactive">Disabled</span>
                                </label>
                            </p>
                            <p class="desc">Turn this on to display the estimated delivery date next to delivery options at checkout. A clearly stated delivery date lets customers understand when they can expect to receive their order, resulting in a higher number of successful sales.</p>
                        </div>

                        <!-- form container -->
                        <div class="form-container col-12 col-lg-6 mt-2" style="display: none;">
                            <!-- form item | estimated transit time -->
                            <div class="form-item mb-2 mb-lg-3 shipping-setup-estimated-transit-time">
                                <div class="form-item-inner">
                                    <!-- top sec -->
                                    <div class="top-sec mb-2">
                                        <p class="head st-fs-15 st-fw-600 mb-2 d-inline-flex align-items-center st-text-dark">
                                            <span class="me-1">Estimated transit time</span>
                                        </p>
                                        <p class="desc">Specify how long it usually takes for the package to be delivered at the shipping address after being handed in to the shipping company.</p>
                                    </div>

                                    <div class="d-flex form-container mb-0">
                                        <!-- input -->
                                        <div class="st-form-with-add-label label-right media-body mb-0">
                                           <div class="content-main d-flex ">
                                              <div class="add-label">days</div>
                                              <input type="number" class="media-body" value="">
                                           </div>
                                        </div>

                                        <!-- seprator -->
                                        <div class="mx-2 mt-2">–</div>

                                        <!-- input -->
                                        <div class="st-form-with-add-label label-right media-body mb-0   ">
                                           <div class="content-main d-flex ">
                                              <div class="add-label">days</div>
                                              <input type="number" class="media-body" value="">
                                           </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- form item | order preparation time -->
                            <div class="form-item mb-2 mb-lg-3 shipping-setup-order-preparation-time">
                                <div class="form-item-inner">
                                    <!-- top sec -->
                                    <div class="top-sec mb-2">
                                        <p class="head st-fs-15 st-fw-600 mb-2 d-inline-flex align-items-center st-text-dark">
                                            <span class="me-1">Order preparation time</span>
                                        </p>
                                        <p class="desc">Specify how many days it usually takes you to prepare an order for shipment.That time will be taken into account when calculating the delivery date for customers.</p>
                                    </div>

                                    <div class="form-container mb-0">
                                        <div class="st-form st-form-with-label-right d-flex mb-0 flex-wrap align-items-center ">
                                            <div class="media-body st-form-input-container">
                                               <select class="form-control" id="order_preparation_time" name="order_preparation_time">
                                                  <option value="" disabled="">Select Time</option>
                                                  <option value="1">1 day</option>
                                                  <option value="2">2 days</option>
                                                  <option value="3">3 days</option>
                                                  <option value="4">specify custom time frame</option>
                                               </select>
                                            </div>
                                        </div>

                                        <!-- custom time -->
                                        <div class="shipping-setup-custom-time mt-2" style="display: none;">
                                            <!-- top sec -->
                                            <div class="top-sec mb-1">
                                                <p class="head st-fs-15 st-fw-600 d-inline-flex align-items-center st-text-dark">
                                                    <span class="me-1">Custom time frame</span>
                                                </p>
                                            </div>

                                            <!-- bottom sec -->
                                            <div class="d-flex form-container mb-0">
                                                <!-- input -->
                                                <div class="st-form-with-add-label label-right media-body mb-0">
                                                   <div class="content-main d-flex ">
                                                      <div class="add-label">days</div>
                                                      <input type="number" class="media-body" value="">
                                                   </div>
                                                </div>
        
                                                <!-- seprator -->
                                                <div class="mx-2 mt-2">–</div>
        
                                                <!-- input -->
                                                <div class="st-form-with-add-label label-right media-body mb-0">
                                                   <div class="content-main d-flex">
                                                      <div class="add-label">days</div>
                                                      <input type="number" class="media-body" value="">
                                                   </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- form item | order packing days -->
                            <div class="form-item mb-2 mb-lg-3 shipping-setup-order-packing-days">
                                <div class="form-item-inner">
                                    <!-- top sec -->
                                    <div class="top-sec mb-2">
                                        <p class="head st-fs-15 st-fw-600 mb-2 d-inline-flex align-items-center st-text-dark">
                                            <span class="me-1">Days when you pack orders</span>
                                        </p>
                                        <p class="desc">Specify days of the week when you pack orders for shipment.Your schedule will be taken into account when calculating the delivery date for customers.</p>
                                    </div>

                                    <div class="form-container mb-0">
                                        <div class="st-form st-form-with-label-right mb-0 d-flex flex-wrap align-items-center ">
                                            <div class="media-body st-form-input-container">
                                               <select class="form-control" name="days_when_you_pack_orders_" id="days_when_you_pack_orders_">
                                                  <option value="" disabled="">Select Days</option>
                                                  <option value="1">Monday-Friday</option>
                                                  <option value="2">Monday-Saturday</option>
                                                  <option value="3">Every day including weekends</option>
                                                  <option value="4">Specific days</option>
                                               </select>
                                            </div>
                                        </div>

                                        <!-- custom days -->
                                        <div class="shipping-setup-custom-days mt-2" style="display: none;">
                                            <div class="inner d-flex flex-wrap">
                                                <!-- check -->
                                                <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center mb-1 me-2">
                                                    <div class="media-body" style="text-align: left;">
                                                        <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer position-relative " style="top: 2px;">
                                                            <input name="monday" type="checkbox" class="d-none" value="">
                                                            <span class="box d-flex align-items-center justify-content-center border">
                                                                <i class="feather-check icon position-relative"></i>
                                                            </span>
                                                            <span class="cursor-pointer ms-2 mb-0" style="margin-top: 2px;">Monday</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <!-- check -->
                                                <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center mb-1 me-2">
                                                    <div class="media-body" style="text-align: left;">
                                                        <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer position-relative " style="top: 2px;">
                                                            <input name="tuesday" type="checkbox" class="d-none" value="">
                                                            <span class="box d-flex align-items-center justify-content-center border">
                                                                <i class="feather-check icon position-relative"></i>
                                                            </span>
                                                            <span class="cursor-pointer ms-2 mb-0" style="margin-top: 2px;">Tuesday</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <!-- check -->
                                                <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center mb-1 me-2">
                                                    <div class="media-body" style="text-align: left;">
                                                        <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer position-relative " style="top: 2px;">
                                                            <input name="thursday" type="checkbox" class="d-none" value="">
                                                            <span class="box d-flex align-items-center justify-content-center border">
                                                                <i class="feather-check icon position-relative"></i>
                                                            </span>
                                                            <span class="cursor-pointer ms-2 mb-0" style="margin-top: 2px;">Thursday</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <!-- check -->
                                                <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center mb-1 me-2">
                                                    <div class="media-body" style="text-align: left;">
                                                        <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer position-relative " style="top: 2px;">
                                                            <input name="friday" type="checkbox" class="d-none" value="">
                                                            <span class="box d-flex align-items-center justify-content-center border">
                                                                <i class="feather-check icon position-relative"></i>
                                                            </span>
                                                            <span class="cursor-pointer ms-2 mb-0" style="margin-top: 2px;">Friday</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <!-- check -->
                                                <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center mb-1 me-2">
                                                    <div class="media-body" style="text-align: left;">
                                                        <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer position-relative " style="top: 2px;">
                                                            <input name="saturday" type="checkbox" class="d-none" value="">
                                                            <span class="box d-flex align-items-center justify-content-center border">
                                                                <i class="feather-check icon position-relative"></i>
                                                            </span>
                                                            <span class="cursor-pointer ms-2 mb-0" style="margin-top: 2px;">Saturday</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <!-- check -->
                                                <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center mb-1 me-2">
                                                    <div class="media-body" style="text-align: left;">
                                                        <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer position-relative " style="top: 2px;">
                                                            <input name="sunday" type="checkbox" class="d-none" value="">
                                                            <span class="box d-flex align-items-center justify-content-center border">
                                                                <i class="feather-check icon position-relative"></i>
                                                            </span>
                                                            <span class="cursor-pointer ms-2 mb-0" style="margin-top: 2px;">Sunday</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <!-- check -->
                                                <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center mb-1 me-2">
                                                    <div class="media-body" style="text-align: left;">
                                                        <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer position-relative " style="top: 2px;">
                                                            <input name="wednesday" type="checkbox" class="d-none" value="">
                                                            <span class="box d-flex align-items-center justify-content-center border">
                                                                <i class="feather-check icon position-relative"></i>
                                                            </span>
                                                            <span class="cursor-pointer ms-2 mb-0" style="margin-top: 2px;">Wednesday</span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- form item | orders packing time -->
                            <div class="form-item mb-2 mb-lg-3 shipping-setup-orders-packing-time">
                                <div class="form-item-inner">
                                    <!-- top sec -->
                                    <div class="top-sec mb-2">
                                        <p class="head st-fs-15 st-fw-600 mb-2 d-inline-flex align-items-center st-text-dark">
                                            <span class="me-1">I pack orders received past this time on the next day:</span>
                                        </p>
                                        <p class="desc">Specify how many days it usually takes you to prepare an order for shipment.That time will be taken into account when calculating the delivery date for customers.</p>
                                    </div>

                                    <div class="form-container mb-0">
                                        <div class="st-form st-form-with-label-right d-flex flex-wrap mb-0 align-items-center ">
                                            <div class="media-body st-form-input-container">
                                                <select class="form-control" name="orders_received_past_this_time_on_the_next_day" id="orders_received_past_this_time_on_the_next_day">
                                                    <option value="" disabled="">Select Hours</option>
                                                    <option value="8">8: 00</option>
                                                    <option value="9">9: 00</option>
                                                    <option value="10">10: 00</option>
                                                    <option value="11">11: 00</option>
                                                    <option value="12">12: 00</option>
                                                    <option value="13">13: 00</option>
                                                    <option value="14">14: 00</option>
                                                    <option value="15">15: 00</option>
                                                    <option value="16">16: 00</option>
                                                    <option value="17">17: 00</option>
                                                    <option value="18">18: 00</option>
                                                    <option value="19">19: 00</option>
                                                    <option value="20">20: 00</option>
                                                    <option value="21">21: 00</option>
                                                    <option value="22">22: 00</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- frac | shipping region -->
                <div class="frac shipping-setup-shipping-region">
                    <div class="frac-inner">
                        <!-- top sec -->
                        <div class="top-sec">
                            <p class="head st-fs-15 st-fw-600 mb-2 d-inline-flex align-items-center cursor-pointer text-primary">
                                <span class="me-1">Set shipping region</span>
                                <i class="feather-chevron-right st-fw-600 position-relative"></i>
                            </p>
                            <p class="desc">Specify the destination that you ship to with this method. If shipping rates should differ depending on the customer’s address, create a new shipping method and assign it to the corresponding destination zone.</p>
                        </div>

                        <!-- form container -->
                        <div class="form-container col-12 col-lg-6 mt-1" style="display: none;">
                            <!-- label -->
                            <label class="d-inline-flex align-items-baseline flex-column cursor-pointer mb-2">
                                <span class="st-fw-600 st-fs-15 d-block">
                                    <input type="radio" class="custom-radio me-2" name="shipping_region" id="shipping_region_all-destinatins" value="All" checked="">
                                    <span>All destinations</span>
                                </span>
                                <span style="padding-left: 31px;">Select this option if you ship worldwide with this method.</span>
                            </label>

                            <!-- label -->
                            <label class="d-inline-flex align-items-baseline flex-column cursor-pointer">
                                <span class="st-fw-600 st-fs-15 d-block">
                                    <input type="radio" class="custom-radio me-2" name="shipping_region" id="shipping_region_advanced-settings" value="All">
                                    <span>Advanced settings</span>
                                </span>
                                <span style="padding-left: 31px;">Set delivery zone by country, ZIP/postal code range, or state if you deliver to specific regions.</span>
                            </label>

                            <!-- select country -->
                            <div class="shipping-setup-select-country mt-1" style="padding-left: 31px; display: none;">
                                <div class="st-form mb-0">
                                    <label>
                                        Country
                                        <span class="required ms-1 st-fs-12">(required)</span>
                                    </label>
                                    <div class="media-body st-form-input-container">
                                        <select class="form-control" name="shipping_region">
                                            <option value="" disabled="">Select Country</option>
                                            <option value="United States">United States</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>




            </div>

            <div class="icon">
                <img src="../images/icons/payment-method-3.svg" alt="" class="img-fluid" height="54" width="54">
            </div>
        </div>
    </div>
</div>