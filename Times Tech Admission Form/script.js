function validateCourses() {
  const checkboxes = document.querySelectorAll('input[name="courses[]"]:checked');
  if (checkboxes.length > 2) {
    alert("Please select only up to 2 courses.");
    return false;
  }
  return true;
}
