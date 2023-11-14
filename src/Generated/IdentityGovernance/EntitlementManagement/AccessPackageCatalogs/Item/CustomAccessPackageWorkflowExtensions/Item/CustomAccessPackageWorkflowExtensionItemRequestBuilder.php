<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogs\Item\CustomAccessPackageWorkflowExtensions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CustomAccessPackageWorkflowExtension;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customAccessPackageWorkflowExtensions property of the microsoft.graph.accessPackageCatalog entity.
*/
class CustomAccessPackageWorkflowExtensionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CustomAccessPackageWorkflowExtensionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/accessPackageCatalogs/{accessPackageCatalog%2Did}/customAccessPackageWorkflowExtensions/{customAccessPackageWorkflowExtension%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an accessPackageAssignmentRequestWorkflowExtension object. The custom workflow extension must first be removed from any associated policies before it can be deleted. Follow these steps to remove the custom workflow extension from any associated policies:1. First retrieve the accessPackageCatalogId by calling the Get accessPackageAssignmentPolicies operation and appending ?$expand=accessPackage($expand=accessPackageCatalog) to the query. For example, https://graph.microsoft.com/beta/identityGovernance/entitlementManagement/accessPackageAssignmentPolicies?$expand=accessPackage($expand=accessPackageCatalog).2. Use the access package catalog ID and retrieve the ID of the accessPackageCustomWorkflowExtension object that you want to delete by running the List accessPackageCustomWorkflowExtensions operation.3. Call the Update accessPackageAssignmentPolicy operation to remove the custom workflow extension object from the policy. For an example, see Example 3: Remove the customExtensionStageSettings from a policy. This API is available in the following national cloud deployments.
     * @param CustomAccessPackageWorkflowExtensionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accesspackageassignmentrequestworkflowextension-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?CustomAccessPackageWorkflowExtensionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a customAccessPackageWorkflowExtension object for an accessPackageCatalog object. This API is available in the following national cloud deployments.
     * @param CustomAccessPackageWorkflowExtensionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomAccessPackageWorkflowExtension|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/customaccesspackageworkflowextension-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?CustomAccessPackageWorkflowExtensionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomAccessPackageWorkflowExtension::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of an existing customAccessPackageWorkflowExtension object.
     * @param CustomAccessPackageWorkflowExtension $body The request body
     * @param CustomAccessPackageWorkflowExtensionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomAccessPackageWorkflowExtension|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/customaccesspackageworkflowextension-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(CustomAccessPackageWorkflowExtension $body, ?CustomAccessPackageWorkflowExtensionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomAccessPackageWorkflowExtension::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an accessPackageAssignmentRequestWorkflowExtension object. The custom workflow extension must first be removed from any associated policies before it can be deleted. Follow these steps to remove the custom workflow extension from any associated policies:1. First retrieve the accessPackageCatalogId by calling the Get accessPackageAssignmentPolicies operation and appending ?$expand=accessPackage($expand=accessPackageCatalog) to the query. For example, https://graph.microsoft.com/beta/identityGovernance/entitlementManagement/accessPackageAssignmentPolicies?$expand=accessPackage($expand=accessPackageCatalog).2. Use the access package catalog ID and retrieve the ID of the accessPackageCustomWorkflowExtension object that you want to delete by running the List accessPackageCustomWorkflowExtensions operation.3. Call the Update accessPackageAssignmentPolicy operation to remove the custom workflow extension object from the policy. For an example, see Example 3: Remove the customExtensionStageSettings from a policy. This API is available in the following national cloud deployments.
     * @param CustomAccessPackageWorkflowExtensionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CustomAccessPackageWorkflowExtensionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a customAccessPackageWorkflowExtension object for an accessPackageCatalog object. This API is available in the following national cloud deployments.
     * @param CustomAccessPackageWorkflowExtensionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomAccessPackageWorkflowExtensionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of an existing customAccessPackageWorkflowExtension object.
     * @param CustomAccessPackageWorkflowExtension $body The request body
     * @param CustomAccessPackageWorkflowExtensionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CustomAccessPackageWorkflowExtension $body, ?CustomAccessPackageWorkflowExtensionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CustomAccessPackageWorkflowExtensionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomAccessPackageWorkflowExtensionItemRequestBuilder {
        return new CustomAccessPackageWorkflowExtensionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
