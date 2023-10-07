<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container text-center">
        <h1>PHP with Ajax and JSON</h1>

        <div class="container text-center">
            <table class="table table-bordered" id="load-table" cellpadding="10px">
                <tr class="table-primary">
                    <th>Id</th>
                    <th>Name</th>
                    <th>City</th>
                    <th>Age</th>
                </tr>
            </table>
        </div>

        <div id="load-data">
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script>
        //fetch all data using getJSON method
        $.getJSON(
            "fetch_json.php",
            function(data) {
                $.each(data, function(key, value) {
                    $("#load-data").append(
                        value.id + "<br>" + value.name + "<br>" + value.city + "<br>" + value.age + "<br>"
                    );
                });
            }
        );
        //fetch all data using ajax method
        $.ajax({
            url: "fetch_json.php",
            method: "POST",
            dataType: "JSON",
            success: function(data) {
                $.each(data, function(key, value) {
                    $("#load-table").append(
                        "<tr>" +
                        "<td>" + value.id + "</td>" +
                        "<td>" + value.name + "</td>" +
                        "<td>" + value.city + "</td>" +
                        "<td> " + value.age + "</td>" +
                        "</tr>"
                    );
                });
            }
        });
        //fetch single data using ajax method
        // $.ajax({
        //     url: "fetch_json.php",
        //     method: "POST",
        //     data: {
        //         id: 1
        //     },
        //     dataType: "JSON",
        //     success: function(data) {
        //         $.each(data, function(key, value) {
        //             $("#load-data").append(
        //                 value.id + " " + value.name + " " + value.city + " " + value.age + "<br>"
        //             );
        //         });
        //     }
        // });
    </script>
</body>

</html>