<?php

namespace Microsoft\Graph\Beta\Generated\IdentityGovernance\EntitlementManagement\AccessPackageCatalogsWithUniqueName;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\AccessPackageCatalog;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the accessPackageCatalogs property of the microsoft.graph.entitlementManagement entity.
*/
class AccessPackageCatalogsWithUniqueNameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AccessPackageCatalogsWithUniqueNameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $uniqueName Alternate key of accessPackageCatalog
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $uniqueName = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/accessPackageCatalogs(uniqueName=\'{uniqueName}\'){?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['uniqueName'] = $uniqueName;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an accessPackageCatalog.
     * @param AccessPackageCatalogsWithUniqueNameRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accesspackagecatalog-delete?view=graph-rest-beta Find more info here
    */
    public function delete(?AccessPackageCatalogsWithUniqueNameRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Retrieve the properties and relationships of an accessPackageCatalog object.
     * @param AccessPackageCatalogsWithUniqueNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageCatalog|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accesspackagecatalog-get?view=graph-rest-beta Find more info here
    */
    public function get(?AccessPackageCatalogsWithUniqueNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageCatalog::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update an existing accessPackageCatalog object to change one or more of its properties, such as the display name or description.
     * @param AccessPackageCatalog $body The request body
     * @param AccessPackageCatalogsWithUniqueNameRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageCatalog|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accesspackagecatalog-update?view=graph-rest-beta Find more info here
    */
    public function patch(AccessPackageCatalog $body, ?AccessPackageCatalogsWithUniqueNameRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageCatalog::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an accessPackageCatalog.
     * @param AccessPackageCatalogsWithUniqueNameRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AccessPackageCatalogsWithUniqueNameRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Retrieve the properties and relationships of an accessPackageCatalog object.
     * @param AccessPackageCatalogsWithUniqueNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AccessPackageCatalogsWithUniqueNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update an existing accessPackageCatalog object to change one or more of its properties, such as the display name or description.
     * @param AccessPackageCatalog $body The request body
     * @param AccessPackageCatalogsWithUniqueNameRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AccessPackageCatalog $body, ?AccessPackageCatalogsWithUniqueNameRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AccessPackageCatalogsWithUniqueNameRequestBuilder
    */
    public function withUrl(string $rawUrl): AccessPackageCatalogsWithUniqueNameRequestBuilder {
        return new AccessPackageCatalogsWithUniqueNameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
