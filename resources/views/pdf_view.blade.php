<!DOCTYPE html>
<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Document</title>
  <style>
    body{
        font-family: sans-serif;
    }
    table {
        width: 100%;
        text-transform: capitalize;
    }
    table, th, td {
        border: 1px solid black;
        background: 
    }
    th {
        height: 10px;
    }
    td , th{
        text-align: center;
    }
    th, td {
        padding: 10px;
    }
    th {
        background-color:  brown;!important
        color: white;
        font-weight: bold;
    }
    article{
        margin-top: 1rem;
    }
    article strong{
        font-size: medium;
    }
    article p{
        text-transform: capitalize;
        font-size: small;
        font-weight: 100;
        letter-spacing: 1px
    }
</style>
</head>
<body>

  <article>
    <div>
      <img src="{{ $personPic }}" alt=".." style="height: 51mm; width:51mm;">
    <img src="{{ $vaccinePic }}" alt=".." style="height: 51mm; width:51mm;">
    </div>
    <p><strong>Name :</strong> {{ $person->last_name }} {{ $person->first_name }} . {{ $person->middle_name }} </p>
    <p><strong>Category :</strong> {{ $person->category }} </p>
    @if ($person->category == 'visitor')

    @else
    <p><strong>ID number :</strong> {{ $person->id_number }} </p>
    @endif

    <p><strong>Contact Number :</strong> {{ $person->contact_number }} </p>
    <p><strong>Address :</strong> {{ $person->brgy }} {{ $person->municipality }} . {{ $person->province }}</p>

    @if ($person->department and $person->grade_level and $person->section)
    <p><strong>school :</strong> {{ $person->department }} , {{ $person->grade_level }} , {{ $person->section }}</p>
    @endif
    
</article>


{{-- table --}}
<table>
<thead>
<tr>
    <th>DATE / TIME</th>
    <th>PURPOSE</th>
    <th>TEMPARATURE</th>
    <th>SYMTOMPS</th>
</tr>
</thead>
<tbody>
@forelse ($person->survey as $item)
<tr>
    <td>{{ date('M/d/Y | h :i a', strtotime($item->created_at)) }}</td>
    <td>{{ $item->purpose }}</td>
    <td>{{ $item->temperature }}</td>
    <td>
        {{ $item->fever_chill }} 
        {{ $item->headache }}
        {{ $item->cough }}
        {{ $item->cold }}
        {{ $item->sorethroat }}
        {{ $item->rashess }}
        {{ $item->fatigue }}
        {{ $item->weakness }}
        {{ $item->lost_of_smell_taste }}
        {{ $item->diarhea }}
        {{ $item->defficult_breathing }}
        {{ $item->none }}
        {{ $item->other_symptoms }}
    </td>
</tr>
@empty

@endforelse
</tbody>
</table>

</body>
</html>