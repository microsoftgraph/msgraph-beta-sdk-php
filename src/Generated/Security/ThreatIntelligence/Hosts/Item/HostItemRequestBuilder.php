<?php

namespace Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\Host;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\Components\ComponentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\Components\Item\HostComponentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\Cookies\CookiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\Cookies\Item\HostCookieItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\PassiveDns\PassiveDnsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\PassiveDnsReverse\PassiveDnsReverseRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\Reputation\ReputationRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\Trackers\Item\HostTrackerItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\Trackers\TrackersRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the hosts property of the microsoft.graph.security.threatIntelligence entity.
*/
class HostItemRequestBuilder 
{
    /**
     * Provides operations to manage the components property of the microsoft.graph.security.host entity.
    */
    public function components(): ComponentsRequestBuilder {
        return new ComponentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the cookies property of the microsoft.graph.security.host entity.
    */
    public function cookies(): CookiesRequestBuilder {
        return new CookiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the passiveDns property of the microsoft.graph.security.host entity.
    */
    public function passiveDns(): PassiveDnsRequestBuilder {
        return new PassiveDnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the passiveDnsReverse property of the microsoft.graph.security.host entity.
    */
    public function passiveDnsReverse(): PassiveDnsReverseRequestBuilder {
        return new PassiveDnsReverseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the reputation property of the microsoft.graph.security.host entity.
    */
    public function reputation(): ReputationRequestBuilder {
        return new ReputationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the trackers property of the microsoft.graph.security.host entity.
    */
    public function trackers(): TrackersRequestBuilder {
        return new TrackersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the components property of the microsoft.graph.security.host entity.
     * @param string $id Unique identifier of the item
     * @return HostComponentItemRequestBuilder
    */
    public function componentsById(string $id): HostComponentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['hostComponent%2Did'] = $id;
        return new HostComponentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new HostItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/security/threatIntelligence/hosts/{host%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to manage the cookies property of the microsoft.graph.security.host entity.
     * @param string $id Unique identifier of the item
     * @return HostCookieItemRequestBuilder
    */
    public function cookiesById(string $id): HostCookieItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['hostCookie%2Did'] = $id;
        return new HostCookieItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property hosts for security
     * @param HostItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?HostItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * Refers to microsoft.graph.security.host objects that Microsoft Threat Intelligence has observed.Note: List retrieval is not yet supported.
     * @param HostItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?HostItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Host::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the passiveDns property of the microsoft.graph.security.host entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\PassiveDns\Item\PassiveDnsRecordItemRequestBuilder
    */
    public function passiveDnsById(string $id): \Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\PassiveDns\Item\PassiveDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['passiveDnsRecord%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\PassiveDns\Item\PassiveDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the passiveDnsReverse property of the microsoft.graph.security.host entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\PassiveDnsReverse\Item\PassiveDnsRecordItemRequestBuilder
    */
    public function passiveDnsReverseById(string $id): \Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\PassiveDnsReverse\Item\PassiveDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['passiveDnsRecord%2Did'] = $id;
        return new \Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\PassiveDnsReverse\Item\PassiveDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property hosts in security
     * @param Host $body The request body
     * @param HostItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(Host $body, ?HostItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Host::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property hosts for security
     * @param HostItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?HostItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Refers to microsoft.graph.security.host objects that Microsoft Threat Intelligence has observed.Note: List retrieval is not yet supported.
     * @param HostItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?HostItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property hosts in security
     * @param Host $body The request body
     * @param HostItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Host $body, ?HostItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Provides operations to manage the trackers property of the microsoft.graph.security.host entity.
     * @param string $id Unique identifier of the item
     * @return HostTrackerItemRequestBuilder
    */
    public function trackersById(string $id): HostTrackerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['hostTracker%2Did'] = $id;
        return new HostTrackerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
