//////////////////////////////////Для иконки личн каьинета/////////////////////////
/* Когда пользователь нажимает на кнопку, переключаться раскрывает содержимое */
function myFunction1() {
  document.getElementById("myDropdow").classList.toggle("sho");
}
// Закрыть раскрывающийся список, если пользователь щелкнет за его пределами.
window.onclick = function(event) {
  if (!event.target.matches('.drop')) {
    var dropdowns = document.getElementsByClassName("dropdown-conten");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('sho')) {
        openDropdown.classList.remove('sho');
      }
    }
  }
}
////////////////////////////////////////////////////////////
/*$(function() {
    let header = $('.header');
     
    $(window).scroll(function() {
      if($(this).scrollTop() > 1) {
       header.addClass('header_fixed');
      } else {
       header.removeClass('header_fixed');
      }
    });
   });
   $(function() {
    let header = $('.header');
    let hederHeight = header.height(); // вычисляем высоту шапки
     
    $(window).scroll(function() {
      if($(this).scrollTop() > 1) {
       header.addClass('header_fixed');
       $('body').css({
          'paddingTop': hederHeight+'px' // делаем отступ у body, равный высоте шапки
       });
      } else {
       header.removeClass('header_fixed');
       $('body').css({
        'paddingTop': 0 // удаляю отступ у body, равный высоте шапки
       })
      }
    });
   });
   */