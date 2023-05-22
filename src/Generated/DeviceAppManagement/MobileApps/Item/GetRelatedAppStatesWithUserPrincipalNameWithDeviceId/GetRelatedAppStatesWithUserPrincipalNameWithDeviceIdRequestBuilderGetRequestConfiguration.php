<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\GetRelatedAppStatesWithUserPrincipalNameWithDeviceId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new getRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new getRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return GetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): GetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilderGetQueryParameters {
        return new GetRelatedAppStatesWithUserPrincipalNameWithDeviceIdRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
