/* color mode */
const styleSwitcherToggler = document.querySelector(".style-switcher-toggler");
styleSwitcherToggler.addEventListener("click", () => {
  document.querySelector(".style-switcher").classList.toggle("open");
});

window.addEventListener("scroll", () => {
  if (document.querySelector(".style-switcher").classList.contains("open")) {
    document.querySelector(".style-switcher").classList.remove("open");
  }
});

const alernateStyle = document.querySelectorAll(".alternate-style");
function setActiveStyle(color) {
  localStorage.setItem("color", color);
  changeColor();
}

function changeColor() {
  alernateStyle.forEach((style) => {
    if (localStorage.getItem("color") === style.getAttribute("title")) {
      style.removeAttribute("disabled");
    } else {
      {
        style.setAttribute("disabled", "true");
      }
    }
  });
}

/* dark - light mode */
const dayNight = document.querySelector(".day-night");
dayNight.addEventListener("click", () => {
  dayNight.querySelector("i").classList.toggle("fa-sun");
  dayNight.querySelector("i").classList.toggle("fa-moon");
  document.body.classList.toggle("dark");
});

window.addEventListener("load", () => {
  if (document.body.classList.contains("dark")) {
    dayNight.querySelector("i").classList.add("fa-sun");
  } else {
    dayNight.querySelector("i").classList.add("fa-moon");
  }
});

// aside linklerine tıklama olayı ekleme
document.querySelectorAll(".nav a").forEach((item) => {
  item.addEventListener("click", function () {
    // Tüm linklerden 'active' sınıfını kaldır
    document.querySelectorAll(".nav a").forEach((link) => {
      link.classList.remove("active");
    });
    // Tıklanan öğeye 'active' sınıfını ekle
    this.classList.add("active");
  });
});

// Sayfa bölümlerine kaydırma işlemi gerçekleştiğinde aktif sınıfı güncelleme
document.querySelectorAll(".nav a").forEach((item) => {
  item.addEventListener("click", function () {
    document.querySelectorAll(".nav a").forEach((link) => {
      link.classList.remove("active");
    });
    this.classList.add("active");
  });
});

// Sayfa bölümlerine kaydırma işlemi gerçekleştiğinde aktif sınıfı güncelleme
window.addEventListener("scroll", function () {
  const currentSection = document.querySelectorAll(".section");
  let current;

  for (let i = 0; i < currentSection.length; i++) {
    if (window.scrollY + 100 >= currentSection[i].offsetTop) {
      current = currentSection[i];
    }
  }

  document.querySelectorAll(".nav a").forEach((link) => {
    link.classList.remove("active");
    if (current.getAttribute("id") === link.getAttribute("href").substring(1)) {
      link.classList.add("active");
    }
  });
});

let scrollInterval; // Kaydırma aralığı değişkeni tanımlandı

document.querySelectorAll(".nav a").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const targetId = this.getAttribute("href").substring(1);
    const targetSection = document.getElementById(targetId);

    if (targetSection) {
      const offsetTop = targetSection.offsetTop;

      // Mevcut kaydırma işlemini durdur
      if (scrollInterval) {
        clearInterval(scrollInterval);
      }

      // Yeni bir kaydırma işlemi başlat
      scrollInterval = setInterval(function () {
        const distance = offsetTop - window.pageYOffset;
        const step = Math.ceil(distance / 20);
        if (distance > 1 || distance < -1) {
          window.scrollBy(0, step);
        } else {
          clearInterval(scrollInterval);
          window.scrollTo(0, offsetTop);
        }
      }, 15);
    }
  });
});

document.querySelectorAll(".home a").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const targetId = this.getAttribute("href").substring(1);
    const targetSection = document.getElementById(targetId);

    if (targetSection) {
      const offsetTop = targetSection.offsetTop;

      if (scrollInterval) {
        clearInterval(scrollInterval);
      }

      // Yeni bir kaydırma işlemi başlat
      scrollInterval = setInterval(function () {
        const distance = offsetTop - window.pageYOffset;
        const step = Math.ceil(distance / 20);
        if (distance > 1 || distance < -1) {
          window.scrollBy(0, step);
        } else {
          clearInterval(scrollInterval);
          window.scrollTo(0, offsetTop);
        }
      }, 15);
    }
  });
});

document.querySelectorAll(".about a").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const targetId = this.getAttribute("href").substring(1);
    const targetSection = document.getElementById(targetId);

    if (targetSection) {
      const offsetTop = targetSection.offsetTop;

      if (scrollInterval) {
        clearInterval(scrollInterval);
      }

      // Yeni bir kaydırma işlemi başlat
      scrollInterval = setInterval(function () {
        const distance = offsetTop - window.pageYOffset;
        const step = Math.ceil(distance / 20);
        if (distance > 1 || distance < -1) {
          window.scrollBy(0, step);
        } else {
          clearInterval(scrollInterval);
          window.scrollTo(0, offsetTop);
        }
      }, 15);
    }
  });
});

document.querySelectorAll(".nav a").forEach((anchor) => {
  anchor.addEventListener("mousedown", function (mousedownEvent) {
    mousedownEvent.preventDefault();

    const targetId = this.getAttribute("href").substring(1);
    const targetSection = document.getElementById(targetId);

    if (targetSection) {
      const offsetTop = targetSection.offsetTop;
      const startY = mousedownEvent.clientY;
      const initialYOffset = window.pageYOffset;

      const mousemoveHandler = (mousemoveEvent) => {
        const deltaY = mousemoveEvent.clientY - startY;
        const newScrollTop = initialYOffset + deltaY;
        window.scrollTo(0, newScrollTop);
      };

      const mouseupHandler = () => {
        document.removeEventListener("mousemove", mousemoveHandler);
        document.removeEventListener("mouseup", mouseupHandler);
      };

      document.addEventListener("mousemove", mousemoveHandler);
      document.addEventListener("mouseup", mouseupHandler);
    }
  });
});

document.querySelectorAll(".home a").forEach((anchor) => {
  anchor.addEventListener("mousedown", function (mousedownEvent) {
    mousedownEvent.preventDefault();

    const targetId = this.getAttribute("href").substring(1);
    const targetSection = document.getElementById(targetId);

    if (targetSection) {
      const offsetTop = targetSection.offsetTop;
      const startY = mousedownEvent.clientY;
      const initialYOffset = window.pageYOffset;

      const mousemoveHandler = (mousemoveEvent) => {
        const deltaY = mousemoveEvent.clientY - startY;
        const newScrollTop = initialYOffset + deltaY;
        window.scrollTo(0, newScrollTop);
      };

      const mouseupHandler = () => {
        document.removeEventListener("mousemove", mousemoveHandler);
        document.removeEventListener("mouseup", mouseupHandler);
      };

      document.addEventListener("mousemove", mousemoveHandler);
      document.addEventListener("mouseup", mouseupHandler);
    }
  });
});

document.querySelectorAll(".about a").forEach((anchor) => {
  anchor.addEventListener("mousedown", function (mousedownEvent) {
    mousedownEvent.preventDefault();

    const targetId = this.getAttribute("href").substring(1);
    const targetSection = document.getElementById(targetId);

    if (targetSection) {
      const offsetTop = targetSection.offsetTop;
      const startY = mousedownEvent.clientY;
      const initialYOffset = window.pageYOffset;

      const mousemoveHandler = (mousemoveEvent) => {
        const deltaY = mousemoveEvent.clientY - startY;
        const newScrollTop = initialYOffset + deltaY;
        window.scrollTo(0, newScrollTop);
      };

      const mouseupHandler = () => {
        document.removeEventListener("mousemove", mousemoveHandler);
        document.removeEventListener("mouseup", mouseupHandler);
      };

      document.addEventListener("mousemove", mousemoveHandler);
      document.addEventListener("mouseup", mouseupHandler);
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const navToggler = document.querySelector(".nav-toggler");
  const aside = document.querySelector(".aside");

  navToggler.addEventListener("click", function () {
    aside.classList.toggle("open");
  });
});

// Preloader
$(window).on("load", function () {
  if ($("#preloader").length) {
    $("#preloader")
      .delay(100)
      .fadeOut("slow", function () {
        $(this).remove();
      });
  }
});

$(function () {
  $("#top").click(function () {
    $("html,body").stop().animate({ scrollTop: "0" }, 1000);
  });
});
$(window).scroll(function () {
  var uzunluk = $(document).scrollTop();
  if (uzunluk > 300) $("#top").fadeIn(500);
  else {
    $("#top").fadeOut(500);
  }
});
