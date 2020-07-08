<?php

namespace nebado\parser;

interface ParserInterface
{

    public function process(string $url, string $tag) : array;
}
