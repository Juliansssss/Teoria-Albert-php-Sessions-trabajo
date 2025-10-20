<?php

session_start();
include_once 'data.php';


//Compruebo si el formulario ha sido enviado

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = $_POST['date'];
    $image = $_POST['image'];
    $category = $_POST['category'];

    if(isset($title) && !empty(trim($title)) &&
        isset($content) && !empty(trim($content)) &&
            isset($date) && !empty(trim($date)) &&
                isset($image) && !empty(trim($image)) &&
                    isset($category) && !empty(trim($category))
    ){
        //Afegim dades a l'array
        array_push($noticies, [
            'title' => $title,
            'content' => $content,
            'date' => $date,
            'image' => $image,
            'category' => $category
        ]);

        echo "Noticia afegida correctament";
        echo '<p style="color:green"> Noticia afegida correctament</p>';
    }else{
        echo '<p style="color:red"> Error: Tots elc camps son obligatoris</p>';
    }
}else{
    echo '<p style="color:red"> Error: El formulari no ha sigut enviat correctament</p>';
}
?>
<form method="POST" action="index.php">

    <label for="title">Titol:</label>
    <input type="text" id="title" name="title" required>

    <label for="title">Contingut:</label>
    <input type="text" id="content" name="content" required>

    <label for="title">Data:</label>
    <input type="date" id="date" name="date" required>

    <label for="title">Imatge:</label>
    <input type="url" id="image" name="image" required>

    <label for="title">Categoria:</label>
    <input type="text" id="category" name="category" required>

    <input type="submit" value="Afegir Noticia">

</form>