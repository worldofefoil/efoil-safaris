(() => {
  const menuButton = document.querySelector(".menu-toggle");
  const navigation = document.querySelector(".site-navigation");

  const closeMenu = () => {
    if (!menuButton || !navigation) return;
    menuButton.setAttribute("aria-expanded", "false");
    navigation.classList.remove("is-open");
    document.body.classList.remove("menu-open");
  };

  if (menuButton && navigation) {
    menuButton.addEventListener("click", () => {
      const open = menuButton.getAttribute("aria-expanded") !== "true";
      menuButton.setAttribute("aria-expanded", String(open));
      navigation.classList.toggle("is-open", open);
      document.body.classList.toggle("menu-open", open);
    });

    navigation.addEventListener("click", (event) => {
      if (event.target instanceof HTMLAnchorElement) closeMenu();
    });

    window.addEventListener("resize", () => {
      if (window.innerWidth >= 1080) closeMenu();
    });

    document.addEventListener("keydown", (event) => {
      if (event.key === "Escape") closeMenu();
    });
  }

  const dateSelect = document.querySelector("#preferred-date");
  document.querySelectorAll("[data-date]").forEach((link) => {
    link.addEventListener("click", () => {
      if (!dateSelect) return;
      dateSelect.value = link.getAttribute("data-date") || "Any available week";
    });
  });

  const lightbox = document.querySelector("[data-lightbox]");
  const items = Array.from(document.querySelectorAll("[data-lightbox-item]"));

  if (lightbox instanceof HTMLDialogElement && items.length) {
    const image = lightbox.querySelector("img");
    const caption = lightbox.querySelector("p");
    const previous = lightbox.querySelector(".lightbox-prev");
    const next = lightbox.querySelector(".lightbox-next");
    const close = lightbox.querySelector(".lightbox-close");
    let currentIndex = 0;

    const render = (index) => {
      currentIndex = (index + items.length) % items.length;
      const current = items[currentIndex];
      const currentImage = current.querySelector("img");
      const currentCaption = current.querySelector("figcaption");
      if (!currentImage || !image || !caption) return;
      image.src = currentImage.currentSrc || currentImage.src;
      image.alt = currentImage.alt;
      caption.textContent = currentCaption ? currentCaption.textContent.trim() : currentImage.alt;
    };

    const openLightbox = (index) => {
      render(index);
      lightbox.showModal();
    };

    items.forEach((item, index) => {
      item.addEventListener("click", () => openLightbox(index));
      item.addEventListener("keydown", (event) => {
        if (event.key === "Enter" || event.key === " ") {
          event.preventDefault();
          openLightbox(index);
        }
      });
    });

    previous?.addEventListener("click", () => render(currentIndex - 1));
    next?.addEventListener("click", () => render(currentIndex + 1));
    close?.addEventListener("click", () => lightbox.close());

    lightbox.addEventListener("click", (event) => {
      if (event.target === lightbox) lightbox.close();
    });

    lightbox.addEventListener("keydown", (event) => {
      if (event.key === "ArrowLeft") render(currentIndex - 1);
      if (event.key === "ArrowRight") render(currentIndex + 1);
    });
  }
})();

