<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Stud</title>
</head>
<body>

    <h3>Dear {{$fee['name']}}</h3>
     
    

    <p>Hope you’re doing well. This is just to remind you that the Mess Fee with a total of ₹{{$fee['fee']}} for the month of {{$fee['month']}}  is due today. You can make your payment to the bank account given below.</p>
    
    <table border="1">
    <tr>
        <th><h4>Account Details:</h4></th>
        <td></td>
    </tr>
    <tr>
        <td>Account Name</td>
        <td>Cafe Stud</td>
    </tr>
    <tr>
        <td>Account No</td>
        <td>RCSS20MCA1062</td>
    </tr>
    <tr>
        <td>Bank</td>
        <td>Federal Bank CMS Branch, Ernakulam</td>
    </tr>
    <tr>
        <td>IFSC Code</td>
        <td>FDRL0001424</td>
    </tr>

    </table>
   

    <p>Please login your <a href="cafestud.herokuapp.com/">cafestud account</a> to check the dues on time and If you have any queries regarding this matter, </p> 
    <p>Please contact us: thecafestud@gmail.com</p> 
    
    
    <p>Best Regards,</p> 
    <p>Administrator,</p>
    <p>Cafe Stud.</p>
    










</body>
</html>