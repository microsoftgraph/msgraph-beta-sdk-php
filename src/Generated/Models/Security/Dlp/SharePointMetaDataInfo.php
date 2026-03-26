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

class SharePointMetaDataInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SharePointMetaDataInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointMetaDataInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointMetaDataInfo {
        return new SharePointMetaDataInfo();
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
     * Gets the aiFileActions property value. The aiFileActions property
     * @return string|null
    */
    public function getAiFileActions(): ?string {
        $val = $this->getBackingStore()->get('aiFileActions');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aiFileActions'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the blockedUserForFileAccess property value. The blockedUserForFileAccess property
     * @return string|null
    */
    public function getBlockedUserForFileAccess(): ?string {
        $val = $this->getBackingStore()->get('blockedUserForFileAccess');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockedUserForFileAccess'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aiFileActions' => fn(ParseNode $n) => $o->setAiFileActions($n->getStringValue()),
            'blockedUserForFileAccess' => fn(ParseNode $n) => $o->setBlockedUserForFileAccess($n->getStringValue()),
            'fileId' => fn(ParseNode $n) => $o->setFileId($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'fileOwner' => fn(ParseNode $n) => $o->setFileOwner($n->getStringValue()),
            'filePathUrl' => fn(ParseNode $n) => $o->setFilePathUrl($n->getStringValue()),
            'fileSize' => fn(ParseNode $n) => $o->setFileSize($n->getIntegerValue()),
            'from' => fn(ParseNode $n) => $o->setFrom($n->getStringValue()),
            'isJitTriggered' => fn(ParseNode $n) => $o->setIsJitTriggered($n->getBooleanValue()),
            'isViewableByExternalUsers' => fn(ParseNode $n) => $o->setIsViewableByExternalUsers($n->getBooleanValue()),
            'isVisibleOnlyToOdbOwner' => fn(ParseNode $n) => $o->setIsVisibleOnlyToOdbOwner($n->getBooleanValue()),
            'itemCreatedDate' => fn(ParseNode $n) => $o->setItemCreatedDate($n->getDateValue()),
            'itemLastModifiedDate' => fn(ParseNode $n) => $o->setItemLastModifiedDate($n->getDateValue()),
            'itemLastSharedDate' => fn(ParseNode $n) => $o->setItemLastSharedDate($n->getDateValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'quarantineLocationFileUrl' => fn(ParseNode $n) => $o->setQuarantineLocationFileUrl($n->getStringValue()),
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
            'sharedBy' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSharedBy($val);
            },
            'sharedWith' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSharedWith($val);
            },
            'siteAdmins' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSiteAdmins($val);
            },
            'siteCollectionGuid' => fn(ParseNode $n) => $o->setSiteCollectionGuid($n->getStringValue()),
            'siteCollectionUrl' => fn(ParseNode $n) => $o->setSiteCollectionUrl($n->getStringValue()),
            'uniqueId' => fn(ParseNode $n) => $o->setUniqueId($n->getStringValue()),
            'violatingAction' => fn(ParseNode $n) => $o->setViolatingAction($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileId property value. The fileId property
     * @return string|null
    */
    public function getFileId(): ?string {
        $val = $this->getBackingStore()->get('fileId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileId'");
    }

    /**
     * Gets the fileName property value. The fileName property
     * @return string|null
    */
    public function getFileName(): ?string {
        $val = $this->getBackingStore()->get('fileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileName'");
    }

    /**
     * Gets the fileOwner property value. The fileOwner property
     * @return string|null
    */
    public function getFileOwner(): ?string {
        $val = $this->getBackingStore()->get('fileOwner');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileOwner'");
    }

    /**
     * Gets the filePathUrl property value. The filePathUrl property
     * @return string|null
    */
    public function getFilePathUrl(): ?string {
        $val = $this->getBackingStore()->get('filePathUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filePathUrl'");
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
     * Gets the isJitTriggered property value. The isJitTriggered property
     * @return bool|null
    */
    public function getIsJitTriggered(): ?bool {
        $val = $this->getBackingStore()->get('isJitTriggered');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isJitTriggered'");
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
     * Gets the isVisibleOnlyToOdbOwner property value. The isVisibleOnlyToOdbOwner property
     * @return bool|null
    */
    public function getIsVisibleOnlyToOdbOwner(): ?bool {
        $val = $this->getBackingStore()->get('isVisibleOnlyToOdbOwner');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isVisibleOnlyToOdbOwner'");
    }

    /**
     * Gets the itemCreatedDate property value. The itemCreatedDate property
     * @return Date|null
    */
    public function getItemCreatedDate(): ?Date {
        $val = $this->getBackingStore()->get('itemCreatedDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemCreatedDate'");
    }

    /**
     * Gets the itemLastModifiedDate property value. The itemLastModifiedDate property
     * @return Date|null
    */
    public function getItemLastModifiedDate(): ?Date {
        $val = $this->getBackingStore()->get('itemLastModifiedDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemLastModifiedDate'");
    }

    /**
     * Gets the itemLastSharedDate property value. The itemLastSharedDate property
     * @return Date|null
    */
    public function getItemLastSharedDate(): ?Date {
        $val = $this->getBackingStore()->get('itemLastSharedDate');
        if (is_null($val) || $val instanceof Date) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemLastSharedDate'");
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
     * Gets the quarantineLocationFileUrl property value. The quarantineLocationFileUrl property
     * @return string|null
    */
    public function getQuarantineLocationFileUrl(): ?string {
        $val = $this->getBackingStore()->get('quarantineLocationFileUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'quarantineLocationFileUrl'");
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
     * Gets the sharedBy property value. The sharedBy property
     * @return array<string>|null
    */
    public function getSharedBy(): ?array {
        $val = $this->getBackingStore()->get('sharedBy');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedBy'");
    }

    /**
     * Gets the sharedWith property value. The sharedWith property
     * @return array<string>|null
    */
    public function getSharedWith(): ?array {
        $val = $this->getBackingStore()->get('sharedWith');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedWith'");
    }

    /**
     * Gets the siteAdmins property value. The siteAdmins property
     * @return array<string>|null
    */
    public function getSiteAdmins(): ?array {
        $val = $this->getBackingStore()->get('siteAdmins');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteAdmins'");
    }

    /**
     * Gets the siteCollectionGuid property value. The siteCollectionGuid property
     * @return string|null
    */
    public function getSiteCollectionGuid(): ?string {
        $val = $this->getBackingStore()->get('siteCollectionGuid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteCollectionGuid'");
    }

    /**
     * Gets the siteCollectionUrl property value. The siteCollectionUrl property
     * @return string|null
    */
    public function getSiteCollectionUrl(): ?string {
        $val = $this->getBackingStore()->get('siteCollectionUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'siteCollectionUrl'");
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
     * Gets the violatingAction property value. The violatingAction property
     * @return string|null
    */
    public function getViolatingAction(): ?string {
        $val = $this->getBackingStore()->get('violatingAction');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'violatingAction'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('aiFileActions', $this->getAiFileActions());
        $writer->writeStringValue('blockedUserForFileAccess', $this->getBlockedUserForFileAccess());
        $writer->writeStringValue('fileId', $this->getFileId());
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeStringValue('fileOwner', $this->getFileOwner());
        $writer->writeStringValue('filePathUrl', $this->getFilePathUrl());
        $writer->writeIntegerValue('fileSize', $this->getFileSize());
        $writer->writeStringValue('from', $this->getFrom());
        $writer->writeBooleanValue('isJitTriggered', $this->getIsJitTriggered());
        $writer->writeBooleanValue('isViewableByExternalUsers', $this->getIsViewableByExternalUsers());
        $writer->writeBooleanValue('isVisibleOnlyToOdbOwner', $this->getIsVisibleOnlyToOdbOwner());
        $writer->writeDateValue('itemCreatedDate', $this->getItemCreatedDate());
        $writer->writeDateValue('itemLastModifiedDate', $this->getItemLastModifiedDate());
        $writer->writeDateValue('itemLastSharedDate', $this->getItemLastSharedDate());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('quarantineLocationFileUrl', $this->getQuarantineLocationFileUrl());
        $writer->writeCollectionOfPrimitiveValues('sensitivityLabelIds', $this->getSensitivityLabelIds());
        $writer->writeCollectionOfPrimitiveValues('sensitivityLabelNames', $this->getSensitivityLabelNames());
        $writer->writeCollectionOfPrimitiveValues('sharedBy', $this->getSharedBy());
        $writer->writeCollectionOfPrimitiveValues('sharedWith', $this->getSharedWith());
        $writer->writeCollectionOfPrimitiveValues('siteAdmins', $this->getSiteAdmins());
        $writer->writeStringValue('siteCollectionGuid', $this->getSiteCollectionGuid());
        $writer->writeStringValue('siteCollectionUrl', $this->getSiteCollectionUrl());
        $writer->writeStringValue('uniqueId', $this->getUniqueId());
        $writer->writeStringValue('violatingAction', $this->getViolatingAction());
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
     * Sets the aiFileActions property value. The aiFileActions property
     * @param string|null $value Value to set for the aiFileActions property.
    */
    public function setAiFileActions(?string $value): void {
        $this->getBackingStore()->set('aiFileActions', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the blockedUserForFileAccess property value. The blockedUserForFileAccess property
     * @param string|null $value Value to set for the blockedUserForFileAccess property.
    */
    public function setBlockedUserForFileAccess(?string $value): void {
        $this->getBackingStore()->set('blockedUserForFileAccess', $value);
    }

    /**
     * Sets the fileId property value. The fileId property
     * @param string|null $value Value to set for the fileId property.
    */
    public function setFileId(?string $value): void {
        $this->getBackingStore()->set('fileId', $value);
    }

    /**
     * Sets the fileName property value. The fileName property
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->getBackingStore()->set('fileName', $value);
    }

    /**
     * Sets the fileOwner property value. The fileOwner property
     * @param string|null $value Value to set for the fileOwner property.
    */
    public function setFileOwner(?string $value): void {
        $this->getBackingStore()->set('fileOwner', $value);
    }

    /**
     * Sets the filePathUrl property value. The filePathUrl property
     * @param string|null $value Value to set for the filePathUrl property.
    */
    public function setFilePathUrl(?string $value): void {
        $this->getBackingStore()->set('filePathUrl', $value);
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
     * Sets the isJitTriggered property value. The isJitTriggered property
     * @param bool|null $value Value to set for the isJitTriggered property.
    */
    public function setIsJitTriggered(?bool $value): void {
        $this->getBackingStore()->set('isJitTriggered', $value);
    }

    /**
     * Sets the isViewableByExternalUsers property value. The isViewableByExternalUsers property
     * @param bool|null $value Value to set for the isViewableByExternalUsers property.
    */
    public function setIsViewableByExternalUsers(?bool $value): void {
        $this->getBackingStore()->set('isViewableByExternalUsers', $value);
    }

    /**
     * Sets the isVisibleOnlyToOdbOwner property value. The isVisibleOnlyToOdbOwner property
     * @param bool|null $value Value to set for the isVisibleOnlyToOdbOwner property.
    */
    public function setIsVisibleOnlyToOdbOwner(?bool $value): void {
        $this->getBackingStore()->set('isVisibleOnlyToOdbOwner', $value);
    }

    /**
     * Sets the itemCreatedDate property value. The itemCreatedDate property
     * @param Date|null $value Value to set for the itemCreatedDate property.
    */
    public function setItemCreatedDate(?Date $value): void {
        $this->getBackingStore()->set('itemCreatedDate', $value);
    }

    /**
     * Sets the itemLastModifiedDate property value. The itemLastModifiedDate property
     * @param Date|null $value Value to set for the itemLastModifiedDate property.
    */
    public function setItemLastModifiedDate(?Date $value): void {
        $this->getBackingStore()->set('itemLastModifiedDate', $value);
    }

    /**
     * Sets the itemLastSharedDate property value. The itemLastSharedDate property
     * @param Date|null $value Value to set for the itemLastSharedDate property.
    */
    public function setItemLastSharedDate(?Date $value): void {
        $this->getBackingStore()->set('itemLastSharedDate', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the quarantineLocationFileUrl property value. The quarantineLocationFileUrl property
     * @param string|null $value Value to set for the quarantineLocationFileUrl property.
    */
    public function setQuarantineLocationFileUrl(?string $value): void {
        $this->getBackingStore()->set('quarantineLocationFileUrl', $value);
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
     * Sets the sharedBy property value. The sharedBy property
     * @param array<string>|null $value Value to set for the sharedBy property.
    */
    public function setSharedBy(?array $value): void {
        $this->getBackingStore()->set('sharedBy', $value);
    }

    /**
     * Sets the sharedWith property value. The sharedWith property
     * @param array<string>|null $value Value to set for the sharedWith property.
    */
    public function setSharedWith(?array $value): void {
        $this->getBackingStore()->set('sharedWith', $value);
    }

    /**
     * Sets the siteAdmins property value. The siteAdmins property
     * @param array<string>|null $value Value to set for the siteAdmins property.
    */
    public function setSiteAdmins(?array $value): void {
        $this->getBackingStore()->set('siteAdmins', $value);
    }

    /**
     * Sets the siteCollectionGuid property value. The siteCollectionGuid property
     * @param string|null $value Value to set for the siteCollectionGuid property.
    */
    public function setSiteCollectionGuid(?string $value): void {
        $this->getBackingStore()->set('siteCollectionGuid', $value);
    }

    /**
     * Sets the siteCollectionUrl property value. The siteCollectionUrl property
     * @param string|null $value Value to set for the siteCollectionUrl property.
    */
    public function setSiteCollectionUrl(?string $value): void {
        $this->getBackingStore()->set('siteCollectionUrl', $value);
    }

    /**
     * Sets the uniqueId property value. The uniqueId property
     * @param string|null $value Value to set for the uniqueId property.
    */
    public function setUniqueId(?string $value): void {
        $this->getBackingStore()->set('uniqueId', $value);
    }

    /**
     * Sets the violatingAction property value. The violatingAction property
     * @param string|null $value Value to set for the violatingAction property.
    */
    public function setViolatingAction(?string $value): void {
        $this->getBackingStore()->set('violatingAction', $value);
    }

}
