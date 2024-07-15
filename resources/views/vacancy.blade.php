<x-layout>
    <x-slot:hedding>
        Vacancy
    </x-slot:hedding>
    <h2 style="font-family: var(--navigateFontFamily),sans-serif; margin: .5rem 0;">{{ $vacancy['title'] }}</h2>
    <p style="font-family: var(--navigateFontFamily),sans-serif}}">
        this job pays {{ $vacancy['salary'] }} per year
    </p>
</x-layout>
