<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipalName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: retrievePowerliftAppDiagnosticsDetailsWithUserPrincipalNameRequestBuilderGetRequestConfiguration
*/
class RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipal_1e58aed8 extends BaseRequestConfiguration 
{
    /**
     * @var RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipal_b8e2acff|null $queryParameters Request query parameters
    */
    public ?RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipal_b8e2acff $queryParameters = null;
    
    /**
     * Instantiates a new RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipal_1e58aed8 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipal_b8e2acff|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipal_b8e2acff $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipal_b8e2acff.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipal_b8e2acff
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipal_b8e2acff {
        return new RetrievePowerliftAppDiagnosticsDetailsWithUserPrincipal_b8e2acff($count, $filter, $search, $skip, $top);
    }

}
