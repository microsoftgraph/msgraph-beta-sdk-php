<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\PermissionsAnalytics\Gcp\PermissionsCreepIndexDistributions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\PermissionsAnalytics\Gcp\PermissionsCreepIndexDistributions\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\PermissionsAnalytics\Gcp\PermissionsCreepIndexDistributions\Item\PermissionsCreepIndexDistributionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PermissionsCreepIndexDistribution;
use Microsoft\Graph\Beta\Generated\Models\PermissionsCreepIndexDistributionCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the permissionsCreepIndexDistributions property of the microsoft.graph.permissionsAnalytics entity.
*/
class PermissionsCreepIndexDistributionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the permissionsCreepIndexDistributions property of the microsoft.graph.permissionsAnalytics entity.
     * @param string $permissionsCreepIndexDistributionId The unique identifier of permissionsCreepIndexDistribution
     * @return PermissionsCreepIndexDistributionItemRequestBuilder
    */
    public function byPermissionsCreepIndexDistributionId(string $permissionsCreepIndexDistributionId): PermissionsCreepIndexDistributionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permissionsCreepIndexDistribution%2Did'] = $permissionsCreepIndexDistributionId;
        return new PermissionsCreepIndexDistributionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PermissionsCreepIndexDistributionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/permissionsAnalytics/gcp/permissionsCreepIndexDistributions{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get permissionsCreepIndexDistributions from identityGovernance
     * @param PermissionsCreepIndexDistributionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PermissionsCreepIndexDistributionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?PermissionsCreepIndexDistributionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PermissionsCreepIndexDistributionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to permissionsCreepIndexDistributions for identityGovernance
     * @param PermissionsCreepIndexDistribution $body The request body
     * @param PermissionsCreepIndexDistributionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PermissionsCreepIndexDistribution|null>
     * @throws Exception
    */
    public function post(PermissionsCreepIndexDistribution $body, ?PermissionsCreepIndexDistributionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PermissionsCreepIndexDistribution::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get permissionsCreepIndexDistributions from identityGovernance
     * @param PermissionsCreepIndexDistributionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PermissionsCreepIndexDistributionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create new navigation property to permissionsCreepIndexDistributions for identityGovernance
     * @param PermissionsCreepIndexDistribution $body The request body
     * @param PermissionsCreepIndexDistributionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PermissionsCreepIndexDistribution $body, ?PermissionsCreepIndexDistributionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return PermissionsCreepIndexDistributionsRequestBuilder
    */
    public function withUrl(string $rawUrl): PermissionsCreepIndexDistributionsRequestBuilder {
        return new PermissionsCreepIndexDistributionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
