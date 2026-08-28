(($) => {
  $(document).on("click", ".woe-select-media", function () {
    const field = $(this).closest(".woe-media-field");
    const type = field.data("media-type") || "image";
    const frame = wp.media({
      title: type === "video" ? "Video auswählen" : "Bild auswählen",
      button: { text: "Übernehmen" },
      library: { type },
      multiple: false
    });

    frame.on("select", () => {
      const attachment = frame.state().get("selection").first().toJSON();
      field.find("input[type=hidden]").val(attachment.id);
	  field.removeClass("is-empty");
      if (type === "video") {
        field.find("video").attr("src", attachment.url);
      } else {
        const url = attachment.sizes?.medium?.url || attachment.url;
        field.find("img").attr("src", url);
      }
      field.addClass("has-custom-media");
    });

    frame.open();
  });

  $(document).on("click", ".woe-reset-media", function () {
    const field = $(this).closest(".woe-media-field");
    const type = field.data("media-type") || "image";
    const defaultPreview = field.data("default-preview");
    field.find("input[type=hidden]").val("");
    field.find(type === "video" ? "video" : "img").attr("src", defaultPreview);
	field.toggleClass("is-empty", !defaultPreview);
    field.removeClass("has-custom-media");
  });
})(jQuery);
