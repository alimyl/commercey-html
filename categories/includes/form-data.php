<div class="category-data-view media-body position-relative">
    <div class="inner border-start st-border-light">
        <!-- header wrapper -->
        <div class="app-header-wrapper heading-md mb-3">
            <p class="app-heading text-capitalize">
                <span>Create Category</span>
            </p>

            <p class="app-desc">
                Create a category for your products.
            </p>
        </div>

        <!-- form -->
        <div class="categories-form">
            <form>
                <!-- card -->
                <div class="app-card mb-3 mb-lg-4">
                    <div class="app-header-wrapper heading-sm mb-1">
                        <p class="app-heading text-capitalize">Basic Info</p>
                    </div>
                    <div class="app-card-content bg-white border st-border-light st-default-rounded-block pad-20-LR pad-20-T">
                        <div class="px-0 col-lg-8 col-md-9 col-12">
                            <!-- form-item -->
                            <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center">
                                <label>
                                    Category Name
                                    <span class="required ms-1 st-fs-12">(required)</span>
                                </label>
                                <div class="media-body st-form-input-container">
                                    <input type="text" class="form-control" placeholder="Category Name" value="">
                                </div>
                            </div>
                
                            <!-- form-item -->
                            <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center">
                                <label>
                                    Status
                                    <span class="required ms-1 st-fs-12">(required)</span>
                                </label>
                                <div class="media-body st-form-input-container">
                                    <select class="form-control">
                                        <option disabled="" value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card -->
                <div class="app-card mb-3 mb-lg-4">
                    <div class="app-header-wrapper heading-sm mb-1">
                        <p class="app-heading text-capitalize">
                            Image
                            <span class="st-fs-12 st-fw-400">(required)</span>
                        </p>
                    </div>
                    <div class="app-card-content bg-white border st-border-light st-default-rounded-block pad-20-LR pad-20-T">
                        <div class="px-0 col-lg-8 col-md-9 col-12">
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
                                    <!-- <p class="desc w-100 st-fs-12 position-relative" style="top: -12px;">Recomended: 500 x 500 (W x H)</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- card -->
                <div class="app-card mb-3 mb-lg-4">
                    <div class="app-header-wrapper heading-sm mb-1">
                        <p class="app-heading text-capitalize">
                            Description
                            <!-- <span class="st-fs-12 st-fw-400">(required)</span> -->
                        </p>
                    </div>
                    <div class="app-card-content bg-white border st-border-light st-default-rounded-block pad-20-LR pad-20-T">
                        <div class="px-0 col-lg-8 col-md-9 col-12">
                            
                        </div>
                    </div>
                </div>

                <!-- card -->
                <div class="app-card mb-3 mb-lg-4">
                    <div class="app-header-wrapper heading-sm mb-1">
                        <p class="app-heading text-capitalize">Search Engine Optimization</p>
                    </div>
                    <div class="app-card-content bg-white border st-border-light st-default-rounded-block pad-20-LR pad-20-T">
                        <div class="px-0 col-lg-8 col-md-9 col-12">
                            <!-- form-item -->
                            <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center">
                                <label>
                                    Meta Title
                                    <!-- <span class="required ms-1 st-fs-12">(required)</span> -->
                                </label>
                                <div class="media-body st-form-input-container">
                                    <input type="text" class="form-control" placeholder="Meta Title" value="">
                                </div>
                            </div>

                            <!-- form-item -->
                            <div class="st-form st-form-with-label-left d-flex flex-wrap mb-1">
                                <label>
                                    Meta Description
                                    <!-- <span class="required ms-1 st-fs-12">(required)</span> -->
                                </label>
                                <div class="media-body st-form-input-container">
                                    <textarea rows="3" placeholder="Meta Description" class="form-control"></textarea>
                                </div>
                            </div>

                            <!-- form-item -->
                            <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center">
                                <label>
                                    Meta Keywords
                                    <!-- <span class="required ms-1 st-fs-12">(required)</span> -->
                                </label>
                                <div class="media-body st-form-input-container">
                                    <input type="text" class="form-control" placeholder="Meta Keywords" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>