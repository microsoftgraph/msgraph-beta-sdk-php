<?php

namespace Microsoft\Graph\Beta\Generated\Directory\Recovery\Jobs\Item\MicrosoftGraphEntraRecoveryServicesCancel;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the cancel method.
*/
class MicrosoftGraphEntraRecoveryServicesCancelRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphEntraRecoveryServicesCancelRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/recovery/jobs/{recoveryJobBase%2Did}/microsoft.graph.entraRecoveryServices.cancel');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Cancel a running recoveryJobBase object (either a preview or recovery job). The job must be in a non-terminal state (initialized, calculating, loadingData, or running). After cancellation, the job status changes to abandoned.
     * @param MicrosoftGraphEntraRecoveryServicesCancelRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/entrarecoveryservices-recoveryjobbase-cancel?view=graph-rest-beta Find more info here
    */
    public function post(?MicrosoftGraphEntraRecoveryServicesCancelRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Cancel a running recoveryJobBase object (either a preview or recovery job). The job must be in a non-terminal state (initialized, calculating, loadingData, or running). After cancellation, the job status changes to abandoned.
     * @param MicrosoftGraphEntraRecoveryServicesCancelRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?MicrosoftGraphEntraRecoveryServicesCancelRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphEntraRecoveryServicesCancelRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphEntraRecoveryServicesCancelRequestBuilder {
        return new MicrosoftGraphEntraRecoveryServicesCancelRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
