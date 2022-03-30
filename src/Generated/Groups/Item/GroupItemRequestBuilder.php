<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Groups\Item\AcceptedSenders\AcceptedSendersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\AcceptedSenders\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedGroupsItemAcceptedSendersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\AddFavorite\AddFavoriteRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\AppRoleAssignments\Item\AppRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\AssignLicense\AssignLicenseRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\CalendarView\Item\EventItemRequestBuilder as MicrosoftGraphBetaGeneratedGroupsItemCalendarViewItemEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\CheckGrantedPermissionsForApp\CheckGrantedPermissionsForAppRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Conversations\ConversationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Conversations\Item\ConversationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\CreatedOnBehalfOf\CreatedOnBehalfOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Drive\DriveRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Endpoints\EndpointsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Endpoints\Item\EndpointItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\EvaluateDynamicMembership\EvaluateDynamicMembershipRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Events\EventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Events\Item\EventItemRequestBuilder as MicrosoftGraphBetaGeneratedGroupsItemEventsItemEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\GroupLifecyclePolicies\GroupLifecyclePoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\GroupLifecyclePolicies\Item\GroupLifecyclePolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedGroupsItemMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Members\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedGroupsItemMembersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Members\MembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MembersWithLicenseErrors\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedGroupsItemMembersWithLicenseErrorsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MembersWithLicenseErrors\MembersWithLicenseErrorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Owners\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedGroupsItemOwnersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Owners\OwnersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\PermissionGrants\Item\ResourceSpecificPermissionGrantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\PermissionGrants\PermissionGrantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Photo\PhotoRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Photos\Item\ProfilePhotoItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Photos\PhotosRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\RejectedSenders\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedGroupsItemRejectedSendersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\RejectedSenders\RejectedSendersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\RemoveFavorite\RemoveFavoriteRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Renew\RenewRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\ResetUnseenCount\ResetUnseenCountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Settings\Item\DirectorySettingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Sites\Item\SiteItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Sites\SitesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\SubscribeByMail\SubscribeByMailRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\TeamRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Threads\Item\ConversationThreadItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Threads\ThreadsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedGroupsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\TransitiveMembers\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphBetaGeneratedGroupsItemTransitiveMembersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\TransitiveMembers\TransitiveMembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\UnsubscribeByMail\UnsubscribeByMailRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\ValidateProperties\ValidatePropertiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Group;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class GroupItemRequestBuilder 
{
    public function acceptedSenders(): AcceptedSendersRequestBuilder {
        return new AcceptedSendersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function addFavorite(): AddFavoriteRequestBuilder {
        return new AddFavoriteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder {
        return new AppRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function assignLicense(): AssignLicenseRequestBuilder {
        return new AssignLicenseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function calendar(): CalendarRequestBuilder {
        return new CalendarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function calendarView(): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function checkGrantedPermissionsForApp(): CheckGrantedPermissionsForAppRequestBuilder {
        return new CheckGrantedPermissionsForAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function conversations(): ConversationsRequestBuilder {
        return new ConversationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function createdOnBehalfOf(): CreatedOnBehalfOfRequestBuilder {
        return new CreatedOnBehalfOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function endpoints(): EndpointsRequestBuilder {
        return new EndpointsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function evaluateDynamicMembership(): EvaluateDynamicMembershipRequestBuilder {
        return new EvaluateDynamicMembershipRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function events(): EventsRequestBuilder {
        return new EventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function groupLifecyclePolicies(): GroupLifecyclePoliciesRequestBuilder {
        return new GroupLifecyclePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function membersWithLicenseErrors(): MembersWithLicenseErrorsRequestBuilder {
        return new MembersWithLicenseErrorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function onenote(): OnenoteRequestBuilder {
        return new OnenoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function owners(): OwnersRequestBuilder {
        return new OwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    public function permissionGrants(): PermissionGrantsRequestBuilder {
        return new PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function photo(): PhotoRequestBuilder {
        return new PhotoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function photos(): PhotosRequestBuilder {
        return new PhotosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function planner(): PlannerRequestBuilder {
        return new PlannerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function rejectedSenders(): RejectedSendersRequestBuilder {
        return new RejectedSendersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function removeFavorite(): RemoveFavoriteRequestBuilder {
        return new RemoveFavoriteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function renew(): RenewRequestBuilder {
        return new RenewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function resetUnseenCount(): ResetUnseenCountRequestBuilder {
        return new ResetUnseenCountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function sites(): SitesRequestBuilder {
        return new SitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function subscribeByMail(): SubscribeByMailRequestBuilder {
        return new SubscribeByMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function team(): TeamRequestBuilder {
        return new TeamRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function threads(): ThreadsRequestBuilder {
        return new ThreadsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function transitiveMembers(): TransitiveMembersRequestBuilder {
        return new TransitiveMembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function unsubscribeByMail(): UnsubscribeByMailRequestBuilder {
        return new UnsubscribeByMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    public function validateProperties(): ValidatePropertiesRequestBuilder {
        return new ValidatePropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.acceptedSenders.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemAcceptedSendersItemDirectoryObjectItemRequestBuilder
    */
    public function acceptedSendersById(string $id): MicrosoftGraphBetaGeneratedGroupsItemAcceptedSendersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemAcceptedSendersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.appRoleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return AppRoleAssignmentItemRequestBuilder
    */
    public function appRoleAssignmentsById(string $id): AppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment_id'] = $id;
        return new AppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.calendarView.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemCalendarViewItemEventItemRequestBuilder
    */
    public function calendarViewById(string $id): MicrosoftGraphBetaGeneratedGroupsItemCalendarViewItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event_id'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemCalendarViewItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GroupItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/groups/{group_id}{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.conversations.item collection
     * @param string $id Unique identifier of the item
     * @return ConversationItemRequestBuilder
    */
    public function conversationsById(string $id): ConversationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversation_id'] = $id;
        return new ConversationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete entity from groups
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
     * Get entity from groups by key
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
     * Update entity in groups
     * @param Group $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Group $body, ?array $headers = null, ?array $options = null): RequestInformation {
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
     * Delete entity from groups
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.drives.item collection
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive_id'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.endpoints.item collection
     * @param string $id Unique identifier of the item
     * @return EndpointItemRequestBuilder
    */
    public function endpointsById(string $id): EndpointItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['endpoint_id'] = $id;
        return new EndpointItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.events.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemEventsItemEventItemRequestBuilder
    */
    public function eventsById(string $id): MicrosoftGraphBetaGeneratedGroupsItemEventsItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event_id'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemEventsItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.extensions.item collection
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension_id'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get entity from groups by key
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Group::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.groupLifecyclePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return GroupLifecyclePolicyItemRequestBuilder
    */
    public function groupLifecyclePoliciesById(string $id): GroupLifecyclePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupLifecyclePolicy_id'] = $id;
        return new GroupLifecyclePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.memberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): MicrosoftGraphBetaGeneratedGroupsItemMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.members.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemMembersItemDirectoryObjectItemRequestBuilder
    */
    public function membersById(string $id): MicrosoftGraphBetaGeneratedGroupsItemMembersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemMembersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.membersWithLicenseErrors.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemMembersWithLicenseErrorsItemDirectoryObjectItemRequestBuilder
    */
    public function membersWithLicenseErrorsById(string $id): MicrosoftGraphBetaGeneratedGroupsItemMembersWithLicenseErrorsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemMembersWithLicenseErrorsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.owners.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemOwnersItemDirectoryObjectItemRequestBuilder
    */
    public function ownersById(string $id): MicrosoftGraphBetaGeneratedGroupsItemOwnersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemOwnersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update entity in groups
     * @param Group $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Group $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.permissionGrants.item collection
     * @param string $id Unique identifier of the item
     * @return ResourceSpecificPermissionGrantItemRequestBuilder
    */
    public function permissionGrantsById(string $id): ResourceSpecificPermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceSpecificPermissionGrant_id'] = $id;
        return new ResourceSpecificPermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.photos.item collection
     * @param string $id Unique identifier of the item
     * @return ProfilePhotoItemRequestBuilder
    */
    public function photosById(string $id): ProfilePhotoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['profilePhoto_id'] = $id;
        return new ProfilePhotoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.rejectedSenders.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemRejectedSendersItemDirectoryObjectItemRequestBuilder
    */
    public function rejectedSendersById(string $id): MicrosoftGraphBetaGeneratedGroupsItemRejectedSendersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemRejectedSendersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.settings.item collection
     * @param string $id Unique identifier of the item
     * @return DirectorySettingItemRequestBuilder
    */
    public function settingsById(string $id): DirectorySettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directorySetting_id'] = $id;
        return new DirectorySettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.sites.item collection
     * @param string $id Unique identifier of the item
     * @return SiteItemRequestBuilder
    */
    public function sitesById(string $id): SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site_id'] = $id;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.threads.item collection
     * @param string $id Unique identifier of the item
     * @return ConversationThreadItemRequestBuilder
    */
    public function threadsById(string $id): ConversationThreadItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversationThread_id'] = $id;
        return new ConversationThreadItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.transitiveMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): MicrosoftGraphBetaGeneratedGroupsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.transitiveMembers.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemTransitiveMembersItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMembersById(string $id): MicrosoftGraphBetaGeneratedGroupsItemTransitiveMembersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject_id'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemTransitiveMembersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
