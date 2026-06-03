<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\DriveExclusionUnits;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DriveExclusionUnit;
use Microsoft\Graph\Beta\Generated\Models\DriveExclusionUnitCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\DriveExclusionUnits\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\DriveExclusionUnits\Item\DriveExclusionUnitItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the driveExclusionUnits property of the microsoft.graph.backupRestoreRoot entity.
*/
class DriveExclusionUnitsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the driveExclusionUnits property of the microsoft.graph.backupRestoreRoot entity.
     * @param string $driveExclusionUnitId The unique identifier of driveExclusionUnit
     * @return DriveExclusionUnitItemRequestBuilder
    */
    public function byDriveExclusionUnitId(string $driveExclusionUnitId): DriveExclusionUnitItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveExclusionUnit%2Did'] = $driveExclusionUnitId;
        return new DriveExclusionUnitItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DriveExclusionUnitsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of drive exclusion units in the tenant.
     * @param DriveExclusionUnitsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveExclusionUnitCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DriveExclusionUnitsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveExclusionUnitCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to driveExclusionUnits for solutions
     * @param DriveExclusionUnit $body The request body
     * @param DriveExclusionUnitsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveExclusionUnit|null>
     * @throws Exception
    */
    public function post(DriveExclusionUnit $body, ?DriveExclusionUnitsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveExclusionUnit::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of drive exclusion units in the tenant.
     * @param DriveExclusionUnitsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DriveExclusionUnitsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to driveExclusionUnits for solutions
     * @param DriveExclusionUnit $body The request body
     * @param DriveExclusionUnitsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DriveExclusionUnit $body, ?DriveExclusionUnitsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DriveExclusionUnitsRequestBuilder
    */
    public function withUrl(string $rawUrl): DriveExclusionUnitsRequestBuilder {
        return new DriveExclusionUnitsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
