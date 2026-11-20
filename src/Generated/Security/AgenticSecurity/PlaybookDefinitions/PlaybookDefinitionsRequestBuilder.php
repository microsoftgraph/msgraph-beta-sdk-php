<?php

namespace Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\PlaybookDefinitions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\PlaybookDefinitionCollectionResponse;
use Microsoft\Graph\Beta\Generated\Security\AgenticSecurity\PlaybookDefinitions\Item\PlaybookDefinitionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the playbookDefinitions property of the microsoft.graph.agenticSecurityRoot entity.
*/
class PlaybookDefinitionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the playbookDefinitions property of the microsoft.graph.agenticSecurityRoot entity.
     * @param string $playbookDefinitionId The unique identifier of playbookDefinition
     * @return PlaybookDefinitionItemRequestBuilder
    */
    public function byPlaybookDefinitionId(string $playbookDefinitionId): PlaybookDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['playbookDefinition%2Did'] = $playbookDefinitionId;
        return new PlaybookDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PlaybookDefinitionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/agenticSecurity/playbookDefinitions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List the read-only playbook catalog available to the signed-in user. This operation uses the playbookDefinition resource.
     * @param PlaybookDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PlaybookDefinitionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/agenticsecurityroot-list-playbookdefinitions?view=graph-rest-beta Find more info here
    */
    public function get(?PlaybookDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PlaybookDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List the read-only playbook catalog available to the signed-in user. This operation uses the playbookDefinition resource.
     * @param PlaybookDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PlaybookDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return PlaybookDefinitionsRequestBuilder
    */
    public function withUrl(string $rawUrl): PlaybookDefinitionsRequestBuilder {
        return new PlaybookDefinitionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
