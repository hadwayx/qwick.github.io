// var menuItems = document.getElementsByClassName("main__menu-item");

// for (var i = 0; i < menuItems.length; i++)
// {
//     menuItems[i].addEventListener("click", focusMenuItem, false);
// }

// function focusMenuItem(e)
// {
//     // Remove all active menu items
//     var activeMenuItems = document.getElementsByClassName('main__menu-item');
//     var menuLine;

//     for (var i = 0; i < activeMenuItems.length; i++)
//     {
//         if (activeMenuItems[i].className.indexOf("active-item") != -1) 
//         {
//             activeMenuItems[i].querySelector(".active-link").classList.remove("active-link");
//             activeMenuItems[i].querySelector(".active-fontawesome").classList.remove("active-fontawesome");
//             activeMenuItems[i].classList.remove("active-item");

//             menuLine = activeMenuItems[i].querySelector(".main__menu-line");
//             activeMenuItems[i].querySelector(".main__menu-line").remove();

//             var currentActiveContentNumber = activeMenuItems[i].getAttribute('data-item');
//             document.getElementById(`content-${currentActiveContentNumber}`).style.display = 'none';
//         }
//     }

//     // Add class to current items
//     e.target.closest('.main__menu-item').className += ' active-item';
//     e.target.closest('.main__menu-item').querySelector(".main__menu-link").className += ' active-link';
//     e.target.closest('.main__menu-item').querySelector(".main__menu-img").className += ' active-fontawesome';
//     e.target.closest('.main__menu-item').append(menuLine);
//     document.getElementById(`content-${e.target.closest('.main__menu-item').getAttribute('data-item')}`).style.display = 'block';
// }