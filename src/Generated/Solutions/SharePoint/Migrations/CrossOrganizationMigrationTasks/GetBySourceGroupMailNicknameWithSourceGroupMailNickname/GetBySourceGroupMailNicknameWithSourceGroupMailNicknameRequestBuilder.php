<?php

namespace Microsoft\Graph\Beta\Generated\Solutions\SharePoint\Migrations\CrossOrganizationMigrationTasks\GetBySourceGroupMailNicknameWithSourceGroupMailNickname;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\SharePointMigrationTask;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getBySourceGroupMailNickname method.
*/
class GetBySourceGroupMailNicknameWithSourceGroupMailNicknameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetBySourceGroupMailNicknameWithSourceGroupMailNicknameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $sourceGroupMailNickname Usage: sourceGroupMailNickname='{sourceGroupMailNickname}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $sourceGroupMailNickname = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/sharePoint/migrations/crossOrganizationMigrationTasks/getBySourceGroupMailNickname(sourceGroupMailNickname=\'{sourceGroupMailNickname}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['sourceGroupMailNickname'] = $sourceGroupMailNickname;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a sharePointMigrationTask that was previously created for a group, using the source group mail nickname. The returned sharePointMigrationTask object includes the source and target site URLs, migration status, optional timestamps (startedDateTime and finishedDateTime), and error details about issues during processing.
     * @param GetBySourceGroupMailNicknameWithSourceGroupMailNicknameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointMigrationTask|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/sharepointmigrationtask-getbysourcegroupmailnickname?view=graph-rest-beta Find more info here
    */
    public function get(?GetBySourceGroupMailNicknameWithSourceGroupMailNicknameRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointMigrationTask::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a sharePointMigrationTask that was previously created for a group, using the source group mail nickname. The returned sharePointMigrationTask object includes the source and target site URLs, migration status, optional timestamps (startedDateTime and finishedDateTime), and error details about issues during processing.
     * @param GetBySourceGroupMailNicknameWithSourceGroupMailNicknameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetBySourceGroupMailNicknameWithSourceGroupMailNicknameRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetBySourceGroupMailNicknameWithSourceGroupMailNicknameRequestBuilder
    */
    public function withUrl(string $rawUrl): GetBySourceGroupMailNicknameWithSourceGroupMailNicknameRequestBuilder {
        return new GetBySourceGroupMailNicknameWithSourceGroupMailNicknameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
