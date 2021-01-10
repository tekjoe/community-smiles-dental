const $ = jQuery;
$(() => {
  const closeButton = document.getElementById("close-menu");
  const openButton = document.getElementById("open-menu");

  openButton.addEventListener("click", () => {
    const tl = gsap.timeline();
    tl.to("#mobile-nav", { x: 120, duration: 0.3 }).to("#close-menu", {
      opacity: 1,
      duration: 0.5,
    });
  });

  closeButton.addEventListener("click", () => {
    const tl = gsap.timeline();
    tl.to("#mobile-nav", { x: 400, duration: 0.3 }).to("#close-menu", {
      opacity: 0,
      duration: 0.5,
    });
  });
});
