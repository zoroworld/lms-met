if (
  document.getElementById("chartjs-dashboard-line") ||
  document.getElementById("chartjs-dashboard-pie")
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
  document.addEventListener("DOMContentLoaded", function () {
    let ctx = document
      .getElementById("chartjs-dashboard-line")
      .getContext("2d");

    var gradient = ctx.createLinearGradient(0, 0, 0, 225);
    gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
    gradient.addColorStop(1, "rgb(255, 255, 255)");
    // Line chart
    new Chart(document.getElementById("chartjs-dashboard-line"), {
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
            backgroundColor: gradient,
            borderColor: window.theme.primary,
            data: [
              2115,
              1562,
              1584,
              1892,
              1587,
              1923,
              2566,
              2448,
              2805,
              3438,
              2917,
              3327,
            ],
          },
        ],
      },
      options: {
        maintainAspectRatio: false,
        legend: {
          display: false,
        },
        tooltips: {
          intersect: false,
        },
        hover: {
          intersect: true,
        },
        plugins: {
          filler: {
            propagate: false,
          },
        },
        scales: {
          x: {
            reverse: true,
            grid: {
              color: "rgba(164, 180, 221, 0)",
            },
          },
          y: {
            ticks: {
              stepSize: 1000,
            },
            grid: {
              color: "rgba(0,0,0,0.0)",
            },
          },
        },
      },
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    // Pie chart
    new Chart(document.getElementById("chartjs-dashboard-pie"), {
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
  });

  document.addEventListener("DOMContentLoaded", function () {
    // Bar chart
    new Chart(document.getElementById("chartjs-dashboard-bar"), {
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
            label: "This year",
            backgroundColor: window.theme.primary,
            borderColor: window.theme.primary,
            hoverBackgroundColor: window.theme.primary,
            hoverBorderColor: window.theme.primary,
            data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
            barPercentage: 0.75,
            categoryPercentage: 0.5,
          },
        ],
      },
      options: {
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
        },
        scales: {
          y: {
            grid: {
              display: false,
            },
            stacked: false,
            ticks: {
              stepSize: 20,
            },
          },
          x: {
            stacked: false,
            grid: {
              color: "transparent",
            },
          },
        },
      },
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    var markers = [
      {
        coords: [31.230391, 121.473701],
        name: "Shanghai",
      },
      {
        coords: [28.70406, 77.102493],
        name: "Delhi",
      },
      {
        coords: [6.524379, 3.379206],
        name: "Lagos",
      },
      {
        coords: [35.689487, 139.691711],
        name: "Tokyo",
      },
      {
        coords: [23.12911, 113.264381],
        name: "Guangzhou",
      },
      {
        coords: [40.7127837, -74.0059413],
        name: "New York",
      },
      {
        coords: [34.052235, -118.243683],
        name: "Los Angeles",
      },
      {
        coords: [41.878113, -87.629799],
        name: "Chicago",
      },
      {
        coords: [51.507351, -0.127758],
        name: "London",
      },
      {
        coords: [40.416775, -3.70379],
        name: "Madrid ",
      },
    ];
    var map = new jsVectorMap({
      map: "world",
      selector: "#world_map",
      zoomButtons: true,
      markers: markers,
      markerStyle: {
        initial: {
          r: 9,
          strokeWidth: 7,
          stokeOpacity: 0.4,
          fill: window.theme.primary,
        },
        hover: {
          fill: window.theme.primary,
          stroke: window.theme.primary,
        },
      },
      zoomOnScroll: false,
    });
    window.addEventListener("resize", () => {
      map.updateSize();
    });
  });
}

document.addEventListener("DOMContentLoaded", function () {
  if (document.getElementById("datetimepicker-dashboard")) {
    var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
    var defaultDate =
      date.getUTCFullYear() +
      "-" +
      (date.getUTCMonth() + 1) +
      "-" +
      date.getUTCDate();
    document.getElementById("datetimepicker-dashboard").flatpickr({
      inline: true,
      prevArrow: '<span title="Previous month">&laquo;</span>',
      nextArrow: '<span title="Next month">&raquo;</span>',
      defaultDate: defaultDate,
    });
  }
});

if (document.getElementById("courseSelect")) {
    const courseSelect = document.getElementById('courseSelect');
    const subjectSelect = document.getElementById('subjectSelect');

    courseSelect.addEventListener('change', function () {
        const courseId = this.value;
        if (!courseId) return;

        fetch(`/admin/courses/${courseId}`)
            .then(response => {
              
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(course => {
                // Clear previous options
                subjectSelect.innerHTML = '<option value="" disabled selected>Select a subject</option>';

                if (course.subjects && course.subjects.length > 0) {
                    course.subjects.forEach(subject => {
                        const option = document.createElement('option');
                        option.value = subject.id;
                        option.textContent = subject.subject_name;
                        subjectSelect.appendChild(option);
                    });
                } else {
                    const option = document.createElement('option');
                    option.disabled = true;
                    option.textContent = 'No subjects available';
                    subjectSelect.appendChild(option);
                }
            })
            .catch(error => {
                // console.error('Error fetching course subjects:', error);
                // alert('Failed to load subjects.');
            });
    });
}



if(document.getElementById('courseSelect'))
{

document.getElementById('courseSelect').addEventListener('change', function () {
    const courseId = parseInt(this.value);
    const selectedCourse = coursesWithStudents.find(course => course.id === courseId);

    let html = '';

    if (selectedCourse && selectedCourse.students.length > 0) {
        html += `<table class="table table-bordered">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Attendance</th>
                </tr>
            </thead>
            <tbody>`;

        selectedCourse.students.forEach(student => {
            html += `
                <tr>
                    <td>${student.name}</td>
                    <td>
                        <select name="attendance[${student.id}]" class="form-select">
                            <option value="present">Present</option>
                            <option value="absent">Absent</option>
                        </select>
                    </td>
                </tr>`;
        });

        html += `</tbody></table>`;
    } else {
        html = '<p>No students found for this course.</p>';
    }

    document.getElementById('studentAttendanceContainer').innerHTML = html;
});
}