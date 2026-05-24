document.addEventListener("DOMContentLoaded", () => {
  const korpaNav = document.querySelector("#cart");
  const path = window.location.href;

  document.querySelectorAll("ul a").forEach((link) => {
    if (link.href === path) {
      link.classList.add("active");
    }
  });

  if (sessionStorage.getItem("korpa")) {
    let korpa = JSON.parse(sessionStorage.getItem("korpa"));
    korpaNav.textContent = `Cart(${korpa.length})`;
  } else {
    console.log("Korpa je prazna!");
    korpaNav.textContent = `Cart(0)`;
  }
});
