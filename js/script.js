const navbar = document.getElementsByTagName("nav")[0];
window.addEventListener("scroll", function () {
  console.log(this.window.scrollY);
  if (this.window.scrollY > 1) {
    navbar.classList.replace("bg-transparent", "nav-color");
  } else if (window.scrollY <= 0) {
    navbar.classList.replace("nav-color", "bg-transparent");
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".count-up");
  const speed = 200; // Kecepatan animasi angka

  const options = {
    threshold: 0.5
  };

  const callback = function(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counter = entry.target;
        const updateCount = () => {
          const target = +counter.getAttribute("data-target");
          const count = +counter.innerText;

          const increment = target / speed;

          if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 1);
          } else {
            counter.innerText = target;
          }
        };

        updateCount();
        observer.unobserve(counter);
      }
    });
  };

  const observer = new IntersectionObserver(callback, options);

  counters.forEach(counter => {
    observer.observe(counter);
  });
});
