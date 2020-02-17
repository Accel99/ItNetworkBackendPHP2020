<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Високосный год</title>
</head>
<body>

<p>Введите год:</p>
<form>
    <p><input type="number" id="num_year" max="999999999999999999" min="1" placeholder="Год"></p>
    <p><input type="submit" value="Определить" id="btn_calc"></p>
</form>
<p>Год високосный:</p>
<p id="result">---</p>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    $(document).ready(function () {
        $('#btn_calc').click(function (e) {
            e.preventDefault();
            let value = $('#num_year').val();
            $.post('./LeapYear.php',
                {
                    year : value
                },
                function (data) {
                    $('#result').html(data);
                });
        });
    });
</script>

</body>
</html>