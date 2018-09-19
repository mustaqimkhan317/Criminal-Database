<?php
    $h = "Hello"." world";
    echo $h;
?>
<!doctype html>


<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>
    </head>
    
    
    
    <body>
        <script>
            $(document).ready(function(){
                $("#b1").click(function(){
                    $("p").html("Hi world");

                });
                $("#b2").click(function(){
                    $("p").html("<p>This is a paragraph!</p>");

                });
            });
        </script>



        <button id="b1">Button 1</button><br>
        <button id="b2">Button 2</button><br>


        <p>This is a paragraph!</p>

    </body>
</html>