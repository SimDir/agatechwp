window.onload = function () {
   let first = document.querySelector('.header__menu_link_first');
   first.onmouseover = showBorderFirst;
   first.onmouseout = hideBorderFirst;
   function showBorderFirst() {
      first.style.borderBottom ="3px solid #fff";
   }
   function hideBorderFirst() {
      first.style.borderBottom ="none";
   }


   let two = document.querySelector('.header__menu_link_two');
   two.onmouseover = showBorderTwo;
   two.onmouseout = hideBorderTwo;
   function showBorderTwo() {
      two.style.borderBottom ="3px solid #fff";
   }
   function hideBorderTwo() {
      two.style.borderBottom ="none";
   }


   let three = document.querySelector('.header__menu_link_three');
   three.onmouseover = showBorderThree;
   three.onmouseout = hideBorderThree;
   function showBorderThree() {
      three.style.borderBottom ="3px solid #fff";
   }
   function hideBorderThree() {
      three.style.borderBottom ="none";
   }


   let four = document.querySelector('.header__menu_link_four');
   four.onmouseover = showBorderFour;
   four.onmouseout = hideBorderFour;
   function showBorderFour() {
      four.style.borderBottom ="3px solid #fff";
   }
   function hideBorderFour() {
      four.style.borderBottom ="none";
   }


   let five = document.querySelector('.header__menu_link_five');
   five.onmouseover = showBorderFive;
   five.onmouseout = hideBorderFive;
   function showBorderFive() {
      five.style.borderBottom ="3px solid #fff";
   }
   function hideBorderFive() {
      five.style.borderBottom ="none";
   }






   function checkurl() {
      let location = window.location.href;
      if(location == "http://agatech.local/include/DigitalAgency.html") {
         showBorderFirst();
         first.onmouseout = showBorderFirst;
      }
      else if(location == "http://agatech.local/include/NewCenter.html") {
         showBorderTwo();
         two.onmouseout = showBorderTwo;
      }
      else if(location == "http://agatech.local/include/Colutions.html") {
         showBorderThree();
         three.onmouseout = showBorderThree;
      }
   else if(location == "http://agatech.local/include/Products.html") {
      showBorderFour();
         four.onmouseout = showBorderFour;
      }
      else if(location == "http://agatech.local/include/BusinessCooperation.html") {
         showBorderFive();
         five.onmouseout = showBorderFive;
      }
   }
   checkurl();
  




}