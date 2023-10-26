<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Persons</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('persons.create')}}">Create a person</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>street</th>
                <th>home_nr</th>
                <th>zipcode</th>
                <th>city</th>
                <th>phone_nr</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
            @foreach($persons as $person)
            <tr>
                <td>{{$person->id}}</td>
                <td>{{$person->name}}</td>
                <td>{{$person->street}}</td>
                <td>{{$person->home_nr}}</td>
                <td>{{$person->zipcode}}</td>
                <td>{{$person->city}}</td>
                <td>{{$person->phone_nr}}</td>
                <td>
                    <a href="{{route('persons.edit', ['person' => $person])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('persons.destroy', ['person' => $person])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>