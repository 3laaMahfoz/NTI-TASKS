<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D3-T4</title>
</head>
<body>
    <?php
            // <!-- task three==> -->
            $deg=40;
            if(isset($deg)){
                if($deg>=50){
                    echo "pass";
                 }else{
                     echo "fail";
                 }
            }else{
                 echo "please enter your degree";
              }
            //  <!-- task three second code -->
            $degree=40;
            echo (isset($degree)?($degree>=50)?"pass":"fail":"please enter your degree");
            
    ?>
</body>
</html>