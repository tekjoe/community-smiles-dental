const $ = jQuery;
$(() => {
  const closeButton = document.getElementById("close-menu");
  const openButton = document.getElementById("open-menu");
  const expandButton = document.getElementById("expand-menu");
  const notificationBar = document.getElementById("notification-bar");

  const checkForLocalStorage = () => {
    const isNotificationDismissed = JSON.parse(
      localStorage.getItem("isNotificationDismissed")
    );
    if (isNotificationDismissed) {
      notificationBar.classList.add("closed");
    }
  };

  const checkForNotificationBar = () => {
    if (document.getElementById("notification-bar") !== null) {
      const notificationButton = document.getElementById("notification-button");
      notificationBar.classList.add("open");
      notificationButton.addEventListener("click", () => {
        notificationBar.classList.add("closed");
        localStorage.setItem("isNotificationDismissed", "true");
      });
    }
  };

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

  checkForLocalStorage();
  checkForNotificationBar();
});
