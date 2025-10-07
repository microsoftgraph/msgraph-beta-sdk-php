<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\VirtualEndpoint\Snapshots\GetStorageAccountsWithSubscriptionId;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getStorageAccounts method.
*/
class GetStorageAccountsWithSubscriptionIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetStorageAccountsWithSubscriptionIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $subscriptionId Usage: subscriptionId='{subscriptionId}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $subscriptionId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/snapshots/getStorageAccounts(subscriptionId=\'{subscriptionId}\'){?%24count,%24filter,%24search,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['subscriptionId'] = $subscriptionId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List all storage accounts cloudPcForensicStorageAccount that can be used to store a snapshot or snapshots of a Cloud PC for forensic analysis.
     * @param GetStorageAccountsWithSubscriptionIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetStorageAccountsWithSubscriptionIdGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcsnapshot-getstorageaccounts?view=graph-rest-beta Find more info here
    */
    public function get(?GetStorageAccountsWithSubscriptionIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetStorageAccountsWithSubscriptionIdGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List all storage accounts cloudPcForensicStorageAccount that can be used to store a snapshot or snapshots of a Cloud PC for forensic analysis.
     * @param GetStorageAccountsWithSubscriptionIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetStorageAccountsWithSubscriptionIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetStorageAccountsWithSubscriptionIdRequestBuilder
    */
    public function withUrl(string $rawUrl): GetStorageAccountsWithSubscriptionIdRequestBuilder {
        return new GetStorageAccountsWithSubscriptionIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
