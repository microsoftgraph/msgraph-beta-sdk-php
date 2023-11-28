<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\LegalHolds\Item\UserSources;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\LegalHolds\Item\UserSources\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\LegalHolds\Item\UserSources\Item\UserSourceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\UserSource;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\UserSourceCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userSources property of the microsoft.graph.ediscovery.legalHold entity.
*/
class UserSourcesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userSources property of the microsoft.graph.ediscovery.legalHold entity.
     * @param string $userSourceId The unique identifier of userSource
     * @return UserSourceItemRequestBuilder
    */
    public function byUserSourceId(string $userSourceId): UserSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userSource%2Did'] = $userSourceId;
        return new UserSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserSourcesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/compliance/ediscovery/cases/{case%2Did}/legalHolds/{legalHold%2Did}/userSources{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the list of userSource objects associated with a legal hold.
     * @param UserSourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserSourceCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/ediscovery-legalhold-list-usersources?view=graph-rest-1.0 Find more info here
    */
    public function get(?UserSourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserSourceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Adds a userSource to a legalHold object.
     * @param UserSource $body The request body
     * @param UserSourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserSource|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/ediscovery-legalhold-post-usersources?view=graph-rest-1.0 Find more info here
    */
    public function post(UserSource $body, ?UserSourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserSource::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the list of userSource objects associated with a legal hold.
     * @param UserSourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserSourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Adds a userSource to a legalHold object.
     * @param UserSource $body The request body
     * @param UserSourcesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserSource $body, ?UserSourcesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserSourcesRequestBuilder
    */
    public function withUrl(string $rawUrl): UserSourcesRequestBuilder {
        return new UserSourcesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
