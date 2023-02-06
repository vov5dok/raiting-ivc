@extends('layouts.main')

@section('content')

    <div class="row mt-3 justify-content-center">
        <div class="col-8">
            <form action="{{ route('user.store') }}" method="POST">
                <div class="row justify-content-center">
                    <div class="col-6">
                        @csrf
                        <div class="form-group mt-2">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="ФИО"
                                name="name"
                                value="{{ old('name') }}"
                            >
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="E-mail"
                                name="email"
                                value="{{ old('email') }}"
                            >
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <input
                                type="date"
                                class="form-control"
                                placeholder="День рождения"
                                name="birthday"
                                value="{{ old('birthday') }}"
                            >
                            @error('birthday')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Отдел"
                                name="department"
                                value="{{ old('department') }}"
                            >
                            @error('department')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto mt-3">
                            <input type="submit" class="btn btn-success" value="Сохранить">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
