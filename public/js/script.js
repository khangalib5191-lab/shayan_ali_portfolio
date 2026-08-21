document.addEventListener("DOMContentLoaded", () => {

    /* ==========================================
       1. PRELOADER CONTROLLER
    ========================================== */
    const preloader = document.getElementById("preloader");
    if (preloader) {
        window.addEventListener("load", () => {
            setTimeout(() => {
                preloader.style.opacity = "0";
                preloader.style.visibility = "hidden";
            }, 300);
        });
    }

    /* ==========================================
       2. AUTOMATIC FOOTER YEAR
    ========================================== */
    const yearElement = document.getElementById("year");
    if (yearElement) {
        yearElement.textContent = new Date().getFullYear();
    }

    /* ==========================================
       3. INTERACTIVE PROJECT FILTERING
    ========================================== */
    const filterButtons = document.querySelectorAll(".btn-filter");
    const projectItems = document.querySelectorAll(".project-item");

    filterButtons.forEach(button => {
        button.addEventListener("click", () => {
            const filter = button.dataset.filter;

            filterButtons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");

            projectItems.forEach(project => {
                const category = project.dataset.category;

                if (filter === "all" || category === filter) {
                    project.style.display = "block";
                    project.classList.remove("animate-fade");
                    void project.offsetWidth; // Force re-flow for animation reset
                    project.classList.add("animate-fade");
                } else {
                    project.style.display = "none";
                }
            });
        });
    });

    /* ==========================================
       4. FORM SUBMIT STATE MANAGEMENT
    ========================================== */
    const contactForm = document.getElementById("portfolio-contact-form");
    if (contactForm) {
        contactForm.addEventListener("submit", () => {
            const submitButton = contactForm.querySelector("button[type='submit']");
            if (submitButton) {
                submitButton.disabled = true;
                submitButton.innerHTML = `
                    <span class="button-text">
                        <i class="fa-solid fa-spinner fa-spin me-2"></i> Processing...
                    </span>
                `;
            }
        });
    }

    /* ==========================================
       5. ACTIVE NAV HIGHLIGHTER (OBSERVER)
    ========================================== */
    const sections = document.querySelectorAll("section, header");
    const navLinks = document.querySelectorAll(".nav-link");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute("id");
                    navLinks.forEach(link => {
                        link.classList.remove("active");
                        if (link.getAttribute("href") === `#${id}`) {
                            link.classList.add("active");
                        }
                    });
                }
            });
        },
        { threshold: 0.3 }
    );

    sections.forEach(section => observer.observe(section));

    /* ==========================================
       6. AUTO-CLOSE MOBILE NAVIGATION
    ========================================== */
    const navbarCollapse = document.getElementById("navbarNav");
    const mobileNavLinks = document.querySelectorAll("#navbarNav .nav-link, #navbarNav .nav-cta");

    mobileNavLinks.forEach(link => {
        link.addEventListener("click", () => {
            if (window.innerWidth < 992 && navbarCollapse.classList.contains("show")) {
                const bootstrapCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                if (bootstrapCollapse) {
                    bootstrapCollapse.hide();
                }
            }
        });
    });

    /* ==========================================
       7. DYNAMIC TILT EFFECT FOR PROFILE CARD
    ========================================== */
    const card = document.querySelector('.developer-card');
    if (card && window.innerWidth > 991) {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            card.style.transform = `perspective(1000px) rotateX(${-y / 20}deg) rotateY(${x / 20}deg) translateY(-5px)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = `perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)`;
        });
    }

    /* ==========================================
   THEME TOGGLE CONTROLLER
========================================== */
    const themeToggleBtn = document.getElementById("theme-toggle");
    const currentTheme = localStorage.getItem("portfolio-theme") || "dark";

    // Set initial theme state on load
    if (currentTheme === "light") {
        document.documentElement.setAttribute("data-theme", "light");
    }

    if (themeToggleBtn) {
        themeToggleBtn.addEventListener("click", () => {
            const activeTheme = document.documentElement.getAttribute("data-theme");

            if (activeTheme === "light") {
                document.documentElement.removeAttribute("data-theme");
                localStorage.setItem("portfolio-theme", "dark");
            } else {
                document.documentElement.setAttribute("data-theme", "light");
                localStorage.setItem("portfolio-theme", "light");
            }
        });
    }

});