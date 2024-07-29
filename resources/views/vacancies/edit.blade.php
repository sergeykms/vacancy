<x-layout>
    <x-slot:hedding>
        Редактирование вакансии: {{ $vacancy->title }}
    </x-slot:hedding>
    <form class="container mt-4"
          method="POST"
          action="/vacancies/{{ $vacancy->id }}">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="title" class="form-label">Наименование вакансии</label>
            <input name="title"
                   value="{{ $vacancy->title }}"
                   type="text"
                   class="form-control"
                   id="title"
                   placeholder="Введите наименование вакансии">
        </div>
        @error('title')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
        <div class="mb-3">
            <label for="salary" class="form-label">Зарплата</label>
            <input name="salary"
                   value="{{ $vacancy->salary }}"
                   type="text"
                   class="form-control"
                   id="salary"
                   placeholder="Введите зарплату">
        </div>
        @error('salary')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
        {{--        @if($errors->any())--}}
        {{--            <div class="alert alert-danger" style="padding: .5rem 1rem;" role="alert">--}}
        {{--                @foreach($errors->all() as $error)--}}
        {{--                    <p style="margin: 0; padding: 0;">{{ $error }}</p>--}}
        {{--                @endforeach--}}
        {{--            </div>--}}
        {{--        @endif--}}

        <div>
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
</x-layout>
