@props(['title', 'meta'])

<div id="page-banner-area" class="page-banner-area overlay"
     style="background-image:url({{ $meta['image'] }})">
    <!-- Subpage title start -->
    <div class="page-banner-title">
        <div class="text-center">
            <h2>{{ $title }}</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ $meta['url'] }}">{{ $meta['prevPage'] }} /</a>
                </li>
                <li>
                    {{ $title }}
                </li>
            </ol>
        </div>
    </div><!-- Subpage title end -->
</div><!-- Page Banner end -->