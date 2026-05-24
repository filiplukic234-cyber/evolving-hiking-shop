const slika = document.querySelector("#slika");
const naziv = document.querySelector("#naziv");
const cena = document.querySelector("#cena");
const opis = document.querySelector("#opis");
const qty = document.querySelector("#qty");
const kategorije = document.querySelector("#kategorije");
const forma = document.querySelector("#forma");

let trenutniId = null;
let trenutniProizvod = {};
let korpa = [];
window.addEventListener("load", () => {
  trenutniId = Number(sessionStorage.getItem("idProizvoda"));
  fetch(`http://localhost:3000/${trenutniId}`)
    .then((proizvod) => proizvod.json())
    .then((proizvodJson) => {
      console.log(proizvodJson);
      trenutniProizvod = proizvodJson[0];
      slika.innerHTML = `<img src="http://localhost:3000/${trenutniProizvod.img}" alt="">`;
      naziv.textContent = `${trenutniProizvod.name}`;
      cena.textContent = `${trenutniProizvod.price}`;
      opis.textContent = `${trenutniProizvod.desc}`;
      qty.innerHTML = ``;
      for (let i = 1; i <= trenutniProizvod.qty; i++) {
        qty.innerHTML += `<option value="${i}">${i}</option>`;
      }
      kategorije.innerHTML = ``;
      let tempKategorija = trenutniProizvod.category.split(",");
      tempKategorija.forEach((kategorija, idx) => {
        if (tempKategorija.length != idx + 1) {
          kategorije.innerHTML += `<a href="">${kategorija.trim()}, </a>`;
        } else {
          kategorije.innerHTML += `<a href="">${kategorija.trim()} </a>`;
        }
      });
    })
    .catch((error) => console.log(error));
});

forma.addEventListener("submit", (submit) => {
  event.preventDefault();
  trenutniProizvod.qty = Number(submit.target.qty.value);

  if (!sessionStorage.getItem("korpa")) {
    sessionStorage.setItem("korpa", "[]");
  }

  korpa = JSON.parse(sessionStorage.getItem("korpa"));

  let tempResponse = korpa.filter((stavka) => {
    if (stavka.id == trenutniProizvod.id) {
      stavka.qty += Number(submit.target.qty.value);
      return true;
    } else return false;
  });
  console.log(tempResponse);

  if (tempResponse.length < 1) {
    korpa.push(trenutniProizvod);
    console.log("eeeeeeeeeeeeeeeeee");
  } else console.log("aaaaaaaaaa");

  sessionStorage.setItem("korpa", JSON.stringify(korpa));
  window.location = "cart.php";
});
