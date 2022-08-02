function setCookie (name, value, expires, path, domain, securea) {
      document.cookie = name + "=" + encodeURIComponent(value) +
        ((expires) ? "; expires=" + expires : "") +
        ((path) ? "; path=" + path : "") +
        ((domain) ? "; domain=" + domain : "") +
        ((securea) ? "; secure" : "");
}

function getCookie(name) {
	var cookie = " " + document.cookie;
	var search = " " + name + "=";
	var setStr = null;
	var offset = 0;
	var end = 0;
	if (cookie.length > 0) {
		offset = cookie.indexOf(search);
		if (offset != -1) {
			offset += search.length;
			end = cookie.indexOf(";", offset)
			if (end == -1) {
				end = cookie.length;
			}
			setStr = decodeURIComponent(cookie.substring(offset, end));
		}
	}
	return(setStr);
}

	/* запрос всплывающей формы с картой */
	function map_info_index(id) {
		$.ajax({
			type: "POST",
			url: "/index.php?mod=index&act=map_info_index&object_id="+id,
			beforeSend: function( xhr ) {
				$("#preloader").show();
			},
			success: function(data){
				$("#preloader").hide();
				//alert(data);
				$("body").append(data);
				
			},
			complete: function(){ }
		});		
	}
	
	

/* запрос всплывающей формы регистрации пользователя */
	function register_form(tarif_id, company_id){
		if (tarif_id === undefined) tarif_id = 0; 
		if (company_id === undefined) company_id = 0;
	
		$.ajax({
			  type: "POST",
			  url: "/index.php?mod=user&act=register_form&tarif_id="+tarif_id+"&company_id="+company_id,
			  beforeSend: function( xhr ) {
				$("#preloader").show();
			},
			success: function(data){
				$("#preloader").hide();			
			//	alert(data);
				$("body").append(data);		
			  },
			  error: function(jqXHR, textStatus){
				
			  }				
		});		
	}
	
/* запрос всплывающей формы восстановления пароля */
	function check_pass_form() {
		$.ajax({
			  type: "POST",
			  url: "/index.php?mod=user&act=check_pass_form",
			  beforeSend: function( xhr ) {
				$("#preloader").show();
			},
			success: function(data){
				$("#preloader").hide();			
			//	alert(data);
				$("body").append(data);		
			  },
			  error: function(jqXHR, textStatus){
			}				
		});	
	}
	
/* запрос всплывающей формы авторизации */
	function login_form(){
		$.ajax({
			  type: "POST",
			  url: "/index.php?mod=user&act=login_form",
			  beforeSend: function( xhr ) {
				$("#preloader").show();
			},
			success: function(data){
				$("#preloader").hide();			
			//	alert(data);
				$("body").append(data);		
			},
			  error: function(jqXHR, textStatus){
			}			
		});
	}
