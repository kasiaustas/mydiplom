
window.addEventListener("load", function () {

// var meni =document.querySelectorAll("#autorization")[0];
//
// meni.addEventListener("mouseover", funSldr, false);
// meni.addEventListener("click", funSldr, false);
//
//
// function funSldr(e) {
//
//     switch (e.type) {
//
//         case "mouseover":
//
//                 document.querySelectorAll(".account_nav_popup")[0].style.display = 'block';
//                 document.querySelectorAll(".account_nav_popup")[0].id = "account_nav_loginn";
//             var newid=document.querySelectorAll(".account_nav_popup")[0];
//             TweenLite.to(newid, 0.5,  {right : "100px"});
//             TweenLite.to(newid, 0.5,  {opacity : "1"});
//
//             break;
//         case "click":
//
//             document.querySelectorAll(".account_nav_popup")[0].id = "";
//             var newid=document.querySelectorAll(".account_nav_popup")[0];
//             TweenLite.to(newid, 0.5,  {right : "-100px"});
//             TweenLite.to(newid, 0.5,  {display : "none"});
//             TweenLite.to(newid, 0.5,  {opacity : "0"});
//
//             break;
//
//     }
//
// }

    function bb() {
        var thirdaa = document.querySelectorAll(".menu_form>a")[0];//замена 1  ссылки на просто текст в меню форме товаров
        var element4 = document.createElement("div");//замена 1 ссылки на просто текст в меню форме товаров
        var a4 = thirdaa.replaceWith(element4);//замена 1 ссылки на просто текст в меню форме товаров
        var text4 = document.createTextNode("ФОРМА");//замена 1 ссылки на просто текст в меню форме товаров
        var b4 = element4.appendChild(text4);//замена 1 ссылки на просто текст в меню форме товаров

    }
    bb();

    function aa() {
        var thirda = document.querySelectorAll(".menu_brand>a")[0];//замена 1  ссылки на просто текст в меню брендов товаров
        var element3 = document.createElement("div");//замена 1 ссылки на просто текст в меню брендов товаров
        var a3 = thirda.replaceWith(element3);//замена 1 ссылки на просто текст в меню брендов товаров
        var text3 = document.createTextNode("БРЕНД");//замена 1 ссылки на просто текст в меню брендов товаров
        var b3=element3.appendChild(text3);//замена 1 ссылки на просто текст в меню брендов товаров

    }

    aa();





}, false);


// window.addEventListener("load", function a()
// {
//     var firsta = document.querySelectorAll(".menu_new>a")[0];//замена 1  ссылки на просто текст в меню  товаров
//     var elementLI = document.createElement("div");//замена 1 ссылки на просто текст в меню  товаров
//     var a1 = firsta.replaceWith(elementLI);//замена 1 ссылки на просто текст в меню  товаров
//     var textSmartPhone = document.createTextNode("БРЕНД");//замена 1 ссылки на просто текст в меню  товаров
//     var b = elementLI.appendChild(textSmartPhone);//замена 1 ссылки на просто текст в меню  товаров
//     //textSmartPhone.style.cssText="display: inline-block; font-family: Helvetica,sans-serif; margin-bottom: 0; margin-left: 0; text-transform: uppercase;"
//
//
//     var seca = document.querySelectorAll(".menu_new>a")[7];//замена 1  ссылки на просто текст в меню товаров
//     var element2 = document.createElement("div");//замена 1 ссылки на просто текст в меню  товаров
//     var a2 = seca.replaceWith(element2);//замена 1 ссылки на просто текст в меню товаров
//     var text2 = document.createTextNode("ФОРМА");//замена 1 ссылки на просто текст в меню  товаров
//     var b2 = element2.appendChild(text2);//замена 1 ссылки на просто текст в меню  товаров
// }, false);

function showCart(cart) {
    $('#cart .modal-body').html(cart);
    $('#cart').modal().css({"display": "block", "width": "2000px"});
}

function getCart() {
    $.ajax({
        url:'/cart/show',
        type:'GET',
        success: function (res) {
            if(!res) alert('Ошибка!');
            showCart(res);
        },
        error:function () {
            alert('Error!');
        }
    });
    return false;
}

$('#cart .modal-body').on('click', '.del-item', function(){
     var id=$(this).data('id');
    $.ajax({
        url:'/cart/del-item',
        data:{id:id},
        type:'GET',
        success: function (res) {
            if(!res) alert('Ошибка!');
            showCart(res);
        },
        error:function () {
            alert('Error!');
        }
    });
});



function clearCart(){
    $.ajax({
        url:'/cart/clear',
        type:'GET',
        success: function (res) {
            if(!res) alert('Ошибка!');
            showCart(res);
        },
        error:function () {
            alert('Error!');
        }
    });
}




$('.add-to-cart').on('click', function (e) {
    e.preventDefault();
    var id=$(this).data('id'),
        qty=$('#qty').val();
    $.ajax({
        url:'/cart/add',
        data:{id:id, qty:qty},
        type:'GET',
        success: function (res) {
            if(!res) alert('Ошибка!');
            showCart(res);
        },
        error:function () {
            alert('Error!');
        }
    });
});