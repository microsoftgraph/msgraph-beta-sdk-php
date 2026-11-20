<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\IdentityVerificationStatus\VerificationEvents\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\IdentityVerificationEvent;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the verificationEvents property of the microsoft.graph.identityVerificationStatus entity.
*/
class IdentityVerificationEventItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new IdentityVerificationEventItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/identityVerificationStatus/verificationEvents/{identityVerificationEvent%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Remove an identityVerificationEvent record from a user's verification history. The service recomputes the user's aggregate verification status after removing the event. This operation removes the record for administrative cleanup; it doesn't change sign-in access controls.
     * @param IdentityVerificationEventItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityverificationevent-delete?view=graph-rest-beta Find more info here
    */
    public function delete(?IdentityVerificationEventItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The user's recent verification events, automatically included when the status is retrieved. Contains up to 10 events, ordered by recency. Older events are removed when the limit is reached.
     * @param IdentityVerificationEventItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityVerificationEvent|null>
     * @throws Exception
    */
    public function get(?IdentityVerificationEventItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityVerificationEvent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Apply or update the administrative override reason on an identityVerificationEvent. Only overrideDetails.reason can be updated. The service sets actorType, actorId, and overriddenDateTime from the caller's identity on each successful update. This operation doesn't change the verification facts, lifecycle state, or the user's aggregate verification status.
     * @param IdentityVerificationEvent $body The request body
     * @param IdentityVerificationEventItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityVerificationEvent|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityverificationevent-update?view=graph-rest-beta Find more info here
    */
    public function patch(IdentityVerificationEvent $body, ?IdentityVerificationEventItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityVerificationEvent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Remove an identityVerificationEvent record from a user's verification history. The service recomputes the user's aggregate verification status after removing the event. This operation removes the record for administrative cleanup; it doesn't change sign-in access controls.
     * @param IdentityVerificationEventItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?IdentityVerificationEventItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * The user's recent verification events, automatically included when the status is retrieved. Contains up to 10 events, ordered by recency. Older events are removed when the limit is reached.
     * @param IdentityVerificationEventItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IdentityVerificationEventItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Apply or update the administrative override reason on an identityVerificationEvent. Only overrideDetails.reason can be updated. The service sets actorType, actorId, and overriddenDateTime from the caller's identity on each successful update. This operation doesn't change the verification facts, lifecycle state, or the user's aggregate verification status.
     * @param IdentityVerificationEvent $body The request body
     * @param IdentityVerificationEventItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(IdentityVerificationEvent $body, ?IdentityVerificationEventItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return IdentityVerificationEventItemRequestBuilder
    */
    public function withUrl(string $rawUrl): IdentityVerificationEventItemRequestBuilder {
        return new IdentityVerificationEventItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
