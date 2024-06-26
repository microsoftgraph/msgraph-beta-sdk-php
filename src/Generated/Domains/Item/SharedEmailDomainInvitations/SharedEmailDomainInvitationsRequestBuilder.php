<?php

namespace Microsoft\Graph\Beta\Generated\Domains\Item\SharedEmailDomainInvitations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Domains\Item\SharedEmailDomainInvitations\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\Item\SharedEmailDomainInvitations\Item\SharedEmailDomainInvitationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SharedEmailDomainInvitation;
use Microsoft\Graph\Beta\Generated\Models\SharedEmailDomainInvitationCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sharedEmailDomainInvitations property of the microsoft.graph.domain entity.
*/
class SharedEmailDomainInvitationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sharedEmailDomainInvitations property of the microsoft.graph.domain entity.
     * @param string $sharedEmailDomainInvitationId The unique identifier of sharedEmailDomainInvitation
     * @return SharedEmailDomainInvitationItemRequestBuilder
    */
    public function bySharedEmailDomainInvitationId(string $sharedEmailDomainInvitationId): SharedEmailDomainInvitationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharedEmailDomainInvitation%2Did'] = $sharedEmailDomainInvitationId;
        return new SharedEmailDomainInvitationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SharedEmailDomainInvitationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/domains/{domain%2Did}/sharedEmailDomainInvitations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get sharedEmailDomainInvitations from domains
     * @param SharedEmailDomainInvitationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharedEmailDomainInvitationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?SharedEmailDomainInvitationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharedEmailDomainInvitationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to sharedEmailDomainInvitations for domains
     * @param SharedEmailDomainInvitation $body The request body
     * @param SharedEmailDomainInvitationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharedEmailDomainInvitation|null>
     * @throws Exception
    */
    public function post(SharedEmailDomainInvitation $body, ?SharedEmailDomainInvitationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharedEmailDomainInvitation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get sharedEmailDomainInvitations from domains
     * @param SharedEmailDomainInvitationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SharedEmailDomainInvitationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to sharedEmailDomainInvitations for domains
     * @param SharedEmailDomainInvitation $body The request body
     * @param SharedEmailDomainInvitationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SharedEmailDomainInvitation $body, ?SharedEmailDomainInvitationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SharedEmailDomainInvitationsRequestBuilder
    */
    public function withUrl(string $rawUrl): SharedEmailDomainInvitationsRequestBuilder {
        return new SharedEmailDomainInvitationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
