<?php

namespace Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ContentType;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\Base\BaseRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\BaseTypes\BaseTypesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\ColumnLinks\ColumnLinksRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\ColumnLinks\Item\ColumnLinkItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\ColumnPositions\ColumnPositionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\MicrosoftGraphAssociateWithHubSites\MicrosoftGraphAssociateWithHubSitesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\MicrosoftGraphCopyToDefaultContentLocation\MicrosoftGraphCopyToDefaultContentLocationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\MicrosoftGraphIsPublished\MicrosoftGraphIsPublishedRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\MicrosoftGraphPublish\MicrosoftGraphPublishRequestBuilder;
use Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\MicrosoftGraphUnpublish\MicrosoftGraphUnpublishRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the contentTypes property of the microsoft.graph.list entity.
*/
class ContentTypeItemRequestBuilder 
{
    /**
     * Provides operations to manage the base property of the microsoft.graph.contentType entity.
    */
    public function base(): BaseRequestBuilder {
        return new BaseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the baseTypes property of the microsoft.graph.contentType entity.
    */
    public function baseTypes(): BaseTypesRequestBuilder {
        return new BaseTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the columnLinks property of the microsoft.graph.contentType entity.
    */
    public function columnLinks(): ColumnLinksRequestBuilder {
        return new ColumnLinksRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the columnPositions property of the microsoft.graph.contentType entity.
    */
    public function columnPositions(): ColumnPositionsRequestBuilder {
        return new ColumnPositionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the columns property of the microsoft.graph.contentType entity.
    */
    public function columns(): ColumnsRequestBuilder {
        return new ColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the associateWithHubSites method.
    */
    public function microsoftGraphAssociateWithHubSites(): MicrosoftGraphAssociateWithHubSitesRequestBuilder {
        return new MicrosoftGraphAssociateWithHubSitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the copyToDefaultContentLocation method.
    */
    public function microsoftGraphCopyToDefaultContentLocation(): MicrosoftGraphCopyToDefaultContentLocationRequestBuilder {
        return new MicrosoftGraphCopyToDefaultContentLocationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the isPublished method.
    */
    public function microsoftGraphIsPublished(): MicrosoftGraphIsPublishedRequestBuilder {
        return new MicrosoftGraphIsPublishedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the publish method.
    */
    public function microsoftGraphPublish(): MicrosoftGraphPublishRequestBuilder {
        return new MicrosoftGraphPublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unpublish method.
    */
    public function microsoftGraphUnpublish(): MicrosoftGraphUnpublishRequestBuilder {
        return new MicrosoftGraphUnpublishRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the baseTypes property of the microsoft.graph.contentType entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\BaseTypes\Item\ContentTypeItemRequestBuilder
    */
    public function baseTypesById(string $id): \Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\BaseTypes\Item\ContentTypeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contentType%2Did1'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\BaseTypes\Item\ContentTypeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the columnLinks property of the microsoft.graph.contentType entity.
     * @param string $id Unique identifier of the item
     * @return ColumnLinkItemRequestBuilder
    */
    public function columnLinksById(string $id): ColumnLinkItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnLink%2Did'] = $id;
        return new ColumnLinkItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the columnPositions property of the microsoft.graph.contentType entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\ColumnPositions\Item\ColumnDefinitionItemRequestBuilder
    */
    public function columnPositionsById(string $id): \Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\ColumnPositions\Item\ColumnDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnDefinition%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\ColumnPositions\Item\ColumnDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the columns property of the microsoft.graph.contentType entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\Columns\Item\ColumnDefinitionItemRequestBuilder
    */
    public function columnsById(string $id): \Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\Columns\Item\ColumnDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnDefinition%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Shares\Item\EscapedList\ContentTypes\Item\Columns\Item\ColumnDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ContentTypeItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/shares/{sharedDriveItem%2Did}/list/contentTypes/{contentType%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property contentTypes for shares
     * @param ContentTypeItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ContentTypeItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get contentTypes from shares
     * @param ContentTypeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?ContentTypeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ContentType::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property contentTypes in shares
     * @param ContentType $body The request body
     * @param ContentTypeItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(ContentType $body, ?ContentTypeItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ContentType::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property contentTypes for shares
     * @param ContentTypeItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ContentTypeItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get contentTypes from shares
     * @param ContentTypeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ContentTypeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property contentTypes in shares
     * @param ContentType $body The request body
     * @param ContentTypeItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ContentType $body, ?ContentTypeItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
