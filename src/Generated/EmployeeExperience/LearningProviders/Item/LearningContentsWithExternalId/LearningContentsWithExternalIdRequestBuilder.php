<?php

namespace Microsoft\Graph\Beta\Generated\EmployeeExperience\LearningProviders\Item\LearningContentsWithExternalId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\LearningContent;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the learningContents property of the microsoft.graph.learningProvider entity.
*/
class LearningContentsWithExternalIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new LearningContentsWithExternalIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $externalId Alternate key of learningContent
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $externalId = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/employeeExperience/learningProviders/{learningProvider%2Did}/learningContents(externalId=\'{externalId}\'){?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['externalId'] = $externalId;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete the specified learningContent resource that represents the metadata of the specified provider's ingested content.
     * @param LearningContentsWithExternalIdRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/learningprovider-delete-learningcontents?view=graph-rest-beta Find more info here
    */
    public function delete(?LearningContentsWithExternalIdRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the specified learningContent resource which represents the metadata of the specified provider's ingested content.
     * @param LearningContentsWithExternalIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LearningContent|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/learningcontent-get?view=graph-rest-beta Find more info here
    */
    public function get(?LearningContentsWithExternalIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LearningContent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the specified learningContent resource. Used by a learning provider to ingest or update the metadata for their content in Viva Learning. If the specified learning content doesn't yet exist for the specified provider, this operation creates the metadata for the new content. Otherwise, this operation replaces the metadata of the existing content.
     * @param LearningContent $body The request body
     * @param LearningContentsWithExternalIdRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<LearningContent|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/learningcontent-update?view=graph-rest-beta Find more info here
    */
    public function patch(LearningContent $body, ?LearningContentsWithExternalIdRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [LearningContent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete the specified learningContent resource that represents the metadata of the specified provider's ingested content.
     * @param LearningContentsWithExternalIdRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?LearningContentsWithExternalIdRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get the specified learningContent resource which represents the metadata of the specified provider's ingested content.
     * @param LearningContentsWithExternalIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?LearningContentsWithExternalIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the specified learningContent resource. Used by a learning provider to ingest or update the metadata for their content in Viva Learning. If the specified learning content doesn't yet exist for the specified provider, this operation creates the metadata for the new content. Otherwise, this operation replaces the metadata of the existing content.
     * @param LearningContent $body The request body
     * @param LearningContentsWithExternalIdRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(LearningContent $body, ?LearningContentsWithExternalIdRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return LearningContentsWithExternalIdRequestBuilder
    */
    public function withUrl(string $rawUrl): LearningContentsWithExternalIdRequestBuilder {
        return new LearningContentsWithExternalIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
