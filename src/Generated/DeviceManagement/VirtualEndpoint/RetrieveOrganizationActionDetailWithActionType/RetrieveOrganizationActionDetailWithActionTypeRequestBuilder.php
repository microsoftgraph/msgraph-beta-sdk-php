<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\RetrieveOrganizationActionDetailWithActionType;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CloudPcOrganizationActionDetail;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrieveOrganizationActionDetail method.
*/
class RetrieveOrganizationActionDetailWithActionTypeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveOrganizationActionDetailWithActionTypeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $actionType Usage: actionType='{actionType}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $actionType = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/retrieveOrganizationActionDetail(actionType=\'{actionType}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['actionType'] = $actionType;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function retrieveOrganizationActionDetail
     * @param RetrieveOrganizationActionDetailWithActionTypeRequestBu_fa028bd1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcOrganizationActionDetail|null>
     * @throws Exception
    */
    public function get(?RetrieveOrganizationActionDetailWithActionTypeRequestBu_fa028bd1 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcOrganizationActionDetail::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function retrieveOrganizationActionDetail
     * @param RetrieveOrganizationActionDetailWithActionTypeRequestBu_fa028bd1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetrieveOrganizationActionDetailWithActionTypeRequestBu_fa028bd1 $requestConfiguration = null): RequestInformation {
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
     * @return RetrieveOrganizationActionDetailWithActionTypeRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveOrganizationActionDetailWithActionTypeRequestBuilder {
        return new RetrieveOrganizationActionDetailWithActionTypeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
