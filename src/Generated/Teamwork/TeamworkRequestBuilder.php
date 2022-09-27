<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Teamwork;
use Microsoft\Graph\Beta\Generated\Teamwork\DeletedTeams\DeletedTeamsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\DeletedTeams\Item\DeletedTeamItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\Devices\DevicesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item\TeamworkDeviceItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\SendActivityNotificationToRecipients\SendActivityNotificationToRecipientsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamsAppSettings\TeamsAppSettingsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamTemplates\Item\TeamTemplateItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\TeamTemplates\TeamTemplatesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\WorkforceIntegrations\Item\WorkforceIntegrationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Teamwork\WorkforceIntegrations\WorkforceIntegrationsRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class TeamworkRequestBuilder 
{
    /**
     * The deletedTeams property
    */
    public function deletedTeams(): DeletedTeamsRequestBuilder {
        return new DeletedTeamsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The devices property
    */
    public function devices(): DevicesRequestBuilder {
        return new DevicesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The sendActivityNotificationToRecipients property
    */
    public function sendActivityNotificationToRecipients(): SendActivityNotificationToRecipientsRequestBuilder {
        return new SendActivityNotificationToRecipientsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The teamsAppSettings property
    */
    public function teamsAppSettings(): TeamsAppSettingsRequestBuilder {
        return new TeamsAppSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The teamTemplates property
    */
    public function teamTemplates(): TeamTemplatesRequestBuilder {
        return new TeamTemplatesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The workforceIntegrations property
    */
    public function workforceIntegrations(): WorkforceIntegrationsRequestBuilder {
        return new WorkforceIntegrationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new TeamworkRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/teamwork{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get teamwork
     * @param TeamworkRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?TeamworkRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update teamwork
     * @param Teamwork $body 
     * @param TeamworkRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Teamwork $body, ?TeamworkRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph\Beta\Generated.teamwork.deletedTeams.item collection
     * @param string $id Unique identifier of the item
     * @return DeletedTeamItemRequestBuilder
    */
    public function deletedTeamsById(string $id): DeletedTeamItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deletedTeam%2Did'] = $id;
        return new DeletedTeamItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teamwork.devices.item collection
     * @param string $id Unique identifier of the item
     * @return TeamworkDeviceItemRequestBuilder
    */
    public function devicesById(string $id): TeamworkDeviceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamworkDevice%2Did'] = $id;
        return new TeamworkDeviceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get teamwork
     * @param TeamworkRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?TeamworkRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Teamwork::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update teamwork
     * @param Teamwork $body 
     * @param TeamworkRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Teamwork $body, ?TeamworkRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Teamwork::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teamwork.teamTemplates.item collection
     * @param string $id Unique identifier of the item
     * @return TeamTemplateItemRequestBuilder
    */
    public function teamTemplatesById(string $id): TeamTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamTemplate%2Did'] = $id;
        return new TeamTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.teamwork.workforceIntegrations.item collection
     * @param string $id Unique identifier of the item
     * @return WorkforceIntegrationItemRequestBuilder
    */
    public function workforceIntegrationsById(string $id): WorkforceIntegrationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workforceIntegration%2Did'] = $id;
        return new WorkforceIntegrationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
