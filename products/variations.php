<!DOCTYPE html>
<html lang="en">
    <?php
        include "../components/head.php"
    ?>
    <body>
        <div class="app-root bg-white">
            
            <div class="app-main-wrapper">
                <div class="amw_inner">
                    <!-- leftbar -->
                    <?php
                        include "../components/dashboard-leftbar.php"
                    ?>

                    <!-- main content -->
                    <div class="app-main-content d-flex flex-column">
                        <!-- header -->
                        <?php
                            include "../components/header.php"
                        ?>

                        <!-- content -->
                        <section id="app-products__create-details" class="st-def-mar-TB page-eorc-wrapper">
                            <div class="container-fluid st-container">
                                <div class="app-products__create-details">
                                    <!-- back or save -->
                                    <div class="page-save-button-block d-flex align-items-center">
                                        <!-- back btn -->
                                        <div class="back-button-wrapper st-line-height-0">
                                            <a 
                                                class="text-decoration-none st-text-primary d-inline-flex align-items-center cursor-pointer st-fs-14 st-fw-600" 
                                                href="http://localhost/commercey-html/products/">
                                                <i class="feather feather-arrow-left icon me-1"></i>
                                                <span>Cancel and go back to variations</span>
                                            </a>
                                        </div>

                                        <!-- save btn -->
                                        <button
                                            class="st-btn st-btn-primary ms-auto save-options-details">
                                            <span>Save</span>
                                        </button>
                                    </div>

                                    <div id="add-product-variant-view">
                                        <div class="add-product-variant-view">
                                            <!-- header -->
                                            <div class="app-header-wrapper">
                                                <p class="app-heading text-capitalize heading-sm">Add Options</p>
                                                <p class="app-desc">
                                                    Add options like size and color for this product.
                                                </p>
                                            </div>
                                
                                            <!-- content -->
                                            <div class="page-content st-def-pad-B">
                                                <!-- border box -->
                                                <div class="page-border-box">
                                                    <div class="pbb-inner">
                                                        <div class="content">
                                                            <form>
                                                                <div class="content-inner variations-sortable-l1">
                                                                    <!-- frac -->
                                                                    <div class="frac">
                                                                        <div class="frac-inner d-flex">
                                                                            <!-- icon -->
                                                                            <div class="move-icon">
                                                                                <i class="feather-move icon st-fs-20"></i>
                                                                            </div>
        
                                                                            <!-- content -->
                                                                            <div class="d-flex flex-wrap media-body">
                                                                                <!-- form item : name -->
                                                                                <div class="form-item item-name">
                                                                                    <!-- input -->
                                                                                    <div class="st-form mb-2">
                                                                                        <label class="mb-1"></label>
                                                                                            Name
                                                                                            <span class="required">*</span>
                                                                                        </label>
                                                                                        <input placeholder="Name" type="text" class="form-control" value="Color">
                                                                                    </div>
        
                                                                                    <!-- delete item -->
                                                                                    <div class="delete-frac-item">
                                                                                        <a href="/" class="st-text-danger st-fw-600 text-decoration-none text-danger d-flex align-items-center delete-option">
                                                                                            <i class="feather-trash-2 st-fs-13 icon me-1"></i>
                                                                                            <span>Delete Option</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- form item : type -->
                                                                                <div class="form-item item-type">
                                                                                    <div class="st-form mb-2">
                                                                                        <label class="mb-1">
                                                                                            Option
                                                                                            <span class="required">*</span>
                                                                                        </label>
                                                                                        <select class="form-control">
                                                                                            <option disabled="">Select Type</option>
                                                                                            <option value="radio_buttons">Radio Buttons</option>
                                                                                            <option value="rectangle_list" selected="">Rectangle List</option>
                                                                                            <option value="dropdown">Dropdown</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- form item : values -->
                                                                                <div class="form-item item-values d-flex flex-wrap">
                                                                                    <!-- all fields -->
                                                                                    <div class="all-form-fields media-body variations-sortable-l2">
                                                                                        <!-- item field -->
                                                                                        <div class="form-item-outer d-flex flex-wrap">
                                                                                            <!-- icon -->
                                                                                            <div class="move-icon">
                                                                                                <i class="feather-move icon st-fs-20"></i>
                                                                                            </div>

                                                                                            <!-- form -->
                                                                                            <div class="form-item media-body">
                                                                                                <!-- input -->
                                                                                                <div class="st-form mb-2">
                                                                                                    <label class="mb-1">
                                                                                                        Value
                                                                                                        <span class="required">*</span>
                                                                                                    </label>
                                                                                                    <input placeholder="Name" type="text" class="form-control" value="red">
                                                                                                </div>

                                                                                                <!-- delete -->
                                                                                                <div class="delete-frac-item mb-2">
                                                                                                    <a href="/" class="st-text-danger st-fw-600 text-decoration-none text-danger d-flex align-items-center delete-option-value">
                                                                                                        <i class="feather-trash-2 icon me-1"></i>
                                                                                                        <span>Delete Value</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- default -->
                                                                                            <div class="select-default ps-2">
                                                                                                <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer">
                                                                                                    <input type="radio" class="d-none">
                                                                                                    <span class="box d-flex align-items-center justify-content-center border">
                                                                                                        <i class="feather-check icon position-relative"></i>
                                                                                                    </span>
                                                                                                    <span class="text text-capitalize st-fs-15 ms-2">default</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- item field -->
                                                                                        <div class="form-item-outer d-flex flex-wrap">
                                                                                            <!-- icon -->
                                                                                            <div class="move-icon">
                                                                                                <i class="feather-move icon st-fs-20"></i>
                                                                                            </div>

                                                                                            <!-- form -->
                                                                                            <div class="form-item media-body">
                                                                                                <!-- input -->
                                                                                                <div class="st-form mb-2">
                                                                                                    <label class="mb-1">
                                                                                                        Value
                                                                                                        <span class="required">*</span>
                                                                                                    </label>
                                                                                                    <input placeholder="Name" type="text" class="form-control" value="green">
                                                                                                </div>

                                                                                                <!-- delete -->
                                                                                                <div class="delete-frac-item mb-2">
                                                                                                    <a href="/" class="st-text-danger st-fw-600 text-decoration-none text-danger d-flex align-items-center delete-option-value">
                                                                                                        <i class="feather-trash-2 icon me-1"></i>
                                                                                                        <span>Delete Value</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- default -->
                                                                                            <div class="select-default ps-2">
                                                                                                <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer">
                                                                                                    <input type="radio" class="d-none">
                                                                                                    <span class="box d-flex align-items-center justify-content-center border">
                                                                                                        <i class="feather-check icon position-relative"></i>
                                                                                                    </span>
                                                                                                    <span class="text text-capitalize st-fs-15 ms-2">default</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- add value -->
                                                                                    <div class="add-field w-100 mt-2">
                                                                                        <p class="d-inline-flex align-items-center st-text-primary cursor-pointer add-new-option-value">
                                                                                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus icon me-1"><g><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></g></svg>
                                                                                            <span>Add another field</span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- frac -->
                                                                    <div class="frac">
                                                                        <div class="frac-inner d-flex">
                                                                            <!-- icon -->
                                                                            <div class="move-icon">
                                                                                <i class="feather-move icon st-fs-20"></i>
                                                                            </div>
        
                                                                            <!-- content -->
                                                                            <div class="d-flex flex-wrap media-body">
                                                                                <!-- form item : name -->
                                                                                <div class="form-item item-name">
                                                                                    <!-- input -->
                                                                                    <div class="st-form mb-2">
                                                                                        <label class="mb-1"></label>
                                                                                            Name
                                                                                            <span class="required">*</span>
                                                                                        </label>
                                                                                        <input placeholder="Name" type="text" class="form-control" value="Size">
                                                                                    </div>
        
                                                                                    <!-- delete item -->
                                                                                    <div class="delete-frac-item">
                                                                                        <a href="/" class="st-text-danger st-fw-600 text-decoration-none text-danger d-flex align-items-center delete-option">
                                                                                            <i class="feather-trash-2 st-fs-13 icon me-1"></i>
                                                                                            <span>Delete Option</span>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- form item : type -->
                                                                                <div class="form-item item-type">
                                                                                    <div class="st-form mb-2">
                                                                                        <label class="mb-1">
                                                                                            Option
                                                                                            <span class="required">*</span>
                                                                                        </label>
                                                                                        <select class="form-control">
                                                                                            <option disabled="">Select Type</option>
                                                                                            <option value="radio_buttons">Radio Buttons</option>
                                                                                            <option value="rectangle_list" selected="">Rectangle List</option>
                                                                                            <option value="dropdown">Dropdown</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- form item : values -->
                                                                                <div class="form-item item-values d-flex flex-wrap">
                                                                                    <!-- all fields -->
                                                                                    <div class="all-form-fields media-body variations-sortable-l2">
                                                                                        <!-- item field -->
                                                                                        <div class="form-item-outer d-flex flex-wrap">
                                                                                            <!-- icon -->
                                                                                            <div class="move-icon">
                                                                                                <i class="feather-move icon st-fs-20"></i>
                                                                                            </div>

                                                                                            <!-- form -->
                                                                                            <div class="form-item media-body">
                                                                                                <!-- input -->
                                                                                                <div class="st-form mb-2">
                                                                                                    <label class="mb-1">
                                                                                                        Value
                                                                                                        <span class="required">*</span>
                                                                                                    </label>
                                                                                                    <input placeholder="Name" type="text" class="form-control" value="XS">
                                                                                                </div>

                                                                                                <!-- delete -->
                                                                                                <div class="delete-frac-item mb-2">
                                                                                                    <a href="/" class="st-text-danger st-fw-600 text-decoration-none text-danger d-flex align-items-center delete-option-value">
                                                                                                        <i class="feather-trash-2 icon me-1"></i>
                                                                                                        <span>Delete Value</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- default -->
                                                                                            <div class="select-default ps-2">
                                                                                                <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer">
                                                                                                    <input type="radio" class="d-none">
                                                                                                    <span class="box d-flex align-items-center justify-content-center border">
                                                                                                        <i class="feather-check icon position-relative"></i>
                                                                                                    </span>
                                                                                                    <span class="text text-capitalize st-fs-15 ms-2">default</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>

                                                                                        <!-- item field -->
                                                                                        <div class="form-item-outer d-flex flex-wrap">
                                                                                            <!-- icon -->
                                                                                            <div class="move-icon">
                                                                                                <i class="feather-move icon st-fs-20"></i>
                                                                                            </div>

                                                                                            <!-- form -->
                                                                                            <div class="form-item media-body">
                                                                                                <!-- input -->
                                                                                                <div class="st-form mb-2">
                                                                                                    <label class="mb-1">
                                                                                                        Value
                                                                                                        <span class="required">*</span>
                                                                                                    </label>
                                                                                                    <input placeholder="Name" type="text" class="form-control" value="SM">
                                                                                                </div>

                                                                                                <!-- delete -->
                                                                                                <div class="delete-frac-item mb-2">
                                                                                                    <a href="/" class="st-text-danger st-fw-600 text-decoration-none text-danger d-flex align-items-center delete-option-value">
                                                                                                        <i class="feather-trash-2 icon me-1"></i>
                                                                                                        <span>Delete Value</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- default -->
                                                                                            <div class="select-default ps-2">
                                                                                                <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer">
                                                                                                    <input type="radio" class="d-none">
                                                                                                    <span class="box d-flex align-items-center justify-content-center border">
                                                                                                        <i class="feather-check icon position-relative"></i>
                                                                                                    </span>
                                                                                                    <span class="text text-capitalize st-fs-15 ms-2">default</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- add value -->
                                                                                    <div class="add-field w-100 mt-2">
                                                                                        <p class="d-inline-flex align-items-center st-text-primary cursor-pointer add-new-option-value">
                                                                                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus icon me-1"><g><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></g></svg>
                                                                                            <span>Add another field</span>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- btns -->
                                                <div class="btns d-flex mt-3">
                                                    <button class="btn st-btn st-btn-sm st-btn-primary-outlined text-capitalize st-fw-400 d-flex align-items-center me-3 add-new-option">
                                                        <i class="feather-plus icon me-2"></i>
                                                        <span>add option</span>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            <!-- global loading container -->
            <div class="global-loading-container d-none align-items-center justify-content-center">
                <div class="spinner-border st-text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>

        <?php
            include "../components/footer-scripts.php"
        ?>
    </body>
</html>