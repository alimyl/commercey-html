<div class="app-card mb-3 mb-lg-4">
    <div class="app-header-wrapper heading-sm mb-1">
        <p class="app-heading text-capitalize">Customer Group Detail</p>
    </div>
    <div class="app-card-content bg-white border st-border-light st-default-rounded-block pad-20-LR pad-20-T">
        <div class="xs-12 col-md-9 col-lg-6 px-0">
            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center">
                <label>
                    Group Name
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="Group Name" id="group_name" name="group_name" value="">
                </div>
            </div>
            
            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center">
                <label>
                    Discount Percent
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <select class="form-control" id="discount_percent" name="discount_percent">
                        <option disabled="" value="">Select Discount Percent</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form no-arrows st-form-with-label-left d-flex flex-wrap align-items-center mb-1">
                <label>
                    Discount Value
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <input type="number" class="form-control" placeholder="Discount Value" id="discount_value" name="discount_value" value="">
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center">
                <label>
                    Discount Percent
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <select class="form-control" id="active" name="active">
                        <option disabled="" value="">Select Status</option>
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
            </div>


        </div>
    </div>
</div>