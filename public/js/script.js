$(function() {
	$(document).ready(function() {
            $('#calendar').fullCalendar({
                'lang': 'sr',
                'events': [
                    {
                        title: 'Event',
                        start: '2014-11-22'
                    }
                ]
            });
        });
})