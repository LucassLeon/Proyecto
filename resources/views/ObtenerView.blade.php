<!DOCTYPE html>
<html>
<head>
    <title>Proyectos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Proyectos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Responsable</th>
                <th>Monto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td>{{ $proyecto->getId() }}</td>
                    <td>{{ $proyecto->getNombre() }}</td>
                    <td>{{ $proyecto->getFecha() }}</td>
                    <td>{{ $proyecto->getEstado() }}</td>
                    <td>{{ $proyecto->getResponsable() }}</td>
                    <td>{{ $proyecto->getMonto() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
