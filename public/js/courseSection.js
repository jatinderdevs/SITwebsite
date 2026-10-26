// Requires GSAP (already in your project)
document.addEventListener("DOMContentLoaded", () => {
  const track = document.getElementById("ulrTrack");
  const cards = track.querySelectorAll(".ulr-card");
  const prevBtn = document.querySelector(".ulr-prev");
  const nextBtn = document.querySelector(".ulr-next");

  if (!track || cards.length === 0) return;

  let currentIndex = 0;
  const gap = 20; // must match CSS gap

  function getCardWidth() {
    return cards[0].offsetWidth + gap;
  }

  function updateButtons() {
    prevBtn.disabled = currentIndex === 0;
    // Allow sliding until the last card is fully visible
    const maxIndex = Math.max(
      0,
      cards.length -
        Math.floor(track.parentElement.offsetWidth / getCardWidth()),
    );
    nextBtn.disabled = currentIndex >= maxIndex;
  }

  function goTo(index) {
    currentIndex = Math.max(0, Math.min(index, cards.length - 1));
    const x = -currentIndex * getCardWidth();

    gsap.to(track, {
      x: x,
      duration: 0.65,
      ease: "power3.out",
    });

    updateButtons();
  }

  prevBtn.addEventListener("click", () => goTo(currentIndex - 1));
  nextBtn.addEventListener("click", () => goTo(currentIndex + 1));

  // Recalculate on resize
  let resizeTimer;
  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      goTo(currentIndex); // re-snap
    }, 150);
  });

  // Initial state
  updateButtons();

  // Optional: keyboard support
  track.parentElement.addEventListener("keydown", (e) => {
    if (e.key === "ArrowLeft") goTo(currentIndex - 1);
    if (e.key === "ArrowRight") goTo(currentIndex + 1);
  });
});
