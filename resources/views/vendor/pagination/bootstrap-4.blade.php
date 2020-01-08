@if ($paginator->hasPages())
    <nav>
        <div class="paginations mb-5">
            {{-- Previous Page Link --}}
            {{-- @if ($paginator->onFirstPage()) --}}
                <a class="arrow">
                        &laquo;
                </a>
            {{-- @else

                    <a href="{{ $paginator->previousPageUrl() }}"></a> --}}

            {{-- @endif --}}

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a>{{ $element }}</a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <a class="active" aria-current="page">{{ $page }}</a>
                        @else
                            <a href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}

                <a class="arrow">
                    &raquo;
                </a>

            </div>
    </nav>
@endif
