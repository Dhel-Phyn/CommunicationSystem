<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('assets/css/faculty.css')}}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link href="{{url('assets/css/nav.css')}}" rel="stylesheet">
    <title>Faculty</title>
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
                <li class="active"><a href="{{route('faculty.index')}}">
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

    <div  class="container">
        <div class="box">
            <div class="icon"></div>
            <div class="content" id="fast">
                <h4 class="sch">FAST</h4>
                <p>Faculty of Applied Sciencees and Technology</p>
                    <option value="">Computer Science</option>
                    <option value="">Food Science & Technology</option>
                    <option value="">Agro Enterprise Development</option>
                    <option value="">Mathematics & Statistics</option>
                    <option value="">Hospitlity & Tourism Management</option>
            </div>
        </div>

        <div class="box">
            <div class="icon"></div>
            <div class="content" id="fad">
                <h4 class="sch">FAD</h4>
                <p>Faculty of Arts & Design</p>
                    <option value="">Fashion & Design Textiles</option>
                    <option value="">Industrial Arts</option>
            </div>
        </div>

        <div class="box">
            <div class="icon"></div>
            <div class="content" id="foe">
                <h4 class="sch">FOE</h4>
                <p>Faulty of Engineering</p>
                    <option value="">Agricultural Engineering</option>
                    <option value="">Civil Engineering</option>
                    <option value="">Electrical & Electronic Engineering</option>
                    <option value="">Mechanical Engineering</option>
            </div>

        </div>

        <div class="box">
            <div class="icon"></div>
            <div class="content" id="fn">
                <h4 class="sch">FNBE</h4>
                <p>Faculty of Built and Natural Enivronment </p>
                    <option value="">Architectural & Real Estate Dev.</option>
                    <option value="">Environmental Science</option>
                    <option value="">Building Technology</option>
                  
            </div>
        </div>

        <div class="box">
            <div class="icon"></div>
            <div class="content" id="fass">
                <h4 class="sch">FASS</h4>
                <p>Faculty of Applied Soical Sciences</p>
                    <option value="">Applied Modern Lang. & Comm.</option>
                    <option value="">Mutidisciplinary Studies</option>
            </div>
        </div>

        <div class="box">
            <div class="icon"></div>
            <div class="content" id="bus">
                <h4 class="sch">HTU BUS SCH</h4>
                <p>HTU School of Business</p>
                    <option value="">Accounting & Finance</option>
                    <option value="">Logistics & Supply Chain Manag.</option>
                    <option value="">Management Science</option>
                    <option value="">Marketing</option>
                 
            </div>

        </div>
    </div>
</body>
</html>