$(function(){
	$('#myForm').ajaxForm({
       beforeSend:function(){},
       uploadProgress:function(){},
       success:function(){},
       complete:function(response){
       	if(response.responseText=='0')
       		$(".iimage").html(response.responseText);
       		else	
       	
              $(".iimage").html("<img src='"+response.responseText+"'width='100%'/>")
               alert("Image uploaded :)");
       }
	});
});
