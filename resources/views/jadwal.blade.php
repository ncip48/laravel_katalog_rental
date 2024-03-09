@extends('layouts.app')

@section('title', 'Cek Jadwal')

@section('content')
    <!-- start page title section -->
    <section class="page-title-section bg-img cover-background" data-overlay-dark="4" data-background="">
        <div class="container">
            <h1>Cek Jadwal</h1>
            <ul>
                <li>
                    <a href="index.html">Beranda</a>
                </li>
                <li>
                    <a href="#!">Cek Jadwal</a>
                </li>
            </ul>
        </div>
    </section>
    <!-- end page title section -->

    <!-- start gallery section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="width-100">
                    <div id='calendar'></div>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- end gallery section -->
@endsection

@push('customStyle')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />
@endpush

@push('customScript')
    <!-- <script src="https://code.jquery.com/jquery-1.11.3.js"></script> -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                header: {
                    left: 'title',
                    center: '',

                },
                eventSources: [
                    @foreach ($gedungs as $gedung)
                        {
                            events: [
                                @foreach ($gedung['dates'] as $date)
                                    @if (!$date['status'])
                                        {
                                            title: "Sudah dipesan",
                                            start: "{{ $date['date'] }}",
                                            // url: "{!! $date['url'] !!}",
                                        },
                                    @endif
                                @endforeach
                            ],
                            color: "red",
                            textColor: 'white',
                        },
                    @endforeach
                ],
                dayRender: function(date, cell) {
                    //if backdate then not show
                    if (date.format('YYYY-MM-DD') < moment().format('YYYY-MM-DD')) {
                        cell.css("background-color", "#eaeaea");
                        cell.css("cursor", "not-allowed");
                        return false;
                    } else {
                        //pointer cursor
                        cell.css("cursor", "pointer");
                        cell.append(
                            '<div class="badge-center">' +
                            '<div class="badge badge-primary">Klik untuk pesan</div>' +
                            '</div>');
                    }
                },
                eventRender: function(event, element) {
                    element.find('.fc-title').css("display", "flex");
                    element.find('.fc-title').css("justify-content", "center");
                    element.find('.fc-title').css("align-items", "center");
                },
                eventAfterAllRender: function(view) {
                    var dayEvents = $('#calendar').fullCalendar('clientEvents', function(event) {
                        if (event.end) {
                            var dates = getDates(event.start, event.end);
                            $.each(dates, function(index, value) {
                                var td = $('td.fc-day[data-date="' + value + '"]');
                                td.find('div:first').remove();
                            });
                        } else {
                            var td = $('td.fc-day[data-date="' + event.start.format(
                                'YYYY-MM-DD') + '"]');
                            td.find('div:first').remove();
                        }
                    });
                },
                eventColor: '#378006',
                // eventTextColor: '#fff',#
                displayEventTime: false,
                //clickable date
                dayClick: function(date, jsEvent, view) {
                    var clickedDate = moment(date).format('YYYY-MM-DD');
                    // Check if the clicked date has events
                    var hasEvents = $('#calendar').fullCalendar('clientEvents', function(event) {
                        return event.start.format('YYYY-MM-DD') === clickedDate;
                    }).length > 0;

                    // If the clicked date has events, prevent the default action
                    if (hasEvents) {
                        jsEvent.preventDefault();
                        return false;
                    }

                    // If backdate then cannot click
                    if (clickedDate < moment().format('YYYY-MM-DD')) {
                        return false;
                    }

                    // Navigate to the URL
                    window.location.href = "{{ url('cari') }}?date=" + clickedDate;
                }

            })
        });

        function getDates(startDate, endDate) {
            var now = startDate,
                dates = [];

            while (now.format('YYYY-MM-DD') <= endDate.format('YYYY-MM-DD')) {
                dates.push(now.format('YYYY-MM-DD'));
                now.add('days', 1);
            }
            return dates;
        };
    </script>
@endpush
