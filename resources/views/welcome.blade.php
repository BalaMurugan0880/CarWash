<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link href="css/style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style type="text/css">
    .carsizetitle{
        font-size: 32px;
    color: #111;
    text-transform: uppercase;
    text-align: center;
    font-weight: 700;
    margin-bottom: 5px;
    }
    .carsize2desc{
    text-align: center;
    padding-bottom: 40px;
    color: #999;
    }

    .header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

</style>
</head>
<body>
    <div class="header">
          <a href="#default" class="logo">CompanyLogo</a>
            @if (Route::has('login'))
          <div class="header-right">
             @auth
            <a class="active" href="{{ url('/home') }}">Home</a>
             @else
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
          </div>
          @endif
    </div>

            
    <section id="selectcar">

    <div class="container py-5">
        <div class="section-header">
            <h3 class="section-title">Car</h3>
            <p class="section-description">Select Your Car</p>
        </div>
        <div class="row">
            <label for="brand">Select Car Brand</label>
            <select class="custom-select">
                <option value="1">BMW</option>
                <option value="2">Toyota</option>
                <option value="3">Honda</option>
            </select>
        </div>  
        <div class="row py-5">
            <label for="brand">Select Car Model</label>
            <select class="custom-select">
                <option value="1">Test</option>
                <option value="2">Test2</option>
                <option value="3">Test3</option>
            </select>
        </div>
            <h3 class="text-center carsizetitle">Car Size</h3>
            <p class="text-center carsize2desc">Select Car Size</p>
             <div class="grid-wrapper grid-col-4">
                    <div class="selection-wrapper">
                        <label for="selected-size-1" class="selected-label">
                            <input type="radio" name="selected-size" id="selected-size-1" value="50">
                            <span class="icon"></span>
                            <div class="selected-content">
                                <img src="image/carsizes/micro.png" alt="">
                               <!--  <h4>RM 50</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur.</h5> -->
                            </div>
                        </label>
                    </div>
                    <div class="selection-wrapper">
                        <label for="selected-size-2" class="selected-label">
                            <input type="radio"  name="selected-size" id="selected-size-2" value="10">
                            <span class="icon"></span>
                            <div class="selected-content">
                                <img src="image/carsizes/hatch.png" alt="">
                                <!-- <h4>RM 10</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur.</h5> -->
                            </div>
                        </label>
                    </div>
                    <div class="selection-wrapper">
                        <label for="selected-size-3" class="selected-label">
                            <input type="radio"  name="selected-size" id="selected-size-3" value="35">
                            <span class="icon"></span>
                            <div class="selected-content">
                                <img src="image/carsizes/coupe.png" alt="">
                                <!-- <h4>RM 35</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur.</h5> -->
                            </div>
                        </label>
                    </div>
                    <div class="selection-wrapper">
                        <label for="selected-size-4" class="selected-label">
                            <input type="radio"  name="selected-size" id="selected-size-4" value="60">
                            <span class="icon"></span>
                            <div class="selected-content">
                                <img src="image/carsizes/sedan.png" alt="">
                                <!-- <h4>RM 60</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur.</h5> -->
                            </div>
                        </label>
                    </div>
        </div>
    </div>
        
    </section>

    <section id="package">
         <div class="container2" data-aos="fade-up">
            <div class="section-header">
              <h3 class="section-title">Package</h3>
              <p class="section-description">Select Your Package</p>
            </div>

                <div class="grid-wrapper grid-col-4">
                    <div class="selection-wrapper">
                        <label for="selected-item-1" class="selected-label">
                            <input type="checkbox" name="selected-item" id="selected-item-1" value="50" onclick="totalIt()">
                            <span class="icon"></span>
                            <div class="selected-content">
                                <img src="https://image.freepik.com/free-vector/group-friends-giving-high-five_23-2148363170.jpg" alt="">
                                <h4>RM 50</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur.</h5>
                            </div>
                        </label>
                    </div>
                    <div class="selection-wrapper">
                        <label for="selected-item-2" class="selected-label">
                            <input type="checkbox"  name="selected-item" id="selected-item-2" value="10" onclick="totalIt()">
                            <span class="icon"></span>
                            <div class="selected-content">
                                <img src="https://image.freepik.com/free-vector/people-putting-puzzle-pieces-together_52683-28610.jpg" alt="">
                                <h4>RM 10</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur.</h5>
                            </div>
                        </label>
                    </div>
                    <div class="selection-wrapper">
                        <label for="selected-item-3" class="selected-label">
                            <input type="checkbox"  name="selected-item" id="selected-item-3" value="35" onclick="totalIt()">
                            <span class="icon"></span>
                            <div class="selected-content">
                                <img src="https://image.freepik.com/free-vector/people-putting-puzzle-pieces-together_52683-28610.jpg" alt="">
                                <h4>RM 35</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur.</h5>
                            </div>
                        </label>
                    </div>
                    <div class="selection-wrapper">
                        <label for="selected-item-4" class="selected-label">
                            <input type="checkbox"  name="selected-item" id="selected-item-4" value="60" onclick="totalIt()">
                            <span class="icon"></span>
                            <div class="selected-content">
                                <img src="https://image.freepik.com/free-vector/people-putting-puzzle-pieces-together_52683-28610.jpg" alt="">
                                <h4>RM 60</h4>
                                <h5>Lorem ipsum dolor sit amet, consectetur.</h5>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <h1 name="total"></h1><!-- <input type="text" name="total" value="$0.00" readonly="readonly"> -->
                </div>


         </div>
    </section>


    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Package Javascript -->
  <script type="text/javascript">
    function totalIt() {
  var input = document.getElementsByName("selected-item");
  var total = 0;
  for (var i = 0; i < input.length; i++) {
    if (input[i].checked) {
      total += parseFloat(input[i].value);
    }
  }
  document.getElementsByName("total")[0].innerHTML =  "Total : " + "RM" + total.toFixed(2);
}
  </script>

</body>
</html>