<?php

namespace Microsoft\Graph\Beta\Generated\Security\AttackSimulation\TrainingCampaigns;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\TrainingCampaign;
use Microsoft\Graph\Beta\Generated\Models\TrainingCampaignCollectionResponse;
use Microsoft\Graph\Beta\Generated\Security\AttackSimulation\TrainingCampaigns\Count\CountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\AttackSimulation\TrainingCampaigns\Item\TrainingCampaignItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the trainingCampaigns property of the microsoft.graph.attackSimulationRoot entity.
*/
class TrainingCampaignsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the trainingCampaigns property of the microsoft.graph.attackSimulationRoot entity.
     * @param string $trainingCampaignId The unique identifier of trainingCampaign
     * @return TrainingCampaignItemRequestBuilder
    */
    public function byTrainingCampaignId(string $trainingCampaignId): TrainingCampaignItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['trainingCampaign%2Did'] = $trainingCampaignId;
        return new TrainingCampaignItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TrainingCampaignsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/attackSimulation/trainingCampaigns{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of trainingCampaign objects and their properties.
     * @param TrainingCampaignsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TrainingCampaignCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/attacksimulationroot-list-trainingcampaigns?view=graph-rest-beta Find more info here
    */
    public function get(?TrainingCampaignsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TrainingCampaignCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new trainingCampaign object.
     * @param TrainingCampaign $body The request body
     * @param TrainingCampaignsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TrainingCampaign|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/attacksimulationroot-post-trainingcampaigns?view=graph-rest-beta Find more info here
    */
    public function post(TrainingCampaign $body, ?TrainingCampaignsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TrainingCampaign::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of trainingCampaign objects and their properties.
     * @param TrainingCampaignsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TrainingCampaignsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new trainingCampaign object.
     * @param TrainingCampaign $body The request body
     * @param TrainingCampaignsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TrainingCampaign $body, ?TrainingCampaignsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return TrainingCampaignsRequestBuilder
    */
    public function withUrl(string $rawUrl): TrainingCampaignsRequestBuilder {
        return new TrainingCampaignsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
