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
use Microsoft\Graph\Beta\Generated\Models\Group;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class GroupItemRequestBuilder 
{
    /**
     * Provides operations to manage the acceptedSenders property of the microsoft.graph.group entity.
    */
    public function acceptedSenders(): AcceptedSendersRequestBuilder {
        return new AcceptedSendersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the addFavorite method.
    */
    public function addFavorite(): AddFavoriteRequestBuilder {
        return new AddFavoriteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appRoleAssignments property of the microsoft.graph.group entity.
    */
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder {
        return new AppRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the assignLicense method.
    */
    public function assignLicense(): AssignLicenseRequestBuilder {
        return new AssignLicenseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendar property of the microsoft.graph.group entity.
    */
    public function calendar(): CalendarRequestBuilder {
        return new CalendarRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calendarView property of the microsoft.graph.group entity.
    */
    public function calendarView(): CalendarViewRequestBuilder {
        return new CalendarViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkGrantedPermissionsForApp method.
    */
    public function checkGrantedPermissionsForApp(): CheckGrantedPermissionsForAppRequestBuilder {
        return new CheckGrantedPermissionsForAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberGroups method.
    */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberObjects method.
    */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the conversations property of the microsoft.graph.group entity.
    */
    public function conversations(): ConversationsRequestBuilder {
        return new ConversationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the createdOnBehalfOf property of the microsoft.graph.group entity.
    */
    public function createdOnBehalfOf(): CreatedOnBehalfOfRequestBuilder {
        return new CreatedOnBehalfOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drive property of the microsoft.graph.group entity.
    */
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drives property of the microsoft.graph.group entity.
    */
    public function drives(): DrivesRequestBuilder {
        return new DrivesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the endpoints property of the microsoft.graph.group entity.
    */
    public function endpoints(): EndpointsRequestBuilder {
        return new EndpointsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the evaluateDynamicMembership method.
    */
    public function evaluateDynamicMembership(): EvaluateDynamicMembershipRequestBuilder {
        return new EvaluateDynamicMembershipRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the events property of the microsoft.graph.group entity.
    */
    public function events(): EventsRequestBuilder {
        return new EventsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the extensions property of the microsoft.graph.group entity.
    */
    public function extensions(): ExtensionsRequestBuilder {
        return new ExtensionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberGroups method.
    */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberObjects method.
    */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the groupLifecyclePolicies property of the microsoft.graph.group entity.
    */
    public function groupLifecyclePolicies(): GroupLifecyclePoliciesRequestBuilder {
        return new GroupLifecyclePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the memberOf property of the microsoft.graph.group entity.
    */
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the members property of the microsoft.graph.group entity.
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the membersWithLicenseErrors property of the microsoft.graph.group entity.
    */
    public function membersWithLicenseErrors(): MembersWithLicenseErrorsRequestBuilder {
        return new MembersWithLicenseErrorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onenote property of the microsoft.graph.group entity.
    */
    public function onenote(): OnenoteRequestBuilder {
        return new OnenoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the owners property of the microsoft.graph.group entity.
    */
    public function owners(): OwnersRequestBuilder {
        return new OwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the permissionGrants property of the microsoft.graph.group entity.
    */
    public function permissionGrants(): PermissionGrantsRequestBuilder {
        return new PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the photo property of the microsoft.graph.group entity.
    */
    public function photo(): PhotoRequestBuilder {
        return new PhotoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the photos property of the microsoft.graph.group entity.
    */
    public function photos(): PhotosRequestBuilder {
        return new PhotosRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the planner property of the microsoft.graph.group entity.
    */
    public function planner(): PlannerRequestBuilder {
        return new PlannerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the rejectedSenders property of the microsoft.graph.group entity.
    */
    public function rejectedSenders(): RejectedSendersRequestBuilder {
        return new RejectedSendersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeFavorite method.
    */
    public function removeFavorite(): RemoveFavoriteRequestBuilder {
        return new RemoveFavoriteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the renew method.
    */
    public function renew(): RenewRequestBuilder {
        return new RenewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to call the resetUnseenCount method.
    */
    public function resetUnseenCount(): ResetUnseenCountRequestBuilder {
        return new ResetUnseenCountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the settings property of the microsoft.graph.group entity.
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sites property of the microsoft.graph.group entity.
    */
    public function sites(): SitesRequestBuilder {
        return new SitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the subscribeByMail method.
    */
    public function subscribeByMail(): SubscribeByMailRequestBuilder {
        return new SubscribeByMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the team property of the microsoft.graph.group entity.
    */
    public function team(): TeamRequestBuilder {
        return new TeamRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the threads property of the microsoft.graph.group entity.
    */
    public function threads(): ThreadsRequestBuilder {
        return new ThreadsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the transitiveMemberOf property of the microsoft.graph.group entity.
    */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the transitiveMembers property of the microsoft.graph.group entity.
    */
    public function transitiveMembers(): TransitiveMembersRequestBuilder {
        return new TransitiveMembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unsubscribeByMail method.
    */
    public function unsubscribeByMail(): UnsubscribeByMailRequestBuilder {
        return new UnsubscribeByMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to call the validateProperties method.
    */
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
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemAcceptedSendersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the appRoleAssignments property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return AppRoleAssignmentItemRequestBuilder
    */
    public function appRoleAssignmentsById(string $id): AppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment%2Did'] = $id;
        return new AppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the calendarView property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemCalendarViewItemEventItemRequestBuilder
    */
    public function calendarViewById(string $id): MicrosoftGraphBetaGeneratedGroupsItemCalendarViewItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemCalendarViewItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GroupItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/groups/{group%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Provides operations to manage the conversations property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return ConversationItemRequestBuilder
    */
    public function conversationsById(string $id): ConversationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversation%2Did'] = $id;
        return new ConversationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Deletes a group. When deleted, Microsoft 365 groups are moved to a temporary container and can be restored within 30 days. After that time, they are permanently deleted. This isn't applicable to Security groups and Distribution groups which are permanently deleted immediately. To learn more, see deletedItems.
     * @param GroupItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?GroupItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get the properties and relationships of a group object. This operation returns by default only a subset of all the available properties, as noted in the Properties section. To get properties that are _not_ returned by default, specify them in a `$select` OData query option. The **hasMembersWithLicenseErrors** and **isArchived** properties are an exception and are not returned in the `$select` query. Because the **group** resource supports extensions, you can also use the `GET` operation to get custom properties and extension data in a **group** instance.
     * @param GroupItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?GroupItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a group object.
     * @param Group $body 
     * @param GroupItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Group $body, ?GroupItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
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
     * Deletes a group. When deleted, Microsoft 365 groups are moved to a temporary container and can be restored within 30 days. After that time, they are permanently deleted. This isn't applicable to Security groups and Distribution groups which are permanently deleted immediately. To learn more, see deletedItems.
     * @param GroupItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?GroupItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the drives property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return DriveItemRequestBuilder
    */
    public function drivesById(string $id): DriveItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['drive%2Did'] = $id;
        return new DriveItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the endpoints property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return EndpointItemRequestBuilder
    */
    public function endpointsById(string $id): EndpointItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['endpoint%2Did'] = $id;
        return new EndpointItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the events property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemEventsItemEventItemRequestBuilder
    */
    public function eventsById(string $id): MicrosoftGraphBetaGeneratedGroupsItemEventsItemEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemEventsItemEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the extensions property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return ExtensionItemRequestBuilder
    */
    public function extensionsById(string $id): ExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extension%2Did'] = $id;
        return new ExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get the properties and relationships of a group object. This operation returns by default only a subset of all the available properties, as noted in the Properties section. To get properties that are _not_ returned by default, specify them in a `$select` OData query option. The **hasMembersWithLicenseErrors** and **isArchived** properties are an exception and are not returned in the `$select` query. Because the **group** resource supports extensions, you can also use the `GET` operation to get custom properties and extension data in a **group** instance.
     * @param GroupItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?GroupItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Group::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the groupLifecyclePolicies property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return GroupLifecyclePolicyItemRequestBuilder
    */
    public function groupLifecyclePoliciesById(string $id): GroupLifecyclePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['groupLifecyclePolicy%2Did'] = $id;
        return new GroupLifecyclePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the memberOf property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): MicrosoftGraphBetaGeneratedGroupsItemMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.members.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemMembersItemDirectoryObjectItemRequestBuilder
    */
    public function membersById(string $id): MicrosoftGraphBetaGeneratedGroupsItemMembersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemMembersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the membersWithLicenseErrors property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemMembersWithLicenseErrorsItemDirectoryObjectItemRequestBuilder
    */
    public function membersWithLicenseErrorsById(string $id): MicrosoftGraphBetaGeneratedGroupsItemMembersWithLicenseErrorsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemMembersWithLicenseErrorsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.owners.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemOwnersItemDirectoryObjectItemRequestBuilder
    */
    public function ownersById(string $id): MicrosoftGraphBetaGeneratedGroupsItemOwnersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemOwnersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the properties of a group object.
     * @param Group $body 
     * @param GroupItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Group $body, ?GroupItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Group::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the permissionGrants property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return ResourceSpecificPermissionGrantItemRequestBuilder
    */
    public function permissionGrantsById(string $id): ResourceSpecificPermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceSpecificPermissionGrant%2Did'] = $id;
        return new ResourceSpecificPermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the photos property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return ProfilePhotoItemRequestBuilder
    */
    public function photosById(string $id): ProfilePhotoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['profilePhoto%2Did'] = $id;
        return new ProfilePhotoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.groups.item.rejectedSenders.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemRejectedSendersItemDirectoryObjectItemRequestBuilder
    */
    public function rejectedSendersById(string $id): MicrosoftGraphBetaGeneratedGroupsItemRejectedSendersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemRejectedSendersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the settings property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return DirectorySettingItemRequestBuilder
    */
    public function settingsById(string $id): DirectorySettingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directorySetting%2Did'] = $id;
        return new DirectorySettingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the sites property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return SiteItemRequestBuilder
    */
    public function sitesById(string $id): SiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['site%2Did'] = $id;
        return new SiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the threads property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return ConversationThreadItemRequestBuilder
    */
    public function threadsById(string $id): ConversationThreadItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversationThread%2Did'] = $id;
        return new ConversationThreadItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the transitiveMemberOf property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): MicrosoftGraphBetaGeneratedGroupsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the transitiveMembers property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedGroupsItemTransitiveMembersItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMembersById(string $id): MicrosoftGraphBetaGeneratedGroupsItemTransitiveMembersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedGroupsItemTransitiveMembersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
