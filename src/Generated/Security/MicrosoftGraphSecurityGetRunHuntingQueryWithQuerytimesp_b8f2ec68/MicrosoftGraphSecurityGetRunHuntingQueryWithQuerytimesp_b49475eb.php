<?php

namespace Microsoft\Graph\Beta\Generated\Security\MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_b8f2ec68;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Security\HuntingQueryResults;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getRunHuntingQuery method. Original name: microsoftGraphSecurityGetRunHuntingQueryWithQuerytimespanTimespanWithWorkspaceIdRequestBuilder
*/
class MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_b49475eb extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_b49475eb and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $query Usage: query='{query}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $query = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/microsoft.graph.security.getRunHuntingQuery(query=\'{query}\',timespan=\'@timespan\',workspaceId=@workspaceId){?timespan*,workspaceId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['query'] = $query;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Query a specified set of event, activity, or entity data supported by Microsoft Defender XDR to proactively look for specific threats in your environment, by using a GET request. This function is the GET-based companion to the runHuntingQuery action. It accepts a query in Kusto Query Language (KQL) as a URL parameter, executes it against the advanced hunting schema, and returns the same huntingQueryResults shape as the POST action. Use this function in scenarios that can't issue authenticated POST requests, such as Power BI dashboards that authenticate through Web.Contents. Find out more about hunting for threats across devices, emails, apps, and identities. Learn about KQL. For information on using advanced hunting in the Microsoft Defender portal, see Proactively hunt for threats with advanced hunting in Microsoft Defender XDR.
     * @param MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_3a0bba03|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HuntingQueryResults|null>
     * @throws Exception
    */
    public function get(?MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_3a0bba03 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HuntingQueryResults::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Query a specified set of event, activity, or entity data supported by Microsoft Defender XDR to proactively look for specific threats in your environment, by using a GET request. This function is the GET-based companion to the runHuntingQuery action. It accepts a query in Kusto Query Language (KQL) as a URL parameter, executes it against the advanced hunting schema, and returns the same huntingQueryResults shape as the POST action. Use this function in scenarios that can't issue authenticated POST requests, such as Power BI dashboards that authenticate through Web.Contents. Find out more about hunting for threats across devices, emails, apps, and identities. Learn about KQL. For information on using advanced hunting in the Microsoft Defender portal, see Proactively hunt for threats with advanced hunting in Microsoft Defender XDR.
     * @param MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_3a0bba03|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_3a0bba03 $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_b49475eb
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_b49475eb {
        return new MicrosoftGraphSecurityGetRunHuntingQueryWithQuerytimesp_b49475eb($rawUrl, $this->requestAdapter);
    }

}
