<div class="rating-stars">
    @php
        $score = intval(ceil($score))
    @endphp
    @for ($i = 1; $i <= 5; $i++, $score--)

        <i class="fa fa-star {{ $score > 0 ? ' active' : '' }}"></i>

    @endfor

</div>