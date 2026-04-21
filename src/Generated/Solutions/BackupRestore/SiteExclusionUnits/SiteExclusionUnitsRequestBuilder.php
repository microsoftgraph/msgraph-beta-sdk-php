<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\SiteExclusionUnits;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SiteExclusionUnit;
use Microsoft\Graph\Beta\Generated\Models\SiteExclusionUnitCollectionResponse;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\SiteExclusionUnits\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Solutions\BackupRestore\SiteExclusionUnits\Item\SiteExclusionUnitItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the siteExclusionUnits property of the microsoft.graph.backupRestoreRoot entity.
*/
class SiteExclusionUnitsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteExclusionUnits property of the microsoft.graph.backupRestoreRoot entity.
     * @param string $siteExclusionUnitId The unique identifier of siteExclusionUnit
     * @return SiteExclusionUnitItemRequestBuilder
    */
    public function bySiteExclusionUnitId(string $siteExclusionUnitId): SiteExclusionUnitItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['siteExclusionUnit%2Did'] = $siteExclusionUnitId;
        return new SiteExclusionUnitItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SiteExclusionUnitsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/siteExclusionUnits{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get siteExclusionUnits from solutions
     * @param SiteExclusionUnitsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SiteExclusionUnitCollectionResponse|null>
     * @throws Exception
    */
    public function get(?SiteExclusionUnitsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SiteExclusionUnitCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to siteExclusionUnits for solutions
     * @param SiteExclusionUnit $body The request body
     * @param SiteExclusionUnitsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SiteExclusionUnit|null>
     * @throws Exception
    */
    public function post(SiteExclusionUnit $body, ?SiteExclusionUnitsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SiteExclusionUnit::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get siteExclusionUnits from solutions
     * @param SiteExclusionUnitsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SiteExclusionUnitsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to siteExclusionUnits for solutions
     * @param SiteExclusionUnit $body The request body
     * @param SiteExclusionUnitsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SiteExclusionUnit $body, ?SiteExclusionUnitsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SiteExclusionUnitsRequestBuilder
    */
    public function withUrl(string $rawUrl): SiteExclusionUnitsRequestBuilder {
        return new SiteExclusionUnitsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
