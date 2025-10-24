<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary\AdvancedThreatProtectionOnboardingDeviceSettingStates;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary\AdvancedThreatProtectionOnboardingDeviceSettingStates\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary\AdvancedThreatProtectionOnboardingDeviceSettingStates\Item\AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\AdvancedThreatProtectionOnboardingDeviceSettingState;
use Microsoft\\Graph\\Beta\\Generated\Models\AdvancedThreatProtectionOnboardingDeviceSettingStateCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the advancedThreatProtectionOnboardingDeviceSettingStates property of the microsoft.graph.advancedThreatProtectionOnboardingStateSummary entity.
*/
class AdvancedThreatProtectionOnboardingDeviceSettingStatesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the advancedThreatProtectionOnboardingDeviceSettingStates property of the microsoft.graph.advancedThreatProtectionOnboardingStateSummary entity.
     * @param string $advancedThreatProtectionOnboardingDeviceSettingStateId The unique identifier of advancedThreatProtectionOnboardingDeviceSettingState
     * @return AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilder
    */
    public function byAdvancedThreatProtectionOnboardingDeviceSettingStateId(string $advancedThreatProtectionOnboardingDeviceSettingStateId): AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['advancedThreatProtectionOnboardingDeviceSettingState%2Did'] = $advancedThreatProtectionOnboardingDeviceSettingStateId;
        return new AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AdvancedThreatProtectionOnboardingDeviceSettingStatesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/advancedThreatProtectionOnboardingStateSummary/advancedThreatProtectionOnboardingDeviceSettingStates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get advancedThreatProtectionOnboardingDeviceSettingStates from deviceManagement
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdvancedThreatProtectionOnboardingDeviceSettingStateCollectionResponse|null>
     * @throws Exception
    */
    public function get(?AdvancedThreatProtectionOnboardingDeviceSettingStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdvancedThreatProtectionOnboardingDeviceSettingStateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to advancedThreatProtectionOnboardingDeviceSettingStates for deviceManagement
     * @param AdvancedThreatProtectionOnboardingDeviceSettingState $body The request body
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdvancedThreatProtectionOnboardingDeviceSettingState|null>
     * @throws Exception
    */
    public function post(AdvancedThreatProtectionOnboardingDeviceSettingState $body, ?AdvancedThreatProtectionOnboardingDeviceSettingStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdvancedThreatProtectionOnboardingDeviceSettingState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get advancedThreatProtectionOnboardingDeviceSettingStates from deviceManagement
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStatesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AdvancedThreatProtectionOnboardingDeviceSettingStatesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to advancedThreatProtectionOnboardingDeviceSettingStates for deviceManagement
     * @param AdvancedThreatProtectionOnboardingDeviceSettingState $body The request body
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStatesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AdvancedThreatProtectionOnboardingDeviceSettingState $body, ?AdvancedThreatProtectionOnboardingDeviceSettingStatesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AdvancedThreatProtectionOnboardingDeviceSettingStatesRequestBuilder
    */
    public function withUrl(string $rawUrl): AdvancedThreatProtectionOnboardingDeviceSettingStatesRequestBuilder {
        return new AdvancedThreatProtectionOnboardingDeviceSettingStatesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
