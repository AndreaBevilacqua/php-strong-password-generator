<?php

$generatePassword = fn($length) => join('', array_map(fn() => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+'[random_int(0, 75)], range(1, $length)));