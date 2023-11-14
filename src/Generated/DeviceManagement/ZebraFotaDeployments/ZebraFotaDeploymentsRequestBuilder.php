<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ZebraFotaDeployments;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ZebraFotaDeployments\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceManagement\ZebraFotaDeployments\Item\ZebraFotaDeploymentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ZebraFotaDeployment;
use Microsoft\Graph\Beta\Generated\Models\ZebraFotaDeploymentCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the zebraFotaDeployments property of the microsoft.graph.deviceManagement entity.
*/
class ZebraFotaDeploymentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the zebraFotaDeployments property of the microsoft.graph.deviceManagement entity.
     * @param string $zebraFotaDeploymentId The unique identifier of zebraFotaDeployment
     * @return ZebraFotaDeploymentItemRequestBuilder
    */
    public function byZebraFotaDeploymentId(string $zebraFotaDeploymentId): ZebraFotaDeploymentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['zebraFotaDeployment%2Did'] = $zebraFotaDeploymentId;
        return new ZebraFotaDeploymentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ZebraFotaDeploymentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/zebraFotaDeployments{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Collection of ZebraFotaDeployments associated with account.
     * @param ZebraFotaDeploymentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ZebraFotaDeploymentCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ZebraFotaDeploymentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ZebraFotaDeploymentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to zebraFotaDeployments for deviceManagement
     * @param ZebraFotaDeployment $body The request body
     * @param ZebraFotaDeploymentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ZebraFotaDeployment|null>
     * @throws Exception
    */
    public function post(ZebraFotaDeployment $body, ?ZebraFotaDeploymentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ZebraFotaDeployment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Collection of ZebraFotaDeployments associated with account.
     * @param ZebraFotaDeploymentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ZebraFotaDeploymentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to zebraFotaDeployments for deviceManagement
     * @param ZebraFotaDeployment $body The request body
     * @param ZebraFotaDeploymentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ZebraFotaDeployment $body, ?ZebraFotaDeploymentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ZebraFotaDeploymentsRequestBuilder
    */
    public function withUrl(string $rawUrl): ZebraFotaDeploymentsRequestBuilder {
        return new ZebraFotaDeploymentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
