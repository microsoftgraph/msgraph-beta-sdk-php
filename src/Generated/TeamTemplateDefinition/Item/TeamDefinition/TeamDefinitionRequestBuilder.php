<?php

namespace Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Team;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\AllChannels\AllChannelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\AllChannels\Item\ChannelItemRequestBuilder as MicrosoftGraphBetaGeneratedTeamTemplateDefinitionItemTeamDefinitionAllChannelsItemChannelItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Archive\ArchiveRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Channels\ChannelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Channels\Item\ChannelItemRequestBuilder as MicrosoftGraphBetaGeneratedTeamTemplateDefinitionItemTeamDefinitionChannelsItemChannelItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\CompleteMigration\CompleteMigrationRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\EscapedClone\CloneRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\Group\GroupRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\IncomingChannels\IncomingChannelsRequestBuilder;
use Microsoft\Graph\Beta\Generated\TeamTemplateDefinition\Item\TeamDefinition\IncomingChannels\Item\ChannelItemRequestBuilder as MicrosoftGraphBetaGeneratedTeamTemplateDefinitionItemTeamDefinitionIncomingChannelsItemChannelItemRequestBuilder;
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
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class TeamDefinitionRequestBuilder 
{
    /**
     * The allChannels property
    */
    public function allChannels(): AllChannelsRequestBuilder {
        return new AllChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The archive property
    */
    public function archive(): ArchiveRequestBuilder {
        return new ArchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The channels property
    */
    public function channels(): ChannelsRequestBuilder {
        return new ChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The completeMigration property
    */
    public function completeMigration(): CompleteMigrationRequestBuilder {
        return new CompleteMigrationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The clone property
    */
    public function escapedClone(): CloneRequestBuilder {
        return new CloneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The group property
    */
    public function group(): GroupRequestBuilder {
        return new GroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The incomingChannels property
    */
    public function incomingChannels(): IncomingChannelsRequestBuilder {
        return new IncomingChannelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The installedApps property
    */
    public function installedApps(): InstalledAppsRequestBuilder {
        return new InstalledAppsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The members property
    */
    public function members(): MembersRequestBuilder {
        return new MembersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The operations property
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The owners property
    */
    public function owners(): OwnersRequestBuilder {
        return new OwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The permissionGrants property
    */
    public function permissionGrants(): PermissionGrantsRequestBuilder {
        return new PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The photo property
    */
    public function photo(): PhotoRequestBuilder {
        return new PhotoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The primaryChannel property
    */
    public function primaryChannel(): PrimaryChannelRequestBuilder {
        return new PrimaryChannelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The schedule property
    */
    public function schedule(): ScheduleRequestBuilder {
        return new ScheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sendActivityNotification property
    */
    public function sendActivityNotification(): SendActivityNotificationRequestBuilder {
        return new SendActivityNotificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tags property
    */
    public function tags(): TagsRequestBuilder {
        return new TagsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The template property
    */
    public function template(): TemplateRequestBuilder {
        return new TemplateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The templateDefinition property
    */
    public function templateDefinition(): TemplateDefinitionRequestBuilder {
        return new TemplateDefinitionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The unarchive property
    */
    public function unarchive(): UnarchiveRequestBuilder {
        return new UnarchiveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teamTemplateDefinition.item.teamDefinition.allChannels.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedTeamTemplateDefinitionItemTeamDefinitionAllChannelsItemChannelItemRequestBuilder
    */
    public function allChannelsById(string $id): MicrosoftGraphBetaGeneratedTeamTemplateDefinitionItemTeamDefinitionAllChannelsItemChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedTeamTemplateDefinitionItemTeamDefinitionAllChannelsItemChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teamTemplateDefinition.item.teamDefinition.channels.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedTeamTemplateDefinitionItemTeamDefinitionChannelsItemChannelItemRequestBuilder
    */
    public function channelsById(string $id): MicrosoftGraphBetaGeneratedTeamTemplateDefinitionItemTeamDefinitionChannelsItemChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedTeamTemplateDefinitionItemTeamDefinitionChannelsItemChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TeamDefinitionRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/teamTemplateDefinition/{teamTemplateDefinition%2Did}/teamDefinition{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property teamDefinition for teamTemplateDefinition
     * @param TeamDefinitionRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?TeamDefinitionRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get teamDefinition from teamTemplateDefinition
     * @param TeamDefinitionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?TeamDefinitionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property teamDefinition in teamTemplateDefinition
     * @param Team $body 
     * @param TeamDefinitionRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Team $body, ?TeamDefinitionRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Delete navigation property teamDefinition for teamTemplateDefinition
     * @param TeamDefinitionRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?TeamDefinitionRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
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

    /**
     * Get teamDefinition from teamTemplateDefinition
     * @param TeamDefinitionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?TeamDefinitionRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Team::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teamTemplateDefinition.item.teamDefinition.incomingChannels.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphBetaGeneratedTeamTemplateDefinitionItemTeamDefinitionIncomingChannelsItemChannelItemRequestBuilder
    */
    public function incomingChannelsById(string $id): MicrosoftGraphBetaGeneratedTeamTemplateDefinitionItemTeamDefinitionIncomingChannelsItemChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel%2Did'] = $id;
        return new MicrosoftGraphBetaGeneratedTeamTemplateDefinitionItemTeamDefinitionIncomingChannelsItemChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teamTemplateDefinition.item.teamDefinition.installedApps.item collection
     * @param string $id Unique identifier of the item
     * @return TeamsAppInstallationItemRequestBuilder
    */
    public function installedAppsById(string $id): TeamsAppInstallationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAppInstallation%2Did'] = $id;
        return new TeamsAppInstallationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teamTemplateDefinition.item.teamDefinition.members.item collection
     * @param string $id Unique identifier of the item
     * @return ConversationMemberItemRequestBuilder
    */
    public function membersById(string $id): ConversationMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversationMember%2Did'] = $id;
        return new ConversationMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teamTemplateDefinition.item.teamDefinition.operations.item collection
     * @param string $id Unique identifier of the item
     * @return TeamsAsyncOperationItemRequestBuilder
    */
    public function operationsById(string $id): TeamsAsyncOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsAsyncOperation%2Did'] = $id;
        return new TeamsAsyncOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teamTemplateDefinition.item.teamDefinition.owners.item collection
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
     * @param Team $body 
     * @param TeamDefinitionRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Team $body, ?TeamDefinitionRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teamTemplateDefinition.item.teamDefinition.permissionGrants.item collection
     * @param string $id Unique identifier of the item
     * @return ResourceSpecificPermissionGrantItemRequestBuilder
    */
    public function permissionGrantsById(string $id): ResourceSpecificPermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['resourceSpecificPermissionGrant%2Did'] = $id;
        return new ResourceSpecificPermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teamTemplateDefinition.item.teamDefinition.tags.item collection
     * @param string $id Unique identifier of the item
     * @return TeamworkTagItemRequestBuilder
    */
    public function tagsById(string $id): TeamworkTagItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamworkTag%2Did'] = $id;
        return new TeamworkTagItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
