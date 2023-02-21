<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <select name="s" id="select">
        <option value=""></option>
        <option value="anun">Anun</option>
        <option value="azganun">Azganun</option>
        <option value="age">Tariq</option>
    </select>
    <table>
            <th>Anun</th>
            <th>Azganun</th>
            <th>Tariq</th>
        <tr>
            <td id='anun'>

            </td>
            <td id='azganun'>

            </td>
            <td id='age'>

            </td>
        </tr>
    </table>
    <script>
        $('#select').on('input',function(){
            let selectvalue=$('#select').val();
            $.post('check.php',{svalue:selectvalue},function(ard){
                document.getElementById(selectvalue).innerHTML=ard;
                select.value='';
            })
        })
    </script>
</body>
</html>