<?php 
include('./adminPartials/adminHeader.php');
?>

    <div class="adminDasboard flex">

        <?php 
         include('./adminPartials/sideMenuS.php');
        ?>

        <div class="calendarBody">
            <div class="top flex greyBg">
                <h1 class="titleText">
                   Calendar
                </h1>
                <p>Check what's on your today's schedule!</p>
                
            </div>

            <div class="calendarDiv">
                <div class="calendarContainer">
                    <div id="calendar"></div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar:{
            left:'dayGridMonth,timeGridWeek,timeGridDay',
            center:'title'
        }
        });
        calendar.render();
    });
    </script>

<?php 
include('./adminPartials/adminFooter.php');
?>