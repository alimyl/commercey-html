<div class="app-card mb-3 mb-lg-4">
    <div class="app-header-wrapper heading-sm mb-1">
        <p class="app-heading text-capitalize">
            Image
            <span class="st-fs-12 st-fw-400">(required)</span>
        </p>
    </div>
    <div class="app-card-content bg-white border st-border-light st-default-rounded-block pad-20-LR pad-20-T">
        <div class="xs-12 col-md-9 col-lg-6 px-0">
            <div class="img-uploader-container ">
                <div class="iuc-inner d-flex flex-wrap">
                    <input type="file" accept="image/png, image/gif, image/jpeg" hidden="" multiple="">
                    <label class="add-img cursor-pointer">
                        <span class="d-flex flex-column align-items-center justify-content-center h-100 w-100 inner">
                            <div class="icon-box d-flex align-items-center justify-content-center">
                                <i class="feather-plus icon st-text-primary position-relative"></i>
                            </div>
                            <p class="st-fs-13 st-fw-600 mt-2 st-text-primary">Upload Image</p>
                        </span>
                    </label>
                    <p class="desc w-100 st-fs-12 position-relative" style="top: -12px;">Recomended: 500 x 500 (W x H)</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="app-card mb-3 mb-lg-4">
    <div class="app-header-wrapper heading-sm mb-1">
        <p class="app-heading text-capitalize">Information</p>
    </div>
    <div class="app-card-content bg-white border st-border-light st-default-rounded-block pad-20-LR pad-20-T">
        <div class="xs-12 col-md-9 col-lg-6 px-0">
            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    Status
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <select class="form-control" name="rating">
                        <option disabled="" value="">Select Status</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    Name
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="Name" value="">
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    Ratings
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <select class="form-control" name="rating">
                        <option disabled="" value="">Select Ratings</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    Designation
                    <!-- <span class="required ms-1 st-fs-12">(required)</span> -->
                </label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="Designation" value="">
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap mb-1">
                <label>
                    Review
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <textarea type="text" class="form-control" rows="4" placeholder="Review" name="review"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>