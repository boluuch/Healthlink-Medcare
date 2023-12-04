<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading...</title>
    <style>
	body {
    background: #fdfdfd54;
    margin: 0;
}
.container {
    position: absolute;
    top: 10%;
    height: 90%;
    display: flex;
    justify-content: center;
    align-items: center;
    right: 50%;
}
.item {
    position: absolute;
    background-color: transparent;
    width: calc(var(--i) * 2.5vmin);
    aspect-ratio: 1;
    border-radius: 50%;
    border: .9vim solid rgb(0, 200, 255);
    transform-style: preserve-3d;
    transform: rotateX(70deg) translateZ(50px);
    animation: my-move 4s ease-in-out calc(var(--i) * 0.08s) infinite;
    box-shadow: 0px 0px 15px rgb(44, 35, 212),
    inset 0px 0px 15px rgb(84, 207, 201);
}

@keyframes my-move {
    0%,
    100% {
        transform: rotateX(70deg) translateZ(50px) translateY(0px);
        filter: hue-rotate(0deg);
    }
    50% {
        transform: rotateX(70deg) translateZ(50px) translateY(50vmin);
        filter: hue-rotate(180deg);
    }
}
	</style>

</head>
<body>
    <div class="container">
        <div class="item" style="--i: 0"><i class="fas fa-music"></i></div>
        <div class="item" style="--i: 1"><i class="fas fa-gamepad"></i></div>
        <div class="item" style="--i: 2"><i class="fas fa-film"></i></div>
        <div class="item" style="--i: 3"><i class="fas fa-book"></i></div>
        <div class="item" style="--i: 4"><i class="fas fa-paint-brush"></i></div>
        <div class="item" style="--i: 5"><i class="fas fa-code"></i></div>
        <div class="item" style="--i: 6"><i class="fas fa-camera"></i></div>
        <div class="item" style="--i: 7"><i class="fas fa-bicycle"></i></div>
        <div class="item" style="--i: 8"><i class="fas fa-plane"></i></div>
        <div class="item" style="--i: 9"><i class="fas fa-dumbbell"></i></div>
        <div class="item" style="--i: 10"><i class="fas fa-guitar"></i></div>
        <div class="item" style="--i: 11"><i class="fas fa-puzzle-piece"></i></div>
        <div class="item" style="--i: 12"><i class="fas fa-briefcase"></i></div>
        <div class="item" style="--i: 13"><i class="fas fa-coffee"></i></div>
        <div class="item" style="--i: 14"><i class="fas fa-utensils"></i></div>
        <div class="item" style="--i: 15"><i class="fas fa-football-ball"></i></div>
        <div class="item" style="--i: 16"><i class="fas fa-motorcycle"></i></div>
        <div class="item" style="--i: 17"><i class="fas fa-tree"></i></div>
        <div class="item" style="--i: 18"><i class="fas fa-heart"></i></div>
        <div class="item" style="--i: 19"><i class="fas fa-rocket"></i></div>
        <div class="item" style="--i: 20"><i class="fas fa-umbrella"></i></div>
    </div>
    <script>
         // Wait for the loader to be visible, then hide it after 3 seconds
         document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function () {
                document.querySelector('.container').style.display = 'none';
                // Redirect to your homepage
                window.location.href = 'customer-support.php';
            }, 1000); // 1000 milliseconds = 1 seconds
        });
    </script>
</body>
</html>