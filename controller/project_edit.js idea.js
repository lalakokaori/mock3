	reset();
	populate_table_main("#table_main","../../../model/project_edit/populate_table_main.php");
	populate_table_main("#table_submain","../../../model/project/populate_table_main.php");
	$('#btn_save').val('create');



/*  var table_main = $('#table_main').dataTable({
    "aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
    "aaSorting": []
  });  //Initialize the datatable
    var table_submain = $('#table_submain').dataTable({
    "aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
    "aaSorting": []
  }); */

function populate_table_main(selector,model){
	//selector selects the table id 
	//model is the query use to generate the table
	//ajax now

	$.ajax ({
	  type: "POST",
	  url: model,
	  dataType: 'json',
	  cache: false,
	  success: function(s)
	  {
	 var c = $(selector).dataTable({
    "aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
    "aaSorting": []});

      	// console.log(s)
	    c.fnClearTable();
	    for(var i = 0; i < s.length; i++)
	    {

	    	//if(s[i][2]=='inactive'){enability='disabled'}

	      c.fnAddData
	      ([s[i][0],s[i][1],s[i][2],s[i][3],s[i][4],


	      	'<a href="../../../view/transaction/steps/main.php" onclick="" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs  btn-primary" title="Delete"> <i class="fa fa-trash"></i>Project</a>'+'   '+
	      	'<a href="../../../view/transaction/part-trans/main.php?contract='+s[i][0]+'" data-toggle="modal" class="btn btn-xs  btn-primary" title="Delete"> <i class="fa fa-trash"></i>set Schedule</a>'+'   '+
	      	'<a href="../../../view/transaction/steps/main_team.php" onclick="" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs  btn-primary" title="Delete"> <i class="fa fa-trash"></i>Set team</a>'
	      ],false);
	      c.fnDraw();

	    }
	  }
	});
	//ajax end
} //


function table_row_view(id){
	reset();
	$("#myModal").modal("show");
		//ajax now
	$.ajax ({
	  type: "POST",
	  url: "../../../model/project/fetch.php",
	  data: 'id='+id,
	  dataType: 'json',
	  cache: false,
	  success: function(s){
	  	$('#btn_save').val(id);
	  	$('#f_ID').val(id);
		$('#f_name').val(s[0][1]);
	  	$('#f_cont').val(s[0][3]);
	  	$('#f_add').val(s[0][4]);
	  	$('#f_job').val(s[0][2]);
	  	$('#f_email').val(s[0][5]);
	  }
	});
	//ajax end
}



$('#btn_reset').click(function(){ reset(); tae();})

function validate_form(){
	err = false;

	if($('#f_ID').val()==''){
		err = true;
		$('#f_ID_div').addClass('has-error');
	}
	else
		$('#f_ID_div').removeClass('has-error');
	if($('#f_name').val()==''){
		err = true;
		$('#f_name_div').addClass('has-error');
	}
	else
		$('#f_name_div').removeClass('has-error');
	if($('#f_cont').val()==''){
		err = true;
		$('#f_cont_div').addClass('has-error');
	}
	else
		$('#f_cont_div').removeClass('has-error');
	if($('#f_email').val()==''){
		err = true;
		$('#f_email_div').addClass('has-error');
	}
	else
		$('#f_email_div').removeClass('has-error');

	return err;
}


function reset(){
	$('#btn_save').val('create');
	//tae('All fields of '+$('#f_job').val()+' has been cleared')
	$('#f_ID').val('');
	$('#f_name').val('');
	$('#f_cont').val('');
	$('#f_email').val('');
	//$('#modal_user_type').


	$('#f_ID_div').removeClass('has-error');
	$('#f_name_div').removeClass('has-error');
	$('#f_cont_div').removeClass('has-error');
	$('#f_email_div').removeClass('has-error');



}



function tae()
{


swal({

title: "Cleared",
  text: "Will close in 1 second",
  type: "success",
  timer: 1000,
  showConfirmButton: false


});



}

function table_row_del(id){
//sweet start
swal({
  title: "Do you want to Delete?",


  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Delete",
  cancelButtonText: "Cancel",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    swal("Deleted!", "Data Deleted", "success");
  	//ajax  start
  	$.ajax ({
		type: "POST",
		url: "../../../model/project/delete.php",
		data: 'id='+id,
		dataType: 'json',
		cache: false,
		success: function(s){}
	});
	//ajax end
		reset();
		populate_table_main();

  } else {
    swal("Cancelled", "User Cancelled", "error");
  }
});




}






$('#btn_save').click(function(){

	if(validate_form()==true){}
	else{

		var ID = $('#f_ID').val();
		var name = $('#f_name').val();
		var job = $('#f_job').val();
		var contact = $('#f_cont').val();
		var email = $('#f_email').val()
		var address = $('#f_add').val();
		var dataString = 'ID='+ID+'&name='+name+'&job='+job+"&email="+email+"&contact="+contact+"&address="+address;




		console.log(dataString);

		if(this.value=='create'){ //CREATE MODE
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/project/create.php",
			  data: dataString,
			  dataType: 'json',
			  cache: false,
			  success: function(s){	}
			});
			//ajax end
		  	//alert('Saved');

swal({

title: "Saved",
  text: "Will close in 1 seconds.",
  type: "success",
  timer: 1200,
  showConfirmButton: false


});
		  	reset();
				$("#myModal").modal("hide");
		  	populate_table_main();
		}
		else{ //UPDATE MODE
			var id = this.value;
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/project/update.php",
			  data: dataString+'&id='+id,
			  dataType: 'json',
			  cache: false,
			  success: function(s){}
			});
			//ajax end
		  	swal({

title: "Updated",
  text: "Will close in 1 seconds.",
  type: "success",
  timer: 1200,
  showConfirmButton: false


});
		  	reset();
				$("#myModal").modal("hide");
		  	populate_table_main();
		}
	}



})
