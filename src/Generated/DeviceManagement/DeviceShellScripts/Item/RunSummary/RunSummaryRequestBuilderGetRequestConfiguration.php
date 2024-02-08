<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceShellScripts\Item\RunSummary;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RunSummaryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RunSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RunSummaryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RunSummaryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RunSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RunSummaryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RunSummaryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RunSummaryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RunSummaryRequestBuilderGetQueryParameters {
        return new RunSummaryRequestBuilderGetQueryParameters($expand, $select);
    }

}
