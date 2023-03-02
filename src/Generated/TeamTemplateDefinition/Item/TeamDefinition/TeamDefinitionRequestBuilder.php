<?php

namespace Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Team;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\AllChannels\AllChannelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Archive\ArchiveRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Channels\ChannelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\CompleteMigration\CompleteMigrationRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\EscapedClone\CloneRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Group\GroupRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\IncomingChannels\IncomingChannelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\InstalledApps\InstalledAppsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\InstalledApps\Item\TeamsAppInstallationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Members\Item\ConversationMemberItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Members\MembersRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Operations\Item\TeamsAsyncOperationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Owners\Item\UserItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Owners\OwnersRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\PermissionGrants\Item\ResourceSpecificPermissionGrantItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\PermissionGrants\PermissionGrantsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Photo\PhotoRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\PrimaryChannel\PrimaryChannelRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Schedule\ScheduleRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\SendActivityNotification\SendActivityNotificationRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Tags\Item\TeamworkTagItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Tags\TagsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Template\TemplateRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\TemplateDefinition\TemplateDefinitionRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Unarchive\UnarchiveRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the teamDefinition property of the microsoft.graph.teamTemplateDefinition entity.
*/
class TeamDefinitionRequestBuilder 
{
    /**
     * Provides operations to manage the allChannels property of the microsoft.graph.team entity.
    */
    public function allChannels(): AllChannelsRequestBuilder {
        return new AllChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the archive method.
    */
    public function archive(): ArchiveRequestBuilder {
        return new ArchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the channels property of the microsoft.graph.team entity.
    */
    public function channels(): ChannelsRequestBuilder {
        return new ChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the completeMigration method.
    */
    public function completeMigration(): CompleteMigrationRequestBuilder {
        return new CompleteMigrationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the clone method.
    */
    public function escapedClone(): CloneRequestBuilder {
        return new CloneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the group property of the microsoft.graph.team entity.
    */
    public function group(): GroupRequestBuilder {
        return new GroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the incomingChannels property of the microsoft.graph.team entity.
    */
    public function incomingChannels(): IncomingChannelsRequestBuilder {
        return new IncomingChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the installedApps property of the microsoft.graph.team entity.
    */
    public function installedApps(): InstalledAppsRequestBuilder {
        return new InstalledAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the members property of the microsoft.graph.team entity.
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.team entity.
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the owners property of the microsoft.graph.team entity.
    */
    public function owners(): OwnersRequestBuilder {
        return new OwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the permissionGrants property of the microsoft.graph.team entity.
    */
    public function permissionGrants(): PermissionGrantsRequestBuilder {
        return new PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the photo property of the microsoft.graph.team entity.
    */
    public function photo(): PhotoRequestBuilder {
        return new PhotoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the primaryChannel property of the microsoft.graph.team entity.
    */
    public function primaryChannel(): PrimaryChannelRequestBuilder {
        return new PrimaryChannelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the schedule property of the microsoft.graph.team entity.
    */
    public function schedule(): ScheduleRequestBuilder {
        return new ScheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendActivityNotification method.
    */
    public function sendActivityNotification(): SendActivityNotificationRequestBuilder {
        return new SendActivityNotificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tags property of the microsoft.graph.team entity.
    */
    public function tags(): TagsRequestBuilder {
        return new TagsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the template property of the microsoft.graph.team entity.
    */
    public function template(): TemplateRequestBuilder {
        return new TemplateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the templateDefinition property of the microsoft.graph.team entity.
    */
    public function templateDefinition(): TemplateDefinitionRequestBuilder {
        return new TemplateDefinitionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unarchive method.
    */
    public function unarchive(): UnarchiveRequestBuilder {
        return new UnarchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the allChannels property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\AllChannels\Item\ChannelItemRequestBuilder
    */
    public function allChannelsById(string $id): \Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\AllChannels\Item\ChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\AllChannels\Item\ChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the channels property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Channels\Item\ChannelItemRequestBuilder
    */
    public function channelsById(string $id): \Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Channels\Item\ChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Channels\Item\ChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TeamDefinitionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/teamTemplateDefinition/{teamTemplateDefinition%2Did}/teamDefinition{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property teamDefinition for teamTemplateDefinition
     * @param TeamDefinitionRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?TeamDefinitionRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * Get the properties of the team associated with a teamTemplateDefinition object.
     * @param TeamDefinitionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/teamtemplatedefinition-get-teamdefinition?view=graph-rest-1.0 Find more info here
    */
    public function get(?TeamDefinitionRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Team::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the incomingChannels property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\IncomingChannels\Item\ChannelItemRequestBuilder
    */
    public function incomingChannelsById(string $id): \Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\IncomingChannels\Item\ChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\IncomingChannels\Item\ChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the installedApps property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return TeamsAppInstallationItemRequestBuilder
    */
    public function installedAppsById(string $id): TeamsAppInstallationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAppInstallation%2Did'] = $id;
        return new TeamsAppInstallationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the members property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return ConversationMemberItemRequestBuilder
    */
    public function membersById(string $id): ConversationMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversationMember%2Did'] = $id;
        return new ConversationMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the operations property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return TeamsAsyncOperationItemRequestBuilder
    */
    public function operationsById(string $id): TeamsAsyncOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAsyncOperation%2Did'] = $id;
        return new TeamsAsyncOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the owners property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return UserItemRequestBuilder
    */
    public function ownersById(string $id): UserItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['user%2Did'] = $id;
        return new UserItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property teamDefinition in teamTemplateDefinition
     * @param Team $body The request body
     * @param TeamDefinitionRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(Team $body, ?TeamDefinitionRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Team::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the permissionGrants property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return ResourceSpecificPermissionGrantItemRequestBuilder
    */
    public function permissionGrantsById(string $id): ResourceSpecificPermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceSpecificPermissionGrant%2Did'] = $id;
        return new ResourceSpecificPermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the tags property of the microsoft.graph.team entity.
     * @param string $id Unique identifier of the item
     * @return TeamworkTagItemRequestBuilder
    */
    public function tagsById(string $id): TeamworkTagItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamworkTag%2Did'] = $id;
        return new TeamworkTagItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property teamDefinition for teamTemplateDefinition
     * @param TeamDefinitionRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?TeamDefinitionRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get the properties of the team associated with a teamTemplateDefinition object.
     * @param TeamDefinitionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TeamDefinitionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property teamDefinition in teamTemplateDefinition
     * @param Team $body The request body
     * @param TeamDefinitionRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Team $body, ?TeamDefinitionRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
