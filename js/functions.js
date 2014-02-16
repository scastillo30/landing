
function CheckMessage(action)
{
	switch (action) {
		case 'exist':
			jQuery("#message")[0].textContent = "Email Already Exists";
			break;

		case 'saved':
			jQuery("#message")[0].textContent = "Information Saved Successfully";
			break;

		case 'fill':
			jQuery("#message")[0].textContent = "Please Fill The Information";
			break;
	}
}

function Translation(Lang)
{
	var Language;
	//Remove Selected Class
	jQuery("#langSection li.selected").removeClass("selected");

	if(Lang === null)
	{ Language = "english"; }
	else
	{
		if(Lang != null && Lang === "es")
		{ Language = "spanish";}
		else
		{ Language = "english";}
	}

	//Add Selected Class
	jQuery("#"+ Language + "").addClass("selected");

	jQuery.ajax({
        url: 'translations.xml',
        success: function(xml) {
            jQuery(xml).find('translation').each(function(){
                var id = jQuery(this).attr('id');
                var text = jQuery(this).find(Language).text();

                switch (id) {
				    case "submit":
				        jQuery("." + id).attr("value",text); 
				    	break;
				    case "email":
				    case "name":
				    case "lastname":
				    	jQuery("." + id).attr("placeholder",text); 
				        break;
				    case "errorname":
				    	//debugger;
				    	//alert(jQuery("#"+id).val);
				    	//debugger;
				    	//var object = id.substring(5);
				    	//alert(jQuery("label[for=Name]").text());	
				    	break;
				    default:
				    	jQuery("." + id).html(text);
				    	break;
				}
            });
        }
    });
}