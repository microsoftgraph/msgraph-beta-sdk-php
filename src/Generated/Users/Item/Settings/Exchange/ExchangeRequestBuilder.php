<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Settings\Exchange;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ExchangeSettings;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the exchange property of the microsoft.graph.userSettings entity.
*/
class ExchangeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ExchangeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/settings/exchange{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of Exchange settings, including mailboxes that belong to a user. Currently, the mailbox types supported are the user's primary and in-place archive. To learn how to get a list of users in a tenant, see List users.
     * @param ExchangeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExchangeSettings|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/usersettings-list-exchange?view=graph-rest-beta Find more info here
    */
    public function get(?ExchangeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExchangeSettings::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of Exchange settings, including mailboxes that belong to a user. Currently, the mailbox types supported are the user's primary and in-place archive. To learn how to get a list of users in a tenant, see List users.
     * @param ExchangeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExchangeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ExchangeRequestBuilder
    */
    public function withUrl(string $rawUrl): ExchangeRequestBuilder {
        return new ExchangeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
