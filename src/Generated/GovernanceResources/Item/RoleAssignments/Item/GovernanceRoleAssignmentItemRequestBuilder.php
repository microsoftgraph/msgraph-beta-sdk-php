<?php

namespace Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleAssignments\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleAssignments\Item\LinkedEligibleRoleAssignment\LinkedEligibleRoleAssignmentRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleAssignments\Item\Resource\ResourceRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleAssignments\Item\RoleDefinition\RoleDefinitionRequestBuilder;
use Microsoft\Graph\Beta\Generated\GovernanceResources\Item\RoleAssignments\Item\Subject\SubjectRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\GovernanceRoleAssignment;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the roleAssignments property of the microsoft.graph.governanceResource entity.
*/
class GovernanceRoleAssignmentItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the linkedEligibleRoleAssignment property of the microsoft.graph.governanceRoleAssignment entity.
    */
    public function linkedEligibleRoleAssignment(): LinkedEligibleRoleAssignmentRequestBuilder {
        return new LinkedEligibleRoleAssignmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the resource property of the microsoft.graph.governanceRoleAssignment entity.
    */
    public function resource(): ResourceRequestBuilder {
        return new ResourceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleDefinition property of the microsoft.graph.governanceRoleAssignment entity.
    */
    public function roleDefinition(): RoleDefinitionRequestBuilder {
        return new RoleDefinitionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the subject property of the microsoft.graph.governanceRoleAssignment entity.
    */
    public function subject(): SubjectRequestBuilder {
        return new SubjectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new GovernanceRoleAssignmentItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/governanceResources/{governanceResource%2Did}/roleAssignments/{governanceRoleAssignment%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property roleAssignments for governanceResources
     * @param GovernanceRoleAssignmentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?GovernanceRoleAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The collection of role assignments for the resource.
     * @param GovernanceRoleAssignmentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GovernanceRoleAssignment|null>
     * @throws Exception
    */
    public function get(?GovernanceRoleAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GovernanceRoleAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property roleAssignments in governanceResources
     * @param GovernanceRoleAssignment $body The request body
     * @param GovernanceRoleAssignmentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GovernanceRoleAssignment|null>
     * @throws Exception
    */
    public function patch(GovernanceRoleAssignment $body, ?GovernanceRoleAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GovernanceRoleAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property roleAssignments for governanceResources
     * @param GovernanceRoleAssignmentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?GovernanceRoleAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The collection of role assignments for the resource.
     * @param GovernanceRoleAssignmentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GovernanceRoleAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property roleAssignments in governanceResources
     * @param GovernanceRoleAssignment $body The request body
     * @param GovernanceRoleAssignmentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(GovernanceRoleAssignment $body, ?GovernanceRoleAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GovernanceRoleAssignmentItemRequestBuilder
    */
    public function withUrl(string $rawUrl): GovernanceRoleAssignmentItemRequestBuilder {
        return new GovernanceRoleAssignmentItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
