<?php
declare(strict_types=1);

namespace PayloadInterop;

interface DomainStatus
{
    /**
     * Input accepted for later processing.
     */
    const ACCEPTED = 'ACCEPTED';

    /**
     * Create succeeded.
     */
    const CREATED = 'CREATED';

    /**
     * Delete succeeded.
     */
    const DELETED = 'DELETED';

    /**
     * Generic error.
     */
    const ERROR = 'ERROR';

    /**
     * Find succeeded.
     */
    const FOUND = 'FOUND';

    /**
     * Input not valid.
     */
    const INVALID = 'INVALID';

    /**
     * Find failed (n.b.: not an error).
     */
    const NOT_FOUND = 'NOT_FOUND';

    /**
     * Processing is not finished yet.
     */
    const PROCESSING = 'PROCESSING';

    /**
     * Generic success.
     */
    const SUCCESS = 'SUCCESS';

    /**
     * Interaction is not authorized.
     */
    const UNAUTHORIZED = 'UNAUTHORIZED';

    /**
     * Update succeeded.
     */
    const UPDATED = 'UPDATED';
}
