<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\SourceCollections\Item\MicrosoftGraphEdiscoveryEstimateStatistics;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the estimateStatistics method.
*/
class MicrosoftGraphEdiscoveryEstimateStatisticsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphEdiscoveryEstimateStatisticsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/compliance/ediscovery/cases/{case%2Did}/sourceCollections/{sourceCollection%2Did}/microsoft.graph.ediscovery.estimateStatistics');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Run an estimate of the number of emails and documents in the source collection. To learn more about source collections (also known as searches in eDiscovery), see Collect data for a case in Advanced eDiscovery.
     * @param MicrosoftGraphEdiscoveryEstimateStatisticsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/ediscovery-sourcecollection-estimatestatistics?view=graph-rest-beta Find more info here
    */
    public function post(?MicrosoftGraphEdiscoveryEstimateStatisticsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Run an estimate of the number of emails and documents in the source collection. To learn more about source collections (also known as searches in eDiscovery), see Collect data for a case in Advanced eDiscovery.
     * @param MicrosoftGraphEdiscoveryEstimateStatisticsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?MicrosoftGraphEdiscoveryEstimateStatisticsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MicrosoftGraphEdiscoveryEstimateStatisticsRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphEdiscoveryEstimateStatisticsRequestBuilder {
        return new MicrosoftGraphEdiscoveryEstimateStatisticsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
