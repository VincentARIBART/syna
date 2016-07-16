$(function(){
	$('#btn-menu').on('click', function(){
		$('#menumain').toggleClass('left');
		$('#topbar').toggleClass('tpleft');
		$('#content').toggleClass('cleft');
	});

});
$(window).resize(function () {
    var viewportWidth = $(window).width();
    if (viewportWidth < 768) {
            $("#menumain").addClass("left");
            $('#topbar').addClass('tpleft');
			$('#content').addClass('cleft');
    }
    else {
            $("#menumain").removeClass("left");
            $('#topbar').removeClass('tpleft');
			$('#content').removeClass('cleft');
    }
});
