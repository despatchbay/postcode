<?php

declare(strict_types=1);

namespace Brick\Postcode\Formatter;

use Brick\Postcode\CountryPostcodeFormatter;

/**
 * Validates and formats postcodes in Portugal.
 *
 * Postcode format is NNNN-NNN, N standing for a digit.
 *
 * @see https://en.wikipedia.org/wiki/List_of_postal_codes
 * @see https://en.wikipedia.org/wiki/Postal_codes_in_Portugal
 */
class PTFormatter implements CountryPostcodeFormatter
{
    /**
     * {@inheritdoc}
     */
    public function format(string $postcode) : ?string
    {
        if (strlen($postcode) !== 7) {
            return null;
        }

        if (! ctype_digit($postcode)) {
            return null;
        }

        return substr($postcode, 0, 4) . '-' . substr($postcode, 4);
    }
}
