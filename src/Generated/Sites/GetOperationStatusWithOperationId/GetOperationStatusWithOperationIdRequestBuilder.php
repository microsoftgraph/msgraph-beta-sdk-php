<?php

namespace Microsoft\\Graph\\Beta\\Generated\Sites\GetOperationStatusWithOperationId;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\RichLongRunningOperation;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getOperationStatus method.
*/
class GetOperationStatusWithOperationIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetOperationStatusWithOperationIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $operationId Usage: operationId='{operationId}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $operationId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites/getOperationStatus(operationId=\'{operationId}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['operationId'] = $operationId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the status of a SharePoint site creation operation to monitor its progress.
     * @param GetOperationStatusWithOperationIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RichLongRunningOperation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/site-getoperationstatus?view=graph-rest-beta Find more info here
    */
    public function get(?GetOperationStatusWithOperationIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RichLongRunningOperation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the status of a SharePoint site creation operation to monitor its progress.
     * @param GetOperationStatusWithOperationIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetOperationStatusWithOperationIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetOperationStatusWithOperationIdRequestBuilder
    */
    public function withUrl(string $rawUrl): GetOperationStatusWithOperationIdRequestBuilder {
        return new GetOperationStatusWithOperationIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
