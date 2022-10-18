<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Profile;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Profile;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Account\AccountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Account\Item\UserAccountInformationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Addresses\AddressesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Addresses\Item\ItemAddressItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Anniversaries\AnniversariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Anniversaries\Item\PersonAnnualEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Awards\AwardsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Awards\Item\PersonAwardItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Certifications\CertificationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Certifications\Item\PersonCertificationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\EducationalActivities\EducationalActivitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\EducationalActivities\Item\EducationalActivityItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Emails\EmailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Emails\Item\ItemEmailItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Interests\InterestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Interests\Item\PersonInterestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Languages\Item\LanguageProficiencyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Languages\LanguagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Names\Item\PersonNameItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Names\NamesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Notes\Item\PersonAnnotationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Notes\NotesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Patents\Item\ItemPatentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Patents\PatentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Phones\Item\ItemPhoneItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Phones\PhonesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Positions\Item\WorkPositionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Positions\PositionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Projects\Item\ProjectParticipationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Projects\ProjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Publications\Item\ItemPublicationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Publications\PublicationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Skills\Item\SkillProficiencyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Skills\SkillsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\WebAccounts\Item\WebAccountItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\WebAccounts\WebAccountsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Websites\Item\PersonWebsiteItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Users\Item\Profile\Websites\WebsitesRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ProfileRequestBuilder 
{
    /**
     * The account property
    */
    public function account(): AccountRequestBuilder {
        return new AccountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The addresses property
    */
    public function addresses(): AddressesRequestBuilder {
        return new AddressesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The anniversaries property
    */
    public function anniversaries(): AnniversariesRequestBuilder {
        return new AnniversariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The awards property
    */
    public function awards(): AwardsRequestBuilder {
        return new AwardsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The certifications property
    */
    public function certifications(): CertificationsRequestBuilder {
        return new CertificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The educationalActivities property
    */
    public function educationalActivities(): EducationalActivitiesRequestBuilder {
        return new EducationalActivitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The emails property
    */
    public function emails(): EmailsRequestBuilder {
        return new EmailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The interests property
    */
    public function interests(): InterestsRequestBuilder {
        return new InterestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The languages property
    */
    public function languages(): LanguagesRequestBuilder {
        return new LanguagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The names property
    */
    public function names(): NamesRequestBuilder {
        return new NamesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The notes property
    */
    public function notes(): NotesRequestBuilder {
        return new NotesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The patents property
    */
    public function patents(): PatentsRequestBuilder {
        return new PatentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The phones property
    */
    public function phones(): PhonesRequestBuilder {
        return new PhonesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The positions property
    */
    public function positions(): PositionsRequestBuilder {
        return new PositionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The projects property
    */
    public function projects(): ProjectsRequestBuilder {
        return new ProjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The publications property
    */
    public function publications(): PublicationsRequestBuilder {
        return new PublicationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The skills property
    */
    public function skills(): SkillsRequestBuilder {
        return new SkillsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * The webAccounts property
    */
    public function webAccounts(): WebAccountsRequestBuilder {
        return new WebAccountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The websites property
    */
    public function websites(): WebsitesRequestBuilder {
        return new WebsitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.account.item collection
     * @param string $id Unique identifier of the item
     * @return UserAccountInformationItemRequestBuilder
    */
    public function accountById(string $id): UserAccountInformationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userAccountInformation%2Did'] = $id;
        return new UserAccountInformationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.addresses.item collection
     * @param string $id Unique identifier of the item
     * @return ItemAddressItemRequestBuilder
    */
    public function addressesById(string $id): ItemAddressItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['itemAddress%2Did'] = $id;
        return new ItemAddressItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.anniversaries.item collection
     * @param string $id Unique identifier of the item
     * @return PersonAnnualEventItemRequestBuilder
    */
    public function anniversariesById(string $id): PersonAnnualEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['personAnnualEvent%2Did'] = $id;
        return new PersonAnnualEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.awards.item collection
     * @param string $id Unique identifier of the item
     * @return PersonAwardItemRequestBuilder
    */
    public function awardsById(string $id): PersonAwardItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['personAward%2Did'] = $id;
        return new PersonAwardItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.certifications.item collection
     * @param string $id Unique identifier of the item
     * @return PersonCertificationItemRequestBuilder
    */
    public function certificationsById(string $id): PersonCertificationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['personCertification%2Did'] = $id;
        return new PersonCertificationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProfileRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/users/{user%2Did}/profile{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Deletes a profile object from a user's account.
     * @param ProfileRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?ProfileRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Retrieve the properties and relationships of a profile object for a given user. The **profile** resource exposes various rich properties that are descriptive of the user as relationships, for example, anniversaries and education activities. To get one of these navigation properties, use the corresponding GET method on that property. See the methods exposed by **profile**.
     * @param ProfileRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ProfileRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * Update the navigation property profile in users
     * @param Profile $body 
     * @param ProfileRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Profile $body, ?ProfileRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Deletes a profile object from a user's account.
     * @param ProfileRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ProfileRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.educationalActivities.item collection
     * @param string $id Unique identifier of the item
     * @return EducationalActivityItemRequestBuilder
    */
    public function educationalActivitiesById(string $id): EducationalActivityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationalActivity%2Did'] = $id;
        return new EducationalActivityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.emails.item collection
     * @param string $id Unique identifier of the item
     * @return ItemEmailItemRequestBuilder
    */
    public function emailsById(string $id): ItemEmailItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['itemEmail%2Did'] = $id;
        return new ItemEmailItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Retrieve the properties and relationships of a profile object for a given user. The **profile** resource exposes various rich properties that are descriptive of the user as relationships, for example, anniversaries and education activities. To get one of these navigation properties, use the corresponding GET method on that property. See the methods exposed by **profile**.
     * @param ProfileRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ProfileRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Profile::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.interests.item collection
     * @param string $id Unique identifier of the item
     * @return PersonInterestItemRequestBuilder
    */
    public function interestsById(string $id): PersonInterestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['personInterest%2Did'] = $id;
        return new PersonInterestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.languages.item collection
     * @param string $id Unique identifier of the item
     * @return LanguageProficiencyItemRequestBuilder
    */
    public function languagesById(string $id): LanguageProficiencyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['languageProficiency%2Did'] = $id;
        return new LanguageProficiencyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.names.item collection
     * @param string $id Unique identifier of the item
     * @return PersonNameItemRequestBuilder
    */
    public function namesById(string $id): PersonNameItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['personName%2Did'] = $id;
        return new PersonNameItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.notes.item collection
     * @param string $id Unique identifier of the item
     * @return PersonAnnotationItemRequestBuilder
    */
    public function notesById(string $id): PersonAnnotationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['personAnnotation%2Did'] = $id;
        return new PersonAnnotationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property profile in users
     * @param Profile $body 
     * @param ProfileRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Profile $body, ?ProfileRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Profile::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.patents.item collection
     * @param string $id Unique identifier of the item
     * @return ItemPatentItemRequestBuilder
    */
    public function patentsById(string $id): ItemPatentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['itemPatent%2Did'] = $id;
        return new ItemPatentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.phones.item collection
     * @param string $id Unique identifier of the item
     * @return ItemPhoneItemRequestBuilder
    */
    public function phonesById(string $id): ItemPhoneItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['itemPhone%2Did'] = $id;
        return new ItemPhoneItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.positions.item collection
     * @param string $id Unique identifier of the item
     * @return WorkPositionItemRequestBuilder
    */
    public function positionsById(string $id): WorkPositionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workPosition%2Did'] = $id;
        return new WorkPositionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.projects.item collection
     * @param string $id Unique identifier of the item
     * @return ProjectParticipationItemRequestBuilder
    */
    public function projectsById(string $id): ProjectParticipationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['projectParticipation%2Did'] = $id;
        return new ProjectParticipationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.publications.item collection
     * @param string $id Unique identifier of the item
     * @return ItemPublicationItemRequestBuilder
    */
    public function publicationsById(string $id): ItemPublicationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['itemPublication%2Did'] = $id;
        return new ItemPublicationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.skills.item collection
     * @param string $id Unique identifier of the item
     * @return SkillProficiencyItemRequestBuilder
    */
    public function skillsById(string $id): SkillProficiencyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['skillProficiency%2Did'] = $id;
        return new SkillProficiencyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.webAccounts.item collection
     * @param string $id Unique identifier of the item
     * @return WebAccountItemRequestBuilder
    */
    public function webAccountsById(string $id): WebAccountItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['webAccount%2Did'] = $id;
        return new WebAccountItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.users.item.profile.websites.item collection
     * @param string $id Unique identifier of the item
     * @return PersonWebsiteItemRequestBuilder
    */
    public function websitesById(string $id): PersonWebsiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['personWebsite%2Did'] = $id;
        return new PersonWebsiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
