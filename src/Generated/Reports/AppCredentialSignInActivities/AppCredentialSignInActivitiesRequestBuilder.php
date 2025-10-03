<?php

namespace Microsoft\\Graph\\Beta\\Generated\Reports\AppCredentialSignInActivities;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\AppCredentialSignInActivity;
use Microsoft\\Graph\\Beta\\Generated\Models\AppCredentialSignInActivityCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Reports\AppCredentialSignInActivities\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Reports\AppCredentialSignInActivities\Item\AppCredentialSignInActivityItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the appCredentialSignInActivities property of the microsoft.graph.reportRoot entity.
*/
class AppCredentialSignInActivitiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appCredentialSignInActivities property of the microsoft.graph.reportRoot entity.
     * @param string $appCredentialSignInActivityId The unique identifier of appCredentialSignInActivity
     * @return AppCredentialSignInActivityItemRequestBuilder
    */
    public function byAppCredentialSignInActivityId(string $appCredentialSignInActivityId): AppCredentialSignInActivityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appCredentialSignInActivity%2Did'] = $appCredentialSignInActivityId;
        return new AppCredentialSignInActivityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AppCredentialSignInActivitiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/appCredentialSignInActivities{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of appCredentialSignInActivity objects that contains recent activity of application credentials.
     * @param AppCredentialSignInActivitiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AppCredentialSignInActivityCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reportroot-list-appcredentialsigninactivities?view=graph-rest-beta Find more info here
    */
    public function get(?AppCredentialSignInActivitiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AppCredentialSignInActivityCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to appCredentialSignInActivities for reports
     * @param AppCredentialSignInActivity $body The request body
     * @param AppCredentialSignInActivitiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AppCredentialSignInActivity|null>
     * @throws Exception
    */
    public function post(AppCredentialSignInActivity $body, ?AppCredentialSignInActivitiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AppCredentialSignInActivity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of appCredentialSignInActivity objects that contains recent activity of application credentials.
     * @param AppCredentialSignInActivitiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AppCredentialSignInActivitiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to appCredentialSignInActivities for reports
     * @param AppCredentialSignInActivity $body The request body
     * @param AppCredentialSignInActivitiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AppCredentialSignInActivity $body, ?AppCredentialSignInActivitiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AppCredentialSignInActivitiesRequestBuilder
    */
    public function withUrl(string $rawUrl): AppCredentialSignInActivitiesRequestBuilder {
        return new AppCredentialSignInActivitiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
