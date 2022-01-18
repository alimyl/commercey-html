<!-- images -->
<div class="prods-selected-images">
    <div class="psi-inner d-flex flex-wrap">
        <label class="add-img cursor-pointer">
            <input type="file" accept="image/png, image/gif, image/jpeg" hidden="" multiple="">
            <span class="d-flex flex-column align-items-center justify-content-center h-100 w-100 inner">
                <div class="icon-box d-flex align-items-center justify-content-center">
                    <i class="feather-plus icon st-text-primary position-relative"></i>
                </div>
                <p class="st-fs-13 st-fw-600 mt-2 st-text-primary">Upload Image</p>
            </span>
        </label>

        <label class="test-img cursor-pointer">
            <span class="d-flex flex-column align-items-center justify-content-center h-100 w-100 inner">
                <div class="img-box d-flex align-items-center justify-content-center"></div>
                <p class="text st-fs-12 st-fw-600 mt-2">Main Image</p>
            </span>
        </label>

        <label class="test-img cursor-pointer">
            <span class="d-flex flex-column align-items-center justify-content-center h-100 w-100 inner">
                <div class="img-box d-flex align-items-center justify-content-center"></div>
                <p class="text st-fs-12 st-fw-600 mt-2">Different Angles</p>
            </span>
        </label>

        <label class="test-img cursor-pointer">
            <span class="d-flex flex-column align-items-center justify-content-center h-100 w-100 inner">
                <div class="img-box d-flex align-items-center justify-content-center"></div>
                <p class="text st-fs-12 st-fw-600 mt-2">Close-Up</p>
            </span>
        </label>
        <label class="test-img cursor-pointer">
            <span class="d-flex flex-column align-items-center justify-content-center h-100 w-100 inner">
                <div class="img-box d-flex align-items-center justify-content-center"></div>
                <p class="text st-fs-12 st-fw-600 mt-2">In Use</p>
            </span>
        </label>

        <label class="test-img cursor-pointer">
            <span class="d-flex flex-column align-items-center justify-content-center h-100 w-100 inner">
                <div class="img-box d-flex align-items-center justify-content-center"></div>
                <p class="text st-fs-12 st-fw-600 mt-2">Styles</p>
            </span>
        </label>
    </div>
</div>

<!-- border box -->
<div class="page-border-box2">
    <div class="pbb2-inner product-basic-info-column">
        <!-- form container -->
        <div class="d-flex flex-wrap inline-form-fields">
            <!-- form item -->
            <div class="st-form product-name-field media-body">
                <label>
                    Product Name
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <input type="text" class="form-control" placeholder="Product Name" id="productName" name="productName" value="">
            </div>

            <!-- form item -->
            <div class="st-form product-sku-field">
                <label>
                    SKU
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <input type="text" class="form-control" placeholder="SKU" id="SKU" name="SKU" value="">
            </div>
        </div>

        <!-- form container -->
        <div class="inline-form-fields">
            <!-- form item -->
            <div class="st-form product-description-field mb-0 ">
                <label>Description</label>
            </div>
        </div>
    </div>
</div>

<!-- border box -->
<div class="page-border-box2">
    <div class="pbb2-inner product-basic-info-column">
        <p class="box-heading st-fs-15 st-fw-600 st-text-color mb-2 normal-head">Categories</p>
        <p class="box-heading st-fs-15 st-fw-600 st-text-color mb-2 select-head" style="display: none;">Select Category to assing to this product</p>
        
        <!-- cats list -->
        <div class="prods-cat-content position-relative">
            <!-- btsn -->
            <div class="btns">
                <button class="st-btn st-btn-white-gray-outlined st-btn-sm d-flex align-items-center text-capitalize show-product-categories">
                    <span class="round-feather-icon-outlined hoverable d-inline-flex align-items-center justify-content-center me-2">
                        <i class="feather-plus icon cursor-pointer"></i>
                    </span>
                    <span>manage categories</span>
                </button>
            </div>

            <!-- content -->
            <div class="prods-cat-content-main position-relative" style="display: none;">
                <!-- form item -->
                <div class="always-focus form-sm mb-1 st-form">
                    <input type="text" class="form-control" placeholder="Search Category">
                </div>

                <!-- cats listing -->
                <div class="prods-cats-list position-absolute">
                    <!-- actual list -->
                    <div class="pcl-inner position-relative">
                        <!-- cat item -->
                        <div class="cat-item">
                            <div class="ci-inner">
                                <!-- label -->
                                <label class="st-checkbox st-checkbox-primary d-flex align-items-center cursor-pointer">
                                    <input type="checkbox" class="d-none all-checkboxes-selector-checkbox" checked="">
                                    <span class="text st-text-color st-fw-600 media-body pe-2">Category 1</span>
                                    <span class="box d-flex align-items-center justify-content-center border" style="height: 20px; width: 20px;">
                                        <i class="feather-check icon"></i>
                                    </span>
                                </label>

                                <!-- multilevel -->
                                <div class="multilevel-container">
                                    <!-- cat item -->
                                    <div class="cat-item">
                                        <div class="ci-inner">
                                            <!-- label -->
                                            <label class="st-checkbox st-checkbox-primary d-flex align-items-center cursor-pointer">
                                                <input type="checkbox" class="d-none all-checkboxes-selector-checkbox" checked="">
                                                <span class="text st-text-color st-fw-600 media-body pe-2">Sub item 1</span>
                                                <span class="box d-flex align-items-center justify-content-center border" style="height: 20px; width: 20px;">
                                                    <i class="feather-check icon"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- cat item -->
                                    <div class="cat-item">
                                        <div class="ci-inner">
                                            <!-- label -->
                                            <label class="st-checkbox st-checkbox-primary d-flex align-items-center cursor-pointer">
                                                <input type="checkbox" class="d-none all-checkboxes-selector-checkbox" checked="">
                                                <span class="text st-text-color st-fw-600 media-body pe-2">Sub item 2</span>
                                                <span class="box d-flex align-items-center justify-content-center border" style="height: 20px; width: 20px;">
                                                    <i class="feather-check icon"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <!-- cat item -->
                        <div class="cat-item">
                            <div class="ci-inner">
                                <!-- label -->
                                <label class="st-checkbox st-checkbox-primary d-flex align-items-center cursor-pointer">
                                    <input type="checkbox" class="d-none all-checkboxes-selector-checkbox" checked="">
                                    <span class="text st-text-color st-fw-600 media-body pe-2">Category 2</span>
                                    <span class="box d-flex align-items-center justify-content-center border" style="height: 20px; width: 20px;">
                                        <i class="feather-check icon"></i>
                                    </span>
                                </label>

                                <!-- multilevel -->
                                <div class="multilevel-container">
                                    <!-- cat item -->
                                    <div class="cat-item">
                                        <div class="ci-inner">
                                            <!-- label -->
                                            <label class="st-checkbox st-checkbox-primary d-flex align-items-center cursor-pointer">
                                                <input type="checkbox" class="d-none all-checkboxes-selector-checkbox" checked="">
                                                <span class="text st-text-color st-fw-600 media-body pe-2">Sub item 1</span>
                                                <span class="box d-flex align-items-center justify-content-center border" style="height: 20px; width: 20px;">
                                                    <i class="feather-check icon"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <!-- cat item -->
                                    <div class="cat-item">
                                        <div class="ci-inner">
                                            <!-- label -->
                                            <label class="st-checkbox st-checkbox-primary d-flex align-items-center cursor-pointer">
                                                <input type="checkbox" class="d-none all-checkboxes-selector-checkbox" checked="">
                                                <span class="text st-text-color st-fw-600 media-body pe-2">Sub item 2</span>
                                                <span class="box d-flex align-items-center justify-content-center border" style="height: 20px; width: 20px;">
                                                    <i class="feather-check icon"></i>
                                                </span>
                                            </label>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- btns -->
                    <div class="btns">
                        <button class="st-btn st-btn-gray st-btn-sm no-min-width hide-product-categories">
                            <span>Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- border box -->
<div class="page-border-box2">
    <div class="pbb2-inner">
        <p class="box-heading st-fs-15 st-fw-600 st-text-color mb-2">Dimensions</p>
        <div class="fields xs-12 col-md-10">
            <!-- form item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center ">
                <label>Weight</label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="Weight" id="weight" name="weight" value="">
                </div>
            </div>

            <!-- form item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center ">
                <label>Length</label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="Length" id="length" name="length" value="">
                </div>
            </div>

            <!-- form item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center ">
                <label>Width</label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="Width" id="width" name="width" value="">
                </div>
            </div>

            <!-- form item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap align-items-center ">
                <label>Height</label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="Height" id="height" name="height" value="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- border box -->
<div class="page-border-box2">
    <div class="pbb2-inner">
        <div class="d-flex align-items-center mb-2">
            <p class="box-heading st-fs-15 st-fw-600 st-text-color me-3">Feature on the store's front page</p>
            <label class="st-switch-input active-inactive-toggle d-inline-flex align-items-center mb-0">
                <input type="checkbox" class="d-none" id="isFeatured">
                <span class="round-outer">
                    <span class="round d-block"></span>
                </span>
                <span class="text ms-2 position-relative st-fs-13 st-fw-600 active">Enabled</span>
                <span class="text ms-2 position-relative st-fs-13 st-fw-600 inactive">Disabled</span>
            </label>
        </div>
        <p class="st-fs-13 st-text-color2">Product displayed as featured on the front page draw your customer's attention and help promote specific items.</p>
    </div>
</div>

<!-- border box -->
<div class="page-border-box2">
    <div class="pbb2-inner">
        <p class="box-heading st-fs-15 st-fw-600 st-text-color me-3 mb-2">
            <span class="st-text-primary me-2">Add or edit ribbon</span>
            <span class="round-feather-icon-with-bg hoverable d-inline-flex align-items-center justify-content-center">
                <i class="feather-plus icon cursor-pointer"></i>
            </span>
        </p>
        <p class="st-fs-13 st-text-color2">Place customized text labels line "New" or "Free Shipping" over the main product image to attract customers and bring in more sales.</p>
    </div>
</div>