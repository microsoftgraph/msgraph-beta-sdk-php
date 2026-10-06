<?php

namespace Microsoft\Graph\Beta\Generated\Security\MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceId;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getHuntingSchemaTables method.
*/
class MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/microsoft.graph.security.getHuntingSchemaTables(workspaceId=@workspaceId){?%24count,%24filter,%24search,%24skip,%24top,workspaceId*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve only the advanced hunting tables that the signed-in user is authorized to query in advanced hunting with Microsoft Defender XDR. The returned tables reflect the user's effective permissions. Each user within a tenant might have a different effective set of tables depending on their role and access level. Unlike getHuntingSchema, which returns both tables and functions in a single huntingSchemaResult, this function returns the tables as a collection. Because the result is a collection, you can apply OData query parameters such as $filter, $select, and $top to retrieve only the tables and columns you need. Common use cases include:
     * @param MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetHuntingSchemaTablesWithWorkspaceIdGetResponse|null>
     * @throws Exception
    */
    public function get(?MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetHuntingSchemaTablesWithWorkspaceIdGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve only the advanced hunting tables that the signed-in user is authorized to query in advanced hunting with Microsoft Defender XDR. The returned tables reflect the user's effective permissions. Each user within a tenant might have a different effective set of tables depending on their role and access level. Unlike getHuntingSchema, which returns both tables and functions in a single huntingSchemaResult, this function returns the tables as a collection. Because the result is a collection, you can apply OData query parameters such as $filter, $select, and $top to retrieve only the tables and columns you need. Common use cases include:
     * @param MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilder {
        return new MicrosoftGraphSecurityGetHuntingSchemaTablesWithWorkspaceIdRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
