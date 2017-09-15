$('input[type="submit"]').mousedown(function(){
  $(this).css('background', '#2ecc71');
});
$('input[type="submit"]').mouseup(function(){
  $(this).css('background', '#1abc9c');
});

$('#loginform').click(function(){
  $("#loginform").css("color","white");
  $('.login').fadeToggle('slow');
  $(this).toggleClass('green');
  $(".login").show();
  $(".registrasi").hide();
  $("#registrasi").css("color","#1abc9c");
});
$('#registrasi').click(function(){
  $("#registrasi").css("color","white");
  $('.registrasi').fadeToggle('slow');
  $(this).toggleClass('green');
  $(".registrasi").show();
  $(".login").hide();
  $("#loginform").css("color","#1abc9c");
});