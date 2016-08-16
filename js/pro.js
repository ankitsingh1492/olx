$('#search').keyup(function(){
   var search_term = $(this).val();
   	$.post ('./profile/find.php', {search_term: search_term }, function(data){
   	// display results
   		$('#update').html(data);
   });
});