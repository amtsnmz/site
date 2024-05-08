<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.1.0/typed.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/style-switcher.js"></script>
<script>
    $(document).ready(function () {
        var typed = new Typed(".typing", {
            strings: ["", "Web Designer", "Web Developer", "Mobile Developer"],
            typeSpeed: 100,
            backSpeed: 60,
            loop: true
        });
    });
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    // Submit form using AJAX
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelector("form").addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent form submission
            
            // Send form data to sendMessage.php using AJAX
            var formData = new FormData(this);
            fetch('inc/sendMessage.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    // Show success Swal notification with timer
                    swal({
                        text: data.message,
                        icon: "success",
                        width: 150, // Adjust width here
                        height: 100, // Adjust height here
                        timer: 1500,
                        buttons: false // Remove buttons
                    }).then(() => {
                        location.reload(); 
                    });
                } else {
                    swal({
                        text: data.message,
                        icon: "error",
                        width: 150, // Adjust width here
                        height: 100, // Adjust height here
                        time: 1500,
                        buttons: false // Remove buttons
                    });
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
</script>

