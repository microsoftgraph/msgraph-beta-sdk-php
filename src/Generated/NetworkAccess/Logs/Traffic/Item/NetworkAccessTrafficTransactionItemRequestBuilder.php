<?php

namespace Microsoft\Graph\Beta\Generated\NetworkAccess\Logs\Traffic\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\Networkaccess\NetworkAccessTraffic;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Logs\Traffic\Item\Device\DeviceRequestBuilder;
use Microsoft\Graph\Beta\Generated\NetworkAccess\Logs\Traffic\Item\User\UserRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the traffic property of the microsoft.graph.networkaccess.logs entity.
*/
class NetworkAccessTrafficTransactionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the device property of the microsoft.graph.networkaccess.networkAccessTraffic entity.
    */
    public function device(): DeviceRequestBuilder {
        return new DeviceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the user property of the microsoft.graph.networkaccess.networkAccessTraffic entity.
    */
    public function user(): UserRequestBuilder {
        return new UserRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new NetworkAccessTrafficTransactionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/networkAccess/logs/traffic/{networkAccessTraffic%2DtransactionId}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property traffic for networkAccess
     * @param NetworkAccessTrafficTransactionItemRequestBuilderDelete_11f7cd17|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?NetworkAccessTrafficTransactionItemRequestBuilderDelete_11f7cd17 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * A network access traffic log entry that contains comprehensive information about network traffic events.
     * @param NetworkAccessTrafficTransactionItemRequestBuilderGetReq_6cad4687|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<NetworkAccessTraffic|null>
     * @throws Exception
    */
    public function get(?NetworkAccessTrafficTransactionItemRequestBuilderGetReq_6cad4687 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [NetworkAccessTraffic::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property traffic in networkAccess
     * @param NetworkAccessTraffic $body The request body
     * @param NetworkAccessTrafficTransactionItemRequestBuilderPatchR_2775e031|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<NetworkAccessTraffic|null>
     * @throws Exception
    */
    public function patch(NetworkAccessTraffic $body, ?NetworkAccessTrafficTransactionItemRequestBuilderPatchR_2775e031 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [NetworkAccessTraffic::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property traffic for networkAccess
     * @param NetworkAccessTrafficTransactionItemRequestBuilderDelete_11f7cd17|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?NetworkAccessTrafficTransactionItemRequestBuilderDelete_11f7cd17 $requestConfiguration = null): RequestInformation {
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
     * A network access traffic log entry that contains comprehensive information about network traffic events.
     * @param NetworkAccessTrafficTransactionItemRequestBuilderGetReq_6cad4687|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?NetworkAccessTrafficTransactionItemRequestBuilderGetReq_6cad4687 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property traffic in networkAccess
     * @param NetworkAccessTraffic $body The request body
     * @param NetworkAccessTrafficTransactionItemRequestBuilderPatchR_2775e031|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(NetworkAccessTraffic $body, ?NetworkAccessTrafficTransactionItemRequestBuilderPatchR_2775e031 $requestConfiguration = null): RequestInformation {
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
     * @return NetworkAccessTrafficTransactionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): NetworkAccessTrafficTransactionItemRequestBuilder {
        return new NetworkAccessTrafficTransactionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
