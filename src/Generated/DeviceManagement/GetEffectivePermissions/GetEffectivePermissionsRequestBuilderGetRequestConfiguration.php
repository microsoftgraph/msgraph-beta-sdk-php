<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GetEffectivePermissions;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetEffectivePermissionsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetEffectivePermissionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetEffectivePermissionsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GetEffectivePermissionsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetEffectivePermissionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetEffectivePermissionsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GetEffectivePermissionsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetEffectivePermissionsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetEffectivePermissionsRequestBuilderGetQueryParameters {
        return new GetEffectivePermissionsRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
