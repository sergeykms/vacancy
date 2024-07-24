<x-layout>
    <x-slot:hedding>
        Vacancies Listings
    </x-slot:hedding>
    <div style="margin-top: 1rem; display: grid; grid-template: max-content / 1fr; row-gap: 1rem; padding: 1rem">
        @foreach($vacancies as $item)

            <a href="/vacancies/{{ $item['id'] }}"
               style="color: #0a53be; cursor: pointer; display: block; text-decoration: none; border: solid 1px deepskyblue; padding: 1rem; border-radius: .5rem">

                <div style="margin: 0;padding: 0; color: green">
                    <strong>{{ $item->employer->name }}</strong>:
                </div>
                <strong>{{ $item['title'] }}</strong>: Pays {{ $item['salary'] }} per year

            </a>

        @endforeach
    </div>
</x-layout>
