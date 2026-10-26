document.fonts.ready.then(() => {
  const split = SplitText.create(".txteffect", { type: "chars" });

  gsap.from(split.chars, {
    x: 150,
    opacity: 0,
    duration: 0.7,
    ease: "power4",
    stagger: 0.04,
  });
});
document.addEventListener("DOMContentLoaded", () => {
  const section = document.getElementsByClassName("excellence")[0];
  const lottieEl = document.getElementById("bg-lottie");

  if (!section || !lottieEl) return;

  function setup() {
    const player = lottieEl.dotLottie;
    if (!player) {
      setTimeout(setup, 100);
      return;
    }

    player.setLoop(false);
    player.setSpeed(0.4);
    player.stop();

    section.addEventListener("mouseenter", () => {
      lottieEl.style.opacity = "0.7";
      player.stop();
      player.play();
    });
  }

  lottieEl.dotLottie ? setup() : lottieEl.addEventListener("ready", setup);
});

//student testimonials carousal
const testiCard = document.querySelectorAll(".t-card");
const dotsWrap = document.getElementById("testiDots");
const slider = document.getElementById("testiSlider");

if (testiCard.length && dotsWrap && slider) {
  let idx = 0;
  let timer;

  testiCard.forEach((_, i) => {
    const b = document.createElement("button");
    if (i === 0) b.classList.add("active");
    b.addEventListener("click", () => goTo(i));
    dotsWrap.appendChild(b);
  });
  const dots = dotsWrap.querySelectorAll("button");

  function goTo(i) {
    testiCard[idx].classList.remove("active");
    dots[idx].classList.remove("active");
    idx = i;
    testiCard[idx].classList.add("active");
    dots[idx].classList.add("active");
  }

  function next() {
    goTo((idx + 1) % testiCard.length);
  }

  function startAuto() {
    timer = setInterval(next, 4800);
  }
  function stopAuto() {
    clearInterval(timer);
  }

  startAuto();
  slider.addEventListener("mouseenter", stopAuto);
  slider.addEventListener("mouseleave", startAuto);
}
//GSAP statement word effec start

gsap.registerPlugin(ScrollTrigger);

function initStatementReveal() {
  const section = document.querySelector(".statement-section");
  const statement = section.querySelector(".statement");

  // ---- 1. wrap every word in its own <span class="word">, leave <img> alone ----
  // (safe to call once — guarded below so resize doesn't double-wrap)
  if (!statement.dataset.wrapped) {
    const walker = document.createTreeWalker(
      statement,
      NodeFilter.SHOW_TEXT,
      null,
      false,
    );
    const textNodes = [];
    let node;
    while ((node = walker.nextNode())) textNodes.push(node);

    textNodes.forEach((textNode) => {
      const frag = document.createDocumentFragment();
      textNode.textContent.split(/(\s+)/).forEach((chunk) => {
        if (chunk.trim() === "") {
          frag.appendChild(document.createTextNode(chunk));
        } else {
          const span = document.createElement("span");
          span.className = "word";
          span.textContent = chunk;
          frag.appendChild(span);
        }
      });
      textNode.parentNode.replaceChild(frag, textNode);
    });

    statement
      .querySelectorAll("img")
      .forEach((img) => img.classList.add("g-img"));
    statement.dataset.wrapped = "true";
  }

  // ---- 2. group words + images into visual lines by their top position ----
  const items = Array.from(statement.querySelectorAll(".word, .g-img"));
  const lines = [];
  let currentTop = null,
    currentLine = [];

  items.forEach((el) => {
    const top = Math.round(el.getBoundingClientRect().top);
    if (currentTop === null || Math.abs(top - currentTop) > 8) {
      if (currentLine.length) lines.push(currentLine);
      currentLine = [el];
      currentTop = top;
    } else {
      currentLine.push(el);
    }
  });
  if (currentLine.length) lines.push(currentLine);

  // ---- 3. reset any previous run (needed for resize rebuilds) ----
  if (statement._tl) statement._tl.kill();
  gsap.set(".statement .word", { opacity: 0, y: 24 });
  gsap.set(".statement .g-img", {
    opacity: 0,
    scale: 0.3,
    rotate: -10,
    transformOrigin: "50% 50%",
  });

  // ---- 4. build the scroll-triggered reveal timeline ----
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: section,
      start: "top 75%",
      toggleActions: "play none none reverse", // plays in, reverses if you scroll back up
    },
  });

  lines.forEach((line, i) => {
    const words = line.filter((el) => el.classList.contains("word"));
    const imgs = line.filter((el) => el.classList.contains("g-img"));
    const start = i * 0.18; // cascades — next line starts before previous fully finishes

    if (words.length) {
      tl.to(
        words,
        { opacity: 1, y: 0, duration: 0.6, ease: "power3.out", stagger: 0.02 },
        start,
      );
    }
    imgs.forEach((img) => {
      tl.to(
        img,
        {
          opacity: 1,
          scale: 1,
          rotate: 0,
          duration: 0.7,
          ease: "back.out(2.2)",
        },
        start + 0.08,
      );
    });
  });

  statement._tl = tl;
}

// Wait for images to load (they affect line-wrapping) before measuring lines
window.addEventListener("load", initStatementReveal);

// Rebuild on resize since word-wrapping changes at different viewport widths.
// Guard on width only — mobile browsers fire resize when the address bar
// hides/shows during scroll, and rebuilding mid-scroll causes the words to
// flash back to opacity:0.
let statementResizeTimer;
let statementLastWidth = window.innerWidth;
window.addEventListener("resize", () => {
  if (window.innerWidth === statementLastWidth) return;
  statementLastWidth = window.innerWidth;
  clearTimeout(statementResizeTimer);
  statementResizeTimer = setTimeout(initStatementReveal, 250);
});
//GSAP statment word effect end

//Excellence section script start
(function () {
  gsap.registerPlugin(ScrollTrigger);

  function initExcellenceSection() {
    // ---- heading / intro paragraph: simple fade-up on scroll ----
    gsap.utils.toArray(".excellence .reveal-up").forEach((el, i) => {
      gsap.fromTo(
        el,
        { opacity: 0, y: 30 },
        {
          opacity: 1,
          y: 0,
          duration: 0.7,
          ease: "power3.out",
          delay: i * 0.1,
          scrollTrigger: { trigger: el, start: "top 85%" },
        },
      );
    });

    // ---- stat cards: entrance + count-up, each fires once ----
    gsap.utils.toArray(".excel_count").forEach((card, i) => {
      const numEl = card.querySelector(".count");
      const barFill = card.querySelector(".excel_bar_fill");
      const glow = card.querySelector(".excel_glow");

      const target = parseFloat(numEl.dataset.count);
      const decimals = parseInt(numEl.dataset.decimals || "0", 10);
      const suffix = numEl.dataset.suffix || "";
      const counter = { val: 0 };

      gsap.set(card, { opacity: 0, y: 24 });

      ScrollTrigger.create({
        trigger: card,
        start: "top 82%",
        once: true,
        onEnter: () => {
          const tl = gsap.timeline({ delay: i * 0.12 });

          tl.to(
            card,
            { opacity: 1, y: 0, duration: 0.5, ease: "power3.out" },
            0,
          )
            .to(
              glow,
              { opacity: 0.55, scale: 1, duration: 0.6, ease: "power2.out" },
              0.1,
            )
            .to(
              counter,
              {
                val: target,
                duration: 1.6,
                ease: "power2.out",
                onUpdate: () => {
                  numEl.textContent = counter.val.toFixed(decimals) + suffix;
                },
              },
              0.15,
            )
            .to(
              barFill,
              { width: "100%", duration: 1.6, ease: "power2.out" },
              0.15,
            )
            .to(glow, { opacity: 0, duration: 0.5 }, ">-0.3");
        },
      });
    });

    // recalculate trigger positions once everything (fonts, lottie, images) has settled
    ScrollTrigger.refresh();
  }

  window.addEventListener("load", initExcellenceSection);
})();
///Excellence section script end

/// start Gallery script
(function () {
  gsap.registerPlugin(ScrollTrigger);

  // Desktop pin/horizontal-scrub only. On mobile (<=767px) the CSS provides a
  // native horizontal scroller, so we deliberately create NO ScrollTrigger there
  // — otherwise the pin creates a blank pinned area and the reveal tweens leave
  // the images stuck at opacity:0 because the track can't move.
  // gsap.matchMedia() handles the breakpoint switch and auto-cleans up.
  const galleryMM = gsap.matchMedia();

  galleryMM.add("(min-width: 768px)", () => {
    const track = document.getElementById("track");
    const pinSection = document.getElementById("galleryPin");
    const railFill = document.getElementById("railFill");
    const items = gsap.utils.toArray(".g-item:not(.spacer)");

    if (!track || !pinSection) return;

    const getDistance = () =>
      Math.max(track.scrollWidth - window.innerWidth, 0) +
      window.innerWidth * 0.35;

    // ---- main horizontal scrub (pins the section, moves the track) ----
    const horizontalTween = gsap.to(track, {
      x: () => -getDistance(),
      ease: "none",
      scrollTrigger: {
        trigger: pinSection,
        start: "top top",
        end: () => "+=" + getDistance(),
        pin: true,
        scrub: 1,
        invalidateOnRefresh: true,
        onUpdate: (self) => {
          if (railFill) railFill.style.width = self.progress * 100 + "%";
        },
      },
    });

    // ---- per-item reveal, scrubbed against the horizontal scroll itself ----
    items.forEach((item) => {
      const img = item.querySelector("img");
      const cap = item.querySelector(".cap");

      gsap.set(img, { scale: 1.3, opacity: 0, filter: "blur(10px)" });
      if (cap) gsap.set(cap, { opacity: 0, y: 16 });

      // image un-blurs + scales down to normal as it enters from the right
      gsap.to(img, {
        scale: 1,
        opacity: 1,
        filter: "blur(0px)",
        ease: "power2.out",
        scrollTrigger: {
          trigger: item,
          containerAnimation: horizontalTween, // horizontal position, not vertical page scroll
          start: "left 88%",
          end: "left 42%",
          scrub: true,
        },
      });

      // gentle parallax drift while the item crosses the screen
      gsap.fromTo(
        img,
        { xPercent: -6 },
        {
          xPercent: 6,
          ease: "none",
          scrollTrigger: {
            trigger: item,
            containerAnimation: horizontalTween,
            start: "left right",
            end: "left left",
            scrub: true,
          },
        },
      );

      // caption slides in just after the image has mostly revealed
      if (cap) {
        gsap.to(cap, {
          opacity: 1,
          y: 0,
          ease: "power2.out",
          scrollTrigger: {
            trigger: item,
            containerAnimation: horizontalTween,
            start: "left 65%",
            end: "left 30%",
            scrub: true,
          },
        });
      }
    });

    // gsap.matchMedia calls this when we leave the desktop breakpoint and
    // reverts everything it created, handing the section back to native scroll.
    return () => {
      gsap.set(track, { clearProps: "transform" });
      items.forEach((item) => {
        const img = item.querySelector("img");
        const cap = item.querySelector(".cap");
        if (img) gsap.set(img, { clearProps: "transform,filter,opacity" });
        if (cap) gsap.set(cap, { clearProps: "transform,opacity" });
      });
    };
  });
})();
//end gallery script
