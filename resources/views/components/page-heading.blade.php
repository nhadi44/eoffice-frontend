<div class="page-title mb-3">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>{{ $title }}</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    @foreach ($breadcrumbs as $item)
                        <li class="breadcrumb-item {{ $loop->last ? 'active' : '' }}">
                            @if (!empty($item['url']))
                                <a href="{{ $item['url'] }}">{{ $item['text'] }}</a>
                            @else
                                {{ $item['text'] }}
                            @endif
                        </li>
                    @endforeach
                </ol>
            </nav>
        </div>
    </div>
</div>
