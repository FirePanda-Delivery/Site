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


