<?php

namespace Microsoft\Graph\Beta\Generated\Admin\CloudLicensing\AssignmentErrors\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AssignmentErrorItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AssignmentErrorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AssignmentErrorItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AssignmentErrorItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AssignmentErrorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AssignmentErrorItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AssignmentErrorItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AssignmentErrorItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AssignmentErrorItemRequestBuilderGetQueryParameters {
        return new AssignmentErrorItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
