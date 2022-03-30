<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Messages\Item\EventMessageRequest;

use Microsoft\Graph\Beta\Generated\Users\Item\Messages\Item\EventMessageRequest\Accept\AcceptRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Messages\Item\EventMessageRequest\Decline\DeclineRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Messages\Item\EventMessageRequest\TentativelyAccept\TentativelyAcceptRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

class EventMessageRequestRequestBuilder 
{
    public function accept(): AcceptRequestBuilder {
        return new AcceptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function decline(): DeclineRequestBuilder {
        return new DeclineRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function tentativelyAccept(): TentativelyAcceptRequestBuilder {
        return new TentativelyAcceptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new EventMessageRequestRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user_id}/messages/{message_id}/microsoft.graph.eventMessageRequest';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

}
