<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\TenantRelationship;
use Microsoft\Graph\Beta\Generated\TenantRelationships\DelegatedAdminCustomers\DelegatedAdminCustomersRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\DelegatedAdminCustomers\Item\DelegatedAdminCustomerItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\DelegatedAdminRelationships\DelegatedAdminRelationshipsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TenantRelationships\DelegatedAdminRelationships\Item\DelegatedAdminRelationshipItemRequestBuilder;
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
    public function delegatedAdminCustomers(): DelegatedAdminCustomersRequestBuilder {
        return new DelegatedAdminCustomersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function delegatedAdminRelationships(): DelegatedAdminRelationshipsRequestBuilder {
        return new DelegatedAdminRelationshipsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function managedTenants(): ManagedTenantsRequestBuilder {
        return new ManagedTenantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new TenantRelationshipsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/tenantRelationships{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get tenantRelationships
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update tenantRelationships
     * @param TenantRelationship $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(TenantRelationship $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.delegatedAdminCustomers.item collection
     * @param string $id Unique identifier of the item
     * @return DelegatedAdminCustomerItemRequestBuilder
    */
    public function delegatedAdminCustomersById(string $id): DelegatedAdminCustomerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['delegatedAdminCustomer_id'] = $id;
        return new DelegatedAdminCustomerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.tenantRelationships.delegatedAdminRelationships.item collection
     * @param string $id Unique identifier of the item
     * @return DelegatedAdminRelationshipItemRequestBuilder
    */
    public function delegatedAdminRelationshipsById(string $id): DelegatedAdminRelationshipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['delegatedAdminRelationship_id'] = $id;
        return new DelegatedAdminRelationshipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get tenantRelationships
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, TenantRelationship::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update tenantRelationships
     * @param TenantRelationship $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(TenantRelationship $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
