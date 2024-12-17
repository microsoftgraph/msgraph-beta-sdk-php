<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcReviewStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CloudPcReviewStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcReviewStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcReviewStatus {
        return new CloudPcReviewStatus();
    }

    /**
     * Gets the accessTier property value. The blob access tier of the Azure Storage account in which the Cloud PC snapshot is saved with. Possible values are hot, cool, cold, and archive, default value is hot.
     * @return CloudPcBlobAccessTier|null
    */
    public function getAccessTier(): ?CloudPcBlobAccessTier {
        $val = $this->getBackingStore()->get('accessTier');
        if (is_null($val) || $val instanceof CloudPcBlobAccessTier) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessTier'");
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
     * Gets the azureStorageAccountId property value. The resource ID of the Azure Storage account in which the Cloud PC snapshot is being saved.
     * @return string|null
    */
    public function getAzureStorageAccountId(): ?string {
        $val = $this->getBackingStore()->get('azureStorageAccountId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureStorageAccountId'");
    }

    /**
     * Gets the azureStorageAccountName property value. The name of the Azure Storage account in which the Cloud PC snapshot is being saved.
     * @return string|null
    */
    public function getAzureStorageAccountName(): ?string {
        $val = $this->getBackingStore()->get('azureStorageAccountName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureStorageAccountName'");
    }

    /**
     * Gets the azureStorageContainerName property value. The name of the container in an Azure Storage account in which the Cloud PC snapshot is being saved.
     * @return string|null
    */
    public function getAzureStorageContainerName(): ?string {
        $val = $this->getBackingStore()->get('azureStorageContainerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureStorageContainerName'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accessTier' => fn(ParseNode $n) => $o->setAccessTier($n->getEnumValue(CloudPcBlobAccessTier::class)),
            'azureStorageAccountId' => fn(ParseNode $n) => $o->setAzureStorageAccountId($n->getStringValue()),
            'azureStorageAccountName' => fn(ParseNode $n) => $o->setAzureStorageAccountName($n->getStringValue()),
            'azureStorageContainerName' => fn(ParseNode $n) => $o->setAzureStorageContainerName($n->getStringValue()),
            'inReview' => fn(ParseNode $n) => $o->setInReview($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'restorePointDateTime' => fn(ParseNode $n) => $o->setRestorePointDateTime($n->getDateTimeValue()),
            'reviewStartDateTime' => fn(ParseNode $n) => $o->setReviewStartDateTime($n->getDateTimeValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'subscriptionName' => fn(ParseNode $n) => $o->setSubscriptionName($n->getStringValue()),
            'userAccessLevel' => fn(ParseNode $n) => $o->setUserAccessLevel($n->getEnumValue(CloudPcUserAccessLevel::class)),
        ];
    }

    /**
     * Gets the inReview property value. True if the Cloud PC is set to in review by the administrator.
     * @return bool|null
    */
    public function getInReview(): ?bool {
        $val = $this->getBackingStore()->get('inReview');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inReview'");
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
     * Gets the restorePointDateTime property value. The specific date and time of the Cloud PC snapshot that was taken and saved automatically, when the Cloud PC is set to in review. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getRestorePointDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('restorePointDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restorePointDateTime'");
    }

    /**
     * Gets the reviewStartDateTime property value. The specific date and time when the Cloud PC was set to in review. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getReviewStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('reviewStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewStartDateTime'");
    }

    /**
     * Gets the subscriptionId property value. The ID of the Azure subscription in which the Cloud PC snapshot is being saved, in GUID format.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        $val = $this->getBackingStore()->get('subscriptionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptionId'");
    }

    /**
     * Gets the subscriptionName property value. The name of the Azure subscription in which the Cloud PC snapshot is being saved.
     * @return string|null
    */
    public function getSubscriptionName(): ?string {
        $val = $this->getBackingStore()->get('subscriptionName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptionName'");
    }

    /**
     * Gets the userAccessLevel property value. The userAccessLevel property
     * @return CloudPcUserAccessLevel|null
    */
    public function getUserAccessLevel(): ?CloudPcUserAccessLevel {
        $val = $this->getBackingStore()->get('userAccessLevel');
        if (is_null($val) || $val instanceof CloudPcUserAccessLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAccessLevel'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('accessTier', $this->getAccessTier());
        $writer->writeStringValue('azureStorageAccountId', $this->getAzureStorageAccountId());
        $writer->writeStringValue('azureStorageAccountName', $this->getAzureStorageAccountName());
        $writer->writeStringValue('azureStorageContainerName', $this->getAzureStorageContainerName());
        $writer->writeBooleanValue('inReview', $this->getInReview());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('restorePointDateTime', $this->getRestorePointDateTime());
        $writer->writeDateTimeValue('reviewStartDateTime', $this->getReviewStartDateTime());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('subscriptionName', $this->getSubscriptionName());
        $writer->writeEnumValue('userAccessLevel', $this->getUserAccessLevel());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accessTier property value. The blob access tier of the Azure Storage account in which the Cloud PC snapshot is saved with. Possible values are hot, cool, cold, and archive, default value is hot.
     * @param CloudPcBlobAccessTier|null $value Value to set for the accessTier property.
    */
    public function setAccessTier(?CloudPcBlobAccessTier $value): void {
        $this->getBackingStore()->set('accessTier', $value);
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the azureStorageAccountId property value. The resource ID of the Azure Storage account in which the Cloud PC snapshot is being saved.
     * @param string|null $value Value to set for the azureStorageAccountId property.
    */
    public function setAzureStorageAccountId(?string $value): void {
        $this->getBackingStore()->set('azureStorageAccountId', $value);
    }

    /**
     * Sets the azureStorageAccountName property value. The name of the Azure Storage account in which the Cloud PC snapshot is being saved.
     * @param string|null $value Value to set for the azureStorageAccountName property.
    */
    public function setAzureStorageAccountName(?string $value): void {
        $this->getBackingStore()->set('azureStorageAccountName', $value);
    }

    /**
     * Sets the azureStorageContainerName property value. The name of the container in an Azure Storage account in which the Cloud PC snapshot is being saved.
     * @param string|null $value Value to set for the azureStorageContainerName property.
    */
    public function setAzureStorageContainerName(?string $value): void {
        $this->getBackingStore()->set('azureStorageContainerName', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the inReview property value. True if the Cloud PC is set to in review by the administrator.
     * @param bool|null $value Value to set for the inReview property.
    */
    public function setInReview(?bool $value): void {
        $this->getBackingStore()->set('inReview', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the restorePointDateTime property value. The specific date and time of the Cloud PC snapshot that was taken and saved automatically, when the Cloud PC is set to in review. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the restorePointDateTime property.
    */
    public function setRestorePointDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('restorePointDateTime', $value);
    }

    /**
     * Sets the reviewStartDateTime property value. The specific date and time when the Cloud PC was set to in review. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the reviewStartDateTime property.
    */
    public function setReviewStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('reviewStartDateTime', $value);
    }

    /**
     * Sets the subscriptionId property value. The ID of the Azure subscription in which the Cloud PC snapshot is being saved, in GUID format.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('subscriptionId', $value);
    }

    /**
     * Sets the subscriptionName property value. The name of the Azure subscription in which the Cloud PC snapshot is being saved.
     * @param string|null $value Value to set for the subscriptionName property.
    */
    public function setSubscriptionName(?string $value): void {
        $this->getBackingStore()->set('subscriptionName', $value);
    }

    /**
     * Sets the userAccessLevel property value. The userAccessLevel property
     * @param CloudPcUserAccessLevel|null $value Value to set for the userAccessLevel property.
    */
    public function setUserAccessLevel(?CloudPcUserAccessLevel $value): void {
        $this->getBackingStore()->set('userAccessLevel', $value);
    }

}
