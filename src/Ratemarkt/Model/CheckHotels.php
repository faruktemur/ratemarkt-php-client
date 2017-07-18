<?php

namespace Ratemarkt\Model;

use Ratemarkt\Options;
use Ratemarkt\RatemarktResource;
use Ratemarkt\Request\CheckHotelsRequest;

class CheckHotels extends RatemarktResource
{
    public static function create(CheckHotelsRequest $request, Options $options)
    {
        $rawResult = parent::httpClient()->post($options->getBaseUrl() . '/checkhotels', parent::getHttpHeaders(), $request);

        return $rawResult;
    }
}
