<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="basadon">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-big-up" width="24" height="24"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path
                d="M9 20v-8h-3.586a1 1 0 0 1 -.707 -1.707l6.586 -6.586a1 1 0 0 1 1.414 0l6.586 6.586a1 1 0 0 1 -.707 1.707h-3.586v8a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
            </path>
        </svg>
    </div>
    <script>
    var btn = document.querySelector(".basadon");
    btn.addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
    </script>
    <style>
    .basadon {
        position: fixed;
        bottom: 0;
        right: 0;
        margin: 1em;
        padding: 10px;
        border-radius: 50%;
        z-index: 9999;
        cursor: pointer;
        background-color: #d4d4d4;
        scroll-behavior: smooth;
        transition: all 0.3s ease-in-out;
    }

    .basadon:hover {
        background-color: #bfbfbf;
    }

    .basadon svg {
        display: block;
        margin: auto;
        animation: basadon 2s infinite;
    }

    @keyframes basadon {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .basadon {
            display: none;
        }
    }
    </style>
</body>

</html>