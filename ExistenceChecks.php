<!DOCTYPE html>
<html>

<head>
    <title>Existence Checks</title>
</head>

<body>
    <form name="myForm" action="" onsubmit="return validateForm()" method="POST">
        <input type="text" id="username" name="username">
        <input type="submit" value="Submit">
    </form>
    <script type="text/javascript">
        function validateForm() {
            var user = document.myForm.username.value;
            if (user == "") {
                alert("Username tidak boleh kosong");
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>

</html>