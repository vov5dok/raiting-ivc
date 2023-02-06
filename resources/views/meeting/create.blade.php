@extends('layouts.main')

@section('content')

    <div class="row mt-3 justify-content-center">
        <div class="col-8">
            <form action="{{ route('meeting.store') }}" method="POST">
                <div class="row justify-content-center">
                    <div class="col-6">
                        @csrf
                        <div class="form-group mt-2">
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Наименование"
                                name="name"
                                value="{{ old('name') }}"
                            >
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-2">
                            <textarea
                                class="form-control"
                                name="description"
                                rows="3">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group mt-2">
                            <select class="form-select" name="start_period">
                                <option selected>Квартал проведения</option>
                                <option value="1">1 квартал</option>
                                <option value="2">2 квартал</option>
                                <option value="3">3 квартал</option>
                                <option value="4">4 квартал</option>
                            </select>
                            @error('start_period')
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

