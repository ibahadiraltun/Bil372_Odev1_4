$(document).on('click','#btn-add',function(e) {
  var data = $("#user_form").serialize();
  console.log(data)
  $.ajax({
    data: data,
    type: "post",
    url: "./save.php",
    success: function(dataResult){
        console.log(dataResult)
        var dataResult = JSON.parse(dataResult);
        if(dataResult.statusCode==200){
          $('#addEmployeeModal').modal('hide');
          alert('Data added successfully !'); 
                      location.reload();						
        }
        else if(dataResult.statusCode==201){
           alert(dataResult);
        }
    }
  });
});
$(document).on('click','.update',function(e) {
  var id=$(this).attr("data-id");
  var name=$(this).attr("data-name");
  var email=$(this).attr("data-email");
  var phone=$(this).attr("data-phone");
  var city=$(this).attr("data-city");
  $('#id_u').val(id);
  $('#name_u').val(name);
  $('#email_u').val(email);
  $('#phone_u').val(phone);
  $('#city_u').val(city);
});
$(document).on('click','#update',function(e) {
  var data = $("#update_form").serialize();
  $.ajax({
    data: data,
    type: "post",
    url: "./save.php",
    success: function(dataResult){
        console.log(dataResult)
        var dataResult = JSON.parse(dataResult);
        if(dataResult.statusCode==200){
          $('#editEmployeeModal').modal('hide');
          alert('Data updated successfully !'); 
                      location.reload();						
        }
        else if(dataResult.statusCode==201){
           alert(dataResult);
        }
    }
  });
});
$(document).on("click", ".delete", function() { 
  var id=$(this).attr("data-id");
  var syscode = $(this).attr("data-syscode");
  $('#id_d').val(id);
  $('#syscode_d').val(syscode);
});
$(document).on("click", "#delete", function() {
  data = {
    type:3,
    id: $("#id_d").val(),
    syscode: $("#syscode_d").val()
  }
  console.log(data)
  $.ajax({
    url: "./save.php",
    type: "POST",
    cache: false,
    data,
    success: function(dataResult){
        $('#deleteEmployeeModal').modal('hide');
        $("#"+dataResult).remove();
    
    }
  });
});
$(document).on("click", "#delete_multiple", function() {
  var user = [];
  $(".user_checkbox:checked").each(function() {
    var id = $(this).data('user-id');
    var syscode = $(this).data('syscode');
    user.push(`(${id}, ${syscode})`);
  });
  console.log(user)
  if(user.length <=0) {
    alert("Please select records."); 
  } 
  else { 
    WRN_PROFILE_DELETE = "Are you sure you want to delete "+(user.length>1?"these":"this")+" row?";
    var checked = confirm(WRN_PROFILE_DELETE);
    if(checked == true) {
      var selected_values = user.join(",");
      console.log(selected_values);
      $.ajax({
        type: "POST",
        url: "./save.php",
        cache:false,
        data:{
          type: 4,						
          id : selected_values
        },
        success: function(response) {
          $(".user_checkbox:checked").each(function() {
            var id = $(this).data('user-id');
            var syscode = $(this).data('syscode');
            $("#"+id).remove();
          });        
        } 
      }); 
    }  
  } 
});
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
  var checkbox = $('table tbody input[type="checkbox"]');
  $("#selectAll").click(function(){
    if(this.checked){
      checkbox.each(function(){
        this.checked = true;                        
      });
    } else{
      checkbox.each(function(){
        this.checked = false;                        
      });
    } 
  });
  checkbox.click(function(){
    if(!this.checked){
      $("#selectAll").prop("checked", false);
    }
  });
});
