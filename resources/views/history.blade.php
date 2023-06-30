<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatSystem</title>
    <link href="{{url('assets/css/home.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/nav.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
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
                <li><a href="{{route('calendar.index')}}">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="nav-item">Calender</span>
                </a></li>
                <li class="active"><a href="{{route('history.index')}}">
                    <i class="fas fa-history"></i>
                    <span class="nav-item">History</span>
                </a></li>
                <li><a href="{{route('message.index')}}">
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
        
</body>
</html>