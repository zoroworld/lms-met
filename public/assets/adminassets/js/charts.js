// window.theme = {
//   primary: "#3B7DDD",
//   secondary: "#6c757d",
//   success: "#1cbb8c",
//   info: "#17a2b8",
//   warning: "#fcb92c",
//   danger: "#dc3545",
//   white: "#fff",
//   "gray-100": "#f8f9fa",
//   "gray-200": "#e9ecef",
//   "gray-300": "#dee2e6",
//   "gray-400": "#ced4da",
//   "gray-500": "#adb5bd",
//   "gray-600": "#6c757d",
//   "gray-700": "#495057",
//   "gray-800": "#343a40",
//   "gray-900": "#212529",
//   black: "#000",
// };
// document.addEventListener("DOMContentLoaded", function () {
//   // Line chart
//   new Chart(document.getElementById("chartjs-line"), {
//     type: "line",
//     data: {
//       labels: [
//         "Jan",
//         "Feb",
//         "Mar",
//         "Apr",
//         "May",
//         "Jun",
//         "Jul",
//         "Aug",
//         "Sep",
//         "Oct",
//         "Nov",
//         "Dec",
//       ],
//       datasets: [
//         {
//           label: "Sales ($)",
//           fill: true,
//           backgroundColor: "transparent",
//           borderColor: window.theme.primary,
//           data: [
//             2115,
//             1562,
//             1584,
//             1892,
//             1487,
//             2223,
//             2966,
//             2448,
//             2905,
//             3838,
//             2917,
//             3327,
//           ],
//         },
//         {
//           label: "Orders",
//           fill: true,
//           backgroundColor: "transparent",
//           borderColor: "#adb5bd",
//           borderDash: [4, 4],
//           data: [
//             958,
//             724,
//             629,
//             883,
//             915,
//             1214,
//             1476,
//             1212,
//             1554,
//             2128,
//             1466,
//             1827,
//           ],
//         },
//       ],
//     },
//     options: {
//       maintainAspectRatio: false,
//       legend: { display: false },
//       tooltips: { intersect: false },
//       hover: { intersect: true },
//       scales: {
//         x: {
//           reverse: true,
//           gridLines: { color: "rgba(0,0,0,0.05)" },
//         },
//         y: {
//           ticks: { stepSize: 500 },
//           display: true,
//           gridLines: { color: "rgba(0,0,0,0)" },
//         },
//       },
//     },
//   });

//   // Bar chart
//   new Chart(document.getElementById("chartjs-bar"), {
//     type: "bar",
//     data: {
//       labels: [
//         "Jan",
//         "Feb",
//         "Mar",
//         "Apr",
//         "May",
//         "Jun",
//         "Jul",
//         "Aug",
//         "Sep",
//         "Oct",
//         "Nov",
//         "Dec",
//       ],
//       datasets: [
//         {
//           label: "Last year",
//           backgroundColor: window.theme.primary,
//           data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
//         },
//         {
//           label: "This year",
//           backgroundColor: "#dee2e6",
//           data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
//         },
//       ],
//     },
//     options: {
//       maintainAspectRatio: false,
//       legend: { display: false },
//       scales: {
//         y: { ticks: { stepSize: 20 }, gridLines: { display: false } },
//         x: { gridLines: { color: "transparent" } },
//       },
//     },
//   });

//   // Doughnut chart
//   new Chart(document.getElementById("chartjs-doughnut"), {
//     type: "doughnut",
//     data: {
//       labels: ["Social", "Search Engines", "Direct", "Other"],
//       datasets: [
//         {
//           data: [260, 125, 54, 146],
//           backgroundColor: [
//             window.theme.primary,
//             window.theme.success,
//             window.theme.warning,
//             "#dee2e6",
//           ],
//           borderColor: "transparent",
//         },
//       ],
//     },
//     options: {
//       maintainAspectRatio: false,
//       cutoutPercentage: 65,
//       legend: { display: false },
//     },
//   });

//   // Pie chart
//   new Chart(document.getElementById("chartjs-pie"), {
//     type: "pie",
//     data: {
//       labels: ["Social", "Search Engines", "Direct", "Other"],
//       datasets: [
//         {
//           data: [260, 125, 54, 146],
//           backgroundColor: [
//             window.theme.primary,
//             window.theme.warning,
//             window.theme.danger,
//             "#dee2e6",
//           ],
//           borderColor: "transparent",
//         },
//       ],
//     },
//     options: { maintainAspectRatio: false, legend: { display: false } },
//   });

//   // Radar chart
//   new Chart(document.getElementById("chartjs-radar"), {
//     type: "radar",
//     data: {
//       labels: ["Speed", "Reliability", "Comfort", "Safety", "Efficiency"],
//       datasets: [
//         {
//           label: "Model X",
//           backgroundColor: "rgba(0, 123, 255, 0.2)",
//           borderColor: window.theme.primary,
//           data: [70, 53, 82, 60, 33],
//         },
//         {
//           label: "Model S",
//           backgroundColor: "rgba(220, 53, 69, 0.2)",
//           borderColor: window.theme.danger,
//           data: [35, 38, 65, 85, 84],
//         },
//       ],
//     },
//     options: { maintainAspectRatio: false },
//   });

//   // Polar Area chart
//   new Chart(document.getElementById("chartjs-polar-area"), {
//     type: "polarArea",
//     data: {
//       labels: ["Speed", "Reliability", "Comfort", "Safety", "Efficiency"],
//       datasets: [
//         {
//           data: [35, 38, 65, 70, 24],
//           backgroundColor: [
//             window.theme.primary,
//             window.theme.success,
//             window.theme.danger,
//             window.theme.warning,
//             window.theme.info,
//           ],
//         },
//       ],
//     },
//     options: { maintainAspectRatio: false },
//   });
// });

document.addEventListener("DOMContentLoaded", function () {
  if (
    document.getElementById("chartjs-line") ||
    document.getElementById("chartjs-bar")
  ) {
    window.theme = {
      primary: "#3B7DDD",
      secondary: "#6c757d",
      success: "#1cbb8c",
      info: "#17a2b8",
      warning: "#fcb92c",
      danger: "#dc3545",
      white: "#fff",
      "gray-100": "#f8f9fa",
      "gray-200": "#e9ecef",
      "gray-300": "#dee2e6",
      "gray-400": "#ced4da",
      "gray-500": "#adb5bd",
      "gray-600": "#6c757d",
      "gray-700": "#495057",
      "gray-800": "#343a40",
      "gray-900": "#212529",
      black: "#000",
    };

    function createChart(id, config) {
      const ctx = document.getElementById(id);
      if (ctx) {
        new Chart(ctx, config);
      } else {
        console.warn(`Chart element with ID '${id}' not found.`);
      }
    }

    // Line chart
    createChart("chartjs-line", {
      type: "line",
      data: {
        labels: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [
          {
            label: "Sales ($)",
            fill: true,
            backgroundColor: "transparent",
            borderColor: window.theme.primary,
            data: [
              2115,
              1562,
              1584,
              1892,
              1487,
              2223,
              2966,
              2448,
              2905,
              3838,
              2917,
              3327,
            ],
          },
          {
            label: "Orders",
            fill: true,
            backgroundColor: "transparent",
            borderColor: "#adb5bd",
            borderDash: [4, 4],
            data: [
              958,
              724,
              629,
              883,
              915,
              1214,
              1476,
              1212,
              1554,
              2128,
              1466,
              1827,
            ],
          },
        ],
      },
      options: {
        maintainAspectRatio: false,
        legend: { display: false },
        tooltips: { intersect: false },
        hover: { intersect: true },
        scales: {
          x: { reverse: true, gridLines: { color: "rgba(0,0,0,0.05)" } },
          y: {
            ticks: { stepSize: 500 },
            display: true,
            gridLines: { color: "rgba(0,0,0,0)" },
          },
        },
      },
    });

    createChart("chartjs-pie", {
      type: "pie",
      data: {
        labels: ["Chrome", "Firefox", "IE"],
        datasets: [
          {
            data: [4306, 3801, 1689],
            backgroundColor: [
              window.theme.primary,
              window.theme.warning,
              window.theme.danger,
            ],
            borderWidth: 5,
          },
        ],
      },
      options: {
        responsive: !window.MSInputMethodContext,
        maintainAspectRatio: false,
        legend: {
          display: false,
        },
        cutoutPercentage: 75,
      },
    });

    // Add similar calls for other charts
    createChart("chartjs-bar", {
      type: "bar",
      data: {
        labels: [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ],
        datasets: [
          {
            label: "Last year",
            backgroundColor: window.theme.primary,
            data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
          },
          {
            label: "This year",
            backgroundColor: "#dee2e6",
            data: [69, 66, 24, 48, 52, 51, 44, 53, 62, 79, 51, 68],
          },
        ],
      },
      options: {
        maintainAspectRatio: false,
        legend: { display: false },
        scales: {
          y: { ticks: { stepSize: 20 }, gridLines: { display: false } },
          x: { gridLines: { color: "transparent" } },
        },
      },
    });

    createChart("chartjs-doughnut", {
      type: "doughnut",
      data: {
        labels: ["Social", "Search Engines", "Direct", "Other"],
        datasets: [
          {
            data: [260, 125, 54, 146],
            backgroundColor: [
              window.theme.primary,
              window.theme.success,
              window.theme.warning,
              "#dee2e6",
            ],
            borderColor: "transparent",
          },
        ],
      },
      options: {
        maintainAspectRatio: false,
        cutoutPercentage: 65,
        legend: { display: false },
      },
    });

    createChart("chartjs-radar", {
      type: "radar",
      data: {
        labels: ["Speed", "Reliability", "Comfort", "Safety", "Efficiency"],
        datasets: [
          {
            label: "Model X",
            backgroundColor: "rgba(0, 123, 255, 0.2)",
            borderColor: window.theme.primary,
            data: [70, 53, 82, 60, 33],
          },
          {
            label: "Model S",
            backgroundColor: "rgba(220, 53, 69, 0.2)",
            borderColor: window.theme.danger,
            data: [35, 38, 65, 85, 84],
          },
        ],
      },
      options: { maintainAspectRatio: false },
    });

    createChart("chartjs-polar-area", {
      type: "polarArea",
      data: {
        labels: ["Speed", "Reliability", "Comfort", "Safety", "Efficiency"],
        datasets: [
          {
            data: [35, 38, 65, 70, 24],
            backgroundColor: [
              window.theme.primary,
              window.theme.success,
              window.theme.danger,
              window.theme.warning,
              window.theme.info,
            ],
          },
        ],
      },
      options: { maintainAspectRatio: false },
    });
  }
});
