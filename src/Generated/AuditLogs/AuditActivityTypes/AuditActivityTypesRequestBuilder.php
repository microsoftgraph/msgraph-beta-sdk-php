<?php

namespace Microsoft\Graph\Beta\Generated\AuditLogs\AuditActivityTypes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\AuditLogs\AuditActivityTypes\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\AuditLogs\AuditActivityTypes\Item\AuditActivityTypeItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AuditActivityType;
use Microsoft\Graph\Beta\Generated\Models\AuditActivityTypeCollectionResponse;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the auditActivityTypes property of the microsoft.graph.auditLogRoot entity.
*/
class AuditActivityTypesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the auditActivityTypes property of the microsoft.graph.auditLogRoot entity.
     * @param string $auditActivityTypeId The unique identifier of auditActivityType
     * @return AuditActivityTypeItemRequestBuilder
    */
    public function byAuditActivityTypeId(string $auditActivityTypeId): AuditActivityTypeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['auditActivityType%2Did'] = $auditActivityTypeId;
        return new AuditActivityTypeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AuditActivityTypesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auditLogs/auditActivityTypes{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Gets a list of all of the possible audit log types and which services they come from as defined in the auditActivityType object.
     * @param AuditActivityTypesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuditActivityTypeCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/auditlogroot-list-auditactivitytypes?view=graph-rest-beta Find more info here
    */
    public function get(?AuditActivityTypesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuditActivityTypeCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to auditActivityTypes for auditLogs
     * @param AuditActivityType $body The request body
     * @param AuditActivityTypesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuditActivityType|null>
     * @throws Exception
    */
    public function post(AuditActivityType $body, ?AuditActivityTypesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuditActivityType::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Gets a list of all of the possible audit log types and which services they come from as defined in the auditActivityType object.
     * @param AuditActivityTypesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuditActivityTypesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to auditActivityTypes for auditLogs
     * @param AuditActivityType $body The request body
     * @param AuditActivityTypesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AuditActivityType $body, ?AuditActivityTypesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AuditActivityTypesRequestBuilder
    */
    public function withUrl(string $rawUrl): AuditActivityTypesRequestBuilder {
        return new AuditActivityTypesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
