$(document).ready(function(){
	$("#menumain ul a").click(function(){
		page=$(this).attr("href");
		$.ajax({
			url: "content/"+page,
			cache:false,
			success:function(html){
				afficher(html);
			},
			error:function(XMLHttpRequest,textStatus,errorThrown){
				alert(textStatus);
			}
		})
		return false;
	});
});

function afficher(data){
	$("#content").empty();
	$("#content").append(data);
}z