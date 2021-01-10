<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Guardian Login</title>
        <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>

    <!-- Nevigation Bar Starts -->
    <div class="menu">
       <ul>
       <li><a href="#">Home</a></li>
       <li><a href="#">About Us</a></li>
       <li><a href="#">Tutors</a></li>
       <li><a href="map.html">Contact</a></li>
       <li class="menu-li"><a class="menu-btn" href="#">Sign Up</a></li>
     </ul>
    </div>
     <!-- Nevigation Bar Ends -->

    <h1 align="center" > Request For Tutor</h1>

    <!-- Input Group starts -->
    <form action="">
        <div class="input-holder">
        <input class="input" type="text" placeholder="Student Name">
        </div>
        <div class="input-holder">
        <input class="input" type="tel" placeholder="Student Age">
      </div><br>


        <div class="">
          <select class="input" id="dr1" onchange = "insertOptions('dr1','dr2')">
          <option class="input-option" name ="catagory" value="catagory"> Category</option>
          <option class="input-option" name="englishMedium" value="englishMedium" >English Medium</option>
          <option class="input-option" name="banglaMedium" value="banglaMedium" >Bangla Medium</option>
          <option class="input-option" name="englishVersion" value="englishVersion">English Version</option>
        </select>

        </div>

        <div class="input-holder">
          <select class="input"  id="dr2" onchange="insertSubjects('dr2','dr3')">
            <option name="class_no" value="class_no">Class</option>
          </select>
        </div>

      <div class="input-holder">
        <select class="input" id="dr3">
        <option class="input-option" name="subject" value="subject"  > Choose Subject</option>
      </select>
      </div>


        <div class="input-holder">
        <input class="input" type="tel" placeholder="Class">
        </div>
        <div class="input-holder">
        <input class="input" type="text" placeholder="Subject">
        </div><br>

        <select class="input">
          <option class="input-option" > Gender</option>
          <option class="input-option" >Male</option>
          <option class="input-option" >Female</option>
        </select>

        <div class="input-holder">
        <input class="input" type="text" placeholder="Name Of Institution">
        </div>
        <div class="input-holder">
        <input class="input" type="tel" placeholder="Tutoring Time">
        </div><br>

        <select class="input">
        <option class="input-option" > Days/Week</option>
        <option class="input-option" >1 days/week</option>
        <option class="input-option" >2 days/week</option>
        <option class="input-option" >3 days/week</option>
        <option class="input-option" >4 days/week</option>
        <option class="input-option" >5 days/week</option>
        <option class="input-option" >6 days/week</option>
        <option class="input-option" >7 days/week</option>
      </select>
    </div>

        <div class="input-holder">
        <input class="input" type="number" placeholder="Salary">
        </div>
        <div class="input-holder">
        <input class="input" type="text" placeholder="Adsress Details">
        </div>
        <div class="input-holder">
        <input class="button" type="submit" value="Post Your Request">
        </div>

    </form>

    <!-- Input Group ends -->
    <script src="../assets/js/posted.js" charset="utf-8"></script>
  </body>
</html>
