var visa = document.getElementById('visa');
var visa_check = /^(4)( ?\d){15}$/;
var visa_pic = document.getElementById('visa_pic');
visa.addEventListener('keyup', check_visa, false);

function check_visa()
{
	var visa_num = document.getElementById('visa').value;

	if(visa_check.test(visa_num))
	{
		visa_pic.className = "unhidden";
	} else {
		visa_pic.className = "hidden";
	}

}