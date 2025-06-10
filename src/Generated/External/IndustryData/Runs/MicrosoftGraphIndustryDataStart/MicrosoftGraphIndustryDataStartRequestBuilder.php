<?php

namespace Microsoft\Graph\Beta\Generated\External\IndustryData\Runs\MicrosoftGraphIndustryDataStart;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the start method.
*/
class MicrosoftGraphIndustryDataStartRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphIndustryDataStartRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/external/industryData/runs/microsoft.graph.industryData.start');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Start a new industryDataRun. Industry data automates a run every 12 hours; however, users can use the start action to perform an on-demand run. The industry data service throttles the start of runs, allowing up to five successful runs every 12 hours. An on-demand run causes the next system-scheduled run to be skipped if it is set to run within the next 10 hours.
     * @param MicrosoftGraphIndustryDataStartRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(?MicrosoftGraphIndustryDataStartRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Start a new industryDataRun. Industry data automates a run every 12 hours; however, users can use the start action to perform an on-demand run. The industry data service throttles the start of runs, allowing up to five successful runs every 12 hours. An on-demand run causes the next system-scheduled run to be skipped if it is set to run within the next 10 hours.
     * @param MicrosoftGraphIndustryDataStartRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?MicrosoftGraphIndustryDataStartRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphIndustryDataStartRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphIndustryDataStartRequestBuilder {
        return new MicrosoftGraphIndustryDataStartRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
