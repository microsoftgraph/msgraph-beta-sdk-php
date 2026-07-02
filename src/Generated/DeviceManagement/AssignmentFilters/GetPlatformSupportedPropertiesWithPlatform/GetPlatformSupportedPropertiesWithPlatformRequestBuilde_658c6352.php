<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AssignmentFilters\GetPlatformSupportedPropertiesWithPlatform;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: getPlatformSupportedPropertiesWithPlatformRequestBuilderGetRequestConfiguration
*/
class GetPlatformSupportedPropertiesWithPlatformRequestBuilde_658c6352 extends BaseRequestConfiguration 
{
    /**
     * @var GetPlatformSupportedPropertiesWithPlatformRequestBuilde_fe941368|null $queryParameters Request query parameters
    */
    public ?GetPlatformSupportedPropertiesWithPlatformRequestBuilde_fe941368 $queryParameters = null;
    
    /**
     * Instantiates a new GetPlatformSupportedPropertiesWithPlatformRequestBuilde_658c6352 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetPlatformSupportedPropertiesWithPlatformRequestBuilde_fe941368|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetPlatformSupportedPropertiesWithPlatformRequestBuilde_fe941368 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetPlatformSupportedPropertiesWithPlatformRequestBuilde_fe941368.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetPlatformSupportedPropertiesWithPlatformRequestBuilde_fe941368
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetPlatformSupportedPropertiesWithPlatformRequestBuilde_fe941368 {
        return new GetPlatformSupportedPropertiesWithPlatformRequestBuilde_fe941368($count, $filter, $search, $skip, $top);
    }

}
