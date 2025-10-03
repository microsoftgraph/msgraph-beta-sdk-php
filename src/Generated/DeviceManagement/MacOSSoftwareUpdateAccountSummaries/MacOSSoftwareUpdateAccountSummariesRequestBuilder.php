<?php

namespace Microsoft\\Graph\\Beta\\Generated\DeviceManagement\MacOSSoftwareUpdateAccountSummaries;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\MacOSSoftwareUpdateAccountSummaries\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\DeviceManagement\MacOSSoftwareUpdateAccountSummaries\Item\MacOSSoftwareUpdateAccountSummaryItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\MacOSSoftwareUpdateAccountSummary;
use Microsoft\\Graph\\Beta\\Generated\Models\MacOSSoftwareUpdateAccountSummaryCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the macOSSoftwareUpdateAccountSummaries property of the microsoft.graph.deviceManagement entity.
*/
class MacOSSoftwareUpdateAccountSummariesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the macOSSoftwareUpdateAccountSummaries property of the microsoft.graph.deviceManagement entity.
     * @param string $macOSSoftwareUpdateAccountSummaryId The unique identifier of macOSSoftwareUpdateAccountSummary
     * @return MacOSSoftwareUpdateAccountSummaryItemRequestBuilder
    */
    public function byMacOSSoftwareUpdateAccountSummaryId(string $macOSSoftwareUpdateAccountSummaryId): MacOSSoftwareUpdateAccountSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['macOSSoftwareUpdateAccountSummary%2Did'] = $macOSSoftwareUpdateAccountSummaryId;
        return new MacOSSoftwareUpdateAccountSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MacOSSoftwareUpdateAccountSummariesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/macOSSoftwareUpdateAccountSummaries{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The MacOS software update account summaries for this account.
     * @param MacOSSoftwareUpdateAccountSummariesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MacOSSoftwareUpdateAccountSummaryCollectionResponse|null>
     * @throws Exception
    */
    public function get(?MacOSSoftwareUpdateAccountSummariesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MacOSSoftwareUpdateAccountSummaryCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to macOSSoftwareUpdateAccountSummaries for deviceManagement
     * @param MacOSSoftwareUpdateAccountSummary $body The request body
     * @param MacOSSoftwareUpdateAccountSummariesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MacOSSoftwareUpdateAccountSummary|null>
     * @throws Exception
    */
    public function post(MacOSSoftwareUpdateAccountSummary $body, ?MacOSSoftwareUpdateAccountSummariesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MacOSSoftwareUpdateAccountSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The MacOS software update account summaries for this account.
     * @param MacOSSoftwareUpdateAccountSummariesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MacOSSoftwareUpdateAccountSummariesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to macOSSoftwareUpdateAccountSummaries for deviceManagement
     * @param MacOSSoftwareUpdateAccountSummary $body The request body
     * @param MacOSSoftwareUpdateAccountSummariesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MacOSSoftwareUpdateAccountSummary $body, ?MacOSSoftwareUpdateAccountSummariesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MacOSSoftwareUpdateAccountSummariesRequestBuilder
    */
    public function withUrl(string $rawUrl): MacOSSoftwareUpdateAccountSummariesRequestBuilder {
        return new MacOSSoftwareUpdateAccountSummariesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
