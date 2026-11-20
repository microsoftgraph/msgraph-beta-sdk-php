<?php

namespace Microsoft\Graph\Beta\Generated\Security\ContentManagement\Repositories\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement\ContentManagementRepository;
use Microsoft\Graph\Beta\Generated\Security\ContentManagement\Repositories\Item\MicrosoftGraphSecurityContentManagementDisconnect\MicrosoftGraphSecurityContentManagementDisconnectRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ContentManagement\Repositories\Item\MicrosoftGraphSecurityContentManagementModify\MicrosoftGraphSecurityContentManagementModifyRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the repositories property of the microsoft.graph.contentManagementRoot entity.
*/
class ContentManagementRepositoryItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the disconnect method.
    */
    public function microsoftGraphSecurityContentManagementDisconnect(): MicrosoftGraphSecurityContentManagementDisconnectRequestBuilder {
        return new MicrosoftGraphSecurityContentManagementDisconnectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the modify method.
    */
    public function microsoftGraphSecurityContentManagementModify(): MicrosoftGraphSecurityContentManagementModifyRequestBuilder {
        return new MicrosoftGraphSecurityContentManagementModifyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ContentManagementRepositoryItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/contentManagement/repositories/{contentManagementRepository%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a contentManagementRepository by its service-generated identifier.
     * @param ContentManagementRepositoryItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ContentManagementRepository|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-contentmanagement-contentmanagementrepository-get?view=graph-rest-beta Find more info here
    */
    public function get(?ContentManagementRepositoryItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ContentManagementRepository::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a contentManagementRepository by its service-generated identifier.
     * @param ContentManagementRepositoryItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ContentManagementRepositoryItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ContentManagementRepositoryItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ContentManagementRepositoryItemRequestBuilder {
        return new ContentManagementRepositoryItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
