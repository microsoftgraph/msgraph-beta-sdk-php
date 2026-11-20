<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\IdentityVerificationStatus;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\IdentityVerificationStatus;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Users\Item\IdentityVerificationStatus\VerificationEvents\VerificationEventsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the identityVerificationStatus property of the microsoft.graph.user entity.
*/
class IdentityVerificationStatusRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the verificationEvents property of the microsoft.graph.identityVerificationStatus entity.
    */
    public function verificationEvents(): VerificationEventsRequestBuilder {
        return new VerificationEventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new IdentityVerificationStatusRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/identityVerificationStatus{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Read a user's identityVerificationStatus, including recent verification events. The response automatically includes up to 10 events, ordered by recency.
     * @param IdentityVerificationStatusRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityVerificationStatus|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityverificationstatus-get?view=graph-rest-beta Find more info here
    */
    public function get(?IdentityVerificationStatusRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityVerificationStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property identityVerificationStatus in users
     * @param IdentityVerificationStatus $body The request body
     * @param IdentityVerificationStatusRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityVerificationStatus|null>
     * @throws Exception
    */
    public function patch(IdentityVerificationStatus $body, ?IdentityVerificationStatusRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityVerificationStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Read a user's identityVerificationStatus, including recent verification events. The response automatically includes up to 10 events, ordered by recency.
     * @param IdentityVerificationStatusRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IdentityVerificationStatusRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property identityVerificationStatus in users
     * @param IdentityVerificationStatus $body The request body
     * @param IdentityVerificationStatusRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(IdentityVerificationStatus $body, ?IdentityVerificationStatusRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return IdentityVerificationStatusRequestBuilder
    */
    public function withUrl(string $rawUrl): IdentityVerificationStatusRequestBuilder {
        return new IdentityVerificationStatusRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
