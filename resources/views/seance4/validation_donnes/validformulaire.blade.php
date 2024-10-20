<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="validform" method="post">
        @csrf
        nom :
        <input type="text" name="nom" value="{{old("nom")}}" id=""><br><br>
        @error('nom')
        <span style="color:red">{{$message}}</span>
        @enderror<br>

        prenom :
        <input type="text" name="prenom" value="{{old("prenom")}}" id=""><br><br>
        
        @error('prenom')
        <span style="color:red">{{$message}}</span>
        @enderror<br>


        age :
        <input type="number" name="age" value="{{old("age")}}"  id=""><br><br>
        @error('age')
        {{$message}}<br>
        @enderror


        Email :
        <input type="text" name="email" value="{{old("email")}}"  id=""><br><br>
        @error('email')
        {{$message}}<br>
        @enderror



        Adresse :
        <input type="text" name="adress" value="{{old("adress")}}"  id=""><br><br>
        @error('adress')
        {{$message}}<br>
        @enderror


        mot pass :
        <input type="text" name="pass" value="{{old("pass")}}"  id=""><br><br>


        Re-mot pass :
        <input type="password" name="pass_confirmation" value="{{old("pass_confirmation")}}"  id=""><br><br>
        @error('pass')
        {{$message}}<br>
        @enderror



        <input type="submit" value="Send">
        {{-- any() si exists errors or no
        all() return tout les errors si exists--}}
        {{-- @if ($errors->any()){
            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    {{$error}};
                </li>
                @endforeach
            </ul>
        }

        @endif --}}
    </form>
</body>
</html>
