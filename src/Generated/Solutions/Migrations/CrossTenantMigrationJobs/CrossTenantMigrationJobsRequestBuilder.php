<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\Migrations\CrossTenantMigrationJobs;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\CrossTenantMigrationJob;
use Microsoft\Graph\Beta\Generated\Models\CrossTenantMigrationJobCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Solutions\Migrations\CrossTenantMigrationJobs\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\Migrations\CrossTenantMigrationJobs\Item\CrossTenantMigrationJobItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\Migrations\CrossTenantMigrationJobs\Validate\ValidateRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the crossTenantMigrationJobs property of the microsoft.graph.migrationsRoot entity.
*/
class CrossTenantMigrationJobsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the validate method.
    */
    public function validate(): ValidateRequestBuilder {
        return new ValidateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the crossTenantMigrationJobs property of the microsoft.graph.migrationsRoot entity.
     * @param string $crossTenantMigrationJobId The unique identifier of crossTenantMigrationJob
     * @return CrossTenantMigrationJobItemRequestBuilder
    */
    public function byCrossTenantMigrationJobId(string $crossTenantMigrationJobId): CrossTenantMigrationJobItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['crossTenantMigrationJob%2Did'] = $crossTenantMigrationJobId;
        return new CrossTenantMigrationJobItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CrossTenantMigrationJobsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/migrations/crossTenantMigrationJobs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the crossTenantMigrationJob objects and their properties. By default 20 objects are returned. More can be retrieved through the @odata.nextLink url provided in the response.
     * @param CrossTenantMigrationJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantMigrationJobCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/migrationsroot-list-crosstenantmigrationjobs?view=graph-rest-beta Find more info here
    */
    public function get(?CrossTenantMigrationJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantMigrationJobCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new crossTenantMigrationJob.
     * @param CrossTenantMigrationJob $body The request body
     * @param CrossTenantMigrationJobsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantMigrationJob|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/migrationsroot-post-crosstenantmigrationjobs?view=graph-rest-beta Find more info here
    */
    public function post(CrossTenantMigrationJob $body, ?CrossTenantMigrationJobsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantMigrationJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the crossTenantMigrationJob objects and their properties. By default 20 objects are returned. More can be retrieved through the @odata.nextLink url provided in the response.
     * @param CrossTenantMigrationJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CrossTenantMigrationJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new crossTenantMigrationJob.
     * @param CrossTenantMigrationJob $body The request body
     * @param CrossTenantMigrationJobsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CrossTenantMigrationJob $body, ?CrossTenantMigrationJobsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CrossTenantMigrationJobsRequestBuilder
    */
    public function withUrl(string $rawUrl): CrossTenantMigrationJobsRequestBuilder {
        return new CrossTenantMigrationJobsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
