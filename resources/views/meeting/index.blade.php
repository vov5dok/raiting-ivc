@extends('layouts.main')

@section('content')

    <div class="row mt-2">
        <div class="col-2">
            <a href="{{ route('meeting.create') }}" class="btn btn-outline-success me-2">Новое мероприятие</a>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-8">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Квартал проведения</th>
                    <th scope="col">Операции</th>
                </tr>
                </thead>
                <tbody>
                @foreach($meetings as $meeting)
                    <tr>
                        <td>{{ $meeting->id }}</td>
                        <td>{{ $meeting->name }}</td>
                        <td>{{ $meeting->start_period }}</td>
                        <td>
                            <form action="{{ route('meeting.delete', $meeting->id) }}"
                                  method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="fas fa-trash text-danger" role="button"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
