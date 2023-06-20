<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReportRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new ReportRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportRoot {
        return new ReportRoot();
    }

    /**
     * Gets the appCredentialSignInActivities property value. Represents a collection of sign-in activities of application credentials.
     * @return array<AppCredentialSignInActivity>|null
    */
    public function getAppCredentialSignInActivities(): ?array {
        return $this->getBackingStore()->get('appCredentialSignInActivities');
    }

    /**
     * Gets the applicationSignInDetailedSummary property value. Represents a detailed summary of an application sign-in.
     * @return array<ApplicationSignInDetailedSummary>|null
    */
    public function getApplicationSignInDetailedSummary(): ?array {
        return $this->getBackingStore()->get('applicationSignInDetailedSummary');
    }

    /**
     * Gets the authenticationMethods property value. Container for navigation properties for Azure AD authentication methods resources.
     * @return AuthenticationMethodsRoot|null
    */
    public function getAuthenticationMethods(): ?AuthenticationMethodsRoot {
        return $this->getBackingStore()->get('authenticationMethods');
    }

    /**
     * Gets the credentialUserRegistrationDetails property value. Details of the usage of self-service password reset and multi-factor authentication (MFA) for all registered users.
     * @return array<CredentialUserRegistrationDetails>|null
    */
    public function getCredentialUserRegistrationDetails(): ?array {
        return $this->getBackingStore()->get('credentialUserRegistrationDetails');
    }

    /**
     * Gets the dailyPrintUsage property value. The dailyPrintUsage property
     * @return array<PrintUsage>|null
    */
    public function getDailyPrintUsage(): ?array {
        return $this->getBackingStore()->get('dailyPrintUsage');
    }

    /**
     * Gets the dailyPrintUsageByPrinter property value. The dailyPrintUsageByPrinter property
     * @return array<PrintUsageByPrinter>|null
    */
    public function getDailyPrintUsageByPrinter(): ?array {
        return $this->getBackingStore()->get('dailyPrintUsageByPrinter');
    }

    /**
     * Gets the dailyPrintUsageByUser property value. The dailyPrintUsageByUser property
     * @return array<PrintUsageByUser>|null
    */
    public function getDailyPrintUsageByUser(): ?array {
        return $this->getBackingStore()->get('dailyPrintUsageByUser');
    }

    /**
     * Gets the dailyPrintUsageSummariesByPrinter property value. The dailyPrintUsageSummariesByPrinter property
     * @return array<PrintUsageByPrinter>|null
    */
    public function getDailyPrintUsageSummariesByPrinter(): ?array {
        return $this->getBackingStore()->get('dailyPrintUsageSummariesByPrinter');
    }

    /**
     * Gets the dailyPrintUsageSummariesByUser property value. The dailyPrintUsageSummariesByUser property
     * @return array<PrintUsageByUser>|null
    */
    public function getDailyPrintUsageSummariesByUser(): ?array {
        return $this->getBackingStore()->get('dailyPrintUsageSummariesByUser');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appCredentialSignInActivities' => fn(ParseNode $n) => $o->setAppCredentialSignInActivities($n->getCollectionOfObjectValues([AppCredentialSignInActivity::class, 'createFromDiscriminatorValue'])),
            'applicationSignInDetailedSummary' => fn(ParseNode $n) => $o->setApplicationSignInDetailedSummary($n->getCollectionOfObjectValues([ApplicationSignInDetailedSummary::class, 'createFromDiscriminatorValue'])),
            'authenticationMethods' => fn(ParseNode $n) => $o->setAuthenticationMethods($n->getObjectValue([AuthenticationMethodsRoot::class, 'createFromDiscriminatorValue'])),
            'credentialUserRegistrationDetails' => fn(ParseNode $n) => $o->setCredentialUserRegistrationDetails($n->getCollectionOfObjectValues([CredentialUserRegistrationDetails::class, 'createFromDiscriminatorValue'])),
            'dailyPrintUsage' => fn(ParseNode $n) => $o->setDailyPrintUsage($n->getCollectionOfObjectValues([PrintUsage::class, 'createFromDiscriminatorValue'])),
            'dailyPrintUsageByPrinter' => fn(ParseNode $n) => $o->setDailyPrintUsageByPrinter($n->getCollectionOfObjectValues([PrintUsageByPrinter::class, 'createFromDiscriminatorValue'])),
            'dailyPrintUsageByUser' => fn(ParseNode $n) => $o->setDailyPrintUsageByUser($n->getCollectionOfObjectValues([PrintUsageByUser::class, 'createFromDiscriminatorValue'])),
            'dailyPrintUsageSummariesByPrinter' => fn(ParseNode $n) => $o->setDailyPrintUsageSummariesByPrinter($n->getCollectionOfObjectValues([PrintUsageByPrinter::class, 'createFromDiscriminatorValue'])),
            'dailyPrintUsageSummariesByUser' => fn(ParseNode $n) => $o->setDailyPrintUsageSummariesByUser($n->getCollectionOfObjectValues([PrintUsageByUser::class, 'createFromDiscriminatorValue'])),
            'monthlyPrintUsageByPrinter' => fn(ParseNode $n) => $o->setMonthlyPrintUsageByPrinter($n->getCollectionOfObjectValues([PrintUsageByPrinter::class, 'createFromDiscriminatorValue'])),
            'monthlyPrintUsageByUser' => fn(ParseNode $n) => $o->setMonthlyPrintUsageByUser($n->getCollectionOfObjectValues([PrintUsageByUser::class, 'createFromDiscriminatorValue'])),
            'monthlyPrintUsageSummariesByPrinter' => fn(ParseNode $n) => $o->setMonthlyPrintUsageSummariesByPrinter($n->getCollectionOfObjectValues([PrintUsageByPrinter::class, 'createFromDiscriminatorValue'])),
            'monthlyPrintUsageSummariesByUser' => fn(ParseNode $n) => $o->setMonthlyPrintUsageSummariesByUser($n->getCollectionOfObjectValues([PrintUsageByUser::class, 'createFromDiscriminatorValue'])),
            'security' => fn(ParseNode $n) => $o->setSecurity($n->getObjectValue([SecurityReportsRoot::class, 'createFromDiscriminatorValue'])),
            'servicePrincipalSignInActivities' => fn(ParseNode $n) => $o->setServicePrincipalSignInActivities($n->getCollectionOfObjectValues([ServicePrincipalSignInActivity::class, 'createFromDiscriminatorValue'])),
            'userCredentialUsageDetails' => fn(ParseNode $n) => $o->setUserCredentialUsageDetails($n->getCollectionOfObjectValues([UserCredentialUsageDetails::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the monthlyPrintUsageByPrinter property value. The monthlyPrintUsageByPrinter property
     * @return array<PrintUsageByPrinter>|null
    */
    public function getMonthlyPrintUsageByPrinter(): ?array {
        return $this->getBackingStore()->get('monthlyPrintUsageByPrinter');
    }

    /**
     * Gets the monthlyPrintUsageByUser property value. The monthlyPrintUsageByUser property
     * @return array<PrintUsageByUser>|null
    */
    public function getMonthlyPrintUsageByUser(): ?array {
        return $this->getBackingStore()->get('monthlyPrintUsageByUser');
    }

    /**
     * Gets the monthlyPrintUsageSummariesByPrinter property value. The monthlyPrintUsageSummariesByPrinter property
     * @return array<PrintUsageByPrinter>|null
    */
    public function getMonthlyPrintUsageSummariesByPrinter(): ?array {
        return $this->getBackingStore()->get('monthlyPrintUsageSummariesByPrinter');
    }

    /**
     * Gets the monthlyPrintUsageSummariesByUser property value. The monthlyPrintUsageSummariesByUser property
     * @return array<PrintUsageByUser>|null
    */
    public function getMonthlyPrintUsageSummariesByUser(): ?array {
        return $this->getBackingStore()->get('monthlyPrintUsageSummariesByUser');
    }

    /**
     * Gets the security property value. Provides the ability to launch a realistic simulated phishing attack that organizations can learn from.
     * @return SecurityReportsRoot|null
    */
    public function getSecurity(): ?SecurityReportsRoot {
        return $this->getBackingStore()->get('security');
    }

    /**
     * Gets the servicePrincipalSignInActivities property value. Represents a collection of sign-in activities of service principals.
     * @return array<ServicePrincipalSignInActivity>|null
    */
    public function getServicePrincipalSignInActivities(): ?array {
        return $this->getBackingStore()->get('servicePrincipalSignInActivities');
    }

    /**
     * Gets the userCredentialUsageDetails property value. Represents the self-service password reset (SSPR) usage for a given tenant.
     * @return array<UserCredentialUsageDetails>|null
    */
    public function getUserCredentialUsageDetails(): ?array {
        return $this->getBackingStore()->get('userCredentialUsageDetails');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appCredentialSignInActivities', $this->getAppCredentialSignInActivities());
        $writer->writeCollectionOfObjectValues('applicationSignInDetailedSummary', $this->getApplicationSignInDetailedSummary());
        $writer->writeObjectValue('authenticationMethods', $this->getAuthenticationMethods());
        $writer->writeCollectionOfObjectValues('credentialUserRegistrationDetails', $this->getCredentialUserRegistrationDetails());
        $writer->writeCollectionOfObjectValues('dailyPrintUsage', $this->getDailyPrintUsage());
        $writer->writeCollectionOfObjectValues('dailyPrintUsageByPrinter', $this->getDailyPrintUsageByPrinter());
        $writer->writeCollectionOfObjectValues('dailyPrintUsageByUser', $this->getDailyPrintUsageByUser());
        $writer->writeCollectionOfObjectValues('dailyPrintUsageSummariesByPrinter', $this->getDailyPrintUsageSummariesByPrinter());
        $writer->writeCollectionOfObjectValues('dailyPrintUsageSummariesByUser', $this->getDailyPrintUsageSummariesByUser());
        $writer->writeCollectionOfObjectValues('monthlyPrintUsageByPrinter', $this->getMonthlyPrintUsageByPrinter());
        $writer->writeCollectionOfObjectValues('monthlyPrintUsageByUser', $this->getMonthlyPrintUsageByUser());
        $writer->writeCollectionOfObjectValues('monthlyPrintUsageSummariesByPrinter', $this->getMonthlyPrintUsageSummariesByPrinter());
        $writer->writeCollectionOfObjectValues('monthlyPrintUsageSummariesByUser', $this->getMonthlyPrintUsageSummariesByUser());
        $writer->writeObjectValue('security', $this->getSecurity());
        $writer->writeCollectionOfObjectValues('servicePrincipalSignInActivities', $this->getServicePrincipalSignInActivities());
        $writer->writeCollectionOfObjectValues('userCredentialUsageDetails', $this->getUserCredentialUsageDetails());
    }

    /**
     * Sets the appCredentialSignInActivities property value. Represents a collection of sign-in activities of application credentials.
     * @param array<AppCredentialSignInActivity>|null $value Value to set for the appCredentialSignInActivities property.
    */
    public function setAppCredentialSignInActivities(?array $value): void {
        $this->getBackingStore()->set('appCredentialSignInActivities', $value);
    }

    /**
     * Sets the applicationSignInDetailedSummary property value. Represents a detailed summary of an application sign-in.
     * @param array<ApplicationSignInDetailedSummary>|null $value Value to set for the applicationSignInDetailedSummary property.
    */
    public function setApplicationSignInDetailedSummary(?array $value): void {
        $this->getBackingStore()->set('applicationSignInDetailedSummary', $value);
    }

    /**
     * Sets the authenticationMethods property value. Container for navigation properties for Azure AD authentication methods resources.
     * @param AuthenticationMethodsRoot|null $value Value to set for the authenticationMethods property.
    */
    public function setAuthenticationMethods(?AuthenticationMethodsRoot $value): void {
        $this->getBackingStore()->set('authenticationMethods', $value);
    }

    /**
     * Sets the credentialUserRegistrationDetails property value. Details of the usage of self-service password reset and multi-factor authentication (MFA) for all registered users.
     * @param array<CredentialUserRegistrationDetails>|null $value Value to set for the credentialUserRegistrationDetails property.
    */
    public function setCredentialUserRegistrationDetails(?array $value): void {
        $this->getBackingStore()->set('credentialUserRegistrationDetails', $value);
    }

    /**
     * Sets the dailyPrintUsage property value. The dailyPrintUsage property
     * @param array<PrintUsage>|null $value Value to set for the dailyPrintUsage property.
    */
    public function setDailyPrintUsage(?array $value): void {
        $this->getBackingStore()->set('dailyPrintUsage', $value);
    }

    /**
     * Sets the dailyPrintUsageByPrinter property value. The dailyPrintUsageByPrinter property
     * @param array<PrintUsageByPrinter>|null $value Value to set for the dailyPrintUsageByPrinter property.
    */
    public function setDailyPrintUsageByPrinter(?array $value): void {
        $this->getBackingStore()->set('dailyPrintUsageByPrinter', $value);
    }

    /**
     * Sets the dailyPrintUsageByUser property value. The dailyPrintUsageByUser property
     * @param array<PrintUsageByUser>|null $value Value to set for the dailyPrintUsageByUser property.
    */
    public function setDailyPrintUsageByUser(?array $value): void {
        $this->getBackingStore()->set('dailyPrintUsageByUser', $value);
    }

    /**
     * Sets the dailyPrintUsageSummariesByPrinter property value. The dailyPrintUsageSummariesByPrinter property
     * @param array<PrintUsageByPrinter>|null $value Value to set for the dailyPrintUsageSummariesByPrinter property.
    */
    public function setDailyPrintUsageSummariesByPrinter(?array $value): void {
        $this->getBackingStore()->set('dailyPrintUsageSummariesByPrinter', $value);
    }

    /**
     * Sets the dailyPrintUsageSummariesByUser property value. The dailyPrintUsageSummariesByUser property
     * @param array<PrintUsageByUser>|null $value Value to set for the dailyPrintUsageSummariesByUser property.
    */
    public function setDailyPrintUsageSummariesByUser(?array $value): void {
        $this->getBackingStore()->set('dailyPrintUsageSummariesByUser', $value);
    }

    /**
     * Sets the monthlyPrintUsageByPrinter property value. The monthlyPrintUsageByPrinter property
     * @param array<PrintUsageByPrinter>|null $value Value to set for the monthlyPrintUsageByPrinter property.
    */
    public function setMonthlyPrintUsageByPrinter(?array $value): void {
        $this->getBackingStore()->set('monthlyPrintUsageByPrinter', $value);
    }

    /**
     * Sets the monthlyPrintUsageByUser property value. The monthlyPrintUsageByUser property
     * @param array<PrintUsageByUser>|null $value Value to set for the monthlyPrintUsageByUser property.
    */
    public function setMonthlyPrintUsageByUser(?array $value): void {
        $this->getBackingStore()->set('monthlyPrintUsageByUser', $value);
    }

    /**
     * Sets the monthlyPrintUsageSummariesByPrinter property value. The monthlyPrintUsageSummariesByPrinter property
     * @param array<PrintUsageByPrinter>|null $value Value to set for the monthlyPrintUsageSummariesByPrinter property.
    */
    public function setMonthlyPrintUsageSummariesByPrinter(?array $value): void {
        $this->getBackingStore()->set('monthlyPrintUsageSummariesByPrinter', $value);
    }

    /**
     * Sets the monthlyPrintUsageSummariesByUser property value. The monthlyPrintUsageSummariesByUser property
     * @param array<PrintUsageByUser>|null $value Value to set for the monthlyPrintUsageSummariesByUser property.
    */
    public function setMonthlyPrintUsageSummariesByUser(?array $value): void {
        $this->getBackingStore()->set('monthlyPrintUsageSummariesByUser', $value);
    }

    /**
     * Sets the security property value. Provides the ability to launch a realistic simulated phishing attack that organizations can learn from.
     * @param SecurityReportsRoot|null $value Value to set for the security property.
    */
    public function setSecurity(?SecurityReportsRoot $value): void {
        $this->getBackingStore()->set('security', $value);
    }

    /**
     * Sets the servicePrincipalSignInActivities property value. Represents a collection of sign-in activities of service principals.
     * @param array<ServicePrincipalSignInActivity>|null $value Value to set for the servicePrincipalSignInActivities property.
    */
    public function setServicePrincipalSignInActivities(?array $value): void {
        $this->getBackingStore()->set('servicePrincipalSignInActivities', $value);
    }

    /**
     * Sets the userCredentialUsageDetails property value. Represents the self-service password reset (SSPR) usage for a given tenant.
     * @param array<UserCredentialUsageDetails>|null $value Value to set for the userCredentialUsageDetails property.
    */
    public function setUserCredentialUsageDetails(?array $value): void {
        $this->getBackingStore()->set('userCredentialUsageDetails', $value);
    }

}
