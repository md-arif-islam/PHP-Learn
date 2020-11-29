<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP To javascript</title>
</head>

<body>
    <h5>PHP To javascript</h5>
    <input type="button" value="Show Something" id="button">
</body>
<script>
    <?php
    $data = array(
        "first-name" => "John",
        "last-name" => "Doe",
        "email" => "john@doe.me"
    );
    ?>

    let data = <?php echo json_encode($data) ?>

    document.getElementById("button").addEventListener("click", function() {
        console.log(data);
    });
</script>

</html>