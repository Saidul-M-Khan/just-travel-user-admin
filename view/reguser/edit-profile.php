<?php
session_start();
require_once('../../model/model.php');
$id = $_REQUEST['id'];
$user = getUserById($id);
if (isset($_COOKIE['flag'])) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="./styles/header.css">
        <link rel="stylesheet" href="./styles/banner.css">
        <link rel="stylesheet" href="./styles/footer.css">
        <link rel="stylesheet" href="./styles/text-animation.css">
        <link rel="stylesheet" href="./styles/profile.css">
        <title>Edit Profile</title>

        <style>
            .form-input {
                width: 350px;
                height: 30px;
                border: 1px solid cyan;
                border-radius: 10px;
                background-color: transparent;
                display: inline-block;
                color: white;
                margin-left: 15px;
                padding: 5px;
            }

            .form-input:focus {
                background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
                outline: none;
                font-size: large;
            }

            .field {
                margin-top: 20px;
                margin-bottom: 20px;
                margin-left: 20px;
                margin-right: 20px;
            }
        </style>

    </head>

    <body>
        <header>
            <?php include './header.php'; ?>
        </header>

        <main>
            <form method="post" action="../../control/updateUserInfo.php" enctype="multipart/form-data">
                <div class="profile">

                    <center>
                        <h1 style="color:cyan; margin-bottom:15px;">[ Edit PROFILE ]</h1>
                    </center>
                    <center>


                        <?php
                        $msg = "";

                        // If upload button is clicked ...
                        if (isset($_POST['upload'])) {

                            $target_dir = "../assets/";
                            $filename = $_FILES["fileToUpload"]["name"];
                            $target_file = $target_dir . basename($filename);
                            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                            $filepath = "";

                            $tempname = $_FILES["fileToUpload"]["tmp_name"];
                            $folder = "../assets/" . $filename;

                            $db = mysqli_connect("localhost", "root", "root", "just-travel");

                            // Get all the submitted data from the form
                            $Username = $_SESSION['username'];
                            $sql = "UPDATE users SET photo='$target_file' WHERE username = '$Username'";
                            // $sql = "INSERT INTO users (photo) VALUES ('$target_file')";

                            // Execute query
                            mysqli_query($db, $sql);

                            // Now let's move the uploaded image into the folder: image
                            if (move_uploaded_file($tempname, $folder)) {
                                $msg = "Image uploaded successfully";
                            } else {
                                $msg = "Failed to upload image";
                            }
                        }

                        ?>

                        <?php
                        if (empty($user['photo'])) {
                        ?>
                            <img src="./images/user.png" width="45%">
                        <?php
                        } else {
                        ?>
                            <img src="./images/user.png" id="blah" alt="" width="45%" height="auto" style="border: 2px solid blueviolet; border-radius:50%;">
                        <?php
                        }
                        ?>
                        <br>
                        <br><br>
                        <input type="file" name="fileToUpload" id="fileToUpload" onchange="validateImageAndSize()">
                        <button type="submit" name="upload">UPLOAD</button>

                        </span>
                        <br>

                    </center>
                    <br>

                    <p class="field"><strong><i style="color:cyan" class="far fa-user-circle"></i>&nbsp;&nbsp;&nbsp;Username:</strong>&nbsp;<input class="form-input" type="text" name="username" id="user" onkeyup="validateUsername(document.getElementById('user').value)" value="<?= $user['username'] ?>" disabled></p>
                    <p id="usernameOutput"></p>
                    <!-- <br> -->
                    <p class="field"><strong><i style="color:cyan" class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Name:</strong>&nbsp;<input class="form-input" type="text" name="fname" id="fname" onkeyup="validateName(document.getElementById('fname').value)" value="<?= $user['fname']; ?>">
                    </p><span id="nameOutput"></span>
                    <!-- <br> -->
                    <p class="field"><strong><i style="color:cyan" class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;Password:</strong>&nbsp;<input type="text" class="form-input" name="password" id="pass" onkeyup="validatePassword(document.getElementById('pass').value)" value="<?= $user['password'] ?>">
                    <p id="passwordOutput"></p>
                    </p>
                    <!-- <br> -->
                    <p class="field"><strong><i style="color:cyan" class="fas fa-at"></i>&nbsp;&nbsp;&nbsp;Email:</strong>&nbsp;<input type="email" class="form-input" name="email" id="email" onkeyup="CheckEmail(document.getElementById('email').value)" value="<?= $user['email'] ?>">
                    <p id="emailOutput"></p>
                    </p>

                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <button class="profileButton" id="profileEditButton" name="edit-submit" role="button">Submit</button>
                    </center>
                </div>
            </form>
        </main>

        <footer>
            <?php
            include './footer.php';
            ?>
        </footer>

        <script src="./js/header.js"></script>
        <script src="./js/validate.js"></script>


        <script>
            function validateImageAndSize() {
                var formData = new FormData();
                var file = document.getElementById("fileToUpload").files[0];
                formData.append("Filedata", file);

                var t = file.type.split('/').pop().toLowerCase();
                if (t != "jpeg" && t != "jpg" && t != "png") {
                    alert('Please select a valid image file');
                    document.getElementById("fileToUpload").value = '';
                    return false;
                }

                var fsize = (file.size / 1024 / 1024).toFixed(2);
                if (fsize > 2) {
                    alert('Max Upload size is 2MB only');
                    document.getElementById("fileToUpload").value = '';
                    return false;
                }
                return true;
            }
        </script>


    </body>

    </html>

<?php
} else {
    header('location: ../../control/login.php');
}
?>