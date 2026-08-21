document.addEventListener("DOMContentLoaded", () => {

    /* ==========================================
       PRELOADER EFFORTLESS FADE
    ========================================== */
    const preloader = document.getElementById("preloader");

    if (preloader) {
        window.addEventListener("load", () => {
            setTimeout(() => {
                preloader.style.opacity = "0";
                preloader.style.visibility = "hidden";
            }, 400);
        });
    }

    /* ==========================================
       AUTO-UPDATE FOOTER YEAR
    ========================================== */
    const yearSpan = document.getElementById("year");
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }

    /* ==========================================
       PROJECT CATEGORY FILTERING
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
                    void project.offsetWidth; // Trigger reflow for animation
                    project.classList.add("animate-fade");
                } else {
                    project.style.display = "none";
                }
            });
        });
    });

    /* ==========================================
       CONTACT FORM SUBMIT STATE
    ========================================== */
    const contactForm = document.getElementById("portfolio-contact-form");

    if (contactForm) {
        contactForm.addEventListener("submit", () => {
            const submitButton = contactForm.querySelector("button[type='submit']");

            if (submitButton) {
                submitButton.disabled = true;
                submitButton.innerHTML = `
                    <span class="button-text">
                        <i class="fa-solid fa-circle-notch fa-spin me-2"></i>
                        Sending Message...
                    </span>
                `;
            }
        });
    }

    /* ==========================================
       ACTIVE NAV LINK INTERSECTION OBSERVER
    ========================================== */
    const sections = document.querySelectorAll("section, header");
    const navLinks = document.querySelectorAll(".nav-link");

    const observer = new IntersectionObserver(
        entries => {
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
       AUTO CLOSE MOBILE NAV ON SELECTION
    ========================================== */
    const navbarCollapse = document.getElementById("navbarNav");
    const mobileNavLinks = document.querySelectorAll("#navbarNav .nav-link, #navbarNav .nav-cta");

    mobileNavLinks.forEach(link => {
        link.addEventListener("click", () => {
            if (window.innerWidth < 992 && navbarCollapse.classList.contains("show")) {
                const collapse = bootstrap.Collapse.getInstance(navbarCollapse);
                if (collapse) {
                    collapse.hide();
                }
            }
        });
    });

});