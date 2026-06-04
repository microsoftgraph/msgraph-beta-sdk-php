<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary\AdvancedThreatProtectionOnboardingDeviceSettingStates\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\AdvancedThreatProtectionOnboardingDeviceSettingState;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the advancedThreatProtectionOnboardingDeviceSettingStates property of the microsoft.graph.advancedThreatProtectionOnboardingStateSummary entity. Original name: AdvancedThreatProtectionOnboardingDeviceSettingStateItemRequestBuilder
*/
class AdvancedThreatProtectionOnboardingDeviceSettingStateIte_1d3f82f2 extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AdvancedThreatProtectionOnboardingDeviceSettingStateIte_1d3f82f2 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/advancedThreatProtectionOnboardingStateSummary/advancedThreatProtectionOnboardingDeviceSettingStates/{advancedThreatProtectionOnboardingDeviceSettingState%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property advancedThreatProtectionOnboardingDeviceSettingStates for deviceManagement
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStateIte_1119ebbd|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AdvancedThreatProtectionOnboardingDeviceSettingStateIte_1119ebbd $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get advancedThreatProtectionOnboardingDeviceSettingStates from deviceManagement
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStateIte_b888e00d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdvancedThreatProtectionOnboardingDeviceSettingState|null>
     * @throws Exception
    */
    public function get(?AdvancedThreatProtectionOnboardingDeviceSettingStateIte_b888e00d $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdvancedThreatProtectionOnboardingDeviceSettingState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property advancedThreatProtectionOnboardingDeviceSettingStates in deviceManagement
     * @param AdvancedThreatProtectionOnboardingDeviceSettingState $body The request body
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStateIte_0c50c094|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdvancedThreatProtectionOnboardingDeviceSettingState|null>
     * @throws Exception
    */
    public function patch(AdvancedThreatProtectionOnboardingDeviceSettingState $body, ?AdvancedThreatProtectionOnboardingDeviceSettingStateIte_0c50c094 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdvancedThreatProtectionOnboardingDeviceSettingState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property advancedThreatProtectionOnboardingDeviceSettingStates for deviceManagement
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStateIte_1119ebbd|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AdvancedThreatProtectionOnboardingDeviceSettingStateIte_1119ebbd $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Get advancedThreatProtectionOnboardingDeviceSettingStates from deviceManagement
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStateIte_b888e00d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AdvancedThreatProtectionOnboardingDeviceSettingStateIte_b888e00d $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/advancedThreatProtectionOnboardingStateSummary/advancedThreatProtectionOnboardingDeviceSettingStates/{advancedThreatProtectionOnboardingDeviceSettingState%2Did}{?%24expand,%24select}';
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
     * Update the navigation property advancedThreatProtectionOnboardingDeviceSettingStates in deviceManagement
     * @param AdvancedThreatProtectionOnboardingDeviceSettingState $body The request body
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStateIte_0c50c094|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AdvancedThreatProtectionOnboardingDeviceSettingState $body, ?AdvancedThreatProtectionOnboardingDeviceSettingStateIte_0c50c094 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return AdvancedThreatProtectionOnboardingDeviceSettingStateIte_1d3f82f2
    */
    public function withUrl(string $rawUrl): AdvancedThreatProtectionOnboardingDeviceSettingStateIte_1d3f82f2 {
        return new AdvancedThreatProtectionOnboardingDeviceSettingStateIte_1d3f82f2($rawUrl, $this->requestAdapter);
    }

}
