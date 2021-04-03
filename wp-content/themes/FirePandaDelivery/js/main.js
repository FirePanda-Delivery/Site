// $(document).click(function(event) {
//
//     if (!$(event.target).closest(".modal,.js-open-modal").length) {
//         $("body").find(".popup").removeClass("visible");
//     }
// });
    function seemore() {
    document.getElementById("more-cards").setAttribute("style", "opacity:1; transition: 1s; height: 100%;");

    document.getElementById("see-more").setAttribute("style", "display: none");

    document.getElementById("hide-blocks").setAttribute("style", "display: block");

}
    function hideblocks() {
    document.getElementById("more-cards").setAttribute("style", "display: none");
    document.getElementById("hide-blocks").setAttribute("style", "display: none");
    document.getElementById("see-more").setAttribute("style", "display: block");
}

// аккордеон на странице Курьер
// const items = document.querySelectorAll(".accordion button");

// function toggleAccordion() {
//   const itemToggle = this.getAttribute('aria-expanded');
  
//   for (i = 0; i < items.length; i++) {
//     items[i].setAttribute('aria-expanded', 'false');
//   }
  
//   if (itemToggle == 'false') {
//     this.setAttribute('aria-expanded', 'true');
//   }
// }

// items.forEach(item => item.addEventListener('click', toggleAccordion));

