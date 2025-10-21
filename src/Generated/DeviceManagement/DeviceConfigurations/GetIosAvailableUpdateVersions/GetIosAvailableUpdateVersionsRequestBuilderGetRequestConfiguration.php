<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\DeviceConfigurations\GetIosAvailableUpdateVersions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetIosAvailableUpdateVersionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetIosAvailableUpdateVersionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetIosAvailableUpdateVersionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GetIosAvailableUpdateVersionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetIosAvailableUpdateVersionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetIosAvailableUpdateVersionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetIosAvailableUpdateVersionsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetIosAvailableUpdateVersionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetIosAvailableUpdateVersionsRequestBuilderGetQueryParameters {
        return new GetIosAvailableUpdateVersionsRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
