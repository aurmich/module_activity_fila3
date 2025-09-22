<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
=======
>>>>>>> 2eb70e0 (.)
@foreach($getState() as $variable => $value)
    <p>
        {{$variable}}={{$value}}
        @if(!$loop->last),
        @endif
    </p>
<<<<<<< HEAD
@endforeach
=======
@endforeach
>>>>>>> 2eb70e0 (.)
