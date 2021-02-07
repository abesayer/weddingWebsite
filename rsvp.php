<?php 

$hostname = "mysql.angelaandmat.com";  // the hostname you created when creating the database
$username = "angelandmatcom1";        // the username specified when setting up the database
$password = "v#l0c!r@ptOR9215mf.66";               // the password specified when setting up the database
$database = "angelandmat_com";        // the database name chosen when setting up the database 

$link = mysqli_connect($hostname, $username, $password, $database);
if (mysqli_connect_errno()) {
   die("Connect failed: %s\n" + mysqli_connect_error());
   exit();
}

$query = "INSERT INTO `wedding_guests` (`first_name`, `last_name`) VALUES ('test', 'dummy')";

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-type" content="test/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.css">
    <!-- end Bootstrap CSS-->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="homepage.css" type="text/css">

    <title>Wedding Website</title>
</head>

<body>
    <!-- Cursive Name Header -->
    <div class="header " id="nameHeader">
        <h1 class="namesHeader"> Angela & Mathew</h1>
    </div>

    <!-- Navigation Menu -->
    <nav class=" navbar navbar-expand-lg  justify-content-center navbar-light border-bottom">


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Menu Options -->
            <ul class="navbar-nav mr-auto container d-flex flex-row flex-lg-row justify-content-center menu-area">
                <li class="nav-item ">
                    <a class="nav-link" href="homepage.html">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="schedule.html">schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">travel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registry.html">registry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rsvp.html">RSVP</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5 ">
        <div class="row formContainer">
            <div class="col-md-2"></div>
            <div class="col-md-8 justify-content-center">
                <form class="needs-validation rsvpForm  " action="rsvp.php" method="POST" novalidate>

                    <div class="initialForm">

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <!-- <label for="validationCustom01">First name</label> -->
                                <input type="text" class="form-control" id="validationCustom01" name="first_name"
                                    placeholder="First Name" required>
                                <div class="invalid-feedback">
                                    Please provide your first Name.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <!-- <label for="validationCustom02">Last name</label> -->
                                <input type="text" class="form-control" id="validationCustom02" name="last_name"
                                    placeholder="Last Name" required>
                                <div class="invalid-feedback">
                                    Please provide your last name.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <!-- <label for="email">Email Address *</label> -->
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                                <div class="invalid-feedback">
                                    Please provide a valid email Address.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <!-- <label for="food">Meal Preference</label> -->
                                <select class="custom-select" id="food" name="meal_choice" required>
                                    <option selected disabled value="">Meal Preference</option>
                                    <option value="chicken">Chicken</option>
                                    <option value="steak">Steak</option>
                                    <option value="veggie">Vegetarian</option>
                                    <option value="child">Kids Meal</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a meal choice.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <!-- <label for="allergy">Allergy?</label> -->
                                <input class="form-control" id="allergy" placeholder="Allergies?" required>
                                <div class="invalid-feedback">
                                    Please let us know if you have any allegies.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="secondGuest " id="secondGuest">
                        <hr>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <!-- <label for="validationCustom01">First name</label> -->
                                <input type="text" class="form-control" id="validationCustom01" value=""
                                    placeholder="First Name" required>
                                <div class="invalid-feedback">
                                    Please provide your first Name.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <!-- <label for="validationCustom02">Last name</label> -->
                                <input type="text" class="form-control" id="validationCustom02" value=""
                                    placeholder="Last Name" required>
                                <div class="invalid-feedback">
                                    Please provide your last name.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <!-- <label for="email">Email Address *</label> -->
                                <input type="email" class="form-control" id="email" placeholder="Email" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email Address.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <!-- <label for="food">Meal Preference</label> -->
                                <select class="custom-select" id="food" required>
                                    <option selected disabled value="">Meal Preference</option>
                                    <option>Chicken</option>
                                    <option>Steak</option>
                                    <option>Vegetarian</option>
                                    <option>Kids Meal</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a meal choice.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <!-- <label for="allergy">Allergy?</label> -->
                                <input class="form-control" id="allergy" placeholder="Allergies?" required>
                                <div class="invalid-feedback">
                                    Please let us know if you have any allegies.
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="thirdGuest" id="thirdGuest">
                        <hr>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <!-- <label for="validationCustom01">First name</label> -->
                                <input type="text" class="form-control" id="validationCustom01" value=""
                                    placeholder="First Name" required>
                                <div class="invalid-feedback">
                                    Please provide your first Name.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <!-- <label for="validationCustom02">Last name</label> -->
                                <input type="text" class="form-control" id="validationCustom02" value=""
                                    placeholder="Last Name" required>
                                <div class="invalid-feedback">
                                    Please provide your last Name.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <!-- <label for="email">Email Address *</label> -->
                                <input type="email" class="form-control" id="email" placeholder="Email" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email Address.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <!-- <label for="food">Meal Preference</label> -->
                                <select class="custom-select" id="food" required>
                                    <option selected disabled value="">Meal Preference</option>
                                    <option>Chicken</option>
                                    <option>Steak</option>
                                    <option>Vegetarian</option>
                                    <option>Kids Meal</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a meal choice.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <!-- <label for="allergy">Allergy?</label> -->
                                <input class="form-control" id="allergy" placeholder="Allergies?" required>
                                <div class="invalid-feedback">
                                    Please let us know if you have any allegies.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fourthGuest" id="fourthGuest">
                        <hr>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <!-- <label for="validationCustom01">First name</label> -->
                                <input type="text" class="form-control" id="validationCustom01" value=""
                                    placeholder="First Name" required>
                                <div class="invalid-feedback">
                                    Please provide your first Name.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <!-- <label for="validationCustom02">Last name</label> -->
                                <input type="text" class="form-control" id="validationCustom02" value=""
                                    placeholder="Last Name" required>
                                <div class="invalid-feedback">
                                    Please provide your last Name.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <!-- <label for="email">Email Address *</label> -->
                                <input type="email" class="form-control" id="email" placeholder="Email" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email Address.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <!-- <label for="food">Meal Preference</label> -->
                                <select class="custom-select" id="food" required>
                                    <option selected disabled value="">Meal Preference</option>
                                    <option>Chicken</option>
                                    <option>Steak</option>
                                    <option>Vegetarian</option>
                                    <option>Kids Meal</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a meal choice.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <!-- <label for="allergy">Allergy?</label> -->
                                <input class="form-control" id="allergy" placeholder="Allergies?" required>
                                <div class="invalid-feedback">
                                    Please let us know if you have any allegies.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="fifthGuest" id="fifthGuest">
                        <hr>
                        <div class="form-row">

                            <div class="col-md-6 mb-3">
                                <!-- <label for="validationCustom01">First name</label> -->
                                <input type="text" class="form-control" id="validationCustom01" value=""
                                    placeholder="First Name" required>
                                <div class="invalid-feedback">
                                    Please provide your first Name.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <!-- <label for="validationCustom02">Last name</label> -->
                                <input type="text" class="form-control" id="validationCustom02" value=""
                                    placeholder="Last Name" required>
                                <div class="invalid-feedback">
                                    Please provide your last Name.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <!-- <label for="email">Email Address *</label> -->
                                <input type="email" class="form-control" id="email" placeholder="Email" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email Address.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <!-- <label for="food">Meal Preference</label> -->
                                <select class="custom-select" id="food" required>
                                    <option selected disabled value="">Meal Preference</option>
                                    <option>Chicken</option>
                                    <option>Steak</option>
                                    <option>Vegetarian</option>
                                    <option>Kids Meal</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a meal choice.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <!-- <label for="allergy">Allergy?</label> -->
                                <input class="form-control" id="allergy" placeholder="Allergies?" required>
                                <div class="invalid-feedback">
                                    Please let us know if you have any allegies.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">

                        <div id="limitMessage">

                        </div>

                    </div>

                    <div class="form-row">
                        <div class="add-remove" id="add-remove">
                            <button class="rsvpBtn mt-4 btn btn-outline-secondary btn-sm " type="button" id="add">Add
                                Guest
                            </button>
                            <button class="rsvpBtn mt-4 btn btn-outline-secondary btn-sm removeGuest" type="button"
                                id="removeGuest">Remove</button>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3 mt-4">
                            <label for="messages">
                                <h5><b>Have any special messages for us?</b></h5>
                                <p><i>Well wishes, song requests, or anything else you can think of!</i></p>
                            </label>
                            <textarea class="form-control" id="messages" rows="3"></textarea>
                        </div>
                    </div>

                    <button class="rsvpBtn mt-4 btn btn-outline-secondary justify-content-left btn-sm addButton"
                        type="submit">Submit form
                    </button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>



    <!-- used for footer CSS: https://stackoverflow.com/questions/10099422/flushing-footer-to-bottom-of-the-page-twitter-bootstrap -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="jsFiles/index.js"></script>



</body>

</html>
