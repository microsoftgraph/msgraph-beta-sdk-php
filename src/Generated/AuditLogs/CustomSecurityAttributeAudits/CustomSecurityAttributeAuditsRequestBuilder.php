<?php

namespace Microsoft\Graph\Beta\Generated\AuditLogs\CustomSecurityAttributeAudits;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\AuditLogs\CustomSecurityAttributeAudits\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuditLogs\CustomSecurityAttributeAudits\Item\CustomSecurityAttributeAuditItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\CustomSecurityAttributeAudit;
use Microsoft\Graph\Beta\Generated\Models\CustomSecurityAttributeAuditCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customSecurityAttributeAudits property of the microsoft.graph.auditLogRoot entity.
*/
class CustomSecurityAttributeAuditsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customSecurityAttributeAudits property of the microsoft.graph.auditLogRoot entity.
     * @param string $customSecurityAttributeAuditId The unique identifier of customSecurityAttributeAudit
     * @return CustomSecurityAttributeAuditItemRequestBuilder
    */
    public function byCustomSecurityAttributeAuditId(string $customSecurityAttributeAuditId): CustomSecurityAttributeAuditItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customSecurityAttributeAudit%2Did'] = $customSecurityAttributeAuditId;
        return new CustomSecurityAttributeAuditItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CustomSecurityAttributeAuditsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auditLogs/customSecurityAttributeAudits{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get customSecurityAttributeAudits from auditLogs
     * @param CustomSecurityAttributeAuditsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?CustomSecurityAttributeAuditsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CustomSecurityAttributeAuditCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to customSecurityAttributeAudits for auditLogs
     * @param CustomSecurityAttributeAudit $body The request body
     * @param CustomSecurityAttributeAuditsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(CustomSecurityAttributeAudit $body, ?CustomSecurityAttributeAuditsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CustomSecurityAttributeAudit::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get customSecurityAttributeAudits from auditLogs
     * @param CustomSecurityAttributeAuditsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomSecurityAttributeAuditsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to customSecurityAttributeAudits for auditLogs
     * @param CustomSecurityAttributeAudit $body The request body
     * @param CustomSecurityAttributeAuditsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CustomSecurityAttributeAudit $body, ?CustomSecurityAttributeAuditsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CustomSecurityAttributeAuditsRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomSecurityAttributeAuditsRequestBuilder {
        return new CustomSecurityAttributeAuditsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
