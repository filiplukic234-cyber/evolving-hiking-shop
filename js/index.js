const carouselFeatured = document.querySelector("#carousel-featured");
let proizvodi = [];
window.addEventListener("load", () => {
  fetch(`${server_API}/`)
    .then((res) => res.json())
    .then((resJson) => {
      console.log(resJson);
      proizvodi = [...resJson];
    })
    .then((_) => {
      console.log(proizvodi);
      renderProizvoda();
      initCarousel();
    })
    .catch((error) => console.log(error));
});
const renderProizvoda = () => {
  proizvodi.forEach((proizvod) => {
    // carouselFeatured.innerHTML = ``;
    carouselFeatured.innerHTML += `
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
