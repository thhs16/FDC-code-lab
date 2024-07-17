   // getElementById
   document.getElementById("demo").innerHTML = "hello world"
   console.log(document); //obj or not

   console.log(document.body);
   console.log(document.head);
   console.log(document.URL);
   console.log(document.location);

   // getElementTagName // collection
   console.log(document.getElementsByTagName('p'));
   document.getElementsByTagName('p')[0].innerHTML = 'This is Rola';

   // getElementbyclassName
   let clsEle = document.getElementsByClassName('greeting');
   console.log(clsEle);
   clsEle[0].innerHTML = 'hello this is my program';

   // element.attribute
   console.log(clsEle[0].attributes);
   console.log(clsEle[0].attributes[0].nodeValue);


   // clsEle[0].attributes[0].nodeValue = 'farewell'; // error
   // console.log(clsEle[0].attributes[0].nodeValue);

   // editing value in the attribute
   // clsEle[0].setAttribute ('class', 'farewell'); // error
   // console.log(clsEle[0].attributes[0].nodeValue);



   // querySelector
   console.log(document.querySelector('h1#demo'));
   document.querySelector('h1#demo').innerHTML = 'hello user';

   // querySelectorAll
   console.log(document.querySelectorAll('h1')[0]);
   document.querySelectorAll('h1')[0].innerHTML = 'this is dom test from "querySelectorAll"';

   // changing image
   document.querySelector('img').src = "https://i.etsystatic.com/9632128/r/il/f40bbd/1169402613/il_570xN.1169402613_lpua.jpg"

   // date()
   document.write(Date());