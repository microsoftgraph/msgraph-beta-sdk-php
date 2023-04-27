<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\VppTokens;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\VppTokens\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\VppTokens\GetLicensesForAppWithBundleId\GetLicensesForAppWithBundleIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\VppTokens\Item\VppTokenItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\DeviceAppManagement\VppTokens\SyncLicenseCounts\SyncLicenseCountsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\VppToken;
use Microsoft\Graph\Beta\Generated\Models\VppTokenCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the vppTokens property of the microsoft.graph.deviceAppManagement entity.
*/
class VppTokensRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the syncLicenseCounts method.
    */
    public function syncLicenseCounts(): SyncLicenseCountsRequestBuilder {
        return new SyncLicenseCountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the vppTokens property of the microsoft.graph.deviceAppManagement entity.
     * @param string $vppTokenId Unique identifier of the item
     * @return VppTokenItemRequestBuilder
    */
    public function byVppTokenId(string $vppTokenId): VppTokenItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['vppToken%2Did'] = $vppTokenId;
        return new VppTokenItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new VppTokensRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/vppTokens{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List of Vpp tokens for this organization.
     * @param VppTokensRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?VppTokensRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [VppTokenCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the getLicensesForApp method.
     * @param string $bundleId Usage: bundleId='{bundleId}'
     * @return GetLicensesForAppWithBundleIdRequestBuilder
    */
    public function getLicensesForAppWithBundleId(string $bundleId): GetLicensesForAppWithBundleIdRequestBuilder {
        return new GetLicensesForAppWithBundleIdRequestBuilder($this->pathParameters, $this->requestAdapter, $bundleId);
    }

    /**
     * Create new navigation property to vppTokens for deviceAppManagement
     * @param VppToken $body The request body
     * @param VppTokensRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(VppToken $body, ?VppTokensRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [VppToken::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * List of Vpp tokens for this organization.
     * @param VppTokensRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?VppTokensRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Create new navigation property to vppTokens for deviceAppManagement
     * @param VppToken $body The request body
     * @param VppTokensRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(VppToken $body, ?VppTokensRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
