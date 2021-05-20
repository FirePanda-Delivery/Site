let UserProfileBlock = document.getElementById("UserProfileBlock");
let userOrdersBlock = document.getElementById("userOrdersBlock");
let userAccSaleBlock = document.getElementById("userAccSaleBlock");
let userAccExitBlock = document.getElementById("userAccExitBlock");


let btnUserAccProf = document.getElementById("userAccProfile");
let btnUserAccOrd = document.getElementById("userAccOrders");
let btnUserAccSale = document.getElementById("userAccSale");
let btnUserAccExit = document.getElementById("userAccExit");


btnUserAccProf.addEventListener('click', event => {
    event.currentTarget.style.color = "var(--red)";
    btnUserAccOrd.style = "";
    btnUserAccSale.style = "";
    btnUserAccExit.style = "";
    UserProfileBlock.style.display = 'block';
    userOrdersBlock.style.display = 'none';
    userAccSaleBlock.style.display = 'none';
    userAccExitBlock.style.display = 'none';
});
btnUserAccOrd.addEventListener('click', event => {
    event.currentTarget.style.color = "var(--red)";
    btnUserAccProf.style = "";
    btnUserAccSale.style = "";
    btnUserAccExit.style = "";
    UserProfileBlock.style.display = 'none';
    userOrdersBlock.style.display = 'block';
    userAccSaleBlock.style.display = 'none';
    userAccExitBlock.style.display = 'none';
});
btnUserAccSale.addEventListener('click', event => {
    event.currentTarget.style.color = "var(--red)";
    btnUserAccProf.style = "";
    btnUserAccOrd.style = "";
    btnUserAccExit.style = "";
    UserProfileBlock.style.display = 'none';
    userOrdersBlock.style.display = 'none';
    userAccSaleBlock.style.display = 'block';
    userAccExitBlock.style.display = 'none';
    
});
btnUserAccExit.addEventListener('click', event => {
    event.currentTarget.style.color = "var(--red)";
    btnUserAccProf.style = "";
    btnUserAccOrd.style = "";
    btnUserAccSale.style = "";
    UserProfileBlock.style.display = 'none';
    userOrdersBlock.style.display = 'none';
    userAccSaleBlock.style.display = 'none';
    userAccExitBlock.style.display = 'block';
});

// модальное окно в конструкторе ресторана
var b = document.getElementById('overlayUserAccExit');
function swa(){
	b.style.visibility = 'visible';
	b.style.opacity = '1';
	b.style.transition = 'all 0.3s ease-out 0s';
}
function swa2(){
	b.style.visibility = 'hidden';
	b.style.opacity = '0';
}


