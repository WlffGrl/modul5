<!DOCTYPE html>
<html lang="en">

<head>
    <title>JavaScript form validation - checking Password</title>
    <style type="text/css">
        li {
            list-style-type: none;
            font-size: 16pt;
        }
    </style>
</head>

<body>
    <h2>Input email dan Submit</h2>
    <form name="form1" action="#">
        <input type="password" name="password" id="password" onchange='check_pass();' /><br>
        <input type="password" name="confirm_password" id="confirm_password" onchange='check_pass();' /><br>
        <input type="submit" name="submit" value="registration" id="submit" disabled />
    </form>
    </div>
    <script type="text/javascript">
        function check_pass() {
            if (document.getElementById('password').value ==
                document.getElementById('confirm_password').value) {
                document.getElementById('submit').disabled = false;
            } else {
                document.getElementById('submit').disabled = true;
            }
        }
    </script>
</body>

</html>