class ThemeToggle {
  constructor(
    toggleSelector,
    containerSelector,
    targetSelectors,
    targetAllSelectors
  ) {
    this.toggle = document.querySelector(toggleSelector);
    this.container = document.querySelector(containerSelector);
    this.targetsOne = targetSelectors.map((selector) =>
      document.querySelector(selector)
    );
    this.targetsAll = targetAllSelectors.flatMap((selector) =>
      Array.from(document.querySelectorAll(selector))
    );

    if (
      this.toggle &&
      this.container &&
      (this.targetsOne.length || this.targetsAll.length)
    ) {
      this.init();
    } else {
      // console.error("Toggle, container, or target elements not found");
    }
  }

  init() {
    const initialState = this.getStoredState();
    this.toggle.checked = initialState;
    this.updateTheme(initialState);

    this.toggle.addEventListener("change", () => {
      const isChecked = this.toggle.checked;
      this.setStoredState(isChecked);
      this.updateTheme(isChecked);
    });
  }

  getStoredState() {
    return localStorage.getItem("toggleState") === "true";
  }

  setStoredState(state) {
    localStorage.setItem("toggleState", state);
  }

  updateTheme(isDarkMode) {
    const modeClass = isDarkMode ? "dark-mode" : "light-mode";
    const removeClass = isDarkMode ? "light-mode" : "dark-mode";

    [...this.targetsOne, ...this.targetsAll].forEach((target) => {
      if (target) {
        target.classList.add(modeClass);
        target.classList.remove(removeClass);
      }
    });
  }
}

// Initialize the class
document.addEventListener("DOMContentLoaded", () => {
  new ThemeToggle(
    ".toggle-input",
    ".switch-container",
    [".admin-main-content", ".btn", ".admin-content"],
    [".card", "h1", "h2", "h3", "h4", "h5", "h6", ".card-header"]
  );
});

var e = document.getElementsByClassName("js-sidebar")[0],
  t = document.getElementsByClassName("js-sidebar-toggle")[0];
e &&
  t &&
  t.addEventListener("click", function () {
    e.classList.toggle("collapsed"),
      e.addEventListener("transitionend", function () {
        window.dispatchEvent(new Event("resize"));
      });
  });


  // Initialize start date picker
flatpickr(".assign-start-date-js", {
    dateFormat: "Y-m-d",
    onChange: function(selectedDates, dateStr, instance) {
        // Set the minimum selectable date for end date
        endPicker.set('minDate', dateStr);
    }
});

// Initialize end date picker
const endPicker = flatpickr(".assign-end-date-js", {
    dateFormat: "Y-m-d"
});



flatpickr(".assign-start-end-time-js", {
    enableTime: true,
    noCalendar: true,
    dateFormat: "H:i", // 24-hour format
    time_24hr: true
});