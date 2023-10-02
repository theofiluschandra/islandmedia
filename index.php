<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Test - Theofilus Chandra</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <div class="container w-90 mg-side-auto">
        <?php
        // Get the current day using PHP
        // $currentDay = date('l'); //this will resutl Monday, the day with the Capslock
        $currentDay = strtolower(date('l'));
        // $currentDay = 'sunday'; //This to test if i change the current day manually

        // Days in a week array
        $daysOfWeek = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
        ?>
        <div class="today-wrapper">Today is <span class="today capitalize color-green fw-600"><?php echo $currentDay ?></span></div>
        <div class="array-wrapper">
            <div class="week-wrapper">
                <?php
                foreach ($daysOfWeek as $day) {
                    // Add the 'current-day' class if the day matches the current day
                    $class = '';
                    if ($day === $currentDay) {
                        $class = 'pointer current-day';
                    } else {
                        $class = 'pointer day';
                    }
                    echo "<li class='$class $day'>$day</li>";
                }
                ?>
            </div>
        </div>
        <div class="selected-wrapper">Selected day is <span class="selected capitalize color-blue fw-600"></span></div>
    </div>
    <script>
        $(document).ready(function() {
            // Get the current day
            var today = new Date().toLocaleDateString('en-US', {
                weekday: 'long'
            });

            // Add click event listener to all li elements
            $('li').click(function() {
                // Remove the 'selected-day' class from all li elements
                $('li').removeClass('selected-day');

                // Add the 'selected-day' class to the clicked li element
                $(this).addClass('selected-day');
                var $print = $(this).text();
                $('.selected').html($print);
            });

        });
    </script>
</body>

</html>