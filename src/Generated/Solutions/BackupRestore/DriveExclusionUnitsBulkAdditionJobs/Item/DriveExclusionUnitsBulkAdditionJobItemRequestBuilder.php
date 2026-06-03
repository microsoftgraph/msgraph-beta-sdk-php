<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\DriveExclusionUnitsBulkAdditionJobs\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DriveExclusionUnitsBulkAdditionJob;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the driveExclusionUnitsBulkAdditionJobs property of the microsoft.graph.backupRestoreRoot entity.
*/
class DriveExclusionUnitsBulkAdditionJobItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DriveExclusionUnitsBulkAdditionJobItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/driveExclusionUnitsBulkAdditionJobs/{driveExclusionUnitsBulkAdditionJob%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property driveExclusionUnitsBulkAdditionJobs for solutions
     * @param DriveExclusionUnitsBulkAdditionJobItemRequestBuilderDel_419e47aa|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?DriveExclusionUnitsBulkAdditionJobItemRequestBuilderDel_419e47aa $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The list of bulk addition jobs for drive exclusion units in the tenant.
     * @param DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGet_d048b8cf|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveExclusionUnitsBulkAdditionJob|null>
     * @throws Exception
    */
    public function get(?DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGet_d048b8cf $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveExclusionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property driveExclusionUnitsBulkAdditionJobs in solutions
     * @param DriveExclusionUnitsBulkAdditionJob $body The request body
     * @param DriveExclusionUnitsBulkAdditionJobItemRequestBuilderPat_28bcb4ca|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveExclusionUnitsBulkAdditionJob|null>
     * @throws Exception
    */
    public function patch(DriveExclusionUnitsBulkAdditionJob $body, ?DriveExclusionUnitsBulkAdditionJobItemRequestBuilderPat_28bcb4ca $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveExclusionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property driveExclusionUnitsBulkAdditionJobs for solutions
     * @param DriveExclusionUnitsBulkAdditionJobItemRequestBuilderDel_419e47aa|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DriveExclusionUnitsBulkAdditionJobItemRequestBuilderDel_419e47aa $requestConfiguration = null): RequestInformation {
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
     * The list of bulk addition jobs for drive exclusion units in the tenant.
     * @param DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGet_d048b8cf|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGet_d048b8cf $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property driveExclusionUnitsBulkAdditionJobs in solutions
     * @param DriveExclusionUnitsBulkAdditionJob $body The request body
     * @param DriveExclusionUnitsBulkAdditionJobItemRequestBuilderPat_28bcb4ca|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DriveExclusionUnitsBulkAdditionJob $body, ?DriveExclusionUnitsBulkAdditionJobItemRequestBuilderPat_28bcb4ca $requestConfiguration = null): RequestInformation {
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
     * @return DriveExclusionUnitsBulkAdditionJobItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DriveExclusionUnitsBulkAdditionJobItemRequestBuilder {
        return new DriveExclusionUnitsBulkAdditionJobItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
