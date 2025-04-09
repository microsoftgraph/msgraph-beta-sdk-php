<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ZebraFotaConnector;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ZebraFotaConnector\ApproveFotaApps\ApproveFotaAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ZebraFotaConnector\Connect\ConnectRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ZebraFotaConnector\Disconnect\DisconnectRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ZebraFotaConnector\HasActiveDeployments\HasActiveDeploymentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ZebraFotaConnector;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the zebraFotaConnector property of the microsoft.graph.deviceManagement entity.
*/
class ZebraFotaConnectorRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the approveFotaApps method.
    */
    public function approveFotaApps(): ApproveFotaAppsRequestBuilder {
        return new ApproveFotaAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the connect method.
    */
    public function connect(): ConnectRequestBuilder {
        return new ConnectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the disconnect method.
    */
    public function disconnect(): DisconnectRequestBuilder {
        return new DisconnectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the hasActiveDeployments method.
    */
    public function hasActiveDeployments(): HasActiveDeploymentsRequestBuilder {
        return new HasActiveDeploymentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ZebraFotaConnectorRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/zebraFotaConnector{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property zebraFotaConnector for deviceManagement
     * @param ZebraFotaConnectorRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ZebraFotaConnectorRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The singleton ZebraFotaConnector associated with account.
     * @param ZebraFotaConnectorRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ZebraFotaConnector|null>
     * @throws Exception
    */
    public function get(?ZebraFotaConnectorRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ZebraFotaConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property zebraFotaConnector in deviceManagement
     * @param ZebraFotaConnector $body The request body
     * @param ZebraFotaConnectorRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ZebraFotaConnector|null>
     * @throws Exception
    */
    public function patch(ZebraFotaConnector $body, ?ZebraFotaConnectorRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ZebraFotaConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property zebraFotaConnector for deviceManagement
     * @param ZebraFotaConnectorRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ZebraFotaConnectorRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * The singleton ZebraFotaConnector associated with account.
     * @param ZebraFotaConnectorRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ZebraFotaConnectorRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property zebraFotaConnector in deviceManagement
     * @param ZebraFotaConnector $body The request body
     * @param ZebraFotaConnectorRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ZebraFotaConnector $body, ?ZebraFotaConnectorRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ZebraFotaConnectorRequestBuilder
    */
    public function withUrl(string $rawUrl): ZebraFotaConnectorRequestBuilder {
        return new ZebraFotaConnectorRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
