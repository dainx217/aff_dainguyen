
@if ($paginator->hasPages())
<!-- Pagination -->
<ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        
            <li class="disabled mt-2 px-2">
                <span><i class="fa fa-angle-double-left"></i></span>
            </li>
        @else
        <li class="mt-2 px-2">
            <a href="{{ $paginator->previousPageUrl() }}">
                <span><i class="fa fa-angle-double-left"></i></span>
            </a>
        </li>
        @endif
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="paginate_button page-item active">
                            <a class="page-link">{{ $page }}</a>
                        </li>
                    @elseif (($page == $paginator->currentPage() + 1 || $page == $paginator->currentPage() + 2) || $page == $paginator->lastPage())
                        <li class="paginate_button page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @elseif ($page == $paginator->lastPage() - 1)
                        <li class="uk-disabled mt-2 px-2"><span><i class="fa fa-angle-double-left"></i></span></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="mt-2 px-2">
                <a href="{{ $paginator->nextPageUrl() }}">
                    <span><i class="fa fa-angle-double-right"></i></span>
                </a>
            </li>
        @else
            <li class="disabled mt-2 px-2">
                <span><i class="fa fa-angle-double-right"></i></span>
            </li>
        @endif
    </ul>

<!-- Pagination -->
@endif
