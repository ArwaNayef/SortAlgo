
    <h1>Places</h1>
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Average Rating</th>
            <th>User Number</th>
            <th>Weighted Rating</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($places as $place)
            <tr>
                <td>{{ $place->name }}</td>
                <td>{{ $place->avg_rating }}</td>
                <td>{{ $place->user_number }}</td>
                <td>{{ $place->weightRating }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

