<x-layout>
    <x-slot:hedding>
        Vacancies Listings
    </x-slot:hedding>
    <ul style="margin-top: 1rem">
        @foreach($vacancies as $item)
            <li style="list-style: none; padding: .2rem 0">
                <a href="/vacancies/{{ $item['id'] }}" style="color: #0a53be; cursor: pointer">
                    <strong>{{ $item['title'] }}</strong>: Pays {{ $item['salary'] }} per year <strong>Employer: </strong>: Pays {{ $item->employer->name }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
