<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Windows\Updates\Products\Item\MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_b9906865;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getKnownIssuesByTimeRange method. Original name: microsoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWithDaysInPastWithIncludeAllActiveRequestBuilder
*/
class MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_9058882d extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_9058882d and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param int|null $daysInPast Usage: daysInPast={daysInPast}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?int $daysInPast = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/windows/updates/products/{product%2Did}/microsoft.graph.windowsUpdates.getKnownIssuesByTimeRange(daysInPast={daysInPast},includeAllActive=@includeAllActive){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top,includeAllActive*}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['daysInPast'] = $daysInPast;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get known issues related to a particular product based on a specified timeframe in the past.
     * @param MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_8bdf1d68|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetKnownIssuesByTimeRangeWithDaysInPastWithIncludeAllAc_4fdc3333|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/windowsupdates-product-getknownissuesbytimerange?view=graph-rest-beta Find more info here
    */
    public function get(?MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_8bdf1d68 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetKnownIssuesByTimeRangeWithDaysInPastWithIncludeAllAc_4fdc3333::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get known issues related to a particular product based on a specified timeframe in the past.
     * @param MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_8bdf1d68|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_8bdf1d68 $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_9058882d
    */
    public function withUrl(string $rawUrl): MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_9058882d {
        return new MicrosoftGraphWindowsUpdatesGetKnownIssuesByTimeRangeWi_9058882d($rawUrl, $this->requestAdapter);
    }

}
