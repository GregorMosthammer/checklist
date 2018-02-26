@extends('layouts.app')

@section('content')



<form action="/insert" method="post">

{{csrf_field()}}
 {{ method_field('PUT') }}

Firstname
<input  type="text" name="firstname"></br>
Lastname
<input type="text" name="lastname"></br>
Phonenumber
<input type="text" name="phone"></br>
Occupation
<input type="text" name="occupation"></br>
Birthdate
<input type="date" name="birthdate"></br>
Street
<input type="text" name="street"></br>
Streetnumber
<input type="number" name="street_number"></br>
Postelcode
<input type="number" name="plz"></br>
City
<input type="text" name="city"></br>
Country
<input type="text" name="country"></br>
Essay
<textarea name="essay" rows="5" cols="40"></textarea></br>

<input type="submit" name="submit" value="Update">

</form>



@endsection
