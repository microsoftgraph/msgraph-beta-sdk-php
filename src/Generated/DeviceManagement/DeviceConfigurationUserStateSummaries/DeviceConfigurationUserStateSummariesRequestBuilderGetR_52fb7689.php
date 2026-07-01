<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurationUserStateSummaries;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: deviceConfigurationUserStateSummariesRequestBuilderGetRequestConfiguration
*/
class DeviceConfigurationUserStateSummariesRequestBuilderGetR_52fb7689 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceConfigurationUserStateSummariesRequestBuilderGetQ_bea9203e|null $queryParameters Request query parameters
    */
    public ?DeviceConfigurationUserStateSummariesRequestBuilderGetQ_bea9203e $queryParameters = null;
    
    /**
     * Instantiates a new DeviceConfigurationUserStateSummariesRequestBuilderGetR_52fb7689 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceConfigurationUserStateSummariesRequestBuilderGetQ_bea9203e|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceConfigurationUserStateSummariesRequestBuilderGetQ_bea9203e $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceConfigurationUserStateSummariesRequestBuilderGetQ_bea9203e.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceConfigurationUserStateSummariesRequestBuilderGetQ_bea9203e
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceConfigurationUserStateSummariesRequestBuilderGetQ_bea9203e {
        return new DeviceConfigurationUserStateSummariesRequestBuilderGetQ_bea9203e($expand, $select);
    }

}
