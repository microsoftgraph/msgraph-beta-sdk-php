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
use Microsoft\Graph\Beta\Generated\TenantRelationships\FindTenantInformationByDomainNameWithDomainName\FindTenantInformationByDomainNameWithDomainNameRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\FindTenantInformationByTenantIdWithTenantId\FindTenantInformationByTenantIdWithTenantIdRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagedTenantsRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class TenantRelationshipsRequestBuilder 
{
    /**
     * The delegatedAdminCustomers property
    */
    public function delegatedAdminCustomers(): DelegatedAdminCustomersRequestBuilder {
        return new DelegatedAdminCustomersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The delegatedAdminRelationships property
    */
    public function delegatedAdminRelationships(): DelegatedAdminRelationshipsRequestBuilder {
        return new DelegatedAdminRelationshipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The managedTenants property
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
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/tenantRelationships{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get tenantRelationships
     * @param TenantRelationshipsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?TenantRelationshipsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * @param TenantRelationship $body 
     * @param TenantRelationshipsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(TenantRelationship $body, ?TenantRelationshipsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.delegatedAdminCustomers.item collection
     * @param string $id Unique identifier of the item
     * @return DelegatedAdminCustomerItemRequestBuilder
    */
    public function delegatedAdminCustomersById(string $id): DelegatedAdminCustomerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['delegatedAdminCustomer%2Did'] = $id;
        return new DelegatedAdminCustomerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.delegatedAdminRelationships.item collection
     * @param string $id Unique identifier of the item
     * @return DelegatedAdminRelationshipItemRequestBuilder
    */
    public function delegatedAdminRelationshipsById(string $id): DelegatedAdminRelationshipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['delegatedAdminRelationship%2Did'] = $id;
        return new DelegatedAdminRelationshipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to call the findTenantInformationByDomainName method.
     * @param string $domainName Usage: domainName='{domainName}'
     * @return FindTenantInformationByDomainNameWithDomainNameRequestBuilder
    */
    public function findTenantInformationByDomainNameWithDomainName(string $domainName): FindTenantInformationByDomainNameWithDomainNameRequestBuilder {
        return new FindTenantInformationByDomainNameWithDomainNameRequestBuilder($this->pathParameters, $this->requestAdapter, $domainName);
    }

    /**
     * Provides operations to call the findTenantInformationByTenantId method.
     * @param string $tenantId Usage: tenantId='{tenantId}'
     * @return FindTenantInformationByTenantIdWithTenantIdRequestBuilder
    */
    public function findTenantInformationByTenantIdWithTenantId(string $tenantId): FindTenantInformationByTenantIdWithTenantIdRequestBuilder {
        return new FindTenantInformationByTenantIdWithTenantIdRequestBuilder($this->pathParameters, $this->requestAdapter, $tenantId);
    }

    /**
     * Get tenantRelationships
     * @param TenantRelationshipsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?TenantRelationshipsRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(TenantRelationship::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update tenantRelationships
     * @param TenantRelationship $body 
     * @param TenantRelationshipsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(TenantRelationship $body, ?TenantRelationshipsRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
