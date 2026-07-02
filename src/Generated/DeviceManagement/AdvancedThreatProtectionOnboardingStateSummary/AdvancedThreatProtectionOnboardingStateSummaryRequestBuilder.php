<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\AdvancedThreatProtectionOnboardingStateSummary\AdvancedThreatProtectionOnboardingDeviceSettingStates\AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_23f016bc;
use Microsoft\Graph\Beta\Generated\Models\AdvancedThreatProtectionOnboardingStateSummary;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the advancedThreatProtectionOnboardingStateSummary property of the microsoft.graph.deviceManagement entity.
*/
class AdvancedThreatProtectionOnboardingStateSummaryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the advancedThreatProtectionOnboardingDeviceSettingStates property of the microsoft.graph.advancedThreatProtectionOnboardingStateSummary entity.
    */
    public function advancedThreatProtectionOnboardingDeviceSettingStates(): AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_23f016bc {
        return new AdvancedThreatProtectionOnboardingDeviceSettingStatesRe_23f016bc($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AdvancedThreatProtectionOnboardingStateSummaryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/advancedThreatProtectionOnboardingStateSummary{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property advancedThreatProtectionOnboardingStateSummary for deviceManagement
     * @param AdvancedThreatProtectionOnboardingStateSummaryRequestBu_04488c20|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AdvancedThreatProtectionOnboardingStateSummaryRequestBu_04488c20 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The summary state of ATP onboarding state for this account.
     * @param AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b3e75c7e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdvancedThreatProtectionOnboardingStateSummary|null>
     * @throws Exception
    */
    public function get(?AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b3e75c7e $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdvancedThreatProtectionOnboardingStateSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property advancedThreatProtectionOnboardingStateSummary in deviceManagement
     * @param AdvancedThreatProtectionOnboardingStateSummary $body The request body
     * @param AdvancedThreatProtectionOnboardingStateSummaryRequestBu_afd8b25d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdvancedThreatProtectionOnboardingStateSummary|null>
     * @throws Exception
    */
    public function patch(AdvancedThreatProtectionOnboardingStateSummary $body, ?AdvancedThreatProtectionOnboardingStateSummaryRequestBu_afd8b25d $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdvancedThreatProtectionOnboardingStateSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property advancedThreatProtectionOnboardingStateSummary for deviceManagement
     * @param AdvancedThreatProtectionOnboardingStateSummaryRequestBu_04488c20|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AdvancedThreatProtectionOnboardingStateSummaryRequestBu_04488c20 $requestConfiguration = null): RequestInformation {
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
     * The summary state of ATP onboarding state for this account.
     * @param AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b3e75c7e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AdvancedThreatProtectionOnboardingStateSummaryRequestBu_b3e75c7e $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property advancedThreatProtectionOnboardingStateSummary in deviceManagement
     * @param AdvancedThreatProtectionOnboardingStateSummary $body The request body
     * @param AdvancedThreatProtectionOnboardingStateSummaryRequestBu_afd8b25d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AdvancedThreatProtectionOnboardingStateSummary $body, ?AdvancedThreatProtectionOnboardingStateSummaryRequestBu_afd8b25d $requestConfiguration = null): RequestInformation {
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
     * @return AdvancedThreatProtectionOnboardingStateSummaryRequestBuilder
    */
    public function withUrl(string $rawUrl): AdvancedThreatProtectionOnboardingStateSummaryRequestBuilder {
        return new AdvancedThreatProtectionOnboardingStateSummaryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
