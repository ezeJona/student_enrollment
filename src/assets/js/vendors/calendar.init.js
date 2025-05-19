// Required variables and objects initialization.
var defaultEvents = []
var viewEventModal = new bootstrap.Modal(document.getElementById('view-event-modal'), { keyboard: false });
var addEditEventModal = new bootstrap.Modal(document.getElementById('add-edit-event-modal'), { keyboard: false });
var formEvent = document.getElementById('add-event-form');
var addEventButton = document.getElementById('add-new-event-btn');
var updateEventButton = document.getElementById('update-event-btn');
var todayDate = moment().startOf('day');
var YM = todayDate.format('YYYY-MM');
var TODAY = todayDate.format('YYYY-MM-DD');

var defaultEvents = [
    {
        id: 1,
        title: 'Company Meeting',
        start: YM + '-05',
        end: null,
        description: 'Lorem ipsum dolor sit tempor incid',
        className: 'bg-primary',
        location: 'San Francisco, US',
        start_time: "19:30:00",
        end_time: "20:00:00",
    },
    {
        id: 999,
        title: 'Repeating Event',
        start: YM + '-09T16:00:00',
        description: 'Lorem ipsum dolor sit ncididunt ut labore'

    },
    {
        id: 2,
        title: 'Mexo 2023 - Product Release',
        start: YM + '-02',
        end: YM + '-04',
        description: 'Mexo 2021 - Lorem ipsum dolor sit tempor inci',
        className: 'bg-info',
        location: 'Las Vegas, US',
        start_time: null,
        end_time: null,
    },
    {
        id: 3,
        title: 'Click for Google',
        url: 'http://google.com/',
        start: YM + '-28',
        end: null,
        description: 'Lorem ipsum dolor sit amet, labore',
        className: 'bg-primary',
        location: 'Online',
        start_time: '17:30:00',
        end_time: '18:30:00',
    }
];

// Initialize date pickers
var config = {
    dateFormat: "Y-m-d H:i:S",
    enableTime: true
};
flatpickr("#eventStart", config);
flatpickr("#eventEnd", config);

// Get initial view of calendar based on screen size
const getInitialView = () => {
    if (window.innerWidth >= 768 && window.innerWidth < 1200) {
        return 'timeGridWeek';
    } else if (window.innerWidth <= 768) {
        return 'listMonth';
    } else {
        return 'dayGridMonth';
    }
}

// HTML Document content load event to manage calendar
document.addEventListener('DOMContentLoaded', function () {
    var createEventButton = document.getElementById('create-new-event-btn');
    var deleteEventButton = document.getElementById('btn-delete-event');
    var editEventButton = document.getElementById("btn-edit-event")
    var selectedEvent = null;
    var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },
        droppable: true, // this allows things to be dropped onto the calendar        
        height: 900,
        contentHeight: 800,
        aspectRatio: 3,
        nowIndicator: true,
        now: TODAY + 'T09:25:00',
        initialView: getInitialView(),
        initialDate: TODAY,
        editable: true,
        dayMaxEvents: true,
        navLinks: true,
        displayEventTime: false,
        drop: function (info) {
            // is the "remove after drop" checkbox checked?
            if (checkbox.checked) {
                // if so, remove the element from the "Draggable Events" list
                info.draggedEl.parentNode.removeChild(info.draggedEl);
            }
        },
        windowResize: function (view) {
            var newView = getInitialView();
            calendar.changeView(newView);
        },
        dateClick: function (arg) {
            clearFields();
            document.getElementById("event-id").value = defaultEvents.length + 1;
            const currentDate = new Date()
            let currentDateTime = arg.date;
            currentDateTime = new Date(currentDateTime.setHours(currentDate.getHours(), currentDate.getMinutes(), 0, 0));
            var config = {
                dateFormat: "Y-m-d H:i:S",
                enableTime: true,
                defaultDate: [currentDateTime]
            };
            flatpickr("#eventStart", config).redraw();
            flatpickr("#eventEnd", config).redraw();
            addEventButton.removeAttribute("hidden");
            updateEventButton.setAttribute("hidden", true);
            addEditEventModal.show();
        },
        eventReceive: function (info) {
            // This event will occur when you drop an event on any date.
            var newEvent = {
                id: Math.floor(Math.random() * 11000),
                title: info.event.title,
                start: info.event.start,
                allDay: info.event.allDay,
                location: "Not Location",
                className: info.event.classNames[0]
            };
            defaultEvents.push(newEvent);
        },
        eventClick: function (info) {
            // This event will occur when you click on any event for it's detailed information.
            selectedEvent = info.event;
            // Redirect to specified url of event rather showing event details popup. 
            if (info.event.url) { return false; }
            var eventTitle = selectedEvent.title;
            var eventDescription = selectedEvent.extendedProps.description === undefined ? "No Description" : selectedEvent.extendedProps.description;
            var eventLocation = selectedEvent.extendedProps.location === undefined ? "No Location" : selectedEvent.extendedProps.location;
            var eventID = selectedEvent.id;
            // Showing values of each fields of event to the respective elements.
            document.getElementById("view-event-modal-title").innerHTML = eventTitle;
            document.getElementById("view-event-dates").innerHTML = eventDates(selectedEvent.start, selectedEvent.end);
            document.getElementById("view-event-location").innerHTML = eventLocation;
            document.getElementById("view-event-description").innerHTML = eventDescription;
            document.getElementById("selected-event-id").value = eventID;
            viewEventModal.show();
        },
        events: defaultEvents
    });

    // When create or add new event button has been clicked.    
    if (document.body.contains(createEventButton)) {
        createEventButton.addEventListener("click", function () {
            clearFields();
            selectedEvent = null;
            addEventButton.removeAttribute("hidden");
            updateEventButton.setAttribute("hidden", true);
            document.getElementById("event-id").value = defaultEvents.length + 1;
        })
    }

    const clearFields = () => {
        document.getElementById('event-category').value = 'bg-primary';
        document.getElementById("event-title").value = '';
        document.getElementById("event-description").value = '';
        document.getElementById("event-location").value = '';
        document.getElementById("event-id").value = '';
        var config = {
            dateFormat: "Y-m-d H:i:S",
            defaultDate: [new Date()],
            enableTime: true
        };
        flatpickr("#eventStart", config);
        flatpickr("#eventEnd", config);
        selectedEvent = null;
        action = '';
    }
    calendar.render();

    // Delete Event 
    if (document.body.contains(deleteEventButton)) {
        deleteEventButton.addEventListener("click", function (ev) {
            var deleteEventId = document.getElementById("selected-event-id").value;
            if (confirm("Are you sure want to delete this event ?")) {
                var event = calendar.getEventById(deleteEventId);
                event.remove();
                viewEventModal.hide();
            }
        });
    }

    // Edit Event
    if (document.body.contains(editEventButton)) {
        editEventButton.addEventListener("click", function (ev) {
            updateEventButton.removeAttribute("hidden");
            addEventButton.setAttribute("hidden", true);
            var eventID = selectedEvent.id;
            var eventTitle = selectedEvent.title;
            var eventDescription = selectedEvent.extendedProps.description === undefined ? "No Description" : selectedEvent.extendedProps.description;
            var eventLocation = selectedEvent.extendedProps.location === undefined ? "No Location" : selectedEvent.extendedProps.location;
            var eventStartDate = (selectedEvent.start === undefined || selectedEvent.start === null) ? '-' : selectedEvent.start;
            var eventEndDate = (selectedEvent.end === undefined || selectedEvent.end === null) ? null : selectedEvent.end;

            document.getElementById("add-edit-event-modal-title").innerHTML = "Edit - " + eventTitle;
            document.getElementById("event-title").value = eventTitle;
            document.getElementById("event-description").value = eventDescription;
            document.getElementById("event-location").value = eventLocation;
            document.getElementById("event-id").value = eventID;
            document.getElementById("event-category").value = selectedEvent.classNames;
            viewEventModal.hide();

            // Clear date picker
            document.getElementById("eventStart").flatpickr().clear();
            document.getElementById("eventEnd").flatpickr().clear();
            var config = {
                dateFormat: "Y-m-d H:i:S",
                defaultDate: [new Date(eventStartDate)],
                enableTime: true
            };
            flatpickr("#eventStart", config).redraw();
            var config = {
                dateFormat: "Y-m-d H:i:S",
                defaultDate: [new Date(eventEndDate)],
                enableTime: true
            };
            flatpickr("#eventEnd", config).redraw();
            addEditEventModal.show();
        });
    }

    // Form submission
    if (document.body.contains(formEvent)) {
        formEvent.addEventListener('submit', function (ev) {
            ev.preventDefault();
            var eventTitle = document.getElementById("event-title").value;
            var eventCategory = document.getElementById('event-category').value;
            var eventDescription = document.getElementById("event-description").value;
            var eventLocation = document.getElementById("event-location").value;
            var start_date = document.getElementById("eventStart").value;
            var end_date = document.getElementById("eventEnd").value;
            var eventid = document.getElementById("event-id").value;
            var is_all_day = false;
            if (selectedEvent) {
                selectedEvent.setProp("id", eventid);
                selectedEvent.setProp("title", eventTitle);
                selectedEvent.setProp("classNames", [eventCategory]);
                selectedEvent.setStart(start_date);
                selectedEvent.setEnd(end_date);
                selectedEvent.setAllDay(is_all_day);
                selectedEvent.setExtendedProp("description", eventDescription);
                selectedEvent.setExtendedProp("location", eventLocation);
                var indexOfSelectedEvent = defaultEvents.findIndex(function (x) { return x.id == selectedEvent.id });
                if (defaultEvents[indexOfSelectedEvent]) {
                    defaultEvents[indexOfSelectedEvent].title = eventTitle;
                    defaultEvents[indexOfSelectedEvent].start = start_date;
                    defaultEvents[indexOfSelectedEvent].end = end_date;
                    defaultEvents[indexOfSelectedEvent].allDay = is_all_day;
                    defaultEvents[indexOfSelectedEvent].className = eventCategory;
                    defaultEvents[indexOfSelectedEvent].description = eventDescription;
                    defaultEvents[indexOfSelectedEvent].location = eventLocation;
                }
                calendar.render();
            } else {
                var newEvent = {
                    id: defaultEvents.length + 1,
                    title: eventTitle,
                    start: new Date(start_date),
                    end: new Date(end_date),
                    className: eventCategory,
                    description: eventDescription,
                    location: eventLocation,
                    allDay: is_all_day
                };
                calendar.addEvent(newEvent);
                defaultEvents.push(newEvent);
            }
            addEditEventModal.hide();
            clearFields();
        });
    }
});

// Format date to dd monthname, yyyy format from the default date returned from datepicker.
const getDateValue = (date) => {
    var monthNames = ["January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    ];
    var d = new Date(date),
        month = '' + monthNames[(d.getMonth())],
        day = '' + d.getDate(),
        year = d.getFullYear(),
        hour = d.getHours() % 12 || 12,
        minutes = d.getMinutes();
    if (month.length < 2)
        month = '0' + month;
    if (day.length < 2)
        day = '0' + day;
    return [day + " " + month, year + " " + hour + ":" + ("0" + minutes).slice(-2) + " " + (hour >= 12 ? "PM" : "AM")].join(',');
};


const eventDates = (startDate, endtDate) => {
    var date1 = new Date(startDate.getFullYear(), startDate.getMonth(), startDate.getDate(), startDate.getHours(), startDate.getMinutes());
    var date2 = endtDate == null ? null : new Date(endtDate.getFullYear(), endtDate.getMonth(), endtDate.getDate(), endtDate.getHours(), endtDate.getMinutes());
    if (date1 < date2)
        return ("<b>From :</b> " + getDateValue(date1) + " <br/><b>To :</b>" + getDateValue(date2));
    else if (date1 > date2)
        return (getDateValue(date1));
    else
        return (getDateValue(date1));
}
