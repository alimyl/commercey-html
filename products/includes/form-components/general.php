<div class="main-content" data-id="#general_tab" style="display: none;">
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
                    <input type="text" class="form-control" placeholder="Product Name" id="productName"
                        name="productName" value="">
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
                    <div class="app-editor-container">
                        <div id="app-editor"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- border box -->
    <div class="page-border-box2">
        <div class="pbb2-inner product-basic-info-column">
            <p class="box-heading st-fs-15 st-fw-600 st-text-color mb-2 normal-head">Categories</p>
            <p class="box-heading st-fs-15 st-fw-600 st-text-color mb-2 select-head" style="display: none;">Select
                Category to assing to this product</p>

            <!-- cats list -->
            <div class="prods-cat-content position-relative">
                <!-- btsn -->
                <div class="btns">
                    <button
                        class="st-btn st-btn-white-gray-outlined st-btn-sm d-flex align-items-center text-capitalize show-product-categories">
                        <span
                            class="round-feather-icon-outlined hoverable d-inline-flex align-items-center justify-content-center me-2">
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
                                    <label
                                        class="st-checkbox st-checkbox-primary d-flex align-items-center cursor-pointer">
                                        <input type="checkbox" class="d-none all-checkboxes-selector-checkbox"
                                            checked="">
                                        <span class="text st-text-color st-fw-600 media-body pe-2">Category 1</span>
                                        <span class="box d-flex align-items-center justify-content-center border"
                                            style="height: 20px; width: 20px;">
                                            <i class="feather-check icon"></i>
                                        </span>
                                    </label>

                                    <!-- multilevel -->
                                    <div class="multilevel-container">
                                        <!-- cat item -->
                                        <div class="cat-item">
                                            <div class="ci-inner">
                                                <!-- label -->
                                                <label
                                                    class="st-checkbox st-checkbox-primary d-flex align-items-center cursor-pointer">
                                                    <input type="checkbox"
                                                        class="d-none all-checkboxes-selector-checkbox" checked="">
                                                    <span class="text st-text-color st-fw-600 media-body pe-2">Sub item
                                                        1</span>
                                                    <span
                                                        class="box d-flex align-items-center justify-content-center border"
                                                        style="height: 20px; width: 20px;">
                                                        <i class="feather-check icon"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <!-- cat item -->
                                        <div class="cat-item">
                                            <div class="ci-inner">
                                                <!-- label -->
                                                <label
                                                    class="st-checkbox st-checkbox-primary d-flex align-items-center cursor-pointer">
                                                    <input type="checkbox"
                                                        class="d-none all-checkboxes-selector-checkbox" checked="">
                                                    <span class="text st-text-color st-fw-600 media-body pe-2">Sub item
                                                        2</span>
                                                    <span
                                                        class="box d-flex align-items-center justify-content-center border"
                                                        style="height: 20px; width: 20px;">
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
                                    <label
                                        class="st-checkbox st-checkbox-primary d-flex align-items-center cursor-pointer">
                                        <input type="checkbox" class="d-none all-checkboxes-selector-checkbox"
                                            checked="">
                                        <span class="text st-text-color st-fw-600 media-body pe-2">Category 2</span>
                                        <span class="box d-flex align-items-center justify-content-center border"
                                            style="height: 20px; width: 20px;">
                                            <i class="feather-check icon"></i>
                                        </span>
                                    </label>

                                    <!-- multilevel -->
                                    <div class="multilevel-container">
                                        <!-- cat item -->
                                        <div class="cat-item">
                                            <div class="ci-inner">
                                                <!-- label -->
                                                <label
                                                    class="st-checkbox st-checkbox-primary d-flex align-items-center cursor-pointer">
                                                    <input type="checkbox"
                                                        class="d-none all-checkboxes-selector-checkbox" checked="">
                                                    <span class="text st-text-color st-fw-600 media-body pe-2">Sub item
                                                        1</span>
                                                    <span
                                                        class="box d-flex align-items-center justify-content-center border"
                                                        style="height: 20px; width: 20px;">
                                                        <i class="feather-check icon"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>

                                        <!-- cat item -->
                                        <div class="cat-item">
                                            <div class="ci-inner">
                                                <!-- label -->
                                                <label
                                                    class="st-checkbox st-checkbox-primary d-flex align-items-center cursor-pointer">
                                                    <input type="checkbox"
                                                        class="d-none all-checkboxes-selector-checkbox" checked="">
                                                    <span class="text st-text-color st-fw-600 media-body pe-2">Sub item
                                                        2</span>
                                                    <span
                                                        class="box d-flex align-items-center justify-content-center border"
                                                        style="height: 20px; width: 20px;">
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
                <div class="st-form st-form-with-label-left d-flex flex-wrap ">
                    <label>Weight</label>
                    <div class="media-body st-form-input-container">
                        <input type="text" class="form-control" placeholder="Weight" id="weight" name="weight" value="">
                    </div>
                </div>

                <!-- form item -->
                <div class="st-form st-form-with-label-left d-flex flex-wrap ">
                    <label>Length</label>
                    <div class="media-body st-form-input-container">
                        <input type="text" class="form-control" placeholder="Length" id="length" name="length" value="">
                    </div>
                </div>

                <!-- form item -->
                <div class="st-form st-form-with-label-left d-flex flex-wrap ">
                    <label>Width</label>
                    <div class="media-body st-form-input-container">
                        <input type="text" class="form-control" placeholder="Width" id="width" name="width" value="">
                    </div>
                </div>

                <!-- form item -->
                <div class="st-form st-form-with-label-left d-flex flex-wrap ">
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
            <p class="st-fs-13 st-text-color2">Product displayed as featured on the front page draw your customer's
                attention and help promote specific items.</p>
        </div>
    </div>

    <!-- border box -->
    <div class="page-border-box2">
        <div class="pbb2-inner">
            <p class="box-heading st-fs-15 st-fw-600 st-text-color me-3 mb-2 cursor-pointer add-new-ribbon">
                <span class="st-text-primary me-2">Add or edit ribbon</span>
                <span
                    class="round-feather-icon-with-bg hoverable d-inline-flex align-items-center justify-content-center">
                    <i class="feather-plus icon cursor-pointer"></i>
                </span>
            </p>
            <p class="st-fs-13 st-text-color2">Place customized text labels line "New" or "Free Shipping" over the main
                product image to attract customers and bring in more sales.</p>
        </div>

        <!-- options -->
        <div class="pbb2-inner" style="display: none;">
            <div class="add-ribbon-view">
                <div class="arv-inner d-flex flex-wrap">
                    <!-- form view -->
                    <div class="form-view d-flex flex-column">
                        <!-- form item -->
                        <div class="st-form ribbon-name-field">
                            <label>Ribbon Text</label>
                            <input type="text" class="form-control" placeholder="Ribbon Text" id="ribbonText"
                                name="ribbonText">
                        </div>

                        <!-- colors -->
                        <div class="ribbon-color-container pt-2">
                            <!-- all available colors -->
                            <div class="ribbon-pre-defined-colors d-flex flex-wrap">
                                <div class="color-item cursor-pointer active"
                                    style="background-color: rgb(252, 167, 38);" data-bg="rgb(252, 167, 38)"></div>
                                <div class="color-item cursor-pointer " style="background-color: rgb(243, 90, 102);"
                                    data-bg="rgb(243, 90, 102)">
                                </div>
                                <div class="color-item cursor-pointer " style="background-color: rgb(112, 145, 218);"
                                    data-bg="rgb(112, 145, 218)">
                                </div>
                                <div class="color-item cursor-pointer " style="background-color: rgb(78, 205, 196);"
                                    data-bg="rgb(78, 205, 196)">
                                </div>
                                <div class="color-item cursor-pointer " style="background-color: rgb(199, 88, 199);"
                                    data-bg="rgb(199, 88, 199)">
                                </div>
                                <div class="color-item custom-color cursor-pointer d-flex align-items-center justify-content-center"
                                    style="background-color: rgb(255, 255, 255);"><span class="st-fs-20">#</span></div>
                            </div>

                            <!-- custom color -->
                            <div class="ribbon-color-field-container" style="display: none;">
                                <div class="st-form ribbon-color-field">
                                    <input type="text" class="form-control" placeholder="Ribbon Color" id="ribbonColor"
                                        name="ribbonColor" value="rgb(252, 167, 38)">
                                </div>
                            </div>
                        </div>

                        <!-- btns -->
                        <div class="btns py-3 d-flex align-items-center mt-auto">
                            <a href="/"
                                class="text-decoration-none d-flex align-items-center st-text-danger st-fs-15 me-3 remove-the-ribbon">
                                <i class="feather-trash-2 icon me-2"></i>
                                <span>Remove Ribbon</span>
                            </a>
                            <a href="/"
                                class="text-decoration-none d-flex align-items-center st-text-primary st-fs-15 show-more-ribbon-options-btn">
                                <span>Show More Options</span>
                                <i class="feather-chevrons-down icon ms-2"></i>
                            </a>
                        </div>

                        <!-- more options -->
                        <div class="show-more-ribbon-options" style="display: none;">
                            <p class="box-heading st-fs-17 st-fw-600 st-text-primary mb-2">More ribbon options</p>
                            <!-- frac -->
                            <div class="frac mb-2">
                                <div class="d-flex align-items-center mb-2">
                                    <p class="box-heading st-fs-15 st-fw-600 st-text-color me-3">Disable add to cart</p>
                                    <label
                                        class="st-switch-input active-inactive-toggle d-inline-flex align-items-center mb-0">
                                        <input type="checkbox" class="d-none" id="ribbonDisableToCart">
                                        <span class="round-outer">
                                            <span class="round d-block"></span>
                                        </span>
                                        <span
                                            class="text ms-2 position-relative st-fs-13 st-fw-600 inactive">Disabled</span>
                                        <span class="text ms-2 position-relative st-fs-13 st-fw-600 active"
                                            style="display: none;">Enabled</span>
                                    </label>
                                </div>

                                <div class="st-form mb-0 disable-cart-description-view" style="display: none;">
                                    <label>Disable Cart Description (optional)</label>
                                    <textarea type="text" class="form-control" rows="3"
                                        placeholder="Disable Cart Description (optional)" id="ribbonDisableDescription"
                                        name="ribbonDisableDescription" spellcheck="false"></textarea>
                                </div>
                            </div>

                            <!-- frac -->
                            <div class="frac mb-2">
                                <p class="st-fs-13 st-fw-600 st-text-color2 mb-2">Ribbon Position</p>
                                <div class="st-from-group d-flex align-items-center">
                                    <label class="st-custom-radio d-flex align-items-center me-3">
                                        <input type="radio" class="d-none" name="ribbon_position" checked="">
                                        <span class="round"><span class="inner"></span></span>
                                        <span class="text media-body position-relative" style="top: 2.3px;">On
                                            Image</span>
                                    </label>
                                    <label class="st-custom-radio d-flex align-items-center me-2"><input type="radio"
                                            class="d-none" name="ribbon_position">
                                        <span class="round"><span class="inner"></span></span>
                                        <span class="text media-body position-relative" style="top: 2.3px;">Under
                                            Image</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- preview sec -->
                    <div class="preview-sec position_on-image">
                        <div class="inner ms-auto d-flex position-relative">
                            <div class="ribbon-stripe position-absolute"
                                style="background-color: rgb(252, 167, 38); color: rgb(255, 255, 255);">Your Text</div>
                            <p class="text align-self-end st-fs-13 text-center w-100 mb-1">Ribbon Preview</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>