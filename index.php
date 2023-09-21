<?

if(isset($_POST['newStory'])) {

    $newText = $_POST['newStory']; 
}
if(isset($_POST['newName'])) {

    $fileNuovo = $_POST['newName'];
}

$folder = './newFiles';

if (($newText && $fileNuovo) != "") {

    $newCreate = file_put_contents($fileNuovo,$newText );
    file_put_contents($folder,$newCreate, FILE_APPEND );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="newStory" class="form-label">Inserisci testo</label>
                <input class="form-control" type="textarea" id="newStory" name="newStory">
            </div>
            <div class="mb-3">
                <label for="newName" class="form-label">Nome file</label>
                <input class="form-control" type="text" id="newName" name="newName">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>