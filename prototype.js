Event.observe('custom_design', 'change', myHandler);

function myHandler() {
 var test = this[this.selectedIndex].innerHTML;
 if(test == "default"){
 $('custom_layout_update').show();
 }else{
 $('custom_layout_update').hide();
 }
}
