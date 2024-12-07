@extends('admin.layouts.app')
@section('title')
    Достижение
@endsection

@section('sub-title')
    Изменить
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.achievement_levels.update', $achievementLevel->id) }}" method="POST" >
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $achievementLevel->name }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" class="form-control" required>{{ $achievementLevel->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="is_active">Is Active:</label>
                    <input type="checkbox" id="is_active" name="is_active" value="1" {{ $achievementLevel->is_active ? 'checked' : '' }}>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection