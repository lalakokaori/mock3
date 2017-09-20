
populate_client()

function populate_client(selector){
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/client/populate_table_main.php",
			  dataType: 'json',
			  cache: false,
			  success: function(s){
			  		var c = $('#client');
			        c.empty();
			        c.html('<option selected="selected" value="none">--Client--</option>');
			        for(var i = 0; i < s.length; i++) {
			          let iselected = '';
			          if(s[i][0] == selector){ iselected='selected' }
			          c.append('<option value='+s[i][0]+'>'+s[i][1]+'</option>');
			        }


			  }
			});
		}


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

		var cont_id =$('#cont_id').val();
		var client =$('#client').val();
		var name =$('#cont_name').val();
		var day =$('#cont_day').val();
		var amount =$('#cont_amount').val();
		var user =$('#user_id-hide').val();
		var start =$('#cont_start').val();
		var ref =$('#cont_ref').val();
		//var period =$('#cont_period').val();


		var dataString ='cont_id='+cont_id+'&client='+client+'&name='+name+'&day='+day+'&amount='+amount+'&user='+user+'&ref='+ref+'&start='+start ;
		
		console.log(dataString);

		swal("", "Saved", "success");

		$.ajax ({
			type: "POST",
			url: "../../../model/transaction/contract.php",
			data: dataString,
			dataType: 'json',
			cache: false,
			success: function(s){
				 window.location="main.php";
			 }
		});



  } else {
    swal("", "Cancelled", "error");
  }
});

}

$(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" style="margin-bottom:20px;">-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    

    
});

