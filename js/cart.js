const kolicaTabela = document.querySelector("#kolicaTabela");
const main = document.querySelector(".cart-main");

window.addEventListener("load", () => {
  if (sessionStorage.getItem("korpa")) {
    korpa = JSON.parse(sessionStorage.getItem("korpa"));
    renderKorpe();
  } else {
    console.log("Korpa je prazna!");
    main.innerHTML = `<h2>Korpa je prazna! Odaberi nesto!</h2>`;
  }
});

const renderKorpe = () => {
  kolicaTabela.innerHTML = ``;
  korpa.forEach((stavka, idx) => {
    kolicaTabela.innerHTML += `
        <tr class="zebra"><th scope="row">${idx + 1}</th>
        <td><img src="http://localhost:3000/${stavka.img}" alt="" height="30px"></td>
        <td>${stavka.name}</td>    
        <td>$${stavka.price}</td>    
        <td>${stavka.qty}</td>
        <td>$${stavka.price * stavka.qty}</td>    
        <td><button class="btn btn-danger" onClick="ukloniStavku(${idx})">X</button></td>
        </tr>`;
    });
    let total = korpa.reduce((previousValue, currentValue) => {
      return previousValue + currentValue.qty * currentValue.price;
    }, 0);
    kolicaTabela.innerHTML += `
    <tr><th scope="row"> </th>
    <td></td>
    <td></td>    
    <td></td>  
        <td>Total: </td>
        <td>$${total}</td>     
    <td></td>
    </tr>`;
};
const isprazniKorpu = (idx) => {
  korpa = JSON.parse(sessionStorage.getItem("korpa"));
  korpa = [];
  sessionStorage.setItem("korpa", JSON.stringify(korpa));
  renderKorpe();
};

const ukloniStavku = (idx) => {
  korpa = JSON.parse(sessionStorage.getItem("korpa"));
  korpa.splice(idx, 1);
  sessionStorage.setItem("korpa", JSON.stringify(korpa));
  renderKorpe();
};
