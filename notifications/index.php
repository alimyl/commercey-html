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
                    <section id="app-notifications" class="st-def-mar-TB">
                        <div class="container-fluid st-container">

                            <div class="app-notifications">
                                <!-- header -->
                                <div class="app-header-wrapper mb-3">
                                    <p class="app-heading text-capitalize">notifications</p>
                                    <p class="app-desc">Keep yourself and customers informed with automated
                                        notifications. Send order updates, remind customers about your products, and
                                        keep up with what’s happening in your store.</p>
                                </div>

                                <!-- content -->
                                <div class="app-content-container">
                                    <!-- page section  -->
                                    <div class="fixed-left-page-view-container notifications-container">
                                        <div class="flpvc-inner d-flex flex-wrap">
                                            <!-- left sec -->
                                            <div class="flpvc-lt-sec">
                                                <div class="inner">
                                                    <!-- head -->
                                                    <div class="app-header-wrapper heading-sm mb-3">
                                                        <p class="app-heading text-capitalize mb-2">Domain Settings</p>
                                                        <p class="app-desc">Manage your domain settings. Edit or add a
                                                            new domain.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- right sec -->
                                            <div class="flpvc-rt-sec media-body ps-3">
                                                <div class="inner">
                                                    <!-- border box | add domain  -->
                                                    <div class="page-border-box2 mb-3 mb-md-4 domain-info">
                                                        <!-- add domain -->
                                                        <div class="pbb2-inner d-flex">
                                                            <div class="text-sec media-body pe-3">
                                                                <div class="app-header-wrapper heading-sm mb-2">
                                                                    <p class="app-heading text-capitalize mb-2">Send
                                                                        from any email address on a domain</p>
                                                                    <p class="app-desc st-fs-14">A more technical
                                                                        approach which requires that you verify your
                                                                        domain by adding a DKIM DNS record</p>
                                                                </div>
                                                            </div>
                                                            <div class="btn-sec">
                                                                <button class="st-btn st-btn-sm">
                                                                    Add Domain
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <!-- add domain details -->
                                                        <div class="pbb2-inner">
                                                            <div class="text-sec media-body pe-3">
                                                                <div class="app-header-wrapper heading-sm mb-2">
                                                                    <p
                                                                        class="app-heading st-fw-600 text-capitalize mb-2">
                                                                        Add a Domain</p>
                                                                    <p class="app-desc st-fs-14">Add a domain you would
                                                                        like to send emails from. <br>you must have
                                                                        access to this domain's DNS in order to verify
                                                                        it.</p>
                                                                </div>
                                                            </div>
                                                            <div class="form col-12 col-lg-5">
                                                                <form novalidate="" autocomplete="off">
                                                                    <div class="st-form form-sm  "><label>Domain<span
                                                                                class="required ms-1 st-fs-12">(required)</span></label><input
                                                                            type="text" class="form-control"
                                                                            placeholder="yourdomain.com" id="domain"
                                                                            name="domain" value=""></div>
                                                                    <div class="btns d-flex pt-2"><button type="submit"
                                                                            class="st-btn st-btn-primary st-btn-sm me-2 ">Save</button><button
                                                                            class="st-btn st-btn-link st-btn-sm no-min-width">Cancel</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- border box | domain details -->
                                                    <div
                                                        class="page-border-box2 mb-3 mb-md-4 customer-order-notifications">
                                                        <div class="pbb2-inner">
                                                            <!-- top sec -->
                                                            <div class="dsi-top-sec d-flex pb-1">
                                                                <div class="domain-name">
                                                                    <p class="st-fw-700 mt-1">
                                                                        <i class="feather-check"></i>
                                                                        <span class="ms-1">ruhlistic.com</span>
                                                                    </p>
                                                                </div>
                                                                <div class="other-info ms-auto d-flex flex-wrap">
                                                                    <p
                                                                        class="info-text d-flex align-items-center st-text-success st-fw-600 me-3">
                                                                        <i class="feather-check icon"></i>
                                                                        <span class="ms-1">DKIM verified</span>
                                                                    </p>
                                                                    <p
                                                                        class="info-text d-flex align-items-center st-text-success st-fw-600 me-3">
                                                                        <i class="feather-check icon"></i>
                                                                        <span class="ms-1">Return-Path verified</span>
                                                                    </p>
                                                                    <p
                                                                        class="info-link d-flex align-items-center st-text-primary st-fw-600 cursor-pointer hover-underline-link me-3">
                                                                        DNS Settings</p>
                                                                    <p class="st-round-btn st-btn-transparent st-btn-xs d-flex align-items-center justify-content-center cursor-pointer"
                                                                        title="remove">
                                                                        <i class="feather-trash icon"></i>
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <!-- bottom sec -->

                                                        </div>
                                                    </div>

                                                    <!-- border box | domain settings -->
                                                    <div class="page-border-box2 mb-3 mb-md-4 domain-settings">
                                                        <div class="pbb2-inner">
                                                            <div
                                                                class="app-header-wrapper heading-sm d-flex align-items-start mb-2">
                                                                <p class="app-heading st-fw-600 text-capitalize mb-0">
                                                                    DNS Settings<span class="d-block st-fs-16"
                                                                        style="text-transform: initial;">ruhlistic.com</span>
                                                                </p>
                                                                <a href="/"
                                                                    class="text-decoration-none d-inline-flex align-items-center ms-auto st-text-primary mt-1">
                                                                    <i class="feather-x icon"></i>
                                                                    <span class="ms-1">Close Settings</span>
                                                                </a>
                                                            </div>
                                                            <div class="content">
                                                                <p
                                                                    class="desc text-center mt-2 mb-3 st-text-color2 st-fs-15">
                                                                    Head over to your DNS provider and add <span
                                                                        class="text-decoration-underline">DKIM</span>
                                                                    and <span
                                                                        class="text-decoration-underline">Return-Path</span>
                                                                    DNS records to verify your domain and ensrure
                                                                    effective delivery.</p>
                                                                <div class="table-responsive dns-settings-table">
                                                                    <table class="table">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="st-fw-400"></th>
                                                                                <th class="st-fw-400">
                                                                                    <p class="st-text-color2">Hostname
                                                                                    </p>
                                                                                </th>
                                                                                <th width="80" class="st-fw-400">
                                                                                    <p
                                                                                        class="text-center st-text-color2">
                                                                                        Type</p>
                                                                                </th>
                                                                                <th width="250" class="st-fw-400">
                                                                                    <p class="st-text-color2">Add this
                                                                                        value</p>
                                                                                </th>
                                                                                <th width="90" class="st-fw-400"></th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="status">
                                                                                    <div
                                                                                        class="d-flex align-items-center active">
                                                                                        <button
                                                                                            class="st-round-btn st-btn-xs d-flex align-items-center justify-content-center cursor-pointer st-btn-primary">
                                                                                            <i
                                                                                                class="feather-check icon"></i>
                                                                                        </button>
                                                                                        <p
                                                                                            class="media-body d-flex flex-column ps-2 st-line-height-normal">
                                                                                            <span
                                                                                                class="st-fw-600 st-fs-15">DKIM</span><span
                                                                                                class="st-text-color2">Active</span>
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="hostname">
                                                                                    <p>20211118041852pm._domainkey.ruhlistic.com
                                                                                    </p>
                                                                                </td>
                                                                                <td class="type">
                                                                                    <p class="text-center">TXT</p>
                                                                                </td>
                                                                                <td class="this-value">
                                                                                    <p>k=rsa;p=MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCty9gvqxJLzPw0LsBj60Z8vGi4bbeDhla7sJt4a6vn66iWiSJ/1ZMX+qCfPRD24n2xjuj5kc+qNa5h9oy04gymtCuGD3b1Fb2/pNpTyWyIRbhpDxugC7sAImfLMLtjx3fXWEZIpP86uIzRmURsJPcO41+GfV0JNMBEpPNXL6iGbwIDAQAB
                                                                                    </p>
                                                                                </td>
                                                                                <td class="btns text-right"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="status">
                                                                                    <div
                                                                                        class="d-flex align-items-center active">
                                                                                        <button
                                                                                            class="st-round-btn st-btn-xs d-flex align-items-center justify-content-center cursor-pointer st-btn-primary">
                                                                                            <i
                                                                                                class="feather-check icon"></i>
                                                                                        </button>
                                                                                        <p
                                                                                            class="media-body d-flex flex-column ps-2 st-line-height-normal">
                                                                                            <span
                                                                                                class="st-fw-600 st-fs-15">Return-Path</span><span
                                                                                                class="st-text-color2">Active</span>
                                                                                        </p>
                                                                                    </div>
                                                                                </td>
                                                                                <td class="hostname">
                                                                                    <p>pm-bounces</p>
                                                                                </td>
                                                                                <td class="type">
                                                                                    <p class="text-center">CNAME</p>
                                                                                </td>
                                                                                <td class="this-value">
                                                                                    <p>pm.mtasv.net</p>
                                                                                </td>
                                                                                <td class="btns text-right"></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>



                                        </div>
                                    </div>

                                    <!-- page section -->
                                    <div class="fixed-left-page-view-container notifications-container">
                                        <div class="flpvc-inner d-flex flex-wrap">
                                            <!-- lt sec -->
                                            <div class="flpvc-lt-sec">
                                                <div class="inner">
                                                    <div class="app-header-wrapper heading-sm mb-3">
                                                        <p class="app-heading text-capitalize mb-2">Customer
                                                            notifications settings</p>
                                                        <p class="app-desc">Manage email notifications that are
                                                            automatically sent to customers. Edit, enable or disable
                                                            them depending on your business needs.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- rt sec -->
                                            <div class="flpvc-rt-sec media-body ps-3">
                                                <div class="inner">
                                                    <!-- border box | notifications -->
                                                    <div
                                                        class="page-border-box2 mb-3 mb-md-4 customer-order-notifications">
                                                        <div class="pbb2-inner d-flex">
                                                            <div class="text-sec media-body pe-3">
                                                                <div class="app-header-wrapper heading-sm mb-2">
                                                                    <p
                                                                        class="app-heading st-fw-600 text-capitalize mb-2">
                                                                        Customer order notifications</p>
                                                                    <p class="app-desc st-fs-14">These email
                                                                        notifications are sent to customers to confirm
                                                                        their orders and keep them informed about the
                                                                        order progress. You can customize any email to
                                                                        make it more personal, include necessary
                                                                        information, and promote your brand. You can
                                                                        upload and change the logo, edit the email
                                                                        subject, content, and layout.</p>
                                                                </div>

                                                                <!-- listing -->
                                                                <div class="customer-order-notifications-list">

                                                                    <!-- item -->
                                                                    <div class="conl-item">
                                                                        <div class="conli-inner d-flex align">
                                                                            <div
                                                                                class="text-sec media-body pe-2 pe-lg-4">
                                                                                <div class="inner d-flex">
                                                                                    <div class="icon-sec"></div>
                                                                                    <div
                                                                                        class="text-sec media-body cursor-pointer">
                                                                                        <p
                                                                                            class="head st-fw-600 st-fs-16 mb-2">
                                                                                            Order confirmation<span
                                                                                                class="edit-text st-fw-400 ms-2">Edit</span>
                                                                                        </p>
                                                                                        <p class="desc">Sent to customer
                                                                                            after successful order
                                                                                            placement to acknowledge its
                                                                                            receipt. This email contains
                                                                                            information about order
                                                                                            items, shipping, billing,
                                                                                            and order status.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="right-sec">
                                                                                <div class="inner d-flex">
                                                                                    <button
                                                                                        class="st-btn st-btn-sm me-3 me-lg-4">Edit</button>
                                                                                    <div class="switch-btn position-relative"
                                                                                        style="top: 2px;">
                                                                                        <label
                                                                                            class="st-switch-input-lg st-switch-success d-inline-flex align-items-center"><input
                                                                                                class="d-none"
                                                                                                type="checkbox"
                                                                                                checked="">
                                                                                            <span
                                                                                                class="round-outer"><span
                                                                                                    class="round d-block"></span></span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- border box | sender info -->
                                                    <div
                                                        class="page-border-box2 mb-3 mb-md-4 edit-senders-info not-available">
                                                        <div class="pbb2-inner d-flex">
                                                            <div class="text-sec media-body pe-3">
                                                                <div class="app-header-wrapper heading-sm mb-2">
                                                                    <p class="app-heading text-capitalize mb-2">Sender’s
                                                                        name and email address</p>
                                                                    <p class="app-desc st-fs-14">You can set the email
                                                                        address that you want to send your notifications
                                                                        from. The address has to be on a custom domain,
                                                                        as email services do not allow using their
                                                                        addresses to send emails by third-party
                                                                        services. Also, you can specify the name that
                                                                        appears next to the email address and helps
                                                                        customers identify you. It can be your company
                                                                        name or any other name of your liking.</p>
                                                                </div>
                                                                <p class="senders-info-box mb-3"><span
                                                                        class="desc me-1">Customer notifications are
                                                                        sent from</span><span
                                                                        class="from-name st-fw-600 me-1">Ruhlistic
                                                                        Decor</span><span
                                                                        class="from-email st-fw-600">&lt;info@ruhlistic.com&gt;</span>
                                                                </p>
                                                                <p class="add-info text-black-50">Replies to your emails
                                                                    are delivered to info@ruhlistic.com</p>
                                                            </div>
                                                            <div class="btn-sec"><button
                                                                    class="st-btn st-btn-sm">Edit</button></div>
                                                        </div>
                                                    </div>
                                                    <!-- border box | edit sender info -->
                                                    <div class="page-border-box2 mb-3 mb-md-4 edit-senders-info">
                                                        <div class="pbb2-inner d-flex">
                                                            <div class="text-sec media-body pe-3">
                                                                <div class="app-header-wrapper heading-sm mb-2">
                                                                    <p class="app-heading text-capitalize mb-2">Sender’s
                                                                        name and email address</p>
                                                                    <p class="app-desc st-fs-14">You can set the email
                                                                        address that you want to send your notifications
                                                                        from. The address has to be on a custom domain,
                                                                        as email services do not allow using their
                                                                        addresses to send emails by third-party
                                                                        services. Also, you can specify the name that
                                                                        appears next to the email address and helps
                                                                        customers identify you. It can be your company
                                                                        name or any other name of your liking.</p>
                                                                </div>
                                                                <div class="form col-12 col-lg-5">
                                                                    <form novalidate="" autocomplete="off">
                                                                        <div class="st-form form-sm  "><label>Email<span
                                                                                    class="required ms-1 st-fs-12">(required)</span></label><input
                                                                                type="text" class="form-control"
                                                                                placeholder="Email" id="email"
                                                                                name="email" value="info@ruhlistic.com">
                                                                        </div>
                                                                        <div class="st-form form-sm  ">
                                                                            <label>Name</label><input type="text"
                                                                                class="form-control" placeholder="Name"
                                                                                id="name" name="name"
                                                                                value="Ruhlistic Decor">
                                                                        </div>
                                                                        <div class="btns d-flex"><button type="submit"
                                                                                class="st-btn st-btn-primary st-btn-sm me-2 ">Save</button><button
                                                                                class="st-btn st-btn-link st-btn-sm no-min-width">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- border box | logo details -->
                                                    <div class="page-border-box2 mb-3 mb-md-4 edit-logo-details">
                                                        <div class="pbb2-inner d-flex">
                                                            <div class="logo-sec">
                                                                <label class="d-none"><input type="file"
                                                                        accept=".png, .jpg, .jpeg" hidden=""></label>
                                                                <div
                                                                    class="img d-flex align-items-center justify-content-center">
                                                                    <img src="https://www.commercey.com/stores/ruhlistic/logos/email-90402634-1637844954.png"
                                                                        class="img-img-fluid-height img-fluid">
                                                                </div>
                                                            </div>
                                                            <div class="text-sec media-body ps-3">
                                                                <div class="app-header-wrapper heading-sm mb-3">
                                                                    <p
                                                                        class="app-heading st-fw-600 text-capitalize mb-2">
                                                                        Logo</p>
                                                                    <p class="app-desc st-fs-14">This logo will be used
                                                                        in all customer notifications.</p>
                                                                </div>
                                                                <div class="btns d-flex align-items-center mb-2"><button
                                                                        class="st-btn st-btn-sm me-2 "><span>Change
                                                                            Logo</span></button></div>
                                                                <p class="add-info st-fs-13 text-black-50">Recommended
                                                                    size: 240×100 px</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                    <!-- page section -->
                                    <div class="fixed-left-page-view-container notifications-container">
                                        <div class="flpvc-inner d-flex flex-wrap">
                                            <!-- lt sec -->
                                            <div class="flpvc-lt-sec">
                                                <div class="inner">
                                                    <div class="app-header-wrapper heading-sm mb-3">
                                                        <p class="app-heading text-capitalize mb-2">Admin notifications
                                                            settings</p>
                                                        <p class="app-desc">Manage automated email notifications that
                                                            are sent to you and staff members you specify. Edit, enable
                                                            or disable them depending on your business needs.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- rt sec -->
                                            <div class="flpvc-rt-sec media-body ps-3">
                                                <div class="inner">
                                                    <!-- border box | admin notificaions -->
                                                    <div
                                                        class="page-border-box2 mb-3 mb-md-4 customer-order-notifications">
                                                        <div class="pbb2-inner d-flex">
                                                            <div class="text-sec media-body pe-3">
                                                                <div class="app-header-wrapper heading-sm mb-2">
                                                                    <p
                                                                        class="app-heading st-fw-600 text-capitalize mb-2">
                                                                        Admin notifications</p>
                                                                    <p class="app-desc st-fs-14">These email
                                                                        notifications keep you updated on the important
                                                                        store and customer activities. You can customize
                                                                        any email to make it more suitable for your
                                                                        purposes and include necessary information. You
                                                                        can upload and change the logo, edit the email
                                                                        subject, content, and layout.</p>
                                                                </div>

                                                                <!-- listing -->
                                                                <div class="customer-order-notifications-list">
                                                                    <!-- item -->
                                                                    <div class="conl-item">
                                                                        <div class="conli-inner d-flex align">
                                                                            <div
                                                                                class="text-sec media-body pe-2 pe-lg-4">
                                                                                <div class="inner d-flex">
                                                                                    <div class="icon-sec"></div>
                                                                                    <div
                                                                                        class="text-sec media-body cursor-pointer">
                                                                                        <p
                                                                                            class="head st-fw-600 st-fs-16 mb-2">
                                                                                            Low stock notification<span
                                                                                                class="edit-text st-fw-400 ms-2">Edit</span>
                                                                                        </p>
                                                                                        <p class="desc">Sent to admin
                                                                                            when a product in the store
                                                                                            has reached a low stock
                                                                                            limit.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="right-sec">
                                                                                <div class="inner d-flex">
                                                                                    <button
                                                                                        class="st-btn st-btn-sm me-3 me-lg-4">Edit</button>
                                                                                    <div class="switch-btn position-relative"
                                                                                        style="top: 2px;"><label
                                                                                            class="st-switch-input-lg st-switch-success d-inline-flex align-items-center"><input
                                                                                                class="d-none"
                                                                                                type="checkbox"
                                                                                                checked=""><span
                                                                                                class="round-outer"><span
                                                                                                    class="round d-block"></span></span></label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- border box | Receive copy -->
                                                    <div
                                                        class="page-border-box2 mb-3 mb-md-4 customer-order-notifications ">
                                                        <div class="pbb2-inner d-flex">
                                                            <div class="app-header-wrapper heading-sm mb-2">
                                                                <div class="app-heading d-flex mb-2">
                                                                    <span>Receive copy of all customer
                                                                        notifications</span>
                                                                    <div class="switch-btn position-relative ms-2"
                                                                        style="top: 2.5px;"><label
                                                                            class="st-switch-input st-switch-success d-inline-flex align-items-center"><input
                                                                                class="d-none" type="checkbox"><span
                                                                                class="round-outer"><span
                                                                                    class="round d-block"></span></span></label>
                                                                    </div>
                                                                </div>
                                                                <p class="app-desc st-fs-14">With the copies of customer
                                                                    emails, you can track which emails are sent to
                                                                    customers and check that their contents are correct.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- border box | admin email address -->
                                                    <div
                                                        class="page-border-box2 mb-3 mb-md-4 customer-order-notifications">
                                                        <div class="pbb2-inner d-flex">
                                                            <div class="text-sec media-body pe-3">
                                                                <div class="app-header-wrapper heading-sm mb-2">
                                                                    <p class="app-heading text-capitalize mb-2">Admin
                                                                        email addresses</p>
                                                                    <p class="app-desc st-fs-14">All admin notifications
                                                                        are sent to the specified email address. You can
                                                                        specify multiple addresses.</p>
                                                                </div>
                                                                <p class="add-info text-black-50">Admin notifications
                                                                    are sent to info@ruhlistic.com</p>
                                                            </div>
                                                            <div class="btn-sec"><button
                                                                    class="st-btn st-btn-sm">Edit</button></div>
                                                        </div>
                                                    </div>
                                                    <!-- border box | edit admin email address -->
                                                    <div class="page-border-box2 mb-3 mb-md-4 add-admin-email-address">
                                                        <div class="pbb2-inner">
                                                            <div class="app-header-wrapper heading-sm mb-2">
                                                                <p class="app-heading text-capitalize mb-2">Admin email
                                                                    addresses</p>
                                                                <p class="app-desc st-fs-14">All admin notifications are
                                                                    sent to the specified email address. You can specify
                                                                    multiple addresses.</p>
                                                            </div>
                                                            <div class="form col-12 col-lg-5">
                                                                <div class="form-item d-flex ">
                                                                    <div class="st-form form-sm media-body"><input
                                                                            type="email" placeholder="Email Adderss"
                                                                            class="form-control"
                                                                            value="info@ruhlistic.com"></div>
                                                                </div>
                                                                <div class="text mb-2">
                                                                    <p
                                                                        class="d-inline-flex align-items-center st-text-primary st-fw-600 cursor-pointer">
                                                                        <svg width="15" height="15" viewBox="0 0 24 24"
                                                                            fill="none" stroke="currentColor"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-plus icon">
                                                                            <g>
                                                                                <line x1="12" y1="5" x2="12" y2="19">
                                                                                </line>
                                                                                <line x1="5" y1="12" x2="19" y2="12">
                                                                                </line>
                                                                            </g>
                                                                        </svg>
                                                                        <span class="ms-2">Add Email Address</span>
                                                                    </p>
                                                                </div>
                                                                <div class="btns d-flex pt-1"><button
                                                                        class="st-btn st-btn-primary st-btn-sm me-2 ">Save</button><button
                                                                        class="st-btn st-btn-link st-btn-sm no-min-width">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
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