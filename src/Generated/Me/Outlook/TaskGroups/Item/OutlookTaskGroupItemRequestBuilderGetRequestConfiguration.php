<?php

namespace Microsoft\Graph\Beta\Generated\Me\Outlook\TaskGroups\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OutlookTaskGroupItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OutlookTaskGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OutlookTaskGroupItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OutlookTaskGroupItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OutlookTaskGroupItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OutlookTaskGroupItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OutlookTaskGroupItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return OutlookTaskGroupItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): OutlookTaskGroupItemRequestBuilderGetQueryParameters {
        return new OutlookTaskGroupItemRequestBuilderGetQueryParameters($select);
    }

}
