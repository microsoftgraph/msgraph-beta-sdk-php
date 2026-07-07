<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\Operations\Item\MicrosoftGraphEdiscoveryCaseExportOperation;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: microsoftGraphEdiscoveryCaseExportOperationRequestBuilderGetRequestConfiguration
*/
class MicrosoftGraphEdiscoveryCaseExportOperationRequestBuild_8a51ad4d extends BaseRequestConfiguration 
{
    /**
     * @var MicrosoftGraphEdiscoveryCaseExportOperationRequestBuild_6a55fe82|null $queryParameters Request query parameters
    */
    public ?MicrosoftGraphEdiscoveryCaseExportOperationRequestBuild_6a55fe82 $queryParameters = null;
    
    /**
     * Instantiates a new MicrosoftGraphEdiscoveryCaseExportOperationRequestBuild_8a51ad4d and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MicrosoftGraphEdiscoveryCaseExportOperationRequestBuild_6a55fe82|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MicrosoftGraphEdiscoveryCaseExportOperationRequestBuild_6a55fe82 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MicrosoftGraphEdiscoveryCaseExportOperationRequestBuild_6a55fe82.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MicrosoftGraphEdiscoveryCaseExportOperationRequestBuild_6a55fe82
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MicrosoftGraphEdiscoveryCaseExportOperationRequestBuild_6a55fe82 {
        return new MicrosoftGraphEdiscoveryCaseExportOperationRequestBuild_6a55fe82($expand, $select);
    }

}
