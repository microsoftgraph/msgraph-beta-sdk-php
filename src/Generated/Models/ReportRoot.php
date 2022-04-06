<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReportRoot extends Entity 
{
    /** @var array<ApplicationSignInDetailedSummary>|null $applicationSignInDetailedSummary Represents a detailed summary of an application sign-in. */
    private ?array $applicationSignInDetailedSummary = null;
    
    /** @var AuthenticationMethodsRoot|null $authenticationMethods Container for navigation properties for Azure AD authentication methods resources. */
    private ?AuthenticationMethodsRoot $authenticationMethods = null;
    
    /** @var array<CredentialUserRegistrationDetails>|null $credentialUserRegistrationDetails Details of the usage of self-service password reset and multi-factor authentication (MFA) for all registered users. */
    private ?array $credentialUserRegistrationDetails = null;
    
    /** @var array<PrintUsageByPrinter>|null $dailyPrintUsageByPrinter The dailyPrintUsageByPrinter property */
    private ?array $dailyPrintUsageByPrinter = null;
    
    /** @var array<PrintUsageByUser>|null $dailyPrintUsageByUser The dailyPrintUsageByUser property */
    private ?array $dailyPrintUsageByUser = null;
    
    /** @var array<PrintUsageByPrinter>|null $dailyPrintUsageSummariesByPrinter The dailyPrintUsageSummariesByPrinter property */
    private ?array $dailyPrintUsageSummariesByPrinter = null;
    
    /** @var array<PrintUsageByUser>|null $dailyPrintUsageSummariesByUser The dailyPrintUsageSummariesByUser property */
    private ?array $dailyPrintUsageSummariesByUser = null;
    
    /** @var array<PrintUsageByPrinter>|null $monthlyPrintUsageByPrinter The monthlyPrintUsageByPrinter property */
    private ?array $monthlyPrintUsageByPrinter = null;
    
    /** @var array<PrintUsageByUser>|null $monthlyPrintUsageByUser The monthlyPrintUsageByUser property */
    private ?array $monthlyPrintUsageByUser = null;
    
    /** @var array<PrintUsageByPrinter>|null $monthlyPrintUsageSummariesByPrinter The monthlyPrintUsageSummariesByPrinter property */
    private ?array $monthlyPrintUsageSummariesByPrinter = null;
    
    /** @var array<PrintUsageByUser>|null $monthlyPrintUsageSummariesByUser The monthlyPrintUsageSummariesByUser property */
    private ?array $monthlyPrintUsageSummariesByUser = null;
    
    /** @var array<UserCredentialUsageDetails>|null $userCredentialUsageDetails Represents the self-service password reset (SSPR) usage for a given tenant. */
    private ?array $userCredentialUsageDetails = null;
    
    /**
     * Instantiates a new reportRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportRoot
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ReportRoot {
        return new ReportRoot();
    }

    /**
     * Gets the applicationSignInDetailedSummary property value. Represents a detailed summary of an application sign-in.
     * @return array<ApplicationSignInDetailedSummary>|null
    */
    public function getApplicationSignInDetailedSummary(): ?array {
        return $this->applicationSignInDetailedSummary;
    }

    /**
     * Gets the authenticationMethods property value. Container for navigation properties for Azure AD authentication methods resources.
     * @return AuthenticationMethodsRoot|null
    */
    public function getAuthenticationMethods(): ?AuthenticationMethodsRoot {
        return $this->authenticationMethods;
    }

    /**
     * Gets the credentialUserRegistrationDetails property value. Details of the usage of self-service password reset and multi-factor authentication (MFA) for all registered users.
     * @return array<CredentialUserRegistrationDetails>|null
    */
    public function getCredentialUserRegistrationDetails(): ?array {
        return $this->credentialUserRegistrationDetails;
    }

    /**
     * Gets the dailyPrintUsageByPrinter property value. The dailyPrintUsageByPrinter property
     * @return array<PrintUsageByPrinter>|null
    */
    public function getDailyPrintUsageByPrinter(): ?array {
        return $this->dailyPrintUsageByPrinter;
    }

    /**
     * Gets the dailyPrintUsageByUser property value. The dailyPrintUsageByUser property
     * @return array<PrintUsageByUser>|null
    */
    public function getDailyPrintUsageByUser(): ?array {
        return $this->dailyPrintUsageByUser;
    }

    /**
     * Gets the dailyPrintUsageSummariesByPrinter property value. The dailyPrintUsageSummariesByPrinter property
     * @return array<PrintUsageByPrinter>|null
    */
    public function getDailyPrintUsageSummariesByPrinter(): ?array {
        return $this->dailyPrintUsageSummariesByPrinter;
    }

    /**
     * Gets the dailyPrintUsageSummariesByUser property value. The dailyPrintUsageSummariesByUser property
     * @return array<PrintUsageByUser>|null
    */
    public function getDailyPrintUsageSummariesByUser(): ?array {
        return $this->dailyPrintUsageSummariesByUser;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'applicationSignInDetailedSummary' => function (self $o, ParseNode $n) { $o->setApplicationSignInDetailedSummary($n->getCollectionOfObjectValues(ApplicationSignInDetailedSummary::class)); },
            'authenticationMethods' => function (self $o, ParseNode $n) { $o->setAuthenticationMethods($n->getObjectValue(AuthenticationMethodsRoot::class)); },
            'credentialUserRegistrationDetails' => function (self $o, ParseNode $n) { $o->setCredentialUserRegistrationDetails($n->getCollectionOfObjectValues(CredentialUserRegistrationDetails::class)); },
            'dailyPrintUsageByPrinter' => function (self $o, ParseNode $n) { $o->setDailyPrintUsageByPrinter($n->getCollectionOfObjectValues(PrintUsageByPrinter::class)); },
            'dailyPrintUsageByUser' => function (self $o, ParseNode $n) { $o->setDailyPrintUsageByUser($n->getCollectionOfObjectValues(PrintUsageByUser::class)); },
            'dailyPrintUsageSummariesByPrinter' => function (self $o, ParseNode $n) { $o->setDailyPrintUsageSummariesByPrinter($n->getCollectionOfObjectValues(PrintUsageByPrinter::class)); },
            'dailyPrintUsageSummariesByUser' => function (self $o, ParseNode $n) { $o->setDailyPrintUsageSummariesByUser($n->getCollectionOfObjectValues(PrintUsageByUser::class)); },
            'monthlyPrintUsageByPrinter' => function (self $o, ParseNode $n) { $o->setMonthlyPrintUsageByPrinter($n->getCollectionOfObjectValues(PrintUsageByPrinter::class)); },
            'monthlyPrintUsageByUser' => function (self $o, ParseNode $n) { $o->setMonthlyPrintUsageByUser($n->getCollectionOfObjectValues(PrintUsageByUser::class)); },
            'monthlyPrintUsageSummariesByPrinter' => function (self $o, ParseNode $n) { $o->setMonthlyPrintUsageSummariesByPrinter($n->getCollectionOfObjectValues(PrintUsageByPrinter::class)); },
            'monthlyPrintUsageSummariesByUser' => function (self $o, ParseNode $n) { $o->setMonthlyPrintUsageSummariesByUser($n->getCollectionOfObjectValues(PrintUsageByUser::class)); },
            'userCredentialUsageDetails' => function (self $o, ParseNode $n) { $o->setUserCredentialUsageDetails($n->getCollectionOfObjectValues(UserCredentialUsageDetails::class)); },
        ]);
    }

    /**
     * Gets the monthlyPrintUsageByPrinter property value. The monthlyPrintUsageByPrinter property
     * @return array<PrintUsageByPrinter>|null
    */
    public function getMonthlyPrintUsageByPrinter(): ?array {
        return $this->monthlyPrintUsageByPrinter;
    }

    /**
     * Gets the monthlyPrintUsageByUser property value. The monthlyPrintUsageByUser property
     * @return array<PrintUsageByUser>|null
    */
    public function getMonthlyPrintUsageByUser(): ?array {
        return $this->monthlyPrintUsageByUser;
    }

    /**
     * Gets the monthlyPrintUsageSummariesByPrinter property value. The monthlyPrintUsageSummariesByPrinter property
     * @return array<PrintUsageByPrinter>|null
    */
    public function getMonthlyPrintUsageSummariesByPrinter(): ?array {
        return $this->monthlyPrintUsageSummariesByPrinter;
    }

    /**
     * Gets the monthlyPrintUsageSummariesByUser property value. The monthlyPrintUsageSummariesByUser property
     * @return array<PrintUsageByUser>|null
    */
    public function getMonthlyPrintUsageSummariesByUser(): ?array {
        return $this->monthlyPrintUsageSummariesByUser;
    }

    /**
     * Gets the userCredentialUsageDetails property value. Represents the self-service password reset (SSPR) usage for a given tenant.
     * @return array<UserCredentialUsageDetails>|null
    */
    public function getUserCredentialUsageDetails(): ?array {
        return $this->userCredentialUsageDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('applicationSignInDetailedSummary', $this->applicationSignInDetailedSummary);
        $writer->writeObjectValue('authenticationMethods', $this->authenticationMethods);
        $writer->writeCollectionOfObjectValues('credentialUserRegistrationDetails', $this->credentialUserRegistrationDetails);
        $writer->writeCollectionOfObjectValues('dailyPrintUsageByPrinter', $this->dailyPrintUsageByPrinter);
        $writer->writeCollectionOfObjectValues('dailyPrintUsageByUser', $this->dailyPrintUsageByUser);
        $writer->writeCollectionOfObjectValues('dailyPrintUsageSummariesByPrinter', $this->dailyPrintUsageSummariesByPrinter);
        $writer->writeCollectionOfObjectValues('dailyPrintUsageSummariesByUser', $this->dailyPrintUsageSummariesByUser);
        $writer->writeCollectionOfObjectValues('monthlyPrintUsageByPrinter', $this->monthlyPrintUsageByPrinter);
        $writer->writeCollectionOfObjectValues('monthlyPrintUsageByUser', $this->monthlyPrintUsageByUser);
        $writer->writeCollectionOfObjectValues('monthlyPrintUsageSummariesByPrinter', $this->monthlyPrintUsageSummariesByPrinter);
        $writer->writeCollectionOfObjectValues('monthlyPrintUsageSummariesByUser', $this->monthlyPrintUsageSummariesByUser);
        $writer->writeCollectionOfObjectValues('userCredentialUsageDetails', $this->userCredentialUsageDetails);
    }

    /**
     * Sets the applicationSignInDetailedSummary property value. Represents a detailed summary of an application sign-in.
     *  @param array<ApplicationSignInDetailedSummary>|null $value Value to set for the applicationSignInDetailedSummary property.
    */
    public function setApplicationSignInDetailedSummary(?array $value ): void {
        $this->applicationSignInDetailedSummary = $value;
    }

    /**
     * Sets the authenticationMethods property value. Container for navigation properties for Azure AD authentication methods resources.
     *  @param AuthenticationMethodsRoot|null $value Value to set for the authenticationMethods property.
    */
    public function setAuthenticationMethods(?AuthenticationMethodsRoot $value ): void {
        $this->authenticationMethods = $value;
    }

    /**
     * Sets the credentialUserRegistrationDetails property value. Details of the usage of self-service password reset and multi-factor authentication (MFA) for all registered users.
     *  @param array<CredentialUserRegistrationDetails>|null $value Value to set for the credentialUserRegistrationDetails property.
    */
    public function setCredentialUserRegistrationDetails(?array $value ): void {
        $this->credentialUserRegistrationDetails = $value;
    }

    /**
     * Sets the dailyPrintUsageByPrinter property value. The dailyPrintUsageByPrinter property
     *  @param array<PrintUsageByPrinter>|null $value Value to set for the dailyPrintUsageByPrinter property.
    */
    public function setDailyPrintUsageByPrinter(?array $value ): void {
        $this->dailyPrintUsageByPrinter = $value;
    }

    /**
     * Sets the dailyPrintUsageByUser property value. The dailyPrintUsageByUser property
     *  @param array<PrintUsageByUser>|null $value Value to set for the dailyPrintUsageByUser property.
    */
    public function setDailyPrintUsageByUser(?array $value ): void {
        $this->dailyPrintUsageByUser = $value;
    }

    /**
     * Sets the dailyPrintUsageSummariesByPrinter property value. The dailyPrintUsageSummariesByPrinter property
     *  @param array<PrintUsageByPrinter>|null $value Value to set for the dailyPrintUsageSummariesByPrinter property.
    */
    public function setDailyPrintUsageSummariesByPrinter(?array $value ): void {
        $this->dailyPrintUsageSummariesByPrinter = $value;
    }

    /**
     * Sets the dailyPrintUsageSummariesByUser property value. The dailyPrintUsageSummariesByUser property
     *  @param array<PrintUsageByUser>|null $value Value to set for the dailyPrintUsageSummariesByUser property.
    */
    public function setDailyPrintUsageSummariesByUser(?array $value ): void {
        $this->dailyPrintUsageSummariesByUser = $value;
    }

    /**
     * Sets the monthlyPrintUsageByPrinter property value. The monthlyPrintUsageByPrinter property
     *  @param array<PrintUsageByPrinter>|null $value Value to set for the monthlyPrintUsageByPrinter property.
    */
    public function setMonthlyPrintUsageByPrinter(?array $value ): void {
        $this->monthlyPrintUsageByPrinter = $value;
    }

    /**
     * Sets the monthlyPrintUsageByUser property value. The monthlyPrintUsageByUser property
     *  @param array<PrintUsageByUser>|null $value Value to set for the monthlyPrintUsageByUser property.
    */
    public function setMonthlyPrintUsageByUser(?array $value ): void {
        $this->monthlyPrintUsageByUser = $value;
    }

    /**
     * Sets the monthlyPrintUsageSummariesByPrinter property value. The monthlyPrintUsageSummariesByPrinter property
     *  @param array<PrintUsageByPrinter>|null $value Value to set for the monthlyPrintUsageSummariesByPrinter property.
    */
    public function setMonthlyPrintUsageSummariesByPrinter(?array $value ): void {
        $this->monthlyPrintUsageSummariesByPrinter = $value;
    }

    /**
     * Sets the monthlyPrintUsageSummariesByUser property value. The monthlyPrintUsageSummariesByUser property
     *  @param array<PrintUsageByUser>|null $value Value to set for the monthlyPrintUsageSummariesByUser property.
    */
    public function setMonthlyPrintUsageSummariesByUser(?array $value ): void {
        $this->monthlyPrintUsageSummariesByUser = $value;
    }

    /**
     * Sets the userCredentialUsageDetails property value. Represents the self-service password reset (SSPR) usage for a given tenant.
     *  @param array<UserCredentialUsageDetails>|null $value Value to set for the userCredentialUsageDetails property.
    */
    public function setUserCredentialUsageDetails(?array $value ): void {
        $this->userCredentialUsageDetails = $value;
    }

}
