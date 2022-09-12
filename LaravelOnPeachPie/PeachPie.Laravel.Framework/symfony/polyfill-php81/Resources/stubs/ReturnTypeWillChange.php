<?php

if (\PHP_VERSION_ID < 80100) {
    // DM: Removed, .net compiler doesn't like this
    //#[Attribute(Attribute::TARGET_METHOD)]
    final class ReturnTypeWillChange
    {
        public function __construct()
        {
        }
    }
}
