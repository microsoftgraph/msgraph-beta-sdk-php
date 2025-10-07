<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\ManagedDevices\AppDiagnosticsWithUpn;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AppDiagnosticsWithUpnRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AppDiagnosticsWithUpnRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AppDiagnosticsWithUpnRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AppDiagnosticsWithUpnRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AppDiagnosticsWithUpnRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppDiagnosticsWithUpnRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AppDiagnosticsWithUpnRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return AppDiagnosticsWithUpnRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): AppDiagnosticsWithUpnRequestBuilderGetQueryParameters {
        return new AppDiagnosticsWithUpnRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
