<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TenantStatusInformation implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TenantStatusInformation and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantStatusInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantStatusInformation {
        return new TenantStatusInformation();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the delegatedPrivilegeStatus property value. The status of the delegated admin privilege relationship between the managing entity and the managed tenant. Possible values are: none, delegatedAdminPrivileges, unknownFutureValue, granularDelegatedAdminPrivileges, delegatedAndGranularDelegetedAdminPrivileges. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: granularDelegatedAdminPrivileges , delegatedAndGranularDelegetedAdminPrivileges. Optional. Read-only.
     * @return DelegatedPrivilegeStatus|null
    */
    public function getDelegatedPrivilegeStatus(): ?DelegatedPrivilegeStatus {
        $val = $this->getBackingStore()->get('delegatedPrivilegeStatus');
        if (is_null($val) || $val instanceof DelegatedPrivilegeStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'delegatedPrivilegeStatus'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'delegatedPrivilegeStatus' => fn(ParseNode $n) => $o->setDelegatedPrivilegeStatus($n->getEnumValue(DelegatedPrivilegeStatus::class)),
            'lastDelegatedPrivilegeRefreshDateTime' => fn(ParseNode $n) => $o->setLastDelegatedPrivilegeRefreshDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'offboardedByUserId' => fn(ParseNode $n) => $o->setOffboardedByUserId($n->getStringValue()),
            'offboardedDateTime' => fn(ParseNode $n) => $o->setOffboardedDateTime($n->getDateTimeValue()),
            'onboardedByUserId' => fn(ParseNode $n) => $o->setOnboardedByUserId($n->getStringValue()),
            'onboardedDateTime' => fn(ParseNode $n) => $o->setOnboardedDateTime($n->getDateTimeValue()),
            'onboardingStatus' => fn(ParseNode $n) => $o->setOnboardingStatus($n->getEnumValue(TenantOnboardingStatus::class)),
            'tenantOnboardingEligibilityReason' => fn(ParseNode $n) => $o->setTenantOnboardingEligibilityReason($n->getEnumValue(TenantOnboardingEligibilityReason::class)),
            'workloadStatuses' => fn(ParseNode $n) => $o->setWorkloadStatuses($n->getCollectionOfObjectValues([WorkloadStatus::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the lastDelegatedPrivilegeRefreshDateTime property value. The date and time the delegated admin privileges status was updated. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastDelegatedPrivilegeRefreshDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastDelegatedPrivilegeRefreshDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastDelegatedPrivilegeRefreshDateTime'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the offboardedByUserId property value. The identifier for the account that offboarded the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getOffboardedByUserId(): ?string {
        $val = $this->getBackingStore()->get('offboardedByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offboardedByUserId'");
    }

    /**
     * Gets the offboardedDateTime property value. The date and time when the managed tenant was offboarded. Optional. Read-only.
     * @return DateTime|null
    */
    public function getOffboardedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('offboardedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offboardedDateTime'");
    }

    /**
     * Gets the onboardedByUserId property value. The identifier for the account that onboarded the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getOnboardedByUserId(): ?string {
        $val = $this->getBackingStore()->get('onboardedByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onboardedByUserId'");
    }

    /**
     * Gets the onboardedDateTime property value. The date and time when the managed tenant was onboarded. Optional. Read-only.
     * @return DateTime|null
    */
    public function getOnboardedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('onboardedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onboardedDateTime'");
    }

    /**
     * Gets the onboardingStatus property value. The onboarding status for the managed tenant.. Possible values are: ineligible, inProcess, active, inactive, unknownFutureValue. Optional. Read-only.
     * @return TenantOnboardingStatus|null
    */
    public function getOnboardingStatus(): ?TenantOnboardingStatus {
        $val = $this->getBackingStore()->get('onboardingStatus');
        if (is_null($val) || $val instanceof TenantOnboardingStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onboardingStatus'");
    }

    /**
     * Gets the tenantOnboardingEligibilityReason property value. Organization's onboarding eligibility reason in Microsoft 365 Lighthouse.. Possible values are: none, contractType, delegatedAdminPrivileges,usersCount,license and unknownFutureValue. Optional. Read-only.
     * @return TenantOnboardingEligibilityReason|null
    */
    public function getTenantOnboardingEligibilityReason(): ?TenantOnboardingEligibilityReason {
        $val = $this->getBackingStore()->get('tenantOnboardingEligibilityReason');
        if (is_null($val) || $val instanceof TenantOnboardingEligibilityReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantOnboardingEligibilityReason'");
    }

    /**
     * Gets the workloadStatuses property value. The collection of workload statues for the managed tenant. Optional. Read-only.
     * @return array<WorkloadStatus>|null
    */
    public function getWorkloadStatuses(): ?array {
        $val = $this->getBackingStore()->get('workloadStatuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkloadStatus::class);
            /** @var array<WorkloadStatus>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workloadStatuses'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('delegatedPrivilegeStatus', $this->getDelegatedPrivilegeStatus());
        $writer->writeDateTimeValue('lastDelegatedPrivilegeRefreshDateTime', $this->getLastDelegatedPrivilegeRefreshDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('offboardedByUserId', $this->getOffboardedByUserId());
        $writer->writeDateTimeValue('offboardedDateTime', $this->getOffboardedDateTime());
        $writer->writeStringValue('onboardedByUserId', $this->getOnboardedByUserId());
        $writer->writeDateTimeValue('onboardedDateTime', $this->getOnboardedDateTime());
        $writer->writeEnumValue('onboardingStatus', $this->getOnboardingStatus());
        $writer->writeEnumValue('tenantOnboardingEligibilityReason', $this->getTenantOnboardingEligibilityReason());
        $writer->writeCollectionOfObjectValues('workloadStatuses', $this->getWorkloadStatuses());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the delegatedPrivilegeStatus property value. The status of the delegated admin privilege relationship between the managing entity and the managed tenant. Possible values are: none, delegatedAdminPrivileges, unknownFutureValue, granularDelegatedAdminPrivileges, delegatedAndGranularDelegetedAdminPrivileges. Use the Prefer: include-unknown-enum-members request header to get the following values from this evolvable enum: granularDelegatedAdminPrivileges , delegatedAndGranularDelegetedAdminPrivileges. Optional. Read-only.
     * @param DelegatedPrivilegeStatus|null $value Value to set for the delegatedPrivilegeStatus property.
    */
    public function setDelegatedPrivilegeStatus(?DelegatedPrivilegeStatus $value): void {
        $this->getBackingStore()->set('delegatedPrivilegeStatus', $value);
    }

    /**
     * Sets the lastDelegatedPrivilegeRefreshDateTime property value. The date and time the delegated admin privileges status was updated. Optional. Read-only.
     * @param DateTime|null $value Value to set for the lastDelegatedPrivilegeRefreshDateTime property.
    */
    public function setLastDelegatedPrivilegeRefreshDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastDelegatedPrivilegeRefreshDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the offboardedByUserId property value. The identifier for the account that offboarded the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the offboardedByUserId property.
    */
    public function setOffboardedByUserId(?string $value): void {
        $this->getBackingStore()->set('offboardedByUserId', $value);
    }

    /**
     * Sets the offboardedDateTime property value. The date and time when the managed tenant was offboarded. Optional. Read-only.
     * @param DateTime|null $value Value to set for the offboardedDateTime property.
    */
    public function setOffboardedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('offboardedDateTime', $value);
    }

    /**
     * Sets the onboardedByUserId property value. The identifier for the account that onboarded the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the onboardedByUserId property.
    */
    public function setOnboardedByUserId(?string $value): void {
        $this->getBackingStore()->set('onboardedByUserId', $value);
    }

    /**
     * Sets the onboardedDateTime property value. The date and time when the managed tenant was onboarded. Optional. Read-only.
     * @param DateTime|null $value Value to set for the onboardedDateTime property.
    */
    public function setOnboardedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('onboardedDateTime', $value);
    }

    /**
     * Sets the onboardingStatus property value. The onboarding status for the managed tenant.. Possible values are: ineligible, inProcess, active, inactive, unknownFutureValue. Optional. Read-only.
     * @param TenantOnboardingStatus|null $value Value to set for the onboardingStatus property.
    */
    public function setOnboardingStatus(?TenantOnboardingStatus $value): void {
        $this->getBackingStore()->set('onboardingStatus', $value);
    }

    /**
     * Sets the tenantOnboardingEligibilityReason property value. Organization's onboarding eligibility reason in Microsoft 365 Lighthouse.. Possible values are: none, contractType, delegatedAdminPrivileges,usersCount,license and unknownFutureValue. Optional. Read-only.
     * @param TenantOnboardingEligibilityReason|null $value Value to set for the tenantOnboardingEligibilityReason property.
    */
    public function setTenantOnboardingEligibilityReason(?TenantOnboardingEligibilityReason $value): void {
        $this->getBackingStore()->set('tenantOnboardingEligibilityReason', $value);
    }

    /**
     * Sets the workloadStatuses property value. The collection of workload statues for the managed tenant. Optional. Read-only.
     * @param array<WorkloadStatus>|null $value Value to set for the workloadStatuses property.
    */
    public function setWorkloadStatuses(?array $value): void {
        $this->getBackingStore()->set('workloadStatuses', $value);
    }

}
