<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelServerLogCollectionResponses\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelServerLogCollectionResponses\Item\CreateDownloadUrl\CreateDownloadUrlRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelServerLogCollectionResponses\Item\GenerateDownloadUrl\GenerateDownloadUrlRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\MicrosoftTunnelServerLogCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the microsoftTunnelServerLogCollectionResponses property of the microsoft.graph.deviceManagement entity.
*/
class MicrosoftTunnelServerLogCollectionResponseItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the createDownloadUrl method.
    */
    public function createDownloadUrl(): CreateDownloadUrlRequestBuilder {
        return new CreateDownloadUrlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the generateDownloadUrl method.
    */
    public function generateDownloadUrl(): GenerateDownloadUrlRequestBuilder {
        return new GenerateDownloadUrlRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MicrosoftTunnelServerLogCollectionResponseItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/microsoftTunnelServerLogCollectionResponses/{microsoftTunnelServerLogCollectionResponse%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property microsoftTunnelServerLogCollectionResponses for deviceManagement
     * @param MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Collection of MicrosoftTunnelServerLogCollectionResponse settings associated with account.
     * @param MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftTunnelServerLogCollectionResponse|null>
     * @throws Exception
    */
    public function get(?MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftTunnelServerLogCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property microsoftTunnelServerLogCollectionResponses in deviceManagement
     * @param MicrosoftTunnelServerLogCollectionResponse $body The request body
     * @param MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MicrosoftTunnelServerLogCollectionResponse|null>
     * @throws Exception
    */
    public function patch(MicrosoftTunnelServerLogCollectionResponse $body, ?MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MicrosoftTunnelServerLogCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property microsoftTunnelServerLogCollectionResponses for deviceManagement
     * @param MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Collection of MicrosoftTunnelServerLogCollectionResponse settings associated with account.
     * @param MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property microsoftTunnelServerLogCollectionResponses in deviceManagement
     * @param MicrosoftTunnelServerLogCollectionResponse $body The request body
     * @param MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MicrosoftTunnelServerLogCollectionResponse $body, ?MicrosoftTunnelServerLogCollectionResponseItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftTunnelServerLogCollectionResponseItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftTunnelServerLogCollectionResponseItemRequestBuilder {
        return new MicrosoftTunnelServerLogCollectionResponseItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
