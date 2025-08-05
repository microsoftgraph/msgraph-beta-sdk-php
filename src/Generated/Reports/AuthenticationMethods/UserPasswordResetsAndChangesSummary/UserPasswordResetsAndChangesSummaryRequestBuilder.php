<?php

namespace Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UserPasswordResetsAndChangesSummary;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\UserPasswordResetsAndChangesSummary;
use Microsoft\Graph\Beta\Generated\Models\UserPasswordResetsAndChangesSummaryCollectionResponse;
use Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UserPasswordResetsAndChangesSummary\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UserPasswordResetsAndChangesSummary\Item\UserPasswordResetsAndChangesSummaryItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userPasswordResetsAndChangesSummary property of the microsoft.graph.authenticationMethodsRoot entity.
*/
class UserPasswordResetsAndChangesSummaryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userPasswordResetsAndChangesSummary property of the microsoft.graph.authenticationMethodsRoot entity.
     * @param string $userPasswordResetsAndChangesSummaryId The unique identifier of userPasswordResetsAndChangesSummary
     * @return UserPasswordResetsAndChangesSummaryItemRequestBuilder
    */
    public function byUserPasswordResetsAndChangesSummaryId(string $userPasswordResetsAndChangesSummaryId): UserPasswordResetsAndChangesSummaryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userPasswordResetsAndChangesSummary%2Did'] = $userPasswordResetsAndChangesSummaryId;
        return new UserPasswordResetsAndChangesSummaryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserPasswordResetsAndChangesSummaryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/authenticationMethods/userPasswordResetsAndChangesSummary{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Gets a list of password resets and changes that occurred in a given aggregation window as defined in the userPasswordResetsAndChangesSummary object.
     * @param UserPasswordResetsAndChangesSummaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserPasswordResetsAndChangesSummaryCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationmethodsroot-list-userpasswordresetsandchangessummary?view=graph-rest-beta Find more info here
    */
    public function get(?UserPasswordResetsAndChangesSummaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserPasswordResetsAndChangesSummaryCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to userPasswordResetsAndChangesSummary for reports
     * @param UserPasswordResetsAndChangesSummary $body The request body
     * @param UserPasswordResetsAndChangesSummaryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserPasswordResetsAndChangesSummary|null>
     * @throws Exception
    */
    public function post(UserPasswordResetsAndChangesSummary $body, ?UserPasswordResetsAndChangesSummaryRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserPasswordResetsAndChangesSummary::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Gets a list of password resets and changes that occurred in a given aggregation window as defined in the userPasswordResetsAndChangesSummary object.
     * @param UserPasswordResetsAndChangesSummaryRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserPasswordResetsAndChangesSummaryRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to userPasswordResetsAndChangesSummary for reports
     * @param UserPasswordResetsAndChangesSummary $body The request body
     * @param UserPasswordResetsAndChangesSummaryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserPasswordResetsAndChangesSummary $body, ?UserPasswordResetsAndChangesSummaryRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserPasswordResetsAndChangesSummaryRequestBuilder
    */
    public function withUrl(string $rawUrl): UserPasswordResetsAndChangesSummaryRequestBuilder {
        return new UserPasswordResetsAndChangesSummaryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
