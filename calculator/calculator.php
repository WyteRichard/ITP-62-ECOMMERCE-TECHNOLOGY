<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2c3e50;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            color: #ecf0f1;
        }

        form {
            background-color: #34495e;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 300px;
        }

        h2 {
            color: #3498db;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #bdc3c7;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #2ecc71;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #27ae60;
        }

        p {
            font-size: 18px;
            margin-top: 20px;
            color: #ecf0f1;
        }
    </style>
</head>

<body>
    <form id="calculatorForm">
        <h2>Simple Calculator</h2>
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" id="num1" required>

        <label for="num2">Number 2:</label>
        <input type="text" name="num2" id="num2" required>

        <label for="operation">Operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select>

        <button type="button" onclick="calculate()">Calculate</button>

        <h2>Result:</h2>
        <p id="result"></p>
    </form>

    <script>
        function calculate() {
            var num1 = document.getElementById("num1").value;
            var num2 = document.getElementById("num2").value;
            var operation = document.getElementById("operation").value;

            // Use AJAX to send data to the PHP script
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("result").innerHTML = xhr.responseText;
                }
            };

            xhr.open("POST", "practiceform.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("num1=" + num1 + "&num2=" + num2 + "&operation=" + operation);
        }
    </script>
</body>

</html>
