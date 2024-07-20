// https://fakestoreapi.com/products
let productTable = document.getElementById("productTable");
let temp = "";

// first way
// asyns / await

let dataFetching = async() => {
    let response = await fetch('https://fakestoreapi.com/products'); // fetch
    let json_response = await response.json(); // json format
    console.log(json_response);


    json_response.forEach(element => {
        temp += `
           <tr>
                <td>${element.id}</td>
                <td>${element.title}</td>
                <td>${element.description}</td>
                <td><img width="50px" src="${element.image}"></td>
            </tr>`;
    });


    productTable.innerHTML = `
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Title</th>
            <th>Photo</th>
        </tr> ${temp}`; 
}

dataFetching();

// sec way // fetch
// fetch("https://fakestoreapi.com/products")
//   .then((res) => res.json()) // 'then' keeps data and put them in a variable
//   .then((products) => {
//     // => indicate what to do next // {} is needed for more than one element
//     // console.log(products); // testing products
//     products.forEach((element) => {
//     //   console.log(element); //  testing element
//       temp += `
//             <tr>
//                 <td>${element.id}</td>
//                 <td>${element.title}</td>
//                 <td>${element.description}</td>
//                 <td><img width="50px" src="${element.image}"></td>
//             </tr>`;
//     });
//     // console.log(temp); // testing temp
//     productTable.innerHTML = `
//         <tr>
//             <th>ID</th>
//             <th>Name</th>
//             <th>Title</th>
//             <th>Photo</th>
//         </tr> ${temp}`;
//   });
