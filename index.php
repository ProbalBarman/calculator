<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic calculator</title>
    <style><?php include "style.css" ?></style>
    
</head>
<body>
    <div class="container">
        <h2>Basic Calculator</h2>
        <form method="post" action="">
            <input type="number" name="num1" placeholder="enter first number" required> <br>
            <input type="number" name="num2" placeholder="enter second number" required> <br>
            <select name="operation">
                <option value="add">Addition</option>
                <option value="substract">Substration</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
                <option value="binary">Binary Conversion</option>
                <option value="hexadecimal">Hexadecimal Conversion</option>
                
            </select> <br>
            <button type="submit">Calculate</button>
        </form>
        <div id="result">

        </div>
    </div>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        switch ($operation){
            case "add":
                $result = $num1 + $num2;
                echo "<h2>Result: $result</h2>";
                break; 
            case "substract":
                $result = $num1 - $num2;
                echo "Result: $result";
                break; 
            case "multiply":
                $result = $num1 * $num2;
                echo "Result: $result";
                break; 
                case "divide":
                    if ($num2 != 0) {
                        $result = $num1 / $num2;
                        echo "Result: $result";
                    } else {
                        echo "Cannot divide by zero.";
                    }
                    break;
                    case "binary":
                        echo "Binary: " . decbin($num1);
                        break;
                    case "octal":
                        echo "Octal: " . decoct($num1);
                        break;
                    case "hexadecimal":
                        echo "Hexadecimal: " . dechex($num1);
                        break; 
        }
    }
    ?>

    <!-- <?php
    echo 'User IP Address:' . $_SERVER['REMOTE_ADDR'] . '<br>';
    echo 'User Agent:' . $_SERVER['HTTP_USER_AGENT'] . '<br>';
    ?> -->


</body>
</html>