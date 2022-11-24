<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php 
        function check_the_number($number){
            if(isset($number) && is_numeric($number)) return true;
            return false;
        }

        if(isset($_GET['operation'])){
            $result_message = "";
            $x1 = $_GET['x1'];
            $x2 = $_GET['x2'];

            if(check_the_number($x1) && check_the_number($x2)){
                switch ($_GET['operation']) {
                    case '+':
                        $res = $x1 + $x2;
                        $result_message = "<h2>Result of $x1 {$_GET['operation']} $x2 is $res</h2>";
                        break;
                    case '-':
                        $res = $x1 - $x2;
                        $result_message = "<h2>Result of $x1 {$_GET['operation']} $x2 is $res</h2>";
                        break;
                    case '*':
                        $res = $x1 * $x2;
                        $result_message = "<h2>Result of $x1 {$_GET['operation']} $x2 is $res</h2>";
                        break;
                    case '/':
                        $res = round($x1 / $x2, 4);
                        $result_message = "<h2>Result of $x1 {$_GET['operation']} $x2 is $res</h2>";
                        break;
                    default:
                        $result_message = "<h2>Sorry we can't solve it</h2>";
                        break;
                }
            }
        }
        ?>
        <form action="index.php" method="get">
            <h1>Calculator</h1>
            <?php echo $result_message; ?>
            <div class="input-area">
                <label for="x1">Enter first value: 
                    <input type="number" name="x1" id="x1">
                </label>
            </div>
            <div class="input-area">
                <label for="x2">Enter second value
                    <input type="number" name="x2" id="x2">
                </label>
            </div>
            <div class="calc-buttons">
                <input type="submit" name="operation" value="+">
                <input type="submit" name="operation" value="-">
                <input type="submit" name="operation" value="*">
                <input type="submit" name="operation" value="/">
            </div>
        </form>
    </div>
</body>
</html>