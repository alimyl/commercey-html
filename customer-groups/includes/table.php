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
            <th width="35">
                <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer">
                    <input
                        type="checkbox"
                        class="d-none" 
                    />
                    <span class="box d-flex align-items-center justify-content-center border" style="height: 17px; width: 17px">
                        <i class="feather-check st-fs-11 icon position-relative"></i>
                    </span>
                </label>
            </th>

            <th data-st-table-for="column__groupName">
                <p class="text-capitalize">
                    Group
                </p>
            </th>

            <th data-st-table-for="column__discountPercent">
                <p class="text-capitalize">
                    Discount Percent
                </p>
            </th>

            <th data-st-table-for="column__discountValue">
                <p class="text-capitalize">
                    Discount Value
                </p>
            </th>

            <th data-st-table-for="column__twoFactor">
                <p class="text-capitalize">
                    Two Factors
                </p>
            </th>

            <th data-st-table-for="column__status">
                <p class="text-capitalize">
                    Status
                </p>
            </th>
            <th width="90"></th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td class="column__checkbox">
                <label class="st-checkbox st-checkbox-primary d-inline-flex cursor-pointer">
                    <input
                        type="checkbox"
                        class="d-none" 
                    />
                    <span class="box d-flex align-items-center justify-content-center border" style="height: 17px; width: 17px">
                        <i class="feather-check st-fs-11 icon position-relative"></i>
                    </span>
                </label>
            </td>

            <td class="column__groupName" data-st-table-for="column__groupName">
                <p class="">Normal</p>
            </td>

            <td class="column__discountPercent" data-st-table-for="column__discountPercent">
                <p class="">Yes</p>
            </td>

            <td class="column__discountValue" data-st-table-for="column__discountValue">
                <p class="">0</p>
            </td>

            <td class="column__twoFactor" data-st-table-for="column__twoFactor">
                <p class="text-capitalize">Active</p>
            </td>

            <td class="column__status" data-st-table-for="column__status">
                <p class="text-capitalize">Inactive</p>
            </td>
            
            <td class="column__actions">
                <div class="d-flex justify-content-end">
                    <a
                        href="http://localhost/commercey-html/customer-groups/edit.php" 
                        class="st-round-btn st-btn-transparent st-btn-xs d-flex align-items-center justify-content-center me-1"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Edit">
                        <i class="feather-edit-2 icon"></i>                    
                    </a>

                    <button 
                        class="st-round-btn st-btn-transparent st-btn-xs d-flex align-items-center justify-content-center"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Delete">
                        <i class="feather-trash icon"></i>                    
                    </button>
                </div>
            </td>
        </tr>
    </tbody>
</table>