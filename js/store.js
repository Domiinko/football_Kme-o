var removeCarrtItemButtons = document.getElementsByClassName('btn-danger')
console.log(removeCartItemButtons)
for (var i=0; i<removeCarrtItemButtons.length;i++){
    var button = removeCartItemButtons[i]
    button.addEventListener('click',function(event){
        var buttonClicked= event.taget
        buttonClicked.parentElement.parentElement.parentElement.remoe()
        updateCartTotal();
    })
}

function updateCartTotal(){

}