<html>

<head>
    <title>Data-Type Checks</title>
</head>

<body>
    <form name="myForm" action="" onsubmit="return validateForm()" method="POST">
        <input type="text" id="telp" name="telp">
        <input type="submit" value="Submit">
    </form>
    <script type="text/javascript">
        function validateForm() {
            var telp = document.myForm.telp.value;
            if (isNaN(telp)) {
                alert("Telp harus berupa angka");
                return false;
            } else if (telp.length != 12){
                alert("Nomor telepon harus 12 digit")
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>

</html>