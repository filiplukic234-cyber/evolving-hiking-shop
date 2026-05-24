const listaProizvoda = document.querySelector("#lista-proizvoda");
let proizvodi = [];
window.addEventListener("load", () => {
  fetch("${server_API}/")
    .then((res) => res.json())
    .then((resJson) => {
      console.log(resJson);
      proizvodi = [...resJson];
    })
    .then((_) => {
      console.log(proizvodi);
      renderProizvoda();
    })
    .catch((error) => console.log(error));
});
const renderProizvoda = () => {
  proizvodi.forEach((proizvod) => {
    listaProizvoda.innerHTML += `
        <div class="item">
            <a onclick=idiNaSingle(${proizvod.id})> 
                <img src="${server_API}/${proizvod.img}" alt="">
                <h3>${proizvod.name}</h3>
                <p>$${proizvod.price}</p>
            </a>
        </div>
        `;
  });
};
const idiNaSingle = (id) => {
  sessionStorage.setItem("idProizvoda", id);
  window.location = "single.php";
};
