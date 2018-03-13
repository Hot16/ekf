@extends('layouts.app')

@section('content')
    <h2>Внесите данные</h2>
    {{ Form::open(['url' => 'add-kid']) }}
    {{ Form::text('face_id', $face_id) }}<br>
    {{ Form::label('soname', 'Фамилия') }}
    {{ Form::text('soname') }}<br>
    {{ Form::label('name', 'Имя') }}
    {{ Form::text('name') }}<br>
    {{ Form::label('father_name', 'Отчество') }}
    {{ Form::text('father_name') }}<br>
    {{ Form::label('gender', 'Пол') }}
    {{ Form::select('gender', ['1' => 'М', '2' => 'Ж']) }}<br>
    {{ Form::label('birth_date', 'Дата рождения') }}
    {{ Form::date('birth_date') }}<br>
    {{ Form::submit('Записать') }}
    {{ Form::close() }}
@endsection