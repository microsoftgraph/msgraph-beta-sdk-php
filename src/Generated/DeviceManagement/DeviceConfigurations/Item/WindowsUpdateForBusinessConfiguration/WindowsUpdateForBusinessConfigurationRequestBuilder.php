<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurations\Item\WindowsUpdateForBusinessConfiguration;

use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurations\Item\WindowsUpdateForBusinessConfiguration\ExtendFeatureUpdatesPause\ExtendFeatureUpdatesPauseRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceConfigurations\Item\WindowsUpdateForBusinessConfiguration\ExtendQualityUpdatesPause\ExtendQualityUpdatesPauseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

class WindowsUpdateForBusinessConfigurationRequestBuilder 
{
    /**
     * The extendFeatureUpdatesPause property
    */
    public function extendFeatureUpdatesPause(): ExtendFeatureUpdatesPauseRequestBuilder {
        return new ExtendFeatureUpdatesPauseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The extendQualityUpdatesPause property
    */
    public function extendQualityUpdatesPause(): ExtendQualityUpdatesPauseRequestBuilder {
        return new ExtendQualityUpdatesPauseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new WindowsUpdateForBusinessConfigurationRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/deviceManagement/deviceConfigurations/{deviceConfiguration_id}/microsoft.graph.windowsUpdateForBusinessConfiguration';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

}
