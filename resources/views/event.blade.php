<div @if ($eventClickEnabled) wire:click.stop="onEventClick('{{ $event['id'] }}')" @endif
    class="flex flex-wrap px-3 py-2 text-black bg-white border rounded-lg shadow-md cursor-pointer">
    <div class="flex w-full">
        @if ($this->showStartTimeEnabled)
            <div class="inline w-auto place-self-center ">
                {{ \Carbon\Carbon::parse($event['date'])->format('H:i') }}
            </div>
        @endif
        <div class="flex-auto inline pl-2 text-sm font-medium text-left place-self-center">
            {{ $event['title'] }}
        </div>
    </div>
    <div class="w-full mt-2 text-xs">
        {{ $event['description'] ?? 'No description' }}

    </div>
</div>
