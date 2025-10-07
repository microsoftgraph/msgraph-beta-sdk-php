<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\SchedulePolicyApplyTask;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the schedulePolicyApplyTask method.
*/
class SchedulePolicyApplyTaskRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SchedulePolicyApplyTaskRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/provisioningPolicies/{cloudPcProvisioningPolicy%2Did}/schedulePolicyApplyTask');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Set a scheduled auto-reprovision task to do automatic regular apply. Frontline shared only. Administrators only.
     * @param SchedulePolicyApplyTaskPostRequestBody $body The request body
     * @param SchedulePolicyApplyTaskRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcprovisioningpolicy-schedulepolicyapplytask?view=graph-rest-beta Find more info here
    */
    public function post(SchedulePolicyApplyTaskPostRequestBody $body, ?SchedulePolicyApplyTaskRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Set a scheduled auto-reprovision task to do automatic regular apply. Frontline shared only. Administrators only.
     * @param SchedulePolicyApplyTaskPostRequestBody $body The request body
     * @param SchedulePolicyApplyTaskRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SchedulePolicyApplyTaskPostRequestBody $body, ?SchedulePolicyApplyTaskRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SchedulePolicyApplyTaskRequestBuilder
    */
    public function withUrl(string $rawUrl): SchedulePolicyApplyTaskRequestBuilder {
        return new SchedulePolicyApplyTaskRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
