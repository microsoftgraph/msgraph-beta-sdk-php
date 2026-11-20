<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Data\Drivers\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DriverUpdateReportItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DriverUpdateReportItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DriverUpdateReportItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DriverUpdateReportItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DriverUpdateReportItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DriverUpdateReportItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DriverUpdateReportItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DriverUpdateReportItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DriverUpdateReportItemRequestBuilderGetQueryParameters {
        return new DriverUpdateReportItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
