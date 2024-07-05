<?php

// app/Helpers/helpers.php

use App\Controls;

function settings($key = null, $default = null) {
    if ($key === null) {
        return app(Controls::class);
    }

    return app(Controls::class)->get($key, $default);
}