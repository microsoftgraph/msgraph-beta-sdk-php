<?php

namespace Microsoft\Graph\Beta\Generated\AuditLogs\SignInEventsAppSummary;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\AuditLogs\SignInEventsAppSummary\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuditLogs\SignInEventsAppSummary\Item\SignInEventsAppActivityAppItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SignInEventsAppActivity;
use Microsoft\Graph\Beta\Generated\Models\SignInEventsAppActivityCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the signInEventsAppSummary property of the microsoft.graph.auditLogRoot entity.
*/
class SignInEventsAppSummaryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the signInEventsAppSummary property of the microsoft.graph.auditLogRoot entity.
     * @param string $signInEventsAppActivityAppId The unique identifier of signInEventsAppActivity
     * @return SignInEventsAppActivityAppItemRequestBuilder
    */
    public function bySignInEventsAppActivityAppId(string $signInEventsAppActivityAppId): SignInEventsAppActivityAppItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['signInEventsAppActivity%2DappId'] = $signInEventsAppActivityAppId;
        return new SignInEventsAppActivityAppItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SignInEventsAppSummaryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auditLogs/signInEventsAppSummary{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of applications and their number of sign-in events in the past 30 days as defined in the signInEventsAppActivity object.
     * @param SignInEventsAppSummaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SignInEventsAppActivityCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/auditlogroot-list-signineventsappsummary?view=graph-rest-beta Find more info here
    */
    public function get(?SignInEventsAppSummaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SignInEventsAppActivityCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to signInEventsAppSummary for auditLogs
     * @param SignInEventsAppActivity $body The request body
     * @param SignInEventsAppSummaryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SignInEventsAppActivity|null>
     * @throws Exception
    */
    public function post(SignInEventsAppActivity $body, ?SignInEventsAppSummaryRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SignInEventsAppActivity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of applications and their number of sign-in events in the past 30 days as defined in the signInEventsAppActivity object.
     * @param SignInEventsAppSummaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SignInEventsAppSummaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to signInEventsAppSummary for auditLogs
     * @param SignInEventsAppActivity $body The request body
     * @param SignInEventsAppSummaryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SignInEventsAppActivity $body, ?SignInEventsAppSummaryRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SignInEventsAppSummaryRequestBuilder
    */
    public function withUrl(string $rawUrl): SignInEventsAppSummaryRequestBuilder {
        return new SignInEventsAppSummaryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
