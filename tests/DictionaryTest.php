<?php

use Morse\Dictionary;

it('translates latin to morse code', function () {
    $return = (new Dictionary)->translate('Hey dude');

    expect($return)->toEqual('.... . -.-- / -.. ..- -.. .');
});
