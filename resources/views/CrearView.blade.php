<!DOCTYPE html>
<html>
<head>
    <title>Crear Proyecto</title>
</head>
<body>
    <h1>Crear Proyecto</h1>
    <form action="/proyecto/store" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="fecha">Fecha de Inicio:</label>
        <input type="date" id="fecha" name="fecha"><br>

        <label for="estado">Estado:</label>
        <input type="text" id="estado" name="estado"><br>

        <label for="responsable">Responsable:</label>
        <input type="text" id="responsable" name="responsable"><br>

        <label for="monto">Monto:</label>
        <input type="number" id="monto" name="monto"><br>

        <button type="submit">Crear Proyecto</button>
    </form>
</body>
</html>
