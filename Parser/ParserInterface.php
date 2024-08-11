<?php

declare(strict_types=1);

namespace SpecDoc\Specificator\Contracts\Parser;

use SpecDoc\Specificator\Contracts\Common\TokenInterface;

/**
 * An interface that implements methods for parsing incoming source.
 */
interface ParserInterface
{
    /**
     * Parses the source into a list of tokens.
     *
     * @return list<TokenInterface>
     * @throws ParserExceptionInterface Any parser error
     */
    public function parse(): iterable;
}
