<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Stud</title>
</head>
<body>

    <h3>Dear {{$stud['name']}}</h3>
     
    

    <p>The Password for your <a href="cafestud.herokuapp.com/"> Cafe Stud Account</a> is  {{$stud['pass']}}. If this Request wasn't done by you please dont worry go to your profile in <a href="cafestud.herokuapp.com/">cafestud</a> and change your password to more secure one.</p>
    
    <p>You can login by clicking <a href="cafestud.herokuapp.com/"> here</a> </p> 

    
    <p>Best Regards,</p> 
    <p>Administrator,</p>
    <p>Cafe Stud.</p>
    










</body>
</html>