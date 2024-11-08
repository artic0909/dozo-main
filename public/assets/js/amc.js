let windowCount = 1; // Initialize window count

document.getElementById("addButton").addEventListener("click", function (e) {
  e.preventDefault(); // Prevent default link behavior

  // Increment the window count
  windowCount++;

  // Clone the form-inner element
  const formInner = document.querySelector(".form-inner");
  const newFormInner = formInner.cloneNode(true);

  // Update the cloned inputs and labels to have unique names and IDs
  const inputs = newFormInner.querySelectorAll("input, select");
  inputs.forEach((input) => {
    // Update IDs and names for new fields
    input.id = input.id.replace(/_\d+$/, `_${windowCount}`); // Change ID
    input.value = ""; // Clear the value for new input
    if (input.type === "text" || input.type === "number") {
      input.name += "[]"; // Make it an array
    }
    // Reset select to default
    if (input.tagName === "SELECT") {
      input.selectedIndex = 0; // Reset to default
      input.name += "[]"; // Make it an array
    }
  });

  // Update the window label
  const windowLabel = newFormInner.querySelector(
    `.amc-label[id^='windowLabel_']`
  );
  windowLabel.textContent = `Window ${windowCount}`; // Update the label text

  // Append the new set of inputs to the form
  formInner.parentNode.insertBefore(
    newFormInner,
    document.querySelector(".add-button")
  );
});

document.getElementById("amcForm").addEventListener("submit", function (e) {
  // Validate all fields if necessary
  // You can add any validation logic here
  // If everything is valid, the form will be submitted normally
});
