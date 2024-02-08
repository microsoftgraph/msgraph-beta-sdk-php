<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\AccessPackageCustomWorkflowExtensions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\AccessPackageCustomWorkflowExtensions\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\AccessPackageCustomWorkflowExtensions\Item\CustomCalloutExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CustomCalloutExtension;
use Microsoft\Graph\Beta\Generated\Models\CustomCalloutExtensionCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the accessPackageCustomWorkflowExtensions property of the microsoft.graph.accessPackageCatalog entity.
*/
class AccessPackageCustomWorkflowExtensionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the accessPackageCustomWorkflowExtensions property of the microsoft.graph.accessPackageCatalog entity.
     * @param string $customCalloutExtensionId The unique identifier of customCalloutExtension
     * @return CustomCalloutExtensionItemRequestBuilder
    */
    public function byCustomCalloutExtensionId(string $customCalloutExtensionId): CustomCalloutExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customCalloutExtension%2Did'] = $customCalloutExtensionId;
        return new CustomCalloutExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AccessPackageCustomWorkflowExtensionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/accessPackageCatalogs/{accessPackageCatalog%2Did}/accessPackageCustomWorkflowExtensions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the accessPackageAssignmentRequestWorkflowExtension and accessPackageAssignmentWorkflowExtension objects and their properties. The resulting list includes all the customAccessPackageWorkflowExtension objects for the catalog that the caller has access to read. Each object includes an @odata.type property that indicates whether the object is an  accessPackageAssignmentRequestWorkflowExtension or an accessPackageAssignmentWorkflowExtension.
     * @param AccessPackageCustomWorkflowExtensionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomCalloutExtensionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accesspackagecatalog-list-accesspackagecustomworkflowextensions?view=graph-rest-1.0 Find more info here
    */
    public function get(?AccessPackageCustomWorkflowExtensionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomCalloutExtensionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to accessPackageCustomWorkflowExtensions for identityGovernance
     * @param CustomCalloutExtension $body The request body
     * @param AccessPackageCustomWorkflowExtensionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomCalloutExtension|null>
     * @throws Exception
    */
    public function post(CustomCalloutExtension $body, ?AccessPackageCustomWorkflowExtensionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomCalloutExtension::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the accessPackageAssignmentRequestWorkflowExtension and accessPackageAssignmentWorkflowExtension objects and their properties. The resulting list includes all the customAccessPackageWorkflowExtension objects for the catalog that the caller has access to read. Each object includes an @odata.type property that indicates whether the object is an  accessPackageAssignmentRequestWorkflowExtension or an accessPackageAssignmentWorkflowExtension.
     * @param AccessPackageCustomWorkflowExtensionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AccessPackageCustomWorkflowExtensionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to accessPackageCustomWorkflowExtensions for identityGovernance
     * @param CustomCalloutExtension $body The request body
     * @param AccessPackageCustomWorkflowExtensionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CustomCalloutExtension $body, ?AccessPackageCustomWorkflowExtensionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AccessPackageCustomWorkflowExtensionsRequestBuilder
    */
    public function withUrl(string $rawUrl): AccessPackageCustomWorkflowExtensionsRequestBuilder {
        return new AccessPackageCustomWorkflowExtensionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
