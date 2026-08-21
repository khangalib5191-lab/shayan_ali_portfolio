document.addEventListener("DOMContentLoaded", () => {

    /* ==========================================
       PRELOADER
    ========================================== */

    const preloader = document.getElementById("preloader");

    if (preloader) {

        window.addEventListener("load", () => {

            setTimeout(() => {

                preloader.style.opacity = "0";
                preloader.style.visibility = "hidden";

            }, 500);

        });

    }


    /* ==========================================
       FOOTER YEAR
    ========================================== */

    const year = document.getElementById("year");

    if (year) {
        year.textContent = new Date().getFullYear();
    }


    /* ==========================================
       PROJECT FILTERING
    ========================================== */

    const filterButtons =
        document.querySelectorAll(".btn-filter");

    const projectItems =
        document.querySelectorAll(".project-item");


    filterButtons.forEach(button => {

        button.addEventListener("click", () => {

            const filter =
                button.dataset.filter;


            /* Active button */

            filterButtons.forEach(btn => {
                btn.classList.remove("active");
            });

            button.classList.add("active");


            /* Filter projects */

            projectItems.forEach(project => {

                const category =
                    project.dataset.category;


                if (
                    filter === "all" ||
                    category === filter
                ) {

                    project.style.display = "block";

                    project.classList.remove("animate-fade");

                    void project.offsetWidth;

                    project.classList.add("animate-fade");

                } else {

                    project.style.display = "none";

                }

            });

        });

    });


    /* ==========================================
       CONTACT FORM LOADING STATE
    ========================================== */

    const contactForm =
        document.getElementById("portfolio-contact-form");


    if (contactForm) {

        contactForm.addEventListener("submit", () => {

            const submitButton =
                contactForm.querySelector(
                    "button[type='submit']"
                );


            if (submitButton) {

                submitButton.disabled = true;

                submitButton.innerHTML = `
                    <span class="button-text">
                        <i class="fa-solid fa-spinner fa-spin"></i>
                        Sending Message...
                    </span>
                `;

            }

        });

    }


    /* ==========================================
       ACTIVE NAVIGATION LINK
    ========================================== */

    const sections =
        document.querySelectorAll("section, header");

    const navLinks =
        document.querySelectorAll(".nav-link");


    const observer = new IntersectionObserver(

        entries => {

            entries.forEach(entry => {

                if (entry.isIntersecting) {

                    const id =
                        entry.target.getAttribute("id");


                    navLinks.forEach(link => {

                        link.classList.remove("active");


                        if (
                            link.getAttribute("href") === `#${id}`
                        ) {
                            link.classList.add("active");
                        }

                    });

                }

            });

        },

        {
            threshold: 0.35
        }

    );


    sections.forEach(section => {
        observer.observe(section);
    });


    /* ==========================================
       CLOSE MOBILE NAV AFTER CLICK
    ========================================== */

    const navbarCollapse =
        document.getElementById("navbarNav");


    const mobileNavLinks =
        document.querySelectorAll(
            "#navbarNav .nav-link"
        );


    mobileNavLinks.forEach(link => {

        link.addEventListener("click", () => {

            if (
                window.innerWidth < 992 &&
                navbarCollapse.classList.contains("show")
            ) {

                const collapse =
                    bootstrap.Collapse.getInstance(navbarCollapse);

                if (collapse) {
                    collapse.hide();
                }

            }

        });

    });


    console.log(
        "Shayan Ali Portfolio — Ready."
    );

});