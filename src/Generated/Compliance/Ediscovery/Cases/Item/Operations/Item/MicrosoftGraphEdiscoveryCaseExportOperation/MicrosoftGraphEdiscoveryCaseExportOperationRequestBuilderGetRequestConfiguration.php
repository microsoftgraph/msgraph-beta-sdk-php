<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Operations\Item\MicrosoftGraphEdiscoveryCaseExportOperation;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilderGetRequestConfiguration 
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
     * @var MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new microsoftGraphEdiscoveryCaseExportOperationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilderGetQueryParameters {
        return new MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new microsoftGraphEdiscoveryCaseExportOperationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphEdiscoveryCaseExportOperationRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
