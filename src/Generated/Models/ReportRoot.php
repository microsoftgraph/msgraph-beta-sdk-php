<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\Partners\Partners;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ReportRoot extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportRoot {
        return new ReportRoot();
    }

    /**
     * Gets the appCredentialSignInActivities property value. Represents a collection of sign-in activities of application credentials.
     * @return array<AppCredentialSignInActivity>|null
    */
    public function getAppCredentialSignInActivities(): ?array {
        $val = $this->getBackingStore()->get('appCredentialSignInActivities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppCredentialSignInActivity::class);
            /** @var array<AppCredentialSignInActivity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appCredentialSignInActivities'");
    }

    /**
     * Gets the applicationSignInDetailedSummary property value. Represents a detailed summary of an application sign-in.
     * @return array<ApplicationSignInDetailedSummary>|null
    */
    public function getApplicationSignInDetailedSummary(): ?array {
        $val = $this->getBackingStore()->get('applicationSignInDetailedSummary');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApplicationSignInDetailedSummary::class);
            /** @var array<ApplicationSignInDetailedSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationSignInDetailedSummary'");
    }

    /**
     * Gets the authenticationMethods property value. Container for navigation properties for Microsoft Entra authentication methods resources.
     * @return AuthenticationMethodsRoot|null
    */
    public function getAuthenticationMethods(): ?AuthenticationMethodsRoot {
        $val = $this->getBackingStore()->get('authenticationMethods');
        if (is_null($val) || $val instanceof AuthenticationMethodsRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationMethods'");
    }

    /**
     * Gets the credentialUserRegistrationDetails property value. Details of the usage of self-service password reset and multifactor authentication (MFA) for all registered users.
     * @return array<CredentialUserRegistrationDetails>|null
    */
    public function getCredentialUserRegistrationDetails(): ?array {
        $val = $this->getBackingStore()->get('credentialUserRegistrationDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CredentialUserRegistrationDetails::class);
            /** @var array<CredentialUserRegistrationDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'credentialUserRegistrationDetails'");
    }

    /**
     * Gets the dailyPrintUsage property value. The dailyPrintUsage property
     * @return array<PrintUsage>|null
    */
    public function getDailyPrintUsage(): ?array {
        $val = $this->getBackingStore()->get('dailyPrintUsage');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintUsage::class);
            /** @var array<PrintUsage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dailyPrintUsage'");
    }

    /**
     * Gets the dailyPrintUsageByPrinter property value. Retrieve a list of daily print usage summaries, grouped by printer.
     * @return array<PrintUsageByPrinter>|null
    */
    public function getDailyPrintUsageByPrinter(): ?array {
        $val = $this->getBackingStore()->get('dailyPrintUsageByPrinter');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintUsageByPrinter::class);
            /** @var array<PrintUsageByPrinter>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dailyPrintUsageByPrinter'");
    }

    /**
     * Gets the dailyPrintUsageByUser property value. Retrieve a list of daily print usage summaries, grouped by user.
     * @return array<PrintUsageByUser>|null
    */
    public function getDailyPrintUsageByUser(): ?array {
        $val = $this->getBackingStore()->get('dailyPrintUsageByUser');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintUsageByUser::class);
            /** @var array<PrintUsageByUser>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dailyPrintUsageByUser'");
    }

    /**
     * Gets the dailyPrintUsageSummariesByPrinter property value. The dailyPrintUsageSummariesByPrinter property
     * @return array<PrintUsageByPrinter>|null
    */
    public function getDailyPrintUsageSummariesByPrinter(): ?array {
        $val = $this->getBackingStore()->get('dailyPrintUsageSummariesByPrinter');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintUsageByPrinter::class);
            /** @var array<PrintUsageByPrinter>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dailyPrintUsageSummariesByPrinter'");
    }

    /**
     * Gets the dailyPrintUsageSummariesByUser property value. The dailyPrintUsageSummariesByUser property
     * @return array<PrintUsageByUser>|null
    */
    public function getDailyPrintUsageSummariesByUser(): ?array {
        $val = $this->getBackingStore()->get('dailyPrintUsageSummariesByUser');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintUsageByUser::class);
            /** @var array<PrintUsageByUser>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dailyPrintUsageSummariesByUser'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'partners' => fn(ParseNode $n) => $o->setPartners($n->getObjectValue([Partners::class, 'createFromDiscriminatorValue'])),
            'security' => fn(ParseNode $n) => $o->setSecurity($n->getObjectValue([SecurityReportsRoot::class, 'createFromDiscriminatorValue'])),
            'serviceActivity' => fn(ParseNode $n) => $o->setServiceActivity($n->getObjectValue([ServiceActivity::class, 'createFromDiscriminatorValue'])),
            'servicePrincipalSignInActivities' => fn(ParseNode $n) => $o->setServicePrincipalSignInActivities($n->getCollectionOfObjectValues([ServicePrincipalSignInActivity::class, 'createFromDiscriminatorValue'])),
            'sla' => fn(ParseNode $n) => $o->setSla($n->getObjectValue([ServiceLevelAgreementRoot::class, 'createFromDiscriminatorValue'])),
            'userCredentialUsageDetails' => fn(ParseNode $n) => $o->setUserCredentialUsageDetails($n->getCollectionOfObjectValues([UserCredentialUsageDetails::class, 'createFromDiscriminatorValue'])),
            'userInsights' => fn(ParseNode $n) => $o->setUserInsights($n->getObjectValue([UserInsightsRoot::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the monthlyPrintUsageByPrinter property value. Retrieve a list of monthly print usage summaries, grouped by printer.
     * @return array<PrintUsageByPrinter>|null
    */
    public function getMonthlyPrintUsageByPrinter(): ?array {
        $val = $this->getBackingStore()->get('monthlyPrintUsageByPrinter');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintUsageByPrinter::class);
            /** @var array<PrintUsageByPrinter>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'monthlyPrintUsageByPrinter'");
    }

    /**
     * Gets the monthlyPrintUsageByUser property value. Retrieve a list of monthly print usage summaries, grouped by user.
     * @return array<PrintUsageByUser>|null
    */
    public function getMonthlyPrintUsageByUser(): ?array {
        $val = $this->getBackingStore()->get('monthlyPrintUsageByUser');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintUsageByUser::class);
            /** @var array<PrintUsageByUser>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'monthlyPrintUsageByUser'");
    }

    /**
     * Gets the monthlyPrintUsageSummariesByPrinter property value. The monthlyPrintUsageSummariesByPrinter property
     * @return array<PrintUsageByPrinter>|null
    */
    public function getMonthlyPrintUsageSummariesByPrinter(): ?array {
        $val = $this->getBackingStore()->get('monthlyPrintUsageSummariesByPrinter');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintUsageByPrinter::class);
            /** @var array<PrintUsageByPrinter>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'monthlyPrintUsageSummariesByPrinter'");
    }

    /**
     * Gets the monthlyPrintUsageSummariesByUser property value. The monthlyPrintUsageSummariesByUser property
     * @return array<PrintUsageByUser>|null
    */
    public function getMonthlyPrintUsageSummariesByUser(): ?array {
        $val = $this->getBackingStore()->get('monthlyPrintUsageSummariesByUser');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintUsageByUser::class);
            /** @var array<PrintUsageByUser>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'monthlyPrintUsageSummariesByUser'");
    }

    /**
     * Gets the partners property value. Represents billing details for a Microsoft direct partner.
     * @return Partners|null
    */
    public function getPartners(): ?Partners {
        $val = $this->getBackingStore()->get('partners');
        if (is_null($val) || $val instanceof Partners) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partners'");
    }

    /**
     * Gets the security property value. Provides the ability to launch a simulated phishing attack that organizations can learn from.
     * @return SecurityReportsRoot|null
    */
    public function getSecurity(): ?SecurityReportsRoot {
        $val = $this->getBackingStore()->get('security');
        if (is_null($val) || $val instanceof SecurityReportsRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'security'");
    }

    /**
     * Gets the serviceActivity property value. Reports that relate to tenant-level authentication activities in Microsoft Entra.
     * @return ServiceActivity|null
    */
    public function getServiceActivity(): ?ServiceActivity {
        $val = $this->getBackingStore()->get('serviceActivity');
        if (is_null($val) || $val instanceof ServiceActivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceActivity'");
    }

    /**
     * Gets the servicePrincipalSignInActivities property value. Represents a collection of sign-in activities of service principals.
     * @return array<ServicePrincipalSignInActivity>|null
    */
    public function getServicePrincipalSignInActivities(): ?array {
        $val = $this->getBackingStore()->get('servicePrincipalSignInActivities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ServicePrincipalSignInActivity::class);
            /** @var array<ServicePrincipalSignInActivity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalSignInActivities'");
    }

    /**
     * Gets the sla property value. Reports that relate to tenant-level Microsoft Entra SLA attainment.
     * @return ServiceLevelAgreementRoot|null
    */
    public function getSla(): ?ServiceLevelAgreementRoot {
        $val = $this->getBackingStore()->get('sla');
        if (is_null($val) || $val instanceof ServiceLevelAgreementRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sla'");
    }

    /**
     * Gets the userCredentialUsageDetails property value. Represents the self-service password reset (SSPR) usage for a given tenant.
     * @return array<UserCredentialUsageDetails>|null
    */
    public function getUserCredentialUsageDetails(): ?array {
        $val = $this->getBackingStore()->get('userCredentialUsageDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserCredentialUsageDetails::class);
            /** @var array<UserCredentialUsageDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userCredentialUsageDetails'");
    }

    /**
     * Gets the userInsights property value. Represents a collection of user activities on applications in a tenant that is configured for Microsoft Entra External ID for customers.
     * @return UserInsightsRoot|null
    */
    public function getUserInsights(): ?UserInsightsRoot {
        $val = $this->getBackingStore()->get('userInsights');
        if (is_null($val) || $val instanceof UserInsightsRoot) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userInsights'");
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
        $writer->writeObjectValue('partners', $this->getPartners());
        $writer->writeObjectValue('security', $this->getSecurity());
        $writer->writeObjectValue('serviceActivity', $this->getServiceActivity());
        $writer->writeCollectionOfObjectValues('servicePrincipalSignInActivities', $this->getServicePrincipalSignInActivities());
        $writer->writeObjectValue('sla', $this->getSla());
        $writer->writeCollectionOfObjectValues('userCredentialUsageDetails', $this->getUserCredentialUsageDetails());
        $writer->writeObjectValue('userInsights', $this->getUserInsights());
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
     * Sets the authenticationMethods property value. Container for navigation properties for Microsoft Entra authentication methods resources.
     * @param AuthenticationMethodsRoot|null $value Value to set for the authenticationMethods property.
    */
    public function setAuthenticationMethods(?AuthenticationMethodsRoot $value): void {
        $this->getBackingStore()->set('authenticationMethods', $value);
    }

    /**
     * Sets the credentialUserRegistrationDetails property value. Details of the usage of self-service password reset and multifactor authentication (MFA) for all registered users.
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
     * Sets the dailyPrintUsageByPrinter property value. Retrieve a list of daily print usage summaries, grouped by printer.
     * @param array<PrintUsageByPrinter>|null $value Value to set for the dailyPrintUsageByPrinter property.
    */
    public function setDailyPrintUsageByPrinter(?array $value): void {
        $this->getBackingStore()->set('dailyPrintUsageByPrinter', $value);
    }

    /**
     * Sets the dailyPrintUsageByUser property value. Retrieve a list of daily print usage summaries, grouped by user.
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
     * Sets the monthlyPrintUsageByPrinter property value. Retrieve a list of monthly print usage summaries, grouped by printer.
     * @param array<PrintUsageByPrinter>|null $value Value to set for the monthlyPrintUsageByPrinter property.
    */
    public function setMonthlyPrintUsageByPrinter(?array $value): void {
        $this->getBackingStore()->set('monthlyPrintUsageByPrinter', $value);
    }

    /**
     * Sets the monthlyPrintUsageByUser property value. Retrieve a list of monthly print usage summaries, grouped by user.
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
     * Sets the partners property value. Represents billing details for a Microsoft direct partner.
     * @param Partners|null $value Value to set for the partners property.
    */
    public function setPartners(?Partners $value): void {
        $this->getBackingStore()->set('partners', $value);
    }

    /**
     * Sets the security property value. Provides the ability to launch a simulated phishing attack that organizations can learn from.
     * @param SecurityReportsRoot|null $value Value to set for the security property.
    */
    public function setSecurity(?SecurityReportsRoot $value): void {
        $this->getBackingStore()->set('security', $value);
    }

    /**
     * Sets the serviceActivity property value. Reports that relate to tenant-level authentication activities in Microsoft Entra.
     * @param ServiceActivity|null $value Value to set for the serviceActivity property.
    */
    public function setServiceActivity(?ServiceActivity $value): void {
        $this->getBackingStore()->set('serviceActivity', $value);
    }

    /**
     * Sets the servicePrincipalSignInActivities property value. Represents a collection of sign-in activities of service principals.
     * @param array<ServicePrincipalSignInActivity>|null $value Value to set for the servicePrincipalSignInActivities property.
    */
    public function setServicePrincipalSignInActivities(?array $value): void {
        $this->getBackingStore()->set('servicePrincipalSignInActivities', $value);
    }

    /**
     * Sets the sla property value. Reports that relate to tenant-level Microsoft Entra SLA attainment.
     * @param ServiceLevelAgreementRoot|null $value Value to set for the sla property.
    */
    public function setSla(?ServiceLevelAgreementRoot $value): void {
        $this->getBackingStore()->set('sla', $value);
    }

    /**
     * Sets the userCredentialUsageDetails property value. Represents the self-service password reset (SSPR) usage for a given tenant.
     * @param array<UserCredentialUsageDetails>|null $value Value to set for the userCredentialUsageDetails property.
    */
    public function setUserCredentialUsageDetails(?array $value): void {
        $this->getBackingStore()->set('userCredentialUsageDetails', $value);
    }

    /**
     * Sets the userInsights property value. Represents a collection of user activities on applications in a tenant that is configured for Microsoft Entra External ID for customers.
     * @param UserInsightsRoot|null $value Value to set for the userInsights property.
    */
    public function setUserInsights(?UserInsightsRoot $value): void {
        $this->getBackingStore()->set('userInsights', $value);
    }

}
