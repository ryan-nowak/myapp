<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home page</title>
        <style>
            .alert { color: red}
        </style>
    </head>
    <body>
        @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
         <form action="brewery" method="post">
            @csrf
            <label for="value1">Value 1</label> <input id="value1" 
                value="{{old('value1')}}"type="text" name="value1">
            <label for="value2">Value 2</label> <input id="value2" 
                value="{{old('value2')}}" type="text" name="value2">
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
