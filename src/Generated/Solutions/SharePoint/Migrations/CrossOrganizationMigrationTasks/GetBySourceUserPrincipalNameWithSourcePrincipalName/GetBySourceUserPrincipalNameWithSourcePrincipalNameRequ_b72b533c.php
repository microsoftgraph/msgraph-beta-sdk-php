<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationMigrationTasks\GetBySourceUserPrincipalNameWithSourcePrincipalName;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SharePointMigrationTask;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getBySourceUserPrincipalName method. Original name: getBySourceUserPrincipalNameWithSourcePrincipalNameRequestBuilder
*/
class GetBySourceUserPrincipalNameWithSourcePrincipalNameRequ_b72b533c extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetBySourceUserPrincipalNameWithSourcePrincipalNameRequ_b72b533c and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $sourcePrincipalName Usage: sourcePrincipalName='{sourcePrincipalName}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $sourcePrincipalName = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/sharePoint/migrations/crossOrganizationMigrationTasks/getBySourceUserPrincipalName(sourcePrincipalName=\'{sourcePrincipalName}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['sourcePrincipalName'] = $sourcePrincipalName;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a sharePointMigrationTask that was previously created for a user, using the source userPrincipalName. The returned sharePointMigrationTask object includes the source and target site URLs, migration status, optional timestamps (startedDateTime and finishedDateTime), and error details about issues during processing.
     * @param GetBySourceUserPrincipalNameWithSourcePrincipalNameRequ_db3b23e7|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointMigrationTask|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/sharepointmigrationtask-getbysourceuserprincipalname?view=graph-rest-beta Find more info here
    */
    public function get(?GetBySourceUserPrincipalNameWithSourcePrincipalNameRequ_db3b23e7 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointMigrationTask::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a sharePointMigrationTask that was previously created for a user, using the source userPrincipalName. The returned sharePointMigrationTask object includes the source and target site URLs, migration status, optional timestamps (startedDateTime and finishedDateTime), and error details about issues during processing.
     * @param GetBySourceUserPrincipalNameWithSourcePrincipalNameRequ_db3b23e7|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetBySourceUserPrincipalNameWithSourcePrincipalNameRequ_db3b23e7 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetBySourceUserPrincipalNameWithSourcePrincipalNameRequ_b72b533c
    */
    public function withUrl(string $rawUrl): GetBySourceUserPrincipalNameWithSourcePrincipalNameRequ_b72b533c {
        return new GetBySourceUserPrincipalNameWithSourcePrincipalNameRequ_b72b533c($rawUrl, $this->requestAdapter);
    }

}
