<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\ExternalOriginResourceConnectors\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ExternalOriginResourceConnector;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the externalOriginResourceConnectors property of the microsoft.graph.entitlementManagement entity.
*/
class ExternalOriginResourceConnectorItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ExternalOriginResourceConnectorItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/externalOriginResourceConnectors/{externalOriginResourceConnector%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an externalOriginResourceConnector object.
     * @param ExternalOriginResourceConnectorItemRequestBuilderDelete_e056e15e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/externaloriginresourceconnector-delete?view=graph-rest-beta Find more info here
    */
    public function delete(?ExternalOriginResourceConnectorItemRequestBuilderDelete_e056e15e $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Represents the connectors used to communicate with external resource systems.
     * @param ExternalOriginResourceConnectorItemRequestBuilderGetReq_e5c32d09|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalOriginResourceConnector|null>
     * @throws Exception
    */
    public function get(?ExternalOriginResourceConnectorItemRequestBuilderGetReq_e5c32d09 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalOriginResourceConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of an externalOriginResourceConnector object.
     * @param ExternalOriginResourceConnector $body The request body
     * @param ExternalOriginResourceConnectorItemRequestBuilderPatchR_06de5702|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalOriginResourceConnector|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/externaloriginresourceconnector-update?view=graph-rest-beta Find more info here
    */
    public function patch(ExternalOriginResourceConnector $body, ?ExternalOriginResourceConnectorItemRequestBuilderPatchR_06de5702 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalOriginResourceConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an externalOriginResourceConnector object.
     * @param ExternalOriginResourceConnectorItemRequestBuilderDelete_e056e15e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ExternalOriginResourceConnectorItemRequestBuilderDelete_e056e15e $requestConfiguration = null): RequestInformation {
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
     * Represents the connectors used to communicate with external resource systems.
     * @param ExternalOriginResourceConnectorItemRequestBuilderGetReq_e5c32d09|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExternalOriginResourceConnectorItemRequestBuilderGetReq_e5c32d09 $requestConfiguration = null): RequestInformation {
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
     * Update the properties of an externalOriginResourceConnector object.
     * @param ExternalOriginResourceConnector $body The request body
     * @param ExternalOriginResourceConnectorItemRequestBuilderPatchR_06de5702|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ExternalOriginResourceConnector $body, ?ExternalOriginResourceConnectorItemRequestBuilderPatchR_06de5702 $requestConfiguration = null): RequestInformation {
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
     * @return ExternalOriginResourceConnectorItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ExternalOriginResourceConnectorItemRequestBuilder {
        return new ExternalOriginResourceConnectorItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
