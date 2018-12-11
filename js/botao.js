$(document).ready(function(){
	$(".container-remove").hide();
	$(".container-edit").hide();
	$(".container-vision").hide();
	$(".config").click(function() {
		a= $(this).attr('id');
		var id = a - 1;
		$("tbody").find("tr").eq(id).find(".container-remove").toggle(500);
		$("tbody").find("tr").eq(id).find(".container-edit").toggle(500);
		$("tbody").find("tr").eq(id).find(".container-vision").toggle(500);
		$("tbody").find("tr").eq(id).find(".container-remove").toggleClass("open-remove");
		$("tbody").find("tr").eq(id).find(".container-edit").toggleClass("open-edit");
		$("tbody").find("tr").eq(id).find(".container-vision").toggleClass("open-vision");
		$("tbody").find("tr").eq(id).find(".config i").toggleClass("fa-cogs");
		$("tbody").find("tr").eq(id).find(".config i").toggleClass("fa-times");
	});
});