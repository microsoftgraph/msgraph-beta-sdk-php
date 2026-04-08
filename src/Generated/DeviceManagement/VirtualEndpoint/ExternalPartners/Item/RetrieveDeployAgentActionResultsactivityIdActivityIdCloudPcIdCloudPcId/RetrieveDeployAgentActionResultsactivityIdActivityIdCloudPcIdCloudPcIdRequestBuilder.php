<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\VirtualEndpoint\ExternalPartners\Item\RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the retrieveDeployAgentActionResults method.
*/
class RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/externalPartners/{cloudPcExternalPartner%2Did}/retrieveDeployAgentActionResults(activityId=\'@activityId\',cloudPcId=\'@cloudPcId\'){?%24count,%24filter,%24search,%24skip,%24top,activityId*,cloudPcId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the status of a specific deployment action on a specific Cloud PC device. If both activityId and cloudPcId are empty, the paging results are returned, and the pagination size is 100.
     * @param RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudpcexternalpartner-retrievedeployagentactionresults?view=graph-rest-beta Find more info here
    */
    public function get(?RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the status of a specific deployment action on a specific Cloud PC device. If both activityId and cloudPcId are empty, the paging results are returned, and the pagination size is 100.
     * @param RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilder
    */
    public function withUrl(string $rawUrl): RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilder {
        return new RetrieveDeployAgentActionResultsactivityIdActivityIdCloudPcIdCloudPcIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
