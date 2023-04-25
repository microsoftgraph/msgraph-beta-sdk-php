<?php

namespace Microsoft\Graph\Beta\Generated\Me\Outlook\TaskGroups\Item\TaskFolders\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OutlookTaskFolderItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OutlookTaskFolderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OutlookTaskFolderItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OutlookTaskFolderItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OutlookTaskFolderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OutlookTaskFolderItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OutlookTaskFolderItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return OutlookTaskFolderItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): OutlookTaskFolderItemRequestBuilderGetQueryParameters {
        return new OutlookTaskFolderItemRequestBuilderGetQueryParameters($select);
    }

}
