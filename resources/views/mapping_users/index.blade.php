@extends('layouts.main')

@section('content')

    <div class="row mt-1">
        <div class="col-8">
            <form action="{{ route('mapping.users.store') }}" method="POST">
                @csrf
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col" class="w-25">ФИО</th>
                        @foreach($meetings as $meeting)
                            <th scope="col" class="w-25">{{ $meeting->name }}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            @foreach($meetings as $meeting)
                                <td>
                                    <input
                                        class="form-control"
                                        type="number"
                                        placeholder="Балл"
                                        name="points[{{ $user->id }}][{{ $meeting->id }}]"
                                        value=""
                                    >
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-grid gap-2 col-6 mx-auto mt-3">
                    <input type="submit" class="btn btn-success" value="Сохранить">
                </div>
            </form>
        </div>
    </div>
@endsection
