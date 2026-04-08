<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\Dlp;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EndpointMetaDataInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EndpointMetaDataInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EndpointMetaDataInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EndpointMetaDataInfo {
        return new EndpointMetaDataInfo();
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
     * Gets the application property value. The application property
     * @return string|null
    */
    public function getApplication(): ?string {
        $val = $this->getBackingStore()->get('application');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'application'");
    }

    /**
     * Gets the applicationSourceExecutableName property value. The applicationSourceExecutableName property
     * @return string|null
    */
    public function getApplicationSourceExecutableName(): ?string {
        $val = $this->getBackingStore()->get('applicationSourceExecutableName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationSourceExecutableName'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the destinationLocationType property value. The destinationLocationType property
     * @return string|null
    */
    public function getDestinationLocationType(): ?string {
        $val = $this->getBackingStore()->get('destinationLocationType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'destinationLocationType'");
    }

    /**
     * Gets the deviceName property value. The deviceName property
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * Gets the dlpAuditEventMetadata property value. The dlpAuditEventMetadata property
     * @return string|null
    */
    public function getDlpAuditEventMetadata(): ?string {
        $val = $this->getBackingStore()->get('dlpAuditEventMetadata');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dlpAuditEventMetadata'");
    }

    /**
     * Gets the endpointOperation property value. The endpointOperation property
     * @return string|null
    */
    public function getEndpointOperation(): ?string {
        $val = $this->getBackingStore()->get('endpointOperation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endpointOperation'");
    }

    /**
     * Gets the enforcementMode property value. The enforcementMode property
     * @return string|null
    */
    public function getEnforcementMode(): ?string {
        $val = $this->getBackingStore()->get('enforcementMode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enforcementMode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'application' => fn(ParseNode $n) => $o->setApplication($n->getStringValue()),
            'applicationSourceExecutableName' => fn(ParseNode $n) => $o->setApplicationSourceExecutableName($n->getStringValue()),
            'destinationLocationType' => fn(ParseNode $n) => $o->setDestinationLocationType($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'dlpAuditEventMetadata' => fn(ParseNode $n) => $o->setDlpAuditEventMetadata($n->getStringValue()),
            'endpointOperation' => fn(ParseNode $n) => $o->setEndpointOperation($n->getStringValue()),
            'enforcementMode' => fn(ParseNode $n) => $o->setEnforcementMode($n->getStringValue()),
            'fileExtension' => fn(ParseNode $n) => $o->setFileExtension($n->getStringValue()),
            'fileSize' => fn(ParseNode $n) => $o->setFileSize($n->getIntegerValue()),
            'fileType' => fn(ParseNode $n) => $o->setFileType($n->getStringValue()),
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'groupName' => fn(ParseNode $n) => $o->setGroupName($n->getStringValue()),
            'isEaV2Enriched' => fn(ParseNode $n) => $o->setIsEaV2Enriched($n->getBooleanValue()),
            'isHidden' => fn(ParseNode $n) => $o->setIsHidden($n->getBooleanValue()),
            'isJitTriggered' => fn(ParseNode $n) => $o->setIsJitTriggered($n->getBooleanValue()),
            'isRmseEncrypted' => fn(ParseNode $n) => $o->setIsRmseEncrypted($n->getBooleanValue()),
            'isViewableByExternalUsers' => fn(ParseNode $n) => $o->setIsViewableByExternalUsers($n->getBooleanValue()),
            'justification' => fn(ParseNode $n) => $o->setJustification($n->getStringValue()),
            'markOfTheWebData' => fn(ParseNode $n) => $o->setMarkOfTheWebData($n->getStringValue()),
            'mdatpDeviceId' => fn(ParseNode $n) => $o->setMdatpDeviceId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'originatingDomain' => fn(ParseNode $n) => $o->setOriginatingDomain($n->getStringValue()),
            'parentArchiveHash' => fn(ParseNode $n) => $o->setParentArchiveHash($n->getStringValue()),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getStringValue()),
            'policyMatchDetails' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPolicyMatchDetails($val);
            },
            'policyMatchInfo' => fn(ParseNode $n) => $o->setPolicyMatchInfo($n->getStringValue()),
            'previousFileName' => fn(ParseNode $n) => $o->setPreviousFileName($n->getStringValue()),
            'removableMediaDeviceAttributes' => fn(ParseNode $n) => $o->setRemovableMediaDeviceAttributes($n->getStringValue()),
            'sensitiveInfoTypeData' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSensitiveInfoTypeData($val);
            },
            'sensitivityLabelEventData' => fn(ParseNode $n) => $o->setSensitivityLabelEventData($n->getStringValue()),
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
            'sha1' => fn(ParseNode $n) => $o->setSha1($n->getStringValue()),
            'sha256' => fn(ParseNode $n) => $o->setSha256($n->getStringValue()),
            'sourceLocationType' => fn(ParseNode $n) => $o->setSourceLocationType($n->getStringValue()),
            'targetDomain' => fn(ParseNode $n) => $o->setTargetDomain($n->getStringValue()),
            'targetFilePath' => fn(ParseNode $n) => $o->setTargetFilePath($n->getStringValue()),
            'targetPrinterName' => fn(ParseNode $n) => $o->setTargetPrinterName($n->getStringValue()),
            'targetUrl' => fn(ParseNode $n) => $o->setTargetUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileExtension property value. The fileExtension property
     * @return string|null
    */
    public function getFileExtension(): ?string {
        $val = $this->getBackingStore()->get('fileExtension');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileExtension'");
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
     * Gets the fileType property value. The fileType property
     * @return string|null
    */
    public function getFileType(): ?string {
        $val = $this->getBackingStore()->get('fileType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileType'");
    }

    /**
     * Gets the groupId property value. The groupId property
     * @return string|null
    */
    public function getGroupId(): ?string {
        $val = $this->getBackingStore()->get('groupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupId'");
    }

    /**
     * Gets the groupName property value. The groupName property
     * @return string|null
    */
    public function getGroupName(): ?string {
        $val = $this->getBackingStore()->get('groupName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupName'");
    }

    /**
     * Gets the isEaV2Enriched property value. The isEaV2Enriched property
     * @return bool|null
    */
    public function getIsEaV2Enriched(): ?bool {
        $val = $this->getBackingStore()->get('isEaV2Enriched');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEaV2Enriched'");
    }

    /**
     * Gets the isHidden property value. The isHidden property
     * @return bool|null
    */
    public function getIsHidden(): ?bool {
        $val = $this->getBackingStore()->get('isHidden');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isHidden'");
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
     * Gets the isRmseEncrypted property value. The isRmseEncrypted property
     * @return bool|null
    */
    public function getIsRmseEncrypted(): ?bool {
        $val = $this->getBackingStore()->get('isRmseEncrypted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRmseEncrypted'");
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
     * Gets the justification property value. The justification property
     * @return string|null
    */
    public function getJustification(): ?string {
        $val = $this->getBackingStore()->get('justification');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'justification'");
    }

    /**
     * Gets the markOfTheWebData property value. The markOfTheWebData property
     * @return string|null
    */
    public function getMarkOfTheWebData(): ?string {
        $val = $this->getBackingStore()->get('markOfTheWebData');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'markOfTheWebData'");
    }

    /**
     * Gets the mdatpDeviceId property value. The mdatpDeviceId property
     * @return string|null
    */
    public function getMdatpDeviceId(): ?string {
        $val = $this->getBackingStore()->get('mdatpDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mdatpDeviceId'");
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
     * Gets the originatingDomain property value. The originatingDomain property
     * @return string|null
    */
    public function getOriginatingDomain(): ?string {
        $val = $this->getBackingStore()->get('originatingDomain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'originatingDomain'");
    }

    /**
     * Gets the parentArchiveHash property value. The parentArchiveHash property
     * @return string|null
    */
    public function getParentArchiveHash(): ?string {
        $val = $this->getBackingStore()->get('parentArchiveHash');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentArchiveHash'");
    }

    /**
     * Gets the platform property value. The platform property
     * @return string|null
    */
    public function getPlatform(): ?string {
        $val = $this->getBackingStore()->get('platform');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platform'");
    }

    /**
     * Gets the policyMatchDetails property value. The policyMatchDetails property
     * @return array<string>|null
    */
    public function getPolicyMatchDetails(): ?array {
        $val = $this->getBackingStore()->get('policyMatchDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyMatchDetails'");
    }

    /**
     * Gets the policyMatchInfo property value. The policyMatchInfo property
     * @return string|null
    */
    public function getPolicyMatchInfo(): ?string {
        $val = $this->getBackingStore()->get('policyMatchInfo');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyMatchInfo'");
    }

    /**
     * Gets the previousFileName property value. The previousFileName property
     * @return string|null
    */
    public function getPreviousFileName(): ?string {
        $val = $this->getBackingStore()->get('previousFileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previousFileName'");
    }

    /**
     * Gets the removableMediaDeviceAttributes property value. The removableMediaDeviceAttributes property
     * @return string|null
    */
    public function getRemovableMediaDeviceAttributes(): ?string {
        $val = $this->getBackingStore()->get('removableMediaDeviceAttributes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'removableMediaDeviceAttributes'");
    }

    /**
     * Gets the sensitiveInfoTypeData property value. The sensitiveInfoTypeData property
     * @return array<string>|null
    */
    public function getSensitiveInfoTypeData(): ?array {
        $val = $this->getBackingStore()->get('sensitiveInfoTypeData');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitiveInfoTypeData'");
    }

    /**
     * Gets the sensitivityLabelEventData property value. The sensitivityLabelEventData property
     * @return string|null
    */
    public function getSensitivityLabelEventData(): ?string {
        $val = $this->getBackingStore()->get('sensitivityLabelEventData');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivityLabelEventData'");
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
     * Gets the sha1 property value. The sha1 property
     * @return string|null
    */
    public function getSha1(): ?string {
        $val = $this->getBackingStore()->get('sha1');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sha1'");
    }

    /**
     * Gets the sha256 property value. The sha256 property
     * @return string|null
    */
    public function getSha256(): ?string {
        $val = $this->getBackingStore()->get('sha256');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sha256'");
    }

    /**
     * Gets the sourceLocationType property value. The sourceLocationType property
     * @return string|null
    */
    public function getSourceLocationType(): ?string {
        $val = $this->getBackingStore()->get('sourceLocationType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceLocationType'");
    }

    /**
     * Gets the targetDomain property value. The targetDomain property
     * @return string|null
    */
    public function getTargetDomain(): ?string {
        $val = $this->getBackingStore()->get('targetDomain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetDomain'");
    }

    /**
     * Gets the targetFilePath property value. The targetFilePath property
     * @return string|null
    */
    public function getTargetFilePath(): ?string {
        $val = $this->getBackingStore()->get('targetFilePath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetFilePath'");
    }

    /**
     * Gets the targetPrinterName property value. The targetPrinterName property
     * @return string|null
    */
    public function getTargetPrinterName(): ?string {
        $val = $this->getBackingStore()->get('targetPrinterName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetPrinterName'");
    }

    /**
     * Gets the targetUrl property value. The targetUrl property
     * @return string|null
    */
    public function getTargetUrl(): ?string {
        $val = $this->getBackingStore()->get('targetUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('application', $this->getApplication());
        $writer->writeStringValue('applicationSourceExecutableName', $this->getApplicationSourceExecutableName());
        $writer->writeStringValue('destinationLocationType', $this->getDestinationLocationType());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('dlpAuditEventMetadata', $this->getDlpAuditEventMetadata());
        $writer->writeStringValue('endpointOperation', $this->getEndpointOperation());
        $writer->writeStringValue('enforcementMode', $this->getEnforcementMode());
        $writer->writeStringValue('fileExtension', $this->getFileExtension());
        $writer->writeIntegerValue('fileSize', $this->getFileSize());
        $writer->writeStringValue('fileType', $this->getFileType());
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeStringValue('groupName', $this->getGroupName());
        $writer->writeBooleanValue('isEaV2Enriched', $this->getIsEaV2Enriched());
        $writer->writeBooleanValue('isHidden', $this->getIsHidden());
        $writer->writeBooleanValue('isJitTriggered', $this->getIsJitTriggered());
        $writer->writeBooleanValue('isRmseEncrypted', $this->getIsRmseEncrypted());
        $writer->writeBooleanValue('isViewableByExternalUsers', $this->getIsViewableByExternalUsers());
        $writer->writeStringValue('justification', $this->getJustification());
        $writer->writeStringValue('markOfTheWebData', $this->getMarkOfTheWebData());
        $writer->writeStringValue('mdatpDeviceId', $this->getMdatpDeviceId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('originatingDomain', $this->getOriginatingDomain());
        $writer->writeStringValue('parentArchiveHash', $this->getParentArchiveHash());
        $writer->writeStringValue('platform', $this->getPlatform());
        $writer->writeCollectionOfPrimitiveValues('policyMatchDetails', $this->getPolicyMatchDetails());
        $writer->writeStringValue('policyMatchInfo', $this->getPolicyMatchInfo());
        $writer->writeStringValue('previousFileName', $this->getPreviousFileName());
        $writer->writeStringValue('removableMediaDeviceAttributes', $this->getRemovableMediaDeviceAttributes());
        $writer->writeCollectionOfPrimitiveValues('sensitiveInfoTypeData', $this->getSensitiveInfoTypeData());
        $writer->writeStringValue('sensitivityLabelEventData', $this->getSensitivityLabelEventData());
        $writer->writeCollectionOfPrimitiveValues('sensitivityLabelIds', $this->getSensitivityLabelIds());
        $writer->writeCollectionOfPrimitiveValues('sensitivityLabelNames', $this->getSensitivityLabelNames());
        $writer->writeStringValue('sha1', $this->getSha1());
        $writer->writeStringValue('sha256', $this->getSha256());
        $writer->writeStringValue('sourceLocationType', $this->getSourceLocationType());
        $writer->writeStringValue('targetDomain', $this->getTargetDomain());
        $writer->writeStringValue('targetFilePath', $this->getTargetFilePath());
        $writer->writeStringValue('targetPrinterName', $this->getTargetPrinterName());
        $writer->writeStringValue('targetUrl', $this->getTargetUrl());
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
     * Sets the application property value. The application property
     * @param string|null $value Value to set for the application property.
    */
    public function setApplication(?string $value): void {
        $this->getBackingStore()->set('application', $value);
    }

    /**
     * Sets the applicationSourceExecutableName property value. The applicationSourceExecutableName property
     * @param string|null $value Value to set for the applicationSourceExecutableName property.
    */
    public function setApplicationSourceExecutableName(?string $value): void {
        $this->getBackingStore()->set('applicationSourceExecutableName', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the destinationLocationType property value. The destinationLocationType property
     * @param string|null $value Value to set for the destinationLocationType property.
    */
    public function setDestinationLocationType(?string $value): void {
        $this->getBackingStore()->set('destinationLocationType', $value);
    }

    /**
     * Sets the deviceName property value. The deviceName property
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the dlpAuditEventMetadata property value. The dlpAuditEventMetadata property
     * @param string|null $value Value to set for the dlpAuditEventMetadata property.
    */
    public function setDlpAuditEventMetadata(?string $value): void {
        $this->getBackingStore()->set('dlpAuditEventMetadata', $value);
    }

    /**
     * Sets the endpointOperation property value. The endpointOperation property
     * @param string|null $value Value to set for the endpointOperation property.
    */
    public function setEndpointOperation(?string $value): void {
        $this->getBackingStore()->set('endpointOperation', $value);
    }

    /**
     * Sets the enforcementMode property value. The enforcementMode property
     * @param string|null $value Value to set for the enforcementMode property.
    */
    public function setEnforcementMode(?string $value): void {
        $this->getBackingStore()->set('enforcementMode', $value);
    }

    /**
     * Sets the fileExtension property value. The fileExtension property
     * @param string|null $value Value to set for the fileExtension property.
    */
    public function setFileExtension(?string $value): void {
        $this->getBackingStore()->set('fileExtension', $value);
    }

    /**
     * Sets the fileSize property value. The fileSize property
     * @param int|null $value Value to set for the fileSize property.
    */
    public function setFileSize(?int $value): void {
        $this->getBackingStore()->set('fileSize', $value);
    }

    /**
     * Sets the fileType property value. The fileType property
     * @param string|null $value Value to set for the fileType property.
    */
    public function setFileType(?string $value): void {
        $this->getBackingStore()->set('fileType', $value);
    }

    /**
     * Sets the groupId property value. The groupId property
     * @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

    /**
     * Sets the groupName property value. The groupName property
     * @param string|null $value Value to set for the groupName property.
    */
    public function setGroupName(?string $value): void {
        $this->getBackingStore()->set('groupName', $value);
    }

    /**
     * Sets the isEaV2Enriched property value. The isEaV2Enriched property
     * @param bool|null $value Value to set for the isEaV2Enriched property.
    */
    public function setIsEaV2Enriched(?bool $value): void {
        $this->getBackingStore()->set('isEaV2Enriched', $value);
    }

    /**
     * Sets the isHidden property value. The isHidden property
     * @param bool|null $value Value to set for the isHidden property.
    */
    public function setIsHidden(?bool $value): void {
        $this->getBackingStore()->set('isHidden', $value);
    }

    /**
     * Sets the isJitTriggered property value. The isJitTriggered property
     * @param bool|null $value Value to set for the isJitTriggered property.
    */
    public function setIsJitTriggered(?bool $value): void {
        $this->getBackingStore()->set('isJitTriggered', $value);
    }

    /**
     * Sets the isRmseEncrypted property value. The isRmseEncrypted property
     * @param bool|null $value Value to set for the isRmseEncrypted property.
    */
    public function setIsRmseEncrypted(?bool $value): void {
        $this->getBackingStore()->set('isRmseEncrypted', $value);
    }

    /**
     * Sets the isViewableByExternalUsers property value. The isViewableByExternalUsers property
     * @param bool|null $value Value to set for the isViewableByExternalUsers property.
    */
    public function setIsViewableByExternalUsers(?bool $value): void {
        $this->getBackingStore()->set('isViewableByExternalUsers', $value);
    }

    /**
     * Sets the justification property value. The justification property
     * @param string|null $value Value to set for the justification property.
    */
    public function setJustification(?string $value): void {
        $this->getBackingStore()->set('justification', $value);
    }

    /**
     * Sets the markOfTheWebData property value. The markOfTheWebData property
     * @param string|null $value Value to set for the markOfTheWebData property.
    */
    public function setMarkOfTheWebData(?string $value): void {
        $this->getBackingStore()->set('markOfTheWebData', $value);
    }

    /**
     * Sets the mdatpDeviceId property value. The mdatpDeviceId property
     * @param string|null $value Value to set for the mdatpDeviceId property.
    */
    public function setMdatpDeviceId(?string $value): void {
        $this->getBackingStore()->set('mdatpDeviceId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the originatingDomain property value. The originatingDomain property
     * @param string|null $value Value to set for the originatingDomain property.
    */
    public function setOriginatingDomain(?string $value): void {
        $this->getBackingStore()->set('originatingDomain', $value);
    }

    /**
     * Sets the parentArchiveHash property value. The parentArchiveHash property
     * @param string|null $value Value to set for the parentArchiveHash property.
    */
    public function setParentArchiveHash(?string $value): void {
        $this->getBackingStore()->set('parentArchiveHash', $value);
    }

    /**
     * Sets the platform property value. The platform property
     * @param string|null $value Value to set for the platform property.
    */
    public function setPlatform(?string $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

    /**
     * Sets the policyMatchDetails property value. The policyMatchDetails property
     * @param array<string>|null $value Value to set for the policyMatchDetails property.
    */
    public function setPolicyMatchDetails(?array $value): void {
        $this->getBackingStore()->set('policyMatchDetails', $value);
    }

    /**
     * Sets the policyMatchInfo property value. The policyMatchInfo property
     * @param string|null $value Value to set for the policyMatchInfo property.
    */
    public function setPolicyMatchInfo(?string $value): void {
        $this->getBackingStore()->set('policyMatchInfo', $value);
    }

    /**
     * Sets the previousFileName property value. The previousFileName property
     * @param string|null $value Value to set for the previousFileName property.
    */
    public function setPreviousFileName(?string $value): void {
        $this->getBackingStore()->set('previousFileName', $value);
    }

    /**
     * Sets the removableMediaDeviceAttributes property value. The removableMediaDeviceAttributes property
     * @param string|null $value Value to set for the removableMediaDeviceAttributes property.
    */
    public function setRemovableMediaDeviceAttributes(?string $value): void {
        $this->getBackingStore()->set('removableMediaDeviceAttributes', $value);
    }

    /**
     * Sets the sensitiveInfoTypeData property value. The sensitiveInfoTypeData property
     * @param array<string>|null $value Value to set for the sensitiveInfoTypeData property.
    */
    public function setSensitiveInfoTypeData(?array $value): void {
        $this->getBackingStore()->set('sensitiveInfoTypeData', $value);
    }

    /**
     * Sets the sensitivityLabelEventData property value. The sensitivityLabelEventData property
     * @param string|null $value Value to set for the sensitivityLabelEventData property.
    */
    public function setSensitivityLabelEventData(?string $value): void {
        $this->getBackingStore()->set('sensitivityLabelEventData', $value);
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
     * Sets the sha1 property value. The sha1 property
     * @param string|null $value Value to set for the sha1 property.
    */
    public function setSha1(?string $value): void {
        $this->getBackingStore()->set('sha1', $value);
    }

    /**
     * Sets the sha256 property value. The sha256 property
     * @param string|null $value Value to set for the sha256 property.
    */
    public function setSha256(?string $value): void {
        $this->getBackingStore()->set('sha256', $value);
    }

    /**
     * Sets the sourceLocationType property value. The sourceLocationType property
     * @param string|null $value Value to set for the sourceLocationType property.
    */
    public function setSourceLocationType(?string $value): void {
        $this->getBackingStore()->set('sourceLocationType', $value);
    }

    /**
     * Sets the targetDomain property value. The targetDomain property
     * @param string|null $value Value to set for the targetDomain property.
    */
    public function setTargetDomain(?string $value): void {
        $this->getBackingStore()->set('targetDomain', $value);
    }

    /**
     * Sets the targetFilePath property value. The targetFilePath property
     * @param string|null $value Value to set for the targetFilePath property.
    */
    public function setTargetFilePath(?string $value): void {
        $this->getBackingStore()->set('targetFilePath', $value);
    }

    /**
     * Sets the targetPrinterName property value. The targetPrinterName property
     * @param string|null $value Value to set for the targetPrinterName property.
    */
    public function setTargetPrinterName(?string $value): void {
        $this->getBackingStore()->set('targetPrinterName', $value);
    }

    /**
     * Sets the targetUrl property value. The targetUrl property
     * @param string|null $value Value to set for the targetUrl property.
    */
    public function setTargetUrl(?string $value): void {
        $this->getBackingStore()->set('targetUrl', $value);
    }

}
