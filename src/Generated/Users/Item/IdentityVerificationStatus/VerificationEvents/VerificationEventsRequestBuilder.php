<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\IdentityVerificationStatus\VerificationEvents;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\IdentityVerificationEvent;
use Microsoft\Graph\Beta\Generated\Models\IdentityVerificationEventCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Users\Item\IdentityVerificationStatus\VerificationEvents\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\IdentityVerificationStatus\VerificationEvents\Item\IdentityVerificationEventItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the verificationEvents property of the microsoft.graph.identityVerificationStatus entity.
*/
class VerificationEventsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the verificationEvents property of the microsoft.graph.identityVerificationStatus entity.
     * @param string $identityVerificationEventId The unique identifier of identityVerificationEvent
     * @return IdentityVerificationEventItemRequestBuilder
    */
    public function byIdentityVerificationEventId(string $identityVerificationEventId): IdentityVerificationEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityVerificationEvent%2Did'] = $identityVerificationEventId;
        return new IdentityVerificationEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new VerificationEventsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/identityVerificationStatus/verificationEvents{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The user's recent verification events, automatically included when the status is retrieved. Contains up to 10 events, ordered by recency. Older events are removed when the limit is reached.
     * @param VerificationEventsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityVerificationEventCollectionResponse|null>
     * @throws Exception
    */
    public function get(?VerificationEventsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityVerificationEventCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Record an identityVerificationEvent in a user's identityVerificationStatus. The service recomputes the user's aggregate status when it records the event.
     * @param IdentityVerificationEvent $body The request body
     * @param VerificationEventsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityVerificationEvent|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityverificationstatus-post-verificationevents?view=graph-rest-beta Find more info here
    */
    public function post(IdentityVerificationEvent $body, ?VerificationEventsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityVerificationEvent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The user's recent verification events, automatically included when the status is retrieved. Contains up to 10 events, ordered by recency. Older events are removed when the limit is reached.
     * @param VerificationEventsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?VerificationEventsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Record an identityVerificationEvent in a user's identityVerificationStatus. The service recomputes the user's aggregate status when it records the event.
     * @param IdentityVerificationEvent $body The request body
     * @param VerificationEventsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(IdentityVerificationEvent $body, ?VerificationEventsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return VerificationEventsRequestBuilder
    */
    public function withUrl(string $rawUrl): VerificationEventsRequestBuilder {
        return new VerificationEventsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
