<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\HardwareConfigurations;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\HardwareConfigurations\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\HardwareConfigurations\Item\HardwareConfigurationItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\HardwareConfiguration;
use Microsoft\\Graph\\Beta\\Generated\Models\HardwareConfigurationCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the hardwareConfigurations property of the microsoft.graph.deviceManagement entity.
*/
class HardwareConfigurationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the hardwareConfigurations property of the microsoft.graph.deviceManagement entity.
     * @param string $hardwareConfigurationId The unique identifier of hardwareConfiguration
     * @return HardwareConfigurationItemRequestBuilder
    */
    public function byHardwareConfigurationId(string $hardwareConfigurationId): HardwareConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['hardwareConfiguration%2Did'] = $hardwareConfigurationId;
        return new HardwareConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new HardwareConfigurationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/hardwareConfigurations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * BIOS configuration and other settings provides customers the ability to configure hardware/bios settings on the enrolled Windows 10/11 Entra ID joined devices by uploading a configuration file generated with their OEM tool (e.g. Dell Command tool). A BIOS configuration policy can be assigned to multiple devices, allowing admins to remotely control a device's hardware properties (e.g. enable Secure Boot) from the Intune Portal. Supported for Dell only at this time.
     * @param HardwareConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HardwareConfigurationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?HardwareConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HardwareConfigurationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to hardwareConfigurations for deviceManagement
     * @param HardwareConfiguration $body The request body
     * @param HardwareConfigurationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HardwareConfiguration|null>
     * @throws Exception
    */
    public function post(HardwareConfiguration $body, ?HardwareConfigurationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HardwareConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * BIOS configuration and other settings provides customers the ability to configure hardware/bios settings on the enrolled Windows 10/11 Entra ID joined devices by uploading a configuration file generated with their OEM tool (e.g. Dell Command tool). A BIOS configuration policy can be assigned to multiple devices, allowing admins to remotely control a device's hardware properties (e.g. enable Secure Boot) from the Intune Portal. Supported for Dell only at this time.
     * @param HardwareConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?HardwareConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Create new navigation property to hardwareConfigurations for deviceManagement
     * @param HardwareConfiguration $body The request body
     * @param HardwareConfigurationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(HardwareConfiguration $body, ?HardwareConfigurationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return HardwareConfigurationsRequestBuilder
    */
    public function withUrl(string $rawUrl): HardwareConfigurationsRequestBuilder {
        return new HardwareConfigurationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
