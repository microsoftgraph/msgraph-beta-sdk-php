<?php

namespace Microsoft\Graph\Beta\Generated\Contacts\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Contacts\Item\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\DirectReports\DirectReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\DirectReports\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedContactsItemDirectReportsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\Manager\ManagerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedContactsItemMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedContactsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\TransitiveReports\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedContactsItemTransitiveReportsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Contacts\Item\TransitiveReports\TransitiveReportsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\OrgContact;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class OrgContactItemRequestBuilder 
{
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function directReports(): DirectReportsRequestBuilder {
        return new DirectReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function manager(): ManagerRequestBuilder {
        return new ManagerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function transitiveReports(): TransitiveReportsRequestBuilder {
        return new TransitiveReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new OrgContactItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/contacts/{orgContact_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete entity from contacts
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
     * Get entity from contacts by key
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
     * Update entity in contacts
     * @param OrgContact $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(OrgContact $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete entity from contacts
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.contacts.item.directReports.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedContactsItemDirectReportsItemDirectoryObjectItemRequestBuilder
    */
    public function directReportsById(string $id): MicrosoftGraphBetaGeneratedContactsItemDirectReportsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedContactsItemDirectReportsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get entity from contacts by key
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, OrgContact::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.contacts.item.memberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedContactsItemMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): MicrosoftGraphBetaGeneratedContactsItemMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedContactsItemMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update entity in contacts
     * @param OrgContact $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(OrgContact $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.contacts.item.transitiveMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedContactsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): MicrosoftGraphBetaGeneratedContactsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedContactsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.contacts.item.transitiveReports.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedContactsItemTransitiveReportsItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveReportsById(string $id): MicrosoftGraphBetaGeneratedContactsItemTransitiveReportsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedContactsItemTransitiveReportsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
