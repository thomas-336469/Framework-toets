<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>create a person</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>

        @endif
    </div>
    <form method="post" action="{{route('persons.store')}}">
        @csrf
        @method('post')
        <div>
            <labe>Name</label>
                <input type="name" name="name" placeholder="name">
        </div>
        <div>
            <labe>street</label>
                <input type="street" name="street" placeholder="street">
        </div>
        <div>
            <labe>home_nr</label>
                <input type="home_nr" name="home_nr" placeholder="home_nr">
        </div>
        <div>
            <labe>zipcode</label>
                <input type="zipcode" name="zipcode" placeholder="zipcode">
        </div>
        <div>
            <labe>city</label>
                <input type="city" name="city" placeholder="city">
        </div>
        <div>
            <labe>phone_nr</label>
                <input type="phone_nr" name="phone_nr" placeholder="phone_nr">
        </div>
        <div>
            <input type="submit" value="save a new person">
        </div>
    </form>
</body>

</html>