<?php

namespace Microsoft\Graph\Beta\Generated\Groups\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Groups\Item\AcceptedSenders\AcceptedSendersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\AppRoleAssignments\Item\AppRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Calendar\CalendarRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\CalendarView\CalendarViewRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Conversations\ConversationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Conversations\Item\ConversationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\CreatedOnBehalfOf\CreatedOnBehalfOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Drive\DriveRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Drives\DrivesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Drives\Item\DriveItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Endpoints\EndpointsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Endpoints\Item\EndpointItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Events\EventsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Extensions\ExtensionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Extensions\Item\ExtensionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\GroupLifecyclePolicies\GroupLifecyclePoliciesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\GroupLifecyclePolicies\Item\GroupLifecyclePolicyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Members\MembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MembersWithLicenseErrors\MembersWithLicenseErrorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphAddFavorite\MicrosoftGraphAddFavoriteRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphAssignLicense\MicrosoftGraphAssignLicenseRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphCheckGrantedPermissionsForApp\MicrosoftGraphCheckGrantedPermissionsForAppRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphCheckMemberGroups\MicrosoftGraphCheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphCheckMemberObjects\MicrosoftGraphCheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphEvaluateDynamicMembership\MicrosoftGraphEvaluateDynamicMembershipRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphGetMemberGroups\MicrosoftGraphGetMemberGroupsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphGetMemberObjects\MicrosoftGraphGetMemberObjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphRemoveFavorite\MicrosoftGraphRemoveFavoriteRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphRenew\MicrosoftGraphRenewRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphResetUnseenCount\MicrosoftGraphResetUnseenCountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphRestore\MicrosoftGraphRestoreRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphSubscribeByMail\MicrosoftGraphSubscribeByMailRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphUnsubscribeByMail\MicrosoftGraphUnsubscribeByMailRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\MicrosoftGraphValidateProperties\MicrosoftGraphValidatePropertiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Onenote\OnenoteRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Owners\OwnersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\PermissionGrants\Item\ResourceSpecificPermissionGrantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\PermissionGrants\PermissionGrantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Photo\PhotoRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Photos\Item\ProfilePhotoItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Photos\PhotosRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Planner\PlannerRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\RejectedSenders\RejectedSendersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Settings\Item\DirectorySettingItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Sites\Item\SiteItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Sites\SitesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Team\TeamRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Threads\Item\ConversationThreadItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\Threads\ThreadsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Beta\Generated\Groups\Item\TransitiveMembers\TransitiveMembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Group;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the collection of group entities.
*/
class GroupItemRequestBuilder 
{
    /**
     * Provides operations to manage the acceptedSenders property of the microsoft.graph.group entity.
    */
    public function acceptedSenders(): AcceptedSendersRequestBuilder {
        return new AcceptedSendersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appRoleAssignments property of the microsoft.graph.group entity.
    */
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder {
        return new AppRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the addFavorite method.
    */
    public function microsoftGraphAddFavorite(): MicrosoftGraphAddFavoriteRequestBuilder {
        return new MicrosoftGraphAddFavoriteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the assignLicense method.
    */
    public function microsoftGraphAssignLicense(): MicrosoftGraphAssignLicenseRequestBuilder {
        return new MicrosoftGraphAssignLicenseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkGrantedPermissionsForApp method.
    */
    public function microsoftGraphCheckGrantedPermissionsForApp(): MicrosoftGraphCheckGrantedPermissionsForAppRequestBuilder {
        return new MicrosoftGraphCheckGrantedPermissionsForAppRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberGroups method.
    */
    public function microsoftGraphCheckMemberGroups(): MicrosoftGraphCheckMemberGroupsRequestBuilder {
        return new MicrosoftGraphCheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberObjects method.
    */
    public function microsoftGraphCheckMemberObjects(): MicrosoftGraphCheckMemberObjectsRequestBuilder {
        return new MicrosoftGraphCheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the evaluateDynamicMembership method.
    */
    public function microsoftGraphEvaluateDynamicMembership(): MicrosoftGraphEvaluateDynamicMembershipRequestBuilder {
        return new MicrosoftGraphEvaluateDynamicMembershipRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberGroups method.
    */
    public function microsoftGraphGetMemberGroups(): MicrosoftGraphGetMemberGroupsRequestBuilder {
        return new MicrosoftGraphGetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberObjects method.
    */
    public function microsoftGraphGetMemberObjects(): MicrosoftGraphGetMemberObjectsRequestBuilder {
        return new MicrosoftGraphGetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeFavorite method.
    */
    public function microsoftGraphRemoveFavorite(): MicrosoftGraphRemoveFavoriteRequestBuilder {
        return new MicrosoftGraphRemoveFavoriteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the renew method.
    */
    public function microsoftGraphRenew(): MicrosoftGraphRenewRequestBuilder {
        return new MicrosoftGraphRenewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the resetUnseenCount method.
    */
    public function microsoftGraphResetUnseenCount(): MicrosoftGraphResetUnseenCountRequestBuilder {
        return new MicrosoftGraphResetUnseenCountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function microsoftGraphRestore(): MicrosoftGraphRestoreRequestBuilder {
        return new MicrosoftGraphRestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the subscribeByMail method.
    */
    public function microsoftGraphSubscribeByMail(): MicrosoftGraphSubscribeByMailRequestBuilder {
        return new MicrosoftGraphSubscribeByMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unsubscribeByMail method.
    */
    public function microsoftGraphUnsubscribeByMail(): MicrosoftGraphUnsubscribeByMailRequestBuilder {
        return new MicrosoftGraphUnsubscribeByMailRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the validateProperties method.
    */
    public function microsoftGraphValidateProperties(): MicrosoftGraphValidatePropertiesRequestBuilder {
        return new MicrosoftGraphValidatePropertiesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft/Graph/Beta/Generated.groups.item.acceptedSenders.item collection
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Groups\Item\AcceptedSenders\Item\DirectoryObjectItemRequestBuilder
    */
    public function acceptedSendersById(string $id): \Microsoft\Graph\Beta\Generated\Groups\Item\AcceptedSenders\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Groups\Item\AcceptedSenders\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
     * @return \Microsoft\Graph\Beta\Generated\Groups\Item\CalendarView\Item\EventItemRequestBuilder
    */
    public function calendarViewById(string $id): \Microsoft\Graph\Beta\Generated\Groups\Item\CalendarView\Item\EventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Groups\Item\CalendarView\Item\EventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GroupItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/groups/{group%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
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
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/group-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?GroupItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
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
     * @return \Microsoft\Graph\Beta\Generated\Groups\Item\Events\Item\EventItemRequestBuilder
    */
    public function eventsById(string $id): \Microsoft\Graph\Beta\Generated\Groups\Item\Events\Item\EventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['event%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Groups\Item\Events\Item\EventItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/group-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?GroupItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Group::class, 'createFromDiscriminatorValue'], $errorMappings);
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
     * @return \Microsoft\Graph\Beta\Generated\Groups\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): \Microsoft\Graph\Beta\Generated\Groups\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Groups\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft/Graph/Beta/Generated.groups.item.members.item collection
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Groups\Item\Members\Item\DirectoryObjectItemRequestBuilder
    */
    public function membersById(string $id): \Microsoft\Graph\Beta\Generated\Groups\Item\Members\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Groups\Item\Members\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the membersWithLicenseErrors property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Groups\Item\MembersWithLicenseErrors\Item\DirectoryObjectItemRequestBuilder
    */
    public function membersWithLicenseErrorsById(string $id): \Microsoft\Graph\Beta\Generated\Groups\Item\MembersWithLicenseErrors\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Groups\Item\MembersWithLicenseErrors\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft/Graph/Beta/Generated.groups.item.owners.item collection
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Groups\Item\Owners\Item\DirectoryObjectItemRequestBuilder
    */
    public function ownersById(string $id): \Microsoft\Graph\Beta\Generated\Groups\Item\Owners\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Groups\Item\Owners\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the properties of a group object.
     * @param Group $body The request body
     * @param GroupItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/group-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(Group $body, ?GroupItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Group::class, 'createFromDiscriminatorValue'], $errorMappings);
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
     * Gets an item from the Microsoft/Graph/Beta/Generated.groups.item.rejectedSenders.item collection
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Groups\Item\RejectedSenders\Item\DirectoryObjectItemRequestBuilder
    */
    public function rejectedSendersById(string $id): \Microsoft\Graph\Beta\Generated\Groups\Item\RejectedSenders\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Groups\Item\RejectedSenders\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
     * Deletes a group. When deleted, Microsoft 365 groups are moved to a temporary container and can be restored within 30 days. After that time, they are permanently deleted. This isn't applicable to Security groups and Distribution groups which are permanently deleted immediately. To learn more, see deletedItems.
     * @param GroupItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?GroupItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
    public function toGetRequestInformation(?GroupItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a group object.
     * @param Group $body The request body
     * @param GroupItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Group $body, ?GroupItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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

    /**
     * Provides operations to manage the transitiveMemberOf property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Groups\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): \Microsoft\Graph\Beta\Generated\Groups\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Groups\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the transitiveMembers property of the microsoft.graph.group entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Groups\Item\TransitiveMembers\Item\DirectoryObjectItemRequestBuilder
    */
    public function transitiveMembersById(string $id): \Microsoft\Graph\Beta\Generated\Groups\Item\TransitiveMembers\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Groups\Item\TransitiveMembers\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
