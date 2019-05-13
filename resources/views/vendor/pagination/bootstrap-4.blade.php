@if ($paginator->hasPages())

<nav class="pagination mt-4 mb-4">

    <ul class="pages">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="prev-btn">
                <a href=""> <i class="page-link fe-icon-chevron-left"></i>Prev </a>
            </li>
        @else
            <li class="prev-btn">
            <a class=" page-item" rel="prev" href="{{ $paginator->previousPageUrl() }}" >
                <i class="page-link fe-icon-chevron-left"></i>Prev</a>
            </li>
        @endif





        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            {{-- @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif --}}

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="page-item active d-none d-sm-inline-block" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item d-none d-sm-inline-block"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())

            <li class="next-btn"><a href="{{ $paginator->nextPageUrl() }}">Next<i class="fe-icon-chevron-right"></i></a></li>

        @else

            <li class="next-btn"><a href="">Next<i class="fe-icon-chevron-right"></i></a>
        </li>
        @endif
    </ul>

</nav>

    @endif
