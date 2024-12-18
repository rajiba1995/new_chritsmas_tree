<div>
<table class="table whitespace-nowrap min-w-full">
        <thead>
        <tr>
            <th>SL</th>
                @foreach ($fields as $field)
                    <th scope="col" class="text-start">{{ strtoupper(str_replace('_', ' ', $field)) }}</th>
                @endforeach
                <th scope="col" class="text-start">ACTIONS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $index => $item)

            @if($dataType == 'inventories')
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->division?$item->division->name : 'N/A' }}</td>
                <td>{{ $item->destination?$item->destination->name : 'N/A' }}</td>
                <td>{{ $item->category?$item->category->name : 'N/A' }}</td>
                <td>
                    <x-action-button type="edit" url="" />
                    <x-action-button type="delete" url="" />
                </td>
            </tr>
        @endif
           
            @endforeach
        </tbody>
    </table>

</div>
