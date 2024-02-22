<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Menambahkan Font Awesome untuk ikon -->
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        h1 {
            margin-top: 20px;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        table {
            margin: auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }
        td {
            padding: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="button"] {
            width: calc(100% - 4px); /* Diubah untuk memperbaiki lebar tombol */
            padding: 20px;
            font-size: 18px;
            box-sizing: border-box;
            cursor: pointer;
            background-color: #4caf50;
            border: none;
            color: #fff;
            border-radius: 5px;
            margin: 2px;
        }
        input[type="button"]:hover {
            background-color: #45a049;
        }
        .icon {
            font-size: 24px;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <h1>Calculator <i class="fas fa-calculator icon"></i></h1> <!-- Menambahkan ikon kalkulator -->
    <form action="" method="post" name="form1">
        <input type="text" name="txt1" id=""><br>
        <table>
            <tr>
                <td><input type="button" value="1" onClick="form1.txt1.value+='1'"></td>
                <td><input type="button" value="2" onClick="form1.txt1.value+='2'"></td>
                <td><input type="button" value="3" onClick="form1.txt1.value+='3'"></td>
            </tr>
            <tr>
                <td><input type="button" value="4" onClick="form1.txt1.value+='4'"></td>
                <td><input type="button" value="5" onClick="form1.txt1.value+='5'"></td>
                <td><input type="button" value="6" onClick="form1.txt1.value+='6'"></td>
            </tr>
            <tr>
                <td><input type="button" value="7" onClick="form1.txt1.value+='7'"></td>
                <td><input type="button" value="8" onClick="form1.txt1.value+='8'"></td>
                <td><input type="button" value="9" onClick="form1.txt1.value+='9'"></td>
            </tr>
            <tr>
                <td><input type="button" value="0" onClick="form1.txt1.value+='0'"></td>
                <td><input type="button" value="c" onClick="form1.txt1.value=''"></td>
                <td><input type="button" value="+" onClick="form1.txt1.value+='+'"></td>
            </tr>
            <tr>
                <td><input type="button" value="-" onClick="form1.txt1.value+='-'"></td>
                <td><input type="button" value="x" onClick="form1.txt1.value+='*'"></td>
                <td><input type="button" value=":" onClick="form1.txt1.value+='/'"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="button" value="=" onClick="form1.txt1.value=eval(form1.txt1.value)"></td>
            </tr>
        </table>
    </form>
</body>
</html>
