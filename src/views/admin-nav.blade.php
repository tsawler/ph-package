@if (Auth::user()->hasRole('pages'))
    @if (Request::segment(2) == 'newsletters')
        <li class='active'>
    @else
        <li>
        @endif
        <a href="#"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Newsletters</span><span
                    class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="/admin/newsletters/all">All Newsletters</a></li>
            <li><a href="/admin/newsletters/item?id=0">Add Newsletter</a></li>
        </ul>
    </li>
@endif