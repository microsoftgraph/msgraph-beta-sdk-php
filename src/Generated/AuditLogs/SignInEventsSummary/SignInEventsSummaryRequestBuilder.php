<?php

namespace Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignInEventsSummary;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignInEventsSummary\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignInEventsSummary\Item\SignInEventsActivityItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\SignInEventsActivity;
use Microsoft\\Graph\\Beta\\Generated\Models\SignInEventsActivityCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the signInEventsSummary property of the microsoft.graph.auditLogRoot entity.
*/
class SignInEventsSummaryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the signInEventsSummary property of the microsoft.graph.auditLogRoot entity.
     * @param string $signInEventsActivityId The unique identifier of signInEventsActivity
     * @return SignInEventsActivityItemRequestBuilder
    */
    public function bySignInEventsActivityId(string $signInEventsActivityId): SignInEventsActivityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['signInEventsActivity%2Did'] = $signInEventsActivityId;
        return new SignInEventsActivityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SignInEventsSummaryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auditLogs/signInEventsSummary{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the number of signin events for a specific day as defined in the signInEventsActivity object.
     * @param SignInEventsSummaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SignInEventsActivityCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/auditlogroot-list-signineventssummary?view=graph-rest-beta Find more info here
    */
    public function get(?SignInEventsSummaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SignInEventsActivityCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to signInEventsSummary for auditLogs
     * @param SignInEventsActivity $body The request body
     * @param SignInEventsSummaryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SignInEventsActivity|null>
     * @throws Exception
    */
    public function post(SignInEventsActivity $body, ?SignInEventsSummaryRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SignInEventsActivity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the number of signin events for a specific day as defined in the signInEventsActivity object.
     * @param SignInEventsSummaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SignInEventsSummaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to signInEventsSummary for auditLogs
     * @param SignInEventsActivity $body The request body
     * @param SignInEventsSummaryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SignInEventsActivity $body, ?SignInEventsSummaryRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SignInEventsSummaryRequestBuilder
    */
    public function withUrl(string $rawUrl): SignInEventsSummaryRequestBuilder {
        return new SignInEventsSummaryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
