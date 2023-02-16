<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TenantRelationship;
use Microsoft\Graph\Beta\Generated\TenantRelationships\DelegatedAdminCustomers\DelegatedAdminCustomersRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\DelegatedAdminCustomers\Item\DelegatedAdminCustomerItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\DelegatedAdminRelationships\DelegatedAdminRelationshipsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\DelegatedAdminRelationships\Item\DelegatedAdminRelationshipItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\MicrosoftGraphFindTenantInformationByDomainNameWithDomainName\MicrosoftGraphFindTenantInformationByDomainNameWithDomainNameRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\MicrosoftGraphFindTenantInformationByTenantIdWithTenantId\MicrosoftGraphFindTenantInformationByTenantIdWithTenantIdRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the tenantRelationship singleton.
*/
class TenantRelationshipsRequestBuilder 
{
    /**
     * Provides operations to manage the delegatedAdminCustomers property of the microsoft.graph.tenantRelationship entity.
    */
    public function delegatedAdminCustomers(): DelegatedAdminCustomersRequestBuilder {
        return new DelegatedAdminCustomersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the delegatedAdminRelationships property of the microsoft.graph.tenantRelationship entity.
    */
    public function delegatedAdminRelationships(): DelegatedAdminRelationshipsRequestBuilder {
        return new DelegatedAdminRelationshipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the managedTenants property of the microsoft.graph.tenantRelationship entity.
    */
    public function managedTenants(): ManagedTenantsRequestBuilder {
        return new ManagedTenantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new TenantRelationshipsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/tenantRelationships{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to manage the delegatedAdminCustomers property of the microsoft.graph.tenantRelationship entity.
     * @param string $id Unique identifier of the item
     * @return DelegatedAdminCustomerItemRequestBuilder
    */
    public function delegatedAdminCustomersById(string $id): DelegatedAdminCustomerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['delegatedAdminCustomer%2Did'] = $id;
        return new DelegatedAdminCustomerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the delegatedAdminRelationships property of the microsoft.graph.tenantRelationship entity.
     * @param string $id Unique identifier of the item
     * @return DelegatedAdminRelationshipItemRequestBuilder
    */
    public function delegatedAdminRelationshipsById(string $id): DelegatedAdminRelationshipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['delegatedAdminRelationship%2Did'] = $id;
        return new DelegatedAdminRelationshipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get tenantRelationships
     * @param TenantRelationshipsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?TenantRelationshipsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [TenantRelationship::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the findTenantInformationByDomainName method.
     * @param string $domainName Usage: domainName='{domainName}'
     * @return MicrosoftGraphFindTenantInformationByDomainNameWithDomainNameRequestBuilder
    */
    public function microsoftGraphFindTenantInformationByDomainNameWithDomainName(string $domainName): MicrosoftGraphFindTenantInformationByDomainNameWithDomainNameRequestBuilder {
        return new MicrosoftGraphFindTenantInformationByDomainNameWithDomainNameRequestBuilder($this->pathParameters, $this->requestAdapter, $domainName);
    }

    /**
     * Provides operations to call the findTenantInformationByTenantId method.
     * @param string $tenantId Usage: tenantId='{tenantId}'
     * @return MicrosoftGraphFindTenantInformationByTenantIdWithTenantIdRequestBuilder
    */
    public function microsoftGraphFindTenantInformationByTenantIdWithTenantId(string $tenantId): MicrosoftGraphFindTenantInformationByTenantIdWithTenantIdRequestBuilder {
        return new MicrosoftGraphFindTenantInformationByTenantIdWithTenantIdRequestBuilder($this->pathParameters, $this->requestAdapter, $tenantId);
    }

    /**
     * Update tenantRelationships
     * @param TenantRelationship $body The request body
     * @param TenantRelationshipsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(TenantRelationship $body, ?TenantRelationshipsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [TenantRelationship::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get tenantRelationships
     * @param TenantRelationshipsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TenantRelationshipsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update tenantRelationships
     * @param TenantRelationship $body The request body
     * @param TenantRelationshipsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(TenantRelationship $body, ?TenantRelationshipsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
