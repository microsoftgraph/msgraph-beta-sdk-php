<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\DriveExclusionUnitsBulkAdditionJobs;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DriveExclusionUnitsBulkAdditionJob;
use Microsoft\Graph\Beta\Generated\Models\DriveExclusionUnitsBulkAdditionJobCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\DriveExclusionUnitsBulkAdditionJobs\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\DriveExclusionUnitsBulkAdditionJobs\Item\DriveExclusionUnitsBulkAdditionJobItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the driveExclusionUnitsBulkAdditionJobs property of the microsoft.graph.backupRestoreRoot entity.
*/
class DriveExclusionUnitsBulkAdditionJobsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the driveExclusionUnitsBulkAdditionJobs property of the microsoft.graph.backupRestoreRoot entity.
     * @param string $driveExclusionUnitsBulkAdditionJobId The unique identifier of driveExclusionUnitsBulkAdditionJob
     * @return DriveExclusionUnitsBulkAdditionJobItemRequestBuilder
    */
    public function byDriveExclusionUnitsBulkAdditionJobId(string $driveExclusionUnitsBulkAdditionJobId): DriveExclusionUnitsBulkAdditionJobItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveExclusionUnitsBulkAdditionJob%2Did'] = $driveExclusionUnitsBulkAdditionJobId;
        return new DriveExclusionUnitsBulkAdditionJobItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DriveExclusionUnitsBulkAdditionJobsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/driveExclusionUnitsBulkAdditionJobs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get driveExclusionUnitsBulkAdditionJobs from solutions
     * @param DriveExclusionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveExclusionUnitsBulkAdditionJobCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DriveExclusionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveExclusionUnitsBulkAdditionJobCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to driveExclusionUnitsBulkAdditionJobs for solutions
     * @param DriveExclusionUnitsBulkAdditionJob $body The request body
     * @param DriveExclusionUnitsBulkAdditionJobsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveExclusionUnitsBulkAdditionJob|null>
     * @throws Exception
    */
    public function post(DriveExclusionUnitsBulkAdditionJob $body, ?DriveExclusionUnitsBulkAdditionJobsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveExclusionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get driveExclusionUnitsBulkAdditionJobs from solutions
     * @param DriveExclusionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DriveExclusionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to driveExclusionUnitsBulkAdditionJobs for solutions
     * @param DriveExclusionUnitsBulkAdditionJob $body The request body
     * @param DriveExclusionUnitsBulkAdditionJobsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DriveExclusionUnitsBulkAdditionJob $body, ?DriveExclusionUnitsBulkAdditionJobsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DriveExclusionUnitsBulkAdditionJobsRequestBuilder
    */
    public function withUrl(string $rawUrl): DriveExclusionUnitsBulkAdditionJobsRequestBuilder {
        return new DriveExclusionUnitsBulkAdditionJobsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
