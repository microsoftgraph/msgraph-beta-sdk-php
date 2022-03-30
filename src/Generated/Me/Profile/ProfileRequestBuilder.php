<?php

namespace Microsoft\Graph\Beta\Generated\Me\Profile;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Beta\Generated\Me\Profile\Account\AccountRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Account\Item\UserAccountInformationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Addresses\AddressesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Addresses\Item\ItemAddressItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Anniversaries\AnniversariesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Anniversaries\Item\PersonAnnualEventItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Awards\AwardsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Awards\Item\PersonAwardItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Certifications\CertificationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Certifications\Item\PersonCertificationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\EducationalActivities\EducationalActivitiesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\EducationalActivities\Item\EducationalActivityItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Emails\EmailsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Emails\Item\ItemEmailItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Interests\InterestsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Interests\Item\PersonInterestItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Languages\Item\LanguageProficiencyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Languages\LanguagesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Names\Item\PersonNameItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Names\NamesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Notes\Item\PersonAnnotationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Notes\NotesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Patents\Item\ItemPatentItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Patents\PatentsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Phones\Item\ItemPhoneItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Phones\PhonesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Positions\Item\WorkPositionItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Positions\PositionsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Projects\Item\ProjectParticipationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Projects\ProjectsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Publications\Item\ItemPublicationItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Publications\PublicationsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Skills\Item\SkillProficiencyItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Skills\SkillsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\WebAccounts\Item\WebAccountItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\WebAccounts\WebAccountsRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Websites\Item\PersonWebsiteItemRequestBuilder;
use Microsoft\Graph\Beta\Generated\Me\Profile\Websites\WebsitesRequestBuilder;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ODataErrors\ODataError;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Profile;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ProfileRequestBuilder 
{
    public function account(): AccountRequestBuilder {
        return new AccountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function addresses(): AddressesRequestBuilder {
        return new AddressesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function anniversaries(): AnniversariesRequestBuilder {
        return new AnniversariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function awards(): AwardsRequestBuilder {
        return new AwardsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function certifications(): CertificationsRequestBuilder {
        return new CertificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function educationalActivities(): EducationalActivitiesRequestBuilder {
        return new EducationalActivitiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function emails(): EmailsRequestBuilder {
        return new EmailsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function interests(): InterestsRequestBuilder {
        return new InterestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function languages(): LanguagesRequestBuilder {
        return new LanguagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function names(): NamesRequestBuilder {
        return new NamesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function notes(): NotesRequestBuilder {
        return new NotesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function patents(): PatentsRequestBuilder {
        return new PatentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    public function phones(): PhonesRequestBuilder {
        return new PhonesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function positions(): PositionsRequestBuilder {
        return new PositionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function projects(): ProjectsRequestBuilder {
        return new ProjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function publications(): PublicationsRequestBuilder {
        return new PublicationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    public function skills(): SkillsRequestBuilder {
        return new SkillsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    public function webAccounts(): WebAccountsRequestBuilder {
        return new WebAccountsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    public function websites(): WebsitesRequestBuilder {
        return new WebsitesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.account.item collection
     * @param string $id Unique identifier of the item
     * @return UserAccountInformationItemRequestBuilder
    */
    public function accountById(string $id): UserAccountInformationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userAccountInformation_id'] = $id;
        return new UserAccountInformationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.addresses.item collection
     * @param string $id Unique identifier of the item
     * @return ItemAddressItemRequestBuilder
    */
    public function addressesById(string $id): ItemAddressItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['itemAddress_id'] = $id;
        return new ItemAddressItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.anniversaries.item collection
     * @param string $id Unique identifier of the item
     * @return PersonAnnualEventItemRequestBuilder
    */
    public function anniversariesById(string $id): PersonAnnualEventItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['personAnnualEvent_id'] = $id;
        return new PersonAnnualEventItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.awards.item collection
     * @param string $id Unique identifier of the item
     * @return PersonAwardItemRequestBuilder
    */
    public function awardsById(string $id): PersonAwardItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['personAward_id'] = $id;
        return new PersonAwardItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.certifications.item collection
     * @param string $id Unique identifier of the item
     * @return PersonCertificationItemRequestBuilder
    */
    public function certificationsById(string $id): PersonCertificationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['personCertification_id'] = $id;
        return new PersonCertificationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProfileRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/profile{?select,expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property profile for me
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Represents properties that are descriptive of a user in a tenant.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createGetRequestInformation(?array $queryParameters = null, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        if ($queryParameters !== null) {
            $requestInfo->setQueryParameters($queryParameters);
        }
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property profile in me
     * @param Profile $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Profile $body, ?array $headers = null, ?array $options = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($headers !== null) {
            $requestInfo->headers = array_merge($requestInfo->headers, $headers);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        if ($options !== null) {
            $requestInfo->addRequestOptions(...$options);
        }
        return $requestInfo;
    }

    /**
     * Delete navigation property profile for me
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.educationalActivities.item collection
     * @param string $id Unique identifier of the item
     * @return EducationalActivityItemRequestBuilder
    */
    public function educationalActivitiesById(string $id): EducationalActivityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['educationalActivity_id'] = $id;
        return new EducationalActivityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.emails.item collection
     * @param string $id Unique identifier of the item
     * @return ItemEmailItemRequestBuilder
    */
    public function emailsById(string $id): ItemEmailItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['itemEmail_id'] = $id;
        return new ItemEmailItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Represents properties that are descriptive of a user in a tenant.
     * @param array|null $queryParameters Request query parameters
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?array $queryParameters = null, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($queryParameters, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, Profile::class, $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.interests.item collection
     * @param string $id Unique identifier of the item
     * @return PersonInterestItemRequestBuilder
    */
    public function interestsById(string $id): PersonInterestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['personInterest_id'] = $id;
        return new PersonInterestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.languages.item collection
     * @param string $id Unique identifier of the item
     * @return LanguageProficiencyItemRequestBuilder
    */
    public function languagesById(string $id): LanguageProficiencyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['languageProficiency_id'] = $id;
        return new LanguageProficiencyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.names.item collection
     * @param string $id Unique identifier of the item
     * @return PersonNameItemRequestBuilder
    */
    public function namesById(string $id): PersonNameItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['personName_id'] = $id;
        return new PersonNameItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.notes.item collection
     * @param string $id Unique identifier of the item
     * @return PersonAnnotationItemRequestBuilder
    */
    public function notesById(string $id): PersonAnnotationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['personAnnotation_id'] = $id;
        return new PersonAnnotationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property profile in me
     * @param Profile $body 
     * @param array<string, mixed>|null $headers Request headers
     * @param array<string, RequestOption>|null $options Request options
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Profile $body, ?array $headers = null, ?array $options = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $headers, $options);
        try {
            return $this->requestAdapter->sendAsync($requestInfo, '', $responseHandler);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.patents.item collection
     * @param string $id Unique identifier of the item
     * @return ItemPatentItemRequestBuilder
    */
    public function patentsById(string $id): ItemPatentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['itemPatent_id'] = $id;
        return new ItemPatentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.phones.item collection
     * @param string $id Unique identifier of the item
     * @return ItemPhoneItemRequestBuilder
    */
    public function phonesById(string $id): ItemPhoneItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['itemPhone_id'] = $id;
        return new ItemPhoneItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.positions.item collection
     * @param string $id Unique identifier of the item
     * @return WorkPositionItemRequestBuilder
    */
    public function positionsById(string $id): WorkPositionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workPosition_id'] = $id;
        return new WorkPositionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.projects.item collection
     * @param string $id Unique identifier of the item
     * @return ProjectParticipationItemRequestBuilder
    */
    public function projectsById(string $id): ProjectParticipationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['projectParticipation_id'] = $id;
        return new ProjectParticipationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.publications.item collection
     * @param string $id Unique identifier of the item
     * @return ItemPublicationItemRequestBuilder
    */
    public function publicationsById(string $id): ItemPublicationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['itemPublication_id'] = $id;
        return new ItemPublicationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.skills.item collection
     * @param string $id Unique identifier of the item
     * @return SkillProficiencyItemRequestBuilder
    */
    public function skillsById(string $id): SkillProficiencyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['skillProficiency_id'] = $id;
        return new SkillProficiencyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.webAccounts.item collection
     * @param string $id Unique identifier of the item
     * @return WebAccountItemRequestBuilder
    */
    public function webAccountsById(string $id): WebAccountItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['webAccount_id'] = $id;
        return new WebAccountItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Beta\Generated.me.profile.websites.item collection
     * @param string $id Unique identifier of the item
     * @return PersonWebsiteItemRequestBuilder
    */
    public function websitesById(string $id): PersonWebsiteItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['personWebsite_id'] = $id;
        return new PersonWebsiteItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
