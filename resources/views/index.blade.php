@extends('layouts.app')

@section('content')


                <div>
                    <h1>Список сотрудников</h1>
                </div>

                <a href="add-face" class="btn btn-info">Добавить сотрудника</a><br>
                <a href="faces-oldes-20">Сотрудники, старше 20</a><br>
                <a href="kids-y-7">Сотрудники + дети младше 7</a>

                @if(count($faces)>0)
                    <table class="table">
                        <tr>
                            <th>ФИО</th>
                            <th>Дата рождения</th>
                            <th>Пол</th>
                            <th>Дети</th>
                        </tr>
                        @foreach($faces as $face)
                            <tr>
                                <td>{{ $face->full_name }}</td>
                                <td>{{ $face->birth_date }}</td>
                                <td>{{ $face->gender }}</td>
                                <td>
                                    {{ count($face->Kid) }}
                                    @foreach($face->Kid as $kid)
                                        {{ $kid->full_name }}<br>
                                    @endforeach
                                    <a href="add-kid/{{$face->id}}" class="btn btn-success">Добавить ребенка</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    @else
                    <p class="text-danger">По вашему запросу результаты не найдены</p>
                @endif


@endsection