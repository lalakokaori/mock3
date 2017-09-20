populate_emp("#OM");
populate_emp("#PI");
populate_emp("#Materials");
populate_emp("#Foreman");
populate_emp("#Warehouse");
populate_emp("#Equipment-in-Charge");
populate_emp("#Safety");
populate_emp("#Timekeeper");



function saves()
{

swal({
  title: "Save And proceed?",
  text:"Make sure your input are all correct",
  type: "info",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes",
  cancelButtonText: "No",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {

		var name =$('#proj_name').val();
		var code =$('#proj_code').val();
		var location =$('#proj_location').val();
		var award =$('#proj_award').val();
		var target =$('#date_target').val();
		var ntp =$('#proj_ntp').val();
		var start =$('#proj_start').val();

		var dataString ='name='+name+'&code='+code+'&location='+location+'&award='+award+'&target='+target+'&ntp='+ntp+'&start='+start;
		console.log(dataString);

		swal("", "Saved", "success");

		$.ajax ({
			type: "POST",
			url: "../../../model/transaction/project.php",
			data: dataString,
			dataType: 'json',
			cache: false,
			success: function(s){
				//alert("shit");
				window.location="../../../view/transaction/PM/main.php";
//				 window.location="main.php";
			 }
		});



  } else {
    swal("", "Cancelled", "error");
  }
});

}

function populate_emp(selector){
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/employee/populate_table_main.php",
			  dataType: 'json',
			  cache: false,
			  success: function(s){
			  		var c = $(selector);
			        c.empty();
			        c.html('<option selected="selected" value="none">--Employee--</option>');
			        for(var i = 0; i < s.length; i++) {
			        c.append('<option value='+s[i][0]+'>'+s[i][1]+'</option>');
			        }


			  }
			});
		}

