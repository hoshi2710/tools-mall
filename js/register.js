function terms_checkbox()
{
	check = document.getElementById("term_check");
	color = window.getComputedStyle(document.getElementById('term_check'), null).getPropertyValue("color");
	
	if(color == "rgb(128, 128, 128)")
	{
	   	check.style.setProperty("color", "#ae0000", "important");
	}
	else
	{
	  check.style.setProperty("color", "gray", "important");	
	}
}

function find_zipcode()
{
	new daum.Postcode({
        oncomplete: function(data) {
			zipcode_input = document.getElementById("zipcode");
			address1_input = document.getElementById("address1");	
			zipcode_input.value = data.zonecode;
			address1_input.value = data.address;
        }
    }).open();
	return false;
}

function register_next()
{
	term_div = document.getElementsByClassName("term")[0];
	input_account_div = document.getElementsByClassName("input_account")[0];
	additional_info_div = document.getElementsByClassName("additional_info")[0];
	term_div.style.opacity = "0";
	input_account_div.style.opacity = "0";
	setTimeout(function() {
		term_div.style.display = "none";
		input_account_div.style.display = "none";
		additional_info_div.style.display = "block";
		setTimeout(function() {
		additional_info_div.style.opacity = "1";
		}, 100);
	}, 200);
	return false;
}

function register_prev()
{
	status = window.getComputedStyle(document.getElementsByClassName("additional_info")[0], null).getPropertyValue("display");
	if (status == "block")
	{
		term_div = document.getElementsByClassName("term")[0];
		input_account_div = document.getElementsByClassName("input_account")[0];
		additional_info_div = document.getElementsByClassName("additional_info")[0];
		additional_info_div.style.opacity = "0";
		setTimeout(function() {
			additional_info_div.style.display = "none";
			term_div.style.display = "block";
			input_account_div.style.display = "block";
			setTimeout(function() {
				term_div.style.opacity = "1";
				input_account_div.style.opacity = "1";
			}, 100);
		}, 200);
	}
	else	
	{
		history.back();
	}
	return false;
}
window.addEventListener("beforeunload", function (e) {
    var confirmationMessage = 'It looks like you have been editing something. '
                            + 'If you leave before saving, your changes will be lost.';

    (e || window.event).returnValue = confirmationMessage; //Gecko + IE
    return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
});


