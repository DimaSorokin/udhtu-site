
@if (count($breadcrumbs))
<div class="container">
    <div class="row">
        <div class="col md-12 col-sm-12">
            <div class="global-component-crumbs">
                @foreach ($breadcrumbs as $breadcrumb)
                    @if ($breadcrumb->url && !$loop->last)
                        <a href="{{ $breadcrumb->url }}" class="global-component-crumbs__link"> {{ $breadcrumb->title }} </a>
                        <span class="global-component-crumbs__separator"> / </span>
                    @else

                        <span class="global-component-crumbs__current-page"> {{ $breadcrumb->title }} </span>

                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
