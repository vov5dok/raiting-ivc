@extends('layouts.main')

@section('content')

    <div class="row mt-2">
        <div class="col-2">
            <a href="{{ route('user.create') }}" class="btn btn-outline-success me-2">Новый сотрудник</a>
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ФИО</th>
                        <th scope="col">День рождения</th>
                        <th scope="col">Отдел</th>
                        <th scope="col">Действие</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->birthday }}</td>
                            <td>{{ $user->department }}</td>
                            <td>
                                <form action="{{ route('user.delete', $user->id) }}"
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
