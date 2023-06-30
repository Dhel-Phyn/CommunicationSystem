<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link href="{{url('assets/css/calendar.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/nav.css')}}" rel="stylesheet">
  <title>Calendar</title>
</head>
<body>
  
    <nav>
        <ul>
            <li><a href="#" class="logo"> 
            <img src="assets/img/logo.jpg" alt="" >
            <span class="nav-item"><h4>Message System</h4></span>
            </a></li>
            <li><a href="{{route('Home.index')}}">
                <i class="fas fa-home"></i>
                <span class="nav-item">Home</span>
            </a></li>
            <li><a href="{{route('faculty.index')}}">
                <i class="fas fa-university"></i>
                <span class="nav-item">Faculty</span>
            </a></li>
            <li class="active"><a href="{{route('calendar.index')}}">
                <i class="fas fa-calendar-alt"></i>
                <span class="nav-item">Calender</span>
            </a></li>
            <li><a href="{{route('history.index')}}">
                <i class="fas fa-history"></i>
                <span class="nav-item">History</span>
            </a></li>
            <li><a href="{{ route('message.index') }}">
                <i class="fas fa-envelope"></i>
                <span class="nav-item">Message</span>
            </a></li>
            <li><a href="{{route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">{{ __('Logout')}}</span>
          </a>
          <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">@csrf</form>
        </li>
        </ul>
    </nav>
    
    <div class="container">
      <div class="left">
        <div class="calendar">
          <div class="month">
            <i class="fas fa-angle-left prev"></i>
            <div class="date">december 2015</div>
            <i class="fas fa-angle-right next"></i>
          </div>
          <div class="weekdays">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
          </div>
          <div class="days"></div>
          <div class="goto-today">
            <div class="goto">
              <input type="text" placeholder="mm/yyyy" class="date-input" />
              <button class="goto-btn">Go</button>
            </div>
            <button class="today-btn">Today</button>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="today-date">
          <div class="event-day">wed</div>
          <div class="event-date">12th december 2022</div>
        </div>
        <div class="events"></div>
        <div class="add-event-wrapper">
          <div class="add-event-header">
            <div class="title">Add Event</div>
            <i class="fas fa-times close"></i>
          </div>
          <div class="add-event-body">
            <div class="add-event-input">
              <input type="text" placeholder="Event Name" class="event-name" />
            </div>
            <div class="add-event-input">
              <input
                type="text"
                placeholder="Event Time From"
                class="event-time-from"
              />
            </div>
            <div class="add-event-input">
              <input
                type="text"
                placeholder="Event Time To"
                class="event-time-to"
              />
            </div>
          </div>
          <div class="add-event-footer">
            <button class="add-event-btn">Add Event</button>
          </div>
        </div>
      </div>
      <button class="add-event">
        <i class="fas fa-plus"></i>
      </button>
    </div>

  
 <script src="assets/js/calendar.js"></script>
</body>
</html>