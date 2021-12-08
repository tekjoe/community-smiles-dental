$(() => {
  // Create and mount the thumbnails slider.
  var secondarySlider = new Splide("#secondary-slider", {
    rewind: true,
    fixedWidth: 200,
    fixedHeight: 128,
    isNavigation: true,
    gap: 10,
    focus: "center",
    pagination: false,
    cover: true,
    lazy: "sequential",
    breakpoints: {
      768: {
        fixedWidth: 200,
        fixedHeight: 100,
      },
    },
  }).mount();

  // Create the main slider.
  var primarySlider = new Splide("#primary-slider", {
    type: "fade",
    pagination: false,
    arrows: false,
    lazy: "sequential",
  });

  // Set the thumbnails slider as a sync target and then call mount.
  primarySlider.sync(secondarySlider).mount();
});
