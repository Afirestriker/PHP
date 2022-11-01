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



    <div id="addUserModal" class="modal fade">
      <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add User Group</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="get">
                        <label for="Group Name" class="py-2">Group Name</label><br>
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

    <div id="editUserModal" class="modal fade">
      <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User Group</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="get">
                        <label for="Group Name" class="py-2">Group Name</label><br>
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


    <script>
        
        var userGroupData = [
            {id:"05", createdOn:"22/09/2020 13:32:03", groupName:"Suryalogix IT", createdBy:"Suryalog1248_Suryalog448", active_inactive:"1"},
            {id:"06", createdOn:"24/09/2020 18:12:46", groupName:"test588", createdBy:"Suryalog1248_Suryalog448", active_inactive:"1"}
        ];

        //custom formatter definition
        var statusIcon = function(cell, formatterParams, onRendered){ //plain text value
            return `<div class="material-symbols-outlined fs-2 text-success" title="status On">Toggle_on</div>`;
        };

        

        //custom formatter definition
        var actionIcon = function(cell, formatterParams, onRendered){ //plain text value
            return `<button class="btn border border-secondary p-0 material-symbols-outlined" data-bs-toggle="modal" data-bs-target="#editUserModal" title="edit">Edit</button>` +
                   `<button class="btn border border-secondary p-0 m-1 material-symbols-outlined" title="User List">person_filled</button>` +
                   `<button class="btn border border-secondary p-0 material-symbols-outlined" title="Deactive">Block</button>`;
        };

        let userGroupTabular = new Tabulator("#userGroupTabulator", {
            layout:"fitColumns",
            height:"600px",
            addRowPos:"top",

            pagination:"local",       //paginate the data
            paginationSize:20,         //allow 7 rows per page of data
            
            data: userGroupData,
            columns:[
            {title:"SN", field:"id", headerHozAlign:"center", hozAlign:"center", tooltip:true},
            {title:"Created On", field:"createdOn", headerHozAlign:"center", hozAlign:"center", tooltip:true},
            {title:"Group Name", field:"groupName", headerHozAlign:"center", hozAlign:"center", tooltip:true},
            {title:"Created By", field:"createdBy", headerHozAlign:"center", hozAlign:"center", tooltip:true},
            {title:"Active", formatter:statusIcon, headerHozAlign:"center", hozAlign:"center"},
            {title:"Action", formatter: actionIcon, headerHozAlign:"center", hozAlign:"center"}
            
            //column definition in the columns array
            // {formatter:printIcon, width:40, align:"center", title:"Action"},
        ],
    });
    </script>
</body>
</html>