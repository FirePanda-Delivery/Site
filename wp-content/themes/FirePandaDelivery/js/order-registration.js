let radioOrderBtn = document.querySelector("#radioOrderBtn");
let radioOrderBtn2 = document.querySelector("#radioOrderBtn2");

radioOrderBtn.addEventListener( 'click', () =>{
    radioOrderBtn2.value = 'false';
});
radioOrderBtn2.addEventListener( 'click', () =>{
    radioOrderBtn.value = 'false';
});