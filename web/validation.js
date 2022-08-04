
var my_falidation = function(form) {

	var error = true;
	var fio = $(form+" input[name=fio]");
	var name_i = $(form+" input[name=name_i]");
	var name_f = $(form+" input[name=name_f]");
	var name = $(form+" input[name=name]");
	var phone = $(form+" input[name=phone]");
	var email = $(form+" input[name=email]");
	var company_id = $(form+" input[name=company_id]");
	
	var pass = $(form+" input[name=pass]");
	var pass1 = $(form+" input[name=pass1]");
	
	
	if(fio.length>0) {
	
		if(fio.val() == "") { 
			fio.next().html("Не заполнено имя!");
			error = false; 
		} else {
			fio.next().html("");
			
			//проверка имени на допустимые символы
			var par=fio.val(); 
			var pattern=/[a-zA-ZА-Яа-я ]{3,50}/i; 
			if(pattern.test(par) == false) {
				fio.next().html("Не верный формат имени!");
				error = false; 
			} else {
				fio.next().html("");
				
			}
		}
	
	}
	
	if(name_i.length>0) {
	
		if(name_i.val() == "") { 
			name_i.next().html("Не заполнено имя!");
			error = false; 
		} else {
			name_i.next().html("");
			
			//проверка имени на допустимые символы
			var par=name_i.val(); 
			var pattern=/[a-zA-ZА-Яа-я ]{3,50}/i; 
			if(pattern.test(par) == false) {
				name_i.next().html("Не верный формат имени!");
				error = false; 
			} else {
				name_i.next().html("");
				
			}
		}
	
	}
	
	
	if(name.length>0) {
	
		if(name.val() == "") { 
			name.next().html("Не заполнено имя!");
			error = false; 
		} else {
			name.next().html("");
			
			//проверка имени на допустимые символы
			var par=name.val(); 
			var pattern=/[a-zA-ZА-Яа-я ]{3,50}/i; 
			if(pattern.test(par) == false) {
				name.next().html("Не верный формат имени!");
				error = false; 
			} else {
				name.next().html("");
				
			}
		}
	
	}
	
	if(phone.length>0 && form != "#reg_form") {
		if(phone.val() == "") { 
			phone.next().html("Поле Телефон не заполнено!");
			error = false; 
		} else {
			phone.next().html("");
			//проверка телефон на допустимые символы
			var par=phone.val(); 
			if(par.search('_') != -1) {			
				phone.next().html("Не верный формат телефона!");
				error = false;
			} else {
				phone.next().html("");
			}
		
		}
	}
	
	if(email.length>0) {
	
		if(email.val() == "") { 
			email.next().html("Поле Email не заполнено!");
			error = false; 
		} else {
			email.next().html("");
			var par=email.val();
			var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
			if(re.test(par) == false) { 
				email.next().html("Не верный формат email!");
				error = false; 
			} else {			
				email.next().html("");
			}
		
		}
	
	}
	
	if(form == "#reg_form" && company_id == 0) { 
		if(pass.val() == "") { 
			pass.next().html("Поле пароль не заполнено!");
			error = false; 
		} else {
			pass.next().html("");
			//проверка телефон на допустимые символы
			var pass_str=pass.val();
			
			if(pass_str.length < 6) { 
				pass.next().html("Пароль должен быть более 6 символов!");
				error = false; 
			} else {			
				pass.next().html("");
				if(pass.val() != pass1.val()) {
					pass1.next().html("Пароли не совпадают");
				} else {
					pass1.next().html("");
				}
			}
		
		}
	}
	
	
	return error;
}

var my_falidation_search = function(form) {

	var error = true;
	var type_1 = $(form+" select[name=type_1]");
	var rooms = $(form+" select[name=rooms]");
	var region = $(form+" select[name=region]");
	var raion = $(form+" select[name=raion]");
	var req_type_1 = $(form+" select[name=req_type_1 ]");
	var req_rooms = $(form+" select[name=req_rooms]");
	var req_region = $(form+" select[name=req_region]");
	var req_raion = $(form+" select[name=req_raion]");
	
	// имеющийся объект
	if(type_1.length>0) {
		if(type_1.val() == "") { 
			type_1.parent().parent().find("em").html("Выберите тип объекта!");
			error = false; 
		} else {
			type_1.parent().parent().find("em").html("");
		}
	}
	if(rooms.length>0) {
		if(rooms.val() == "") { 
			rooms.parent().parent().find("em").html("Выберите количество комнат!");
			error = false; 
		} else {
			rooms.parent().parent().find("em").html("");
		}
	}
	if(region.length>0) {
		if(region.val() == "") { 
			region.parent().parent().find("em").html("Выберите регион!");
			error = false; 
		} else {
			region.parent().parent().find("em").html("");
		}
	}
	if(raion.length>0) {
		if(raion.val() == "") { 
			raion.parent().parent().find("em").html("Выберите район города!");
			error = false; 
		} else {
			raion.parent().parent().find("em").html("");
		}
	}
	
	// желаемый объект
	if(req_type_1.length>0) {
		if(req_type_1.val() == "") { 
			req_type_1.parent().parent().find("em").html("Выберите тип объекта!");
			error = false; 
		} else {
			req_type_1.parent().parent().find("em").html("");
		}
	}
	if(req_rooms.length>0) {
		if(req_rooms.val() == "") { 
			req_rooms.parent().parent().find("em").html("Выберите количество комнат!");
			error = false; 
		} else {
			req_rooms.parent().parent().find("em").html("");
		}
	}
	if(req_region.length>0) {
		if(req_region.val() == "") { 
			req_region.parent().parent().find("em").html("Выберите регион!");
			error = false; 
		} else {
			req_region.parent().parent().find("em").html("");
		}
	}
	
	
	//alert(req_raion.val());
	if(req_raion.length>0) {
		if(req_raion.val() == "" || req_raion.val() == null ) {
			req_raion.parent().parent().find("em").html("Выберите район города!");
			error = false;
		} else {
			req_raion.parent().parent().find("em").html("");
		}
	}
	
	return error;
}
