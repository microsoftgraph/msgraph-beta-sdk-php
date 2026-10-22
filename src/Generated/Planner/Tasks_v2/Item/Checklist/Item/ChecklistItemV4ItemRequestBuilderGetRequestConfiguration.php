<?php

namespace Microsoft\Graph\Beta\Generated\Planner\Tasks_v2\Item\Checklist\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ChecklistItemV4ItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ChecklistItemV4ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ChecklistItemV4ItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ChecklistItemV4ItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ChecklistItemV4ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ChecklistItemV4ItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ChecklistItemV4ItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ChecklistItemV4ItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ChecklistItemV4ItemRequestBuilderGetQueryParameters {
        return new ChecklistItemV4ItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
