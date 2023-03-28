<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class EducationSynchronizationProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new educationSynchronizationProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSynchronizationProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationSynchronizationProfile {
        return new EducationSynchronizationProfile();
    }

    /**
     * Gets the dataProvider property value. The dataProvider property
     * @return EducationSynchronizationDataProvider|null
    */
    public function getDataProvider(): ?EducationSynchronizationDataProvider {
        return $this->getBackingStore()->get('dataProvider');
    }

    /**
     * Gets the displayName property value. Name of the configuration profile for syncing identities.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the errors property value. All errors associated with this synchronization profile.
     * @return array<EducationSynchronizationError>|null
    */
    public function getErrors(): ?array {
        return $this->getBackingStore()->get('errors');
    }

    /**
     * Gets the expirationDate property value. The date the profile should be considered expired and cease syncing. Provide the date in YYYY-MM-DD format, following ISO 8601. Maximum value is 18 months from profile creation.  (optional)
     * @return Date|null
    */
    public function getExpirationDate(): ?Date {
        return $this->getBackingStore()->get('expirationDate');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dataProvider' => fn(ParseNode $n) => $o->setDataProvider($n->getObjectValue([EducationSynchronizationDataProvider::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([EducationSynchronizationError::class, 'createFromDiscriminatorValue'])),
            'expirationDate' => fn(ParseNode $n) => $o->setExpirationDate($n->getDateValue()),
            'handleSpecialCharacterConstraint' => fn(ParseNode $n) => $o->setHandleSpecialCharacterConstraint($n->getBooleanValue()),
            'identitySynchronizationConfiguration' => fn(ParseNode $n) => $o->setIdentitySynchronizationConfiguration($n->getObjectValue([EducationIdentitySynchronizationConfiguration::class, 'createFromDiscriminatorValue'])),
            'licensesToAssign' => fn(ParseNode $n) => $o->setLicensesToAssign($n->getCollectionOfObjectValues([EducationSynchronizationLicenseAssignment::class, 'createFromDiscriminatorValue'])),
            'profileStatus' => fn(ParseNode $n) => $o->setProfileStatus($n->getObjectValue([EducationSynchronizationProfileStatus::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(EducationSynchronizationProfileState::class)),
        ]);
    }

    /**
     * Gets the handleSpecialCharacterConstraint property value. Determines if School Data Sync should automatically replace unsupported special characters while syncing from source.
     * @return bool|null
    */
    public function getHandleSpecialCharacterConstraint(): ?bool {
        return $this->getBackingStore()->get('handleSpecialCharacterConstraint');
    }

    /**
     * Gets the identitySynchronizationConfiguration property value. The identitySynchronizationConfiguration property
     * @return EducationIdentitySynchronizationConfiguration|null
    */
    public function getIdentitySynchronizationConfiguration(): ?EducationIdentitySynchronizationConfiguration {
        return $this->getBackingStore()->get('identitySynchronizationConfiguration');
    }

    /**
     * Gets the licensesToAssign property value. License setup configuration.
     * @return array<EducationSynchronizationLicenseAssignment>|null
    */
    public function getLicensesToAssign(): ?array {
        return $this->getBackingStore()->get('licensesToAssign');
    }

    /**
     * Gets the profileStatus property value. The synchronization status.
     * @return EducationSynchronizationProfileStatus|null
    */
    public function getProfileStatus(): ?EducationSynchronizationProfileStatus {
        return $this->getBackingStore()->get('profileStatus');
    }

    /**
     * Gets the state property value. The state of the profile. Possible values are: provisioning, provisioned, provisioningFailed, deleting, deletionFailed.
     * @return EducationSynchronizationProfileState|null
    */
    public function getState(): ?EducationSynchronizationProfileState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('dataProvider', $this->getDataProvider());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
        $writer->writeDateValue('expirationDate', $this->getExpirationDate());
        $writer->writeBooleanValue('handleSpecialCharacterConstraint', $this->getHandleSpecialCharacterConstraint());
        $writer->writeObjectValue('identitySynchronizationConfiguration', $this->getIdentitySynchronizationConfiguration());
        $writer->writeCollectionOfObjectValues('licensesToAssign', $this->getLicensesToAssign());
        $writer->writeObjectValue('profileStatus', $this->getProfileStatus());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the dataProvider property value. The dataProvider property
     * @param EducationSynchronizationDataProvider|null $value Value to set for the dataProvider property.
    */
    public function setDataProvider(?EducationSynchronizationDataProvider $value): void {
        $this->getBackingStore()->set('dataProvider', $value);
    }

    /**
     * Sets the displayName property value. Name of the configuration profile for syncing identities.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the errors property value. All errors associated with this synchronization profile.
     * @param array<EducationSynchronizationError>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->getBackingStore()->set('errors', $value);
    }

    /**
     * Sets the expirationDate property value. The date the profile should be considered expired and cease syncing. Provide the date in YYYY-MM-DD format, following ISO 8601. Maximum value is 18 months from profile creation.  (optional)
     * @param Date|null $value Value to set for the expirationDate property.
    */
    public function setExpirationDate(?Date $value): void {
        $this->getBackingStore()->set('expirationDate', $value);
    }

    /**
     * Sets the handleSpecialCharacterConstraint property value. Determines if School Data Sync should automatically replace unsupported special characters while syncing from source.
     * @param bool|null $value Value to set for the handleSpecialCharacterConstraint property.
    */
    public function setHandleSpecialCharacterConstraint(?bool $value): void {
        $this->getBackingStore()->set('handleSpecialCharacterConstraint', $value);
    }

    /**
     * Sets the identitySynchronizationConfiguration property value. The identitySynchronizationConfiguration property
     * @param EducationIdentitySynchronizationConfiguration|null $value Value to set for the identitySynchronizationConfiguration property.
    */
    public function setIdentitySynchronizationConfiguration(?EducationIdentitySynchronizationConfiguration $value): void {
        $this->getBackingStore()->set('identitySynchronizationConfiguration', $value);
    }

    /**
     * Sets the licensesToAssign property value. License setup configuration.
     * @param array<EducationSynchronizationLicenseAssignment>|null $value Value to set for the licensesToAssign property.
    */
    public function setLicensesToAssign(?array $value): void {
        $this->getBackingStore()->set('licensesToAssign', $value);
    }

    /**
     * Sets the profileStatus property value. The synchronization status.
     * @param EducationSynchronizationProfileStatus|null $value Value to set for the profileStatus property.
    */
    public function setProfileStatus(?EducationSynchronizationProfileStatus $value): void {
        $this->getBackingStore()->set('profileStatus', $value);
    }

    /**
     * Sets the state property value. The state of the profile. Possible values are: provisioning, provisioned, provisioningFailed, deleting, deletionFailed.
     * @param EducationSynchronizationProfileState|null $value Value to set for the state property.
    */
    public function setState(?EducationSynchronizationProfileState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
