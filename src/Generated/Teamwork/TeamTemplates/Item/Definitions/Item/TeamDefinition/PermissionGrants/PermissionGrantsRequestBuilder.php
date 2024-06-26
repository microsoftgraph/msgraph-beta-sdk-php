<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork\TeamTemplates\Item\Definitions\Item\TeamDefinition\PermissionGrants;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\ResourceSpecificPermissionGrant;
use Microsoft\Graph\Beta\Generated\Models\ResourceSpecificPermissionGrantCollectionResponse;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamTemplates\Item\Definitions\Item\TeamDefinition\PermissionGrants\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamTemplates\Item\Definitions\Item\TeamDefinition\PermissionGrants\Item\ResourceSpecificPermissionGrantItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the permissionGrants property of the microsoft.graph.team entity.
*/
class PermissionGrantsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the permissionGrants property of the microsoft.graph.team entity.
     * @param string $resourceSpecificPermissionGrantId The unique identifier of resourceSpecificPermissionGrant
     * @return ResourceSpecificPermissionGrantItemRequestBuilder
    */
    public function byResourceSpecificPermissionGrantId(string $resourceSpecificPermissionGrantId): ResourceSpecificPermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceSpecificPermissionGrant%2Did'] = $resourceSpecificPermissionGrantId;
        return new ResourceSpecificPermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PermissionGrantsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teamwork/teamTemplates/{teamTemplate%2Did}/definitions/{teamTemplateDefinition%2Did}/teamDefinition/permissionGrants{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A collection of permissions granted to apps to access the team.
     * @param PermissionGrantsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ResourceSpecificPermissionGrantCollectionResponse|null>
     * @throws Exception
    */
    public function get(?PermissionGrantsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ResourceSpecificPermissionGrantCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to permissionGrants for teamwork
     * @param ResourceSpecificPermissionGrant $body The request body
     * @param PermissionGrantsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ResourceSpecificPermissionGrant|null>
     * @throws Exception
    */
    public function post(ResourceSpecificPermissionGrant $body, ?PermissionGrantsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ResourceSpecificPermissionGrant::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * A collection of permissions granted to apps to access the team.
     * @param PermissionGrantsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PermissionGrantsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to permissionGrants for teamwork
     * @param ResourceSpecificPermissionGrant $body The request body
     * @param PermissionGrantsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ResourceSpecificPermissionGrant $body, ?PermissionGrantsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PermissionGrantsRequestBuilder
    */
    public function withUrl(string $rawUrl): PermissionGrantsRequestBuilder {
        return new PermissionGrantsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
