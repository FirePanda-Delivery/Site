
let url = "https://fire-panda-delivery.herokuapp.com";
//let url = "http://localhost:8070";

let starUrl = "http://firepanda/wp-content/themes/FirePandaDelivery/img/star.svg";




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

// плавность якроей на стр Курьер
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

// аккордеон на странице Курьер
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
//маска ввода на стр Курьер
$(document).ready(function () {
    $("#phone").mask("+7 (999) 99-99-999");
});

//Валидация email на стр Курьер
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

// Счетчик товара

// var plus = document.querySelectorAll('.plus');
// var minus = document.querySelectorAll('.minus');
// var number = document.querySelectorAll('.number');
// var i = 0;

// plus[i].onclick = up;
// function up() {
//     var count = Number(number[i].innerHTML);
//     if(count < 100){
//         number[i].innerHTML = count += 1;
//     }
//
// }
// minus[i].onclick = down;
// function down() {
//     var count = Number(number[i].innerHTML);
//     if(count > 1) {
//         number[i].innerHTML = count -= 1;
//     }
//
// }

// Переключатель темы

// $(function () {
//   $('.toggle').on('click' ,function(event) {
//     $(this).toggleClass('active');
//     $('body').toggleClass('night');				
//   });
// });


