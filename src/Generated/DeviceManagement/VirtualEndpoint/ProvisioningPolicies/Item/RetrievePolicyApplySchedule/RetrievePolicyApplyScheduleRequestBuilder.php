<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\RetrievePolicyApplySchedule;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CloudPcPolicyScheduledApplyActionDetail;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrievePolicyApplySchedule method.
*/
class RetrievePolicyApplyScheduleRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrievePolicyApplyScheduleRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/provisioningPolicies/{cloudPcProvisioningPolicy%2Did}/retrievePolicyApplySchedule()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the scheduled apply rule set on the policy. Frontline shared only. Administrators only.
     * @param RetrievePolicyApplyScheduleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcPolicyScheduledApplyActionDetail|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcprovisioningpolicy-retrievepolicyapplyschedule?view=graph-rest-beta Find more info here
    */
    public function get(?RetrievePolicyApplyScheduleRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcPolicyScheduledApplyActionDetail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the scheduled apply rule set on the policy. Frontline shared only. Administrators only.
     * @param RetrievePolicyApplyScheduleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetrievePolicyApplyScheduleRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return RetrievePolicyApplyScheduleRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrievePolicyApplyScheduleRequestBuilder {
        return new RetrievePolicyApplyScheduleRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
