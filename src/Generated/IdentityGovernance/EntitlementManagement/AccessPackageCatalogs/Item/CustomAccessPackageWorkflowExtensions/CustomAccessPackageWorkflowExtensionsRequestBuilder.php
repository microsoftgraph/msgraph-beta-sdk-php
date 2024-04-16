<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\CustomAccessPackageWorkflowExtensions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\CustomAccessPackageWorkflowExtensions\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\CustomAccessPackageWorkflowExtensions\Item\CustomAccessPackageWorkflowExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CustomAccessPackageWorkflowExtension;
use Microsoft\Graph\Beta\Generated\Models\CustomAccessPackageWorkflowExtensionCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customAccessPackageWorkflowExtensions property of the microsoft.graph.accessPackageCatalog entity.
*/
class CustomAccessPackageWorkflowExtensionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customAccessPackageWorkflowExtensions property of the microsoft.graph.accessPackageCatalog entity.
     * @param string $customAccessPackageWorkflowExtensionId The unique identifier of customAccessPackageWorkflowExtension
     * @return CustomAccessPackageWorkflowExtensionItemRequestBuilder
    */
    public function byCustomAccessPackageWorkflowExtensionId(string $customAccessPackageWorkflowExtensionId): CustomAccessPackageWorkflowExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customAccessPackageWorkflowExtension%2Did'] = $customAccessPackageWorkflowExtensionId;
        return new CustomAccessPackageWorkflowExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CustomAccessPackageWorkflowExtensionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/accessPackageCatalogs/{accessPackageCatalog%2Did}/customAccessPackageWorkflowExtensions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the customAccessPackageWorkflowExtension objects and their properties. The resulting list includes all the customAccessPackageWorkflowExtension objects for the catalog that the caller has access to read.
     * @param CustomAccessPackageWorkflowExtensionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomAccessPackageWorkflowExtensionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accesspackagecatalog-list-customaccesspackageworkflowextensions?view=graph-rest-1.0 Find more info here
    */
    public function get(?CustomAccessPackageWorkflowExtensionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomAccessPackageWorkflowExtensionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new customAccessPackageWorkflowExtension object and add it to an existing accessPackageCatalog object.  
     * @param CustomAccessPackageWorkflowExtension $body The request body
     * @param CustomAccessPackageWorkflowExtensionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomAccessPackageWorkflowExtension|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accesspackagecatalog-post-customaccesspackageworkflowextensions?view=graph-rest-1.0 Find more info here
    */
    public function post(CustomAccessPackageWorkflowExtension $body, ?CustomAccessPackageWorkflowExtensionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomAccessPackageWorkflowExtension::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the customAccessPackageWorkflowExtension objects and their properties. The resulting list includes all the customAccessPackageWorkflowExtension objects for the catalog that the caller has access to read.
     * @param CustomAccessPackageWorkflowExtensionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomAccessPackageWorkflowExtensionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new customAccessPackageWorkflowExtension object and add it to an existing accessPackageCatalog object.  
     * @param CustomAccessPackageWorkflowExtension $body The request body
     * @param CustomAccessPackageWorkflowExtensionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CustomAccessPackageWorkflowExtension $body, ?CustomAccessPackageWorkflowExtensionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CustomAccessPackageWorkflowExtensionsRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomAccessPackageWorkflowExtensionsRequestBuilder {
        return new CustomAccessPackageWorkflowExtensionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
