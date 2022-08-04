    $(".nav_close").click(function() {
        $(this).parent().hide();    
    });
    
    $(".mob_open").click(function() {
		if($(".mob_open").hasClass("active")){
			$(".mob_open").removeClass("active");
			$("#mobileMenu").hide();			
		} else {
			$(".mob_open").addClass("active");
			$("#mobileMenu").show();   
		}
    });
    
   /* $(".nav_sub").click(function() {
        if ($(this).hasClass("act")) {
            $(this).removeClass("act");
            $(this).next("ul").hide();
        } else {
            $(this).addClass("act");
            $(this).next("ul").show();
        }
    });*/
