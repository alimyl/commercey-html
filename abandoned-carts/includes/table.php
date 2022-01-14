<!-- <div class="st-table">
    <div class="st-table-head">
        <div class="st-table-row">
            <div class="st-table-cell">

            </div>
            
        </div>
    </div>
</div> -->

<table class="mb-0 table">
    <thead>
        <tr>
            <!-- <th width="35">
                <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer">
                    <input
                        type="checkbox"
                        class="d-none" 
                    />
                    <span class="box d-flex align-items-center justify-content-center border" style="height: 17px; width: 17px">
                        <i class="feather-check st-fs-11 icon position-relative"></i>
                    </span>
                </label>
            </th> -->
            <th>
                <p class="text-capitalize">
                    User Email
                </p>
            </th>

            <th>
                <p class="text-capitalize">
                    Order Date
                </p>
            </th>

            <th>
                <p class="text-capitalize">
                    Cart Items
                </p>
            </th>

            <th>
                <p class="text-capitalize">
                    Total
                </p>
            </th>

            <th width="90"></th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <!-- <td class="column__checkbox">
                <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer">
                    <input
                        type="checkbox"
                        class="d-none" 
                    />
                    <span class="box d-flex align-items-center justify-content-center border" style="height: 17px; width: 17px">
                        <i class="feather-check st-fs-11 icon position-relative"></i>
                    </span>
                </label>
            </td> -->

            <td class="column__userEmail">
                <a 
                    class="st-text-primary st-fs-15 hover-underline-link" 
                    href="http://localhost:4001/store/ruhstaging/my-sales/abandoned-carts/view.php">asd@as.com</a>
            </td>

            <td class="column__orderDate">
                <p class="">Jan 07, 2022 03:15 AM</p>
            </td>

            <td class="column__cartItems text-end">
                <p class="">1x</p>
            </td>

            <td class="column__total text-end">
                <p class="">$36.00</p>
            </td>
            
            <td class="column__actions">
                <div class="d-flex justify-content-end">
                    <a 
                        href="http://localhost:4001/store/ruhstaging/my-sales/abandoned-carts/view.php"
                        class="st-round-btn st-btn-transparent st-btn-xs d-flex align-items-center justify-content-center"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="View">
                        <i class="feather-eye icon"></i>                    
                    </a>
                </div>
            </td>
        </tr>
    </tbody>
</table>