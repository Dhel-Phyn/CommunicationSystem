<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{url('assets/css/message.css')}}" rel="stylesheet">
  <link href="{{url('assets/css/nav.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <title>Message</title>
</head>
<body>
  {{-- NavBar --}}
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
        <li><a href="{{route('history.index')}}">
            <i class="fas fa-history"></i>
            <span class="nav-item">History</span>
        </a></li>
        <li class="active"><a href="{{route('message.index')}}">
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

  {{-- Message Container --}}
    <div class="container">
      <h1>Send Messages</h1>
      <div class="contact-box">
        <div class="contact-left">
          <h3>Message</h3>
          {{-- Senders Details --}}
            <form>
              <div class="input-row">
                {{-- Name,Phone --}}
                <div class="input-group">
                  <input type="hidden" name="senderId">
                  <label for="username">Name</label>
                  <input type="text" name="username" id="username" placeholder="Jane">
                </div>
                <div class="input-group">
                  <label>Phone</label>
                  <input type="text" placeholder="+233">
                </div>
                <div class="input-group">
                  <label>Email</label>
                  <input type="email" placeholder="gmail.com">
                </div>
              </div>

              {{-- Recipient group --}}
              <div class="input-group">
                <label for="">Recipient Type</label>
                <select name="recipient_type" id="recipient_type">
                  <option value="">Select your recipient type</option>
                  <option value="student">Students</option>
                  <option value="secretary">Secretaries</option>
                </select>
              </div>

                {{-- Recipient lists --}}
                <div class="input-group rec_type" id="secretary" style="display: none">    
                <label for="recipient_sec">Recipient</label>
                <select name="recipient_sec" id="recipient_sec">
                  <option value=""> Select Secretary Department </option>
                  <option value="">Computer Science</option>
                  <option value="">Food Technology</option>
                  <option value="">Purchasing and Supply</option>
                  <option value="">Banking and Finance</option>
                  <option value="">Fashion and Design</option>
                  <option value="">Electrical Engineering</option>
                </select>
              </div>

                <div class="input-group rec_type" id="student" style="display: none">
                  <label>Recipient</label>
                  <select name="recipient_stud" id="recipient_stud">
                    <option value="">Select Program</option>
                    <option value="1">HND ICT</option>
                    <option value="2">HND Computer Science</option>
                    <option value="3">BTECH HND ICT</option>
                    <option value="4">BTECH Computer Science</option>
                  </select>
                  <select name="recipient_studL" id="recipient_studL" style="margin-top: 10px">
                    <option value="">Select the Year</option>
                    <option value="1">Year 1</option>
                    <option value="2">Year 2</option>
                    <option value="3">Year 3</option>
                    <option value="4">Year 4</option>
                    <option value="4">Year 5</option>
                  </select>

                </div>
                {{-- End of recipients section --}}
              <label>Message</label>
              <textarea rows="5" placeholder="Your Message"></textarea>

              <div class="container-b">
                <input type="file" class="upload-box">
              </div>

              <button type="submit">Send</button>
            </form>
            
        </div>  

        {{-- Right Side --}}
        <div class="contact-right">
          <h3>Recent Message</h3>
          <div class="messageContainer">
            <div class="messageCard">
              <div class="head">
                <span class="from">FAST</span> - <span class="to">Year 1</span>
              </div>
              <div class="message"> 
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In assumenda quasi perspiciatis porro nisi, tempore, numquam sit odit vel dolore mollitia, recusandae ullam architecto?</p>
              </div>
            </div>
            <div class="messageCard">
              <div class="head">
                <span class="from">FAST</span> - <span class="to">Year 1</span>
              </div>
              <div class="message"> 
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In assumenda quasi perspiciatis porro nisi, tempore, numquam sit odit vel dolore mollitia, recusandae ullam architecto?</p>
              </div>
            </div>
            <div class="messageCard">
              <div class="head">
                <span class="from">FAST</span> - <span class="to">Year 1</span>
              </div>
              <div class="message"> 
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In assumenda quasi perspiciatis porro nisi, tempore, numquam sit odit vel dolore mollitia, recusandae ullam architecto?</p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <script>
      const recipient_type = document.querySelector("select#recipient_type");
      recipient_type.addEventListener("change", function(){

        const itemGroups = document.querySelectorAll(".input-group.rec_type")
        itemGroups.forEach(function(itemGroup){
          itemGroup.style.display = "none";
        })

        if(this.value !== ""){
          const selectedGroup = document.querySelector(".input-group#" + this.value);
          if(selectedGroup){
            selectedGroup.style.display = "block";
          }
        }
      })
    </script>
</body>
</html> 