<?php

namespace Microsoft\Graph\Beta\Generated\Domains\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Domains\Item\DomainNameReferences\DomainNameReferencesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\Item\DomainNameReferences\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\Item\FederationConfiguration\FederationConfigurationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\Item\FederationConfiguration\Item\InternalDomainFederationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\Item\ForceDelete\ForceDeleteRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\Item\ServiceConfigurationRecords\Item\DomainDnsRecordItemRequestBuilder as MicrosoftGraphBetaGeneratedDomainsItemServiceConfigurationRecordsItemDomainDnsRecordItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\Item\ServiceConfigurationRecords\ServiceConfigurationRecordsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\Item\SharedEmailDomainInvitations\Item\SharedEmailDomainInvitationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\Item\SharedEmailDomainInvitations\SharedEmailDomainInvitationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\Item\VerificationDnsRecords\Item\DomainDnsRecordItemRequestBuilder as MicrosoftGraphBetaGeneratedDomainsItemVerificationDnsRecordsItemDomainDnsRecordItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\Item\VerificationDnsRecords\VerificationDnsRecordsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Domains\Item\Verify\VerifyRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Domain;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class DomainItemRequestBuilder 
{
    /**
     * The domainNameReferences property
    */
    public function domainNameReferences(): DomainNameReferencesRequestBuilder {
        return new DomainNameReferencesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The federationConfiguration property
    */
    public function federationConfiguration(): FederationConfigurationRequestBuilder {
        return new FederationConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The forceDelete property
    */
    public function forceDelete(): ForceDeleteRequestBuilder {
        return new ForceDeleteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The serviceConfigurationRecords property
    */
    public function serviceConfigurationRecords(): ServiceConfigurationRecordsRequestBuilder {
        return new ServiceConfigurationRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sharedEmailDomainInvitations property
    */
    public function sharedEmailDomainInvitations(): SharedEmailDomainInvitationsRequestBuilder {
        return new SharedEmailDomainInvitationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * The verificationDnsRecords property
    */
    public function verificationDnsRecords(): VerificationDnsRecordsRequestBuilder {
        return new VerificationDnsRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The verify property
    */
    public function verify(): VerifyRequestBuilder {
        return new VerifyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DomainItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/domains/{domain_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete entity from domains
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Get entity from domains by key
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
     * Update entity in domains
     * @param Domain $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Domain $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete entity from domains
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.domains.item.domainNameReferences.item collection
     * @param string $id Unique identifier of the item
     * @return DirectoryObjectItemRequestBuilder
    */
    public function domainNameReferencesById(string $id): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.domains.item.federationConfiguration.item collection
     * @param string $id Unique identifier of the item
     * @return InternalDomainFederationItemRequestBuilder
    */
    public function federationConfigurationById(string $id): InternalDomainFederationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['internalDomainFederation_id'] = $id;
        return new InternalDomainFederationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get entity from domains by key
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Domain::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update entity in domains
     * @param Domain $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Domain $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.domains.item.serviceConfigurationRecords.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedDomainsItemServiceConfigurationRecordsItemDomainDnsRecordItemRequestBuilder
    */
    public function serviceConfigurationRecordsById(string $id): MicrosoftGraphBetaGeneratedDomainsItemServiceConfigurationRecordsItemDomainDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domainDnsRecord_id'] = $id;
        return new MicrosoftGraphBetaGeneratedDomainsItemServiceConfigurationRecordsItemDomainDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.domains.item.sharedEmailDomainInvitations.item collection
     * @param string $id Unique identifier of the item
     * @return SharedEmailDomainInvitationItemRequestBuilder
    */
    public function sharedEmailDomainInvitationsById(string $id): SharedEmailDomainInvitationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharedEmailDomainInvitation_id'] = $id;
        return new SharedEmailDomainInvitationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.domains.item.verificationDnsRecords.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedDomainsItemVerificationDnsRecordsItemDomainDnsRecordItemRequestBuilder
    */
    public function verificationDnsRecordsById(string $id): MicrosoftGraphBetaGeneratedDomainsItemVerificationDnsRecordsItemDomainDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['domainDnsRecord_id'] = $id;
        return new MicrosoftGraphBetaGeneratedDomainsItemVerificationDnsRecordsItemDomainDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
