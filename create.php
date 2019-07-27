<!DOCTYPE html>
<html>
   <title>Create Event</title>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="mystyle.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   </head>
  
   <body>
      <div class="sidenav">
         <img src="logo.png" class="pics" alt="logo" height="150" width="150">
         <button class="dropdown-btn">Verification
         <i class="fa fa-caret-down"></i>
         </button>
         <div class="dropdown-container">
            <a href="non-verify.php">Non-Verify</a>
            <a href="verified.php">Verified</a>
         </div>
         <button class="dropdown-btn">Event
         <i class="fa fa-caret-down"></i>
         </button>
         <div class="dropdown-container">
            <a href="create.php">Create Event</a>
            <a href="eventhistory.php">History</a>
         </div>
         <a href="#eventrequest.php">Event Request</a>
         <a href="#report.php">Report</a>
         <a href="login.php">Logout</a>
      </div>
      <script>
         /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
         var dropdown = document.getElementsByClassName("dropdown-btn");
         var i;
         
         for (i = 0; i < dropdown.length; i++) {
           dropdown[i].addEventListener("click", function() {
           this.classList.toggle("active");
           var dropdownContent = this.nextElementSibling;
           if (dropdownContent.style.display === "block") {
           dropdownContent.style.display = "none";
           } else {
           dropdownContent.style.display = "block";
           }
           });
         }
      </script>
      <div class="title">
         <h4>Create Event</h4>
      </div>
      <div class="createform">
         <form name="form" method="POST" action="save.php" enctype="multipart/form-data">
            <div class="form-group">
               <label for="title">Event Title:</label>
               <input type="text" class="form-control" id="event_title" placeholder="Enter Event Title" name="event_title">
            </div>
            <div class="form-group">
               <label for="desc">Event Description:</label>
               <input type="text" class="form-control" id="desc" placeholder="Enter Event Description" name="event_desc">
            </div>
            <div class="form-group">
               <label for="desc">Event Image Cover (140*300px):</label>
               <br>
               <input type="file" name="event_img_cover">
            </div>
            <div class="form-group">
               <label for="desc">Event Image Logo (90*90px):</label>
               <br>
               <input type="file" name="event_img_logo">
            </div>
            <div class="form-group">
               <label for="desc">Event Category:</label>
               <br>
               <select name="event_category">
                  <option value="1">clothes</option>
                  <option value="2">books</option>
                  <option value="3">shoes</option>
                  <option value="4">cosmetics</option>
                  <option value="5">bag</option>
                  <option value="6">accessories</option>
                  <option value="7">sport</option>
                  <option value="8">cameras and equipments</option>
                  <option value="9">entertainment</option>
                  <option value="10">stationary</option>
                  <option value="11">computer/electronics</option>
                  <option value="12">others</option>
               </select>
            </div>
            <label for="desc">Date:</label>
            <div class="form-inline">
               <div>
                  Date Start <input type="date" class="form-control" id="startdate" placeholder="yyyy-mm-dd" name="event_date_start">
                  Date End <input type="date" class="form-control" id="enddate" placeholder="yyyy-mm-dd" name="event_date_end">
               </div>
            </div>
            <br>
            <div class="form-group">
               <label for="desc">Event Location:</label>
               <input type="text" class="form-control" id="location" placeholder="Enter Event Location" name="event_location">
            </div>
            <input type="submit" class="btn btn-primary" style="float:right;" name="save" value="CREATE EVENT">
         </form>
      </div>
   </body>
</html>