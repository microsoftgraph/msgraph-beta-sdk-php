<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Teamwork;
use Microsoft\Graph\Beta\Generated\Teamwork\DeletedChats\DeletedChatsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\DeletedTeams\DeletedTeamsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\DetermineIfInteractionIsAllowed\DetermineIfInteractionIsAllowedRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\Devices\DevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\SendActivityNotificationToRecipients\SendActivityNotificationToRecipientsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamsAppSettings\TeamsAppSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamTemplates\TeamTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\WorkforceIntegrations\WorkforceIntegrationsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the teamwork singleton.
*/
class TeamworkRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the deletedChats property of the microsoft.graph.teamwork entity.
    */
    public function deletedChats(): DeletedChatsRequestBuilder {
        return new DeletedChatsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deletedTeams property of the microsoft.graph.teamwork entity.
    */
    public function deletedTeams(): DeletedTeamsRequestBuilder {
        return new DeletedTeamsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the determineIfInteractionIsAllowed method.
    */
    public function determineIfInteractionIsAllowed(): DetermineIfInteractionIsAllowedRequestBuilder {
        return new DetermineIfInteractionIsAllowedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the devices property of the microsoft.graph.teamwork entity.
    */
    public function devices(): DevicesRequestBuilder {
        return new DevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the sendActivityNotificationToRecipients method.
    */
    public function sendActivityNotificationToRecipients(): SendActivityNotificationToRecipientsRequestBuilder {
        return new SendActivityNotificationToRecipientsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the teamsAppSettings property of the microsoft.graph.teamwork entity.
    */
    public function teamsAppSettings(): TeamsAppSettingsRequestBuilder {
        return new TeamsAppSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the teamTemplates property of the microsoft.graph.teamwork entity.
    */
    public function teamTemplates(): TeamTemplatesRequestBuilder {
        return new TeamTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the workforceIntegrations property of the microsoft.graph.teamwork entity.
    */
    public function workforceIntegrations(): WorkforceIntegrationsRequestBuilder {
        return new WorkforceIntegrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TeamworkRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teamwork{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the properties and relationships of a teamwork object, such as the region of the organization and whether Microsoft Teams is enabled.
     * @param TeamworkRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Teamwork|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/teamwork-get?view=graph-rest-beta Find more info here
    */
    public function get(?TeamworkRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Teamwork::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update teamwork
     * @param Teamwork $body The request body
     * @param TeamworkRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Teamwork|null>
     * @throws Exception
    */
    public function patch(Teamwork $body, ?TeamworkRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Teamwork::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the properties and relationships of a teamwork object, such as the region of the organization and whether Microsoft Teams is enabled.
     * @param TeamworkRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TeamworkRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Update teamwork
     * @param Teamwork $body The request body
     * @param TeamworkRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Teamwork $body, ?TeamworkRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return TeamworkRequestBuilder
    */
    public function withUrl(string $rawUrl): TeamworkRequestBuilder {
        return new TeamworkRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
