<?php

namespace Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\PermissionsManagement\PermissionsRequestChanges;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\PermissionsManagement\PermissionsRequestChanges\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\IdentityGovernance\PermissionsManagement\PermissionsRequestChanges\Item\PermissionsRequestChangeItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\PermissionsRequestChange;
use Microsoft\\Graph\\Beta\\Generated\Models\PermissionsRequestChangeCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the permissionsRequestChanges property of the microsoft.graph.permissionsManagement entity.
*/
class PermissionsRequestChangesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the permissionsRequestChanges property of the microsoft.graph.permissionsManagement entity.
     * @param string $permissionsRequestChangeId The unique identifier of permissionsRequestChange
     * @return PermissionsRequestChangeItemRequestBuilder
    */
    public function byPermissionsRequestChangeId(string $permissionsRequestChangeId): PermissionsRequestChangeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permissionsRequestChange%2Did'] = $permissionsRequestChangeId;
        return new PermissionsRequestChangeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PermissionsRequestChangesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/permissionsManagement/permissionsRequestChanges{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List the permissionsRequestChange objects and their properties.
     * @param PermissionsRequestChangesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PermissionsRequestChangeCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/permissionsmanagement-list-permissionsrequestchanges?view=graph-rest-beta Find more info here
    */
    public function get(?PermissionsRequestChangesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PermissionsRequestChangeCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to permissionsRequestChanges for identityGovernance
     * @param PermissionsRequestChange $body The request body
     * @param PermissionsRequestChangesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PermissionsRequestChange|null>
     * @throws Exception
    */
    public function post(PermissionsRequestChange $body, ?PermissionsRequestChangesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PermissionsRequestChange::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List the permissionsRequestChange objects and their properties.
     * @param PermissionsRequestChangesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PermissionsRequestChangesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to permissionsRequestChanges for identityGovernance
     * @param PermissionsRequestChange $body The request body
     * @param PermissionsRequestChangesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PermissionsRequestChange $body, ?PermissionsRequestChangesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PermissionsRequestChangesRequestBuilder
    */
    public function withUrl(string $rawUrl): PermissionsRequestChangesRequestBuilder {
        return new PermissionsRequestChangesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
