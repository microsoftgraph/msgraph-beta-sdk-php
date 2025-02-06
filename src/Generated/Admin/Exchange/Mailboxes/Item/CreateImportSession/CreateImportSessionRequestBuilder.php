<?php

namespace Microsoft\Graph\Beta\Generated\Admin\Exchange\Mailboxes\Item\CreateImportSession;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\MailboxItemImportSession;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the createImportSession method.
*/
class CreateImportSessionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CreateImportSessionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/exchange/mailboxes/{mailbox%2Did}/createImportSession');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Create a session to import an Exchange mailbox item using its FastTransfer stream (FTS) format.
     * @param CreateImportSessionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxItemImportSession|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/mailbox-createimportsession?view=graph-rest-beta Find more info here
    */
    public function post(?CreateImportSessionRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxItemImportSession::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a session to import an Exchange mailbox item using its FastTransfer stream (FTS) format.
     * @param CreateImportSessionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?CreateImportSessionRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CreateImportSessionRequestBuilder
    */
    public function withUrl(string $rawUrl): CreateImportSessionRequestBuilder {
        return new CreateImportSessionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
