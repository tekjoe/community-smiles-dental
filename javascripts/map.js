$(document).ready(() => {
  const map = L.map("map").setView([43.014574, -88.232308], 15);
  const waukesha = document.getElementById("waukesha");
  const menomoneeFalls = document.getElementById("menomoneeFalls");

  const buttons = [waukesha, menomoneeFalls];

  const locations = {
    menomoneeFalls: [43.165254, -88.096789],
    waukesha: [43.014574, -88.232308],
  };

  L.tileLayer(
    "https://tile.thunderforest.com/transport/{z}/{x}/{y}.png?apikey=3dcd7705a9eb46c2b8dc3137a60bc7a3 "
  ).addTo(map);

  L.marker([43.165254, -88.096789])
    .addTo(map)
    .bindPopup("Menomonee Falls Location");

  L.marker([43.014574, -88.232308])
    .addTo(map)
    .bindPopup(
      "<a href='https://goo.gl/maps/EmmywzwMRDiQo7ku5' target='_blank'>Get Directions</a>"
    );

  const flyToLocation = (event) => {
    if (window.innerWidth <= 768) {
      document.getElementById("map").scrollIntoView({
        behavior: "smooth",
      });
    }
    const location = event.target.id;
    map.flyTo(locations[location]);
  };

  buttons.forEach((button) => button.addEventListener("click", flyToLocation));
});
