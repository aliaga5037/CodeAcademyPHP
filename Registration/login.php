<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="assets/css/style.css" media="screen,projection">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<form action="check.php" method="post">
    <div class="container">
            <div class="row main z-depth-3">
                <form class="col s12">
                    <div class="row">
                        <div class="logo">
                            <h5>Order Service</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">perm_contact_calendar</i>
                            <input name="fullName" id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">business</i>
                            <input name="company" id="icon_telephone" type="text" class="validate">
                            <label for="icon_telephone">Company</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input name="email" id="icon_telephone" type="email" class="validate">
                            <label for="icon_telephone">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">phone</i>
                            <input name="phone" id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Telephone</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select multiple>
                                <option value="" disabled selected>Interested in</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                            <label>Interest</label>
                        </div>
                        <div class="input-field col s6">
                            <select multiple>
                                <option value="" disabled selected>Budget</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                            <label>Budget</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="date" class="datepicker" placeholder="Expected start date">
                        </div>
                        <div class="input-field col s6">
                            <input type="date" class="datepicker" placeholder="Expected finish date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Message</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light right" type="submit" name="action">
                            SUBMIT REQUEST
                        </button>
                    </div>
                </form>
            </div>

    </div>
</form>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>