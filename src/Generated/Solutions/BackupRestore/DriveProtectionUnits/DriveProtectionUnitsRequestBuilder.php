<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\DriveProtectionUnits;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\DriveProtectionUnit;
use Microsoft\Graph\Beta\Generated\Models\DriveProtectionUnitCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\DriveProtectionUnits\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\DriveProtectionUnits\Item\DriveProtectionUnitItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the driveProtectionUnits property of the microsoft.graph.backupRestoreRoot entity.
*/
class DriveProtectionUnitsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the driveProtectionUnits property of the microsoft.graph.backupRestoreRoot entity.
     * @param string $driveProtectionUnitId The unique identifier of driveProtectionUnit
     * @return DriveProtectionUnitItemRequestBuilder
    */
    public function byDriveProtectionUnitId(string $driveProtectionUnitId): DriveProtectionUnitItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveProtectionUnit%2Did'] = $driveProtectionUnitId;
        return new DriveProtectionUnitItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DriveProtectionUnitsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/driveProtectionUnits{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of drive protection units in the tenant.
     * @param DriveProtectionUnitsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveProtectionUnitCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DriveProtectionUnitsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveProtectionUnitCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to driveProtectionUnits for solutions
     * @param DriveProtectionUnit $body The request body
     * @param DriveProtectionUnitsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveProtectionUnit|null>
     * @throws Exception
    */
    public function post(DriveProtectionUnit $body, ?DriveProtectionUnitsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveProtectionUnit::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of drive protection units in the tenant.
     * @param DriveProtectionUnitsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DriveProtectionUnitsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to driveProtectionUnits for solutions
     * @param DriveProtectionUnit $body The request body
     * @param DriveProtectionUnitsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DriveProtectionUnit $body, ?DriveProtectionUnitsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DriveProtectionUnitsRequestBuilder
    */
    public function withUrl(string $rawUrl): DriveProtectionUnitsRequestBuilder {
        return new DriveProtectionUnitsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
