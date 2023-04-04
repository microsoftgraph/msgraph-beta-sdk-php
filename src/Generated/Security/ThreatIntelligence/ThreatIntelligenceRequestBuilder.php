<?php

namespace Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\ThreatIntelligence;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\ArticleIndicators\ArticleIndicatorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\ArticleIndicators\Item\ArticleIndicatorItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Articles\ArticlesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Articles\Item\ArticleItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\HostComponents\HostComponentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\HostComponents\Item\HostComponentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\HostCookies\HostCookiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\HostCookies\Item\HostCookieItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\HostsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Hosts\Item\HostItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\HostTrackers\HostTrackersRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\HostTrackers\Item\HostTrackerItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\IntelligenceProfileIndicators\IntelligenceProfileIndicatorsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\IntelligenceProfileIndicators\Item\IntelligenceProfileIndicatorItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\IntelProfiles\IntelProfilesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\IntelProfiles\Item\IntelligenceProfileItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\PassiveDnsRecords\Item\PassiveDnsRecordItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\PassiveDnsRecords\PassiveDnsRecordsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Vulnerabilities\Item\VulnerabilityItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Security\ThreatIntelligence\Vulnerabilities\VulnerabilitiesRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to manage the threatIntelligence property of the microsoft.graph.security entity.
*/
class ThreatIntelligenceRequestBuilder 
{
    /**
     * Provides operations to manage the articleIndicators property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function articleIndicators(): ArticleIndicatorsRequestBuilder {
        return new ArticleIndicatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the articles property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function articles(): ArticlesRequestBuilder {
        return new ArticlesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the hostComponents property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function hostComponents(): HostComponentsRequestBuilder {
        return new HostComponentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the hostCookies property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function hostCookies(): HostCookiesRequestBuilder {
        return new HostCookiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the hosts property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function hosts(): HostsRequestBuilder {
        return new HostsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the hostTrackers property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function hostTrackers(): HostTrackersRequestBuilder {
        return new HostTrackersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the intelligenceProfileIndicators property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function intelligenceProfileIndicators(): IntelligenceProfileIndicatorsRequestBuilder {
        return new IntelligenceProfileIndicatorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the intelProfiles property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function intelProfiles(): IntelProfilesRequestBuilder {
        return new IntelProfilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the passiveDnsRecords property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function passiveDnsRecords(): PassiveDnsRecordsRequestBuilder {
        return new PassiveDnsRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the vulnerabilities property of the microsoft.graph.security.threatIntelligence entity.
    */
    public function vulnerabilities(): VulnerabilitiesRequestBuilder {
        return new VulnerabilitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the articleIndicators property of the microsoft.graph.security.threatIntelligence entity.
     * @param string $id Unique identifier of the item
     * @return ArticleIndicatorItemRequestBuilder
    */
    public function articleIndicatorsById(string $id): ArticleIndicatorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['articleIndicator%2Did'] = $id;
        return new ArticleIndicatorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the articles property of the microsoft.graph.security.threatIntelligence entity.
     * @param string $id Unique identifier of the item
     * @return ArticleItemRequestBuilder
    */
    public function articlesById(string $id): ArticleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['article%2Did'] = $id;
        return new ArticleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ThreatIntelligenceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/security/threatIntelligence{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property threatIntelligence for security
     * @param ThreatIntelligenceRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?ThreatIntelligenceRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get threatIntelligence from security
     * @param ThreatIntelligenceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?ThreatIntelligenceRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ThreatIntelligence::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the hostComponents property of the microsoft.graph.security.threatIntelligence entity.
     * @param string $id Unique identifier of the item
     * @return HostComponentItemRequestBuilder
    */
    public function hostComponentsById(string $id): HostComponentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['hostComponent%2Did'] = $id;
        return new HostComponentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the hostCookies property of the microsoft.graph.security.threatIntelligence entity.
     * @param string $id Unique identifier of the item
     * @return HostCookieItemRequestBuilder
    */
    public function hostCookiesById(string $id): HostCookieItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['hostCookie%2Did'] = $id;
        return new HostCookieItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the hosts property of the microsoft.graph.security.threatIntelligence entity.
     * @param string $id Unique identifier of the item
     * @return HostItemRequestBuilder
    */
    public function hostsById(string $id): HostItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['host%2Did'] = $id;
        return new HostItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the hostTrackers property of the microsoft.graph.security.threatIntelligence entity.
     * @param string $id Unique identifier of the item
     * @return HostTrackerItemRequestBuilder
    */
    public function hostTrackersById(string $id): HostTrackerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['hostTracker%2Did'] = $id;
        return new HostTrackerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the intelligenceProfileIndicators property of the microsoft.graph.security.threatIntelligence entity.
     * @param string $id Unique identifier of the item
     * @return IntelligenceProfileIndicatorItemRequestBuilder
    */
    public function intelligenceProfileIndicatorsById(string $id): IntelligenceProfileIndicatorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['intelligenceProfileIndicator%2Did'] = $id;
        return new IntelligenceProfileIndicatorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the intelProfiles property of the microsoft.graph.security.threatIntelligence entity.
     * @param string $id Unique identifier of the item
     * @return IntelligenceProfileItemRequestBuilder
    */
    public function intelProfilesById(string $id): IntelligenceProfileItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['intelligenceProfile%2Did'] = $id;
        return new IntelligenceProfileItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the passiveDnsRecords property of the microsoft.graph.security.threatIntelligence entity.
     * @param string $id Unique identifier of the item
     * @return PassiveDnsRecordItemRequestBuilder
    */
    public function passiveDnsRecordsById(string $id): PassiveDnsRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['passiveDnsRecord%2Did'] = $id;
        return new PassiveDnsRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property threatIntelligence in security
     * @param ThreatIntelligence $body The request body
     * @param ThreatIntelligenceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(ThreatIntelligence $body, ?ThreatIntelligenceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ThreatIntelligence::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property threatIntelligence for security
     * @param ThreatIntelligenceRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ThreatIntelligenceRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get threatIntelligence from security
     * @param ThreatIntelligenceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ThreatIntelligenceRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property threatIntelligence in security
     * @param ThreatIntelligence $body The request body
     * @param ThreatIntelligenceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ThreatIntelligence $body, ?ThreatIntelligenceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Provides operations to manage the vulnerabilities property of the microsoft.graph.security.threatIntelligence entity.
     * @param string $id Unique identifier of the item
     * @return VulnerabilityItemRequestBuilder
    */
    public function vulnerabilitiesById(string $id): VulnerabilityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['vulnerability%2Did'] = $id;
        return new VulnerabilityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
