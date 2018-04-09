// JavaScript Document
$(document).ready(function(){
 
    $(".diaporama").diaporama({
        animationSpeed: "slow",
        delay:5
    });
 
});
var defaults = {
    delay: 5,
    animationSpeed: "slow",
    controls:false
};
 
var options = $.extend(defaults, options);  // 1