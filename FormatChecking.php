<!DOCTYPE html>
<html lang="en">

<head>
    <title>JavaScript form validation - checking email</title>
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
        <ul>
            <li><input type='text' name='text1'/></li>
            <li>&nbsp;</li>
            <li class="submit"><input type="submit" name="submit" value="Submit" id="submit" onclick="ValidateEmail(document.form1.text1)"/></li>
        </ul>
    </form>
    </div>
    <script type="text/javascript">
        function ValidateEmail(inputText) {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (inputText.value.match(mailformat)) {
                document.form1.text1.focus();
                return true;
            } else {
                alert("Alamat email tidak valid!");
                document.form1.text1.focus();
                return false;
            }
        }
    </script>
</body>

</html>