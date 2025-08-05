<?php

namespace Microsoft\Graph\Beta\Generated\Reports\AuthenticationMethods\UserSignInsByAuthMethodSummaryWithPeriod;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the userSignInsByAuthMethodSummary method.
*/
class UserSignInsByAuthMethodSummaryWithPeriodRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UserSignInsByAuthMethodSummaryWithPeriodRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $period Usage: period='{period}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $period = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/authenticationMethods/userSignInsByAuthMethodSummary(period=\'{period}\'){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['period'] = $period;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Gets a list of the number of successful sign ins for each authentication method that is available.
     * @param UserSignInsByAuthMethodSummaryWithPeriodRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserSignInsByAuthMethodSummaryWithPeriodGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationmethodsroot-usersigninsbyauthmethodsummary?view=graph-rest-beta Find more info here
    */
    public function get(?UserSignInsByAuthMethodSummaryWithPeriodRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserSignInsByAuthMethodSummaryWithPeriodGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Gets a list of the number of successful sign ins for each authentication method that is available.
     * @param UserSignInsByAuthMethodSummaryWithPeriodRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserSignInsByAuthMethodSummaryWithPeriodRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UserSignInsByAuthMethodSummaryWithPeriodRequestBuilder
    */
    public function withUrl(string $rawUrl): UserSignInsByAuthMethodSummaryWithPeriodRequestBuilder {
        return new UserSignInsByAuthMethodSummaryWithPeriodRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
