<!-- app card -->
<div class="app-card mb-3 mb-lg-4">
    <div class="app-header-wrapper heading-sm mb-1">
        <p class="app-heading text-capitalize">Basic Info</p>
    </div>
    <div class="app-card-content bg-white border st-border-light st-default-rounded-block pad-20-LR pad-20-T">
        <div class="xs-12 col-md-9 col-lg-6 px-0">
            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    Template Name
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="Template Name" name="emailTemplateName"
                        value="">
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    Event Name
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <select class="form-control" name="emailEventName">
                        <option disabled="" value="">Select Event Name</option>
                        <option value="1">New User Registered</option>
                        <option value="2">Forgot Password</option>
                        <option value="3">Contact Us Form Submit</option>
                        <option value="4">News Letter Email</option>
                        <option value="10">Order Email</option>
                        <option value="11">Order Detail Email</option>
                        <option value="12">Forgot Password</option>
                        <option value="13">Order Status Change</option>
                        <option value="14">Order save as PDF </option>
                        <option value="19">Order Declined</option>
                        <option value="20">Order Pending</option>
                        <option value="21">Customer Account Approved</option>
                        <option value="22">Pending Payment Charged</option>
                        <option value="23">Shipment Tracking</option>
                        <option value="24">Admin Register</option>
                        <option value="26">Order Shipped</option>
                        <option value="27">Abandoned Cart</option>
                        <option value="28">Abandoned Cart Custom</option>
                        <option value="29">Favorite Products Reminder</option>
                        <option value="30">Order Feedback Request</option>
                        <option value="31">Loyalty Appreciation</option>
                        <option value="32">Inactive Customer Reminder</option>
                        <option value="33">Purchase Anniversary</option>
                        <option value="34">Low Stock Notification</option>
                        <option value="35">Send Payment Link</option>
                        <option value="36">Payment Status Change</option>
                    </select>
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    To
                    <span class="required ms-1 st-fs-12">(required)</span>
                </label>
                <div class="media-body st-form-input-container">
                    <select class="form-control" name="emailTo">
                        <option disabled="" value="">Select To</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    From
                </label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="From" name="emailFrom" value="">
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    Subject
                </label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="Subject" name="emailSubject" value="">
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    CC
                </label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="CC" name="emailCC" value="">
                </div>
            </div>

            <!-- form-item -->
            <div class="st-form st-form-with-label-left d-flex flex-wrap">
                <label>
                    BCC
                </label>
                <div class="media-body st-form-input-container">
                    <input type="text" class="form-control" placeholder="BCC" name="emailBCC" value="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- app card -->
<div class="app-card mb-3 mb-lg-4">
    <div class="app-header-wrapper heading-sm mb-1">
        <p class="app-heading text-capitalize">Email Content</p>
    </div>
    <div class="app-card-content bg-white border st-border-light st-default-rounded-block pad-20-LR pad-20-T">
        <div class="col-12 col-md-9">
            <div class="st-form st-form-with-label-left d-flex flex-wrap mb-3 ">
                <label>Description</label>
                <div class="app-editor-container media-body">
                    <div id="app-editor"></div>
                </div>
            </div>
        </div>
    </div>
</div>