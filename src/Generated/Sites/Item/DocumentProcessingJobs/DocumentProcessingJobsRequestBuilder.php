<?php

namespace Microsoft\Graph\Beta\Generated\Sites\Item\DocumentProcessingJobs;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DocumentProcessingJob;
use Microsoft\Graph\Beta\Generated\Models\DocumentProcessingJobCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Sites\Item\DocumentProcessingJobs\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Sites\Item\DocumentProcessingJobs\Item\DocumentProcessingJobItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the documentProcessingJobs property of the microsoft.graph.site entity.
*/
class DocumentProcessingJobsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the documentProcessingJobs property of the microsoft.graph.site entity.
     * @param string $documentProcessingJobId The unique identifier of documentProcessingJob
     * @return DocumentProcessingJobItemRequestBuilder
    */
    public function byDocumentProcessingJobId(string $documentProcessingJobId): DocumentProcessingJobItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['documentProcessingJob%2Did'] = $documentProcessingJobId;
        return new DocumentProcessingJobItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DocumentProcessingJobsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites/{site%2Did}/documentProcessingJobs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The document processing jobs running on this site.
     * @param DocumentProcessingJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DocumentProcessingJobCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DocumentProcessingJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DocumentProcessingJobCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new documentProcessingJob object. The document processing job queues a document, or all documents in a folder, for processing by the applied content models.
     * @param DocumentProcessingJob $body The request body
     * @param DocumentProcessingJobsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DocumentProcessingJob|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/site-post-documentprocessingjobs?view=graph-rest-beta Find more info here
    */
    public function post(DocumentProcessingJob $body, ?DocumentProcessingJobsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DocumentProcessingJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The document processing jobs running on this site.
     * @param DocumentProcessingJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DocumentProcessingJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new documentProcessingJob object. The document processing job queues a document, or all documents in a folder, for processing by the applied content models.
     * @param DocumentProcessingJob $body The request body
     * @param DocumentProcessingJobsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DocumentProcessingJob $body, ?DocumentProcessingJobsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DocumentProcessingJobsRequestBuilder
    */
    public function withUrl(string $rawUrl): DocumentProcessingJobsRequestBuilder {
        return new DocumentProcessingJobsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
