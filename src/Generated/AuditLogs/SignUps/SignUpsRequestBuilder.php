<?php

namespace Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignUps;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignUps\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\AuditLogs\SignUps\Item\SelfServiceSignUpItemRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\SelfServiceSignUp;
use Microsoft\\Graph\\Beta\\Generated\Models\SelfServiceSignUpCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the signUps property of the microsoft.graph.auditLogRoot entity.
*/
class SignUpsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the signUps property of the microsoft.graph.auditLogRoot entity.
     * @param string $selfServiceSignUpId The unique identifier of selfServiceSignUp
     * @return SelfServiceSignUpItemRequestBuilder
    */
    public function bySelfServiceSignUpId(string $selfServiceSignUpId): SelfServiceSignUpItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['selfServiceSignUp%2Did'] = $selfServiceSignUpId;
        return new SelfServiceSignUpItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SignUpsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auditLogs/signUps{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the Microsoft Entra External ID user selfServiceSignUps events for your tenant.  The maximum and default page size is 1,000 objects and by default, the most recent sign-ups are returned first. Only sign-up events that occurred within the Microsoft Entra ID default retention period are available.
     * @param SignUpsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SelfServiceSignUpCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/auditlogroot-list-signups?view=graph-rest-beta Find more info here
    */
    public function get(?SignUpsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SelfServiceSignUpCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to signUps for auditLogs
     * @param SelfServiceSignUp $body The request body
     * @param SignUpsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SelfServiceSignUp|null>
     * @throws Exception
    */
    public function post(SelfServiceSignUp $body, ?SignUpsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SelfServiceSignUp::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the Microsoft Entra External ID user selfServiceSignUps events for your tenant.  The maximum and default page size is 1,000 objects and by default, the most recent sign-ups are returned first. Only sign-up events that occurred within the Microsoft Entra ID default retention period are available.
     * @param SignUpsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SignUpsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to signUps for auditLogs
     * @param SelfServiceSignUp $body The request body
     * @param SignUpsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SelfServiceSignUp $body, ?SignUpsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SignUpsRequestBuilder
    */
    public function withUrl(string $rawUrl): SignUpsRequestBuilder {
        return new SignUpsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
