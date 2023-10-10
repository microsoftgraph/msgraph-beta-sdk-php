<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Profile;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Profile;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Account\AccountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Addresses\AddressesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Anniversaries\AnniversariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Awards\AwardsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Certifications\CertificationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\EducationalActivities\EducationalActivitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Emails\EmailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Interests\InterestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Languages\LanguagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Names\NamesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Notes\NotesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Patents\PatentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Phones\PhonesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Positions\PositionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Projects\ProjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Publications\PublicationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Skills\SkillsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\WebAccounts\WebAccountsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Websites\WebsitesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the profile property of the microsoft.graph.user entity.
*/
class ProfileRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the account property of the microsoft.graph.profile entity.
    */
    public function account(): AccountRequestBuilder {
        return new AccountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the addresses property of the microsoft.graph.profile entity.
    */
    public function addresses(): AddressesRequestBuilder {
        return new AddressesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the anniversaries property of the microsoft.graph.profile entity.
    */
    public function anniversaries(): AnniversariesRequestBuilder {
        return new AnniversariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the awards property of the microsoft.graph.profile entity.
    */
    public function awards(): AwardsRequestBuilder {
        return new AwardsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the certifications property of the microsoft.graph.profile entity.
    */
    public function certifications(): CertificationsRequestBuilder {
        return new CertificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the educationalActivities property of the microsoft.graph.profile entity.
    */
    public function educationalActivities(): EducationalActivitiesRequestBuilder {
        return new EducationalActivitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the emails property of the microsoft.graph.profile entity.
    */
    public function emails(): EmailsRequestBuilder {
        return new EmailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the interests property of the microsoft.graph.profile entity.
    */
    public function interests(): InterestsRequestBuilder {
        return new InterestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the languages property of the microsoft.graph.profile entity.
    */
    public function languages(): LanguagesRequestBuilder {
        return new LanguagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the names property of the microsoft.graph.profile entity.
    */
    public function names(): NamesRequestBuilder {
        return new NamesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the notes property of the microsoft.graph.profile entity.
    */
    public function notes(): NotesRequestBuilder {
        return new NotesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the patents property of the microsoft.graph.profile entity.
    */
    public function patents(): PatentsRequestBuilder {
        return new PatentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the phones property of the microsoft.graph.profile entity.
    */
    public function phones(): PhonesRequestBuilder {
        return new PhonesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the positions property of the microsoft.graph.profile entity.
    */
    public function positions(): PositionsRequestBuilder {
        return new PositionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the projects property of the microsoft.graph.profile entity.
    */
    public function projects(): ProjectsRequestBuilder {
        return new ProjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the publications property of the microsoft.graph.profile entity.
    */
    public function publications(): PublicationsRequestBuilder {
        return new PublicationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the skills property of the microsoft.graph.profile entity.
    */
    public function skills(): SkillsRequestBuilder {
        return new SkillsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the webAccounts property of the microsoft.graph.profile entity.
    */
    public function webAccounts(): WebAccountsRequestBuilder {
        return new WebAccountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the websites property of the microsoft.graph.profile entity.
    */
    public function websites(): WebsitesRequestBuilder {
        return new WebsitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ProfileRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/profile{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a profile object from a user's account. This API is available in the following national cloud deployments.
     * @param ProfileRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/profile-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?ProfileRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * Retrieve the properties and relationships of a profile object for a given user. The profile resource exposes various rich properties that are descriptive of the user as relationships, for example, anniversaries and education activities. To get one of these navigation properties, use the corresponding GET method on that property. See the methods exposed by profile. This API is available in the following national cloud deployments.
     * @param ProfileRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/profile-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ProfileRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Profile::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property profile in users
     * @param Profile $body The request body
     * @param ProfileRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(Profile $body, ?ProfileRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Profile::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Deletes a profile object from a user's account. This API is available in the following national cloud deployments.
     * @param ProfileRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ProfileRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Retrieve the properties and relationships of a profile object for a given user. The profile resource exposes various rich properties that are descriptive of the user as relationships, for example, anniversaries and education activities. To get one of these navigation properties, use the corresponding GET method on that property. See the methods exposed by profile. This API is available in the following national cloud deployments.
     * @param ProfileRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ProfileRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property profile in users
     * @param Profile $body The request body
     * @param ProfileRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Profile $body, ?ProfileRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ProfileRequestBuilder
    */
    public function withUrl(string $rawUrl): ProfileRequestBuilder {
        return new ProfileRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
