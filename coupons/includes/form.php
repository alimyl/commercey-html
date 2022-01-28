<div class="app-card mb-3 mb-lg-4">
    <div class="app-header-wrapper heading-sm mb-1">
        <p class="app-heading text-capitalize">Basic Info</p>
    </div>
    <div class="app-card-content bg-white border st-border-light st-default-rounded-block pad-20-LR pad-20-T">
        <div class="xs-12 col-md-9 col-lg-6 px-0">
            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    Coupon Code
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="Coupons" value="">
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap coupons-discount-type">
                <label>
                    Discount Type
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <select class="form-control" id="discountType">
                        <option disabled>Select Discount Type</option>
                        <option value="value" selected>Value</option>
                        <option value="percent">Percent</option>
                    </select>
                </div>
            </div>
            <!-- hidden discount fields | value -->
            <div class="st-form ps-3 st-form-with-label-left no-arrows d-flex flex-wrap coupons-discount-type-value">
                <label>Value</label>
                <div class="media-body st-form-input-container">
                    <input type="number" class="form-control" placeholder="Value" id="couponDiscountValue"
                        name="couponDiscountValue">
                </div>
            </div>
            <!-- hidden discount fields | percent -->
            <div class="st-form ps-3 st-form-with-label-left no-arrows d-none flex-wrap coupons-discount-type-percent">
                <label>Percent</label>
                <div class="media-body st-form-input-container">
                    <input type="number" class="form-control" placeholder="Percent" id="couponDiscountPercent"
                        name="couponDiscountPercent">
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    Expiry Date
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="coupons-date-picker">
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    Category
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container text-start">
                    <select class="form-control coupons-category-select" name="category[]" multiple="multiple">
                        <option disabled="" value="">Select Category</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                    </select>
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    Brand
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <select class="form-control">
                        <option disabled="" value="">Select Brand</option>
                        <option value="1">Brand 1</option>
                        <option value="2">Brand 2</option>
                    </select>
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    Discount Percent
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <select class="form-control">
                        <option disabled="" value="">Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label class="pt-0">
                    Minimum Order Amount
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="Minimum Order Amount" value="">
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label class="d-flex align-items-center justify-content-end" style="padding-top: 2px;">
                    Auto Apply
                    <span class="info-icon cursor-pointer st-text-primary ms-2 position-relative st-fs-15"
                        style="top: 2px" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="The coupon will apply automatically when a user meets the requirements">
                        <i class="feather-info icon"></i>
                    </span>
                </label>
                <div class="media-body st-form-input-container text-start">
                    <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer position-relative"
                        style="top: 3px;">
                        <input type="checkbox" class="d-none" value="false">
                        <span class="box d-flex align-items-center justify-content-center border">
                            <i class="feather-check icon position-relative"></i>
                        </span>
                    </label>
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label style="padding-top: 2px;">
                    Free Shipping
                </label>
                <div class="media-body st-form-input-container text-start">
                    <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer position-relative"
                        style="top: 3px;">
                        <input type="checkbox" class="d-none" value="false">
                        <span class="box d-flex align-items-center justify-content-center border">
                            <i class="feather-check icon position-relative"></i>
                        </span>
                    </label>
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label style="padding-top: 2px;">
                    Single Use
                </label>
                <div class="media-body st-form-input-container text-start">
                    <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer position-relative"
                        style="top: 3px;">
                        <input type="checkbox" class="d-none" value="false">
                        <span class="box d-flex align-items-center justify-content-center border">
                            <i class="feather-check icon position-relative"></i>
                        </span>
                    </label>
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label style="padding-top: 2px;">
                    Single Use Per User
                </label>
                <div class="media-body st-form-input-container text-start">
                    <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer position-relative"
                        style="top: 3px;">
                        <input type="checkbox" class="d-none" value="false">
                        <span class="box d-flex align-items-center justify-content-center border">
                            <i class="feather-check icon position-relative"></i>
                        </span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>