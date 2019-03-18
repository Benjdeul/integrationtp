<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<script>
    $(document).ready(function(){
        if (localStorage.getItem("user") === null) {
            window.location.href = "login.php";
        }
    });
</script>

</body>
</html>