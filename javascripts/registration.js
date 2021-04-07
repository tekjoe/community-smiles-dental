$(() => {
  // Select Submit button
  const submitButton = document.querySelector(".erf-button");

  // Select Input Elements
  const name = document.querySelector("[data-ref-label='NameCompany']");
  const address = document.querySelector("[data-ref-label='Address']");
  const city = document.querySelector("[data-ref-label='City']");
  const state = document.querySelector("[data-ref-label='State']");
  const zip = document.querySelector("[data-ref-label='Zip']");
  const email = document.querySelector("[data-ref-label='Email']");
  const phone = document.querySelector("[data-ref-label='Phone']");
  const ticketOrSponsorship = document.querySelector(
    "[data-ref-label='Individual_Tickets_or_Sponsorship']"
  );
  const guestList = document.querySelector(
    "[data-ref-label='Please_list_additional_guests_names_belo']"
  );
  const comments = document.querySelector("[data-ref-label='Comments']");

  // Error notifications
  const errorsContainer = document.querySelector(".erf-errors");
  const errorsBody = document.querySelector(".erf-errors-body");

  const removeAllChildren = (parent) => {
    while (parent.firstChild) {
      parent.removeChild(parent.firstChild);
    }
  };

  submitButton.addEventListener("click", (e) => {
    e.preventDefault();

    // Reset form errors on each submission

    removeAllChildren(errorsBody);

    // Check for blank inputs

    if (name.value === "") {
      error = document.createElement("p");
      error.innerText = "Please enter your name or company name";
      errorsContainer.style.display = "block";
      errorsBody.appendChild(error);
    }
    if (address.value === "") {
      error = document.createElement("p");
      error.innerText = "Please enter your address";
      errorsContainer.style.display = "block";
      errorsBody.appendChild(error);
    }
    if (city.value === "") {
      error = document.createElement("p");
      error.innerText = "Please enter your city";
      errorsContainer.style.display = "block";
      errorsBody.appendChild(error);
    }
    if (state.value === "") {
      error = document.createElement("p");
      error.innerText = "Please enter your state";
      errorsContainer.style.display = "block";
      errorsBody.appendChild(error);
    }
    if (zip.value === "") {
      error = document.createElement("p");
      error.innerText = "Please enter your ZIP code";
      errorsContainer.style.display = "block";
      errorsBody.appendChild(error);
    }
    if (email.value === "") {
      error = document.createElement("p");
      error.innerText = "Please enter your email address";
      errorsContainer.style.display = "block";
      errorsBody.appendChild(error);
    }

    if (errorsBody.children.length) {
      errorsContainer.scrollIntoView();
    } else {
      fetch("https://communitysmiles.org/laugh-for-a-smile/", {
        credentials: "include",
        headers: {
          "User-Agent":
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.16; rv:85.0) Gecko/20100101 Firefox/85.0",
          Accept:
            "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
          "Accept-Language": "en-US,en;q=0.5",
          "Content-Type":
            "multipart/form-data; boundary=-----------------------------14758021244545991971866711692",
          "Upgrade-Insecure-Requests": "1",
          Pragma: "no-cache",
          "Cache-Control": "no-cache",
        },
        referrer: "https://communitysmiles.org/laugh-for-a-smile/",
        body: `-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"text-208443571091\"\r\n\r\n${name.value}\r\n-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"text-312830671367\"\r\n\r\n${address.value}\r\n-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"text-1553094084333\"\r\n\r\n${city.value}\r\n-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"text-1553094073525\"\r\n\r\n${state.value}\r\n-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"text-1553094096509\"\r\n\r\n${zip.value}\r\n-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"text-14202907098\"\r\n\r\n${email.value}\r\n-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"text-1553093863734\"\r\n\r\n${phone.value}\r\n-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"select-1553093926671\"\r\n\r\n${ticketOrSponsorship.value}\r\n-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"textarea-14345937166\"\r\n\r\n${guestList.value}\r\n-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"field-3JhDiRYFFCo3eDJ\"\r\n\r\n${comments.value}\r\n-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"button-8336597244\"\r\n\r\n\r\n-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"erform_id\"\r\n\r\n230\r\n-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"erform_submission_nonce\"\r\n\r\nd4f9fd5b96\r\n-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"_wp_http_referer\"\r\n\r\n/laugh-for-a-smile/\r\n-----------------------------14758021244545991971866711692\r\nContent-Disposition: form-data; name=\"action\"\r\n\r\nerf_submit_form\r\n-----------------------------14758021244545991971866711692--\r\n`,
        method: "POST",
        mode: "cors",
      })
        .then((res) => console.log("Form Submitted Successfully"))
        .then(() =>
          setTimeout(
            () =>
              (window.location.href =
                "https://forms.donorsnap.com/form?id=9a9a1602-d0bb-4614-8cd1-8b179122dbe6"),
            2000
          )
        );
    }
  });
});
