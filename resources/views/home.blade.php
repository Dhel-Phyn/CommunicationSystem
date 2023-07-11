<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communication System</title>
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
                <li class="active"><a href="{{route('Home.index')}}">
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
                <li><a href="{{route('message.index')}}">
                  <i class="fas fa-envelope"></i>
                  <span class="nav-item">Message</span>
              </a></li>
              <li><a href="{{route('history.index')}}">
                    <i class="fas fa-history"></i>
                    <span class="nav-item">Message Received</span>
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
        
        <!-- cards -->
        <div class="cardBox">
            <div class="card">
              <div>
                <div class="name">Today' News</div>
                <div class="cardname"></div>
              </div>
              <div class="iconBx">
                <i fas fa-eye-outline></i>
              </div>
            </div>
  
            <div class="card">
              <div>
                <div class="name">2000</div>
                <div class="cardname">Student</div>
              </div>
              <div class="iconBx">
                
              </div>
            </div>
  
            <div class="card">
              <div>
                <div class="name">50</div>
                <div class="cardname">Events</div>
              </div>
              <div class="iconBx">
                <ion-icon name="ribbon"></ion-icon>
              </div>
            </div>
  
            <div class="card">
              <div>
                <div class="name">20</div>
                <div class="cardname">Staffs</div>
              </div>
              <div class="iconBx">
                <ion-icon name="star"></ion-icon>
              </div>
            </div>
          </div>

          

          <!-- Daily Activities/Todo list -->
          <div class="dailyActive">
            <div class="cardHeader">
              <h2>Daily Activities</h2>
              <div class="row">
                <input type="text" id="inputbox" placeholder="Add to do"> 
                <button onclick="addTask()">Add</button>
              </div>
              <ul id="list-container">
                {{-- <li class="checked">Task 1</li>
                <li>Task 2</li>
                <li>task 3</li> --}}
              </ul>
            </div>

        </div>
      </div>
    </div>
    <script src="assets/js/home.js"></script>
</body>
</html>