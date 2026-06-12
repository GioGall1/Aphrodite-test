const body = document.body;
const mobileSearch = document.querySelector("#mobile-search");
const mobileSearchInput = document.querySelector("#mobile-search-input");
const mobileSearchToggles = document.querySelectorAll(".js-mobile-search-toggle");
const mobileMenuToggles = document.querySelectorAll(".js-mobile-menu-toggle");
const mobileMenuCloses = document.querySelectorAll(".js-mobile-menu-close");
const footerAccordionToggles = document.querySelectorAll(".js-footer-accordion-toggle");

const setMobileSearchState = (isOpen) => {
    body.classList.toggle("is-mobile-search-open", isOpen);

    mobileSearchToggles.forEach((toggle) => {
        toggle.setAttribute("aria-expanded", String(isOpen));
    });

    if (isOpen && mobileSearchInput) {
        mobileSearchInput.focus();
    }
};

const setMobileMenuState = (isOpen) => {
    body.classList.toggle("is-mobile-menu-open", isOpen);

    mobileMenuToggles.forEach((toggle) => {
        toggle.setAttribute("aria-expanded", String(isOpen));
    });
};

if (mobileSearch && mobileSearchToggles.length) {
    mobileSearchToggles.forEach((toggle) => {
        toggle.addEventListener("click", () => {
            const isOpen = !body.classList.contains("is-mobile-search-open");
            setMobileSearchState(isOpen);
        });
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            setMobileSearchState(false);
        }
    });

    mobileSearch.addEventListener("submit", () => {
        setMobileSearchState(false);
    });
}

if (mobileMenuToggles.length) {
    mobileMenuToggles.forEach((toggle) => {
        toggle.addEventListener("click", () => {
            const isOpen = !body.classList.contains("is-mobile-menu-open");
            setMobileMenuState(isOpen);
        });
    });
}

if (mobileMenuCloses.length) {
    mobileMenuCloses.forEach((button) => {
        button.addEventListener("click", () => {
            setMobileMenuState(false);
        });
    });
}

document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
        setMobileMenuState(false);
    }
});

if (footerAccordionToggles.length) {
    const footerAccordionMedia = window.matchMedia("(max-width: 1279px)");

    const setFooterAccordionState = (toggle, isOpen) => {
        const column = toggle.closest(".js-footer-accordion");

        if (!column) {
            return;
        }

        column.classList.toggle("is-open", isOpen);
        toggle.setAttribute("aria-expanded", String(isOpen));
    };

    footerAccordionToggles.forEach((toggle) => {
        toggle.addEventListener("click", () => {
            if (!footerAccordionMedia.matches) {
                return;
            }

            const column = toggle.closest(".js-footer-accordion");
            const willOpen = !column?.classList.contains("is-open");

            footerAccordionToggles.forEach((otherToggle) => {
                setFooterAccordionState(otherToggle, false);
            });

            setFooterAccordionState(toggle, willOpen);
        });
    });

    const syncFooterAccordion = () => {
        if (!footerAccordionMedia.matches) {
            footerAccordionToggles.forEach((toggle) => {
                setFooterAccordionState(toggle, false);
            });
        }
    };

    syncFooterAccordion();
    footerAccordionMedia.addEventListener("change", syncFooterAccordion);
}
