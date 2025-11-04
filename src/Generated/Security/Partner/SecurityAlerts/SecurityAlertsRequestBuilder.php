<?php

namespace Microsoft\\Graph\\Beta\\Generated\Security\Partner\SecurityAlerts;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Beta\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Beta\\Generated\Models\Partner\Security\PartnerSecurityAlert;
use Microsoft\\Graph\\Beta\\Generated\Models\Partner\Security\PartnerSecurityAlertCollectionResponse;
use Microsoft\\Graph\\Beta\\Generated\Security\Partner\SecurityAlerts\Count\CountRequestBuilder;
use Microsoft\\Graph\\Beta\\Generated\Security\Partner\SecurityAlerts\Item\PartnerSecurityAlertItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the securityAlerts property of the microsoft.graph.partner.security.partnerSecurity entity.
*/
class SecurityAlertsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the securityAlerts property of the microsoft.graph.partner.security.partnerSecurity entity.
     * @param string $partnerSecurityAlertId The unique identifier of partnerSecurityAlert
     * @return PartnerSecurityAlertItemRequestBuilder
    */
    public function byPartnerSecurityAlertId(string $partnerSecurityAlertId): PartnerSecurityAlertItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['partnerSecurityAlert%2Did'] = $partnerSecurityAlertId;
        return new PartnerSecurityAlertItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SecurityAlertsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/partner/securityAlerts{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the partnerSecurityAlert objects and their properties.
     * @param SecurityAlertsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PartnerSecurityAlertCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/partner-security-partnersecurityalert-list-securityalerts?view=graph-rest-beta Find more info here
    */
    public function get(?SecurityAlertsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PartnerSecurityAlertCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to securityAlerts for security
     * @param PartnerSecurityAlert $body The request body
     * @param SecurityAlertsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PartnerSecurityAlert|null>
     * @throws Exception
    */
    public function post(PartnerSecurityAlert $body, ?SecurityAlertsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PartnerSecurityAlert::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the partnerSecurityAlert objects and their properties.
     * @param SecurityAlertsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SecurityAlertsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to securityAlerts for security
     * @param PartnerSecurityAlert $body The request body
     * @param SecurityAlertsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PartnerSecurityAlert $body, ?SecurityAlertsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SecurityAlertsRequestBuilder
    */
    public function withUrl(string $rawUrl): SecurityAlertsRequestBuilder {
        return new SecurityAlertsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
