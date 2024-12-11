let listBg = document.querySelectorAll(".bg");

window.addEventListener("scroll", (event) => {
  let top = this.scrollY;
  listBg.forEach((bg, index) => {
    if (index === 1) {
      bg.style.transform = `translateX(-${top / 2}px)`;
    } else if (index === 2) {
      bg.style.transform = `translateX(${top / 3}px)`;
    }
  });
});
