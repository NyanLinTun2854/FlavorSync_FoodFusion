import "./bootstrap";

// FoodFusion JavaScript Interactions
document.addEventListener("DOMContentLoaded", () => {
    // Initialize CSRF token for all AJAX requests
    const csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    // Set up AJAX defaults
    const ajaxDefaults = {
        headers: {
            "X-CSRF-TOKEN": csrfToken,
            "Content-Type": "application/json",
            Accept: "application/json",
        },
    };

    if (window.openSignInModal) {
        openModal("signInModal");
    }

    if (window.toastData) {
        showToast(toastData);
    }

    // Initialize components
    initializeCookieConsent();
    initializeModals();
    sharedRecipesDietaryPreferences();

    // 👇 Add this
    if (!localStorage.getItem("firstVisit")) {
        openModal("joinUsModal");
        localStorage.setItem("firstVisit", "true");
    }
});

// Modal Management
function initializeModals() {
    // Close modal when clicking outside
    document.addEventListener("click", (e) => {
        if (e.target.classList.contains("modal")) {
            closeModal(e.target.id);
        }
    });

    // Close modal with Escape key
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            const activeModal = document.querySelector(".modal.active");
            if (activeModal) {
                closeModal(activeModal.id);
            }
        }
    });
}

function sharedRecipesDietaryPreferences() {
    const checkboxes = document.querySelectorAll(
        "#diet-preferences-wrapper .diet-checkbox"
    );
    const hiddenInput = document.getElementById("diet_preferences");

    checkboxes.forEach((cb) => {
        cb.addEventListener("change", () => {
            // toggle label style
            cb.closest("label").classList.toggle("selected", cb.checked);

            // update hidden input
            let selected = Array.from(checkboxes)
                .filter((c) => c.checked)
                .map((c) => c.value);

            hiddenInput.value = JSON.stringify(selected);
        });
    });
}

function handleBurger() {
    const mobileBtn = document.getElementById("mobileMenuBtn");
    const mobileMenu = document.getElementById("mobileMenu");

    // mobileBtn.addEventListener("click", () => {
    mobileMenu.classList.toggle("hidden");
    // });
}

function openModal(modalId) {
    const modal = document.getElementById(modalId);
    const content = modal.querySelector(".modal-content");
    if (modal) {
        // modal.classList.add("active");
        // document.body.style.overflow = "hidden";

        modal.classList.remove("hidden");
        setTimeout(() => {
            content.classList.remove("scale-95");
            content.classList.add("scale-100");
        }, 10);

        // Focus first input
        const firstInput = modal.querySelector("input");
        if (firstInput) {
            setTimeout(() => firstInput.focus(), 100);
        }
    }
}

function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    const content = modal.querySelector(".modal-content");

    if (modal) {
        // modal.classList.remove("active");
        // document.body.style.overflow = "";

        content.classList.remove("scale-100");
        content.classList.add("scale-95");

        setTimeout(() => {
            modal.classList.add("hidden");
        }, 300);

        // Clear form if exists
        const form = modal.querySelector("form");
        if (form) {
            form.reset();
            // clearFormErrors(form);
        }
    }
}

function handleCommunityTab(tabId) {
    const tabs = document.querySelectorAll("[data-community-tab]");
    const sections = document.querySelectorAll("[data-community-section]");
    tabs.forEach((tab) => {
        tab.classList.toggle("community-active-tab", tab.id === tabId);
    });

    sections.forEach((section) => {
        section.classList.toggle(
            "hidden",
            section.dataset.communitySection !== tabId
        );
    });
}

function showToast({
    title,
    description = [],
    type = "success",
    actionText = null,
    action = null,
}) {
    const container = document.getElementById("toast-container");

    const toast = document.createElement("div");
    toast.className = `
        w-80 px-4 py-3 rounded-lg shadow-lg text-sm transition-all duration-500 opacity-0 translate-x-5
        bg-card text-[#333333] flex flex-col gap-1
    `;

    // Title
    const titleEl = document.createElement("p");
    titleEl.className = "font-semibold";
    titleEl.textContent = title;
    toast.appendChild(titleEl);

    // Description
    if (description.length > 0) {
        const descEl = document.createElement("p");
        descEl.className = "text-black text-xs";
        descEl.textContent = description[0];
        toast.appendChild(descEl);
    }

    // Action button
    // if (actionText) {
    const actionBtn = document.createElement("button");
    actionBtn.className = "self-end mt-2 text-black text-lg cursor-pointer";
    actionBtn.innerHTML = "&times";
    actionBtn.onclick = () => {
        if (typeof action === "function") action();
        // window.toastData = null;
        toast.remove();
    };
    toast.appendChild(actionBtn);
    // }

    container.appendChild(toast);

    // Animate in
    setTimeout(() => {
        toast.classList.remove("opacity-0", "translate-x-5");
        toast.classList.add("opacity-100", "translate-x-0");
    }, 100);

    // Auto remove after 5s (unless action taken)
    setTimeout(() => {
        if (document.body.contains(toast)) {
            toast.classList.add("opacity-0", "translate-x-5");
            // window.toastData = null;
            setTimeout(() => toast.remove(), 500);
        }
    }, 5000);
}

// Cookie Consent
function initializeCookieConsent() {
    const cookieConsent = document.getElementById("cookieConsent");

    if (cookieConsent && !localStorage.getItem("cookieConsent")) {
        // Show banner after 2s if no decision yet
        setTimeout(() => {
            cookieConsent.classList.remove("hidden");
            cookieConsent.classList.add("flex");
        }, 2000);
    }
}

function acceptCookies() {
    localStorage.setItem("cookieConsent", "accepted");
    hideCookieConsent();
    showNotification("Cookie preferences saved", "success");
}

function declineCookies() {
    localStorage.setItem("cookieConsent", "declined");
    hideCookieConsent();
    showNotification("Cookie preferences saved", "success");
}

function hideCookieConsent() {
    const cookieConsent = document.getElementById("cookieConsent");
    cookieConsent.classList.add("hidden");
    cookieConsent.classList.remove("flex");
}

// Utility functions for global access
window.handleBurger = handleBurger;
window.openModal = openModal;
window.closeModal = closeModal;
window.handleCommunityTab = handleCommunityTab;
window.showToast = showToast; // Make it globally accessible
window.acceptCookies = acceptCookies;
window.declineCookies = declineCookies;
