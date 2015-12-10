<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/css/baseStyle.css">
  <link rel="stylesheet" href="/assets/css/normalize.css">
</head>
<body>
  <div class="myContainer">
    <form class="form-horizontal" method="POST" action="submitForm.php">
      <div class="form-group">
        <label class="col-sm-2 control-label">Date</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" name="date">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Work Order #</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="ordernum" placeholder="Work Order Number">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Additional ID</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="additionalid" placeholder="Additional ID">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Crew #</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="crewnum" placeholder="Crew Number">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tech ID 1</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="techid1" placeholder="Tech ID 1">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tech ID 2</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="techid2" placeholder="Tech ID 2">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Civic #</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="civicnum" placeholder="Civic Number">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Address</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="address" placeholder="Address">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Municipality</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="municipality" placeholder="Municipality">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Postal Code</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="postalcode" placeholder="Postal Code">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Repair Type</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="repairtype" placeholder="Repair Type">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Drop Length</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="droplength" placeholder="Drop Length">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Cable Type Used</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="cabletype" placeholder="Cable Type Used">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Number of Driveway Crossing</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="crossingnum" placeholder="Number of Driveway Crossing">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Type</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="type" placeholder="Type">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Sidewalk</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="sidewalk" placeholder="Sidewalk">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Primary</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="primary" placeholder="Primary">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Secondary</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="secondary" placeholder="Secondary">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tap Levels CH 3/4</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="tlch34" placeholder="Tap Levels CH 3/4">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tap Levels CH 70</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="tlch70" placeholder="Tap Levels CH 70">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">CSE Levels CH 3/4</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="cselch34" placeholder="CSE Levels CH 3/4">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">CSE Levels CH 70</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="cselch70" placeholder="CSE Levels CH 70">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tap Location</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="taplocat" placeholder="Tap Location">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Safe Temporary Drop Removed</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="dropremoved" placeholder="Safe Temporary Drop Removed">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">CSE/Demaracation Point</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="csepoint" placeholder="CSE/Demaracation Point">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Conduit Placed</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="conduitplaced" placeholder="Conduit Placed">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Number of Driveway</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" name="drivewaynum" placeholder="Number of Driveway">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Feet(Driveway)</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="drivefeet" placeholder="Feet">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Flower Bed</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="flowerbed" placeholder="Flower Bed">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Feet(Flower Bed)</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="flowfeet" placeholder="Feet">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Comments</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="comment" placeholder="Comments">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Work Time</label>
        <div class="col-sm-10">
          <input type="time" class="form-control" name="worktime" placeholder="Work Time">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" name="email" placeholder="example@example.com">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Fault Location</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="faultlocat" placeholder="Fault Location">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">From</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="from" placeholder="From">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Sign in</button>
        </div>
      </div>
    </form>
  </div>
</body>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</html>