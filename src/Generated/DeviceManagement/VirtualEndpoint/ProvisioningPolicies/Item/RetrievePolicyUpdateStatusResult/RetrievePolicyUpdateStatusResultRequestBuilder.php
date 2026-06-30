<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\RetrievePolicyUpdateStatusResult;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CloudPcPolicyPendingApplyStatusResult;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrievePolicyUpdateStatusResult method.
*/
class RetrievePolicyUpdateStatusResultRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrievePolicyUpdateStatusResultRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/provisioningPolicies/{cloudPcProvisioningPolicy%2Did}/retrievePolicyUpdateStatusResult()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the pending apply status of a provisioning policy to determine whether unapplied changes exist for Cloud PCs.
     * @param RetrievePolicyUpdateStatusResultRequestBuilderGetReques_8705838e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcPolicyPendingApplyStatusResult|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcprovisioningpolicy-retrievepolicyupdatestatusresult?view=graph-rest-beta Find more info here
    */
    public function get(?RetrievePolicyUpdateStatusResultRequestBuilderGetReques_8705838e $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcPolicyPendingApplyStatusResult::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the pending apply status of a provisioning policy to determine whether unapplied changes exist for Cloud PCs.
     * @param RetrievePolicyUpdateStatusResultRequestBuilderGetReques_8705838e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetrievePolicyUpdateStatusResultRequestBuilderGetReques_8705838e $requestConfiguration = null): RequestInformation {
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
     * @return RetrievePolicyUpdateStatusResultRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrievePolicyUpdateStatusResultRequestBuilder {
        return new RetrievePolicyUpdateStatusResultRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
