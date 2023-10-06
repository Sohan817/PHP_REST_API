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
        <h1>Read JSON Data</h1>
        <div id="load-data"></div>
    </div>
    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                //Fetch single data
                // url: "https://jsonplaceholder.typicode.com/posts/10",
                //Fetch all data
                url: "https://jsonplaceholder.typicode.com/posts",
                //get saved json data
                // url: "json/my.json",
                type: "GET",
                success: function(data) {
                    //For single data
                    //$("#load-data").append(data.id + "<br>" + data.title + "<br>" + data.body);
                    //For all data
                    $.each(data, function(key, value) {
                        $("#load-data").append(value.id + "<br>" + value.title + "<br>" + value.body + "<br>");
                    });
                }
            });
        });
    </script>
</body>

</html>