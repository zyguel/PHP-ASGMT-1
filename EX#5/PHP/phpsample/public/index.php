<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <h1>
        <?php
            echo "Hello world";
        ?>
    </h1>
    <h1>
       Largest number - 21, 1 & 100
    </h1>
    <p>
        <?php
            $largest = 0;
            $num1 = 21;
            $num2 = 1;
            $num3 = 100;
            
            if ($num1 > $num2){
                if ($num1 > $num3){
                    $largest = $num1;
                }else{
                    $largest = $num3;
                }
            }else{
                if ($num2 > $num3){
                    $largest = $num2;
                }else{
                    $largest = $num3;
                }
            }    
            echo "Largest among $num1, $num2 and $num3 is $largest.";
        ?>
    </P>
    <h1>
       Swapping numbers - a=26, b=99
    </h1>
    <p>
        <?php
            $temp = 0;
            $a = 26;
            $b = 99;
            
            if($b < $a){
                $temp = $b;
                $b = $a;
                $a = $temp;
            }else{
                $temp = $a;
                $a = $b;
                $b = $temp;
            }
            
            echo "a=$a b=$b";
        ?>
    </P>
    <h1>
       Fibonacci - 20
    </h1>
    <p>
        <?php
            $a = 0; 
            $b = 1;
            $next;
            $i = 1;
            
            while ($i <= 20) {
                echo "$a ";
                $next = $a + $b;
                $a = $b;
                $b = $next;
                $i = $i + 1;
            }
        ?>
    </P>
    <h1>
       * Right Triangle - 5 Levels
    </h1>
    <p>
        <?php
            for($i=1; $i<=5; $i++)
            {
                for($j=1; $j<=$i; $j++)
                {
                    echo "*";
                }
                echo "<br/>";
            }
        ?>
    </P>
    <h1>FLAMES</h1>
    <form id="flamesForm" method="get" onsubmit="flamesSubmit(event)">
        <input type="text" name="name1" id="name1" placeholder="Name 1" required="required">
        <input type="text" name="name2" id="name2" placeholder="Name 2" required="required">
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Submit"/>
    </form>
    <h2 id="result"></h2>
    <script>
        var xhttp = new XMLHttpRequest();

        function flamesSubmit(e){
            var url = "../src/php/flames.php";
            var data = $("#flamesForm").serialize();
            /*  This creates a URL Parameter list that will look like this: 
                name1=value_of_name1&name2=value_of_name2*/
            var urlData = url+"?"+data;
            /*  To pass data to your php in GET, concatenate url + "?" + data to create a url request like this: 
                ../src/php/flames.php?name1=value_of_name1&name2=value_of_name2*/
            xhttp.open("GET", urlData, true);
            xhttp.send();
            /*  To pass data to your php in POST, use the following instead:
                xhttp.open("POST", url, true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");    
                xhttp.send(data);*/
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    var res = JSON.parse(this.responseText);
                    if(res["status"] == 200){
                        $("#result").text(res["data"]);
                    }else{
                        alert(res["data"]);
                    }
                }
            };
            e.preventDefault();
        }
    </script>
</body>
</html>