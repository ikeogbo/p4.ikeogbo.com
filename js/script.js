
$(document).ready(function(){
  $("#hide").click(function(){
    $("p").hide();
  });
  $("#show").click(function(){
    $("p").show();
  });
});



function setOptions(chosen) {
var selbox = document.myform.opttwo;
 
selbox.options.length = 0;
if (chosen == " ") {
  selbox.options[selbox.options.length] = new Option('Please select one of the options above first',' ');
 
}
if (chosen == "1") {
  selbox.options[selbox.options.length] = new
Option('','');
  selbox.options[selbox.options.length] = new
Option('GLK350','GLK350');
  selbox.options[selbox.options.length] = new
Option('CLK 550','CLK 550');
  selbox.options[selbox.options.length] = new
Option('ML 550','ML 550');
  selbox.options[selbox.options.length] = new
Option('E 220','E 220');

}
if (chosen == "2") {
  selbox.options[selbox.options.length] = new
Option('','');
  selbox.options[selbox.options.length] = new
Option('4Runner','4Runner');
  selbox.options[selbox.options.length] = new
Option('Camry','Camry');
  selbox.options[selbox.options.length] = new
Option('Corolla','Corolla');
  selbox.options[selbox.options.length] = new
Option('Highlander','Highlander');
  selbox.options[selbox.options.length] = new
Option('Matrix','Matrix');
  selbox.options[selbox.options.length] = new
Option('Solara','Solara');
  selbox.options[selbox.options.length] = new
Option('Tundra','Tundra');
}
if (chosen == "3") {
  selbox.options[selbox.options.length] = new
Option('','');
  selbox.options[selbox.options.length] = new
Option('Accord','Accord');
  selbox.options[selbox.options.length] = new
Option('Civic','Civic');
  selbox.options[selbox.options.length] = new
Option('CR-V','CR-V');
  selbox.options[selbox.options.length] = new
Option('Element','Element');
  selbox.options[selbox.options.length] = new
Option('Pilot','Pilot');
  selbox.options[selbox.options.length] = new
Option('Ridgeline','Ridgeline');
}
}



$.fn.options = function(selector) {
	return this.each(function() {
		function container(select) {
			if (select.next().is(".option-container")) {
				return $(select).next();
			}
			return $((select) (".option-container")).append(select.children()).insertAfter(select).hide();
		}
		var container = container($(this));
		$(this).empty().append(container.children(selector).clone());
	});
}

$(document).ready(function(){

	$("#State").hide()

	$("#Country").change(function() {
		var selected = this.options[this.selectedIndex].value;
		if (selected == "US") {
			$("#State").show().options(".state");
		} else if (selected == "CA") {
			$("#State").show().options(".province");
		} else {
			$("#State").hide();
		}
	}).change();


});


function FillBilling(f) {
if(f.billingtoo.checked == true) {
	f.billingphone.value = f.phone.value;
	f.billingstreet.value = f.street.value;
	f.billingstreetno.value = f.streetno.value;
	f.billingcity.value = f.city.value;
	f.billingstate.value = f.state.value;
	f.billingzip.value = f.zip.value;
	f.billingcountry.value = f.country.value;
    }
}
