<?php $this->getPart('inc/widgets/lk') ?>

<div id='script-warning'>
<!--    <code>php/get-events.php</code> must be running.-->
</div>

<?php
$c = htmlentities('<div class="rounded text-bold mt-auto px-3" style="font-size: 1.1em;background: #EAF9FF;padding-top: 2em;padding-bottom: 2em;">
                    В этом месяце:
                    <br>
                    <br>
                    <span class="text-bold text-success h4">11</span> рабочих дней <br>
                    <span class="text-bold text-success h4">3</span> совещания
                    завершение <span class="text-bold text-success h4">1</span> проекта
                    <br><br><br>

                    До отпуска <span class="text-bold text-success h4">5</span> дней!
                </div>');
?>
<div class="card">
    <div class="card-header text-center">
        <div class=" text-bold h3">
            Календарь <i type="button" data-toggle="popover" data-trigger="hover focus" data-html="true" data-content="<?= $c ?>" class="fa fa-info-circle text-primary"></i>
            <div type="button" class="fa fa-cogs float-right"></div>
        </div>
<!--        <div class="lead text-success text-bold h4">Август 2020 <i class="fa fa-info-circle text-primary"></i></div>-->
    </div>
    <div class="card-body p-0 position-relative">
        <div id='calendar-wrap'>
            <div id='loading'>loading...</div>
            <div id='calendar'></div>
        </div>
    </div>
</div>

<?php $this->getPart('inc/widgets/tabs') ?>


<link href='/js/fullcalendar/lib/main.min.css' rel='stylesheet' />
<script src='/js/fullcalendar/lib/main.min.js'></script>
<script src='/js/fullcalendar/lib/locales/ru.js'></script>
<script>

    document.addEventListener('DOMContentLoaded', function() {
        // var containerEl = document.getElementById('external-events-list');
        // new FullCalendar.Draggable(containerEl, {
        //     itemSelector: '.fc-event',
        //     eventData: function(eventEl) {
        //         return {
        //             title: eventEl.innerText.trim()
        //         }
        //     }
        // });

        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'ru',
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            // initialDate: '2020-06-12',
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function(arg) {
                // is the "remove after drop" checkbox checked?
                if (document.getElementById('drop-remove').checked) {
                    // if so, remove the element from the "Draggable Events" list
                    arg.draggedEl.parentNode.removeChild(arg.draggedEl);
                }
            },
            navLinks: true, // can click day/week names to navigate views
            selectable: true,
            selectMirror: true,
            select: function(arg) {
                var title = prompt('Event Title:');
                if (title) {
                    calendar.addEvent({
                        title: title,
                        start: arg.start,
                        end: arg.end,
                        allDay: arg.allDay
                    })
                }
                calendar.unselect()
            },
            eventClick: function(arg) {
                if (confirm('Are you sure you want to delete this event?')) {
                    arg.event.remove()
                }
            },
            dayMaxEvents: true, // allow "more" link when too many events
            events: {
                url: '/js/fullcalendar/examples/php/get-events.php',
                failure: function() {
                    document.getElementById('script-warning').style.display = 'block'
                }
            },
            loading: function(bool) {
                document.getElementById('loading').style.display =
                    bool ? 'block' : 'none';
            }
        });

        calendar.render();
    });

</script>
<style>
    #script-warning {
        display: none;
        background: #eee;
        border-bottom: 1px solid #ddd;
        padding: 0 10px;
        line-height: 40px;
        text-align: center;
        font-weight: bold;
        font-size: 12px;
        color: red;
    }

    #loading {
        display: none;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    #calendar1 {
        max-width: 1100px;
        margin: 40px auto;
        padding: 0 10px;
    }

    #external-events {
        position: absolute;
        left: 20px;
        top: 20px;
        width: 150px;
        padding: 0 10px;
        border: 1px solid #ccc;
        background: #eee;
        text-align: left;
    }

    #external-events h4 {
        font-size: 16px;
        margin-top: 0;
        padding-top: 1em;
    }

    #external-events .fc-event {
        margin: 3px 0;
        cursor: move;
    }

    #external-events p {
        margin: 1.5em 0;
        font-size: 11px;
        color: #666;
    }

    #external-events p input {
        margin: 0;
        vertical-align: middle;
    }

    #calendar-wrap {
        /*margin-left: 200px;*/
    }
</style>