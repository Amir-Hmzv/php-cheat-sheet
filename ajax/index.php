<?php






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/cerulean/bootstrap.min.css">

    <script>
        function showSuggestion(str) {
            if (str.length == 0) {
                document.getElementById(`output`).innerHTML = "";
g

            } else {
           
                // ajax
                let xhttp = new XMLHttpRequest();

                // Define what happens on successful data submission

                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                

                        // Display the response in the HTML
                        document.getElementById('output').innerText =  this.responseText;

                    }

                }

                xhttp.open('GET', 'suggest.php?q=' + str,true);

                    xhttp.send()
            }



        }
    </script>
</head>

<body>
    <div class="container">
        <h1>Search Users</h1>
        <form>
            Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestion: <span id="output" style="font-weight:bold"></span></p>
    </div>
</body>

</html>