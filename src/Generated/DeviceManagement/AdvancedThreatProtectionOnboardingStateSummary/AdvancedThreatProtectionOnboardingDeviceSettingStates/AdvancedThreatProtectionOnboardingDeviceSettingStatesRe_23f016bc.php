<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary\AdvancedThreatProtectionOnboardingDeviceSettingStates;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary\AdvancedThreatProtectionOnboardingDeviceSettingStates\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary\AdvancedThreatProtectionOnboardingDeviceSettingStates\Item\AdvancedThreatProtectionOnboardingDeviceSettingStateIte_1d3f82f2;
use Microsoft\Graph\Beta\Generated\Models\AdvancedThreatProtectionOnboardingDeviceSettingState;
use Microsoft\Graph\Beta\Generated\Models\AdvancedThreatProtectionOnboardingDeviceSettingStateCol_d103b63c;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the advancedThreatProtectionOnboardingDeviceSettingStates property of the microsoft.graph.advancedThreatProtectionOnboardingStateSummary entity. Original name: AdvancedThreatProtectionOnboardingDeviceSettingStatesRequestBuilder
*/
class AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_23f016bc extends BaseRequestBuilder 
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
     * @return AdvancedThreatProtectionOnboardingDeviceSettingStateIte_1d3f82f2
    */
    public function byAdvancedThreatProtectionOnboardingDeviceSettingStateId(string $advancedThreatProtectionOnboardingDeviceSettingStateId): AdvancedThreatProtectionOnboardingDeviceSettingStateIte_1d3f82f2 {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['advancedThreatProtectionOnboardingDeviceSettingState%2Did'] = $advancedThreatProtectionOnboardingDeviceSettingStateId;
        return new AdvancedThreatProtectionOnboardingDeviceSettingStateIte_1d3f82f2($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_23f016bc and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get advancedThreatProtectionOnboardingDeviceSettingStates from deviceManagement
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_108f7f7b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdvancedThreatProtectionOnboardingDeviceSettingStateCol_d103b63c|null>
     * @throws Exception
    */
    public function get(?AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_108f7f7b $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdvancedThreatProtectionOnboardingDeviceSettingStateCol_d103b63c::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to advancedThreatProtectionOnboardingDeviceSettingStates for deviceManagement
     * @param AdvancedThreatProtectionOnboardingDeviceSettingState $body The request body
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_929e8e0f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdvancedThreatProtectionOnboardingDeviceSettingState|null>
     * @throws Exception
    */
    public function post(AdvancedThreatProtectionOnboardingDeviceSettingState $body, ?AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_929e8e0f $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdvancedThreatProtectionOnboardingDeviceSettingState::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get advancedThreatProtectionOnboardingDeviceSettingStates from deviceManagement
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_108f7f7b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_108f7f7b $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/advancedThreatProtectionOnboardingStateSummary/advancedThreatProtectionOnboardingDeviceSettingStates{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}';
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
     * @param AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_929e8e0f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AdvancedThreatProtectionOnboardingDeviceSettingState $body, ?AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_929e8e0f $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/advancedThreatProtectionOnboardingStateSummary/advancedThreatProtectionOnboardingDeviceSettingStates';
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
     * @return AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_23f016bc
    */
    public function withUrl(string $rawUrl): AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_23f016bc {
        return new AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_23f016bc($rawUrl, $this->requestAdapter);
    }

}
