<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Proyecto</title>
</head>
<body>
    <h1>Eliminar Proyecto</h1>
    <form action="/proyecto/delete" method="POST">
        @csrf
        <label for="id">ID:</label>
        <input type="number" id="id" name="id"><br>

        <button type="submit">Eliminar Proyecto</button>
    </form>
</body>
</html>
