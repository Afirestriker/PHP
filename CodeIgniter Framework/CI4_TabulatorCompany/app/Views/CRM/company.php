<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company List</title>

    <!-- Bootstraph CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Bootstrpah CDN for Toggle Switch -->
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Font-Awesome CDN -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Tabulator CDN -->
    <link href="https://unpkg.com/tabulator-tables@5.2.3/dist/css/tabulator.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://unpkg.com/tabulator-tables@5.2.3/dist/js/tabulator.min.js"></script>

    <!-- Google Jquery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Form Validate CDN  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    <!-- Custom Style for Company Tabulator -->
    <style>
        #companyTabulator .tabulator-headers {
            color: green;
        }
        #companyTabulator .tabulator-col{
            background-color: lightyellow;
        }

        /* Form validate text color in red */
        .error{
            color: #a34149;
        }

    </style>

</head>
<body>

    <div id="liveBar" class="m-5 my-5">
        <div class="fs-2"><i class="fas fa-home"></i> Company</div>
    </div>

    <div class=" m-5 px-0">
        
        <!-- Company tabulator nav-bar -->
        <header class="py-2 pb-3 px-2 border border-2"> 
            <span class="fs-5"><i class="fas fa-cog"></i> Company List </span>
            <div class="float-end">
                <div class="input-group">
                    <div class="form-check">
                        <input type="checkbox" id="cbDeactive" class="form-check-input">Deactivate
                    </div>
                    
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                    <input type="text" id="tSearch" placeholder="search" aria-label="Username" aria-describedby="basic-addon1">
                    <div type="button" id="btnAddCompany" class="btn btn-sm btn-primary">Add Company</div>
                </div>
            </div>
        </header>

        <!-- Company Tabulator Loads here -->
        <div class="p-3 border border-2 border-top-0"> 
            <div id="companyTabulator"></div>
        </div>
    </div>

</body>
</html>

<!--Start: Add Company Modal -->
<div id="companyModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
                <h5 id="mTitle" class="modal-title" style="font-weight:bold;">Add Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="frmCompany" action="#" method="post" class="smart-form">
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col col-6">
                            <input type="hidden" id="company_id" name="company_id" value="0">
                            <span><i class="fas fa-building"></i></span>
                            <label class="form-label">Company Name</label>
                            <input type="text" id="companyName" name="companyName" placeholder="Company Name" maxlength="32">
                        </div>
                        <div class="col col-6">                        
                            <span><i class="fas fa-keyboard"></i>
                            <label class="form-label">GST Number</label>
                            <input type="text" id="GSTNumber" name="GSTNumber" placeholder="GST Number" maxlength="16"> 
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col col-6">                        
                            <span><i class="fas fa-phone"></i></span>
                            <label class="form-label">Contact Number</label>
                            <input type="number" id="contactNumber" name="contactNumber" placeholder="Contact Number">
                        </div>
                        <div class="col col-6">                        
                            <span><i class="fas fa-envelope"></i>
                            <label class="form-label">Email</label>
                            <input type="email" id="companyEmail" name="companyEmail"  placeholder="Email" maxlength="32"> 
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col col-6">                        
                            <span><i class="fas fa-map-marker-alt"></i>
                            <label class="form-label">Net Worth</label>
                            <input type="number" id="netWorth" name="netWorth" placeholder="Net Worth" maxlength="16"> 
                        </div> 
                        <div class="col col-6">                        
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <label class="form-label">Address 1</label>
                            <input type="text" id="addr1" name="addr1" placeholder="Address 1">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col col-6">                        
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <label class="form-label">Address 2</label>
                            <input type="text" id="addr2" name="addr2"  placeholder="Address 2" maxlength="48">
                        </div>                                       
                        <div class="col col-6">                        
                            <span><i class="fas fa-map-marker-alt"></i>
                            <label class="form-label">City</label>
                            <input type="text" id="city" name="city" placeholder="City" maxlength="32">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col col-6 ">                        
                            <span><i class="fas fa-map-marker-alt"></i>
                            <label class="form-label">State</label>
                            <input type="text" id="state" name="state" placeholder="State" maxlength="48">
                        </div>                    
                        <div class="col col-6">                        
                            <label class="form-label">Country</label>
                            <select id="country" name="country" >
                                <option selected disabled>Select an Country</option>
                                <?php foreach($countries as $C_id => $C_Value) {?>
                                        <option value="<?= $C_id ?>"><?= $C_Value;?></option>
                                    <?php  
                                }?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col col-6">
                            <span><i class="fas fa-map-marker-alt"></i>
                            <label class="form-label">Zip</label>
                            <input type="number" id="zip" name="zip" placeholder="Zip" min="0" max="999999">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End: Add Company Modal -->

<script src= <?= base_url("public/js/company.js");?>></script>

<!-- JavaScript -->
<script>

    var dbCompanyTableData = <?= json_encode($companyData); ?>;
    var dbCountries         = <?= json_encode($countries);   ?>;

    /* checkbox deactivate toggle event */
    $("#cbDeactive").change(function() {
        drawCompanyTabulator();
    });
    
    /*Starts: Search Filter */
    $('#tSearch').keyup(function()
    {
        setSLAFilter($('#tSearch').val());
    });

    function setSLAFilter(uText)
    {
        companyTabulator.setFilter(matchAny, {value:uText});
    }

    function matchAny(data, filterParams)
    {
        var match = false;
        
        for(var key in data)
        {
            if(!isNaN(data[key])) continue;
            
            if(data[key] == undefined) continue;
            
            if ((data[key].toUpperCase()).includes(filterParams.value.toUpperCase()) > 0)
            {
                match = true;
            }
        }

        return match;
    }
    /*Ends: Search Filter */

    /* Add button event */
    $('#btnAddCompany').click(function(){
        //reset form validations before displaying
        $("#frmCompany").validate().resetForm();
		$('#frmCompany .error').each(function() {
            $(this).removeClass('error');
        });

        $('#frmCompany').trigger("reset");
        $('#frmCompany').attr("action", "<?=base_url("public/Company_controller/addCompanyData");?>");
        $('#company_id').val(0);
         $('#mTitle').text("Add Company");
        $('#companyModal').modal("show");
    });

    /* Edit Row data event */
    $('#companyTabulator').on("click", "#btnEdit", function(){

        //reset form validations before displaying
        $("#frmCompany").validate().resetForm();
        $('#frmCompany .error').each(function() {
            $(this).removeClass('error');
        });
        
        /* get whole tabulator data and then the  editBtn val on which the click event is fired, and then using it we will fetch the entire data of current cell */
        let edit_cid = $(this).val();
        // var getAllRowData = companyTabulator.getData();
        let getIndex = function (){
            for(let i=0; i<companyTabulator.getData().length; i++){
                if(edit_cid == companyTabulator.getData()[i]["serial"])
                    return i;
            }
        };
        var getRowData = companyTabulator.getData()[getIndex()];
        
   
        /**
         * Test, whether we are getting currnet row data
         */
        //var getCName = getRowData.cname; 
        //debugger;

        $('frmCompany').trigger("reset");
        $('#frmCompany').attr("action", "<?=base_url("public/Company_controller/editCompanyData");?>");
        
        $('#mTitle').text("Edit Company");

        $('#company_id').val(getRowData.serial);
        $('#companyName').val(getRowData.cname);
        $('#companyEmail').val(getRowData.cemail);
        $('#contactNumber').val(getRowData.cmobile);
        $('#GSTNumber').val(getRowData.cGST);
        $('#addr1').val(getRowData.addr1);
        $('#netWorth').val(getRowData.netWorth);
        $('#addr2').val(getRowData.addr2);
        $('#city').val(getRowData.city);
        $('#state').val(getRowData.state);
        $('#country').val(getRowData.country_name);
        $('#zip').val(getRowData.zip);
        
        $('#companyModal').modal("show");

    });


    /* Row Btn-Deactive/Activate click event */
    $('#companyTabulator').on("click", "#btnDeactivate", function(){


        /* get whole tabulator data and then the  editBtn val on which the click event is fired, and then using it we will fetch the entire data of current cell */
        let edit_cid = $(this).val();
        // var getAllRowData = companyTabulator.getData();
        let getIndex = function (){
            for(let i=0; i<companyTabulator.getData().length; i++){
                if(edit_cid == companyTabulator.getData()[i]["serial"])
                    return i;
            }
        };
        var getRowData = companyTabulator.getData()[getIndex()];
        
        var companyId 	= getRowData.serial;
        var cStatus   	= ((getRowData.active == 0) ? 1:0);
        
        var currentStatus 	= (cStatus == 0 ) ? 'Deactivate':'Activate';
        var operType 	= (cStatus == 0 ) ? 'Deactivated':'Activated';

        if(!confirm(currentStatus+"? Are you Sure")) return;
        
        $.ajax(
        { 
            url			: "<?= base_url("public/Company_controller/update_company_status")?>",
            type		: "post",
            data		: {'cId':companyId,'cStatus':cStatus},
            success		: function(response) 
            {
                if(response == 1)
                {
                    alert("Company "+operType+" Successfully...!");
                    window.location.href = "<?=base_url("public/Company_controller")?>",
                    $('#CompanyModal').modal('hide');
                }
                else alert('Company '+operType+' failed....!');

                $(".frmCompany").trigger('reset');		  
            }            
        });

        // continue next from here
    });

    
    /* Form validation */
    $("#frmCompany").validate({
        rules: 
        {
            companyName:
            {
                required	: true,  
                maxlength	: 32,
            }, 						 
            GSTNumber:
            {
                required	: true,
                maxlength	: 16,
            },
            contactNumber:
            {
                required	: true,
                minlength	: 10,
                maxlength	: 16,
            },	
            companyEmail:
            {
                required	: true, 
                maxlength	: 32,
            },
            netWorth:{
                required    : true,
                maxlength   : 50,
            },
            addr1:
            {
                required	: true, 
                maxlength	: 48,
            },	
            addr2:
            {
                required	: true,    
                maxlength	: 48,
            },
            city:
            {
                required	: true, 
                maxlength	: 32,
            },	
            state:
            {
                required	: true,
                maxlength	: 48,
            },	
            country:
            {
                required	: true,         
            },
            zip:
            {
                required	: true,
                minlength	: 6,
                maxlength	: 6,
            },	
                            
        },
        messages:
        {
            companyName: 
            {
                required    : "Enter company name",		
            },
            GSTNumber: 
            {
                required    : "Enter GST number",
            },
            contactNumber: 
            {
                required	: "Enter Contact number",		  
            },
            companyEmail: 
            {
                required	: "Enter Email",		  
            },
            netWorth:{
                required    : "Enter Net Worth Value",
            },
            addr1: 
            {
                required	: "Enter address1",		 
            },
            addr2: 
            {
                required	: "Enter address2",		 
            },
            city: 
            {
                required    : "Enter City",				
            },
            state: 
            {
                required	: "Enter State",		
            },
            country: 
            {
                required	: "Select Country",		  
            },
            zip: 
            {
                required	: "Enter Zip",		  
            },
        }
    });


    drawCompanyTabulator();

</script>
