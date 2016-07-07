$(document).ready(function(){

$('#Display').load('display_page.php');

});

function get(){

	$.post('process_insertpage.php', { name: insertpage.page.value },

		function(output){
			$('#Display').load('display_page.php');


		});
}

function del(id){

	$.post('delete_pages.php', { hid: id },

		function(output){
			$('#Display').load('display_page.php');


		});


}
function editor(id){
	window.location.assign("http://localhost/CMS/Functions/test.php?id="+id)
}