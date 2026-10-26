document.querySelectorAll(".sit-c-filter-btn").forEach((btn) => {
  btn.addEventListener("click", () => {
    document
      .querySelectorAll(".sit-c-filter-btn")
      .forEach((b) => b.classList.remove("is-active"));
    btn.classList.add("is-active");

    const filter = btn.dataset.filter;
    let visible = 0;

    document.querySelectorAll(".sit-c-card").forEach((card) => {
      const match = filter === "all" || card.dataset.category === filter;
      card.hidden = !match;
      if (match) visible++;
    });

    document
      .getElementById("emptyState")
      .classList.toggle("is-visible", visible === 0);
  });
});
