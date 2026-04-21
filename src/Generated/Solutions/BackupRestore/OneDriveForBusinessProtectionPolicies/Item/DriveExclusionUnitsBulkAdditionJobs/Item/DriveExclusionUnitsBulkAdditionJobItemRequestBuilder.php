<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Item\DriveExclusionUnitsBulkAdditionJobs\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DriveExclusionUnitsBulkAdditionJob;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the driveExclusionUnitsBulkAdditionJobs property of the microsoft.graph.oneDriveForBusinessProtectionPolicy entity.
*/
class DriveExclusionUnitsBulkAdditionJobItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DriveExclusionUnitsBulkAdditionJobItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/oneDriveForBusinessProtectionPolicies/{oneDriveForBusinessProtectionPolicy%2Did}/driveExclusionUnitsBulkAdditionJobs/{driveExclusionUnitsBulkAdditionJob%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get driveExclusionUnitsBulkAdditionJobs from solutions
     * @param DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveExclusionUnitsBulkAdditionJob|null>
     * @throws Exception
    */
    public function get(?DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveExclusionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get driveExclusionUnitsBulkAdditionJobs from solutions
     * @param DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DriveExclusionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DriveExclusionUnitsBulkAdditionJobItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DriveExclusionUnitsBulkAdditionJobItemRequestBuilder {
        return new DriveExclusionUnitsBulkAdditionJobItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
