<?php

namespace Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item\Members\Item\DirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item\Members\MembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item\ScopedRoleMembers\Item\ScopedRoleMembershipItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\AdministrativeUnits\Item\ScopedRoleMembers\ScopedRoleMembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\AdministrativeUnit;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class AdministrativeUnitItemRequestBuilder 
{
    /**
     * The checkMemberGroups property
    */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkMemberObjects property
    */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The extensions property
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberGroups property
    */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberObjects property
    */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The members property
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /**
     * The restore property
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The scopedRoleMembers property
    */
    public function scopedRoleMembers(): ScopedRoleMembersRequestBuilder {
        return new ScopedRoleMembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new AdministrativeUnitItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/administrativeUnits/{administrativeUnit_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete entity from administrativeUnits
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
     * Get entity from administrativeUnits by key
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
     * Update entity in administrativeUnits
     * @param AdministrativeUnit $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(AdministrativeUnit $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete entity from administrativeUnits
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.administrativeUnits.item.extensions.item collection
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension_id'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get entity from administrativeUnits by key
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, AdministrativeUnit::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.administrativeUnits.item.members.item collection
     * @param string $id Unique identifier of the item
     * @return DirectoryObjectItemRequestBuilder
    */
    public function membersById(string $id): DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update entity in administrativeUnits
     * @param AdministrativeUnit $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(AdministrativeUnit $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.administrativeUnits.item.scopedRoleMembers.item collection
     * @param string $id Unique identifier of the item
     * @return ScopedRoleMembershipItemRequestBuilder
    */
    public function scopedRoleMembersById(string $id): ScopedRoleMembershipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['scopedRoleMembership_id'] = $id;
        return new ScopedRoleMembershipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
