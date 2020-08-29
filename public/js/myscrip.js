var MenuItems = document.getElementById("MenuItems");

MenuItems.style.maxHeight ="0px";

function menutoggle(){
    if(MenuItems.style.maxHeight =="0px"){
        MenuItems.style.maxHeight = "250px";
    }
    else 
    {
        MenuItems.style.maxHeight = "0px";
    }
}

var product = document.getElementById("productimg");
var smallproductimg = document.getElementsByClassName("smallimg");

smallproductimg[0].onclick = function (){
    product.src =smallproductimg[0].src;
}
smallproductimg[1].onclick = function (){
    product.src =smallproductimg[1].src;
}
smallproductimg[2].onclick = function (){
    product.src =smallproductimg[2].src;
}
smallproductimg[3].onclick = function (){
    product.src =smallproductimg[3].src;
}
smallproductimg[4].onclick = function (){
    product.src =smallproductimg[4].src;
}
smallproductimg[5].onclick = function (){
    product.src =smallproductimg[5].src;
}
smallproductimg[6].onclick = function (){
    product.src =smallproductimg[6].src;
}
smallproductimg[7].onclick = function (){
    product.src =smallproductimg[7].src;
}
smallproductimg[8].onclick = function (){
    product.src =smallproductimg[8].src;
}
smallproductimg[9].onclick = function (){
    product.src =smallproductimg[9].src;
}

function sell(){
    var modal = document.getElementById("myModalsell");
    var btn = document.getElementById("mysell");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
      }
      span.onclick = function() {
        modal.style.display = "none";
      }
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
}
// $('#yourModalId').on('show', function(e) {
//     var link     = e.relatedTarget(),
//         modal    = $(this),
//         username = link.data("username"),
//         email    = link.data("email");

//     modal.find("#email").val(email);
//     modal.find("#username").val(username);
// });
// function checkproduct($id){
//     var modal = document.getElementById("myModalcheck");
//     var btn = link.data("id");
//     console.log(btn);
//     var span = document.getElementsByClassName("close")[0];
//     btn.onclick = function() {
//         modal.style.display = "block";
//       }
//       span.onclick = function() {
//         modal.style.display = "none";
//       }
//       window.onclick = function(event) {
//         if (event.target == modal) {
//           modal.style.display = "none";
//         }
//       }
// }





