<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\Dlp;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\Date;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ExchangeMetaDataInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ExchangeMetaDataInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExchangeMetaDataInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExchangeMetaDataInfo {
        return new ExchangeMetaDataInfo();
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
     * Gets the attachmentDetails property value. The attachmentDetails property
     * @return array<AttachmentInfo>|null
    */
    public function getAttachmentDetails(): ?array {
        $val = $this->getBackingStore()->get('attachmentDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AttachmentInfo::class);
            /** @var array<AttachmentInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachmentDetails'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the bccRecipients property value. The bccRecipients property
     * @return array<string>|null
    */
    public function getBccRecipients(): ?array {
        $val = $this->getBackingStore()->get('bccRecipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bccRecipients'");
    }

    /**
     * Gets the ccRecipients property value. The ccRecipients property
     * @return array<string>|null
    */
    public function getCcRecipients(): ?array {
        $val = $this->getBackingStore()->get('ccRecipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ccRecipients'");
    }

    /**
     * Gets the docId property value. The docId property
     * @return string|null
    */
    public function getDocId(): ?string {
        $val = $this->getBackingStore()->get('docId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'docId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attachmentDetails' => fn(ParseNode $n) => $o->setAttachmentDetails($n->getCollectionOfObjectValues([AttachmentInfo::class, 'createFromDiscriminatorValue'])),
            'bccRecipients' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBccRecipients($val);
            },
            'ccRecipients' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCcRecipients($val);
            },
            'docId' => fn(ParseNode $n) => $o->setDocId($n->getStringValue()),
            'fileSize' => fn(ParseNode $n) => $o->setFileSize($n->getIntegerValue()),
            'from' => fn(ParseNode $n) => $o->setFrom($n->getStringValue()),
            'immutableEntryId' => fn(ParseNode $n) => $o->setImmutableEntryId($n->getStringValue()),
            'isViewableByExternalUsers' => fn(ParseNode $n) => $o->setIsViewableByExternalUsers($n->getBooleanValue()),
            'messageId' => fn(ParseNode $n) => $o->setMessageId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recipientCount' => fn(ParseNode $n) => $o->setRecipientCount($n->getIntegerValue()),
            'sensitivityLabelIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSensitivityLabelIds($val);
            },
            'sensitivityLabelNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSensitivityLabelNames($val);
            },
            'sentDate' => fn(ParseNode $n) => $o->setSentDate($n->getDateValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'toRecipients' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setToRecipients($val);
            },
            'uniqueId' => fn(ParseNode $n) => $o->setUniqueId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileSize property value. The fileSize property
     * @return int|null
    */
    public function getFileSize(): ?int {
        $val = $this->getBackingStore()->get('fileSize');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileSize'");
    }

    /**
     * Gets the from property value. The from property
     * @return string|null
    */
    public function getFrom(): ?string {
        $val = $this->getBackingStore()->get('from');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'from'");
    }

    /**
     * Gets the immutableEntryId property value. The immutableEntryId property
     * @return string|null
    */
    public function getImmutableEntryId(): ?string {
        $val = $this->getBackingStore()->get('immutableEntryId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'immutableEntryId'");
    }

    /**
     * Gets the isViewableByExternalUsers property value. The isViewableByExternalUsers property
     * @return bool|null
    */
    public function getIsViewableByExternalUsers(): ?bool {
        $val = $this->getBackingStore()->get('isViewableByExternalUsers');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isViewableByExternalUsers'");
    }

    /**
     * Gets the messageId property value. The messageId property
     * @return string|null
    */
    public function getMessageId(): ?string {
        $val = $this->getBackingStore()->get('messageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageId'");
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
     * Gets the recipientCount property value. The recipientCount property
     * @return int|null
    */
    public function getRecipientCount(): ?int {
        $val = $this->getBackingStore()->get('recipientCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientCount'");
    }

    /**
     * Gets the sensitivityLabelIds property value. The sensitivityLabelIds property
     * @return array<string>|null
    */
    public function getSensitivityLabelIds(): ?array {
        $val = $this->getBackingStore()->get('sensitivityLabelIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivityLabelIds'");
    }

    /**
     * Gets the sensitivityLabelNames property value. The sensitivityLabelNames property
     * @return array<string>|null
    */
    public function getSensitivityLabelNames(): ?array {
        $val = $this->getBackingStore()->get('sensitivityLabelNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivityLabelNames'");
    }

    /**
     * Gets the sentDate property value. The sentDate property
     * @return Date|null
    */
    public function getSentDate(): ?Date {
        $val = $this->getBackingStore()->get('sentDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sentDate'");
    }

    /**
     * Gets the subject property value. The subject property
     * @return string|null
    */
    public function getSubject(): ?string {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Gets the toRecipients property value. The toRecipients property
     * @return array<string>|null
    */
    public function getToRecipients(): ?array {
        $val = $this->getBackingStore()->get('toRecipients');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'toRecipients'");
    }

    /**
     * Gets the uniqueId property value. The uniqueId property
     * @return string|null
    */
    public function getUniqueId(): ?string {
        $val = $this->getBackingStore()->get('uniqueId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uniqueId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attachmentDetails', $this->getAttachmentDetails());
        $writer->writeCollectionOfPrimitiveValues('bccRecipients', $this->getBccRecipients());
        $writer->writeCollectionOfPrimitiveValues('ccRecipients', $this->getCcRecipients());
        $writer->writeStringValue('docId', $this->getDocId());
        $writer->writeIntegerValue('fileSize', $this->getFileSize());
        $writer->writeStringValue('from', $this->getFrom());
        $writer->writeStringValue('immutableEntryId', $this->getImmutableEntryId());
        $writer->writeBooleanValue('isViewableByExternalUsers', $this->getIsViewableByExternalUsers());
        $writer->writeStringValue('messageId', $this->getMessageId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('recipientCount', $this->getRecipientCount());
        $writer->writeCollectionOfPrimitiveValues('sensitivityLabelIds', $this->getSensitivityLabelIds());
        $writer->writeCollectionOfPrimitiveValues('sensitivityLabelNames', $this->getSensitivityLabelNames());
        $writer->writeDateValue('sentDate', $this->getSentDate());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeCollectionOfPrimitiveValues('toRecipients', $this->getToRecipients());
        $writer->writeStringValue('uniqueId', $this->getUniqueId());
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
     * Sets the attachmentDetails property value. The attachmentDetails property
     * @param array<AttachmentInfo>|null $value Value to set for the attachmentDetails property.
    */
    public function setAttachmentDetails(?array $value): void {
        $this->getBackingStore()->set('attachmentDetails', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the bccRecipients property value. The bccRecipients property
     * @param array<string>|null $value Value to set for the bccRecipients property.
    */
    public function setBccRecipients(?array $value): void {
        $this->getBackingStore()->set('bccRecipients', $value);
    }

    /**
     * Sets the ccRecipients property value. The ccRecipients property
     * @param array<string>|null $value Value to set for the ccRecipients property.
    */
    public function setCcRecipients(?array $value): void {
        $this->getBackingStore()->set('ccRecipients', $value);
    }

    /**
     * Sets the docId property value. The docId property
     * @param string|null $value Value to set for the docId property.
    */
    public function setDocId(?string $value): void {
        $this->getBackingStore()->set('docId', $value);
    }

    /**
     * Sets the fileSize property value. The fileSize property
     * @param int|null $value Value to set for the fileSize property.
    */
    public function setFileSize(?int $value): void {
        $this->getBackingStore()->set('fileSize', $value);
    }

    /**
     * Sets the from property value. The from property
     * @param string|null $value Value to set for the from property.
    */
    public function setFrom(?string $value): void {
        $this->getBackingStore()->set('from', $value);
    }

    /**
     * Sets the immutableEntryId property value. The immutableEntryId property
     * @param string|null $value Value to set for the immutableEntryId property.
    */
    public function setImmutableEntryId(?string $value): void {
        $this->getBackingStore()->set('immutableEntryId', $value);
    }

    /**
     * Sets the isViewableByExternalUsers property value. The isViewableByExternalUsers property
     * @param bool|null $value Value to set for the isViewableByExternalUsers property.
    */
    public function setIsViewableByExternalUsers(?bool $value): void {
        $this->getBackingStore()->set('isViewableByExternalUsers', $value);
    }

    /**
     * Sets the messageId property value. The messageId property
     * @param string|null $value Value to set for the messageId property.
    */
    public function setMessageId(?string $value): void {
        $this->getBackingStore()->set('messageId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recipientCount property value. The recipientCount property
     * @param int|null $value Value to set for the recipientCount property.
    */
    public function setRecipientCount(?int $value): void {
        $this->getBackingStore()->set('recipientCount', $value);
    }

    /**
     * Sets the sensitivityLabelIds property value. The sensitivityLabelIds property
     * @param array<string>|null $value Value to set for the sensitivityLabelIds property.
    */
    public function setSensitivityLabelIds(?array $value): void {
        $this->getBackingStore()->set('sensitivityLabelIds', $value);
    }

    /**
     * Sets the sensitivityLabelNames property value. The sensitivityLabelNames property
     * @param array<string>|null $value Value to set for the sensitivityLabelNames property.
    */
    public function setSensitivityLabelNames(?array $value): void {
        $this->getBackingStore()->set('sensitivityLabelNames', $value);
    }

    /**
     * Sets the sentDate property value. The sentDate property
     * @param Date|null $value Value to set for the sentDate property.
    */
    public function setSentDate(?Date $value): void {
        $this->getBackingStore()->set('sentDate', $value);
    }

    /**
     * Sets the subject property value. The subject property
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the toRecipients property value. The toRecipients property
     * @param array<string>|null $value Value to set for the toRecipients property.
    */
    public function setToRecipients(?array $value): void {
        $this->getBackingStore()->set('toRecipients', $value);
    }

    /**
     * Sets the uniqueId property value. The uniqueId property
     * @param string|null $value Value to set for the uniqueId property.
    */
    public function setUniqueId(?string $value): void {
        $this->getBackingStore()->set('uniqueId', $value);
    }

}
