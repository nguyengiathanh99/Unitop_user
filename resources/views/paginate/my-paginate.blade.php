@if ($paginator->hasPages())
    <div class="list-course-pagination">
        <nav aria-label="Page navigation">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class=" page-item" aria-disabled="true">
                        <span class="page-link" aria-hidden="true"><i class="fas fa-long-arrow-alt-left"></i></span>
                    </li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i
                                    class="fas fa-long-arrow-alt-left"></i></a></li>
                @endif
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active page-item" aria-current="page"><span
                                            class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="prev"><i
                                    class="fas fa-long-arrow-alt-right"></i></a>
                    </li>
                @else
                    <li class=" page-item" aria-disabled="true">
                        <span class="page-link" aria-hidden="true"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
@endif
