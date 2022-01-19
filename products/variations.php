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
                                                href="https://mycommercey.com/commercey-html/products/">
                                                <i class="feather feather-arrow-left icon me-1"></i>
                                                <span>Cancel and go back to variations</span>
                                            </a>
                                        </div>

                                        <!-- save btn -->
                                        <button
                                            class="st-btn st-btn-primary ms-auto">
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
                                                                <div class="content-inner ">
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
                                                                                        <label class="mb-1">
                                                                                            Name
                                                                                            <span class="required">*</span>
                                                                                        </label>
                                                                                        <input placeholder="Name" type="text" class="form-control" value="">
                                                                                    </div>
        
                                                                                    <!-- delete item -->
                                                                                    <div class="delete-frac-item">
                                                                                        <a href="/" class="st-text-danger st-fw-600 text-decoration-none text-danger d-flex align-items-center">
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
                                                                                    <div class="all-form-fields media-body">
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
                                                                                                    <input placeholder="Name" type="text" class="form-control" value="">
                                                                                                </div>

                                                                                                <!-- delete -->
                                                                                                <div class="delete-frac-item mb-2">
                                                                                                    <a href="" class="st-text-danger st-fw-600 text-decoration-none text-danger d-flex align-items-center">
                                                                                                        <i class="feather-trash-2 icon me-1"></i>
                                                                                                        <span>Delete Value</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- default -->
                                                                                            <div class="select-default ps-2">
                                                                                                <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer">
                                                                                                    <input type="radio" class="d-none" name="0_0_isDefault">
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
                                                                                                    <input placeholder="Name" type="text" class="form-control" value="">
                                                                                                </div>

                                                                                                <!-- delete -->
                                                                                                <div class="delete-frac-item mb-2">
                                                                                                    <a href="" class="st-text-danger st-fw-600 text-decoration-none text-danger d-flex align-items-center">
                                                                                                        <i class="feather-trash-2 icon me-1"></i>
                                                                                                        <span>Delete Value</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- default -->
                                                                                            <div class="select-default ps-2">
                                                                                                <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer">
                                                                                                    <input type="radio" class="d-none" name="0_0_isDefault">
                                                                                                    <span class="box d-flex align-items-center justify-content-center border">
                                                                                                        <i class="feather-check icon position-relative"></i>
                                                                                                    </span>
                                                                                                    <span class="text text-capitalize st-fs-15 ms-2">default</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
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
                                                                                        <label class="mb-1">
                                                                                            Name
                                                                                            <span class="required">*</span>
                                                                                        </label>
                                                                                        <input placeholder="Name" type="text" class="form-control" value="">
                                                                                    </div>
        
                                                                                    <!-- delete item -->
                                                                                    <div class="delete-frac-item">
                                                                                        <a href="/" class="st-text-danger st-fw-600 text-decoration-none text-danger d-flex align-items-center">
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
                                                                                    <div class="all-form-fields media-body">
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
                                                                                                    <input placeholder="Name" type="text" class="form-control" value="">
                                                                                                </div>

                                                                                                <!-- delete -->
                                                                                                <div class="delete-frac-item mb-2">
                                                                                                    <a href="" class="st-text-danger st-fw-600 text-decoration-none text-danger d-flex align-items-center">
                                                                                                        <i class="feather-trash-2 icon me-1"></i>
                                                                                                        <span>Delete Value</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- default -->
                                                                                            <div class="select-default ps-2">
                                                                                                <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer">
                                                                                                    <input type="radio" class="d-none" name="0_0_isDefault">
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
                                                                                                    <input placeholder="Name" type="text" class="form-control" value="">
                                                                                                </div>

                                                                                                <!-- delete -->
                                                                                                <div class="delete-frac-item mb-2">
                                                                                                    <a href="" class="st-text-danger st-fw-600 text-decoration-none text-danger d-flex align-items-center">
                                                                                                        <i class="feather-trash-2 icon me-1"></i>
                                                                                                        <span>Delete Value</span>
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- default -->
                                                                                            <div class="select-default ps-2">
                                                                                                <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer">
                                                                                                    <input type="radio" class="d-none" name="0_0_isDefault">
                                                                                                    <span class="box d-flex align-items-center justify-content-center border">
                                                                                                        <i class="feather-check icon position-relative"></i>
                                                                                                    </span>
                                                                                                    <span class="text text-capitalize st-fs-15 ms-2">default</span>
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
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