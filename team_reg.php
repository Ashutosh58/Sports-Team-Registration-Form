<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Team Registration!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!--calender-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Include Date Range Picker -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />



    <style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background: url("https://images.unsplash.com/photo-1579566346927-c68383817a25?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80");
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        /*background-size: 100% 100%;*/
        background-repeat: no-repeat;
        /*https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80*/
        /*https://images.unsplash.com/photo-1601132359864-c974e79890ac?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2071&q=80*/
    }

    div.container {
        background-color: rgb(0, 0, 0, 0.5);
        width: 100%;
        border-radius: 18px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
        color: #fff;
        margin: 5% auto 5% auto;
    }

    hr {
        size: 10;
        align: center;
        height: 2px;
        background-color: #ccc;
    }

    .star {
        color: red;
    }

    #error {
        color: rgb(255, 0, 0);
        background-color: black;
        text-align: center;
        font: bold;
        font-size: 20px;
        border-radius: 5px;
    }

    #message {
        color: rgb(26, 255, 26);
        background-color: black;
        text-align: center;
        font: bold;
        font-size: 25px;
        /*text-shadow: 1px 1px 2px red, 0 0 1em blue, 0 0 0.2em blue;*/
    }
    </style>

</head>

<body>
    <!--<body class="p-3 mb-2 bg-secondary text-white">-->

    <!--<div class="container p-3 mb-2 bg-success text-white" style="border:orange; border-width:5px; border-style:solid;margin-top: 50px;margin-bottom:50px">-->
    <!--<div class="container p-3 mb-2 bg-image">-->
    <div class="container">

        <h1 class="text-center">Team Registration Form</h1>

        <hr>
        <form id="myForm" class="needs-validation" novalidate action="php_data_code.php" method=POST>
            <div class="form-row">

                <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Team Name</label> <span class="star">*</span>
                    <input type="text" class="form-control" id="team_name" name="team_name" placeholder="Team name"
                        required>
                    <div class="invalid-feedback">
                        Please Enter Team Name
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationCustom02">School Name</label> <span class="star">*</span>
                    <input type="text" class="form-control" id="school_name" name="school_name"
                        placeholder="School name" required>
                    <div class="invalid-feedback">
                        Please Enter School Name
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Coach Contact No.</label> <span class="star">*</span>
                    <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required
                        pattern="[6-9]\d{9}" maxlength="10" onkeypress="return onlyNumberKey(event)">
                    <div class="invalid-feedback">
                        Please give your contact no.
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Coach Email id</label> <span class="star">*</span>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                    <div class="invalid-feedback">
                        Please give your email id
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                    <label for="validationCustom03">Category Name</label> <span class="star">*</span>
                    <select class="custom-select" id="category" name="category" required>
                        <option value=""> - - select - -</option>
                        <option value='Rescue Lane'>Rescue Lane</option>
                        <option value="Maze">Maze</option>
                        <option value="On Stage">On Stage</option>
                        <option value="Saukar">Saukar</option>
                    </select>
                    <div class="invalid-feedback">
                        Please choose a Category
                    </div>
                </div>


            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom04">City</label> <span class="star">*</span>
                    <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom05">State</label> <span class="star">*</span>
                    <!--- India states -->
                    <select class="custom-select" id="state" name="state" required>
                        <option value=""> - - select - -</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Ladakh">Ladakh</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select>
                    <div class="invalid-feedback">
                        Please provide a valid state.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationCustom06">Zip</label> <span class="star">*</span>
                    <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip" required maxlength="6"
                        onkeypress="return onlyNumberKey(event)">
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom07">Student's Name</label> <span class="star">*</span>
                    <input type="text" class="form-control" id="member_one" name="member_one"
                        placeholder="Student's Name" required>
                    <div class="invalid-feedback">
                        Please provide a Student's Name
                    </div>
                </div>

                <div class="col-md-2 mb-3">
                    <label for="validationCustom07">DOB</label> <span class="star">*</span>
                    <input class="form-control" id="member_one_dob" name="member_one_dob" placeholder="MM/DD/YYY"
                        type="date" min="1999-01-01" max="2018-12-01" />
                    <div class="invalid-feedback">
                        Please provide a Student's DOB
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationCustom08">Student's Name</label> <span class="star">*</span>
                    <input type="text" class="form-control" id="member_two" name="member_two"
                        placeholder="Student's Name" required>
                    <div class="invalid-feedback">
                        Please provide a Student's Name
                    </div>
                </div>

                <div class="col-md-2 mb-3">
                    <label for="validationCustom07">DOB</label> <span class="star">*</span>
                    <input class="form-control" id="member_two_dob" name="member_two_dob" placeholder="MM/DD/YYY"
                        type="date" min="1999-01-01" max="2018-12-01" />
                    <div class="invalid-feedback">
                        Please provide a Student's DOB
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationCustom09">Student's Name</label>
                    <input type="text" class="form-control" id="member_three" name="member_three"
                        placeholder="Student's Name">
                    <div class="invalid-feedback">
                        Please provide a Student's Name
                    </div>
                </div>

                <div class="col-md-2 mb-3">
                    <label for="validationCustom07">DOB</label>
                    <input class="form-control" id="member_three_dob" name="member_three_dob" placeholder="MM/DD/YYY"
                        type="date" min="1999-01-01" max="2018-12-01" />
                    <div class="invalid-feedback">
                        Please provide a Student's DOB
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationCustom10">Student's Name</label>
                    <input type="text" class="form-control" id="member_four" name="member_four"
                        placeholder="Student's Name">
                    <div class="invalid-feedback">
                        Please provide a Student's Name
                    </div>
                </div>


                <div class="col-md-2 mb-3">
                    <label for="validationCustom07">DOB</label>
                    <input class="form-control" id="member_four_dob" name="member_four_dob" placeholder="MM/DD/YYY"
                        type="date" min="1999-01-01" max="2018-12-01" />
                    <div class="invalid-feedback">
                        Please provide a Student's DOB
                    </div>
                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-primary text-center" type="submit" name="submit" id="submit">Submit Form</button>
            </div>
        </form>
        <br>
        <div id="message"><?php if(isset($success)){ echo $success; } ?></div>
        <div id="error" class="text-center"><?php if(isset($email_error)){ echo $email_error; } ?></div>

        <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        </script>
    </div>

</body>

<!--<<<<<<<<<<<<<<<<<<<<<<< Mobile Number Input >>>>>>>>>>>>>>>>>>>>>>>>>>>-->

<script>
function onlyNumberKey(evt) {

    // Only ASCII character in that range allowed
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
    return true;
}
</script>
<!--<<<<<< Page prevent >>>>-->
<script>
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}
</script>

</html>