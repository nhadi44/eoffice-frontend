<div class="table-responsive">
    <table class="table table-hover" id="progresSuratTable" style="width: 100%">
        <thead>
            <tr>
                @foreach ($tableHeading as $item)
                    <th>{{ $item['text'] }}</th>
                @endforeach
            </tr>
        </thead>
    </table>
</div>
