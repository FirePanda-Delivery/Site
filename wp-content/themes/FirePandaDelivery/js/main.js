
//let url = "https://fire-panda-delivery.herokuapp.com";
let url = "http://localhost:8070";

let starUrl = "http://firepanda/wp-content/themes/FirePandaDelivery/img/star.svg";

const defaultCity = "Воронеж";



// $(document).click(function(event) {     if
// (!$(event.target).closest(".modal,.js-open-modal").length) {
// $("body").find(".popup").removeClass("visible");     } });
// function seemore() {
//     document
//         .getElementById("more-cards")
//         .setAttribute("style", "opacity:1; transition: 1s; height: 100%;");
//
//     document
//         .getElementById("see-more")
//         .setAttribute("style", "display: none");
//
//     document
//         .getElementById("hide-blocks")
//         .setAttribute("style", "display: block");
//
// }
// function hideblocks() {
//     document
//         .getElementById("more-cards")
//         .setAttribute("style", "display: none");
//     document
//         .getElementById("hide-blocks")
//         .setAttribute("style", "display: none");
//     document
//         .getElementById("see-more")
//         .setAttribute("style", "display: block");
// }

// плавность якорей 
function scrollNav() {
    $('.courier-menu a')
        .click(function () {
            $(".active").removeClass("active");
            $(this).addClass("active");

            $('html, body')
                .stop()
                .animate({
                    scrollTop: $($(this).attr('href'))
                        .offset()
                        .top - 160
                }, 300);
            return false;
        });
    $('.restaurant-menu a').click(function () {
        $(".active").removeClass("active");
        $(this).addClass("active");

        $('html, body')
            .stop()
            .animate({
                scrollTop: $($(this).attr('href'))
                    .offset()
                    .top - 160
            }, 300);
        return false;
    });
}
scrollNav();

// аккордеон
const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
    const itemToggle = this.getAttribute('aria-expanded');

    for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
    }

    if (itemToggle === 'false') {
        this.setAttribute('aria-expanded', 'true');
    }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));

$(document).ready(function () {
    $("#menu")
        .on("click", "a", function (event) {
            event.preventDefault();
            var id = $(this).attr('href'),
                top = $(id)
                    .offset()
                    .top;
            $('body,html').animate({
                scrollTop: top
            }, 1500);
        });
});

// слайдер на Главной
$('.slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 3000,
    fade: true,
    infinite: true,
    fadeSpeed: 1000
});

//Маска ввода для телефона
$(document).ready(function () {
    $("#phone").mask("+7 (999) 99-99-999");
});

//Валидация email 
function validate(form_id, email) {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var address = document.forms[form_id].elements[email].value;
    if (reg.test(address) === false) {
        alert('Введите корректный e-mail');
        return false;
    }
}

// Мобильное меню
$(document)
    .ready(function () {
        //toggle menu
        $(".hamburger-container")
            .click(function () {
                $("#menu").slideToggle();
            });

        //to fix issue that toggle adds style(hides) to nav
        $(window).resize(function () {
            if (window.innerWidth > 1024) {
                $("#menu").removeAttr("style");
            }
        });

        //icon animation
        var topBar = $(".hamburger li:nth-child(1)"),
            middleBar = $(".hamburger li:nth-child(2)"),
            bottomBar = $(".hamburger li:nth-child(3)");

        $(".hamburger-container").on("click", function () {
            if (middleBar.hasClass("rot-45deg")) {
                topBar.removeClass("rot45deg");
                middleBar.removeClass("rot-45deg");
                bottomBar.removeClass("hidden");
            } else {
                bottomBar.addClass("hidden");
                topBar.addClass("rot45deg");
                middleBar.addClass("rot-45deg");
            }
        });
    });

// Блок на странице Ресторан
$(document).ready(function () {
    $('.content_toggle')
        .click(function () {
            $('.restaurant-content_block')
                .slideToggle(300, function () {
                    if ($(this).is(':hidden')) {
                        $('.content_toggle').html('<i class="fas fa-chevron-down">');
                        $('.content_toggle').removeClass('open');
                    } else {
                        $('.content_toggle').html('<i class="fas fa-chevron-up"></i>');
                        $('.content_toggle').addClass('open');
                    }
                });
            return false;
        });
});


window.addEventListener('load', () => { /* Страница загружена, включая все ресурсы */
    const preloader = document.querySelector('.preloader') /* находим блок Preloader */
    preloader.classList.add('preloader_hidden') /* добавляем ему класс для скрытия */
  });

window.addEventListener("storage", evetn => {
    alert();
});

  
// Модальное окно авторизации
var b = document.getElementById('LoginModalWindow');
function loginWindow(){
	b.style.visibility = 'visible';
	b.style.opacity = '1';
	b.style.transition = 'all 0.3s ease-out 0s';
}
function loginWindow2(){
	b.style.visibility = 'hidden';
	b.style.opacity = '0';
}


let loginForm = document.querySelector("#loginForm");
let loginForm2 = document.querySelector("#loginForm2");

let loginLinkEnter = document.querySelector("#loginLinkEnter");
let loginLinkRegistr = document.querySelector("#loginLinkRegistr");


loginLinkEnter.addEventListener('click',() => {
   loginForm.style.display = 'none';
   loginForm2.style.display = 'block';
});
loginLinkRegistr.addEventListener('click', () => {
    loginForm.style.display = 'block';
    loginForm2.style.display = 'none';
 });




