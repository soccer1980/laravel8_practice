<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @forelse($dogs as $dog)
        {{ "{$dog->name} (weight: {$dog->weight})" }} <br>
    @empty
        no data
    @endforelse
</body>
</html>
