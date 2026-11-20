<?php

namespace Microsoft\Graph\Beta\Generated\Security\ContentManagement\Repositories\MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositories;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the discoverAvailableRepositories method.
*/
class MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositoriesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositoriesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/contentManagement/repositories/microsoft.graph.security.contentManagement.discoverAvailableRepositories');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Discover candidate repositories the caller can connect, using a supplied provider credential.Credential is passed in the request body and is never returned; only repository metadata is.Results are transient, non-addressable discovery records: the backend exposes no stable id fora candidate repository (confirmed in source), so they are modeled as value objects, not entities.The result is a bounded set: the action returns up to 200 candidate repositories accessible to thesupplied credential. It is not paged. Paging is not offered because the credential is a write-onlyrequest-body value and an OData `@odata.nextLink` continuation is a GET that cannot carry it; thebound keeps the response size predictable. Callers who need a specific repository connect it directly.
     * @param DiscoverAvailableRepositoriesPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositoriesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DiscoverAvailableRepositoriesPostResponse|null>
     * @throws Exception
    */
    public function post(DiscoverAvailableRepositoriesPostRequestBody $body, ?MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositoriesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DiscoverAvailableRepositoriesPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Discover candidate repositories the caller can connect, using a supplied provider credential.Credential is passed in the request body and is never returned; only repository metadata is.Results are transient, non-addressable discovery records: the backend exposes no stable id fora candidate repository (confirmed in source), so they are modeled as value objects, not entities.The result is a bounded set: the action returns up to 200 candidate repositories accessible to thesupplied credential. It is not paged. Paging is not offered because the credential is a write-onlyrequest-body value and an OData `@odata.nextLink` continuation is a GET that cannot carry it; thebound keeps the response size predictable. Callers who need a specific repository connect it directly.
     * @param DiscoverAvailableRepositoriesPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositoriesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DiscoverAvailableRepositoriesPostRequestBody $body, ?MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositoriesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositoriesRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositoriesRequestBuilder {
        return new MicrosoftGraphSecurityContentManagementDiscoverAvailableRepositoriesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
