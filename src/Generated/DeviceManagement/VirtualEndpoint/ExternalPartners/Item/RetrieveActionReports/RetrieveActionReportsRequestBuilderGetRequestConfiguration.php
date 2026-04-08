<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartners\Item\RetrieveActionReports;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RetrieveActionReportsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RetrieveActionReportsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RetrieveActionReportsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RetrieveActionReportsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RetrieveActionReportsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetrieveActionReportsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RetrieveActionReportsRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return RetrieveActionReportsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?string $search = null, ?int $skip = null, ?int $top = null): RetrieveActionReportsRequestBuilderGetQueryParameters {
        return new RetrieveActionReportsRequestBuilderGetQueryParameters($count, $filter, $search, $skip, $top);
    }

}
