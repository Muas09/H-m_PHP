<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form{
            width: 500px;
            margin-left:auto;
            margin-right:auto;
            background:pink;
        }
       
        
    </style>
</head>
<body>
    <?php
    function kilometer_to_miles($kilomets=0)
    {
        $miles_scale= 0.62;
        return $kilomets*$miles_scale; 
    }
    ?>  
    <form action="" method="post">
        <table class="form">     
            <tr>
                <td>Killomet:</td>
                <label><td><input type="text" name="kilomets" value="<?php echo $_POST["kilomets"]; ?> "></td></label>
                
            </tr>       
            <tr>
                <td>Kết quả dặm:</td>
                <label >
                    <td><input type="text" value="<?php echo kilometer_to_miles($_POST["kilomets"]) ?>"> </td>
                </label>
            </tr>
            <tr class="title">
                <td colspan="2">
                    <button type="submit">OK </button>
                </td>              
            </tr>
        </table>
    </form>
</body>
</html>