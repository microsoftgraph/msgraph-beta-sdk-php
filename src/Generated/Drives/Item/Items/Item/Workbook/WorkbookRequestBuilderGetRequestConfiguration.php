<?php

namespace Microsoft\Graph\Beta\Generated\Drives\Item\Items\Item\Workbook;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WorkbookRequestBuilderGetRequestConfiguration 
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
     * @var WorkbookRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WorkbookRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new workbookRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WorkbookRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): WorkbookRequestBuilderGetQueryParameters {
        return new WorkbookRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new workbookRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WorkbookRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WorkbookRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
