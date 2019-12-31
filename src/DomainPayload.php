<?php
declare(strict_types=1);

namespace PayloadInterop;

interface DomainPayload
{
    /**
     * Returns the domain status.
     */
    public function getStatus() : string;

    /**
     * Returns the result produced by the domain as key-value pairs,
     * generally entities or aggregates, but also messages, filtered
     * inputs, exception objects, and so on.
     *
     * Implementors are encouraged to provide additional typehinted
     * reading methods specific to each element of the payload.
     */
    public function getResult() : array;
}
