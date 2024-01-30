<?php
use FriendsOfRedaxo\navigationArray\buildArray;

// Function zur Generierung eines Navigationsarrays
if (!function_exists('navArray')) {
    function navArray($start = -1, $depth = 0, $ignoreOfflines = true)
    {
        $navArray = new buildArray($start, $depth, $ignoreOfflines);
        $navArray->setCustomDataCallback(function ($cat) {
            return ['catObject' => $cat];
        });
        $result = $navArray->generate();
        return $result;
    }
}

