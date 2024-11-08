function toggleMarks() {
  const fileInput = document.getElementById("b_img");
  const requiredMark = document.getElementById("requiredMark");
  const checkMark = document.getElementById("checkMark");

  if (fileInput.files.length > 0) {
    requiredMark.style.display = "none";
    checkMark.style.display = "inline";
  } else {
    requiredMark.style.display = "inline";
    checkMark.style.display = "none";
  }
}

function toggleMarks() {
  const fileInput = document.getElementById("b_img");
  const requiredMark = document.getElementById("requiredMark");
  const checkMark = document.getElementById("checkMark");

  if (fileInput.files.length > 0) {
    requiredMark.style.display = "none";
    checkMark.style.display = "inline";
  } else {
    requiredMark.style.display = "inline";
    checkMark.style.display = "none";
  }
}

// Form validation function
document
  .getElementById("blogForm")
  .addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent form submission

    // Clear previous error messages
    const errorElements = document.querySelectorAll(".text-danger");
    errorElements.forEach((el) => (el.style.display = "none"));

    // Get form field values
    const bImg = document.getElementById("b_img").files[0];
    const bTitle = document.getElementById("b_title").value.trim();
    const bQt = document.getElementById("b_qt").value.trim();
    const bDesc = document.getElementById("b_desc").value.trim();
    const bTag = document.getElementById("b_tag").value.trim();
    const bDate = document.getElementById("b_date").value.trim();

    let isValid = true;

    // Check if the image is provided and is under 1.5MB
    const maxFileSize = 1.5 * 1024 * 1024; // 1.5MB in bytes
    if (!bImg || bImg.size > maxFileSize) {
      document.getElementById("b_img_error").style.display = "block";
      isValid = false;
    }

    // Check if post title is provided
    if (!bTitle) {
      document.getElementById("b_title_error").style.display = "block";
      isValid = false;
    }

    // Check if quotes are provided
    if (!bQt) {
      document.getElementById("b_qt_error").style.display = "block";
      isValid = false;
    }

    // Check if post description is provided
    if (!bDesc) {
      document.getElementById("b_desc_error").style.display = "block";
      isValid = false;
    }

    // Check if post tags are provided
    if (!bTag) {
      document.getElementById("b_tag_error").style.display = "block";
      isValid = false;
    }

    // Check if post date are provided
    if (!bDate) {
      document.getElementById("b_date_error").style.display = "block";
      isValid = false;
    }

    // If validation passes, submit the form
    if (isValid) {
      this.submit();
    }
  });
