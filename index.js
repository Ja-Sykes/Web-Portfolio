
//Email Form
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("contactForm");
    
    form.addEventListener("submit", function(event) {
      event.preventDefault();
      
      const formData = new FormData(this);
      const xhr = new XMLHttpRequest();
      
      xhr.open("POST", "process_form.php"); // Replace "process_form.php" with your backend script URL
      
      xhr.onload = function() {
        if (xhr.status === 200) {
          alert("Message sent successfully!");
          form.reset();
        } else {
          alert("An error occurred. Please try again later.");
        }
      };
      
      xhr.send(formData);
    });
  });
  