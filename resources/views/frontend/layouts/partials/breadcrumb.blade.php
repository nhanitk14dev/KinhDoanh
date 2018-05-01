@php $breadcrumbs = Breadcrumb::$breadcrumb; @endphp
@if(!empty($breadcrumbs) && is_array($breadcrumbs) && count($breadcrumbs) > 1)
    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumb">
                @foreach($breadcrumbs as $key => $value)
                    @if($value["link"] )
                        <li>
                            <a href="{!! $value["link"] !!}" title="{!! $value["name"] !!}">{!! $value["name"] !!}</a>
                        </li>
                    @else
                        <li class="active">{!! $value["name"] !!}</li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
@endif