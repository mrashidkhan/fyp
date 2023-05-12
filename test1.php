<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>

    <style>
        .carousel-container {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .carousel-item {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-item.active {
            opacity: 1;
        }

        .person-name {
            position: absolute;
            bottom: 20px;
            left: 0;
            width: 100%;
            text-align: center;
            color: white;
            font-size: 20px;
            font-weight: bold;
            transform: rotateY(180deg);
            transition: transform 0.5s ease-in-out;
        }

        .carousel-item.active .person-name {
            transform: rotateY(0);
        }
    </style>
</head>
<body>
    <div class="carousel-container">
        <div class="carousel-item">
            <img src="foc\dcs\bscs\sp22\23.png" alt="Person 1">
            <div class="person-name">Person 1</div>
        </div>
        <div class="carousel-item">
            <img src="foc\dcs\bscs\sp22\20.jpg" alt="Person 2">
            <div class="person-name">Person 2</div>
        </div>
        <div class="carousel-item">
            <img src="foc\dcs\bscs\sp22\21.jpg" alt="Person 3">
            <div class="person-name">Person 3</div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            var carouselItems = $('.carousel-item');
            var currentIndex = 0;
            carouselItems.eq(currentIndex).addClass('active');
            carouselItems.click(function () {
                var currentItem = $(this);
                if (!currentItem.hasClass('active')) {
                    carouselItems.removeClass('active');
                    currentItem.addClass('active');
                } else {
                    currentItem.find('.person-name').css('transform', 'rotateY(180deg)');
                    setTimeout(function () {
                        currentItem.find('.person-name').css('transform', 'rotateY(0)');
                    }, 500);
                }
            });
        });
    </script>

</body>
</html>
