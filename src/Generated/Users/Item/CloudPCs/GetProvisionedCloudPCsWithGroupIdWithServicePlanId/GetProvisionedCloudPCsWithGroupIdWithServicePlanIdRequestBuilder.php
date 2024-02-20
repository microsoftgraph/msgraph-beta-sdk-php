<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\CloudPCs\GetProvisionedCloudPCsWithGroupIdWithServicePlanId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getProvisionedCloudPCs method.
*/
class GetProvisionedCloudPCsWithGroupIdWithServicePlanIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetProvisionedCloudPCsWithGroupIdWithServicePlanIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $groupId Usage: groupId='{groupId}'
     * @param string|null $servicePlanId Usage: servicePlanId='{servicePlanId}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $groupId = null, ?string $servicePlanId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/cloudPCs/getProvisionedCloudPCs(groupId=\'{groupId}\',servicePlanId=\'{servicePlanId}\'){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['groupId'] = $groupId;
            $urlTplParams['servicePlanId'] = $servicePlanId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function getProvisionedCloudPCs
     * @param GetProvisionedCloudPCsWithGroupIdWithServicePlanIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetProvisionedCloudPCsWithGroupIdWithServicePlanIdGetResponse|null>
     * @throws Exception
    */
    public function get(?GetProvisionedCloudPCsWithGroupIdWithServicePlanIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetProvisionedCloudPCsWithGroupIdWithServicePlanIdGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function getProvisionedCloudPCs
     * @param GetProvisionedCloudPCsWithGroupIdWithServicePlanIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetProvisionedCloudPCsWithGroupIdWithServicePlanIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetProvisionedCloudPCsWithGroupIdWithServicePlanIdRequestBuilder
    */
    public function withUrl(string $rawUrl): GetProvisionedCloudPCsWithGroupIdWithServicePlanIdRequestBuilder {
        return new GetProvisionedCloudPCsWithGroupIdWithServicePlanIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
