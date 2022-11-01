<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Tabulator CDN -->
    <link href="https://unpkg.com/tabulator-tables/dist/css/tabulator.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables/dist/js/tabulator.min.js"></script>

    <!-- Google Material CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
    <!-- Google JQuery CDN for Pre-Filled Edit modal -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    
    <style>
        #userGroupTabulator .tabulator-headers {
            color: green;
        }
        #userGroupTabulator .tabulator-col{
            background-color: lightyellow;
        }
    </style>

    <title>User_Group</title>
</head>
<body>

    <div class="m-5 p-4 border">
        <div class="text-end mb-3">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">Add User Group</button>
        </div>

        <div class="border border-3">
            <!-- Custom Styling for this tabulator is set in the head tag above -->
            <div id="userGroupTabulator"></div>
        </div>
    </div>


    <!-- Add User Group Modal -->
    <div id="addUserModal" class="modal fade">
      <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add User Group</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url("index.php/UserGroup_controller/addUserGroup"); ?>" method="get">
                        <label for="Group Name" class="py-2">Group Name</label>
                        <input type="text" class="form-control" name="groupName" placeholder="Group Name" required>
                </div>
                <div class="modal-footer">
                        <input class="btn btn-primary" type="submit" value="Submit">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit User Group Modal -->
    <div id="editUserModal" class="modal fade">
      <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User Group</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url("index.php/UserGroup_controller/editUserGroup"); ?>" method="get">
                        <input type="hidden" id="sn" name="sn" value="">
                        <label for="Group Name" class="py-2">Group Name</label>
                        <input type="text" id="groupName" class="form-control" name="groupName" placeholder="Group Name" required>
                </div>
                <div class="modal-footer">
                        <input class="btn btn-primary" type="submit" value="Submit">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<!-- JavaScript Starts Here -->
    <script>
        
        const userGroupData = [
            <?php 
                foreach($userGroups as $userGroup){?>
                    {id:"<?= $userGroup["sn"]; ?>", createdOn:"<?= $userGroup["created_on"]; ?>", groupName:"<?= $userGroup["group_name"]; ?>", createdBy:"<?= $userGroup["created_by"] ?>", active_inactive:"<?= $userGroup["active"] ?>"},
                <?php 
            }?>
        ];

        

        //custom formatter definition
        const statusIcon = function(cell, formatterParams, onRendered){ //plain text value
            // using cell.getData().fieldName statement we are fetching current row data and 
            let activeStatus = parseInt(cell.getData().active_inactive);
            if(activeStatus === 1)
            { 
                return `<div class="form-check form-switch" style="margin-left:40%"> <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked> </div>`;
            }else if (activeStatus === 0)
            {
                return `<div class="form-check form-switch" style="margin-left:40%"> <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"> </div>`;
            }
        };

        //custom formatter definition
        const actionIcon = function(cell, formatterParams, onRendered){ //plain text value
            return `<button class="btn border border-secondary p-0 material-symbols-outlined" data-id="`+cell.getData().id+`" data-groupName="`+cell.getData().groupName+`"data-bs-toggle="modal" data-bs-target="#editUserModal" title="edit">Edit</button>` +
                   `<button class="btn border border-secondary p-0 m-1 material-symbols-outlined" title="User List">person_filled</button>` +
                   `<button class="btn border border-secondary p-0 material-symbols-outlined" title="Deactive">Block</button>`
        };
 
        const userGroupTabular = new Tabulator("#userGroupTabulator", {
            layout:"fitColumns",
            height:"600px",
            addRowPos:"top",

            pagination:"local",       //paginate the data
            paginationSize:20,         //allow 20 rows per page of data
            
            data: userGroupData,
            columns:[
            {title:"SN", field:"id", headerHozAlign:"center", hozAlign:"center", tooltip:true},
            {title:"Created On", field:"createdOn", headerHozAlign:"center", hozAlign:"center", tooltip:true},
            {title:"Group Name", field:"groupName", headerHozAlign:"center", hozAlign:"center", tooltip:true},
            {title:"Created By", field:"createdBy", headerHozAlign:"center", hozAlign:"center", tooltip:true},
            /* Here, instead of passing a static string, we are using Formatter. That will call a function and render HTML */
            {title:"Active", formatter:statusIcon, headerHozAlign:"center", hozAlign:"center"},
            {title:"Action", formatter: actionIcon, headerHozAlign:"center", hozAlign:"center"}
            
            //column definition in the columns array
            // {formatter:printIcon, width:40, align:"center", title:"Action"},
        ],
    });


    /* JavaScript Code - for Pre-Filled Edit Modal */
    /* NOTE: Google Jquery Script is requried for this, which is imported in head section of this HTML Document. */
    const editModal = document.getElementById("editUserModal");
    
    editModal.addEventListener("show.bs.modal", function(event){
        let btn = $(event.relatedTarget);
        let id_groupName = btn.data('id');
        let name_groupName = btn.data("groupName");
        $(this).find(".modal-body #sn").val(id_groupName);
        $(this).find(".modal-body #groupName").val(name_groupName); 
    })

    </script>
</body>
</html> 