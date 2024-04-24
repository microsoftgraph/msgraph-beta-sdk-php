<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageResourceEnvironments;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageResourceEnvironments\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageResourceEnvironments\Item\AccessPackageResourceEnvironmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AccessPackageResourceEnvironment;
use Microsoft\Graph\Beta\Generated\Models\AccessPackageResourceEnvironmentCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the accessPackageResourceEnvironments property of the microsoft.graph.entitlementManagement entity.
*/
class AccessPackageResourceEnvironmentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the accessPackageResourceEnvironments property of the microsoft.graph.entitlementManagement entity.
     * @param string $accessPackageResourceEnvironmentId The unique identifier of accessPackageResourceEnvironment
     * @return AccessPackageResourceEnvironmentItemRequestBuilder
    */
    public function byAccessPackageResourceEnvironmentId(string $accessPackageResourceEnvironmentId): AccessPackageResourceEnvironmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageResourceEnvironment%2Did'] = $accessPackageResourceEnvironmentId;
        return new AccessPackageResourceEnvironmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AccessPackageResourceEnvironmentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/accessPackageResourceEnvironments{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A reference to the geolocation environment in which a resource is located.
     * @param AccessPackageResourceEnvironmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageResourceEnvironmentCollectionResponse|null>
     * @throws Exception
    */
    public function get(?AccessPackageResourceEnvironmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageResourceEnvironmentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to accessPackageResourceEnvironments for identityGovernance
     * @param AccessPackageResourceEnvironment $body The request body
     * @param AccessPackageResourceEnvironmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageResourceEnvironment|null>
     * @throws Exception
    */
    public function post(AccessPackageResourceEnvironment $body, ?AccessPackageResourceEnvironmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageResourceEnvironment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A reference to the geolocation environment in which a resource is located.
     * @param AccessPackageResourceEnvironmentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AccessPackageResourceEnvironmentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to accessPackageResourceEnvironments for identityGovernance
     * @param AccessPackageResourceEnvironment $body The request body
     * @param AccessPackageResourceEnvironmentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AccessPackageResourceEnvironment $body, ?AccessPackageResourceEnvironmentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AccessPackageResourceEnvironmentsRequestBuilder
    */
    public function withUrl(string $rawUrl): AccessPackageResourceEnvironmentsRequestBuilder {
        return new AccessPackageResourceEnvironmentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
