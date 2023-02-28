<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\ManagedDevices\AppDiagnosticsWithUpn;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AppDiagnosticsWithUpnRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var AppDiagnosticsWithUpnRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AppDiagnosticsWithUpnRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new appDiagnosticsWithUpnRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return AppDiagnosticsWithUpnRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): AppDiagnosticsWithUpnRequestBuilderGetQueryParameters {
        return new AppDiagnosticsWithUpnRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

    /**
     * Instantiates a new appDiagnosticsWithUpnRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AppDiagnosticsWithUpnRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppDiagnosticsWithUpnRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
