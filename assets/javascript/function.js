/** SIDEBAR BUTTON TOGGLE */
$(document).ready(function () {
  $("#sidebar-btn").click(function () {
    if ($("#asidebar").hasClass("d-block")) {
      $("#asidebar").removeClass("d-block");
      $("#asidebar").addClass("d-none");
      $("#asidebar").width("0%");
      $("#main-container").width("100%");
      $("#sidebar-btn").removeClass("toggle-on");
      $("#sidebar-btn").addClass("toggle-off");
    } else {
      $("#asidebar").removeClass("d-none");
      $("#asidebar").addClass("d-block");
      $("#asidebar").width("20%");
      $("#main-container").width("80%");
      $("#sidebar-btn").removeClass("toggle-off");
      $("#sidebar-btn").addClass("toggle-on");
    }
  });
});

/** DATA TABLES */
$(document).ready(function () {
  $("#data-table").DataTable();
});

// convert birthday to M - D - Y
$(document).ready(function () {
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth() + 1; //January is 0!
  var yyyy = today.getFullYear();
  if (dd < 10) {
    dd = '0' + dd
  }
  if (mm < 10) {
    mm = '0' + mm
  }
  today = yyyy + '-' + mm + '-' + dd;
  $("#patient_dob").attr("max", today); // SETTING date max to todays date
  $('#consultation_date').attr("max", today);

  // $("#patient_age").keypress(function () {
  //   if (isNaN(this.value + String.fromCharCode(event.keyCode))) return false;
  //   if (this.value.length == 3) return false;
  // });
});

function refresh() {
  setTimeout(function () {
    location.reload()
  }, 100);
}