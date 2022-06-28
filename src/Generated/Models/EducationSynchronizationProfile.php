<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class EducationSynchronizationProfile extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var EducationSynchronizationDataProvider|null $dataProvider The dataProvider property
    */
    private ?EducationSynchronizationDataProvider $dataProvider = null;
    
    /**
     * @var string|null $displayName Name of the configuration profile for syncing identities.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<EducationSynchronizationError>|null $errors All errors associated with this synchronization profile.
    */
    private ?array $errors = null;
    
    /**
     * @var Date|null $expirationDate The date the profile should be considered expired and cease syncing. Provide the date in YYYY-MM-DD format, following ISO 8601. Maximum value is 18 months from profile creation.  (optional)
    */
    private ?Date $expirationDate = null;
    
    /**
     * @var bool|null $handleSpecialCharacterConstraint Determines if School Data Sync should automatically replace unsupported special characters while syncing from source.
    */
    private ?bool $handleSpecialCharacterConstraint = null;
    
    /**
     * @var EducationIdentitySynchronizationConfiguration|null $identitySynchronizationConfiguration The identitySynchronizationConfiguration property
    */
    private ?EducationIdentitySynchronizationConfiguration $identitySynchronizationConfiguration = null;
    
    /**
     * @var array<EducationSynchronizationLicenseAssignment>|null $licensesToAssign License setup configuration.
    */
    private ?array $licensesToAssign = null;
    
    /**
     * @var EducationSynchronizationProfileStatus|null $profileStatus The synchronization status.
    */
    private ?EducationSynchronizationProfileStatus $profileStatus = null;
    
    /**
     * @var EducationSynchronizationProfileState|null $state The state of the profile. Possible values are: provisioning, provisioned, provisioningFailed, deleting, deletionFailed.
    */
    private ?EducationSynchronizationProfileState $state = null;
    
    /**
     * Instantiates a new EducationSynchronizationProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dataProvider property value. The dataProvider property
     * @return EducationSynchronizationDataProvider|null
    */
    public function getDataProvider(): ?EducationSynchronizationDataProvider {
        return $this->dataProvider;
    }

    /**
     * Gets the displayName property value. Name of the configuration profile for syncing identities.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the errors property value. All errors associated with this synchronization profile.
     * @return array<EducationSynchronizationError>|null
    */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * Gets the expirationDate property value. The date the profile should be considered expired and cease syncing. Provide the date in YYYY-MM-DD format, following ISO 8601. Maximum value is 18 months from profile creation.  (optional)
     * @return Date|null
    */
    public function getExpirationDate(): ?Date {
        return $this->expirationDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dataProvider' => function (ParseNode $n) use ($o) { $o->setDataProvider($n->getObjectValue(array(EducationSynchronizationDataProvider::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'errors' => function (ParseNode $n) use ($o) { $o->setErrors($n->getCollectionOfObjectValues(array(EducationSynchronizationError::class, 'createFromDiscriminatorValue'))); },
            'expirationDate' => function (ParseNode $n) use ($o) { $o->setExpirationDate($n->getDateValue()); },
            'handleSpecialCharacterConstraint' => function (ParseNode $n) use ($o) { $o->setHandleSpecialCharacterConstraint($n->getBooleanValue()); },
            'identitySynchronizationConfiguration' => function (ParseNode $n) use ($o) { $o->setIdentitySynchronizationConfiguration($n->getObjectValue(array(EducationIdentitySynchronizationConfiguration::class, 'createFromDiscriminatorValue'))); },
            'licensesToAssign' => function (ParseNode $n) use ($o) { $o->setLicensesToAssign($n->getCollectionOfObjectValues(array(EducationSynchronizationLicenseAssignment::class, 'createFromDiscriminatorValue'))); },
            'profileStatus' => function (ParseNode $n) use ($o) { $o->setProfileStatus($n->getObjectValue(array(EducationSynchronizationProfileStatus::class, 'createFromDiscriminatorValue'))); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(EducationSynchronizationProfileState::class)); },
        ]);
    }

    /**
     * Gets the handleSpecialCharacterConstraint property value. Determines if School Data Sync should automatically replace unsupported special characters while syncing from source.
     * @return bool|null
    */
    public function getHandleSpecialCharacterConstraint(): ?bool {
        return $this->handleSpecialCharacterConstraint;
    }

    /**
     * Gets the identitySynchronizationConfiguration property value. The identitySynchronizationConfiguration property
     * @return EducationIdentitySynchronizationConfiguration|null
    */
    public function getIdentitySynchronizationConfiguration(): ?EducationIdentitySynchronizationConfiguration {
        return $this->identitySynchronizationConfiguration;
    }

    /**
     * Gets the licensesToAssign property value. License setup configuration.
     * @return array<EducationSynchronizationLicenseAssignment>|null
    */
    public function getLicensesToAssign(): ?array {
        return $this->licensesToAssign;
    }

    /**
     * Gets the profileStatus property value. The synchronization status.
     * @return EducationSynchronizationProfileStatus|null
    */
    public function getProfileStatus(): ?EducationSynchronizationProfileStatus {
        return $this->profileStatus;
    }

    /**
     * Gets the state property value. The state of the profile. Possible values are: provisioning, provisioned, provisioningFailed, deleting, deletionFailed.
     * @return EducationSynchronizationProfileState|null
    */
    public function getState(): ?EducationSynchronizationProfileState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('dataProvider', $this->dataProvider);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('errors', $this->errors);
        $writer->writeDateValue('expirationDate', $this->expirationDate);
        $writer->writeBooleanValue('handleSpecialCharacterConstraint', $this->handleSpecialCharacterConstraint);
        $writer->writeObjectValue('identitySynchronizationConfiguration', $this->identitySynchronizationConfiguration);
        $writer->writeCollectionOfObjectValues('licensesToAssign', $this->licensesToAssign);
        $writer->writeObjectValue('profileStatus', $this->profileStatus);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the dataProvider property value. The dataProvider property
     *  @param EducationSynchronizationDataProvider|null $value Value to set for the dataProvider property.
    */
    public function setDataProvider(?EducationSynchronizationDataProvider $value ): void {
        $this->dataProvider = $value;
    }

    /**
     * Sets the displayName property value. Name of the configuration profile for syncing identities.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the errors property value. All errors associated with this synchronization profile.
     *  @param array<EducationSynchronizationError>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value ): void {
        $this->errors = $value;
    }

    /**
     * Sets the expirationDate property value. The date the profile should be considered expired and cease syncing. Provide the date in YYYY-MM-DD format, following ISO 8601. Maximum value is 18 months from profile creation.  (optional)
     *  @param Date|null $value Value to set for the expirationDate property.
    */
    public function setExpirationDate(?Date $value ): void {
        $this->expirationDate = $value;
    }

    /**
     * Sets the handleSpecialCharacterConstraint property value. Determines if School Data Sync should automatically replace unsupported special characters while syncing from source.
     *  @param bool|null $value Value to set for the handleSpecialCharacterConstraint property.
    */
    public function setHandleSpecialCharacterConstraint(?bool $value ): void {
        $this->handleSpecialCharacterConstraint = $value;
    }

    /**
     * Sets the identitySynchronizationConfiguration property value. The identitySynchronizationConfiguration property
     *  @param EducationIdentitySynchronizationConfiguration|null $value Value to set for the identitySynchronizationConfiguration property.
    */
    public function setIdentitySynchronizationConfiguration(?EducationIdentitySynchronizationConfiguration $value ): void {
        $this->identitySynchronizationConfiguration = $value;
    }

    /**
     * Sets the licensesToAssign property value. License setup configuration.
     *  @param array<EducationSynchronizationLicenseAssignment>|null $value Value to set for the licensesToAssign property.
    */
    public function setLicensesToAssign(?array $value ): void {
        $this->licensesToAssign = $value;
    }

    /**
     * Sets the profileStatus property value. The synchronization status.
     *  @param EducationSynchronizationProfileStatus|null $value Value to set for the profileStatus property.
    */
    public function setProfileStatus(?EducationSynchronizationProfileStatus $value ): void {
        $this->profileStatus = $value;
    }

    /**
     * Sets the state property value. The state of the profile. Possible values are: provisioning, provisioned, provisioningFailed, deleting, deletionFailed.
     *  @param EducationSynchronizationProfileState|null $value Value to set for the state property.
    */
    public function setState(?EducationSynchronizationProfileState $value ): void {
        $this->state = $value;
    }

}
