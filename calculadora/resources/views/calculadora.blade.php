<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
<h1>Calculadora</h1>
<form method="POST" action="/calculadora">
    @csrf
    <input type="number" name="num1" required>
    <input type="number" name="num2" required>
    <select name="operacion">
        <option value="suma">Suma</option>
        <option value="resta">Resta</option>
        <option value="multiplicacion">Multiplicación</option>
        <option value="division">División</option>
    </select>
    <button type="submit">Calcular</button>
</form>
@if ($resultado !== null)
    <h2>Resultado: {{ $resultado }}</h2>
@endif
</body>
</html>
