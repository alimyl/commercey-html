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
            <th>
                <p class="text-capitalize">
                    Title
                </p>
            </th>

            <th>
                <p class="text-capitalize">
                    Author
                </p>
            </th>

            <th>
                <p class="text-capitalize">
                    Status
                </p>
            </th>

            <th>
                <p class="text-capitalize">
                    Date Added
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

            <td class="column__title"><p class="">Title</p></td>

            <td class="column__author"><p class="">Author</p></td>

            <td class="column__status"><p class="">Status</p></td>

            <td class="column__date-added"><p class="">Date Added</p></td>
            
            <td class="column__actions">
                <div class="d-flex justify-content-end">
                    <a 
                        href="http://localhost/VEZIRE/commercey-html/blogs/edit.php"
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