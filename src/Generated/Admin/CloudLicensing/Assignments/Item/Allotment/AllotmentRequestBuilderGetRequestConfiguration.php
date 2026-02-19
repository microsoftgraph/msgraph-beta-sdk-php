<?php

namespace Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\Assignments\Item\Allotment;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AllotmentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AllotmentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AllotmentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AllotmentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AllotmentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AllotmentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AllotmentRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AllotmentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AllotmentRequestBuilderGetQueryParameters {
        return new AllotmentRequestBuilderGetQueryParameters($expand, $select);
    }

}
