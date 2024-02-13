<script>

    function snackbarShow(message) {
        let x = document.getElementById("snackbar");

        x.className = "show";
        x.textContent = message;

        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }

    <?php
    if(isset($_SESSION["message"]))
    {
    $message = $_SESSION["message"];
    ?>
    document.addEventListener("DOMContentLoaded", function() {
        snackbarShow("<?= $message ?>");
    });
    <?php
    unset($_SESSION["message"]);
    }
    ?>

</script>