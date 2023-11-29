<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="productsController" method="get">
        <input type="text" name="name" autofocus placeholder="nazwa" value="{{old('name')}}">
        @error('name')
        {{$message}}
        @enderror
        <br><br>
        <input type="number" placeholder="cena"name="price" value="{{old('price')}}">
        @error('price')
        {{$message}}
        @enderror
        <br><br>
        <textarea name="textarea" placeholder="opis" value="{{old('textarea')}}"></textarea>
        @error('textarea')
        {{$message}}
        @enderror
        <br><br>
        <input type="submit" value="wyslij">
    </form>
</body>
</html>