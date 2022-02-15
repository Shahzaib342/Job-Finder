$(document).ready(function () {
  $('select').selectpicker();

  setTimeout(function () {
    if ($(".categories").val() != "") {
      $(".filter-option-inner-inner").text($(".categories").val());
    }
  }, 300);

  $('.selectpicker').change(function () {
    $('.categories').val($('.filter-option-inner-inner').text());
  });

});
