jQuery(document).ready(function(){
    jQuery(".subcategory_list").addClass("displaynone");
    jQuery(".products_list").addClass("displaynone");
    var pathname = window.location.pathname; 
    //var url = window.location.href; 
   // alert(pathname);
    //var pathname = pathname.substr(pathname.indexOf("?") + 1);
    
//alert(pathname);
var arr = pathname.split('/');
//alert(arr[1]);
//alert(arr[3]);
//alert(arr[arr.length-3]);
//alert(arr.length);
var title=jQuery('.trail-end').text();//title of page
//var element= jQuery( ":contains("+title+")" ).parent();
//alert(title);
//alert(element);
//if(arr[3]=="iphone"){
//alert("got it");
//var element =jQuery('.sidebar .custom_html-2 .custom-html-widget').find('a[href~=pathname]').parent();


if(arr[1]=="product-category" && arr.length == 4){

var element= jQuery( ":contains("+title+")" ).closest('.category_list_list');
     jQuery(element).nextAll(".subcategory_list").toggle();
// jQuery(element).nextAll(".products_list").toggle();
 }
 if(arr[1]=="product-category" && arr.length == 5){
 var element= jQuery( ":contains("+title+")" ).closest('.category_list').children('.category_list_list');
     jQuery(element).nextAll(".subcategory_list").toggle();
    var prodlistelement= jQuery( ":contains("+title+")" ).closest('.subcategory_list_list');
    jQuery(prodlistelement).nextAll('.products_list').toggle();
 }
 if(arr[1]=="product"){
 
var element= jQuery( ":contains("+title+")" ).closest('.category_list').children('.category_list_list');
     jQuery(element).nextAll(".subcategory_list").toggle();
     var prodlistelement=jQuery( ":contains("+title+")" ).closest('.products_list');
 jQuery(prodlistelement).toggle();
 }
    
    var cat = jQuery(".category_list_list");
    
  jQuery(cat).click(function(){
         jQuery(this).nextAll(".subcategory_list").toggle();
 jQuery(this).nextAll(".products_list").toggle();



   }) ;
   
   var prod = jQuery(".subcategory_list_list");
   
   jQuery(prod).click(function(){
   
    jQuery(this).nextAll(".products_list").toggle();
jQuery(".products_list").addClass("displaynone");
   

   }) ;
   
});