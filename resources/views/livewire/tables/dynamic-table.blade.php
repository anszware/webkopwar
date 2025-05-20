<div>
    <div style="margin-bottom: 10px; display: flex; gap: 10px; flex-wrap: wrap; align-items: center;">
        <input
            wire:model.debounce.500ms="search"
            type="text"
            placeholder="Global Search..."
            style="padding: 5px; width: 200px;"
        />

        @if ($enableFilter)
            @foreach ($columns as $col)
                <input
                    wire:model.debounce.500ms="filters.{{ $col }}"
                    type="text"
                    placeholder="Filter {{ ucfirst($col) }}"
                    style="padding: 5px; width: 150px;"
                />
            @endforeach
        @endif

        @if ($enableExport)
            <button
                wire:click="exportExcel"
                style="padding: 5px 10px; background-color: #28a745; color: white; border: none; cursor: pointer;"
            >
                Export Excel
            </button>
        @endif
    </div>

    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <thead>
            <tr style="background: #eee; cursor: pointer;">
                @foreach ($columns as $col)
                    <th wire:click="sortBy('{{ $col }}')">
                        {{ ucfirst($col) }}

                        @if ($sortColumn === $col)
                            @if ($sortDirection === 'asc')
                                &uarr;
                            @else
                                &darr;
                            @endif
                        @endif
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @forelse ($rows as $row)
                <tr>
                    @foreach ($columns as $col)
                        <td>{{ data_get($row, $col) }}</td>
                    @endforeach
                </tr>
            @empty
                <tr>
                    <td colspan="{{ count($columns) }}" style="text-align: center;">No data found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 10px;">
        {{ $rows->links() }}
    </div>
</div>
