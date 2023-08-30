<?php

namespace Microsoft\Graph\Beta\Generated\Reports\DailyPrintUsageSummariesByPrinter;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PrintUsageByPrinter;
use Microsoft\Graph\Beta\Generated\Models\PrintUsageByPrinterCollectionResponse;
use Microsoft\Graph\Beta\Generated\Reports\DailyPrintUsageSummariesByPrinter\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\DailyPrintUsageSummariesByPrinter\Item\PrintUsageByPrinterItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the dailyPrintUsageSummariesByPrinter property of the microsoft.graph.reportRoot entity.
*/
class DailyPrintUsageSummariesByPrinterRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dailyPrintUsageSummariesByPrinter property of the microsoft.graph.reportRoot entity.
     * @param string $printUsageByPrinterId The unique identifier of printUsageByPrinter
     * @return PrintUsageByPrinterItemRequestBuilder
    */
    public function byPrintUsageByPrinterId(string $printUsageByPrinterId): PrintUsageByPrinterItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printUsageByPrinter%2Did'] = $printUsageByPrinterId;
        return new PrintUsageByPrinterItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DailyPrintUsageSummariesByPrinterRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/dailyPrintUsageSummariesByPrinter{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get dailyPrintUsageSummariesByPrinter from reports
     * @param DailyPrintUsageSummariesByPrinterRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?DailyPrintUsageSummariesByPrinterRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PrintUsageByPrinterCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to dailyPrintUsageSummariesByPrinter for reports
     * @param PrintUsageByPrinter $body The request body
     * @param DailyPrintUsageSummariesByPrinterRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(PrintUsageByPrinter $body, ?DailyPrintUsageSummariesByPrinterRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [PrintUsageByPrinter::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get dailyPrintUsageSummariesByPrinter from reports
     * @param DailyPrintUsageSummariesByPrinterRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DailyPrintUsageSummariesByPrinterRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to dailyPrintUsageSummariesByPrinter for reports
     * @param PrintUsageByPrinter $body The request body
     * @param DailyPrintUsageSummariesByPrinterRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PrintUsageByPrinter $body, ?DailyPrintUsageSummariesByPrinterRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return DailyPrintUsageSummariesByPrinterRequestBuilder
    */
    public function withUrl(string $rawUrl): DailyPrintUsageSummariesByPrinterRequestBuilder {
        return new DailyPrintUsageSummariesByPrinterRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
