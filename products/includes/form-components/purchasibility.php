<div class="main-content" data-id="#purchasability_tab" style="display: none;">
    <!-- border box -->
    <div class="page-border-box2 purchasability-wrapper">
        <div class="pbb2-inner">
            <p class="box-heading st-fs-18 st-fw-600 st-text-color mb-2">Purchasability</p>
            <!-- shipping rates -->
            <div class="shipping-rates-form-items">
                <!-- label -->
                <label class="st-custom-radio d-inline-flex mb-3">
                    <input type="radio" class="d-none" name="purchasabilityStatus" id="purchasability-option-1" value="1" checked>
                    <span class="round mt-0">
                        <span class="inner"></span>
                    </span>
                    <span class="text media-body st-text-dark">
                        <span class="head d-block">This product can be purchased in my online store</span>
                    </span>
                </label> <br />

                <!-- label -->
                <label class="st-custom-radio d-inline-flex mb-3">
                    <input type="radio" class="d-none" name="purchasabilityStatus" id="purchasability-option-2" value="2">
                    <span class="round mt-0">
                        <span class="inner"></span>
                    </span>
                    <span class="text media-body st-text-dark">
                        <span class="head d-block">This product cannot be purchased in my online store</span>
                    </span>
                </label> <br />

                <!-- can be purchased -->
                <div class="pre-order-form purchasability-option-can-be-purchased position-relative d-none" style="top: -5px;">
                    <!-- toggle -->
                    <div class="mb-2">
                        <p class="mb-1 st-text-color">Show message instead of the price</p>
                        <label class="st-switch-input active-inactive-toggle d-inline-flex align-items-center mb-0">
                            <input type="checkbox" class="d-none" id="purchasability-toggle-message">
                            <span class="round-outer">
                                <span class="round d-block"></span>
                            </span>
                            <span class="text ms-2 position-relative st-fs-13 st-fw-600 active">Disabled</span>
                            <span class="text ms-2 position-relative st-fs-13 st-fw-600 inactive">Disabled</span>
                        </label>
                    </div>

                    <!-- form -->
                    <div class="st-form d-none mb-2 purchasability-message-form">
                        <label>Message</label>
                        <input type="text" class="form-control" placeholder="Message" id="purchasabilityCallForLabel" name="purchasabilityCallForLabel">
                    </div>
                </div>

                <!-- label -->
                <label class="st-custom-radio d-inline-flex">
                    <input type="radio" class="d-none" name="purchasabilityStatus" id="purchasability-option-3" value="3">
                    <span class="round mt-0">
                        <span class="inner"></span>
                    </span>
                    <span class="text media-body st-text-dark">
                        <span class="head d-block">This product is coming soon but I want to take pre-orders</span>
                    </span>
                </label>

                <!-- coming soon -->
                <div class="pre-order-form purchasability-option-coming-soon d-none flex-wrap">
                    <!-- form item -->
                    <div class="st-form lt">
                        <label>Message</label>
                        <input type="text" class="form-control" placeholder="Message" id="purchasabilityPreOrderMessage" name="purchasabilityPreOrderMessage" value="">
                        <!-- <div class="st-form-msg position-absolute">
                            <p class="st-fs-12">This field is required</p>
                        </div> -->
                    </div>

                    <!-- form item -->
                    <div class="st-form rt">
                        <label>Release Date</label>
                        <input type="text" class="form-control" placeholder="Expiry Date" id="purchasabilityPreOrderDate" name="purchasabilityPreOrderDate" value="">
                        <!-- <div class="st-form-msg position-absolute">
                            <p class="st-fs-12">This field is required</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>