<?php

namespace Microsoft\Graph\Beta\Generated\Security\ThreatSubmission\FileThreats;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\FileThreatSubmission;
use Microsoft\Graph\Beta\Generated\Models\Security\FileThreatSubmissionCollectionResponse;
use Microsoft\Graph\Beta\Generated\Security\ThreatSubmission\FileThreats\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatSubmission\FileThreats\Item\FileThreatSubmissionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the fileThreats property of the microsoft.graph.security.threatSubmissionRoot entity.
*/
class FileThreatsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the fileThreats property of the microsoft.graph.security.threatSubmissionRoot entity.
     * @param string $fileThreatSubmissionId The unique identifier of fileThreatSubmission
     * @return FileThreatSubmissionItemRequestBuilder
    */
    public function byFileThreatSubmissionId(string $fileThreatSubmissionId): FileThreatSubmissionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['fileThreatSubmission%2Did'] = $fileThreatSubmissionId;
        return new FileThreatSubmissionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new FileThreatsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/threatSubmission/fileThreats{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the fileThreatSubmission objects and their properties.
     * @param FileThreatsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileThreatSubmissionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-filethreatsubmission-list?view=graph-rest-beta Find more info here
    */
    public function get(?FileThreatsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileThreatSubmissionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new fileThreatSubmission object.
     * @param FileThreatSubmission $body The request body
     * @param FileThreatsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileThreatSubmission|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-filethreatsubmission-post-filethreats?view=graph-rest-beta Find more info here
    */
    public function post(FileThreatSubmission $body, ?FileThreatsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileThreatSubmission::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the fileThreatSubmission objects and their properties.
     * @param FileThreatsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FileThreatsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new fileThreatSubmission object.
     * @param FileThreatSubmission $body The request body
     * @param FileThreatsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(FileThreatSubmission $body, ?FileThreatsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FileThreatsRequestBuilder
    */
    public function withUrl(string $rawUrl): FileThreatsRequestBuilder {
        return new FileThreatsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
