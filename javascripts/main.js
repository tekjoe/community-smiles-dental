const $ = jQuery;
$(() => {
  const closeButton = document.getElementById("close-menu");
  const openButton = document.getElementById("open-menu");
  const expandButton = document.getElementById("expand-menu");

  openButton.addEventListener("click", () => {
    const tl = gsap.timeline();
    tl.to("#mobile-nav", { right: 0, duration: 0.3 }).to("#close-menu", {
      opacity: 1,
      duration: 0.5,
    });
  });

  closeButton.addEventListener("click", () => {
    const tl = gsap.timeline();
    tl.to("#mobile-nav", { right: -260, duration: 0.3 }).to("#close-menu", {
      opacity: 0,
      duration: 0.5,
    });
  });

  const subMenu = expandButton.nextElementSibling;
  const tl = gsap.timeline();
  tl.reversed(true);
  tl.to(subMenu, {
    height: "100%",
    opacity: 1,
    duration: 0.33,
    ease: "power1.in",
  });

  const animateMenu = () => {
    tl.reversed(!tl.reversed());
  };

  expandButton.addEventListener("click", animateMenu);
});
