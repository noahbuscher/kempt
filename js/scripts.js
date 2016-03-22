$(function(){
$('<img>').attr('src',function(){
    var imgUrl = $('.masthead_image').css('background-image');
    imgUrl = imgUrl .substring(4, imgUrl .length-1);
    return imgUrl;
}).load(function(){
  $('.overlay').fadeTo("ease", 0.6);
  $('.masthead_image').fadeFrom("ease", 0.8);
});
});